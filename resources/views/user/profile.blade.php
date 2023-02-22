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


                                        <h2 class="screen-heading general-settings-screen">
                                            Email &amp; Password</h2>

                                        <p class="info email-pwd-info">
                                            Update your email and or password.</p>

                                        <form action="https://theconstructionplatform.com/members/admin/settings/general"
                                            method="post" class="standard-form" id="your-profile">


                                            <label for="email">Account Email</label>
                                            <input type="email" name="email" id="email"
                                                value="itsrashad@gmail.com" class="settings-input">

                                            <div class="info bp-feedback">
                                                <span class="bp-icon" aria-hidden="true"></span>
                                                <p class="text">Click on the "Generate Password" button to change your
                                                    password.</p>
                                            </div>

                                            <div class="user-pass1-wrap">
                                                <button type="button" class="button wp-generate-pw">
                                                    Generate Password </button>

                                                <div class="wp-pwd">
                                                    <label for="pass1">Add Your New Password</label>
                                                    <span class="password-input-wrapper">
                                                        <input type="password" name="pass1" id="pass1"
                                                            size="24" class="settings-input small password-entry"
                                                            value="" data-pw="F3RUHJ0I(gMFP78Uq(XfLj7q"
                                                            aria-describedby="pass-strength-result" spellcheck="false"
                                                            autocomplete="off" disabled="">
                                                    </span>
                                                    <button type="button" class="button wp-hide-pw" data-toggle="0"
                                                        aria-label="Hide password">
                                                        <span class="dashicons dashicons-hidden"
                                                            aria-hidden="true"></span>
                                                        <span class="text bp-screen-reader-text">Hide</span>
                                                    </button>
                                                    <button type="button" class="button wp-cancel-pw" data-toggle="0"
                                                        aria-label="Cancel password change">
                                                        <span class="text">Cancel</span>
                                                    </button>
                                                    <div id="pass-strength-result" aria-live="polite"
                                                        style="display: block;"></div>
                                                </div>
                                            </div>

                                            <div class="user-pass2-wrap" style="display: none;">
                                                <label class="label" for="pass2">Repeat Your New Password</label>
                                                <input name="pass2" type="password" id="pass2" size="24"
                                                    class="settings-input small password-entry-confirm" value=""
                                                    spellcheck="false" autocomplete="off" disabled="">
                                            </div>

                                            <div class="pw-weak">
                                                <label>
                                                    <input type="checkbox" name="pw_weak" class="pw-checkbox">
                                                    <span id="pw-weak-text-label">Confirm use of potentially weak
                                                        password</span>
                                                </label>
                                            </div>

                                            <div class="submit"><input type="submit" name="submit" id="submit"
                                                    value="Save Changes" class="auto"></div><input type="hidden"
                                                id="_wpnonce" name="_wpnonce" value="60bcc2c209"><input type="hidden"
                                                name="_wp_http_referer" value="/members/admin/settings/">
                                        </form>


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
