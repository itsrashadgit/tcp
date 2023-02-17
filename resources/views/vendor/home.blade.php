@extends('layouts.master')


@section('meta_tags')
    <title>{{ __('Home - Buyer') }}</title>
    <meta name="description" content="Create Employee and Manage Employee Details">
    <meta name="keywords" content="employee,employee_create">
@endsection


@section('content')
    <div class="tophive-container">
        <div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">
            <div id="item-header" role="complementary" data-bp-item-id="1" data-bp-item-component="members"
                class="users-header single-headers top-header">
                <div id="cover-image-container">
                    <a id="header-cover-image" href="https://theconstructionplatform.com/members/admin/"></a>

                    <div id="item-header-cover-image">
                        <div id="item-header-avatar">
                            <img loading="lazy"
                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                class="avatar user-1-avatar avatar-150 photo" width="150" height="150"
                                alt="Profile picture of admin">
                        </div>
                        <div id="item-header-content" class="desktop">

                            <div class="user-section">
                                <h2 class="user-nicename">admin</h2>
                                <ul class="bp-socials-vertical"></ul>
                                <div id="item-meta">
                                    <p class="profile-header-meta-date"><span class="hide-badge">@admin</span> •
                                        <span>Joined : January 27, 2023 </span></p>
                                    <div class="user-facts d-flex">
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
                            <div id="item-buttons">
                                <div class="members-list">
                                    <li>
                                        <div class="members-action-buttons">
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div id="item-header-content" class=" mobile">

                            <div class="user-section">
                                <h2 class="user-nicename">admin</h2>
                                <ul class="bp-socials-vertical"></ul>

                            </div>
                            <div id="item-buttons">
                                <div class="members-list">
                                    <li>
                                        <div class="members-action-buttons">
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <div id="item-meta">
                                <p class="profile-header-meta-date"><span class="hide-badge">@admin</span> •
                                    <span>Joined : January 27, 2023 </span></p>
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
            </div>

            <nav class="main-navs no-ajax bp-navs single-screen-navs horizontal users-nav" id="object-nav"
                role="navigation" aria-label="Member menu">


                <ul class="nav-bar-filter" id="nav-bar-filter">


                    <li id="front-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/front/" id="user-front">
                            Home
                        </a>
                    </li>


                    <li id="activity-personal-li" class="bp-personal-tab current selected loading">
                        <a href="https://theconstructionplatform.com/members/admin/activity/" id="user-activity">
                            Activity
                        </a>
                    </li>


                    <li id="notifications-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/notifications/"
                            id="user-notifications">
                            Notifications
                        </a>
                    </li>


                    <li id="photos-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/photos/" id="user-photos">
                            Photos
                        </a>
                    </li>


                    <li id="xprofile-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/profile/" id="user-xprofile">
                            Profile
                        </a>
                    </li>


                    <li id="forums-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                            Forums
                        </a>
                    </li>


                    <li id="settings-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/settings/" id="user-settings">
                            Settings
                        </a>
                    </li>



                </ul>
                <ul id="more-nav">
                    <li><a href="#" class="more-nav-anchor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                </path>
                            </svg>
                        </a>
                        <ul class="subfilter">

                            <li id="front-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/front/" id="user-front">
                                    Home
                                </a>
                            </li>


                            <li id="activity-personal-li" class="bp-personal-tab current selected loading">
                                <a href="https://theconstructionplatform.com/members/admin/activity/"
                                    id="user-activity">
                                    Activity
                                </a>
                            </li>


                            <li id="notifications-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/notifications/"
                                    id="user-notifications">
                                    Notifications
                                </a>
                            </li>


                            <li id="photos-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/photos/" id="user-photos">
                                    Photos
                                </a>
                            </li>


                            <li id="xprofile-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/profile/"
                                    id="user-xprofile">
                                    Profile
                                </a>
                            </li>


                            <li id="forums-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                                    Forums
                                </a>
                            </li>


                            <li id="settings-personal-li" class="bp-personal-tab">
                                <a href="https://theconstructionplatform.com/members/admin/settings/"
                                    id="user-settings">
                                    Settings
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>


            </nav>



        </div>
        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-9_sm-12">
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
                                                            class="hide-badge">@admin</span> • <span>Joined : January
                                                            27, 2023 </span></p>
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
                                            role="navigation" aria-label="Activity menu">
                                            <ul class="subnav">




                                                <li id="just-me-personal-li"
                                                    class="bp-personal-sub-tab current selected"
                                                    data-bp-user-scope="just-me">
                                                    <a href="https://theconstructionplatform.com/members/admin/activity/"
                                                        id="just-me">
                                                        Personal
                                                    </a>
                                                </li>


                                                <li id="activity-mentions-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="mentions">
                                                    <a href="https://theconstructionplatform.com/members/admin/activity/mentions/"
                                                        id="activity-mentions">
                                                        Mentions
                                                    </a>
                                                </li>


                                                <li id="activity-favs-personal-li" class="bp-personal-sub-tab"
                                                    data-bp-user-scope="favorites">
                                                    <a href="https://theconstructionplatform.com/members/admin/activity/favorites/"
                                                        id="activity-favs">
                                                        Favorites
                                                    </a>
                                                </li>



                                            </ul>
                                        </nav><!-- .item-list-tabs#subnav -->

                                        <h2 class="bp-screen-title bp-screen-reader-text">
                                            Member Activities</h2>


                                        <div id="bp-nouveau-activity-form" class="activity-update-form">
                                            <form action="https://theconstructionplatform.com/activity/post/"
                                                method="post" id="whats-new-form" name="whats-new-form">
                                                <div class="activity-post-form-header">
                                                    <h4> Create post </h4>
                                                    <span class="whats-new-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-x"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <p class="what-is-new-avatar-text">admin
                                                <div id="visibility-handler">
                                                    <svg class="ionicon" viewBox="0 0 512 512">
                                                        <path
                                                            d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                        </path>
                                                    </svg>
                                                    <span>Public</span>
                                                </div>
                                                </p>
                                                <div class="mf-activity-accessibility-container">
                                                    <select id="mf-activity-accessibility"
                                                        class="mf-activity-accessibility" name="">
                                                        <option value="public">Public</option>
                                                        <option value="friends">Friends</option>
                                                        <option value="onlyme">Only me</option>
                                                    </select>
                                                </div>

                                                <div id="whats-new-avatar">
                                                    <a href="https://theconstructionplatform.com/members/admin/">
                                                        <img loading="lazy"
                                                            src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=50&amp;r=g&amp;d=mm"
                                                            class="avatar user-1-avatar avatar-50 photo"
                                                            width="50" height="50"
                                                            alt="Profile picture of admin"> </a>
                                                    <p class="whats-new-intro-header">What's on your mind, admin?</p>
                                                    <div class="whats-new-header-media-section">
                                                        <p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-camera" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z">
                                                                </path>
                                                                <path
                                                                    d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z">
                                                                </path>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div id="whats-new-content">
                                                    <div id="whats-new-textarea">

                                                        <div contenteditable="true"
                                                            class="bp-suggestions advanced-th-bp-activity-form"
                                                            data-placeholder="What's on your mind, admin?"
                                                            name="whats-new" id="th-bp-whats-new" cols="50"
                                                            rows="10"></div>
                                                        <div class="whats-new-previewer">
                                                            <p class="previewer-uploader">
                                                                <label for="upload-media">+</label>
                                                                <input type="file" name="upload-media"
                                                                    id="upload-media">
                                                            </p>
                                                        </div>
                                                        <div id="whats-new-attachments">
                                                            <p class="image has-tooltip">
                                                                <span class="new-post-tooltip">Photos</span>
                                                                <svg width="36" height="36"
                                                                    viewBox="0 0 36 36" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </p>
                                                            <p class="play video has-tooltip">
                                                                <span class="new-post-tooltip">Video</span>
                                                                <svg width="36" height="36"
                                                                    viewBox="0 0 36 36" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M28.0002 13L21.3184 18L28.0002 23V13Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M19.4091 11H8.90909C7.85473 11 7 11.8954 7 13V23C7 24.1046 7.85473 25 8.90909 25H19.4091C20.4635 25 21.3182 24.1046 21.3182 23V13C21.3182 11.8954 20.4635 11 19.4091 11Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </p>
                                                            <p class="documents rotate-45 has-tooltip">
                                                                <span class="new-post-tooltip">Documents</span>
                                                                <svg width="36" height="36"
                                                                    viewBox="0 0 36 36" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M20 10H13.6C13.1757 10 12.7687 10.1686 12.4686 10.4686C12.1686 10.7687 12 11.1757 12 11.6V24.4C12 24.8243 12.1686 25.2313 12.4686 25.5314C12.7687 25.8314 13.1757 26 13.6 26H23.2C23.6243 26 24.0313 25.8314 24.3314 25.5314C24.6314 25.2313 24.8 24.8243 24.8 24.4V14.8L20 10Z"
                                                                        stroke="#C4C4C4" stroke-width="1.3"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M20 10V14.8H24.8" stroke="#C4C4C4"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M21.6 18.8H15.2" stroke="#C4C4C4"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M21.6 22H15.2" stroke="#C4C4C4"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M16.8 15.6H16H15.2" stroke="#C4C4C4"
                                                                        stroke-width="1.3" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </p>
                                                            <p class="emojipicker has-tooltip">
                                                                <span class="new-post-tooltip">Emoji</span>
                                                                <svg width="36" height="36"
                                                                    viewBox="0 0 36 36" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 19.8C14.4 19.8 15.75 21.6 18 21.6C20.25 21.6 21.6 19.8 21.6 19.8M20.7 15.3H20.709M15.3 15.3H15.309M27 18C27 22.9706 22.9706 27 18 27C13.0294 27 9 22.9706 9 18C9 13.0294 13.0294 9 18 9C22.9706 9 27 13.0294 27 18ZM21.15 15.3C21.15 15.5485 20.9485 15.75 20.7 15.75C20.4515 15.75 20.25 15.5485 20.25 15.3C20.25 15.0515 20.4515 14.85 20.7 14.85C20.9485 14.85 21.15 15.0515 21.15 15.3ZM15.75 15.3C15.75 15.5485 15.5485 15.75 15.3 15.75C15.0515 15.75 14.85 15.5485 14.85 15.3C14.85 15.0515 15.0515 14.85 15.3 14.85C15.5485 14.85 15.75 15.0515 15.75 15.3Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div id="whats-new-options">

                                                        <input type="hidden" id="whats-new-post-object"
                                                            name="whats-new-post-object" value="groups">
                                                        <input type="hidden" id="whats-new-post-media"
                                                            name="whats-new-post-media" value="">
                                                        <input type="hidden" id="whats-new-post-url-preview"
                                                            name="whats-new-post-url-preview" value="">

                                                        <div id="whats-new-submit">
                                                            <input type="submit" name="aw-whats-new-submit"
                                                                id="aw-whats-new-submit" value="Post"
                                                                disabled="">
                                                        </div>


                                                    </div><!-- #whats-new-options -->
                                                </div><!-- #whats-new-content -->

                                                <input type="hidden" id="_wpnonce_post_update"
                                                    name="_wpnonce_post_update" value="7191b4661d"><input
                                                    type="hidden" name="_wp_http_referer" value="/members/admin/">
                                            </form><!-- #whats-new-form -->
                                        </div>
                                        <div class="ac-post-form-showcase">
                                            <img alt=""
                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=96&amp;r=g&amp;d=mm"
                                                srcset="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=96&amp;r=g&amp;d=mm 2x"
                                                class="avatar avatar-96 photo" height="96" width="96"
                                                loading="lazy" decoding="async"> <span>What's on your mind?</span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#F8F8F8">
                                                </circle>
                                                <path
                                                    d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                                    stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                                    stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>

                                        <div class="subnav-filters filters no-ajax" id="subnav-filters">

                                            <div class="subnav-search clearfix">

                                                <div id="activity-rss-feed" class="feed">
                                                    <a href="https://theconstructionplatform.com/members/admin/activity/feed/"
                                                        class="bp-tooltip" data-bp-tooltip="RSS Feed">
                                                        <span class="bp-screen-reader-text">RSS Feed</span>
                                                    </a>
                                                </div>


                                            </div>

                                            <div id="comp-filters" class="component-filters clearfix">
                                                <div id="activity-filter-select" class="last filter">
                                                    <label for="activity-filter-by" class="bp-screen-reader-text">
                                                        <span>Show:</span>
                                                    </label>
                                                    <div class="select-wrap">
                                                        <select id="activity-filter-by" data-bp-filter="activity">

                                                            <option value="0">— Everything —</option>
                                                            <option value="activity_update">Updates</option>
                                                            <option value="bbp_topic_create">Topics</option>
                                                            <option value="bbp_reply_create">Replies</option>

                                                        </select>
                                                        <span class="select-arrow" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- search & filters -->


                                        <div id="activity-stream" class="activity single-user"
                                            data-bp-list="activity" style="">

                                            <ul class="activity-list item-list bp-list">






                                                <li class="activity activity_update activity-item" id="activity-59"
                                                    data-bp-activity-id="59" data-bp-timestamp="1674871957"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                posted an update<a
                                                                    href="https://theconstructionplatform.com/activity/p/59/"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">2 weeks ago<i
                                                                            class="line"></i><span class="ac-vi-co"
                                                                            data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon" viewBox="0 0 512 512"
                                                                                width="16" height="16"
                                                                                fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="59"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Hello this is a post</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="59">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-59"
                                                                    data-activity-id="59"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction="" data-id="59"
                                                                        class="button" data-user="1"
                                                                        data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59" data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59" data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="59"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                                <div class="th-bp-post-comment-button">
                                                                    <a href="" data-activity-id="activity-59"
                                                                        class="button">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                                            </path>
                                                                        </svg>
                                                                        <span>Comment</span>
                                                                    </a>
                                                                </div>
                                                                <div class="th-bp-post-share-button th-ml-auto">
                                                                    <a href="" data-activity-id="59"
                                                                        class="button activity-share">
                                                                        <span class="share_icon"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#888" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="arcs">
                                                                                <circle cx="18" cy="5"
                                                                                    r="3"></circle>
                                                                                <circle cx="6" cy="12"
                                                                                    r="3"></circle>
                                                                                <circle cx="18" cy="19"
                                                                                    r="3"></circle>
                                                                                <line x1="8.59" y1="13.51"
                                                                                    x2="15.42" y2="17.49">
                                                                                </line>
                                                                                <line x1="15.41" y1="6.51"
                                                                                    x2="8.59" y2="10.49">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span>Share</span>
                                                                    </a>
                                                                    <ul class="sharing-options">
                                                                        <li><a href="59"
                                                                                class="timeline-share"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-reply"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z">
                                                                                    </path>
                                                                                </svg>Share on activity</a></li>
                                                                        <li><a target="_blank"
                                                                                data-share-type="twitter"
                                                                                href="https://twitter.com/intent/tweet?url=https://theconstructionplatform.com/activity/p/59/"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-twitter"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                                                                    </path>
                                                                                </svg>Share on twitter</a></li>
                                                                        <li><a target="_blank"
                                                                                data-share-type="facebook"
                                                                                href="https://www.facebook.com/sharer/sharer.php?u=https://theconstructionplatform.com/activity/p/59/"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-facebook"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                                                    </path>
                                                                                </svg>Share on facebook</a></li>
                                                                        <li><a data-share-type="whatsapp"
                                                                                href="whatsapp://send?text=https://theconstructionplatform.com/activity/p/59/"
                                                                                data-action="share/whatsapp/share"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-whatsapp"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                                                                    </path>
                                                                                </svg>Share on whatsApp</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="activity-comments">

                                                        <div class="activity-comments-form"><img alt=""
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                                                                srcset="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x"
                                                                class="avatar avatar-30 photo" height="30"
                                                                width="30" loading="lazy" decoding="async">
                                                            <form class="tophive-bp-comment-form activity-59"
                                                                data-type="postComment" data-comment-id=""
                                                                data-activity-id="59">
                                                                <div class="comments-text editable-div"
                                                                    contenteditable=""
                                                                    data-placeholder="Type a comment..."></div>
                                                                <div class="comments-media-icons">
                                                                    <p class="comments-image-uploader">
                                                                        <label for="comment-upload-media-59">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="32" height="32"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#999999" stroke-width="1.8"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <rect x="3" y="3"
                                                                                    width="18" height="18"
                                                                                    rx="2"></rect>
                                                                                <circle cx="8.5" cy="8.5"
                                                                                    r="1.5"></circle>
                                                                                <path d="M20.4 14.5L16 10 4 20"></path>
                                                                            </svg>
                                                                        </label>
                                                                        <input type="file"
                                                                            name="comment-upload-media" data-id="59"
                                                                            class="comment-upload-media"
                                                                            id="comment-upload-media-59">
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <input type="hidden" class="comment-media-url"
                                                                        id="comment-media-url-59" value="">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div
                                                            class="comments-media-previewer comments-media-preview-59">
                                                        </div>
                                                    </div>



                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-46"
                                                    data-bp-activity-id="46" data-bp-timestamp="1659341296"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/">Warning
                                                                    Note for Envato Elements Sellers !!</a> in the forum
                                                                <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-6923"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">6 months ago<i
                                                                            class="line"></i><span class="ac-vi-co"
                                                                            data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon" viewBox="0 0 512 512"
                                                                                width="16" height="16"
                                                                                fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="46"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>aaaaaaaaaa</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="46">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-46"
                                                                    data-activity-id="46"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction="" data-id="46"
                                                                        class="button" data-user="1"
                                                                        data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46" data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46" data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="46"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-45"
                                                    data-bp-activity-id="45" data-bp-timestamp="1659107783"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/">[
                                                                    GET ] Zoom Master PLR + OTO + OTO Bonuses</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/47-2/freebies-giveaways/">Freebies
                                                                    / Giveaways</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/#post-4623"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">6 months ago<i
                                                                            class="line"></i><span class="ac-vi-co"
                                                                            data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon" viewBox="0 0 512 512"
                                                                                width="16" height="16"
                                                                                fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="45"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Ok</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="45">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-45"
                                                                    data-activity-id="45"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction="" data-id="45"
                                                                        class="button" data-user="1"
                                                                        data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45" data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45" data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="45"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-44"
                                                    data-bp-activity-id="44" data-bp-timestamp="1658492736"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/">Warning
                                                                    Note for Envato Elements Sellers !!</a> in the forum
                                                                <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3971"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">6 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="44"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>tttttt</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="44">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-44"
                                                                    data-activity-id="44"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="44" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="44"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-43"
                                                    data-bp-activity-id="43" data-bp-timestamp="1654562373"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/">Warning
                                                                    Note for Envato Elements Sellers !!</a> in the forum
                                                                <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3725"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="43"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>sadasdasd</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="43">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-43"
                                                                    data-activity-id="43"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="43" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="43"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-42"
                                                    data-bp-activity-id="42" data-bp-timestamp="1654498248"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/">[
                                                                    GET ] Zoom Master PLR + OTO + OTO Bonuses</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/47-2/freebies-giveaways/">Freebies
                                                                    / Giveaways</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/#post-3723"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="42"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Yeaaaa</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="42">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-42"
                                                                    data-activity-id="42"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="42" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="42"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-41"
                                                    data-bp-activity-id="41" data-bp-timestamp="1653492842"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/">Warning
                                                                    Note for Envato Elements Sellers !!</a> in the forum
                                                                <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3649"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="41"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p><span class="ql-cursor">﻿</span></p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="41">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-41"
                                                                    data-activity-id="41"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="41" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="41"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-40"
                                                    data-bp-activity-id="40" data-bp-timestamp="1652945811"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/">Introduce
                                                                    yourself here to the English Language Learners
                                                                    group!</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/">English
                                                                    Language Learners</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3595"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="40"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>nice things to get itbup</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="40">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-40"
                                                                    data-activity-id="40"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="40" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="40"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item mini"
                                                    id="activity-39" data-bp-activity-id="39"
                                                    data-bp-timestamp="1652945705" data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/">Introduce
                                                                    yourself here to the English Language Learners
                                                                    group!</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/">English
                                                                    Language Learners</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3594"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="39"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="39">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-39"
                                                                    data-activity-id="39"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="39" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="39"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-38"
                                                    data-bp-activity-id="38" data-bp-timestamp="1652945573"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/">Introduce
                                                                    yourself here to the English Language Learners
                                                                    group!</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/">English
                                                                    Language Learners</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3593"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">8 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="38"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Hello</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="38">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-38"
                                                                    data-activity-id="38"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="38" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="38"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-37"
                                                    data-bp-activity-id="37" data-bp-timestamp="1651839827"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/">Can’t
                                                                    upgrade to pay for a Professional Certificate
                                                                    program</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/">Community
                                                                    Help &amp; Questions</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/#post-3547"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">9 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="37"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Test reply</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="37">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-37"
                                                                    data-activity-id="37"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="37" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="37"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-36"
                                                    data-bp-activity-id="36" data-bp-timestamp="1651839799"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/">Can’t
                                                                    upgrade to pay for a Professional Certificate
                                                                    program</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/">Community
                                                                    Help &amp; Questions</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/#post-3546"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">9 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="36"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p><img loading="lazy" src="img"/>
                                                            </p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="36">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-36"
                                                                    data-activity-id="36"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="36" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="36"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-35"
                                                    data-bp-activity-id="35" data-bp-timestamp="1650343915"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/">CS-Cart
                                                                    Ultimate / Multi-Vendor 4.11.3 NULLED</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/information-vip-file/vip-file/">VIP
                                                                    File</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/#post-3454"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">9 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="35"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Testing again </p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="35">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-35"
                                                                    data-activity-id="35"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="35" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="35"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-34"
                                                    data-bp-activity-id="34" data-bp-timestamp="1650343899"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/">CS-Cart
                                                                    Ultimate / Multi-Vendor 4.11.3 NULLED</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/information-vip-file/vip-file/">VIP
                                                                    File</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/#post-3453"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">9 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="34"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Testing </p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="34">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-34"
                                                                    data-activity-id="34"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="34" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="34"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-33"
                                                    data-bp-activity-id="33" data-bp-timestamp="1647917647"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/">How
                                                                    can I resubmit peer graded assignment</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/">Community
                                                                    Help &amp; Questions</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/#post-3396"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">10 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="33"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>test</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="33">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-33"
                                                                    data-activity-id="33"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="33" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="33"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-32"
                                                    data-bp-activity-id="32" data-bp-timestamp="1647712716"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/">Get
                                                                    free access to a hands-on data science project!</a>
                                                                in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/#post-3394"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">10 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="32"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Odlično. Probaću</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="32">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-32"
                                                                    data-activity-id="32"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="32" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="32"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-31"
                                                    data-bp-activity-id="31" data-bp-timestamp="1647470941"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/">Get
                                                                    free access to a hands-on data science project!</a>
                                                                in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/">Welcome
                                                                    &amp; Announcements</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/#post-3378"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">10 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="31"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>wsw</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="31">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-31"
                                                                    data-activity-id="31"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="31" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="31"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-30"
                                                    data-bp-activity-id="30" data-bp-timestamp="1645078394"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/research-on-forum-participation-as-a-predictor-of-course-completion/">Research
                                                                    on forum participation as a predictor of course
                                                                    completion</a> in the forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/networking-social-discussion/">Networking
                                                                    &amp; Social Discussion</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/research-on-forum-participation-as-a-predictor-of-course-completion/#post-3040"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">11 months ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="30"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>ㄴㅇㄹㄴㅇㄹㄴㅇㄹ</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="30">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-30"
                                                                    data-activity-id="30"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="30" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="30"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item mini"
                                                    id="activity-29" data-bp-activity-id="29"
                                                    data-bp-timestamp="1644481431" data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/thinking-fast-and-slow-and-the-3rd-wave-of-ai/">Thinking
                                                                    Fast and Slow and the 3rd Wave of AI.</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/networking-social-discussion/">Networking
                                                                    &amp; Social Discussion</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/thinking-fast-and-slow-and-the-3rd-wave-of-ai/#post-3027"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">1 year ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="29"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="29">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-29"
                                                                    data-activity-id="29"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="29" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="29"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>








                                                <li class="bbpress bbp_reply_create activity-item" id="activity-28"
                                                    data-bp-activity-id="28" data-bp-timestamp="1643861316"
                                                    data-canedite="true">

                                                    <div class="activity-avatar item-avatar">

                                                        <a href="https://theconstructionplatform.com/members/admin/">

                                                            <img loading="lazy"
                                                                src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                                                                class="avatar user-1-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of admin">
                                                        </a>

                                                    </div>

                                                    <div class="activity-content">

                                                        <div class="activity-header">
                                                            <p><a
                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a>
                                                                replied to the topic <a
                                                                    href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/">How
                                                                    can I resubmit peer graded assignment</a> in the
                                                                forum <a
                                                                    href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/">Community
                                                                    Help &amp; Questions</a><a
                                                                    href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/#post-3006"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">1 year ago<i
                                                                            class="line"></i><span
                                                                            class="ac-vi-co" data-vi="1"><span
                                                                                class="ac_vi_text">Public</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon"
                                                                                viewBox="0 0 512 512" width="16"
                                                                                height="16" fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a></p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-three-dots"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option"> More Options </span>
                                                                <ul>
                                                                    <li>
                                                                        <a class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                                                            href="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Save</h4>
                                                                                <p>Save this post / add to favourite</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>


                                                                    <li>
                                                                        <a class="edite-activity">
                                                                            <svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                                                                    fill="#1d2327"></path>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Edit</h4>
                                                                                <p>Edit this activity</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="28"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg>
                                                                            <div>
                                                                                <h4>Delete</h4>
                                                                                <p>Move this activity to trash</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="activity-inner">
                                                            <p>Test<img loading="lazy"
                                                                    src="image/png;base64,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">
                                                            </p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="28">
                                                                </div>
                                                                <div class="comments-meta activity-comments-meta-28"
                                                                    data-activity-id="28"><a href=""
                                                                        class=""></a></div>
                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction=""
                                                                        data-id="28" class="button"
                                                                        data-user="1" data-nonce="5e7da242cb">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path
                                                                                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                            </path>
                                                                        </svg>Like
                                                                    </a>
                                                                    <span class="reaction_icons">

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="28"
                                                                                data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction">
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>




                                                </li>





                                                <li class="load-more">
                                                    <a
                                                        href="https://theconstructionplatform.com/wp-admin/admin-ajax.php?acpage=2&amp;offset_lower=59">Load
                                                        More</a>
                                                </li>


                                            </ul>


                                        </div><!-- .activity -->


                                    </div><!-- #item-body -->
                                </div><!-- // .bp-wrap -->

                            </div><!-- #buddypress -->
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-0 -->
                </div><!-- #.content-inner -->
            </main><!-- #main -->
            <aside id="sidebar-primary" class="sidebar-primary tophive-col-3_sm-12">
                <div class="sidebar-primary-inner sidebar-inner widget-area" style="top: 20px;">
                    <section id="buddypress_profile_desc-2" class="widget tophive-mf-profile-info-widget">
                        <div>
                            <h4 class="widget-title">About</h4>
                            <p class="ec-mb-0"></p>
                        </div>
                    </section>
                    <section id="buddypress_profile_media-2" class="widget tophive-mf-profile-media-widget">
                        <div>
                            <h4 class="widget-title">Photos</h4>
                            <div class="ec-row bp-image-previewer"></div>
                        </div>
                    </section>
                </div>
            </aside><!-- #sidebar-primary -->
        </div><!-- #.tophive-grid -->
    </div><!-- #.tophive-container -->
@endsection
