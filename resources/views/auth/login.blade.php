@extends('layouts.app')

@section("meta_tags")
    <x-website-meta-tags></x-website-meta-tags>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">

            <div class="card my-5 rounded border-0" v-cloak>


                <div class="card-body p-4">

                    <h5 class="mb-4 ember-bold">{{ __("Login") }}</h5>


                    <form action="{{ route('login') }}" method="post" @submit.prevent="submitForm">

                        @csrf

                        <div class="mb-4">
                            <label class="required" for="email">{{ __('Email') }}</label>
                            <input class="form-control form-round" type="email" name="email" id="email"
                                :class="{ 'is-invalid': errors.email }" v-model="loginform.email" autocomplete="new-password">
                            <div class="invalid-feedback">@{{ errors.email }}</div>
                        </div>

                        <div class="mb-4">
                            <label class="required" for="password">{{ __('Password') }}</label>
                            <input class="form-control form-round" type="password" name="password" id="password"
                                autocomplete="new-password" :class="{ 'is-invalid': errors.password }"
                                v-model="loginform.password" autocomplete="new-password">
                            <div class="invalid-feedback">@{{ errors.password }}</div>
                        </div>

                        {{-- <div class="mb-4">
                            <div class="d-flex">
                                <div class="login-selector" :class="{lsactive: loginform.role == 'buyer'}" @click.prevent="loginform.role = 'buyer'">{{ __("Buyer") }}</div>
                                <div class="login-selector" :class="{lsactive: loginform.role == 'supplier'}" @click.prevent="loginform.role = 'supplier'">{{ __("Supplier") }}</div>
                            </div>
                        </div> --}}




                        <div class="mb-3 d-flex justify-content-between">

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" v-model="loginform.remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <a href="{{ route('password.request') }}"
                                class="text text-danger">{{ __('Forgot Password?') }}</a>
                        </div>

                        <div class="text text-danger mb-3" v-show="errors.message">@{{ errors.message }} <a
                            href="{{ route('verification.resend') }}"
                            v-show="errors.verification">{{ __('Resend Verification Link') }}</a></div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100" :disabled="loading">
                                <i class="fas fa-spinner fa-spin" v-show="loading"></i>
                                <span>{{ __('Login') }}</span>
                            </button>
                        </div>

                    </form>
                    <p class="text-center">{{ __('Dont have an account') }}? <a href="{{ route('register') }}"
                            class="text text-primary font-weight-bold">{{ __('Register') }}</a></p>
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
            loginform: {
                email: '',
                password: '',
                role: "user"
            },
            errors: {},
            loading: false,
            response: null
        }

        vmethods = {
            ...vmethods,
            async submitForm() {

                try {

                    this.loading = true;
                    this.errors = {};
                    this.response = "";
                    const res = await axios.post("{{ route('login') }}", this.loginform);
                    window.location.reload();

                } catch (e) {

                    if (e.response && e.response.status == 422) {
                        for (const [key, value] of Object.entries(e.response.data.errors)) {
                            this.errors[key] = value[0];
                        }
                    } else {
                        toastr.error("Something Wen't Wrong!");
                    }

                    this.loading = false;

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
