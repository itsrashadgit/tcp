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




                                                <li id="just-me-personal-li" class="bp-personal-sub-tab current selected"
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
                                                            class="avatar user-1-avatar avatar-50 photo" width="50"
                                                            height="50" alt="Profile picture of admin"> </a>
                                                    <p class="whats-new-intro-header">What's on your mind, admin?</p>
                                                    <div class="whats-new-header-media-section">
                                                        <p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-camera"
                                                                viewBox="0 0 16 16">
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
                                                                <svg width="36" height="36" viewBox="0 0 36 36"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </p>
                                                            <p class="play video has-tooltip">
                                                                <span class="new-post-tooltip">Video</span>
                                                                <svg width="36" height="36" viewBox="0 0 36 36"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M28.0002 13L21.3184 18L28.0002 23V13Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path
                                                                        d="M19.4091 11H8.90909C7.85473 11 7 11.8954 7 13V23C7 24.1046 7.85473 25 8.90909 25H19.4091C20.4635 25 21.3182 24.1046 21.3182 23V13C21.3182 11.8954 20.4635 11 19.4091 11Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </p>
                                                            <p class="documents rotate-45 has-tooltip">
                                                                <span class="new-post-tooltip">Documents</span>
                                                                <svg width="36" height="36" viewBox="0 0 36 36"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M20 10H13.6C13.1757 10 12.7687 10.1686 12.4686 10.4686C12.1686 10.7687 12 11.1757 12 11.6V24.4C12 24.8243 12.1686 25.2313 12.4686 25.5314C12.7687 25.8314 13.1757 26 13.6 26H23.2C23.6243 26 24.0313 25.8314 24.3314 25.5314C24.6314 25.2313 24.8 24.8243 24.8 24.4V14.8L20 10Z"
                                                                        stroke="#C4C4C4" stroke-width="1.3"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
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
                                                                <svg width="36" height="36" viewBox="0 0 36 36"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 19.8C14.4 19.8 15.75 21.6 18 21.6C20.25 21.6 21.6 19.8 21.6 19.8M20.7 15.3H20.709M15.3 15.3H15.309M27 18C27 22.9706 22.9706 27 18 27C13.0294 27 9 22.9706 9 18C9 13.0294 13.0294 9 18 9C22.9706 9 27 13.0294 27 18ZM21.15 15.3C21.15 15.5485 20.9485 15.75 20.7 15.75C20.4515 15.75 20.25 15.5485 20.25 15.3C20.25 15.0515 20.4515 14.85 20.7 14.85C20.9485 14.85 21.15 15.0515 21.15 15.3ZM15.75 15.3C15.75 15.5485 15.5485 15.75 15.3 15.75C15.0515 15.75 14.85 15.5485 14.85 15.3C14.85 15.0515 15.0515 14.85 15.3 14.85C15.5485 14.85 15.75 15.0515 15.75 15.3Z"
                                                                        stroke="#C4C4C4" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
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
                                                                id="aw-whats-new-submit" value="Post" disabled="">
                                                        </div>


                                                    </div><!-- #whats-new-options -->
                                                </div><!-- #whats-new-content -->

                                                <input type="hidden" id="_wpnonce_post_update"
                                                    name="_wpnonce_post_update" value="7191b4661d"><input type="hidden"
                                                    name="_wp_http_referer" value="/members/admin/">
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


                                        <div id="activity-stream" class="activity single-user" data-bp-list="activity"
                                            style="">

                                            <ul class="activity-list item-list bp-list">



                                                <li class="activity activity_update activity-item" id="activity-60"
                                                    v-for="feed in feeds" :key="feed.id">
                                                    <div class="activity-avatar item-avatar">
                                                        <a href="">
                                                            <img loading="lazy" :src="feed.user_avatar"
                                                                class="avatar user-2-avatar avatar-150 photo"
                                                                width="150" height="150"
                                                                alt="Profile picture of Michael Knight" />
                                                        </a>
                                                    </div>

                                                    <div class="activity-content">
                                                        <div class="activity-header">
                                                            <p>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/knight/">@{{ feed.name }}</a>
                                                                posted an update<a
                                                                    href="https://theconstructionplatform.com/activity/p/60/"
                                                                    class="view activity-time-since bp-tooltip"
                                                                    data-bp-tooltip="View Discussion"><span
                                                                        class="time-since">@{{ feed.created_at }}<i
                                                                            class="line"></i><span class="ac-vi-co"
                                                                            data-vi="1"><span
                                                                                class="ac_vi_text">@{{ feed.visibility }}</span><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="ionicon" viewBox="0 0 512 512"
                                                                                width="16" height="16"
                                                                                fill="#b6b0ae">
                                                                                <path
                                                                                    d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z">
                                                                                </path>
                                                                            </svg></span></span></a>
                                                            </p>
                                                            <div class="activity-extension-links">
                                                                <span class="open-button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-three-dots" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span class="more-option">
                                                                    More Options
                                                                </span>
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
                                                                                <p>
                                                                                    Save this post / add to favourite
                                                                                </p>
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a class="button button-activity-delete"
                                                                            href="#" data-id="60"
                                                                            data-action="delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="#000000" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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
                                                            <p>@{{ feed.content }}</p>
                                                        </div>

                                                        <div class="activity-footer-links">
                                                            <div class="th-bp-footer-meta">
                                                                <div class="reactions-meta" data-activity-id="60">
                                                                    <span class="reaction-meta-container"><span
                                                                            class="reaction-images"></span></span>
                                                                </div>

                                                                <div class="comments-meta activity-comments-meta-60"
                                                                    data-activity-id="60" v-if="feed.total_comments > 0">
                                                                    <a href="#main-comments-container-60"
                                                                        class="activity-comments-toggle"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-chat-fill"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z">
                                                                            </path>
                                                                        </svg>@{{ feed.total_comments }} Comments</a>
                                                                </div>

                                                            </div>
                                                            <div class="th-bp-footer-meta-actions">
                                                                <div
                                                                    class="th-bp-post-like-button th-bp-activity-like-button">
                                                                    <a href="#" data-reaction="" data-id="60"
                                                                        class="button" data-user="1"
                                                                        data-nonce="23464fb70f">
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
                                                                            <img data-activity-id="60" data-type="like"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                                                alt="reaction" />
                                                                            <span class="reaction_icon_tooltip">like</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="60" data-type="love"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                                                alt="reaction" />
                                                                            <span class="reaction_icon_tooltip">love</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="60" data-type="haha"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                                                alt="reaction" />
                                                                            <span class="reaction_icon_tooltip">haha</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="60" data-type="wow"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                                                alt="reaction" />
                                                                            <span class="reaction_icon_tooltip">wow</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="60" data-type="cry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                                alt="reaction" />
                                                                            <span class="reaction_icon_tooltip">cry</span>
                                                                        </span>

                                                                        <span class="reaction_icon_con">
                                                                            <img data-activity-id="60" data-type="angry"
                                                                                src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                                alt="reaction" />
                                                                            <span
                                                                                class="reaction_icon_tooltip">angry</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="th-bp-post-comment-button">
                                                                    <a href="" data-activity-id="activity-60"
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
                                                                    <a href="" data-activity-id="60"
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
                                                                                    x2="15.42" y2="17.49"></line>
                                                                                <line x1="15.41" y1="6.51"
                                                                                    x2="8.59" y2="10.49"></line>
                                                                            </svg></span>
                                                                        <span>Share</span>
                                                                    </a>
                                                                    <ul class="sharing-options">
                                                                        <li>
                                                                            <a href="60" class="timeline-share"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-reply"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z">
                                                                                    </path>
                                                                                </svg>Share on activity</a>
                                                                        </li>
                                                                        <li>
                                                                            <a target="_blank" data-share-type="twitter"
                                                                                href="https://twitter.com/intent/tweet?url=https://theconstructionplatform.com/activity/p/60/"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-twitter"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                                                                    </path>
                                                                                </svg>Share on twitter</a>
                                                                        </li>
                                                                        <li>
                                                                            <a target="_blank" data-share-type="facebook"
                                                                                href="https://www.facebook.com/sharer/sharer.php?u=https://theconstructionplatform.com/activity/p/60/"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-facebook"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                                                    </path>
                                                                                </svg>Share on facebook</a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-share-type="whatsapp"
                                                                                href="whatsapp://send?text=https://theconstructionplatform.com/activity/p/60/"
                                                                                data-action="share/whatsapp/share"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="15" height="15"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-whatsapp"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                                                                    </path>
                                                                                </svg>Share on whatsApp</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="activity-comments">
                                                        <div class="activity-comments-form">
                                                            <img alt=""
                                                                src="{{ asset(Auth::user()->avatar ? '/images/user/' . Auth::user()->avatar : 'images/avatar.png') }}"
                                                                class="avatar avatar-30 photo" height="30"
                                                                width="30" loading="lazy" decoding="async" />
                                                            <form @submit.prevent="() => postComment(feed.id)"
                                                                class="tophive-bp-comment-form activity-60"
                                                                data-type="postComment">
                                                                <input type="submit" hidden />
                                                                {{-- <div
                                        class="comments-text editable-div"
                                        contenteditable=""
                                        data-placeholder="Type a comment..."
                                    ></div> --}}
                                                                <div>
                                                                    <input type="text" placeholder="Type a comment..."
                                                                        :id="'comment-' + feed.id" class="post-comment">
                                                                </div>
                                                                <div class="comments-media-icons">
                                                                    <p class="comments-image-uploader">
                                                                        <label for="comment-upload-media-60">
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
                                                                        <input type="file" name="comment-upload-media"
                                                                            data-id="60" class="comment-upload-media"
                                                                            id="comment-upload-media-60" />
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <input type="hidden" class="comment-media-url"
                                                                        id="comment-media-url-60" value="" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="comments-media-previewer comments-media-preview-60">
                                                        </div>

                                                        <ul id="main-comments-container-60"
                                                            v-if="feed.total_comments > 0">
                                                            <li data-id="3HNL0QTICG" v-for="comment in feed.comments">
                                                                <span class="comment-avatar"><img alt=""
                                                                        src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                                                                        class="avatar avatar-30 photo" height="30"
                                                                        width="30" loading="lazy"
                                                                        decoding="async" /></span><span
                                                                    class="comment-content"><span class="comment-meta"><a
                                                                            href="https://theconstructionplatform.com/members/admin/">admin</a><span
                                                                            class="comment-date">6 mins ago</span></span>
                                                                    <p>@{{ comment.comment }}</p>
                                                                </span><span class="comment-meta-actions"><a
                                                                        class="comment-reply-form-toggle"
                                                                        href="#comment-reply-form-3HNL0QTICG">Reply</a><a
                                                                        class="comment-delete" href="#"
                                                                        data-activity-id="60" data-reply-id=""
                                                                        data-comment-id="3HNL0QTICG">Delete</a></span><span
                                                                    class="comment-reply comment-reply-form-3HNL0QTICG"
                                                                    id="comment-reply-form-3HNL0QTICG">
                                                                    <div class="activity-comments-form">
                                                                        <img alt=""
                                                                            src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                                                                            srcset="
                                                    //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x
                                                    "
                                                                            class="avatar avatar-30 photo" height="30"
                                                                            width="30" loading="lazy"
                                                                            decoding="async" />
                                                                        <form class="tophive-bp-comment-form activity-60"
                                                                            data-type="postCommentReply"
                                                                            data-comment-id="3HNL0QTICG"
                                                                            data-activity-id="60">
                                                                            <div class="comments-text editable-div"
                                                                                contenteditable=""
                                                                                data-placeholder="Type a comment..."></div>
                                                                            <div class="comments-media-icons">
                                                                                <p class="comments-image-uploader">
                                                                                    <label for="comment-upload-media-60">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="32" height="32"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="#999999"
                                                                                            stroke-width="1.8"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                            <rect x="3"
                                                                                                y="3"
                                                                                                width="18"
                                                                                                height="18"
                                                                                                rx="2"></rect>
                                                                                            <circle cx="8.5"
                                                                                                cy="8.5"
                                                                                                r="1.5"></circle>
                                                                                            <path
                                                                                                d="M20.4 14.5L16 10 4 20">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </label>
                                                                                    <input type="file"
                                                                                        name="comment-upload-media"
                                                                                        data-id="60"
                                                                                        class="comment-upload-media"
                                                                                        id="comment-upload-media-60" />
                                                                                </p>
                                                                            </div>
                                                                            <div>
                                                                                <input type="hidden"
                                                                                    class="comment-media-url"
                                                                                    id="comment-media-url-60"
                                                                                    value="" />
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="comments-media-previewer comments-media-preview-60">
                                                                    </div>
                                                                </span>
                                                            </li>
                                                        </ul>

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





@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            loading_feeds: true,
            feeds: [],
            feedform: {
                visibility: 'public'
            },
        }

        vmethods = {
            ...vmethods,
            async fetchFeeds() {

                try {
                    const response = await axios.get(`{{ route('api.myfeeds.get') }}`);
                    vdata.feeds = response.data.data;
                    vdata.loading_feeds = false;
                } catch (err) {
                    console.log(err);
                    vdata.loading_feeds = false;
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
            async submitFeed() {

                const visibility = $("#visibility-handler").text().trim();
                const content = $("#th-bp-whats-new").text().trim();

                try {
                    const response = await axios.post("{{ route('api.feeds.store') }}", {
                        visibility,
                        content
                    });
                    window.location.reload();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
            async postComment(feed_id) {

                const comment = $("#comment-" + feed_id).val();
                try {
                    const response = await axios.post("{{ route('api.comments.store') }}", {
                        feed_id,
                        comment: comment,
                        feed_comment_id: '',
                    });
                    this.fetchFeeds();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            }
        }

        vcreated = {
            ...vcreated,
            run: function() {
                vmethods.fetchFeeds();
            }
            // function key: function(){}
        }

        vmounted = {
            ...vmounted,
            // function key: function(){}
        }
    </script>
@endpush
