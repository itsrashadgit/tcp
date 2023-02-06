@extends('core::layouts.admin')


@section("meta_tags")
<title>{{ __("State List") }}</title>
    <meta name="description" content="State List and Manage State Details">
    <meta name="keywords" content="State,State">
@endsection

@section('content')

<div class="card">
    <div class="card-header border-0">
        {{ __('State List') }}
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ __('Serial') }}
                        </th>
                        <th>
                            {{ __('Name') }}
                        </th>
                        <th>
                            {{ __('Code') }}
                        </th>
                        <th>
                            {{ __('Image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($states as $key => $state)
                        <tr data-entry-id="{{ $state->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                            <td>
                                {{ $state->name ?? '' }}
                            </td>
                            <td>
                                {{ $state->code ?? '' }}
                            </td>
                            <td>
                                <img src="{{ asset("uploads/images/$state->image") }}" alt="" width="60">
                            </td>
                            <td>
                                {{-- <a class="btn btn-sm btn-primary mb-2" href="{{ route('admin.states.show', $state->id) }}">
                                    {{ __('View') }}
                                </a> --}}
                                <a class="btn btn-sm btn-info mb-2" href="{{ route('admin.states.edit', $state->id) }}">
                                    {{ __('Edit') }}
                                </a>
                                {{-- <x-core-delete-dialog :id="$state->id" :action="route('admin.states.destroy', $state->id)"></x-core-delete-dialog> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

