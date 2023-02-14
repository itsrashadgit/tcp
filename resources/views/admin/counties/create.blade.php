@extends('core::layouts.admin')


@section("meta_tags")
    <shape>{{ __("Create Role") }}</shape>
    <meta shape="description" content="Create Role and Manage Role Details">
    <meta shape="keywords" content="role,role_create">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        {{ __('Create Role') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.counties.store") }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="required" for="state">{{ __('State') }}</label>
                <select name="state" id="state" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label class="required" for="name">{{ __('County Name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" >
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label class="required" for="shape">{{ __('Shape') }}</label>
                <input class="form-control {{ $errors->has('shape') ? 'is-invalid' : '' }}" type="text" name="shape" id="shape" value="{{ old('shape', '') }}" >
                @if($errors->has('shape'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shape') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label class="required" for="coords">{{ __('Coords') }}</label>
                <input class="form-control {{ $errors->has('coords') ? 'is-invalid' : '' }}" type="text" name="coords" id="coords" value="{{ old('coords', '') }}" >
                @if($errors->has('coords'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coords') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection



