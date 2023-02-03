
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('lang_dir') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield("meta_tags")

    {{-- <link rel="stylesheet" href="{{ asset("public/css/bootstrap.css") }}"> --}}
    <link rel="stylesheet" href="{{ asset("public/css/coreui.css") }}">
    {{-- <link rel="stylesheet" href="{{ asset("css/coreui.min.css") }}"> --}}
    {{-- <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet" />

    @yield('styles')

    @stack("head_includes")

</head>

<body>
<div id="app">
  <div class="c-app">

    <div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

        <div class="c-sidebar-brand d-md-down-none">
            <a class="c-sidebar-brand-full h4" href="#" style="color: #fff">
                {{ __('TCP') }}
            </a>
        </div>

        <ul class="c-sidebar-nav">

            <li class="c-sidebar-nav-item">
                <a href="" class="c-sidebar-nav-link text-light" >
                    <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ __("Dashboard") }}
                </a>
            </li>

            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ __("User Management") }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                        <li class="c-sidebar-nav-item">
                            <a href="" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Permissions") }}
                            </a>
                        </li>

                        <li class="c-sidebar-nav-item">
                            <a href="" class="c-sidebar-nav-link ">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Roles") }}
                            </a>
                        </li>


                        <li class="c-sidebar-nav-item">
                            <a href="" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("All Users") }}
                            </a>
                        </li>

                </ul>
            </li>

        </ul>

    </div>


  <div class="c-wrapper">
      <header class="c-header c-header-fixed px-3">
          <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
              <i class="fas fa-fw fa-bars"></i>
          </button>

          <a class="c-header-brand d-lg-none" href="#">{{ __('Dashboard') }}</a>

          <button class="c-header-toggler mfs-3 d-md-down-none" type="button" responsive="true">
              <i class="fas fa-fw fa-bars"></i>
          </button>
          <div class="mx-auto"></div>
          <ul class="c-header-nav">


              <div class="btn-group language-dropdown">
                <span role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img width="20" src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" alt="" class="img-fluid">
                    <span class="mx-1">English</span>
                    <i class="fas fa-angle-down"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="">English</a>
                </div>
            </div>



              <ul class="c-header-nav">

                <li class="c-header-nav-item dropdown d-md-down-none mx-2" v-cloak>
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-bell"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0" style="min-width: 250px">
                    <div class="dropdown-header bg-light">
                            <strong>You have 1 notifications</strong>
                        </div>
                        <a href="">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="fas fa-envelope h4 mb-0 text-danger"></i>
                                    <span class="mx-2"></span>
                                </div>
                                <div>
                                    <div class="text-truncate font-weight-bold">New User Signup</div>
                                    <div class="small text-muted text-truncate">12:00PM</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="dropdown-item text-center border-top"><strong>{{ __("View all Notifications") }}</strong></a>
                    </div>

                </li>


                <li class="c-header-nav-item dropdown">
                   <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <div class="c-avatar"><img class="c-avatar-img" src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png" alt="user@email.com"></div>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right pt-0">
                      <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                        <a class="dropdown-item" href="">
                            <i class="far fa-user"></i>
                            <span class="mx-1"></span>
                            {{ __("Profile") }}
                        </a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt">

                          </i>
                          <span class="mx-1"></span>
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                   </div>
                </li>
             </ul>


          </ul>
      </header>

      <div class="c-body">
          <main class="c-main">


              <div class="container-fluid">

                  @yield('content')

              </div>


          </main>
      </div>
  </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>

    @stack("body_scripts")


</body>

</html>
