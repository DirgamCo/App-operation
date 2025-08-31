@extends('layouts.app')
@section('title', __('Cities'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">@lang('Cities')
        </h1>
    </section>
    <div style="margin:10px " role="document">
        <div class="modal-content">

            <form action="{{ route('admin.cities.store') }}" method="post">
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

                    {{-- <div class="form-group">
                    {!! Form::label('account_number', __( 'account.account_number' ) .":*") !!}
                    {!! Form::text('account_number', null, ['class' => 'form-control', 'required','placeholder' => __( 'account.account_number' ) ]); !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('account_type_id', __( 'account.account_type' ) .":") !!}
                    <select name="account_type_id" class="form-control select2">\
                        <option>@lang('messages.please_select')</option>
                        @foreach ($account_types as $account_type)
                            <optgroup label="{{$account_type->name}}">
                                <option value="{{$account_type->id}}">{{$account_type->name}}</option>
                                @foreach ($account_type->sub_types as $sub_type)
                                    <option value="{{$sub_type->id}}">{{$sub_type->name}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div> --}}
                    <div class="modal-footer"> 
                        <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white">@lang('messages.save')</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
