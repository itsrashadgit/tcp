@extends('layouts.app')

@section("meta_tags")
    <x-website-meta-tags></x-website-meta-tags>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 mx-auto ">

            <div class="card rounded my-5 border-0" v-cloak>

                <div class="card-body p-4">

                    <h2 class="mb-4">{{ __("Register") }}</h2>
                    <form action="{{ route('api.register') }}" method="post" @submit.prevent="submitForm">

                        @csrf

                        <div class="mb-3">
                            <label class="required" for="state">{{ __('State') }}</label>
                            <select name="state" id="state" class="form-select form-round" :class="{ 'is-invalid': errors.state }" v-model="form.state">
                                <option value="">{{ __("Select State") }}</option>
                                @foreach (\App\Models\State::all() as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">@{{ errors.state }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="trade_role" class="required">{{ __('Are you') }}</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="customer" value="customer" v-model="form.role">
                                    <label class="form-check-label" for="customer">{{ __("Customer") }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="vendor" value="vendor" v-model="form.role">
                                    <label class="form-check-label" for="vendor">{{ __("Vendor") }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="name">{{ __('Name') }}</label>
                            <input class="form-control form-round" type="text" name="name" id="name"
                                :class="{ 'is-invalid': errors.name }" v-model="form.name">
                            <div class="invalid-feedback">@{{ errors.name }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="email">{{ __('Email') }}</label>
                            <input class="form-control form-round" type="email" name="email" id="email"
                                :class="{ 'is-invalid': errors.email }" v-model="form.email">
                            <div class="invalid-feedback">@{{ errors.email }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="phone">{{ __('Mobile No.') }}</label>
                            <input class="form-control form-round" type="text" name="phone" id="phone"
                                :class="{ 'is-invalid': errors.phone }" v-model="form.phone">
                            <div class="invalid-feedback">@{{ errors.phone }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="password">{{ __('Password') }}</label>
                            <input class="form-control form-round " type="password" name="password" id="password"
                                autocomplete="new-password" :class="{ 'is-invalid': errors.password }"
                                v-model="form.password">
                            <div class="invalid-feedback">@{{ errors.password }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required"
                                for="password_confirmation">{{ __('Password Confirmation') }}</label>
                            <input class="form-control form-round" type="password" name="password_confirmation"
                                id="password_confirmation" :class="{ 'is-invalid': errors.password_confirmation }"
                                v-model="form.password_confirmation">
                            <div class="invalid-feedback">@{{ errors.password_confirmation }}</div>
                        </div>

                        <div class="text text-success mb-3" v-if="response">@{{ response }}</div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary" :disabled="registering">
                                <i v-if="registering" class="fas fa-spinner fa-spin"></i>
                                <span>{{ __('Register') }}</span>
                            </button>
                            <a href="{{ route('login') }}">{{ __('Back to Login') }}</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            form: {
                state: '',
                role: "customer",
                name: '',
                email: '',
                phone: '',
                password: '',
                password_confirmation: '',
            },
            errors: {},
            registering: false,
            response: null
        }

        vmethods = {
            ...vmethods,
            async submitForm() {

                try {

                    this.registering = true;
                    this.errors = {};
                    this.response = "";
                    const res = await axios.post("{{ route('api.register') }}", this.form);
                    this.response = res.data.message;
                    this.registering = false;
                    toastr.success("Registration Successful!");

                } catch (e) {

                    if (e.response && e.response.status == 422) {
                        for (const [key, value] of Object.entries(e.response.data.errors)) {
                            this.errors[key] = value[0];
                        }
                    } else {
                        toastr.error("Something Wen't Wrong!");
                    }

                    this.registering = false;

                }

            }
        }

        vcreated = {
            ...vcreated
            // function key: function(){}
        }

        vmounted = {
            ...vmounted,
            // function key: function(){}
        }
    </script>
@endpush
