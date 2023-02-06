<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __("Admin Login") }}</title>
        <meta name="description" content="Admin Login">
        <meta name="keywords" content="login,authentication,admin">


        <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />

    </head>

    <body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
        <div class="c-app flex-row align-items-center" id="app">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4" v-cloak>
                            <div class="card-body p-4">
                                <h1>{{ __('Admin') }}</h1>
                                <p>{{ __("Login as Admin") }}</p>

                                <form method="POST" action="{{ route('login') }}" @submit.prevent="submitForm">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="{{ __('Email Address') }}" :class="{ 'is-invalid': errors.email }" v-model="form.email">
                                        <div class="invalid-feedback">@{{ errors.email }}</div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>

                                        <input class="form-control " type="password" name="password" id="password" placeholder="{{ __("Password") }}"  autocomplete="new-password" :class="{ 'is-invalid': errors.password }" v-model="form.password">
                                        <div class="invalid-feedback">@{{ errors.password }}</div>

                                    </div>

                                    {{-- <div class="mb-3">
                                        <select name="role" id="role" class="form-control" v-model="form.role">
                                            <option value="">{{ __("Select Role") }}</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->title }}">{{ $role->title }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" v-model="form.remember" id="remember">
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <div class="text text-danger mb-3" v-if="errors.message">@{{ errors.message }} <a href="{{ route('verification.resend') }}" v-if="errors.verification">{{ __("Resend Verification Link") }}</a></div>

                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary" :disabled="loading">
                                                <i v-if="loading" class="fas fa-spinner fa-spin"></i>
                                                <span>{{ __("Sign In") }}</span>
                                            </button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="{{ route('password.request') }}" class="text text-danger">{{ __("Forgot Password") }}</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">
    const app = new Vue({
        el: '#app',
        data: {
            form: {
                email : '',
                password : '',
                role: "admin"
            },
            errors: {},
            loading: false,
            response: null
        },
        methods : {
            async submitForm() {

                try{

                    this.loading = true;
                    this.errors = {};
                    this.response = "";
                    const res = await axios.post("{{ route('login') }}", this.form);
                    window.location.reload();

                }catch(e){

                    if(e.response && e.response.status == 422){
                        for (const [key, value] of Object.entries(e.response.data.errors)) {
                            this.errors[key] = value[0];
                        }
                    }else{
                        toastr.error("Something Wen't Wrong!");
                    }

                    this.loading = false;

                }

            }
        },
    });
</script>

<script>

        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }

        @if(Session::has('success'))
                toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif


  </script>
    </body>
</html>

