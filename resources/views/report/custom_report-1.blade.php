@extends('layouts.app')
@section('title', __('report.area_sales_report'))

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">{{ __('report.area_sales_report')}}</h1>
</section>


<!-- Main content -->  

<section class="content">
        <div class="row no-print">
        {{-- <div class="col-md-2 col-xs-6">
            <div class="form-group pull-left">
                <div class="input-group">
                  <button type="button" class="tw-dw-btn tw-dw-btn-primary tw-text-white tw-dw-btn-sm" id="custom_report_date_filter">
                    <span>
                      <i class="fa fa-calendar"></i> {{ __('messages.filter_by_date') }}
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
            </div>
        </div> --}}
    </div>
    <br /> <br />
    {{-- <div class=" tw-transition-all lg:tw-col-span-1 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md tw-ring-gray-200">
        <div class="tw-p-4 sm:tw-p-5">
            <div class="tw-flow-root tw-mt-5 tw-border-b tw-border-gray-200">
                <div class="tw-mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                    <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                        <table class="table table-bordered table-striped" id="">
                            <thead>
                                <tr>
                                    <th>{{ __('lang_v1.area') }}</th>
                                    <th>{{ __('purchase.business_location') }}</th>
                                    <th>{{ __('sale.sale') }}</th>
                                    <th>{{ __('sale.discount') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($locations as $location)
                                    @foreach($location->businessLocations as $bl)
                                        <tr>
                                        <td>{{ $location->name }}</td>
                                        <td>{{ $bl->name }}</td>
                                        <td>{{ !empty ($bl->total_sell['total_sell_exc_tax']) ? number_format($bl->total_sell['total_sell_exc_tax']) : 0 }}</td>
                                        <td>{{ !empty ($bl->total_discount) ? number_format($bl->total_discount) : 0 }}</td>
                                    </tr>
                                    @endforeach
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted">
                                            {{ __('No Cities Found') }}
                                        </td>
                                    </tr>
                                    @endforelse
                                        {{ $locations->links() }}
                                </tbody>
                        </table>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

       <div class="row">
            <div class="col-md-12">
                @component('components.widget', ['class' => 'box-primary'])
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="custom_report_table">
                            <thead>
                                <tr>
                                    <th>{{ __('lang_v1.area') }}</th>
                                    <th>{{ __('purchase.business_location') }}</th>
                                    <th>{{ __('sale.sale') }}</th>
                                    <th>{{ __('sale.discount') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="bg-gray font-17 footer-total text-center">
                                    <td colspan="4"><strong>@lang('sale.total'):</strong></td>
                                    <td><span class="display_currency" id="footer_total_amount"
                                            data-currency_symbol ="true"></span></td>
                                    <td colspan="4"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endcomponent
            </div>
        </div>
    
</section>

@stop
@section('javascript')
<script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>
@endsection