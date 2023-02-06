@extends('core::layouts.admin')

@section("meta_tags")
<title>{{ __("Shipping Method List") }}</title>
    <meta name="description" content="Method List and Manage Method Details">
    <meta name="keywords" content="method,method_edit">
@endsection

@section('content')
<form @submit.prevent="submitForm">
    <div class="row">

        <div class="col-md-6 mx-auto">
            <div class="card h-100">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="required" for="company_commission">{{ __('Company Commission') }}</label>
                        <input class="form-control" type="number" name="company_commission" id="company_commission"
                            :class="{ 'is-invalid': errors.company_commission }" v-model="form.company_commission">
                        <div v-cloak class="invalid-feedback">@{{ errors.company_commission }}</div>
                    </div>
                    <div class="mb-3">
                        <label class="required" for="commission_type">{{ __('Commission Type') }}</label>
                        <select name="commission_type" id="commission_type" class="form-select" v-model="form.commission_type">
                            <option value="percentage">{{ __("Percentage") }}</option>
                            <option value="fixed">{{ __("Fixed") }}</option>
                        </select>
                    </div>

                    <div class="mb-3 text-center mt-3">
                        <button type="submit" class="btn btn-primary w-25" :disabled="submitting">
                            <i v-cloak v-if="submitting" class="fas fa-spinner fa-spin"></i>
                            <span>{{ __('Submit') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection



@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            form: {
                company_commission: @json($setting['company_commission'] ?? 0),
                commission_type: @json($setting['commission_type'] ?? "percentage"),
                _method: "PUT"
            },
            errors: {},
            submitting: false,
            response: null,
        }

        vmethods = {
            ...vmethods,
            async submitForm() {

                try {

                    this.submitting = true;
                    this.errors = {};

                    const formData = new FormData();
                    Object.keys(this.form).forEach(key => {
                        formData.append(key, this.form[key]);
                    });

                    const res = await axios.post("{{ route('api.settings.general') }}", formData, {
                        headers: {
                            "x-role": "{{ getAuthRole() }}"
                        }
                    });
                    this.submitting = false;
                    toastr.success("Updated Successfuly!");

                } catch (e) {

                    if (e.response && e.response.status == 422) {
                        for (const [key, value] of Object.entries(e.response.data.errors)) {
                            this.errors[key] = value[0];
                        }
                    } else {
                        toastr.error("Something Wen't Wrong!");
                    }

                    this.submitting = false;

                }

            },
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
