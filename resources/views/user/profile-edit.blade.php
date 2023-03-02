@extends('layouts.app')


@section('meta_tags')
    <title>{{ __('Home - Buyer') }}</title>
    <meta name="description" content="Create Employee and Manage Employee Details">
    <meta name="keywords" content="employee,employee_create">
@endsection


@section('content')
    <div class="tophive-container">

        @include('partials.profile-header')


        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-12">
                <div class="content-inner">
                    <article id="post-0"
                        class="bp_members type-bp_members entry post-0 page type-page status-publish hentry pmpro-no-access">
                        <header class="entry-header">
                            <h1 class="entry-title">{{ $user->name }}</h1>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">

                                <div class="bp-wrap">
                                    <div id="item-body" class="item-body">

                                        @if (Auth::user()->id == $user->id)
                                            <nav class="bp-navs no-ajax user-subnav" id="subnav" role="navigation"
                                                aria-label="Profile menu">
                                                <ul class="subnav">
                                                    <li id="public-personal-li" class="bp-personal-sub-tab">
                                                        <a href="{{ route('user.profile', $user->username) }}" id="public">
                                                            View
                                                        </a>
                                                    </li>

                                                    <li id="edit-personal-li" class="bp-personal-sub-tab current selected">
                                                        <a href="{{ route('profile.edit') }}" id="edit">
                                                            Edit
                                                        </a>
                                                    </li>

                                                    {{-- <li id="change-avatar-personal-li" class="bp-personal-sub-tab">
                                                        <a href="" id="change-avatar">
                                                            Change Profile Photo
                                                        </a>
                                                    </li>

                                                    <li id="change-cover-image-personal-li" class="bp-personal-sub-tab">
                                                        <a href="" id="change-cover-image">
                                                            Change Cover Image
                                                        </a>
                                                    </li> --}}
                                                </ul>
                                            </nav>
                                        @endif
                                        <!-- .item-list-tabs -->

                                        <div class="profile edit">


                                            <h2 class="screen-heading edit-profile-screen">Edit Profile</h2>


                                            <form action="{{ route('api.profile.update') }}" method="post" @submit.prevent="submitForm">

                                                @csrf

                                                {{-- <div class="mb-3">
                                                    <label for="trade_role" class="required">{{ __('I am a') }}</label>
                                                    <select name="user_type" id="user_type" class="form-control" v-model="form.user_type">
                                                        <option value="tradesmen">Tradesmen</option>
                                                        <option value="contractors">Contractors</option>
                                                        <option value="architexts/engineers">Architects/Engineers</option>
                                                        <option value="trade_organization/associations">Trade Organizations/Associations</option>
                                                        <option value="trade_schools/education">Trade Schools/Education</option>
                                                        <option value="facility/property_mgmt">Facility/Property Mgmt</option>
                                                        <option value="vendors">Vendors</option>
                                                    </select>
                                                </div> --}}

                                                <div class="mb-3" v-if=" form.user_type == 'tradesmen' || form.user_type == 'contractors' ">
                                                    <label class="required" for="trade">{{ __('Trade') }}</label>
                                                        <select name="trade" id="trade" class="form-control">
                                                            @foreach ($trades as $trade)
                                                                <option value="{{ $trade->id }}">{{ $trade->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    <div class="invalid-feedback">@{{ errors.trade }}</div>
                                                </div>

                                                <div class="mb-3" v-if="form.user_type == 'tradesmen'">
                                                    <label class="" for="profession_title">{{ __('Profession Title') }}</label>
                                                    <input class="form-control form-round" type="text" name="profession_title" id="profession_title"
                                                        :class="{ 'is-invalid': errors.profession_title }" v-model="form.profession_title">
                                                    <div class="invalid-feedback">@{{ errors.profession_title }}</div>
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
                                                    <label class="required" for="phone">{{ __('Phone') }}</label>
                                                    <input class="form-control form-round" type="text" name="phone" id="phone"
                                                        :class="{ 'is-invalid': errors.phone }" v-model="form.phone">
                                                    <div class="invalid-feedback">@{{ errors.phone }}</div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="required" for="address">{{ __('Address') }}</label>
                                                    <textarea name="address" id="address" cols="30" rows="4" class="form-control" v-model="form.address" :class="{ 'is-invalid': errors.address }"></textarea>
                                                    <div class="invalid-feedback">@{{ errors.name }}</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="required" for="state">{{ __('State') }}</label>
                                                    <select name="state" id="state" class="form-select form-round" :class="{ 'is-invalid': errors.state }" v-model="form.state" @change="fetchCounties">
                                                        <option value="">{{ __("Select State") }}</option>
                                                        @foreach (\App\Models\State::all() as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">@{{ errors.state }}</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="required" for="county">{{ __('County') }}</label>
                                                    <select name="county" id="county" class="form-select form-round" :class="{ 'is-invalid': errors.county }" v-model="form.county">
                                                        <option value="">{{ __("Select County") }}</option>
                                                        <option v-for="county in counties" :value="county.id">@{{ county.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">@{{ errors.state }}</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="required" for="zip_code">{{ __('Zip Code') }}</label>
                                                    <input class="form-control form-round" type="text" name="zip_code" id="zip_code"
                                                        :class="{ 'is-invalid': errors.zip_code }" v-model="form.zip_code">
                                                    <div class="invalid-feedback">@{{ errors.zip_code }}</div>
                                                </div>



                                                <div v-if="form.user_type != 'tradesmen'">
                                                    <div class="mb-3">
                                                        <label class="" for="business_description">{{ __('Business Description') }}</label>
                                                        <textarea name="business_description" id="business_description" cols="30" rows="4" class="form-control" v-model="form.business_description" :class="{ 'is-invalid': errors.business_description }"></textarea>
                                                        <div class="invalid-feedback">@{{ errors.name }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="company_mission">{{ __('Company Mission') }}</label>
                                                        <input class="form-control form-round" type="text" name="company_mission" id="company_mission"
                                                            :class="{ 'is-invalid': errors.company_mission }" v-model="form.company_mission">
                                                        <div class="invalid-feedback">@{{ errors.company_mission }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="company_vision">{{ __('Company Vision') }}</label>
                                                        <input class="form-control form-round" type="text" name="company_vision" id="company_vision"
                                                            :class="{ 'is-invalid': errors.company_vision }" v-model="form.company_vision">
                                                        <div class="invalid-feedback">@{{ errors.company_vision }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="products">{{ __('Products') }}</label>
                                                        <textarea name="products" id="products" cols="30" rows="4" class="form-control" v-model="form.products" :class="{ 'is-invalid': errors.products }"></textarea>
                                                        <div class="invalid-feedback">@{{ errors.products }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="services">{{ __('Services') }}</label>
                                                        <textarea name="services" id="services" cols="30" rows="4" class="form-control" v-model="form.services" :class="{ 'is-invalid': errors.services }"></textarea>
                                                        <div class="invalid-feedback">@{{ errors.services }}</div>
                                                    </div>
                                                </div>


                                                <div v-else>
                                                    <div class="mb-3">
                                                        <label class="" for="years_of_experience">{{ __('Years of Experience') }}</label>
                                                        <input class="form-control form-round" type="text" name="years_of_experience" id="years_of_experience"
                                                            :class="{ 'is-invalid': errors.years_of_experience }" v-model="form.years_of_experience">
                                                        <div class="invalid-feedback">@{{ errors.years_of_experience }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="education">{{ __('Education') }}</label>
                                                        <input class="form-control form-round" type="text" name="education" id="education"
                                                            :class="{ 'is-invalid': errors.education }" v-model="form.education">
                                                        <div class="invalid-feedback">@{{ errors.education }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="institution">{{ __('Institution') }}</label>
                                                        <input class="form-control form-round" type="text" name="institution" id="institution"
                                                            :class="{ 'is-invalid': errors.institution }" v-model="form.institution">
                                                        <div class="invalid-feedback">@{{ errors.institution }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="work_history">{{ __('Work History') }}</label>
                                                        <input class="form-control form-round" type="text" name="work_history" id="work_history"
                                                            :class="{ 'is-invalid': errors.work_history }" v-model="form.work_history">
                                                        <div class="invalid-feedback">@{{ errors.work_history }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="license">{{ __('License') }}</label>
                                                        <input class="form-control form-round" type="text" name="license" id="license"
                                                            :class="{ 'is-invalid': errors.license }" v-model="form.license">
                                                        <div class="invalid-feedback">@{{ errors.license }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="certificates">{{ __('Certificates') }}</label>
                                                        <input class="form-control form-round" type="text" name="certificates" id="certificates"
                                                            :class="{ 'is-invalid': errors.certificates }" v-model="form.certificates">
                                                        <div class="invalid-feedback">@{{ errors.certificates }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="achievements">{{ __('Achievements') }}</label>
                                                        <input class="form-control form-round" type="text" name="achievements" id="achievements"
                                                            :class="{ 'is-invalid': errors.achievements }" v-model="form.achievements">
                                                        <div class="invalid-feedback">@{{ errors.achievements }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="" for="ability_skills">{{ __('Ability Skills') }}</label>
                                                        <input class="form-control form-round" type="text" name="ability_skills" id="ability_skills"
                                                            :class="{ 'is-invalid': errors.ability_skills }" v-model="form.ability_skills">
                                                        <div class="invalid-feedback">@{{ errors.ability_skills }}</div>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="" for="about_you">{{ __('Tell the Industry about you') }}</label>
                                                        <textarea name="about_you" id="about_you" cols="30" rows="4" class="form-control" v-model="form.about_you" :class="{ 'is-invalid': errors.about_you }"></textarea>
                                                        <div class="invalid-feedback">@{{ errors.about_you }}</div>
                                                    </div>
                                                </div>

                                                <div class="text text-success mb-3" v-if="response">@{{ response }}</div>

                                                <div class="mb-3 d-flex justify-content-between align-items-center">
                                                    <button type="submit" class="btn btn-primary bg-primary text-white" :disabled="registering">
                                                        <i v-if="registering" class="fas fa-spinner fa-spin"></i>
                                                        <span>{{ __('Update Profile') }}</span>
                                                    </button>
                                                    {{-- <a href="{{ route('login') }}">{{ __('Back to Login') }}</a> --}}
                                                </div>

                                            </form>



                                        </div>
                                        <!-- .profile -->
                                    </div>
                                    <!-- #item-body -->
                                </div>
                                <!-- // .bp-wrap -->
                            </div>
                            <!-- #buddypress -->
                        </div>
                        <!-- .entry-content -->

                        <footer class="entry-footer"></footer>
                        <!-- .entry-footer -->
                    </article>
                    <!-- #post-0 -->
                </div>
                <!-- #.content-inner -->
            </main>
            <!-- #main -->
        </div>



    </div><!-- #.tophive-container -->
@endsection





@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            counties: @json($counties),
            form: {
                state: @json($user->state_id),
                county: @json($user->county_id),
                user_type: @json($user->user_type),
                name: @json($user->name),
                email: @json($user->email),
                phone: @json($user->phone),
                address: @json($user->address),
                zip_code: @json($user->zip_code),
                business_description: @json($user->business_description),
                company_mission: @json($user->company_mission),
                company_vision: @json($user->company_vision),
                products: @json($user->products),
                services: @json($user->services),

                trade: @json($user->trade_id),
                profession_title: @json($user->profession_title),
                years_of_experience: @json($user->years_of_experience),
                education: @json($user->education),
                institution: @json($user->institution),
                work_history: @json($user->work_history),
                license: @json($user->license),
                certificates: @json($user->certificates),
                achievements: @json($user->achievements),
                ability_skills: @json($user->ability_skills),
                about_you: @json($user->about_you)
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
                    const res = await axios.post("{{ route('api.profile.update') }}", this.form);
                    this.response = res.data.message;
                    this.registering = false;
                    toastr.success("Updated Successfully");


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

            },
            async fetchCounties(e) {

                try {

                    const state = e.target.value;
                    const res = await axios.get("{{ route('api.counties') }}?state="+state);
                    this.counties = res.data.data;

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
            ...vcreated,

            // function key: function(){}
        }

        vmounted = {
            ...vmounted,
            // function key: function(){}
        }
    </script>
@endpush
