
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('lang_dir') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield("meta_tags")

    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.scrollbar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />

    @stack("head_tags")

</head>

<body>


    <div id="app">
        <header class="bg-white sticky-top shadow-sm" id="top-header">
            <div class="container-fluid">
              <nav class="navbar">
                <div>
                  <button type="button" class="btn btn-light" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                  </button>
                </div>
                <div>
                    <ul class="nav ml-auto">


                        <x-core-query-lang-selector></x-core-query-lang-selector>

                        <x-core-notification></x-core-notification>

                        <li class="nav-item dropdown nav-menu">
                          <a class="nav-link p-0" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" class="img-fluid"
                              src="{{ asset(Auth::check() && Auth::user()->avatar ? "images/user/".Auth::user()->avatar : "images/avatar.png") }}" width="40" height="40">
                            </span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{ route("profile") }}">
                                    <i class="far fa-user"></i>
                                    <span class="mx-1"></span>
                                    {{ __("Profile") }}
                                </a>
                            </li>
                            <li>
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
                            </li>
                          </ul>
                        </li>
                      </ul>
                </div>
              </nav>
            </div>
          </header>
        <main>
            <aside id="main-sidebar">
                @php
                $currentRoute = request()->route()->getName();
            @endphp
          <div class="scrollbar-inner">
            <div class="text-center p-2">
              <h2>
                <a href="" class="text-white">
                  <img src="{{ asset("asougexpress/images/logo.png") }}" width="50" alt="" class="img-fluid">
                </a>
              </h2>
            </div>
            <div class="hr-line"></div>
            <ul class="nav flex-column px-2">

                <li class="nav-item px-3 nav-category-divider text-white mb-2">{{ __("MAIN") }}</li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'home') active @endif" href="{{ route("home") }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __("Dashboard") }}</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'home') active @endif" href="{{ route("home") }}">
                    <i class="fas fa-fw fa-store"></i>
                    <span>{{ __("POS") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'home') active @endif" href="{{ route("home") }}">
                    <i class="fas fa-fw fa-undo"></i>
                    <span>{{ __("Return & Refund") }}</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'commission.history') active @endif" href="{{ route("commission.history") }}">
                        <i class="fas fa-coins"></i>
                    <span>{{ __("Commission History") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'withdraw.index') active @endif" href="{{ route("withdraw.index") }}">
                        <i class="fas fa-money-check"></i>
                    <span>{{ __("Withdraw History") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'wallet') active @endif" href="{{ route("wallet") }}">
                        <i class="fas fa-wallet"></i>
                        <span>{{ __("Wallet") }}</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'home') active @endif" href="{{ route("home") }}">
                        <i class="fas fa-id-badge"></i>
                    <span>{{ __("Subscriptions") }}</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'products.index') active @endif" href="{{ route("products.index") }}">
                    <i class="fas fa-tshirt"></i>
                    <span>{{ __("Products") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'coupons.index') active @endif" href="{{ route("coupons.index") }}">
                    <i class="fas fa-tags"></i>
                    <span>{{ __("Coupons") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'orders.index') active @endif" href="{{ route("orders.index") }}">
                    <i class="fas fa-shopping-cart"></i>
                    <span>{{ __("All Orders") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'customer-queries.index') active @endif" href="{{ route("customer-queries.index") }}">
                    <i class="fas fa-question-circle"></i>
                    <span>{{ __("Customer Queries") }}</span>
                    </a>
                </li>

                @if (getSetting("allow_company_to_ship") == "true")
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="collapse" href="#collapseShipping" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-fighter-jet"></i>
                        <span>{{ __("Shipping") }}</span>
                        </a>
                        <ul class="list-group collapse" id="collapseShipping">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route("shipping-methods.index") }}" id="shipping-methods-menu">
                            <i class="fas fa-circle invisible"></i>
                            <span>{{ __("Shipping Methods") }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route("shipping-classes.index") }}" id="shipping-classes-menu">
                            <i class="fas fa-circle invisible"></i>
                            <span>{{ __("Shipping Classes") }}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route("zones.index") }}" id="zones-menu">
                            <i class="fas fa-circle invisible"></i>
                            <span>{{ __("Selling Zones") }}</span>
                            </a>
                        </li>

                        </ul>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'support-tickets.index') active @endif" href="{{ route("support-tickets.index") }}">
                    <i class="fas fa-bullhorn"></i>
                    <span>{{ __("Help Desk") }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'companies.edit') active @endif" href="{{ route('companies.edit', Auth::user()->companies()->first()->id) }}">
                        <i class="fas fa-building"></i>
                    <span>{{ __("Company Info") }}</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link text-white @if($currentRoute == 'company.settings') active @endif" href="{{ route('company.settings') }}">
                        <i class="fas fa-cog"></i>
                        <span>{{ __("Settings") }}</span>
                    </a>
                </li> --}}

                {{-- Roles --}}

                {{-- Users --}}

                <li class="nav-item">

                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt">

                        </i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
          </div>
            </aside>
            <section id="main-content">
                <div class="container-fluid my-3">
                    @yield("content")
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="{{ asset('js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @include("core::partials.toastr")

    {{-- ---------------------------------- VUE SCRIPTS --------------------------------------- --}}
    <script>
        let vdata = {};
        let vcreated = {};
        let vmounted = {};
        let vmethods = {};
        let vdestroyed = {};
    </script>

    @stack("body_scripts")


    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> --}}
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
