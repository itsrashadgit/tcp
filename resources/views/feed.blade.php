@extends('layouts.app')

@section('content')
    <div class="tophive-container">

        <div class="tabs7 mt-4">
            <ul class="nav m-0">
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('trade.list') }}">Tradesmen</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('trade.list') }}">Contractors</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('profile.list') }}">Architects/Engineers</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('profile.list') }}">Trade Organizations/Associations</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('profile.list') }}">Trade Schools/Education</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('profile.list') }}">Facility/Property Mgmt</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('profile.list') }}">Vendors</a></li>
            </ul>
        </div>

        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-6_md-9_sm-12">
                <div class="content-inner">

                    <article id="post-0"
                        class="bp_activity type-bp_activity entry post-0 page type-page status-publish hentry pmpro-has-access">
                        <div class="entry-content">
                            <div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">
                                <div id="bp-nouveau-activity-form" class="activity-update-form">
                                    <form @submit.prevent="submitFeed" method="post" id="whats-new-form"
                                        name="whats-new-form">
                                        <div class="activity-post-form-header">
                                            <h4>Create post</h4>
                                            <span class="whats-new-close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <p class="what-is-new-avatar-text">{{ Auth::user()->name }}</p>
                                        <div class="mf-activity-accessibility-container">
                                            <select id="mf-activity-accessibility" class="mf-activity-accessibility"
                                                name="visibility" id="feed-visibility">
                                                <option value="public">Public</option>
                                                <option value="friends">Friends</option>
                                                <option value="onlyme">Only me</option>
                                            </select>
                                        </div>

                                        <div id="whats-new-avatar">
                                            <a href="{{ route('home.user') }}">
                                                <img loading="lazy"
                                                    src="{{ asset(Auth::user()->avatar ? '/images/user/' . Auth::user()->avatar : 'images/avatar.png') }}"
                                                    class="avatar user-1-avatar avatar-50 photo" width="50"
                                                    height="50" alt="Profile picture of admin" />
                                            </a>
                                            <p class="whats-new-intro-header">
                                                What&#039;s on your mind, {{ Auth::user()->name }}?
                                            </p>
                                            <div class="whats-new-header-media-section">
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                        <path
                                                            d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </div>

                                        <div id="whats-new-content">
                                            <div id="whats-new-textarea">
                                                <div contenteditable="true"
                                                    class="bp-suggestions advanced-th-bp-activity-form"
                                                    data-placeholder="What&#039;s on your mind, {{ Auth::user()->name }}?"
                                                    name="whats-new" id="th-bp-whats-new" cols="50" rows="10">
                                                </div>
                                                <div class="whats-new-previewer">
                                                    <p class="previewer-uploader">
                                                        <label for="upload-media">+</label>
                                                        <input type="file" name="upload-media" id="upload-media" />
                                                    </p>
                                                </div>
                                                <div id="whats-new-attachments">
                                                    <p class="image has-tooltip">
                                                        <span class="new-post-tooltip">Photos</span>
                                                        <svg width="36" height="36" viewBox="0 0 36 36"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                                                stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                                                stroke="#C4C4C4" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </p>
                                                    <p class="play video has-tooltip">
                                                        <span class="new-post-tooltip">Video</span>
                                                        <svg width="36" height="36" viewBox="0 0 36 36"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M28.0002 13L21.3184 18L28.0002 23V13Z"
                                                                stroke="#C4C4C4" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M19.4091 11H8.90909C7.85473 11 7 11.8954 7 13V23C7 24.1046 7.85473 25 8.90909 25H19.4091C20.4635 25 21.3182 24.1046 21.3182 23V13C21.3182 11.8954 20.4635 11 19.4091 11Z"
                                                                stroke="#C4C4C4" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </p>
                                                    <p class="documents rotate-45 has-tooltip">
                                                        <span class="new-post-tooltip">Documents</span>
                                                        <svg width="36" height="36" viewBox="0 0 36 36"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 10H13.6C13.1757 10 12.7687 10.1686 12.4686 10.4686C12.1686 10.7687 12 11.1757 12 11.6V24.4C12 24.8243 12.1686 25.2313 12.4686 25.5314C12.7687 25.8314 13.1757 26 13.6 26H23.2C23.6243 26 24.0313 25.8314 24.3314 25.5314C24.6314 25.2313 24.8 24.8243 24.8 24.4V14.8L20 10Z"
                                                                stroke="#C4C4C4" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M20 10V14.8H24.8" stroke="#C4C4C4"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M21.6 18.8H15.2" stroke="#C4C4C4" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M21.6 22H15.2" stroke="#C4C4C4" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16.8 15.6H16H15.2" stroke="#C4C4C4"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </p>
                                                    <p class="emojipicker has-tooltip">
                                                        <span class="new-post-tooltip">Emoji</span>
                                                        <svg width="36" height="36" viewBox="0 0 36 36"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.4 19.8C14.4 19.8 15.75 21.6 18 21.6C20.25 21.6 21.6 19.8 21.6 19.8M20.7 15.3H20.709M15.3 15.3H15.309M27 18C27 22.9706 22.9706 27 18 27C13.0294 27 9 22.9706 9 18C9 13.0294 13.0294 9 18 9C22.9706 9 27 13.0294 27 18ZM21.15 15.3C21.15 15.5485 20.9485 15.75 20.7 15.75C20.4515 15.75 20.25 15.5485 20.25 15.3C20.25 15.0515 20.4515 14.85 20.7 14.85C20.9485 14.85 21.15 15.0515 21.15 15.3ZM15.75 15.3C15.75 15.5485 15.5485 15.75 15.3 15.75C15.0515 15.75 14.85 15.5485 14.85 15.3C14.85 15.0515 15.0515 14.85 15.3 14.85C15.5485 14.85 15.75 15.0515 15.75 15.3Z"
                                                                stroke="#C4C4C4" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="whats-new-options">
                                                <input type="hidden" id="whats-new-post-object"
                                                    name="whats-new-post-object" value="groups" />
                                                <input type="hidden" id="whats-new-post-media"
                                                    name="whats-new-post-media" value="" />
                                                <input type="hidden" id="whats-new-post-url-preview"
                                                    name="whats-new-post-url-preview" value="" />

                                                <div id="whats-new-submit">
                                                    <input type="submit" name="aw-whats-new-submit"
                                                        id="aw-whats-new-submit" value="Post" disabled />
                                                </div>
                                            </div>
                                            <!-- #whats-new-options -->
                                        </div>
                                        <!-- #whats-new-content -->

                                        <input type="hidden" id="_wpnonce_post_update" name="_wpnonce_post_update"
                                            value="5a60ababef" /><input type="hidden" name="_wp_http_referer"
                                            value="/" />
                                    </form>
                                    <!-- #whats-new-form -->
                                </div>
                                <div class="ac-post-form-showcase">
                                    <img alt=""
                                        src="{{ asset(Auth::user()->avatar ? '/images/user/' . Auth::user()->avatar : 'images/avatar.png') }}"
                                        class="avatar avatar-96 photo" height="96" width="96" loading="lazy"
                                        decoding="async" />
                                    <span>What's on your mind?</span>
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="18" r="18" fill="#F8F8F8" />
                                        <path
                                            d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                            stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                            stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                {{-- <nav class="activity-type-navs main-navs bp-navs dir-navs" role="navigation"
                                    aria-label="Directory menu">
                                    <ul class="component-navigation activity-nav">
                                        <li id="activity-all" class="dynamic" data-bp-scope="all"
                                            data-bp-object="activity">
                                            <a href="https://theconstructionplatform.com/activity/">
                                                All Members
                                                <span class="count">0</span>
                                            </a>
                                        </li>

                                        <li id="activity-mentions" class="dynamic" data-bp-scope="mentions"
                                            data-bp-object="activity">
                                            <a href="https://theconstructionplatform.com/members/admin/activity/mentions/">
                                                Mentions
                                                <span class="count">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav> --}}
                                <!-- .bp-navs -->

                                <div class="screen-content">
                                    <div class="subnav-filters filters no-ajax" id="subnav-filters">
                                        <div class="subnav-search clearfix">
                                            <div id="activity-rss-feed" class="feed">
                                                <a href="https://theconstructionplatform.com/activity/feed/"
                                                    class="bp-tooltip" data-bp-tooltip="RSS Feed">
                                                    <span class="bp-screen-reader-text">RSS Feed</span>
                                                </a>
                                            </div>

                                            <div class="dir-search activity-search bp-search" data-bp-search="activity">
                                                <form method="get" class="bp-dir-search-form"
                                                    id="dir-activity-search-form" role="search">
                                                    <label for="dir-activity-search" class="bp-screen-reader-text">Search
                                                        Activity...</label>

                                                    <input id="dir-activity-search" name="activity_search" type="search"
                                                        placeholder="Search Activity..." />

                                                    <button type="submit" id="dir-activity-search-submit"
                                                        class="nouveau-search-submit" name="dir_activity_search_submit">
                                                        <span class="dashicons dashicons-search"
                                                            aria-hidden="true"></span>
                                                        <span id="button-text" class="bp-screen-reader-text">Search</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                        <div id="dir-filters" class="component-filters clearfix">
                                            <div id="activity-filter-select" class="last filter">
                                                <label class="bp-screen-reader-text" for="activity-filter-by">
                                                    <span>Show:</span>
                                                </label>
                                                <div class="select-wrap">
                                                    <select id="activity-filter-by" data-bp-filter="activity">
                                                        <option value="0">
                                                            &mdash; Everything &mdash;
                                                        </option>
                                                        <option value="new_member">
                                                            New Members
                                                        </option>
                                                        <option value="updated_profile">
                                                            Profile Updates
                                                        </option>
                                                        <option value="activity_update">
                                                            Updates
                                                        </option>
                                                        <option value="bbp_topic_create">
                                                            Topics
                                                        </option>
                                                        <option value="bbp_reply_create">
                                                            Replies
                                                        </option>
                                                    </select>
                                                    <span class="select-arrow" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- search & filters -->

                                    <div id="activity-stream" class="activity" data-bp-list="activity">
                                        <div v-if="loading_feeds">
                                            <div id="bp-ajax-loader" v-for="feed_loader in 5">
                                                <div class="metafans-skeleton activity">
                                                    <main class="skeleton-container">
                                                        <div class="skeleton-header">
                                                            <div class="skeleton-media">
                                                                <span class="skeleton-box"></span>
                                                            </div>
                                                            <div class="skeleton-heading">
                                                                <span class="skeleton-box action"></span>
                                                                <span class="skeleton-box meta"></span>
                                                            </div>
                                                        </div>
                                                        <div class="skeleton-content">
                                                            <span class="skeleton-box content" style="width: 50%"></span>
                                                            <span class="skeleton-box content" style="width: 90%"></span>
                                                            <span class="skeleton-box content" style="width: 70%"></span>
                                                        </div>
                                                        <div class="skeleton-footer">
                                                            <span class="skeleton-box footer"></span>
                                                            <span class="skeleton-box footer"></span>
                                                            <span class="skeleton-box footer"></span>
                                                        </div>
                                                    </main>
                                                </div>
                                            </div>
                                        </div>

                                        <ul v-else class="activity-list item-list bp-list">

                                            <li class="activity activity_update activity-item" id="activity-60"
                                                v-for="feed in feeds" :key="feed.id">
                                                <div class="activity-avatar item-avatar">
                                                    <a href="">
                                                        <img loading="lazy" :src="feed.user_avatar"
                                                            class="avatar user-2-avatar avatar-150 photo" width="150"
                                                            height="150" alt="Profile picture of Michael Knight" />
                                                    </a>
                                                </div>

                                                <div class="activity-content">
                                                    <div class="activity-header">
                                                        <p>
                                                            <a
                                                                :href="`/tcp/profile/${feed.username}`">@{{ feed.name }}</a>
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
                                                                            width="16" height="16" fill="#b6b0ae">
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
                                                                        href="#"
                                                                        @click.prevent="() => deleteFeed(feed.id)">
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
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chat-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z">
                                                                        </path>
                                                                    </svg>@{{ feed.total_comments }} Comments</a>
                                                            </div>

                                                        </div>
                                                        <div class="th-bp-footer-meta-actions">
                                                            <div class="th-bp-post-like-button th-bp-activity-like-button">
                                                                <a href="#" data-reaction="" data-id="60"
                                                                    class="button" data-user="1"
                                                                    data-nonce="23464fb70f">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="#888" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
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
                                                                        <img src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                                            alt="reaction" />
                                                                        <span class="reaction_icon_tooltip">cry</span>
                                                                    </span>

                                                                    <span class="reaction_icon_con">
                                                                        <img src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                                            alt="reaction" />
                                                                        <span class="reaction_icon_tooltip">angry</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="th-bp-post-comment-button">
                                                                <a href="" class="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="#888" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <path
                                                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                                        </path>
                                                                    </svg>
                                                                    <span>Comment</span>
                                                                </a>
                                                            </div>
                                                            <div class="th-bp-post-share-button th-ml-auto">
                                                                <a href="" class="button activity-share">
                                                                    <span class="share_icon"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#888" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="arcs">
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
                                                                                fill="currentColor" class="bi bi-reply"
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
                                                                                fill="currentColor" class="bi bi-twitter"
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
                                                                                fill="currentColor" class="bi bi-facebook"
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
                                                                                fill="currentColor" class="bi bi-whatsapp"
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
                                                            class="avatar avatar-30 photo" height="30" width="30"
                                                            loading="lazy" decoding="async" />
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
                                                    <div class="comments-media-previewer comments-media-preview-60"></div>

                                                    <ul id="main-comments-container-60" v-if="feed.total_comments > 0">
                                                        <li data-id="3HNL0QTICG" v-for="comment in feed.comments">
                                                            <span class="comment-avatar"><img alt=""
                                                                    :src="comment.user_avatar"
                                                                    class="avatar avatar-30 photo" height="30"
                                                                    width="30" loading="lazy"
                                                                    decoding="async" /></span><span
                                                                class="comment-content"><span class="comment-meta"><a
                                                                        href="">admin</a><span
                                                                        class="comment-date">6 mins ago</span></span>
                                                                <p>@{{ comment.comment }}</p>
                                                            </span>
                                                            <span class="comment-meta-actions"><a
                                                                    class="comment-reply-form-toggle"
                                                                    href="#comment-reply-form-3HNL0QTICG">Reply</a>
                                                                <a class="comment-delete" href="#"
                                                                    @click.prevent="() => deleteComment(comment.id)">Delete</a>
                                                            </span>

                                                            <span class="comment-replies">
                                                                <ul>
                                                                    <li v-for="reply in comment.replies"
                                                                        :key="reply.id">
                                                                        <span class="comment-avatar">
                                                                            <img alt="" :src="reply.user_avatar"
                                                                                class="avatar avatar-30 photo"
                                                                                height="30" width="30"
                                                                                loading="lazy" decoding="async">
                                                                        </span>
                                                                        <span class="comment-content">
                                                                            <span class="comment-meta"><a
                                                                                    href="https://theconstructionplatform.com/members/admin/">admin</a><span
                                                                                    class="comment-date">2 days
                                                                                    ago</span></span>
                                                                            <p>@{{ reply.comment }}</p>
                                                                        </span>
                                                                        <span class="comment-meta-actions">
                                                                            <a class="comment-reply-form-toggle"
                                                                                href="#comment-reply-form-3HNL0QTICG">Reply</a>
                                                                            <a class="comment-delete" href="#"
                                                                                @click.prevent="() => deleteComment(reply.id)">Delete</a>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </span>

                                                            <span class="comment-reply comment-reply-form-3HNL0QTICG"
                                                                id="comment-reply-form-3HNL0QTICG">
                                                                <div class="activity-comments-form">
                                                                    <img alt="" :src="comment.user_avatar"
                                                                        class="avatar avatar-30 photo" height="30"
                                                                        width="30" loading="lazy" decoding="async" />
                                                                    <form class="tophive-bp-comment-form activity-60"
                                                                        @submit.prevent="() => replyComment(feed.id, comment.id)">
                                                                        {{-- <div
                                                    class="comments-text editable-div"
                                                    ></div> --}}
                                                                        <input type="text"
                                                                            placeholder="Type a comment..."
                                                                            :id="'comment-' + comment.id"
                                                                            class="post-comment">
                                                                        <div class="comments-media-icons">
                                                                            <p class="comments-image-uploader">
                                                                                <label for="comment-upload-media-60">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="32" height="32"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="#999999"
                                                                                        stroke-width="1.8"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round">
                                                                                        <rect x="3"
                                                                                            y="3" width="18"
                                                                                            height="18" rx="2">
                                                                                        </rect>
                                                                                        <circle cx="8.5"
                                                                                            cy="8.5" r="1.5">
                                                                                        </circle>
                                                                                        <path d="M20.4 14.5L16 10 4 20">
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
                                                    href="https://theconstructionplatform.com/wp-admin/admin-ajax.php?acpage=2&amp;offset_lower=60">Load
                                                    More</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .activity -->
                                </div>
                                <!-- // .screen-content -->
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
            <aside id="sidebar-primary" class="sidebar-primary tophive-col-3_sm-12">
                <div class="sidebar-primary-inner sidebar-inner widget-area">
                    <section id="block-25" class="widget widget_block widget_bp_core_members_widget buddypress">
                        <div class="bp-dynamic-block-container">
                            <h2 class="widget-title">Pipeline</h2>

                            <ul class="item-list">
                                <li class="vcard d-flex align-items-center">
                                    <div class="item-avatar">
                                        <a href="https://theconstructionplatform.com/members/admin/" class="bp-tooltip"
                                            data-bp-tooltip="admin">
                                            <img loading="lazy"
                                                src="data:image/jpeg;base64,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"
                                                class="avatar user-1-avatar avatar-50 photo" width="50"
                                                height="50" alt="Profile picture of admin">
                                        </a>
                                    </div>
                                    <div class="mx-1"></div>
                                    <div class="item">
                                        <div class="item-title fn"><a
                                                href="">Event Name</a></div>
                                        <div class="item-meta">
                                            <span class="activity">Event Descriptions</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </aside>
            <!-- #sidebar-primary -->
            <aside id="sidebar-secondary" class="sidebar-secondary tophive-col-3_md-0_sm-12-first">
                <div class="sidebar-secondary-inner sidebar-inner widget-area">

                    <section id="block-22" class="widget widget_block widget_bp_core_whos_online_widget buddypress">
                        {{-- <h2 class="widget-title">Who&#039;s Online</h2>
            <div class="avatar-block">
              <div class="item-avatar">
                <a
                  href="https://theconstructionplatform.com/members/admin/"
                  class="bp-tooltip"
                  data-bp-tooltip="admin"
                >
                  <img
                    decoding="async"
                    loading="lazy"
                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=50&#038;r=g&#038;d=mm"
                    class="avatar user-1-avatar avatar-50 photo"
                    width="50"
                    height="50"
                    alt="Profile picture of admin"
                  />
                </a>
              </div>
            </div> --}}
                        <div id="item-header" role="complementary" class="users-header single-headers">
                            <div id="cover-image-container">
                                <a id="header-cover-image" href=""></a>

                                <div id="item-header-cover-image">
                                    <div class="w-100 text-center">
                                        <img loading="lazy"
                                            src="{{ asset(Auth::user()->avatar ? '/images/user/' . Auth::user()->avatar : 'images/avatar.png') }}"
                                            class="img-fluid rounded mx-auto" width="150" height="150"
                                            alt="Profile picture of Michael Knight" />
                                    </div>
                                    <div id="item-header-content text-center mt-3">
                                        <h1 class="h5">{{ Auth::user()->name }}</h1>
                                        <div id="item-meta text-center">
                                            <p class="profile-header-meta-date"><span
                                                    class="hide-badge">{{ __('@' . Auth::user()->name) }}</span> •
                                                <span>Joined : January 27, 2023 </span></p>
                                            <div class="d-flex align-items-center">
                                                <p>
                                                    <span class="secondary-color followers-count-2">{{ Auth::user()->followers()->count() }}</span>
                                                    <span>Followers</span>
                                                </p>
                                                <span class="mx-1"></span>
                                                <p>
                                                    <span class="secondary-color following-count-2">{{ Auth::user()->followings()->count() }}</span>
                                                    <span>Following</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route("user.profile", Auth::user()->username) }}" class="btn btn-primary text-white w-100">Visit Profile</a>
                        </div>


                    </section>
                    @if (count($portfolios) > 0)
                        <section id="block-22" class="widget widget_block widget_bp_core_whos_online_widget buddypress">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="widget-title">Portfolio</h2>
                                <a href="{{ route("user.portfolio", Auth::user()->username) }}">View Portfolio</a>
                            </div>
                            <div class="row gx-1">
                                @foreach ($portfolios as $portfolio)
                                    <div class="col-4 mb-1">
                                        <div>
                                            <a class="media-popup-thumbnail" href="">
                                                <img src="{{ asset("uploads/portfolio/$portfolio->file_name") }}" alt="gm" style="height: 100px; widht: 100%;" class="img-fluid w-100">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                </div>
            </aside>
            <!-- #sidebar-secondary -->
        </div>
        <!-- #.tophive-grid -->
    </div>
    <!-- #.tophive-container -->
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

                const state_id = @json($state->id);
                const county_id = @json($county->id);
                try {
                    const response = await axios.get(
                        `{{ route('api.feeds.index') }}?state_id=${state_id}&county_id=${county_id}`);
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
            async deleteFeed(feed_id) {

                try {
                    const response = await axios.delete("/tcp/api/v1/feeds/" + feed_id);
                    this.fetchFeeds();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
            async postComment(feed_id, comment_id) {

                const comment = $("#comment-" + feed_id).val();
                try {
                    const response = await axios.post("{{ route('api.comments.store') }}", {
                        feed_id,
                        comment: comment,
                    });
                    this.fetchFeeds();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
            async replyComment(feed_id, comment_id) {

                const comment = $("#comment-" + comment_id).val();
                try {
                    const response = await axios.post("{{ route('api.comments.store') }}", {
                        feed_id,
                        comment: comment,
                        feed_comment_id: comment_id
                    });
                    this.fetchFeeds();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
            async deleteComment(comment_id) {

                try {
                    const response = await axios.delete("/tcp/api/v1/comments/" + comment_id);
                    this.fetchFeeds();
                } catch (err) {
                    console.log(err);
                    // this.toast("Something Wen't Wrong!", "error");
                }
            },
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
