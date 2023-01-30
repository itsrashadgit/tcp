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


    <!-- Vendor Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('public/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- <script src="{{ asset('public/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('public/vendor/@lottiefiles/lottie-player/dist/lottie-player.js') }}"></script>
    <script src="{{ asset('public/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/vendor/cleave.js/dist/cleave.min.js') }}"></script> -->

    <!-- Main Theme Script -->
    <script src="{{ asset('public/js/theme.min.js') }}"></script>
  </body>
</html>