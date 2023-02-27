<div id="buddypress" class="buddypress-wrap metafans round-avatars bp-dir-hori-nav">
    <div id="item-header" class="users-header single-headers top-header">
        <div id="cover-image-container">
            <div id="header-cover-image" class="cover-photo-uploader overflow-hidden">
                <img src="{{ asset($user->cover_photo ? 'images/user/' . $user->cover_photo : '') }}"
                    alt="" class="w-100" style="height: 300px;">
                @if (Auth::user()->id == $user->id)
                    <label for="coverupload">
                        <input @change.prevent="handleCoverPhoto" type="file" id="coverupload" hidden="hidden"
                            name="avatar">
                        <i class='bx bxs-camera'></i> Edit Cover Photo
                    </label>
                @endif
            </div>

            <div id="item-header-cover-image">
                <div id="item-header-avatar">
                    <div class="position-relative">
                        <img loading="lazy"
                            src="{{ asset($user->avatar ? 'images/user/' . $user->avatar : 'images/avatar.png') }}"
                            class="avatar user-1-avatar avatar-150 photo" width="150" height="150"
                            alt="Profile picture of admin">
                        @if (Auth::user()->id == $user->id)
                            <label for="avatarupload" class="profile-img-uploader">
                                <input @change.prevent="handleImage" type="file" id="avatarupload" hidden="hidden" name="avatar">
                                <i class='bx bxs-camera'></i>
                            </label>
                        @endif
                    </div>
                </div>
                <div id="item-header-content" class="desktop">

                    <div class="user-section">
                        <h2 class="user-nicename">{{ $user->name }}</h2>
                        <ul class="bp-socials-vertical"></ul>
                        <div id="item-meta">
                            <p class="profile-header-meta-date"><span class="hide-badge">{{ "@".$user->username }}</span> •
                                <span>Joined : {{ $user->created_at->format('M d,Y') }} </span>
                            </p>
                            <div class="user-facts d-flex">
                                <p>
                                    <span class="fw-bold">{{ $user->followers()->count() }}</span>
                                    <span>Followers</span>
                                </p>
                                <span class="mx-1"></span>
                                <p>
                                    <span class="fw-bold">{{ $user->followings()->count() }}</span>
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
                    @if ($user->id != Auth::user()->id)
                        <div id="item-buttons">
                            <div class="members-list">
                                <li>
                                    <div class="members-action-buttons">
                                        @php
                                            $following = Auth::user()->following()->where('user_id', $user->id)->first();
                                            // $friend = Auth::user()->user()->where("user_id", Auth::user()->id)->where("friend_id", $user->id)->first();
                                        @endphp
                                        @if ($following)
                                            <a href="{{ route("unfollow", ['user_id' => $user->id]) }}" class="bp-th-follow-button following">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16"><path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path></svg>
                                                Following</a>
                                        @else
                                            <a href="{{ route("follow", ['user_id' => $user->id]) }}" class="bp-th-follow-button">+ Follow</a>
                                        @endif

                                        {{-- @if ($friend)
                                        <a href="{{ route("unfriend", ['user_id' => $user->id]) }}" class="bp-th-follow-button following">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16"><path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path></svg>
                                            Friend</a>
                                        @else
                                            <a href="{{ route("addfriend", ['user_id' => $user->id]) }}" class="bp-th-friends-button px-3">
                                                <svg
                                                    class="small-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
                                                    </path>
                                                </svg>
                                                Add Friend
                                            </a>
                                        @endif --}}

                                        <a href="#" data-recipients-id="2" class="private-msg messenger-toggler">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                                <path
                                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                                </path>
                                                <path
                                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                    @endif
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
                        <p class="profile-header-meta-date"><span class="hide-badge">{{ "@".$user->username }}</span> •
                            <span>Joined : {{ $user->created_at->format("M d,Y") }} </span>
                        </p>
                        <div class="user-facts">
                            <p>
                                <span class="secondary-color followers-count-1">0</span>
                                <span>Followers</span>
                            </p>
                            <span class="mx-1"></span>
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
                <a href="{{ route('welcome') }}" id="user-front">
                    Home
                </a>
            </li>


            <li id="activity-personal-li"
                class="bp-personal-tab @if (request()->routeIs('home.user')) current selected @endif loading">
                <a href="{{ route('user.activity', $user->username) }}" id="user-activity">
                    Activity
                </a>
            </li>


            {{-- <li id="notifications-personal-li" class="bp-personal-tab">
                <a href="https://theconstructionplatform.com/members/admin/notifications/" id="user-notifications">
                    Notifications
                </a>
            </li> --}}


            <li id="photos-personal-li" class="bp-personal-tab @if (request()->routeIs('user.portfolio')) current selected @endif">
                <a href="{{ route('user.portfolio', $user->username) }}" id="user-photos">
                    Portfolio
                </a>
            </li>


            <li id="xprofile-personal-li"
                class="bp-personal-tab @if (request()->routeIs('user.profile')) current selected @endif">
                <a href="{{ route('user.profile', $user->username) }}" id="user-xprofile">
                    Profile
                </a>
            </li>


            {{-- <li id="forums-personal-li" class="bp-personal-tab">
                <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                    Forums
                </a>
            </li> --}}


            <li id="settings-personal-li"
                class="bp-personal-tab @if (request()->routeIs('user.settings')) current selected @endif">
                <a href="{{ route('user.settings') }}" id="user-settings">
                    Settings
                </a>
            </li>



        </ul>

        {{-- <ul id="more-nav">
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
                        <a href="{{ route('home.user') }}" id="user-front">
                            Home
                        </a>
                    </li>


                    <li id="activity-personal-li" class="bp-personal-tab current selected loading">
                        <a href="{{ route("home.user") }}" id="user-activity">
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
                        <a href="{{ route('user.portfolio', $user->username) }}" id="user-photos">
                            Portfolio
                        </a>
                    </li>


                    <li id="xprofile-personal-li" class="bp-personal-tab">
                        <a href="{{ route('user.profile', $user->username) }}" id="user-xprofile">
                            Profile
                        </a>
                    </li>


                    <li id="forums-personal-li" class="bp-personal-tab">
                        <a href="https://theconstructionplatform.com/members/admin/forums/" id="user-forums">
                            Forums
                        </a>
                    </li>


                    <li id="settings-personal-li" class="bp-personal-tab">
                        <a href="{{ route('user.settings') }}" id="user-settings">
                            Settings
                        </a>
                    </li>

                </ul>
            </li>
        </ul> --}}


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
                    const response = await axios.post("{{ route('api.coverphoto.update') }}", formData);
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
