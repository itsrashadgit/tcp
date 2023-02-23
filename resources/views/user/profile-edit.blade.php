@extends('layouts.user')


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
                            <h1 class="entry-title">Michael Knight</h1>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">
                                <div id="item-header" role="complementary" data-bp-item-id="2"
                                    data-bp-item-component="members" class="users-header single-headers">
                                    <div id="cover-image-container">
                                        <a id="header-cover-image"
                                            href="https://theconstructionplatform.com/members/knight/"></a>

                                        <div id="item-header-cover-image">
                                            <div id="item-header-avatar">
                                                <img loading="lazy"
                                                    src="//www.gravatar.com/avatar/db9578ef026af3aa804383699b90d150?s=150&amp;r=g&amp;d=mm"
                                                    class="avatar user-2-avatar avatar-150 photo" width="150"
                                                    height="150" alt="Profile picture of Michael Knight" />
                                            </div>
                                            <div id="item-header-content">
                                                <h2 class="user-nicename">Michael Knight</h2>
                                                <div id="item-buttons"></div>
                                                <div id="item-meta">
                                                    <p class="profile-header-meta-date"><span
                                                            class="hide-badge">@knight</span> • <span>Joined : January 27,
                                                            2023 </span></p>
                                                    <div class="user-facts">
                                                        <p>
                                                            <span class="secondary-color followers-count-2">0</span>
                                                            <span>Followers</span>
                                                        </p>
                                                        <p>
                                                            <span class="secondary-color following-count-2">0</span>
                                                            <span>Following</span>
                                                        </p>
                                                        <!-- <p>
                                <span class="secondary-color">0</span>
                                <span>Topics</span>
                            </p>
                             -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="template-notices" role="alert" aria-atomic="true"></div>
                                </div>
                                <!-- #item-header -->

                                <div class="bp-wrap">



                                    <div id="item-body" class="item-body">


                                        <nav class="bp-navs bp-subnavs no-ajax user-subnav" id="subnav" role="navigation"
                                            aria-label="Profile menu">
                                            <ul class="subnav">




                                                <li id="public-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="public">
                                                    <a href="https://theconstructionplatform.com/members/knight/profile/"
                                                        id="public">
                                                        View
                                                    </a>
                                                </li>


                                                <li id="edit-personal-li" class="bp-personal-sub-tab current selected"
                                                    data-bp-user-scope="edit">
                                                    <a href="https://theconstructionplatform.com/members/knight/profile/edit/"
                                                        id="edit">
                                                        Edit
                                                    </a>
                                                </li>


                                                <li id="change-avatar-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="change-avatar">
                                                    <a href="https://theconstructionplatform.com/members/knight/profile/change-avatar/"
                                                        id="change-avatar">
                                                        Change Profile Photo
                                                    </a>
                                                </li>


                                                <li id="change-cover-image-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="change-cover-image">
                                                    <a href="https://theconstructionplatform.com/members/knight/profile/change-cover-image/"
                                                        id="change-cover-image">
                                                        Change Cover Image
                                                    </a>
                                                </li>



                                            </ul>
                                        </nav><!-- .item-list-tabs -->


                                        <div class="profile edit">


                                            <h2 class="screen-heading edit-profile-screen">Edit Profile</h2>


                                            <form
                                                action="https://theconstructionplatform.com/members/knight/profile/edit/group/1/"
                                                method="post" id="profile-edit-form"
                                                class="standard-form profile-edit base">



                                                <h3 class="screen-heading profile-group-title edit">
                                                    Editing "Base" Profile Group </h3>


                                                <div
                                                    class="editfield field_1 field_name required-field visibility-public field_type_textbox">
                                                    <fieldset>


                                                        <legend id="field_1-1">
                                                            Name <span class="bp-required-field-label">(required)</span>
                                                        </legend>


                                                        <input id="field_1" name="field_1" type="text"
                                                            value="Michael Knight" aria-required="true"
                                                            aria-labelledby="field_1-1" aria-describedby="field_1-3">





                                                        <p class="field-visibility-settings-notoggle field-visibility-settings-header"
                                                            id="field-visibility-settings-toggle-1">
                                                            This field may be seen by: <span
                                                                class="current-visibility-level">Everyone</span> </p>


                                                    </fieldset>
                                                </div>



                                                <input type="hidden" name="field_ids" id="field_ids" value="1">

                                                <div class="submit"><input type="submit" name="profile-group-edit-submit"
                                                        id="profile-group-edit-submit" value="Save Changes"></div><input
                                                    type="hidden" id="_wpnonce" name="_wpnonce"
                                                    value="bc1b5c5654"><input type="hidden" name="_wp_http_referer"
                                                    value="/members/knight/profile/edit/group/1/">
                                            </form>



                                        </div><!-- .profile -->


                                    </div><!-- #item-body -->
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
