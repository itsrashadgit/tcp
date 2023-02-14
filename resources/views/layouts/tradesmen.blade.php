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

    <script src="{{ asset('tcp/js/jquery.min.js') }}" id="jquery-core-js"></script>

    <script src="{{ asset('tcp/js/bud.js') }}" id="th-bud-js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" media="screen" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <style>
        [v-cloak] {
            display: none;
        }
        img{
            border: none;
        }
    </style>
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
                                        <div class="item--inner builder-item--social_search_box"
                                            data-section="social_search_box" data-item-id="social_search_box">
                                            <div class="header-social_search_box-item item--social_search_box">
                                                <form role="search" class="header-search-form"
                                                    action="https://theconstructionplatform.com/">
                                                    <div class="search-form-fields">
                                                        <span class="screen-reader-text">Search for:</span>

                                                        <input autocomplete="off" type="search" class="search-field"
                                                            placeholder="Search community" value="" name="s"
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
                                                        <a href="{{ route('feeds') }}" class="d-flex flex-column">
                                                            <i class="bx bx-planet fs-3"></i>
                                                            <span class="link-before">NFLP</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item--main-desktop-953"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="{{ route('feeds') }}" class="d-flex flex-column">
                                                            <i class="bx bx-paint fs-3"></i>
                                                            <span class="link-before">MBLP</span>
                                                        </a>
                                                    </li>

                                                    <li id="menu-item--main-desktop-953"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <a href="{{ route('profile') }}" class="d-flex flex-column">
                                                            <i class="bx bx-cog fs-3"></i>
                                                            <span class="link-before">Settings</span>
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
                                        <div class="item--inner builder-item--signin_signup" data-section="signin_signup" data-item-id="signin_signup">
                                            <div class="header-signin_signup-item item--signin_signup">
                                                <div class="user-account-segment">
                                                    <div>
                                                        <div class="ec-text-right user-loggedin">
                                                            <div>
                                                                <img alt=""
                                                                    src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm"
                                                                    srcset="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm 2x"
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
                                                                        src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm"
                                                                        srcset="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=70&#038;r=g&#038;d=mm 2x"
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
                                                                    href="https://theconstructionplatform.com/members/admin">Profile</a>
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
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-3">
                            <li class="breadcrumb-item"><a href="{{ route("welcome") }}">{{ __("Home") }}</a></li>
                            <li class="breadcrumb-item active">{{ __("Account") }}</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="row ">
                        <div class="col-md-3">
                            @php
                            $routename = request()->route()->getName();
                            @endphp

                            <div class="d-flex flex-column flex-shrink-0 p-3 bg-white mb-3">

                                <h6 class="ember-bold">{{ __("Account") }}</h6>

                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link link-dark {{ $routename == 'home' ? 'active' : '' }}" aria-current="page">
                                        <i class="fas fa fa-tachometer-alt"></i>
                                            <span class="mx-1"></span>
                                            <span>{{ __("Dashboard") }}</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="{{ route('profile') }}" class="nav-link link-dark {{ $routename == 'profile' ? 'active' : '' }}">
                                            <i class="fas fa-user"></i>
                                            <span class="mx-1"></span>
                                            <span>{{ __("Profile") }}</span>
                                        </a>
                                    </li>
                                    <li>

                                        <a class="nav-link link-dark" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span class="mx-1"></span>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-9">
                            @yield("content")
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- #content -->
        <footer class="site-footer" id="site-footer">

        </footer>
        @include("partials.login-modal")
    </div>

    <!-- #page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
