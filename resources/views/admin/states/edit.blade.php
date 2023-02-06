@extends('core::layouts.admin')


@section("meta_tags")
    <code>{{ __("Create Role") }}</code>
    <meta code="description" content="Create Role and Manage Role Details">
    <meta code="keywords" content="role,role_create">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        {{ __('Create Role') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.states.update", $state->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label class="required" for="name">{{ __('Name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $state->name) }}" >
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label class="required" for="code">{{ __('Code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $state->code) }}" >
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="map_image" class="form-label">Map Image</label>
                <input class="form-control" type="file" id="map_image" name="map_image">
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



