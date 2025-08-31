@extends('layouts.app')
@section('title', __('lang_v1.items_report'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">{{ __('lang_v1.items_report') }}</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @component('components.filters', ['title' => __('report.filters')])
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('ir_supplier_id', __('purchase.supplier') . ':') !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                {!! Form::select('ir_supplier_id', $suppliers, null, [
                                    'class' => 'form-control select2',
                                    'style' => 'width:100%',
                                    'placeholder' => __('lang_v1.all'),
                                ]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('ir_purchase_date_filter', __('purchase.purchase_date') . ':') !!}
                            {!! Form::text('ir_purchase_date_filter', null, [
                                'placeholder' => __('lang_v1.select_a_date_range'),
                                'class' => 'form-control',
                                'readonly',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('ir_customer_id', __('contact.customer') . ':') !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                {!! Form::select('ir_customer_id', $customers, null, [
                                    'class' => 'form-control select2',
                                    'style' => 'width:100%',
                                    'placeholder' => __('lang_v1.all'),
                                ]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('ir_sale_date_filter', __('lang_v1.sell_date') . ':') !!}
                            {!! Form::text('ir_sale_date_filter', null, [
                                'placeholder' => __('lang_v1.select_a_date_range'),
                                'class' => 'form-control',
                                'readonly',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('ir_location_id', __('purchase.business_location') . ':') !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </span>
                                {!! Form::select('ir_location_id', $business_locations, null, [
                                    'class' => 'form-control select2',
                                    'style' => 'width:100%',
                                    'placeholder' => __('messages.please_select'),
                                    'required',
                                ]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('loca_id', __('Locations') . ':') !!}
                            {!! Form::select('loca_id', $locations, null, [
                                'placeholder' => __('messages.all'),
                                'class' => 'form-control select2',
                                'style' => 'width:100%',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('city_ida', __('City') . ':') !!}
                            {!! Form::select('city_ida', $cities, null, [
                                'placeholder' => __('messages.all'),
                                'class' => 'form-control select2',
                                'style' => 'width:100%',
                            ]) !!}
                        </div>
                    </div>
                    @if (Module::has('Manufacturing'))
                        <div class="col-md-3">
                            <div class="form-group">
                                <br>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('only_mfg', 1, false, ['class' => 'input-icheck', 'id' => 'only_mfg_products']) !!} {{ __('manufacturing::lang.only_mfg_products') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @component('components.widget', ['class' => 'box-primary'])
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="items_report_table">
                            <thead>
                                <tr>
                                    <th>@lang('sale.product')</th>
                                    <th>@lang('product.sku')</th>
                                    <th>@lang('lang_v1.description')</th>
                                    <th>@lang('purchase.purchase_date')</th>
                                    <th>@lang('lang_v1.purchase')</th>
                                    <th>@lang('lang_v1.lot_number')</th>
                                    <th>@lang('purchase.supplier')</th>
                                    <th>@lang('lang_v1.purchase_price')</th>
                                    <th>@lang('lang_v1.sell_date')</th>
                                    <th>@lang('business.sale')</th>
                                    <th>@lang('contact.customer')</th>
                                    <th>@lang('sale.location')</th>
                                    <th>{{ __('City') }}</th>
                                    <th>{{ __('Location') }}</th>
                                    <th>@lang('lang_v1.sell_quantity')</th>
                                    <th>@lang('lang_v1.selling_price')</th>
                                    <th>@lang('sale.subtotal')</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="bg-gray font-17 text-center footer-total">
                                    <td colspan="7"><strong>@lang('sale.total'):</strong></td>
                                    <td id="footer_total_pp" class="display_currency" data-currency_symbol="true"></td>
                                    <td colspan="4"></td>
                                    <td id="footer_total_qty"></td>
                                    <td id="footer_total_sp" class="display_currency" data-currency_symbol="true"></td>
                                    <td id="footer_total_subtotal" class="display_currency" data-currency_symbol="true"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endcomponent
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="modal fade view_register" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>

@endsection

@section('javascript')
    <script>
        $(document).ready(function() {

            if ($('#ir_purchase_date_filter').length == 1) {
                $('#ir_purchase_date_filter').daterangepicker(dateRangeSettings, function(start, end) {
                    $('#ir_purchase_date_filter').val(
                        start.format(moment_date_format) + ' ~ ' + end.format(moment_date_format)
                    );
                    items_report_table.ajax.reload();
                });
                $('#ir_purchase_date_filter').on('cancel.daterangepicker', function(ev, picker) {
                    $('#ir_purchase_date_filter').val('');
                    items_report_table.ajax.reload();
                });
            }
            if ($('#ir_sale_date_filter').length == 1) {
                $('#ir_sale_date_filter').daterangepicker(dateRangeSettings, function(start, end) {
                    $('#ir_sale_date_filter').val(
                        start.format(moment_date_format) + ' ~ ' + end.format(moment_date_format)
                    );
                    items_report_table.ajax.reload();
                });
                $('#ir_sale_date_filter').on('cancel.daterangepicker', function(ev, picker) {
                    $('#ir_sale_date_filter').val('');
                    items_report_table.ajax.reload();
                });
            }
            items_report_table = $('#items_report_table').DataTable({
                processing: true,
                serverSide: true,
                fixedHeader: false,
                ajax: {
                    url: '/reports/items-report',
                    data: function(d) {
                        var purchase_start = '';
                        var purchase_end = '';
                        if ($('#ir_purchase_date_filter').val()) {
                            purchase_start = $('input#ir_purchase_date_filter')
                                .data('daterangepicker')
                                .startDate.format('YYYY-MM-DD');
                            purchase_end = $('input#ir_purchase_date_filter')
                                .data('daterangepicker')
                                .endDate.format('YYYY-MM-DD');
                        }

                        var sale_start = '';
                        var sale_end = '';
                        if ($('#ir_sale_date_filter').val()) {
                            sale_start = $('input#ir_sale_date_filter')
                                .data('daterangepicker')
                                .startDate.format('YYYY-MM-DD');
                            sale_end = $('input#ir_sale_date_filter')
                                .data('daterangepicker')
                                .endDate.format('YYYY-MM-DD');
                        }

                        d.purchase_start = purchase_start;
                        d.purchase_end = purchase_end;

                        d.sale_start = sale_start;
                        d.sale_end = sale_end;

                        d.supplier_id = $('select#ir_supplier_id').val();
                        d.customer_id = $('select#ir_customer_id').val();
                        d.location_id = $('select#ir_location_id').val();
                        d.loc_id = $('#loca_id').val();
                        d.city_id = $('#city_ida').val();
                        d.only_mfg_products = $('#only_mfg_products').length && $('#only_mfg_products')
                            .is(
                                ':checked') ? 1 : 0;
                    },
                },
                columns: [{
                        data: 'product_name',
                        name: 'p.name'
                    },
                    {
                        data: 'sku',
                        name: 'v.sub_sku'
                    },
                    {
                        data: 'sell_line_note',
                        name: 'SL.sell_line_note'
                    },
                    {
                        data: 'purchase_date',
                        name: 'purchase.transaction_date'
                    },
                    {
                        data: 'purchase_ref_no',
                        name: 'purchase.ref_no'
                    },
                    {
                        data: 'lot_number',
                        name: 'PL.lot_number'
                    },
                    {
                        data: 'supplier',
                        name: 'suppliers.name'
                    },
                    {
                        data: 'purchase_price',
                        name: 'PL.purchase_price_inc_tax'
                    },
                    {
                        data: 'sell_date',
                        searchable: false
                    },
                    {
                        data: 'sale_invoice_no',
                        name: 'sale_invoice_no'
                    },
                    {
                        data: 'customer',
                        searchable: false
                    },
                    {
                        data: 'location',
                        name: 'bl.name'
                    },
                    {
                        data: 'city_name'
                    },
                    {
                        data: 'loc_name'
                    },
                    {
                        data: 'quantity',
                        searchable: false
                    },
                    {
                        data: 'selling_price',
                        searchable: false
                    },
                    {
                        data: 'subtotal',
                        searchable: false
                    }
                ],
                fnDrawCallback: function(oSettings) {
                    $('#footer_total_pp').html(sum_table_col($('#items_report_table'),
                        'purchase_price'));
                    $('#footer_total_sp').html(sum_table_col($('#items_report_table'),
                        'row_selling_price'));
                    $('#footer_total_subtotal').html(
                        sum_table_col($('#items_report_table'), 'row_subtotal')
                    );
                    $('#footer_total_qty').html(
                        __sum_stock($('#items_report_table'), 'quantity')
                    );

                    __currency_convert_recursively($('#items_report_table'));
                },
            });
            $(document).on('change', '#loc_id,#city_id,#ir_supplier_id, #ir_customer_id, #ir_location_id',
            function() {
                items_report_table.ajax.reload();
            });

            expense_report_table = $('#expense_report_table').DataTable();

            if ($('#closing_stock_by_pp').length == 1) {
                get_stock_value();
            }

            if ($('#tax_report_date_range').length == 1) {
                updateTaxReport();
            }

            $('#tax_report_location_id, #tax_report_date_range, #tax_report_contact_id').change(function() {
                updateTaxReport();
            });
        });
    </script>
    <script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>
@endsection
