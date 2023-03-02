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
                                                    <li id="public-personal-li" class="bp-personal-sub-tab current selected">
                                                        <a href="{{ route("user.profile", $user->username) }}" id="public">
                                                            View
                                                        </a>
                                                    </li>

                                                    <li id="edit-personal-li" class="bp-personal-sub-tab">
                                                        <a href="{{ route("profile.edit") }}" id="edit">
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

                                        <div class="profile public">

                                            <h2 class="screen-heading view-profile-screen">View Profile</h2>
                                            {{-- <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ route('profile.edit') }}"
                                                    class="btn btn-primary btn-sm me-2">Edit Profile</a>
                                            </div> --}}

                                            <div class="bp-widget base">
                                                <h3 class="screen-heading profile-group-title">
                                                    General Information
                                                </h3>

                                                <div class="table-wrapper">
                                                    <table class="profile-fields bp-tables-user">
                                                        <tbody>
                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">Name</td>

                                                                <td class="data">
                                                                    <p>{{ $user->name }}</p>
                                                                </td>
                                                            </tr>


                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">Email</td>

                                                                <td class="data">
                                                                    <p>{{ $user->email }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">Phone</td>

                                                                <td class="data">
                                                                    <p>{{ $user->phone }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">Address</td>

                                                                <td class="data">
                                                                    <p>{{ $user->address }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">State</td>

                                                                <td class="data">
                                                                    <p>{{ $user->state->name ?? "" }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">County</td>

                                                                <td class="data">
                                                                    <p>{{ $user->county->name ?? "" }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr
                                                                class="field_1 field_name required-field visibility-public field_type_textbox">
                                                                <td class="label">Zip</td>

                                                                <td class="data">
                                                                    <p>{{ $user->zip_code }}</p>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="bp-widget work-experience">

                                                <h3 class="screen-heading profile-group-title">Work Experience </h3>

                                                <div class="table-wrapper">
                                                    <table class="profile-fields bp-tables-user">

                                                        <tbody>
                                                            <tr
                                                                class="field_7 field_job-title optional-field visibility-public field_type_textbox">

                                                                <td class="label">Job Title</td>

                                                                <td class="data">
                                                                    <p>{{ $user->user_type ? $user->user_type : $user->trade->name ?? "" }}</p>
                                                                </td>

                                                            </tr>


                                                            @if ($user->user_type == "tradesmen" || $user->user_type == "contractors")
                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Years of Experience</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->years_of_experience }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Education</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->education }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Institution</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->institution }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Work History</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->work_history }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">License</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->license }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Certificates</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->certificates }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Achievements</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->achievements }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Ability Skills</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->ability_skills }}</p>
                                                                    </td>
                                                                </tr>
                                                            @else
                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Business Description</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->business_description }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Company Mission</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->company_mission }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Company Vision</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->company_vision }}</p>
                                                                    </td>
                                                                </tr>

                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Products</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->products }}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr class="field_16 field_organization optional-field visibility-public alt field_type_textbox">
                                                                    <td class="label">Services</td>
                                                                    <td class="data">
                                                                        <p>{{ $user->services }}</p>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="bp-widget biography">

                                                <h3 class="screen-heading profile-group-title">
                                                    Biography </h3>

                                                <div class="table-wrapper">
                                                    <table class="profile-fields bp-tables-user">



                                                        <tbody>
                                                            <tr
                                                                class="field_8 field_about-me optional-field visibility-public field_type_textarea">

                                                                <td class="label">About me</td>

                                                                <td class="data">
                                                                    <p>{{ $user->about_you }}</p>
                                                                </td>

                                                            </tr>




                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
            loading_feeds: true,
            feeds: [],
        }

        vmethods = {
            ...vmethods,

        }

        vcreated = {
            ...vcreated,
            run: function() {

            }
            // function key: function(){}
        }

        vmounted = {
            ...vmounted,
            // function key: function(){}
        }
    </script>
@endpush
