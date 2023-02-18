 <!-- Shipping Methods Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title ember-bold" id="exampleModalLabel">{{ __('Login') }}
             </h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"
                 aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="p-2">
                 <form action="{{ route('login') }}" method="post" @submit.prevent="submitLoginForm">

                     <div class="mb-3">
                        <input class="form-control form-round" type="email" name="email" id="email"
                                :class="{ 'is-invalid': errors.email }" v-model="form.email" autocomplete="new-password" placeholder="Email">
                        <div class="invalid-feedback">@{{ errors.email }}</div>
                     </div>

                     <div class="mb-3">
                        <input class="form-control form-round" type="password" name="password" id="password"
                            autocomplete="new-password" :class="{ 'is-invalid': errors.password }"
                            v-model="form.password" autocomplete="new-password" placeholder="Password">
                        <div class="invalid-feedback">@{{ errors.password }}</div>
                     </div>

                     <div class="mb-2 d-flex justify-content-between">
                         <label>
                             <input type="checkbox" name="remember" v-model="form.remember" id="remember">
                             <span class="text-muted">{{ __("Remember Me") }}</span>
                         </label>
                         <a href="{{ route('password.request') }}"
                                class="text-muted">{{ __('Forgot Password?') }}</a>
                     </div>

                     <div class="text text-danger mb-3" v-show="errors.message">@{{ errors.message }} <a
                        href="{{ route('verification.resend') }}"
                        v-show="errors.verification">{{ __('Resend Verification Link') }}</a></div>

                     <div class="mb-5">
                        <div class="mb-3 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary w-100" :disabled="loading">
                                <i class="fas fa-spinner fa-spin" v-show="loading"></i>
                                <span>{{ __('Login') }}</span>
                            </button>
                        </div>
                     </div>
                 </form>

             </div>
             <div class="text-center mb-3">
                 <p class="text-muted mb-0">{{ __('Dont have an account') }}?</p>
                 <a href="{{ route('register') }}">{{ __('Register') }}</a>
             </div>
         </div>
     </div>
 </div>
</div>


@push("body_scripts")
<script>
    vdata = {
        ...vdata,
        form: {
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
        async submitLoginForm() {

            try {

                this.loading = true;
                this.errors = {};
                this.response = "";
                const res = await axios.post("{{ route('login') }}", this.form);
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
