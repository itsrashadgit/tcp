@extends('core::layouts.admin')


@section("meta_tags")
<title>{{ __("City List") }}</title>
    <meta name="description" content="City List and Manage City Details">
    <meta name="keywords" content="City,City">
@endsection

@section('content')

<div class="card">
    <div class="card-header border-0">
        {{ __('City List') }}
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ __('ID') }}
                        </th>
                        <th>
                            {{ __('City') }}
                        </th>
                        <th>
                            {{ __('County') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cities as $key => $city)
                        <tr data-entry-id="{{ $city->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $city->id ?? '' }}
                            </td>

                            <td>
                                {{ $city->city ?? '' }}
                            </td>
                            <td>
                                {{ $city->county ?? '' }}
                            </td>

                            <td>
                                {{-- <a class="btn btn-sm btn-primary mb-2" href="{{ route('admin.cities.show', $city->id) }}">
                                    {{ __('View') }}
                                </a> --}}
                                <a class="btn btn-sm btn-info mb-2" href="{{ route('admin.cities.edit', $city->id) }}">
                                    {{ __('Edit') }}
                                </a>
                                {{-- <x-core-delete-dialog :id="$city->id" :action="route('admin.cities.destroy', $city->id)"></x-core-delete-dialog> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $cities->links() }}
        </div>
    </div>
</div>

@endsection

