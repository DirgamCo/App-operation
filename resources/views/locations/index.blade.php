@extends('layouts.app')
@section('title', __('Areas'))

@section('content')

    <section class="content-header">
        <h1 class="tw-text-xl md:tw-text-3xl tw-font-bold tw-text-black">@lang('Areas')
        </h1>
    </section>

    <section class="content">
        <div
            class=" tw-transition-all lg:tw-col-span-1 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md  tw-ring-gray-200">
            <div class="tw-p-4 sm:tw-p-5">
                <div class="tw-flex tw-gap-2.5 tw-justify-end">
                    <a href="{{ route('admin.locations.create') }}" class="tw-dw-btn tw-bg-gradient-to-r tw-from-indigo-600 tw-to-blue-500 tw-font-bold tw-text-white tw-border-none tw-rounded-full pull-right">{{ __('Create') }}</a>
                </div>
                <div class="tw-flow-root tw-mt-5 tw-border-b tw-border-gray-200">
                    <div class="tw-mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                            <table class="table table-bordered table-striped" id="">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        <th>{{ __('City Name') }}</th>
                                        <th>{{ __('Business Locations Count') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($locations as $location)
                                        <tr>
                                            <td>{{ $location->name }}</td>
                                            <td>{{ $location->description }}</td>
                                            <td>{{ $location->city->name }}</td>
                                            <td>{{ $location->business_locations_count }}</td>
                                            <td>
                                                <a href="{{ route('admin.locations.edit', $location->id) }}"
                                                    class="btn btn-xs btn-primary">
                                                    <i class="fa fa-edit"></i> {{ __('Edit') }}
                                                </a>

                                                <form action="{{ route('admin.locations.destroy', $location->id) }}" method="POST"
                                                    style="display:inline-block;"
                                                    onsubmit="return confirm('{{ __('Are you sure you want to delete this location?') }}');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash"></i> {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                {{ __('No Areas Found') }}
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
        </div>


        <div class="modal fade discount_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        </div>

    </section>
    <!-- /.content -->
@endsection
