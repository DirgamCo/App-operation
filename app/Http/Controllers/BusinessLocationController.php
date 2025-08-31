<?php

namespace App\Http\Controllers;

use App\Account;
use App\BusinessLocation;
use App\InvoiceLayout;
use App\InvoiceScheme;
use App\Location;
use App\SellingPriceGroup;
use App\Utils\ModuleUtil;
use App\Utils\Util;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class BusinessLocationController extends Controller
{
    protected $moduleUtil;

    protected $commonUtil;

    /**
     * Constructor
     *
     * @param  ModuleUtil  $moduleUtil
     * @return void
     */
    public function __construct(ModuleUtil $moduleUtil, Util $commonUtil)
    {
        $this->moduleUtil = $moduleUtil;
        $this->commonUtil = $commonUtil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $business_id = request()->session()->get('user.business_id');

            $query = BusinessLocation::with(['location', 'location.city']) // Eager load 'location' and 'location.city'
                ->where('business_locations.business_id', $business_id)
                ->leftJoin('invoice_schemes as ic', 'business_locations.invoice_scheme_id', '=', 'ic.id')
                ->leftJoin('invoice_layouts as il', 'business_locations.invoice_layout_id', '=', 'il.id')
                ->leftJoin('invoice_layouts as sil', 'business_locations.sale_invoice_layout_id', '=', 'sil.id')
                ->leftJoin('selling_price_groups as spg', 'business_locations.selling_price_group_id', '=', 'spg.id')
                ->select([
                    'business_locations.*',
                    'spg.name as price_group',
                    'ic.name as invoice_scheme',
                    'il.name as invoice_layout',
                    'sil.name as sale_invoice_layout',
                ]);

            // Apply permitted locations
            $permitted_locations = auth()->user()->permitted_locations();
            if ($permitted_locations != 'all') {
                $query->whereIn('business_locations.id', $permitted_locations);
            }

            $data = $query->get(); // Get the results as Eloquent models

            return datatables()->of($data)
                ->addColumn('location_name', fn($row) => optional($row->location)->name ?? '')
                ->addColumn('location_city_name', fn($row) => optional(optional($row->location)->city)->name ?? '')
                ->addColumn('price_group', fn($row) => $row->price_group ?? '')
                ->addColumn('invoice_scheme', fn($row) => $row->invoice_scheme ?? '')
                ->addColumn('invoice_layout', fn($row) => $row->invoice_layout ?? '')
                ->addColumn('sale_invoice_layout', fn($row) => $row->sale_invoice_layout ?? '')
                ->addColumn('action', function ($row) {
                    $editUrl = action([\App\Http\Controllers\BusinessLocationController::class, 'edit'], [$row->id]);
                    $settingsUrl = route('location.settings', [$row->id]);
                    $toggleUrl = action([\App\Http\Controllers\BusinessLocationController::class, 'activateDeactivateLocation'], [$row->id]);

                    $activateText = $row->is_active ? __('lang_v1.deactivate_location') : __('lang_v1.activate_location');
                    $activateClass = $row->is_active ? 'tw-dw-btn-error' : 'tw-dw-btn-accent';

                    return '
                        <button type="button" data-href="' . $editUrl . '" class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-primary btn-modal" data-container=".location_edit_modal">
                            <i class="glyphicon glyphicon-edit"></i> ' . __('messages.edit') . '
                        </button>
                        <a href="' . $settingsUrl . '" class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline  tw-dw-btn-accent">
                            <i class="fa fa-wrench"></i> ' . __('messages.settings') . '
                        </a>
                        <button type="button" data-href="' . $toggleUrl . '" class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline activate-deactivate-location ' . $activateClass . ' tw-w-max">
                            <i class="fa fa-power-off"></i> ' . $activateText . '
                        </button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('business_location.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');

        //Check if subscribed or not, then check for location quota
        if (! $this->moduleUtil->isSubscribed($business_id)) {
            return $this->moduleUtil->expiredResponse();
        } elseif (! $this->moduleUtil->isQuotaAvailable('locations', $business_id)) {
            return $this->moduleUtil->quotaExpiredResponse('locations', $business_id);
        }

        $invoice_layouts = InvoiceLayout::where('business_id', $business_id)
            ->get()
            ->pluck('name', 'id');

        $invoice_schemes = InvoiceScheme::where('business_id', $business_id)
            ->get()
            ->pluck('name', 'id');

        $price_groups = SellingPriceGroup::forDropdown($business_id);

        $payment_types = $this->commonUtil->payment_types(null, false, $business_id);

        //Accounts
        $accounts = [];
        if ($this->commonUtil->isModuleEnabled('account')) {
            $accounts = Account::forDropdown($business_id, true, false);
        }

        $locations = Location::pluck('name', 'id');

        return view('business_location.create')
            ->with(compact(
                'invoice_layouts',
                'invoice_schemes',
                'price_groups',
                'payment_types',
                'accounts',
                'locations'
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'location_id_id'            => 'required|numeric|exists:locations,id'
        ]);

        try {
            $business_id = $request->session()->get('user.business_id');

            //Check if subscribed or not, then check for location quota
            if (! $this->moduleUtil->isSubscribed($business_id)) {
                return $this->moduleUtil->expiredResponse();
            } elseif (! $this->moduleUtil->isQuotaAvailable('locations', $business_id)) {
                return $this->moduleUtil->quotaExpiredResponse('locations', $business_id);
            }

            $input = $request->only([
                'name',
                'landmark',
                'city',
                'state',
                'country',
                'zip_code',
                'invoice_scheme_id',
                'invoice_layout_id',
                'mobile',
                'alternate_number',
                'email',
                'website',
                'custom_field1',
                'custom_field2',
                'custom_field3',
                'custom_field4',
                'location_id',
                'selling_price_group_id',
                'default_payment_accounts',
                'featured_products',
                'sale_invoice_layout_id',
                'sale_invoice_scheme_id',
                'location_id_id'
            ]);

            $input['business_id'] = $business_id;
            // $input['location']

            $input['default_payment_accounts'] = ! empty($input['default_payment_accounts']) ? json_encode($input['default_payment_accounts']) : null;

            //Update reference count
            $ref_count = $this->moduleUtil->setAndGetReferenceCount('business_location');

            if (empty($input['location_id'])) {
                $input['location_id'] = $this->moduleUtil->generateReferenceNumber('business_location', $ref_count);
            }

            $location = BusinessLocation::create($input);

            //Create a new permission related to the created location
            Permission::create(['name' => 'location.' . $location->id]);

            $output = [
                'success' => true,
                'msg' => __('business.business_location_added_success'),
            ];
        } catch (\Exception $e) {
            \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }

        return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreFront  $storeFront
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreFront  $storeFront
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        $locations =
            $business_id = request()->session()->get('user.business_id');
        $location = BusinessLocation::where('business_id', $business_id)
            ->find($id);
        $invoice_layouts = InvoiceLayout::where('business_id', $business_id)
            ->get()
            ->pluck('name', 'id');
        $invoice_schemes = InvoiceScheme::where('business_id', $business_id)
            ->get()
            ->pluck('name', 'id');

        $price_groups = SellingPriceGroup::forDropdown($business_id);

        $payment_types = $this->commonUtil->payment_types(null, false, $business_id);

        //Accounts
        $accounts = [];
        if ($this->commonUtil->isModuleEnabled('account')) {
            $accounts = Account::forDropdown($business_id, true, false);
        }
        $featured_products = $location->getFeaturedProducts(true, false);

        $locations = Location::pluck('name', 'id');

        return view('business_location.edit')
            ->with(compact(
                'location',
                'invoice_layouts',
                'invoice_schemes',
                'price_groups',
                'payment_types',
                'accounts',
                'featured_products',
                'locations'
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreFront  $storeFront
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'location_id_id'            =>'required|exists:locations,id'
        ]);

        try {
            $input = $request->only([
                'name',
                'landmark',
                'city',
                'state',
                'country',
                'zip_code',
                'invoice_scheme_id',
                'invoice_layout_id',
                'mobile',
                'alternate_number',
                'email',
                'website',
                'custom_field1',
                'custom_field2',
                'custom_field3',
                'custom_field4',
                'location_id',
                'selling_price_group_id',
                'default_payment_accounts',
                'featured_products',
                'sale_invoice_layout_id',
                'sale_invoice_scheme_id',
                'location_id_id'
            ]);

            $business_id = $request->session()->get('user.business_id');

            $input['default_payment_accounts'] = ! empty($input['default_payment_accounts']) ? json_encode($input['default_payment_accounts']) : null;

            $input['featured_products'] = ! empty($input['featured_products']) ? json_encode($input['featured_products']) : null;

            BusinessLocation::where('business_id', $business_id)
                ->where('id', $id)
                ->update($input);

            $output = [
                'success' => true,
                'msg' => __('business.business_location_updated_success'),
            ];
        } catch (\Exception $e) {
            \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }

        return $output;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreFront  $storeFront
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Checks if the given location id already exist for the current business.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkLocationId(Request $request)
    {
        $location_id = $request->input('location_id');

        $valid = 'true';
        if (! empty($location_id)) {
            $business_id = $request->session()->get('user.business_id');
            $hidden_id = $request->input('hidden_id');

            $query = BusinessLocation::where('business_id', $business_id)
                ->where('location_id', $location_id);
            if (! empty($hidden_id)) {
                $query->where('id', '!=', $hidden_id);
            }
            $count = $query->count();
            if ($count > 0) {
                $valid = 'false';
            }
        }
        echo $valid;
        exit;
    }

    /**
     * Function to activate or deactivate a location.
     *
     * @param  int  $location_id
     * @return json
     */
    public function activateDeactivateLocation($location_id)
    {
        if (! auth()->user()->can('business_settings.access')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            $business_id = request()->session()->get('user.business_id');

            $business_location = BusinessLocation::where('business_id', $business_id)
                ->findOrFail($location_id);

            $business_location->is_active = ! $business_location->is_active;
            $business_location->save();

            $msg = $business_location->is_active ? __('lang_v1.business_location_activated_successfully') : __('lang_v1.business_location_deactivated_successfully');

            $output = [
                'success' => true,
                'msg' => $msg,
            ];
        } catch (\Exception $e) {
            \Log::emergency('File:' . $e->getFile() . 'Line:' . $e->getLine() . 'Message:' . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong'),
            ];
        }

        return $output;
    }
}
