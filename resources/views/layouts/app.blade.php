<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.subtitle') }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="The Construction Platform">
    <meta name="keywords" content="construction, platform">
    <meta name="author" content="itsRashad">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('img/icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @stack("head_tags")
    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>

    <!-- Google Tag Manager -->
    <!-- <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script> -->
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
  </head>


  <!-- Body -->
  <body>

<div id="app">
        <!-- Google Tag Manager (noscript)-->
    <!-- <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript> -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.shorttitle', 'TCP') }}
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto text-center">
              <li class="nav-item">
                <a class="nav-link d-flex flex-column" href="{{ url('/') }}"><i class="bx bx-home fs-3"></i>{{__('Home')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex flex-column" href="{{ route('feeds') }}"><i class="bx bx-planet fs-3"></i>{{__('NFLP')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex flex-column" href="{{ route('feeds') }}"><i class="bx bx-paint fs-3"></i>{{__('MBLP')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex flex-column" class="nav-link" href="{{ url('/') }}"><i class="bx bx-cog fs-3"></i>{{__('Settings')}}</a>
              </li>
              <!-- Authentication Links -->
              @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-column" class="nav-link" href="{{ route('login') }}"><i class="bx bx-log-in fs-3"></i>{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-column" href="{{ route('register') }}"><i class="bx bx-registered fs-3"></i>{{ __('Register') }}</a>
                    </li>
                @endif
              @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link d-flex flex-column" href="{{ route("home.customer") }}" >
                        <i class="bx bx-log-in fs-3"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
                </li>
              @endguest
            </ul>
            <!-- <form class="navbar-form form-inline">
              <div class="input-group search-box">
                <input type="text" id="search" class="form-control" placeholder="Search here...">
                <span class="input-group-addon"><i class="bx bx-search fs-3">&#xE8B6;</i></span>
              </div>
            </form> -->
            <div class="form-group has-search">
              <input type="text" class="form-control" placeholder="Search Profiles">
            </div>
          </div>
        </div>
      </nav>

      <!-- Page loading spinner -->
      <div class="page-loading active">
        <div class="page-loading-inner">
          <div class="page-spinner"></div><span>Loading...</span>
        </div>
      </div>
      <!-- Page Main wrapper -->
      <main class="page-wrapper">

          @yield("content")

      </main>
  <!-- Footer -->
  <footer class="footer dark-mode bg-dark border-top border-light pt-4 pb-3 pb-lg-4">
      <div class="container">
        <p class="d-block fs-md text-center text-md-start">
          <span class="text-light opacity-50">&copy; {{ date('Y') }} <a href="{{ url('') }}">{{ config('app.subtitle') }}</a> | All rights reserved</span>
          </p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>

</div>

  <!-- Vendor Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

  <!-- <script src="{{ asset('vendor/jarallax/dist/jarallax.min.js') }}"></script>
  <script src="{{ asset('vendor/@lottiefiles/lottie-player/dist/lottie-player.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/cleave.js/dist/cleave.min.js') }}"></script> -->

  <!-- Main Theme Script -->
  <script src="{{ asset('js/theme.min.js') }}"></script>


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
            this.fetchCartCount();
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
            async fetchCartCount(){
                try{

                    const temporary_id = "{{ session("unique_id") }}";
                    const response = await axios.get(`/api/v1/cart-count?temporary_id=${temporary_id}`);
                    this.cartCount = response.data.data;

                }catch(err){
                    console.log(err);
                }
            }
        },
    });
</script>
{{-- ---------------------------------- End of VUE SCRIPTS --------------------------------------- --}}

</body>
</html>
