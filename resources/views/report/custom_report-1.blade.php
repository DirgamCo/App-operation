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
            <div class="col-md-3 col-md-offset-7 col-xs-6">
            <div class="input-group">
                <span class="input-group-addon bg-light-blue"><i class="fa fa-map-marker"></i></span>
                 <select class="form-control select2" id="custom_report_location_filter">
                    @foreach($all_locations as $key => $value)
                        <option value="{{ $key }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2 col-xs-6">
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
        </div>
    </div>
    <br /> <br />
    <div class=" tw-transition-all lg:tw-col-span-1 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md tw-ring-gray-200">
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
                            <tbody id="custom_report_table_body"> </tbody>
                        </table>
                        <div class="bg-gray font-17 text-right p-10">
                            <span class="text-left"><strong>@lang('sale.total'):</strong></span>
                            <span class="p-10" id="total_sales"></span>
                            <span class="p-15" id="total_discount"></span>
                        </div>
                        
                        
                        <br />
                        {{-- Pagination links --}}
                        <div id="pagination_links"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@stop
@section('javascript')
<script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>
@endsection