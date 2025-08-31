@extends('layouts.app')
@section('title', __('Areas'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">@lang('Areas')
        </h1>
    </section>
    <div style="margin:10px " role="document">
        <div class="modal-content">

            <form action="{{ route('admin.locations.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('name', __('lang_v1.name') . ':*') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', '', 'placeholder' => __('lang_v1.name')]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', __('lang_v1.description') . ':*') !!}
                        {!! Form::text('description', null, [
                            'class' => 'form-control',
                            '',
                            'placeholder' => __('lang_v1.description'),
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('city_id', __('Choose A City') . ':') !!}
                        <select name="city_id" class="form-control select2">
                            <option>@lang('messages.please_select')</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white">@lang('messages.save')</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
