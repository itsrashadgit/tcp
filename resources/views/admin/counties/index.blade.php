@extends('core::layouts.admin')


@section("meta_tags")
<title>{{ __("County List") }}</title>
    <meta name="description" content="County List and Manage County Details">
    <meta name="keywords" content="County,County">
@endsection

@section('content')

<div class="mb-3">
    <a href="{{ route("admin.counties.create") }}" class="btn btn-primary">
        Create County
    </a>
</div>

<div class="card">
    <div class="card-header border-0">
        {{ __('County List') }}
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
                            {{ __('County') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($counties as $key => $county)
                        <tr data-entry-id="{{ $county->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $county->id ?? '' }}
                            </td>

                            <td>
                                {{ $county->name ?? '' }}
                            </td>

                            <td>
                                {{-- <a class="btn btn-sm btn-primary mb-2" href="{{ route('admin.cities.show', $county->id) }}">
                                    {{ __('View') }}
                                </a> --}}
                                <a class="btn btn-sm btn-info mb-2" href="{{ route('admin.counties.edit', $county->id) }}">
                                    {{ __('Edit') }}
                                </a>
                                {{-- <x-core-delete-dialog :id="$county->id" :action="route('admin.cities.destroy', $county->id)"></x-core-delete-dialog> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $counties->links() }}
        </div>
    </div>
</div>

@endsection


