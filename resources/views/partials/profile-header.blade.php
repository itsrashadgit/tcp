<div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">
    <div id="item-header" role="complementary" data-bp-item-id="1" data-bp-item-component="members"
        class="users-header single-headers top-header">
        <div id="cover-image-container">
            <div id="header-cover-image" class="cover-photo-uploader">
                <img src="" alt="">
                <label for="imgupload">
                    <input @change.prevent="handleCoverPhoto" type="file" id="imgupload" hidden="hidden" name="avatar">
                    <i class='bx bxs-camera'></i> Edit Cover Photo
                </label>
            </div>

            <div id="item-header-cover-image">
                <div id="item-header-avatar">
                    <div class="position-relative">
                        <img loading="lazy"
                            src="{{ asset(Auth::user()->avatar ? 'images/user/'.Auth::user()->avatar : 'images/avatar.png') }}"
                            class="avatar user-1-avatar avatar-150 photo" width="150" height="150"
                            alt="Profile picture of admin">
                            <label for="imgupload" class="profile-img-uploader">
                                <input @change.prevent="handleImage" type="file" id="imgupload" hidden="hidden" name="avatar">
                                <i class='bx bxs-camera'></i>
                            </label>
                    </div>
                </div>
                <div id="item-header-content" class="desktop">

                    <div class="user-section">
                        <h2 class="user-nicename">{{ Auth::user()->name }}</h2>
                        <ul class="bp-socials-vertical"></ul>
                        <div id="item-meta">
                            <p class="profile-header-meta-date"><span class="hide-badge">@admin</span> •
                                <span>Joined : {{ Auth::user()->created_at->format("M d,Y") }} </span>
                            </p>
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
                            <span>Joined : January 27, 2023 </span>
                        </p>
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

    <nav class="main-navs no-ajax bp-navs single-screen-navs horizontal users-nav" id="object-nav" role="navigation"
        aria-label="Member menu">


        <ul class="nav-bar-filter" id="nav-bar-filter">


            <li id="front-personal-li" class="bp-personal-tab">
                <a href="{{ route("home.user") }}" id="user-front">
                    Home
                </a>
            </li>


            <li id="activity-personal-li" class="bp-personal-tab @if(request()->routeIs("home.user")) current selected @endif loading">
                <a href="{{ route("home.user") }}" id="user-activity">
                    Activity
                </a>
            </li>


            {{-- <li id="notifications-personal-li" class="bp-personal-tab">
                <a href="https://theconstructionplatform.com/members/admin/notifications/" id="user-notifications">
                    Notifications
                </a>
            </li> --}}


            <li id="photos-personal-li" class="bp-personal-tab">
                <a href="" id="user-photos">
                    Portfolio
                </a>
            </li>


            <li id="xprofile-personal-li" class="bp-personal-tab @if(request()->routeIs("user.profile")) current selected @endif">
                <a href="{{ route("user.profile") }}" id="user-xprofile">
                    Profile
                </a>
            </li>


            {{-- <li id="forums-personal-li" class="bp-personal-tab">
                <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                    Forums
                </a>
            </li> --}}


            <li id="settings-personal-li" class="bp-personal-tab @if(request()->routeIs("user.settings")) current selected @endif">
                <a href="{{ route("user.settings") }}" id="user-settings">
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
                        <a href="{{ route("home.user") }}" id="user-front">
                            Home
                        </a>
                    </li>


                    {{-- <li id="activity-personal-li" class="bp-personal-tab current selected loading">
                        <a href="{{ route("home.user") }}" id="user-activity">
                            Activity
                        </a>
                    </li> --}}


                    {{-- <li id="notifications-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/notifications/"
                            id="user-notifications">
                            Notifications
                        </a>
                    </li> --}}


                    <li id="photos-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/photos/" id="user-photos">
                            Portfolio
                        </a>
                    </li>


                    <li id="xprofile-personal-li" class="bp-personal-tab">
                        <a href="{{ route("user.profile") }}" id="user-xprofile">
                            Profile
                        </a>
                    </li>


                    {{-- <li id="forums-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                            Forums
                        </a>
                    </li> --}}


                    <li id="settings-personal-li" class="bp-personal-tab">
                        <a href="{{ route("user.settings") }}" id="user-settings">
                            Settings
                        </a>
                    </li>

                </ul>
            </li>
        </ul>


    </nav>

</div>




@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            updating_profile: false,
            errors: {},
        }

        vmethods = {
            ...vmethods,
            async handleImage(event) {
                const file = event.target.files[0];
                let formData = new FormData();
                formData.append("avatar", file);
                formData.append("_method", "PUT");
                try {
                    const response = await axios.post("{{ route('api.avatar.update') }}", formData);
                    window.location.reload();
                } catch (err) {
                    console.log(err);
                }
            },
            async handleCoverPhoto(event) {
                const file = event.target.files[0];
                let formData = new FormData();
                formData.append("cover_photo", file);
                formData.append("_method", "PUT");
                try {
                    const response = await axios.post("", formData);
                    window.location.reload();
                } catch (err) {
                    console.log(err);
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
