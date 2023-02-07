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
                            <label class="required" for="country">{{ __('Country') }}</label>
                            <select name="country" id="country" class="form-select form-round" :class="{ 'is-invalid': errors.country }" v-model="form.country">
                                <option value="">{{ __("Select Country") }}</option>
                                @foreach (\SalimHosen\Core\Models\Country::all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">@{{ errors.country }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="trade_role" class="required">{{ __('Are you') }}</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="buyer" value="buyer" v-model="form.role">
                                    <label class="form-check-label" for="buyer">{{ __("Buyer") }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="supplier" value="supplier" v-model="form.role">
                                    <label class="form-check-label" for="supplier">{{ __("Supplier") }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="both" value="both" v-model="form.role">
                                    <label class="form-check-label" for="both">{{ __("Both") }}</label>
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

                        <div class="mb-3 mb-3">
                            <label class="required" for="business_type">{{ __("Business Type") }}</label>
                            <select name="business_type" class="form-select form-round" id="business_type" :class="{ 'is-invalid': errors.business_type }" v-model="form.business_type">
                                <option value="">{{ __("Select Business Type") }}</option>
                                <option value="Factory">{{ __("Factory") }}</option>
                                <option value="Wholesaler">{{ __("Wholesaler") }}</option>
                                <option value="Trading Company">{{ __("Trading Company") }}</option>
                            </select>
                            <div v-cloak class="invalid-feedback">@{{ errors.business_type }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="commercial_registration_number">{{ __('Commercial Registration Number') }}</label>
                            <input class="form-control form-round" type="text" name="commercial_registration_number" id="commercial_registration_number"
                                :class="{ 'is-invalid': errors.commercial_registration_number }" v-model="form.commercial_registration_number">
                            <div class="invalid-feedback">@{{ errors.commercial_registration_number }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="required" for="tax_number">{{ __('Tax Number') }}</label>
                            <input class="form-control form-round" type="text" name="tax_number" id="tax_number"
                                :class="{ 'is-invalid': errors.tax_number }" v-model="form.tax_number">
                            <div class="invalid-feedback">@{{ errors.tax_number }}</div>
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
                country: '',
                role: "buyer",
                name: '',
                email: '',
                phone: '',
                password: '',
                password_confirmation: '',
                business_type: '',
                tax_number: '',
                commercial_registration_number: ''
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
