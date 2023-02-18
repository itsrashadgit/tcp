<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=yes" />
    <title>
        The Construction Platform &#8211; Networking, resources, revolutionizing
        the construction marketplace
    </title>
    <meta name="robots" content="max-image-preview:large" />


    <link rel="stylesheet" id="bp-nouveau-css" href="{{ asset('tcp/css/bud.min.css') }}" media="screen" />

    <link rel="stylesheet" id="metafans-minified-style-css" href="{{ asset('tcp/css/style.min.css') }}"
        media="all" />

    <link rel="stylesheet" id="th-bud-css" href="{{ asset('tcp/css/budcomp.css') }}" media="all" />

    <link rel="stylesheet" id="tophive-google-font-css"
        href="//fonts.googleapis.com/css?family=Inter%3A400%2Cmedium%2Csemi-bold%2Cbold%7COpen+Sans%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%2C800%2C800i&#038;ver=3.3.1"
        media="all" />

    <link rel="stylesheet" href="{{ asset('tcp/css/thive.css') }}" id="tophive-style-inline-css">

    {{-- <script src="{{ asset('tcp/js/jquery.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="{{ asset('tcp/js/bud.js') }}" id="th-bud-js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" media="screen" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>

<body class="home-page directory activity buddypress bp-nouveau home page-template-default page page-id-6 logged-in admin-bar no-customize-support wp-custom-logo pmpro-body-has-access sidebar-content-sidebar main-layout-sidebar-content-sidebar site-full-width menu_sidebar_slide_left v-nav-active elementor-default elementor-kit-29 no-js directorist-content-active directorist-preload">

    <div id="app" class="site box-shadow footer-relative">
        <header id="masthead" class="site-header header-v2">
            <div id="masthead-inner" class="site-header-inner">
                <div class="header-main header--row layout-full-contained" id="cb-row--header-main" data-row-id="main"
                    data-show-on="desktop mobile">
                    <div class="header--row-inner header-main-inner light-mode">
                        <div class="tophive-container">
                            <div class="tophive-grid cb-row--desktop hide-on-mobile hide-on-tablet tophive-grid-middle">
                                <div class="row-v2 row-v2-main no-center">
                                    <div class="col-v2 col-v2-left">
                                        <div class="item--inner builder-item--logo" data-section="title_tagline"
                                            data-item-id="logo">
                                            <div class="site-branding logo-top">
                                                <a href="{{ route('welcome') }}" class="logo-link" rel="home">
                                                    <img class="site-img-logo"
                                                        src="{{ asset(config('settings.logo') ? 'images/' . config('settings.logo') : 'images/logo.png') }}"
                                                        alt="The Construction Platform" />
                                                </a>
                                            </div>
                                            <!-- .site-branding -->
                                        </div>

                                    </div>
                                    <div class="col-v2 col-v2-right">
                                        <div class="item--inner builder-item--primary-menu has_menu"
                                            data-section="header_menu_primary" data-item-id="primary-menu">
                                            <nav
                                                class="site-navigation-main-desktop site-navigation primary-menu primary-menu-main nav-menu-desktop primary-menu-desktop style-plain">
                                                <ul id="site-navigation-main-desktop-primary-menu"
                                                    class="primary-menu-ul menu nav-menu">
                                                    <li id="menu-item--main-desktop-951"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-951">
                                                        <a href="{{ route('welcome') }}" class="d-flex flex-column">
                                                            <i class="bx bx-home fs-3"></i>
                                                            <span class="link-before">Home</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item--main-desktop-953"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="" class="d-flex flex-column">
                                                            <i class="bx bx-news fs-3"></i>
                                                            <span class="link-before">My News Feed</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item--main-desktop-953"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="" class="d-flex flex-column">
                                                            <i class="bx bx-message fs-3"></i>
                                                            <span class="link-before">My Message Board</span>
                                                        </a>
                                                    </li>

                                                    <li id="menu-item--main-desktop-953"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="{{ route('profile') }}" class="d-flex flex-column">
                                                            <i class="bx bx-cog fs-3"></i>
                                                            <span class="link-before">Settings</span>
                                                        </a>
                                                    </li>

                                                    <li id="menu-item--main-desktop-953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="#exchange" class="d-flex flex-column" title="Exchange Calculator & Payment Center">
                                                            <img src="{{ asset('assets/img/exchange.png') }}" width="30" height="30">
                                                        </a>
                                                    </li>


                                                    {{-- <li id="menu-item--main-desktop-6838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6838">
                                        <a href="https://theconstructionplatform.com/shop/" ><span class="link-before"
                                            >Shop<span class="nav-icon-angle"
                                                >&nbsp;</span
                                            ></span
                                            ></a>
                                        <ul class="sub-menu sub-lv-0">
                                            <li
                                            id="menu-item--main-desktop-6842"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6842"
                                            >
                                            <a
                                                href="https://theconstructionplatform.com/shop/"
                                                ><span class="link-before">Product</span></a
                                            >
                                            </li>
                                            <li
                                            id="menu-item--main-desktop-6839"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6839"
                                            >
                                            <a
                                                href="https://theconstructionplatform.com/cart/"
                                                ><span class="link-before">Cart</span></a
                                            >
                                            </li>
                                            <li
                                            id="menu-item--main-desktop-6840"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6840"
                                            >
                                            <a
                                                href="https://theconstructionplatform.com/checkout/"
                                                ><span class="link-before"
                                                >Checkout</span
                                                ></a
                                            >
                                            </li>
                                            <li
                                            id="menu-item--main-desktop-6841"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6841"
                                            >
                                            <a
                                                href="https://theconstructionplatform.com/my-account/"
                                                ><span class="link-before"
                                                >My account</span
                                                ></a
                                            >
                                            </li>
                                        </ul>
                                        </li> --}}



                                                </ul>
                                            </nav>
                                        </div>
                                        @guest
                                            <div class="item--inner builder-item--signin_signup" data-section="signin_signup" data-item-id="signin_signup">
                                                <div class="header-signin_signup-item item--signin_signup">
                                                    <div class="user-account-segment">
                                                        <div class="ec-d-flex signin-items">
                                                            <button class="button button-signin show-signin-form-modal" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        <div class=""></div>

                                        <div class="item--inner builder-item--signin_signup" data-section="signin_signup" data-item-id="signin_signup">
                                            <div class="header-signin_signup-item item--signin_signup">
                                                <div class="user-account-segment">
                                                    <div>
                                                        <div class="ec-text-right user-loggedin">
                                                            <div>
                                                                <img alt=""
                                                                    src="{{ asset(Auth::user()->avatar ? "/images/user/".Auth::user()->avatar : 'images/avatar.png') }}"
                                                                    class="avatar avatar-70 photo" height="70"
                                                                    width="70" loading="lazy" decoding="async" />
                                                            </div>
                                                            <div class="ec-w-75 user-header-section">
                                                                <div>
                                                                    <h6 class="ec-mb-0 ec-mt-2">
                                                                        Hello, {{ Auth::user()->name }}
                                                                    </h6>
                                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="loggedin-user-links">
                                                            <li class="user-account-dd-segment">
                                                                <div class="account-avatar">
                                                                    <img alt=""
                                                                        src="{{ asset(Auth::user()->avatar ? "/images/user/". Auth::user()->avatar : 'images/avatar.png') }}"
                                                                        class="avatar avatar-70 photo" height="70"
                                                                        width="70" loading="lazy"
                                                                        decoding="async" />
                                                                </div>
                                                                <div class="account-diplay-name">
                                                                    <h6 class="ec-mb-0 ec-mt-2">
                                                                        Hello,  {{ Auth::user()->name }}
                                                                    </h6>
                                                                    <p></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route("profile") }}">Profile</a>
                                                            </li>
                                                            {{-- <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/forums">Topics<span
                                                                        class="count">34</span></a>
                                                            </li> --}}
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/groups">Groups<span
                                                                        class="count"></span></a>
                                                            </li>
                                                            {{-- <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/friends">Friends<span
                                                                        class="count"></span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/messages">Messages<span
                                                                        class="count"></span></a>
                                                            </li> --}}
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/settings">Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endguest


                                        <div class="item--inner builder-item--user_notification"
                                            data-section="user_notification" data-item-id="user_notification">
                                            <div class="header-user_notification-item item--user_notification">
                                                <div class="user-account-segment">
                                                    <div class="th-bp-header-notification-container">
                                                        <div class="th-bp-notif-logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <ul>
                                                            <span class="notification-title">Notifications<a
                                                                    class="ec-float-right"
                                                                    href="https://theconstructionplatform.com/members/admin/notifications">View
                                                                    All</a></span>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/">You
                                                                    have no new Notifications.</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item--inner builder-item--social_search_box"
                                            data-section="social_search_box" data-item-id="social_search_box">
                                            <div class="header-social_search_box-item item--social_search_box">
                                                <form role="search" class="header-search-form"
                                                    action="">
                                                    <div class="search-form-fields">
                                                        <span class="screen-reader-text">Search for:</span>

                                                        <input autocomplete="off" type="search" class="search-field"
                                                            placeholder="Search" value="" name="s"
                                                            title="Search for:" />
                                                    </div>
                                                    <button type="submit" class="search-submit">
                                                        <svg aria-hidden="true" focusable="false"
                                                            xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="21" viewBox="0 0 20 21">
                                                            <path fill="currentColor" fill-rule="evenodd"
                                                                d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <div class="search-box-result">
                                                    <p class="ec-mb-0">Search result</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cb-row--mobile hide-on-desktop tophive-grid tophive-grid-middle">
                                <div class="row-v2 row-v2-main no-center">
                                    <div class="col-v2 col-v2-left">
                                        <div class="item--inner builder-item--nav-icon"
                                            data-section="header_menu_icon" data-item-id="nav-icon">
                                            <a
                                                class="menu-mobile-toggle item-button is-size-desktop-small is-size-tablet-medium is-size-mobile-small">
                                                <span class="hamburger hamburger--squeeze">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </span>
                                                <span class="nav-icon--label hide-on-tablet hide-on-mobile"></span></a>
                                        </div>
                                        <div class="item--inner builder-item--logo" data-section="title_tagline"
                                            data-item-id="logo">
                                            <div class="site-branding logo-top">
                                                <a href="https://theconstructionplatform.com/" class="logo-link"
                                                    rel="home">
                                                    <img class="site-img-logo"
                                                        src="https://theconstructionplatform.com/wp-content/uploads/2022/07/logo.png"
                                                        alt="The Construction Platform" />
                                                    <img class="site-img-logo logo-dark" src=""
                                                        alt="The Construction Platform" />
                                                </a>
                                            </div>
                                            <!-- .site-branding -->
                                        </div>
                                    </div>
                                    <div class="col-v2 col-v2-right">
                                        <div class="item--inner builder-item--signin_signup"
                                            data-section="signin_signup" data-item-id="signin_signup">
                                            <div class="header-signin_signup-item item--signin_signup">
                                                <div class="user-account-segment">
                                                    <div>
                                                        <div class="ec-text-right user-loggedin">
                                                            <div>
                                                                <img alt=""
                                                                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm"
                                                                    srcset="
                                      //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm 2x
                                    "
                                                                    class="avatar avatar-70 photo" height="70"
                                                                    width="70" loading="lazy" decoding="async" />
                                                            </div>
                                                            <div class="ec-w-75 user-header-section">
                                                                <div>
                                                                    <h6 class="ec-mb-0 ec-mt-2">
                                                                        Hello, admin
                                                                    </h6>
                                                                    <a
                                                                        href="https://theconstructionplatform.com/wp-login.php?action=logout&amp;_wpnonce=182b5d09aa&redirect_to=https%3A%2F%2Ftheconstructionplatform.com%2Fmembers%2Fknight%2Factivity%2F60%2F%3Floggedout%3Dtrue">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="loggedin-user-links">
                                                            <li class="user-account-dd-segment">
                                                                <div class="account-avatar">
                                                                    <img alt=""
                                                                        src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm"
                                                                        srcset="
                                        //www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm 2x
                                      "
                                                                        class="avatar avatar-70 photo" height="70"
                                                                        width="70" loading="lazy"
                                                                        decoding="async" />
                                                                </div>
                                                                <div class="account-diplay-name">
                                                                    <h6 class="ec-mb-0 ec-mt-2">
                                                                        Hello, admin
                                                                    </h6>
                                                                    <p></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="{{ route("profile") }}">Profile</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/forums">Topics<span
                                                                        class="count">34</span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/groups">Groups<span
                                                                        class="count"></span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/friends">Friends<span
                                                                        class="count"></span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/messages">Messages<span
                                                                        class="count"></span></a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/settings">Settings</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/wp-login.php?action=logout&amp;_wpnonce=182b5d09aa&redirect_to=https%3A%2F%2Ftheconstructionplatform.com%2Fmembers%2Fknight%2Factivity%2F60%2F%3Floggedout%3Dtrue">Logout</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item--inner builder-item--user_notification"
                                            data-section="user_notification" data-item-id="user_notification">
                                            <div class="header-user_notification-item item--user_notification">
                                                <div class="user-account-segment">
                                                    <div class="th-bp-header-notification-container">
                                                        <div class="th-bp-notif-logo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                                            </svg><span>0</span>
                                                        </div>
                                                        <ul>
                                                            <span class="notification-title">Notifications<a
                                                                    class="ec-float-right"
                                                                    href="https://theconstructionplatform.com/members/admin/notifications">View
                                                                    All</a></span>
                                                            <li>
                                                                <a
                                                                    href="https://theconstructionplatform.com/members/admin/">You
                                                                    have no new Notifications.</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="header-menu-sidebar" class="header-menu-sidebar menu-sidebar-panel dark-mode">
                    <div id="header-menu-sidebar-bg" class="header-menu-sidebar-bg">
                        <div id="header-menu-sidebar-inner" class="header-menu-sidebar-inner">
                            <a class="close is-size-medium close-panel close-sidebar-panel" href="#">
                                <span class="hamburger hamburger--squeeze">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"><span
                                                class="screen-reader-text">Menu</span></span>
                                    </span>
                                </span>
                                <span class="screen-reader-text">Close</span>
                            </a>
                            <div class="builder-item-sidebar mobile-item--primary-menu mobile-item--menu">
                                <div class="item--inner" data-item-id="primary-menu"
                                    data-section="header_menu_primary">
                                    <nav
                                        class="site-navigation-sidebar-mobile site-navigation primary-menu primary-menu-sidebar nav-menu-mobile primary-menu-mobile style-plain">
                                        <ul id="site-navigation-sidebar-mobile-primary-menu"
                                            class="primary-menu-ul menu nav-menu">
                                            <li id="menu-item--sidebar-mobile-951"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-951">
                                                <a href="https://theconstructionplatform.com/activity-7/"><span
                                                        class="link-before">Activity</span></a>
                                            </li>
                                            <li id="menu-item--sidebar-mobile-953"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                <a href="https://theconstructionplatform.com/groups/"><span
                                                        class="link-before">Groups</span></a>
                                            </li>
                                            <li id="menu-item--sidebar-mobile-1479"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1479">
                                                <a href="https://theconstructionplatform.com/forum/"><span
                                                        class="link-before">Forums<span
                                                            class="nav-icon-angle">&nbsp;</span></span></a>
                                                <ul class="sub-menu sub-lv-0">
                                                    <li id="menu-item--sidebar-mobile-1481"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                        <a href="https://theconstructionplatform.com/forum/"><span
                                                                class="link-before">Latest Activity</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-1483"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1483">
                                                        <a href="https://theconstructionplatform.com/whats-new/"><span
                                                                class="link-before">What’s New</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-1484"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1484">
                                                        <a href="/metafans/classic/forums/view/popular/"><span
                                                                class="link-before">Most popular topics</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-1482"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1482">
                                                        <a href="https://theconstructionplatform.com/new-post/"><span
                                                                class="link-before">Write New Post</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item--sidebar-mobile-952"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-952">
                                                <a href="https://theconstructionplatform.com/blog/"><span
                                                        class="link-before">Blog<span
                                                            class="nav-icon-angle">&nbsp;</span></span></a>
                                                <ul class="sub-menu sub-lv-0">
                                                    <li id="menu-item--sidebar-mobile-1889"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1889">
                                                        <a href="https://theconstructionplatform.com/blog/"><span
                                                                class="link-before">Blog Default</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-1911"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1911">
                                                        <a href="https://theconstructionplatform.com/blog-classic/"><span
                                                                class="link-before">Blog Classic</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-1890"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1890">
                                                        <a href="https://theconstructionplatform.com/blog-grid/"><span
                                                                class="link-before">Blog Grid</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item--sidebar-mobile-1757"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1757">
                                                <a href="https://theconstructionplatform.com/photos/"><span
                                                        class="link-before">Photos</span></a>
                                            </li>
                                            <li id="menu-item--sidebar-mobile-6838"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6838">
                                                <a href="https://theconstructionplatform.com/shop/"><span
                                                        class="link-before">Shop<span
                                                            class="nav-icon-angle">&nbsp;</span></span></a>
                                                <ul class="sub-menu sub-lv-0">
                                                    <li id="menu-item--sidebar-mobile-6842"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6842">
                                                        <a href="https://theconstructionplatform.com/shop/"><span
                                                                class="link-before">Product</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-6839"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6839">
                                                        <a href="https://theconstructionplatform.com/cart/"><span
                                                                class="link-before">Cart</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-6840"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6840">
                                                        <a href="https://theconstructionplatform.com/checkout/"><span
                                                                class="link-before">Checkout</span></a>
                                                    </li>
                                                    <li id="menu-item--sidebar-mobile-6841"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6841">
                                                        <a href="https://theconstructionplatform.com/my-account/"><span
                                                                class="link-before">My account</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="footer ec-d-flex ec-justify-content-between"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="site-content" class="content-sm-space site-content">
            @yield('content')
        </div>
        <!-- #content -->
        <footer class="site-footer" id="site-footer">

        </footer>
        @include("partials.login-modal")
    </div>

    <div class="tophive-bp-messenger-sticky-main">
        <div class="messenger-toggler">
           <img alt="" src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm" srcset="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=30&amp;r=g&amp;d=mm 2x" class="avatar avatar-30 photo" height="30" width="30" loading="lazy" decoding="async"> Messenger<span class="live-indicator"></span><span class="new-message-count hidden">0</span>
           <span class="open-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
              </svg>
           </span>
        </div>
        <div class="messenger-sticky-main-content">
           <div class="tophive-bp-messenger-main-wrapper">
              <div class="th-messenger-chat-list">
                 <div class="th-bpm-top">
                    <form>
                       <input class="search_chat_members" type="search" placeholder="Search member...">
                    </form>
                    <div class="show_searched_members"></div>
                 </div>
                 <div class="th-bpm-chat-members">
                    <div class="no-msg-sidebar">No Recent Messages</div>
                 </div>
              </div>
              <div class="th-messenger-chat-main">
                 <div class="start-new-conv">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512">
                       <g>
                          <path d="m502.839 362.82-34.35-104.336c-1.295-3.934-5.536-6.074-9.469-4.779-3.935 1.295-6.074 5.535-4.779 9.469l32.351 98.267c-.968-.143-1.951-.241-2.958-.241h-29.021l-38.312-116.375v-76.548h2.923c2.258 0 4.25 1.441 4.956 3.586l18.486 56.153c1.039 3.156 3.972 5.157 7.123 5.157.777 0 1.568-.122 2.347-.378 3.935-1.295 6.074-5.535 4.779-9.469l-18.486-56.153c-2.737-8.311-10.454-13.895-19.204-13.895h-112.086c-14.751-9.527-32.31-15.063-51.139-15.063s-36.388 5.536-51.139 15.063h-112.086c-8.75 0-16.467 5.584-19.204 13.896l-64.41 195.647c-.673 2.043-1.014 4.17-1.014 6.321v53.424c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-41.148c0-2.877 2.341-5.218 5.218-5.218h93.901c1.979 0 3.82 1.149 4.688 2.928l18.452 37.781c3.366 6.892 10.497 11.345 18.167 11.345h184.853c7.67 0 14.801-4.454 18.167-11.345l18.452-37.781c.869-1.778 2.709-2.928 4.688-2.928h93.901c2.877 0 5.218 2.341 5.218 5.218v110.364c0 2.877-2.341 5.218-5.218 5.218h-455.269c-2.877 0-5.218-2.341-5.218-5.218v-32.189c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v32.189c0 11.148 9.07 20.218 20.218 20.218h455.27c11.148 0 20.218-9.07 20.218-20.218v-122.64c0-2.15-.341-4.277-1.014-6.322zm-101.537-132.503c-1.479-.342-3.012-.529-4.58-.529h-46.249c-.731-23.73-10.251-45.283-25.408-61.511h76.237zm-239.775-.528h-46.249c-1.568 0-3.101.186-4.58.529v-62.04h76.237c-15.156 16.228-24.677 37.781-25.408 61.511zm-136.12 131.653 62.412-189.578c.706-2.145 2.698-3.586 4.956-3.586h2.923v76.549l-38.312 116.373h-29.021c-1.007 0-1.989.099-2.958.242zm346.159 11.103-18.453 37.782c-.868 1.778-2.708 2.927-4.688 2.927h-184.851c-1.979 0-3.819-1.149-4.688-2.928l-18.452-37.781c-3.366-6.892-10.497-11.345-18.167-11.345h-49.088l37.144-112.825c.706-2.145 2.698-3.586 4.956-3.586h46.975c2.238 17.327 9.259 33.851 20.323 47.479 13.407 16.515 32.165 28.14 52.818 32.734 4.043.896 8.051-1.649 8.95-5.693.899-4.043-1.649-8.05-5.693-8.95-17.366-3.863-33.145-13.646-44.429-27.546-11.443-14.096-17.746-31.88-17.746-50.075 0-43.85 35.674-79.524 79.523-79.524s79.523 35.674 79.523 79.524c0 37.38-26.505 70.103-63.022 77.806-4.053.855-6.646 4.833-5.791 8.886.745 3.531 3.86 5.954 7.331 5.954.513 0 1.034-.053 1.555-.163 20.892-4.407 39.896-15.973 53.512-32.567 11.249-13.709 18.378-30.371 20.636-47.865h46.976c2.258 0 4.25 1.441 4.956 3.586l37.146 112.825h-49.089c-7.669 0-14.8 4.453-18.167 11.345z"></path>
                          <path d="m53.912 477.393h27.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-27.446c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"></path>
                          <path d="m53.912 453.964h27.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-27.446c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"></path>
                          <path d="m273.294 266.144c2.119 0 4.225-.893 5.708-2.631 2.689-3.15 2.315-7.885-.835-10.574-6.184-5.278-14.396-8.199-23.125-8.226-8.714-.019-16.958 2.846-23.173 8.088-3.167 2.67-3.569 7.402-.898 10.568 2.67 3.167 7.402 3.57 10.568.898 3.435-2.896 8.311-4.555 13.388-4.555h.07c5.104.016 9.999 1.705 13.432 4.635 1.412 1.207 3.143 1.797 4.865 1.797z"></path>
                          <path d="m214.689 216.564h-.089c-4.143.026-7.474 3.317-7.496 7.459-.023 4.142 3.361 7.518 7.503 7.541h.042c4.123 0 7.477-3.331 7.499-7.459.022-4.142-3.317-7.518-7.459-7.541z"></path>
                          <path d="m296.665 231.523c.056.006.114.005.17.01.184.015.367.03.555.031h.042.01c.006 0 .011-.001.017-.001.249-.001.495-.013.738-.037 3.788-.379 6.745-3.575 6.745-7.462 0-4.069-3.243-7.374-7.284-7.489-.062-.002-.123-.01-.186-.01h-.023c-.002 0-.005 0-.007 0h-.059-.032c-.003 0-.007 0-.01 0-4.122 0-7.432 3.331-7.455 7.459-.021 3.896 2.974 7.113 6.779 7.499z"></path>
                          <path d="m188.294 35.535c1.464 1.465 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197l6.063-6.063 6.063 6.063c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197c2.929-2.929 2.929-7.678 0-10.606l-6.063-6.063 6.063-6.063c2.929-2.929 2.929-7.678 0-10.606-2.928-2.929-7.677-2.929-10.606 0l-6.063 6.063-6.063-6.063c-2.929-2.929-7.678-2.929-10.606 0-2.929 2.929-2.929 7.678 0 10.606l6.063 6.063-6.063 6.063c-2.929 2.929-2.929 7.678 0 10.606z"></path>
                          <path d="m134.858 113.76c18.883 0 34.245-15.362 34.245-34.246 0-18.883-15.362-34.245-34.245-34.245s-34.245 15.362-34.245 34.245c0 18.884 15.363 34.246 34.245 34.246zm0-53.49c10.612 0 19.245 8.633 19.245 19.245s-8.633 19.246-19.245 19.246-19.245-8.633-19.245-19.246c0-10.612 8.634-19.245 19.245-19.245z"></path>
                          <path d="m357.925 109.132c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197l6.063-6.063 6.063 6.063c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197c2.929-2.929 2.929-7.678 0-10.606l-6.063-6.063 6.063-6.063c2.929-2.929 2.929-7.678 0-10.606-2.929-2.929-7.678-2.929-10.606 0l-6.063 6.063-6.063-6.063c-2.929-2.929-7.678-2.929-10.606 0-2.929 2.929-2.929 7.678 0 10.606l6.063 6.063-6.063 6.063c-2.929 2.929-2.929 7.678 0 10.606z"></path>
                          <path d="m255.588 107.999h.023c4.131 0 7.487-3.343 7.5-7.478l.066-22.333c.012-4.142-3.335-7.51-7.478-7.522-.008 0-.015 0-.023 0-4.131 0-7.487 3.343-7.5 7.478l-.066 22.333c-.012 4.141 3.336 7.509 7.478 7.522z"></path>
                          <path d="m206.846 84.209c-3.553 2.128-4.708 6.734-2.58 10.288l11.604 19.374c1.406 2.347 3.891 3.647 6.441 3.647 1.311 0 2.64-.344 3.847-1.067 3.553-2.128 4.708-6.734 2.58-10.288l-11.604-19.374c-2.129-3.553-6.735-4.709-10.288-2.58z"></path>
                          <path d="m284.967 116.734c1.216.738 2.559 1.089 3.884 1.089 2.535 0 5.008-1.285 6.419-3.609l11.72-19.31c2.149-3.541 1.021-8.154-2.52-10.303-3.542-2.148-8.154-1.021-10.303 2.52l-11.72 19.31c-2.149 3.541-1.02 8.154 2.52 10.303z"></path>
                          <path d="m324.46 66.991c15.85 0 28.744-12.895 28.744-28.744s-12.894-28.744-28.744-28.744-28.744 12.895-28.744 28.744 12.894 28.744 28.744 28.744zm0-42.488c7.579 0 13.744 6.166 13.744 13.744s-6.166 13.744-13.744 13.744-13.744-6.166-13.744-13.744 6.165-13.744 13.744-13.744z"></path>
                       </g>
                    </svg>
                    <h4>You have not yet started a chat yet</h4>
                    <p>Start a new conversation by finding a member</p>
                 </div>
              </div>
           </div>
        </div>
     </div>

    <!-- #page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        $( document ).ready(function() {

            $(".messenger-toggler").on("click", function(){

                const cls = $(this).parent().attr("class");

                if(cls.includes("messenger-open")){
                    $(this).parent().removeClass("messenger-open");
                }else{
                    $(this).parent().addClass("messenger-open");
                }


            });

        });
    </script>


    {{-- ---------------------------------- VUE SCRIPTS --------------------------------------- --}}
    <script>
        let vdata = {
            cartCount: 0
        };
        let vcreated = {};
        let vmounted = {};
        let vmethods = {};
        let vdestroyed = {};
    </script>

    @stack("body_scripts")


    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script type="text/javascript">
        const app = new Vue({
            el: '#app',
            data: vdata,
            created() {
                Object.keys(vcreated).forEach(method => {
                    vcreated[method]();
                });
            },
            mounted() {
                Object.keys(vmounted).forEach(method => {
                    vmounted[method]();
                });
            },
            destroyed(){
                Object.keys(vdestroyed).forEach(method => {
                    vdestroyed[method]();
                });
            },
            methods: {
                ...vmethods,
            },
        });
    </script>
    {{-- ---------------------------------- End of VUE SCRIPTS --------------------------------------- --}}
</body>

</html>
