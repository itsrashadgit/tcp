@include('components/header-home')

    <!-- Content Main -->
    <section class="position-relative py-5">
        <div class="container position-relative zindex-5 py-2 py-md-4 py-lg-5">
            <div class="row justify-content-center text-center pt-xl-2 pb-4 mb-1 mb-lg-3">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <img src="https://via.placeholder.com/250x250?text=Intro+Video+Professionals">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <h1 class="mb-4">The Construction Platform</h1>
                    <i class="bx bx-current-location text-muted mb-0"></i><span> All of United State</span>
                    <div class="search-bar-container">
                        <form data-testid="search-bar-v2" class="search-form--mexm-">
                            <input name="query" type="search" autocomplete="off" aria-label="Search input" class="form-control" placeholder="What are you looking for?">
                            <div class="search-button-container gtm-home-search-click">
                                <button class="btn btn-default gtm-home-search-click" type="submit">
                                    <div class="icon icon-extra-small" style="fill: rgb(103, 53, 0);">
                                        <svg width="17" height="17" viewBox="0 0 17 17" class="svg-wrapper--8ky9e"><path d="M7.615 15.23a7.615 7.615 0 1 1 6.1-3.054l2.966 2.967a1.088 1.088 0 0 1-1.539 1.538l-2.966-2.966a7.582 7.582 0 0 1-4.56 1.516zm5.44-7.615a5.44 5.44 0 1 1-10.88 0 5.44 5.44 0 0 1 10.88 0z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <img src="https://via.placeholder.com/250x250?text=Intro+Video+Students">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2">
                    <img src="https://via.placeholder.com/250x800?text=Banner+Ads">
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="usa-map">
                        <img class="img-fluid rounded" src="{{ asset('public/img/united-states-map.png') }}" width="100%" alt="united-state-map" title="United State Map">
                        <img class="img-fluid rounded" src="{{ asset('public/img/united-states-map-transparent.png') }}" width="100%" alt="united-state-map" title="United State Map">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <img src="https://via.placeholder.com/250x800?text=Banner+Ads">
                </div>
            </div>

            <!-- BG shape -->
            <div class="position-absolute end-0 bottom-0 text-primary">
                <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
            </div>
        </div>
    </section>
</main>

@include('components/footer-home')
    