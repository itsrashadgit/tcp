@extends('layouts.user')


@section('meta_tags')
    <title>{{ __('Home - Buyer') }}</title>
    <meta name="description" content="Create Employee and Manage Employee Details">
    <meta name="keywords" content="employee,employee_create">
@endsection


@section('content')
    <div class="tophive-container">

        @include("partials.profile-header")

        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-12">
                <div class="content-inner">

                    <article id="post-0"
                        class="bp_members type-bp_members entry post-0 page type-page status-publish hentry pmpro-no-access">
                        <header class="entry-header">
                            <h1 class="entry-title">admin</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">

                                <div id="item-header" role="complementary" data-bp-item-id="1"
                                    data-bp-item-component="members" class="users-header single-headers">


                                    <div id="cover-image-container">
                                        <a id="header-cover-image"
                                            href="https://theconstructionplatform.com/members/admin/"></a>

                                        <div id="item-header-cover-image">
                                            <div id="item-header-avatar">
                                                <img loading="lazy"
                                                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                    class="avatar user-1-avatar avatar-150 photo" width="150"
                                                    height="150" alt="Profile picture of admin">
                                            </div>
                                            <div id="item-header-content">
                                                <h2 class="user-nicename">admin</h2>
                                                <div id="item-buttons"></div>
                                                <div id="item-meta">
                                                    <p class="profile-header-meta-date"><span
                                                            class="hide-badge">@admin</span> • <span>Joined : January 27,
                                                            2023 </span></p>
                                                    <div class="user-facts">
                                                        <p>
                                                            <span class="secondary-color followers-count-1">0</span>
                                                            <span>Followers</span>
                                                        </p>
                                                        <p>
                                                            <span class="secondary-color following-count-1">0</span>
                                                            <span>Following</span>
                                                        </p>
                                                        <!-- <p>
                    <span class="secondary-color">34</span>
                    <span>Topics</span>
                </p>
                 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="template-notices" role="alert" aria-atomic="true">
                                    </div>

                                </div><!-- #item-header -->

                                <div class="bp-wrap">



                                    <div id="item-body" class="item-body">



                                        <nav class="bp-navs bp-subnavs no-ajax user-subnav" id="subnav"
                                            role="navigation" aria-label="Settings menu">
                                            <ul class="subnav">




                                                <li id="general-personal-li" class="bp-personal-sub-tab current selected"
                                                    data-bp-user-scope="general">
                                                    <a href="https://theconstructionplatform.com/members/admin/settings/"
                                                        id="general">
                                                        General
                                                    </a>
                                                </li>


                                                <li id="notifications-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="notifications">
                                                    <a href="https://theconstructionplatform.com/members/admin/settings/notifications/"
                                                        id="notifications">
                                                        Email
                                                    </a>
                                                </li>


                                                <li id="profile-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="profile">
                                                    <a href="https://theconstructionplatform.com/members/admin/settings/profile/"
                                                        id="profile">
                                                        Profile Visibility
                                                    </a>
                                                </li>


                                                <li id="data-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="data">
                                                    <a href="https://theconstructionplatform.com/members/admin/settings/data/"
                                                        id="data">
                                                        Export Data
                                                    </a>
                                                </li>



                                            </ul>
                                        </nav>


                                        <h2 class="screen-heading general-settings-screen">Password</h2>

                                        <p class="info email-pwd-info">Update your password.</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <form @submit.prevent="updatePassword">

                                                    <div class="mb-3">
                                                        <label class="required" for="current_password">{{ __('Current Password') }}</label>
                                                        <input type="password" class="form-control"
                                                            :class="{ 'is-invalid': errors.current_password }"
                                                            type="password" name="current_password" id="password" v-model="password_form.current_password">
                                                            <div class="invalid-feedback">@{{ errors.current_password }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="required" for="password">{{ __('Password') }}</label>
                                                        <input type="password" class="form-control"
                                                            :class="{ 'is-invalid': errors.password }"
                                                            type="password" name="password" id="password" v-model="password_form.password">
                                                            <div class="invalid-feedback">@{{ errors.password }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="required"
                                                            for="password_confirmation">{{ __('Password Confirmation') }}</label>
                                                        <input type="password"
                                                            class="form-control"
                                                            :class="{ 'is-invalid': errors.password_confirmation }"
                                                            type="text" name="password_confirmation" id="password_confirmation"
                                                            value="{{ old('password_confirmation') }}" v-model="password_form.password_confirmation">
                                                            <div class="invalid-feedback">@{{ errors.name }}</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-danger text-white bg-danger" :disabled="updating_password">
                                                            <i class="fas fa-spinner fa-spin" v-show="updating_password"></i>
                                                            <span>{{ __('Update Password') }}</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div><!-- #item-body -->
                                </div><!-- // .bp-wrap -->

                            </div><!-- #buddypress -->
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-0 -->
                </div><!-- #.content-inner -->
            </main><!-- #main -->
        </div>

    </div><!-- #.tophive-container -->
@endsection




@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            errors: {},
            updating_password: false,
            password_form: {
                current_password: '',
                password: '',
                password_confirmation: '',
            }
        }

        vmethods = {
            ...vmethods,
            async updatePassword(){
                try {
                    this.updating_password = true;
                    const response = await axios.put("{{ route('api.password.update') }}", this.password_form);
                    this.updating_password = false;
                    this.errors={};
                    toastr.success('Password Updated');
                } catch (e) {
                    if (e.response && e.response.status == 422) {
                        for (const [key, value] of Object.entries(e.response.data.errors)) {
                            this.errors[key] = value[0];
                        }
                    } else {
                        toastr.error("Something Wen't Wrong!");
                    }

                    this.updating_password = false;
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
