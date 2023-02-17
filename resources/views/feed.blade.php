@extends('layouts.master')



@section('content')
<div class="tophive-container">
    <div class="tophive-grid">
      <main id="main" class="content-area tophive-col-6_md-9_sm-12">
        <div class="content-inner">
          <article
            id="post-0"
            class="bp_activity type-bp_activity entry post-0 page type-page status-publish hentry pmpro-has-access"
          >
            <div class="entry-content">
              <div
                id="buddypress"
                class="buddypress-wrap metafans round-avatars bp-dir-hori-nav"
              >
                <div
                  id="bp-nouveau-activity-form"
                  class="activity-update-form"
                >
                  <form
                    action="https://theconstructionplatform.com/activity/post/"
                    method="post"
                    id="whats-new-form"
                    name="whats-new-form"
                  >
                    <div class="activity-post-form-header">
                      <h4>Create post</h4>
                      <span class="whats-new-close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-x"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                          />
                        </svg>
                      </span>
                    </div>

                    <p class="what-is-new-avatar-text">admin</p>
                    <div class="mf-activity-accessibility-container">
                      <select
                        id="mf-activity-accessibility"
                        class="mf-activity-accessibility"
                        name=""
                      >
                        <option value="public">Public</option>
                        <option value="friends">Friends</option>
                        <option value="onlyme">Only me</option>
                      </select>
                    </div>

                    <div id="whats-new-avatar">
                      <a
                        href="https://theconstructionplatform.com/members/admin/"
                      >
                        <img
                          loading="lazy"
                          src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=50&#038;r=g&#038;d=mm"
                          class="avatar user-1-avatar avatar-50 photo"
                          width="50"
                          height="50"
                          alt="Profile picture of admin"
                        />
                      </a>
                      <p class="whats-new-intro-header">
                        What&#039;s on your mind, admin?
                      </p>
                      <div class="whats-new-header-media-section">
                        <p>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-camera"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"
                            />
                            <path
                              d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"
                            />
                          </svg>
                        </p>
                      </div>
                    </div>

                    <div id="whats-new-content">
                      <div id="whats-new-textarea">
                        <div
                          contenteditable="true"
                          class="bp-suggestions advanced-th-bp-activity-form"
                          data-placeholder="What&#039;s on your mind, admin?"
                          name="whats-new"
                          id="th-bp-whats-new"
                          cols="50"
                          rows="10"
                        ></div>
                        <div class="whats-new-previewer">
                          <p class="previewer-uploader">
                            <label for="upload-media">+</label>
                            <input
                              type="file"
                              name="upload-media"
                              id="upload-media"
                            />
                          </p>
                        </div>
                        <div id="whats-new-attachments">
                          <p class="image has-tooltip">
                            <span class="new-post-tooltip">Photos</span>
                            <svg
                              width="36"
                              height="36"
                              viewBox="0 0 36 36"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                stroke="#C4C4C4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                stroke="#C4C4C4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </p>
                          <p class="play video has-tooltip">
                            <span class="new-post-tooltip">Video</span>
                            <svg
                              width="36"
                              height="36"
                              viewBox="0 0 36 36"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M28.0002 13L21.3184 18L28.0002 23V13Z"
                                stroke="#C4C4C4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M19.4091 11H8.90909C7.85473 11 7 11.8954 7 13V23C7 24.1046 7.85473 25 8.90909 25H19.4091C20.4635 25 21.3182 24.1046 21.3182 23V13C21.3182 11.8954 20.4635 11 19.4091 11Z"
                                stroke="#C4C4C4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </p>
                          <p class="documents rotate-45 has-tooltip">
                            <span class="new-post-tooltip"
                              >Documents</span
                            >
                            <svg
                              width="36"
                              height="36"
                              viewBox="0 0 36 36"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M20 10H13.6C13.1757 10 12.7687 10.1686 12.4686 10.4686C12.1686 10.7687 12 11.1757 12 11.6V24.4C12 24.8243 12.1686 25.2313 12.4686 25.5314C12.7687 25.8314 13.1757 26 13.6 26H23.2C23.6243 26 24.0313 25.8314 24.3314 25.5314C24.6314 25.2313 24.8 24.8243 24.8 24.4V14.8L20 10Z"
                                stroke="#C4C4C4"
                                stroke-width="1.3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M20 10V14.8H24.8"
                                stroke="#C4C4C4"
                                stroke-width="1.3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M21.6 18.8H15.2"
                                stroke="#C4C4C4"
                                stroke-width="1.3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M21.6 22H15.2"
                                stroke="#C4C4C4"
                                stroke-width="1.3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M16.8 15.6H16H15.2"
                                stroke="#C4C4C4"
                                stroke-width="1.3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </p>
                          <p class="emojipicker has-tooltip">
                            <span class="new-post-tooltip">Emoji</span>
                            <svg
                              width="36"
                              height="36"
                              viewBox="0 0 36 36"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M14.4 19.8C14.4 19.8 15.75 21.6 18 21.6C20.25 21.6 21.6 19.8 21.6 19.8M20.7 15.3H20.709M15.3 15.3H15.309M27 18C27 22.9706 22.9706 27 18 27C13.0294 27 9 22.9706 9 18C9 13.0294 13.0294 9 18 9C22.9706 9 27 13.0294 27 18ZM21.15 15.3C21.15 15.5485 20.9485 15.75 20.7 15.75C20.4515 15.75 20.25 15.5485 20.25 15.3C20.25 15.0515 20.4515 14.85 20.7 14.85C20.9485 14.85 21.15 15.0515 21.15 15.3ZM15.75 15.3C15.75 15.5485 15.5485 15.75 15.3 15.75C15.0515 15.75 14.85 15.5485 14.85 15.3C14.85 15.0515 15.0515 14.85 15.3 14.85C15.5485 14.85 15.75 15.0515 15.75 15.3Z"
                                stroke="#C4C4C4"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </p>
                        </div>
                      </div>
                      <div id="whats-new-options">
                        <input
                          type="hidden"
                          id="whats-new-post-object"
                          name="whats-new-post-object"
                          value="groups"
                        />
                        <input
                          type="hidden"
                          id="whats-new-post-media"
                          name="whats-new-post-media"
                          value=""
                        />
                        <input
                          type="hidden"
                          id="whats-new-post-url-preview"
                          name="whats-new-post-url-preview"
                          value=""
                        />

                        <div id="whats-new-submit">
                          <input
                            type="submit"
                            name="aw-whats-new-submit"
                            id="aw-whats-new-submit"
                            value="Post"
                            disabled
                          />
                        </div>
                      </div>
                      <!-- #whats-new-options -->
                    </div>
                    <!-- #whats-new-content -->

                    <input
                      type="hidden"
                      id="_wpnonce_post_update"
                      name="_wpnonce_post_update"
                      value="5a60ababef"
                    /><input
                      type="hidden"
                      name="_wp_http_referer"
                      value="/"
                    />
                  </form>
                  <!-- #whats-new-form -->
                </div>
                <div class="ac-post-form-showcase">
                  <img
                    alt=""
                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=96&#038;r=g&#038;d=mm"
                    srcset="
                      //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=96&#038;r=g&#038;d=mm 2x
                    "
                    class="avatar avatar-96 photo"
                    height="96"
                    width="96"
                    loading="lazy"
                    decoding="async"
                  />
                  <span>What's on your mind?</span>
                  <svg
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="18" cy="18" r="18" fill="#F8F8F8" />
                    <path
                      d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                      stroke="#C4C4C4"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                      stroke="#C4C4C4"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>

                <nav
                  class="activity-type-navs main-navs bp-navs dir-navs"
                  role="navigation"
                  aria-label="Directory menu"
                >
                  <ul class="component-navigation activity-nav">
                    <li
                      id="activity-all"
                      class="dynamic"
                      data-bp-scope="all"
                      data-bp-object="activity"
                    >
                      <a
                        href="https://theconstructionplatform.com/activity/"
                      >
                        All Members
                        <span class="count">0</span>
                      </a>
                    </li>

                    <li
                      id="activity-mentions"
                      class="dynamic"
                      data-bp-scope="mentions"
                      data-bp-object="activity"
                    >
                      <a
                        href="https://theconstructionplatform.com/members/admin/activity/mentions/"
                      >
                        Mentions
                        <span class="count">0</span>
                      </a>
                    </li>
                  </ul>
                  <!-- .component-navigation -->
                </nav>
                <!-- .bp-navs -->

                <div class="screen-content">
                  <div
                    class="subnav-filters filters no-ajax"
                    id="subnav-filters"
                  >
                    <div class="subnav-search clearfix">
                      <div id="activity-rss-feed" class="feed">
                        <a
                          href="https://theconstructionplatform.com/activity/feed/"
                          class="bp-tooltip"
                          data-bp-tooltip="RSS Feed"
                        >
                          <span class="bp-screen-reader-text"
                            >RSS Feed</span
                          >
                        </a>
                      </div>

                      <div
                        class="dir-search activity-search bp-search"
                        data-bp-search="activity"
                      >
                        <form
                          method="get"
                          class="bp-dir-search-form"
                          id="dir-activity-search-form"
                          role="search"
                        >
                          <label
                            for="dir-activity-search"
                            class="bp-screen-reader-text"
                            >Search Activity...</label
                          >

                          <input
                            id="dir-activity-search"
                            name="activity_search"
                            type="search"
                            placeholder="Search Activity..."
                          />

                          <button
                            type="submit"
                            id="dir-activity-search-submit"
                            class="nouveau-search-submit"
                            name="dir_activity_search_submit"
                          >
                            <span
                              class="dashicons dashicons-search"
                              aria-hidden="true"
                            ></span>
                            <span
                              id="button-text"
                              class="bp-screen-reader-text"
                              >Search</span
                            >
                          </button>
                        </form>
                      </div>
                    </div>

                    <div
                      id="dir-filters"
                      class="component-filters clearfix"
                    >
                      <div
                        id="activity-filter-select"
                        class="last filter"
                      >
                        <label
                          class="bp-screen-reader-text"
                          for="activity-filter-by"
                        >
                          <span>Show:</span>
                        </label>
                        <div class="select-wrap">
                          <select
                            id="activity-filter-by"
                            data-bp-filter="activity"
                          >
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
                          <span
                            class="select-arrow"
                            aria-hidden="true"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- search & filters -->

                  <div
                    id="activity-stream"
                    class="activity"
                    data-bp-list="activity"
                  >
                    <div id="bp-ajax-loader">
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
                            <span
                              class="skeleton-box content"
                              style="width: 50%"
                            ></span>
                            <span
                              class="skeleton-box content"
                              style="width: 90%"
                            ></span>
                            <span
                              class="skeleton-box content"
                              style="width: 70%"
                            ></span>
                          </div>
                          <div class="skeleton-footer">
                            <span class="skeleton-box footer"></span>
                            <span class="skeleton-box footer"></span>
                            <span class="skeleton-box footer"></span>
                          </div>
                        </main>
                      </div>
                    </div>

                    <ul class="activity-list item-list bp-list">
                      <li
                        class="activity activity_update activity-item date-recorded-1674913577"
                        id="activity-60"
                        data-bp-activity-id="60"
                        data-bp-timestamp="1674913577"
                        data-canedite="false"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/knight/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/db9578ef026af3aa804383699b90d150?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-2-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of Michael Knight"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/knight/"
                                >Michael Knight</a
                              >
                              posted an update<a
                                href="https://theconstructionplatform.com/activity/p/60/"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >2 weeks ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="60"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                            <p>first login</p>
                          </div>

                          <div class="activity-footer-links">
                            <div class="th-bp-footer-meta">
                              <div
                                class="reactions-meta"
                                data-activity-id="60"
                              >
                                <span class="reaction-meta-container"
                                  ><span class="reaction-images"></span
                                ></span>
                              </div>
                              <div
                                class="comments-meta activity-comments-meta-60"
                                data-activity-id="60"
                              >
                                <a
                                  href="#main-comments-container-60"
                                  class="activity-comments-toggle"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-chat-fill"
                                    viewBox="0 0 16 16"
                                  >
                                    <path
                                      d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"
                                    ></path></svg>1 Comments</a
                                >
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="60"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg>Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="60"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                              <div class="th-bp-post-comment-button">
                                <a
                                  href=""
                                  data-activity-id="activity-60"
                                  class="button"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                                    ></path>
                                  </svg>
                                  <span>Comment</span>
                                </a>
                              </div>
                              <div
                                class="th-bp-post-share-button th-ml-auto"
                              >
                                <a
                                  href=""
                                  data-activity-id="60"
                                  class="button activity-share"
                                >
                                  <span class="share_icon"
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#888"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="arcs"
                                    >
                                      <circle
                                        cx="18"
                                        cy="5"
                                        r="3"
                                      ></circle>
                                      <circle
                                        cx="6"
                                        cy="12"
                                        r="3"
                                      ></circle>
                                      <circle
                                        cx="18"
                                        cy="19"
                                        r="3"
                                      ></circle>
                                      <line
                                        x1="8.59"
                                        y1="13.51"
                                        x2="15.42"
                                        y2="17.49"
                                      ></line>
                                      <line
                                        x1="15.41"
                                        y1="6.51"
                                        x2="8.59"
                                        y2="10.49"
                                      ></line></svg></span>
                                  <span>Share</span>
                                </a>
                                <ul class="sharing-options">
                                  <li>
                                    <a href="60" class="timeline-share"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-reply"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"
                                        ></path></svg>Share on activity</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      target="_blank"
                                      data-share-type="twitter"
                                      href="https://twitter.com/intent/tweet?url=https://theconstructionplatform.com/activity/p/60/"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-twitter"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                        ></path></svg>Share on twitter</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      target="_blank"
                                      data-share-type="facebook"
                                      href="https://www.facebook.com/sharer/sharer.php?u=https://theconstructionplatform.com/activity/p/60/"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-facebook"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                                        ></path></svg>Share on facebook</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      data-share-type="whatsapp"
                                      href="whatsapp://send?text=https://theconstructionplatform.com/activity/p/60/"
                                      data-action="share/whatsapp/share"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-whatsapp"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                                        ></path></svg>Share on whatsApp</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="activity-comments">
                          <div class="activity-comments-form">
                            <img
                              alt=""
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                              srcset="
                                //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x
                              "
                              class="avatar avatar-30 photo"
                              height="30"
                              width="30"
                              loading="lazy"
                              decoding="async"
                            />
                            <form
                              class="tophive-bp-comment-form activity-60"
                              data-type="postComment"
                              data-comment-id=""
                              data-activity-id="60"
                            >
                              <div
                                class="comments-text editable-div"
                                contenteditable=""
                                data-placeholder="Type a comment..."
                              ></div>
                              <div class="comments-media-icons">
                                <p class="comments-image-uploader">
                                  <label for="comment-upload-media-60">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="32"
                                      height="32"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#999999"
                                      stroke-width="1.8"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <rect
                                        x="3"
                                        y="3"
                                        width="18"
                                        height="18"
                                        rx="2"
                                      ></rect>
                                      <circle
                                        cx="8.5"
                                        cy="8.5"
                                        r="1.5"
                                      ></circle>
                                      <path
                                        d="M20.4 14.5L16 10 4 20"
                                      ></path>
                                    </svg>
                                  </label>
                                  <input
                                    type="file"
                                    name="comment-upload-media"
                                    data-id="60"
                                    class="comment-upload-media"
                                    id="comment-upload-media-60"
                                  />
                                </p>
                              </div>
                              <div>
                                <input
                                  type="hidden"
                                  class="comment-media-url"
                                  id="comment-media-url-60"
                                  value=""
                                />
                              </div>
                            </form>
                          </div>
                          <div
                            class="comments-media-previewer comments-media-preview-60"
                          ></div>
                          <ul id="main-comments-container-60">
                            <li data-id="3HNL0QTICG">
                              <span class="comment-avatar"
                                ><img
                                  alt=""
                                  src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                                  srcset="
                                    //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x
                                  "
                                  class="avatar avatar-30 photo"
                                  height="30"
                                  width="30"
                                  loading="lazy"
                                  decoding="async" /></span
                              ><span class="comment-content"
                                ><span class="comment-meta"
                                  ><a
                                    href="https://theconstructionplatform.com/members/admin/"
                                    >admin</a
                                  ><span class="comment-date"
                                    >6 mins ago</span
                                  ></span
                                >
                                <p>very good</p></span
                              ><span class="comment-meta-actions"
                                ><a
                                  class="comment-reply-form-toggle"
                                  href="#comment-reply-form-3HNL0QTICG"
                                  >Reply</a
                                ><a
                                  class="comment-delete"
                                  href="#"
                                  data-activity-id="60"
                                  data-reply-id=""
                                  data-comment-id="3HNL0QTICG"
                                  >Delete</a
                                ></span
                              ><span
                                class="comment-reply comment-reply-form-3HNL0QTICG"
                                id="comment-reply-form-3HNL0QTICG"
                                ><div class="activity-comments-form">
                                  <img
                                    alt=""
                                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                                    srcset="
                                      //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x
                                    "
                                    class="avatar avatar-30 photo"
                                    height="30"
                                    width="30"
                                    loading="lazy"
                                    decoding="async"
                                  />
                                  <form
                                    class="tophive-bp-comment-form activity-60"
                                    data-type="postCommentReply"
                                    data-comment-id="3HNL0QTICG"
                                    data-activity-id="60"
                                  >
                                    <div
                                      class="comments-text editable-div"
                                      contenteditable=""
                                      data-placeholder="Type a comment..."
                                    ></div>
                                    <div class="comments-media-icons">
                                      <p class="comments-image-uploader">
                                        <label
                                          for="comment-upload-media-60"
                                        >
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="32"
                                            height="32"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="#999999"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                          >
                                            <rect
                                              x="3"
                                              y="3"
                                              width="18"
                                              height="18"
                                              rx="2"
                                            ></rect>
                                            <circle
                                              cx="8.5"
                                              cy="8.5"
                                              r="1.5"
                                            ></circle>
                                            <path
                                              d="M20.4 14.5L16 10 4 20"
                                            ></path>
                                          </svg>
                                        </label>
                                        <input
                                          type="file"
                                          name="comment-upload-media"
                                          data-id="60"
                                          class="comment-upload-media"
                                          id="comment-upload-media-60"
                                        />
                                      </p>
                                    </div>
                                    <div>
                                      <input
                                        type="hidden"
                                        class="comment-media-url"
                                        id="comment-media-url-60"
                                        value=""
                                      />
                                    </div>
                                  </form>
                                </div>
                                <div
                                  class="comments-media-previewer comments-media-preview-60"
                                ></div
                              ></span>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <li
                        class="activity activity_update activity-item date-recorded-1674871957"
                        id="activity-59"
                        data-bp-activity-id="59"
                        data-bp-timestamp="1674871957"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              posted an update<a
                                href="https://theconstructionplatform.com/activity/p/59/"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >2 weeks ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="59"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="59"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-59"
                                data-activity-id="59"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="59"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg>Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="59"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                              <div class="th-bp-post-comment-button">
                                <a
                                  href=""
                                  data-activity-id="activity-59"
                                  class="button"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                                    ></path>
                                  </svg>
                                  <span>Comment</span>
                                </a>
                              </div>
                              <div
                                class="th-bp-post-share-button th-ml-auto"
                              >
                                <a
                                  href=""
                                  data-activity-id="59"
                                  class="button activity-share"
                                >
                                  <span class="share_icon"
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#888"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="arcs"
                                    >
                                      <circle
                                        cx="18"
                                        cy="5"
                                        r="3"
                                      ></circle>
                                      <circle
                                        cx="6"
                                        cy="12"
                                        r="3"
                                      ></circle>
                                      <circle
                                        cx="18"
                                        cy="19"
                                        r="3"
                                      ></circle>
                                      <line
                                        x1="8.59"
                                        y1="13.51"
                                        x2="15.42"
                                        y2="17.49"
                                      ></line>
                                      <line
                                        x1="15.41"
                                        y1="6.51"
                                        x2="8.59"
                                        y2="10.49"
                                      ></line></svg></span>
                                  <span>Share</span>
                                </a>
                                <ul class="sharing-options">
                                  <li>
                                    <a href="59" class="timeline-share"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-reply"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"
                                        ></path></svg>Share on activity</a>
                                  </li>
                                  <li>
                                    <a
                                      target="_blank"
                                      data-share-type="twitter"
                                      href="https://twitter.com/intent/tweet?url=https://theconstructionplatform.com/activity/p/59/"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-twitter"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                        ></path></svg>Share on twitter</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      target="_blank"
                                      data-share-type="facebook"
                                      href="https://www.facebook.com/sharer/sharer.php?u=https://theconstructionplatform.com/activity/p/59/"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-facebook"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                                        ></path></svg>Share on facebook</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      data-share-type="whatsapp"
                                      href="whatsapp://send?text=https://theconstructionplatform.com/activity/p/59/"
                                      data-action="share/whatsapp/share"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="15"
                                        height="15"
                                        fill="currentColor"
                                        class="bi bi-whatsapp"
                                        viewBox="0 0 16 16"
                                      >
                                        <path
                                          d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                                        ></path></svg>Share on whatsApp</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="activity-comments">
                          <div class="activity-comments-form">
                            <img
                              alt=""
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm"
                              srcset="
                                //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x
                              "
                              class="avatar avatar-30 photo"
                              height="30"
                              width="30"
                              loading="lazy"
                              decoding="async"
                            />
                            <form
                              class="tophive-bp-comment-form activity-59"
                              data-type="postComment"
                              data-comment-id=""
                              data-activity-id="59"
                            >
                              <div
                                class="comments-text editable-div"
                                contenteditable=""
                                data-placeholder="Type a comment..."
                              ></div>
                              <div class="comments-media-icons">
                                <p class="comments-image-uploader">
                                  <label for="comment-upload-media-59">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="32"
                                      height="32"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#999999"
                                      stroke-width="1.8"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <rect
                                        x="3"
                                        y="3"
                                        width="18"
                                        height="18"
                                        rx="2"
                                      ></rect>
                                      <circle
                                        cx="8.5"
                                        cy="8.5"
                                        r="1.5"
                                      ></circle>
                                      <path
                                        d="M20.4 14.5L16 10 4 20"
                                      ></path>
                                    </svg>
                                  </label>
                                  <input
                                    type="file"
                                    name="comment-upload-media"
                                    data-id="59"
                                    class="comment-upload-media"
                                    id="comment-upload-media-59"
                                  />
                                </p>
                              </div>
                              <div>
                                <input
                                  type="hidden"
                                  class="comment-media-url"
                                  id="comment-media-url-59"
                                  value=""
                                />
                              </div>
                            </form>
                          </div>
                          <div
                            class="comments-media-previewer comments-media-preview-59"
                          ></div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1659341296"
                        id="activity-46"
                        data-bp-activity-id="46"
                        data-bp-timestamp="1659341296"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/"
                                >Warning Note for Envato Elements Sellers
                                !!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-6923"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >6 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="46"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="46"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-46"
                                data-activity-id="46"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="46"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="46"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1659107783"
                        id="activity-45"
                        data-bp-activity-id="45"
                        data-bp-timestamp="1659107783"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/"
                                >[ GET ] Zoom Master PLR + OTO + OTO
                                Bonuses</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/47-2/freebies-giveaways/"
                                >Freebies / Giveaways</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/#post-4623"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >6 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="45"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="45"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-45"
                                data-activity-id="45"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="45"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="45"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1658492736"
                        id="activity-44"
                        data-bp-activity-id="44"
                        data-bp-timestamp="1658492736"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/"
                                >Warning Note for Envato Elements Sellers
                                !!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3971"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >6 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="44"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="44"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-44"
                                data-activity-id="44"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="44"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="44"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1654562373"
                        id="activity-43"
                        data-bp-activity-id="43"
                        data-bp-timestamp="1654562373"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/"
                                >Warning Note for Envato Elements Sellers
                                !!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3725"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="43"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="43"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-43"
                                data-activity-id="43"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="43"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="43"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1654498248"
                        id="activity-42"
                        data-bp-activity-id="42"
                        data-bp-timestamp="1654498248"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/"
                                >[ GET ] Zoom Master PLR + OTO + OTO
                                Bonuses</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/47-2/freebies-giveaways/"
                                >Freebies / Giveaways</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/get-zoom-master-plr-oto-oto-bonuses/#post-3723"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="42"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="42"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-42"
                                data-activity-id="42"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="42"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="42"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1653492842"
                        id="activity-41"
                        data-bp-activity-id="41"
                        data-bp-timestamp="1653492842"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/"
                                >Warning Note for Envato Elements Sellers
                                !!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/warning-note-for-envato-elements-sellers/#post-3649"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="41"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="41"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-41"
                                data-activity-id="41"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="41"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="41"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1652945811"
                        id="activity-40"
                        data-bp-activity-id="40"
                        data-bp-timestamp="1652945811"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/"
                                >Introduce yourself here to the English
                                Language Learners group!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/"
                                >English Language Learners</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3595"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="40"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="40"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-40"
                                data-activity-id="40"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="40"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="40"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item mini date-recorded-1652945705"
                        id="activity-39"
                        data-bp-activity-id="39"
                        data-bp-timestamp="1652945705"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/"
                                >Introduce yourself here to the English
                                Language Learners group!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/"
                                >English Language Learners</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3594"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="39"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="39"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-39"
                                data-activity-id="39"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="39"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="39"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1652945573"
                        id="activity-38"
                        data-bp-activity-id="38"
                        data-bp-timestamp="1652945573"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/"
                                >Introduce yourself here to the English
                                Language Learners group!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/community-groups/english-language-learners/"
                                >English Language Learners</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/introduce-yourself-here-to-the-english-language-learners-group/#post-3593"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >8 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="38"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="38"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-38"
                                data-activity-id="38"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="38"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="38"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1651839827"
                        id="activity-37"
                        data-bp-activity-id="37"
                        data-bp-timestamp="1651839827"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/"
                                >Can’t upgrade to pay for a Professional
                                Certificate program</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/"
                                >Community Help &amp; Questions</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/#post-3547"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >9 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="37"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="37"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-37"
                                data-activity-id="37"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="37"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="37"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1651839799"
                        id="activity-36"
                        data-bp-activity-id="36"
                        data-bp-timestamp="1651839799"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/"
                                >Can’t upgrade to pay for a Professional
                                Certificate program</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/"
                                >Community Help &amp; Questions</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/cant-upgrade-to-pay-for-a-professional-certificate-program/#post-3546"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >9 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="36"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                            <p>
                              <img
                                loading="lazy"
                                src="image/jpeg;base64,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"
                              />
                            </p>
                          </div>

                          <div class="activity-footer-links">
                            <div class="th-bp-footer-meta">
                              <div
                                class="reactions-meta"
                                data-activity-id="36"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-36"
                                data-activity-id="36"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="36"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="36"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1650343915"
                        id="activity-35"
                        data-bp-activity-id="35"
                        data-bp-timestamp="1650343915"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/"
                                >CS-Cart Ultimate / Multi-Vendor 4.11.3
                                NULLED</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/information-vip-file/vip-file/"
                                >VIP File</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/#post-3454"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >9 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="35"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                            <p>Testing again</p>
                          </div>

                          <div class="activity-footer-links">
                            <div class="th-bp-footer-meta">
                              <div
                                class="reactions-meta"
                                data-activity-id="35"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-35"
                                data-activity-id="35"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="35"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="35"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1650343899"
                        id="activity-34"
                        data-bp-activity-id="34"
                        data-bp-timestamp="1650343899"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/"
                                >CS-Cart Ultimate / Multi-Vendor 4.11.3
                                NULLED</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/information-vip-file/vip-file/"
                                >VIP File</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/cs-cart-ultimate-multi-vendor-4-11-3-nulled/#post-3453"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >9 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="34"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                            <p>Testing</p>
                          </div>

                          <div class="activity-footer-links">
                            <div class="th-bp-footer-meta">
                              <div
                                class="reactions-meta"
                                data-activity-id="34"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-34"
                                data-activity-id="34"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="34"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="34"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1647917647"
                        id="activity-33"
                        data-bp-activity-id="33"
                        data-bp-timestamp="1647917647"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/"
                                >How can I resubmit peer graded
                                assignment</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/community-help-questions/"
                                >Community Help &amp; Questions</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/how-can-i-resubmit-peer-graded-assignment/#post-3396"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >10 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="33"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="33"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-33"
                                data-activity-id="33"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="33"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="33"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1647712716"
                        id="activity-32"
                        data-bp-activity-id="32"
                        data-bp-timestamp="1647712716"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/"
                                >Get free access to a hands-on data
                                science project!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/#post-3394"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >10 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="32"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="32"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-32"
                                data-activity-id="32"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="32"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg
                                  >Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="32"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1647470941"
                        id="activity-31"
                        data-bp-activity-id="31"
                        data-bp-timestamp="1647470941"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/"
                                >Get free access to a hands-on data
                                science project!</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/welcome-announcements/"
                                >Welcome &amp; Announcements</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/get-free-access-to-a-hands-on-data-science-project/#post-3378"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >10 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="31"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="31"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-31"
                                data-activity-id="31"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="31"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg>Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip">love</span>
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip">wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="31"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item date-recorded-1645078394"
                        id="activity-30"
                        data-bp-activity-id="30"
                        data-bp-timestamp="1645078394"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/research-on-forum-participation-as-a-predictor-of-course-completion/"
                                >Research on forum participation as a
                                predictor of course completion</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/networking-social-discussion/"
                                >Networking &amp; Social Discussion</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/research-on-forum-participation-as-a-predictor-of-course-completion/#post-3040"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >11 months ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="30"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="30"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-30"
                                data-activity-id="30"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="30"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg>Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="30"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li
                        class="bbpress bbp_reply_create activity-item mini date-recorded-1644481431"
                        id="activity-29"
                        data-bp-activity-id="29"
                        data-bp-timestamp="1644481431"
                        data-canedite="true"
                      >
                        <div class="activity-avatar item-avatar">
                          <a
                            href="https://theconstructionplatform.com/members/admin/"
                          >
                            <img
                              loading="lazy"
                              src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=150&amp;r=g&amp;d=mm"
                              class="avatar user-1-avatar avatar-150 photo"
                              width="150"
                              height="150"
                              alt="Profile picture of admin"
                            />
                          </a>
                        </div>

                        <div class="activity-content">
                          <div class="activity-header">
                            <p>
                              <a
                                href="https://theconstructionplatform.com/members/admin/"
                                >admin</a
                              >
                              replied to the topic
                              <a
                                href="https://theconstructionplatform.com/forums/topic/thinking-fast-and-slow-and-the-3rd-wave-of-ai/"
                                >Thinking Fast and Slow and the 3rd Wave
                                of AI.</a
                              >
                              in the forum
                              <a
                                href="https://theconstructionplatform.com/forums/forum/metafans-common-room/networking-social-discussion/"
                                >Networking &amp; Social Discussion</a
                              ><a
                                href="https://theconstructionplatform.com/forums/topic/thinking-fast-and-slow-and-the-3rd-wave-of-ai/#post-3027"
                                class="view activity-time-since bp-tooltip"
                                data-bp-tooltip="View Discussion"
                                ><span class="time-since"
                                  >1 year ago<i class="line"></i
                                  ><span class="ac-vi-co" data-vi="1"
                                    ><span class="ac_vi_text">Public</span
                                    ><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="ionicon"
                                      viewBox="0 0 512 512"
                                      width="16"
                                      height="16"
                                      fill="#b6b0ae"
                                    >
                                      <path
                                        d="M414.39 97.74A224 224 0 1097.61 414.52 224 224 0 10414.39 97.74zM64 256.13a191.63 191.63 0 016.7-50.31c7.34 15.8 18 29.45 25.25 45.66 9.37 20.84 34.53 15.06 45.64 33.32 9.86 16.21-.67 36.71 6.71 53.67 5.36 12.31 18 15 26.72 24 8.91 9.08 8.72 21.52 10.08 33.36a305.36 305.36 0 007.45 41.27c0 .1 0 .21.08.31C117.8 411.13 64 339.8 64 256.13zm192 192a193.12 193.12 0 01-32-2.68c.11-2.71.16-5.24.43-7 2.43-15.9 10.39-31.45 21.13-43.35 10.61-11.74 25.15-19.68 34.11-33 8.78-13 11.41-30.5 7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35 1.36-16.88 12.42-28 10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92 7.14-17.11 18.09-18.26 4.57-.48 9.7-1 14.09.68 5.78 2.14 8.51 7.8 13.7 10.66 9.73 5.34 11.7-3.19 10.21-11.83-2.23-12.94-4.83-18.21 6.71-27.12 8-6.14 14.84-10.58 13.56-21.61-.76-6.48-4.31-9.41-1-15.86 2.51-4.91 9.4-9.34 13.89-12.27 11.59-7.56 49.65-7 34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44 9.27-21.41 14.19-7.2 5.09-21.22 10.87-28.43 3-9.7-10.59 6.43-14.06 10-21.46 1.65-3.45 0-8.24-2.78-12.75q5.41-2.28 11-4.23a15.6 15.6 0 008 3c6.69.44 13-3.18 18.84 1.38 6.48 5 11.15 11.32 19.75 12.88 8.32 1.51 17.13-3.34 19.19-11.86 1.25-5.18 0-10.65-1.2-16a190.83 190.83 0 01105 32.21c-2-.76-4.39-.67-7.34.7-6.07 2.82-14.67 10-15.38 17.12-.81 8.08 11.11 9.22 16.77 9.22 8.5 0 17.11-3.8 14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27 193.27 0 0118 14.14c-.09.09-.18.17-.27.27-5.76 6-12.45 10.75-16.39 18.05-2.78 5.14-5.91 7.58-11.54 8.91-3.1.73-6.64 1-9.24 3.08-7.24 5.7-3.12 19.4 3.74 23.51 8.67 5.19 21.53 2.75 28.07-4.66 5.11-5.8 8.12-15.87 17.31-15.86a15.4 15.4 0 0110.82 4.41c3.8 3.94 3.05 7.62 3.86 12.54 1.43 8.74 9.14 4 13.83-.41a192.12 192.12 0 019.24 18.77c-5.16 7.43-9.26 15.53-21.67 6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55 1.47-9.15 1.59-20 2.29-26.94 9.22-6.71 6.68-10.26 15.62-17.4 22.33-13.81 13-19.64 27.19-10.7 45.57 8.6 17.67 26.59 27.26 46 26 19.07-1.27 38.88-12.33 38.33 15.38-.2 9.81 1.85 16.6 4.86 25.71 2.79 8.4 2.6 16.54 3.24 25.21a158 158 0 004.74 30.07A191.75 191.75 0 01256 448.13z"
                                      ></path></svg></span></span
                              ></a>
                            </p>
                            <div class="activity-extension-links">
                              <span class="open-button">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="16"
                                  height="16"
                                  fill="currentColor"
                                  class="bi bi-three-dots"
                                  viewBox="0 0 16 16"
                                >
                                  <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                  ></path>
                                </svg>
                              </span>
                              <span class="more-option">
                                More Options
                              </span>
                              <ul>
                                <li>
                                  <a
                                    class="button bp-secondary-action bp-tooltip activity-make-favourite"
                                    href=""
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <path
                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                                      ></path>
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
                                  <a class="edite-activity">
                                    <svg
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"
                                        fill="#1d2327"
                                      ></path>
                                    </svg>
                                    <div>
                                      <h4>Edit</h4>
                                      <p>Edit this activity</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    class="button button-activity-delete"
                                    href="#"
                                    data-id="29"
                                    data-action="delete"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="#000000"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    >
                                      <polyline
                                        points="3 6 5 6 21 6"
                                      ></polyline>
                                      <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                      ></path>
                                      <line
                                        x1="10"
                                        y1="11"
                                        x2="10"
                                        y2="17"
                                      ></line>
                                      <line
                                        x1="14"
                                        y1="11"
                                        x2="14"
                                        y2="17"
                                      ></line>
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
                              <div
                                class="reactions-meta"
                                data-activity-id="29"
                              ></div>
                              <div
                                class="comments-meta activity-comments-meta-29"
                                data-activity-id="29"
                              >
                                <a href="" class=""></a>
                              </div>
                            </div>
                            <div class="th-bp-footer-meta-actions">
                              <div
                                class="th-bp-post-like-button th-bp-activity-like-button"
                              >
                                <a
                                  href="#"
                                  data-reaction=""
                                  data-id="29"
                                  class="button"
                                  data-user="1"
                                  data-nonce="23464fb70f"
                                >
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#888"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  >
                                    <path
                                      d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                                    ></path></svg>Like
                                </a>
                                <span class="reaction_icons">
                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="like"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >like</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="love"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >love</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="haha"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >haha</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="wow"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >wow</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="cry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >cry</span
                                    >
                                  </span>

                                  <span class="reaction_icon_con">
                                    <img
                                      data-activity-id="29"
                                      data-type="angry"
                                      src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                      alt="reaction"
                                    />
                                    <span class="reaction_icon_tooltip"
                                      >angry</span
                                    >
                                  </span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="load-more">
                        <a
                          href="https://theconstructionplatform.com/wp-admin/admin-ajax.php?acpage=2&amp;offset_lower=60"
                          >Load More</a
                        >
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
      <aside
        id="sidebar-primary"
        class="sidebar-primary tophive-col-3_sm-12"
      >
        <div class="sidebar-primary-inner sidebar-inner widget-area">


        </div>
      </aside>
      <!-- #sidebar-primary -->
      <aside
        id="sidebar-secondary"
        class="sidebar-secondary tophive-col-3_md-0_sm-12-first"
      >
        <div class="sidebar-secondary-inner sidebar-inner widget-area">

          <section
            id="block-22"
            class="widget widget_block widget_bp_core_whos_online_widget buddypress"
          >
            <h2 class="widget-title">Who&#039;s Online</h2>
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
            </div>
          </section>
        </div>
      </aside>
      <!-- #sidebar-secondary -->
    </div>
    <!-- #.tophive-grid -->
  </div>
  <!-- #.tophive-container -->
@endsection
