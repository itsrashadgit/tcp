<!-- Footer -->
    <footer class="footer dark-mode bg-dark border-top border-light pt-4 pb-3 pb-lg-4">
      <div class="container">
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
          <span class="text-light opacity-50">&copy; {{ date('Y') }} <a href="{{ url('') }}">{{ config('app.subtitle') }}</a> | All rights reserved</span>
      	</p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="{{ asset('public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('public/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('public/vendor/@lottiefiles/lottie-player/dist/lottie-player.js') }}"></script>
    <script src="{{ asset('public/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/vendor/cleave.js/dist/cleave.min.js') }}"></script>

    <!-- Main Theme Script -->
    <script src="{{ asset('public/js/theme.min.js') }}"></script>
  </body>
</html>