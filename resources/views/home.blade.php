@include('components/header')
<!-- Hero -->
<section class="pt-lg-4 mt-lg-3">
  <div class="position-relative overflow-hidden">
    <!-- Image -->
    <div class="container-fluid position-relative position-lg-absolute top-0 start-0 h-100">
      <div class="row h-100 me-n4 me-n2">
        <div class="col-lg-7 position-relative">
          <div class="d-none d-sm-block d-lg-none" style="height: 400px;"></div>
          <div class="d-sm-none" style="height: 300px;"></div>
          <div class="jarallax position-absolute top-0 start-0 w-100 h-100 rounded-3 rounded-start-0 overflow-hidden" data-jarallax data-speed="0.3">
            <div class="jarallax-img" style="background-image: url({{ asset('public/img/landing/financial/hero-img.jpg') }});"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container position-relative zindex-5 pt-lg-5 px-0 px-lg-3">
            <div class="row pt-lg-5 mx-n4 mx-lg-n3">
              <div class="col-xl-6 col-lg-7 offset-lg-5 offset-xl-6 pb-5">
  
                <!-- Card -->
                <div class="card bg-dark border-light overflow-hidden py-4 px-2 p-sm-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255,.05);"></span>
                  <div class="card-body position-relative zindex-5">
                    <p class="fs-xl fw-bold text-primary text-uppercase mb-3">Power your business</p>
                    <h1 class="display-5 text-light pb-3 mb-3">Clever Financial Consulting</h1>
                    <p class="fs-lg text-light opacity-70 mb-5">Helping our clients meet their financial needs for more than 10 years. We offer you  the full spectrum of global financial services.</p>
                    <div class="d-flex flex-column flex-sm-row">
                      <a href="#" class="btn btn-primary shadow-primary btn-lg mb-3 mb-sm-0 me-sm-4">Get started</a>
                      <a href="#" class="btn btn-outline-light btn-lg">
                        Who we are
                        <i class="bx bx-right-arrow-alt fs-4 lh-1 ms-2 me-n1"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-lg-4 offset-lg-8 offset-xxl-9 pt-lg-5 mt-xxl-5">
  
                <!-- Contacts (List) -->
                <ul class="list-unstyled mb-0 px-4 px-lg-0">
                  <li class="d-flex align-items-center pb-1 mb-2">
                    <i class="bx bx-map fs-xl text-primary me-2"></i>
                    Shagufta Tower, Plot 136, Level 1, Gulshan-Badda Link Road, Dhaka 1212, Bangladesh.
                  </li>
                  <li class="d-flex align-items-center pb-1 mb-2">
                    <i class="bx bx-envelope fs-xl text-primary me-2"></i>
                    <a href="mailto:hello@takakamao.com" class="nav-link fw-normal p-0">hello@takakamao.com</a>
                  </li>
                  <li class="d-flex align-items-center pb-1 mb-2">
                    <i class="bx bx-phone-call fs-xl text-primary me-2"></i>
                    <a href="tel:8801717643014" class="nav-link fw-normal p-0">+8801936-818761</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Services (Turns into carousel on narrow screens) -->
      <section class="container py-5 mt-md-3 my-lg-5">
        <h2 class="h1 pt-xl-2 pb-4 mb-2 mb-lg-3">Our Services</h2>
        <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "autoHeight": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <a href="#"><img src="{{ asset('public/img/landing/financial/services/01.jpg') }}" class="rounded-3" alt="Image"></a>
              <div class="pt-4">
                <h3 class="h4">Consulting Services</h3>
                <ul class="list-unstyled">
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Ut auctor egestas leo arcu
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Adipiscing velit enim nec id etiam
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Imperdiet quis suspendisse imperdiet
                  </li>
                </ul>
              </div>
              <a href="#" class="btn btn-link px-0">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <a href="#"><img src="{{ asset('public/img/landing/financial/services/02.jpg') }}" class="rounded-3" alt="Image"></a>
              <div class="pt-4">
                <h3 class="h4">Banking Expertise</h3>
                <ul class="list-unstyled">
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Quis euismod lacus, at consectetur porta
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Dictumst enim lectus dis eget non metus cras
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Risus volutpat tellus hendrerit nibh
                  </li>
                </ul>
              </div>
              <a href="#" class="btn btn-link px-0">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <a href="#"><img src="{{ asset('public/img/landing/financial/services/03.jpg') }}" class="rounded-3" alt="Image"></a>
              <div class="pt-4">
                <h3 class="h4">Product Solutions</h3>
                <ul class="list-unstyled">
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Sit scelerisque venenatis, at orci
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Felis nascetur tempus nibh dictum tristique mus
                  </li>
                  <li class="d-flex align-items-center fs-sm mb-2">
                    <i class="bx bx-check fs-xl text-primary me-2"></i>
                    Consectetur neque vestibulum, vel ut fermentum
                  </li>
                </ul>
              </div>
              <a href="#" class="btn btn-link px-0">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative d-lg-none mt-5"></div>
        </div>
      </section>


      <!-- COVID banner -->
      <section class="container">
        <div class="card bg-white border-primary shadow-sm px-4 px-lg-0">
          <div class="row align-items-center py-3">
            <div class="col-xl-5 col-md-6 offset-lg-1 text-center text-md-start py-4 py-lg-5">
              <h2 class="h1">Our Response to COVID-19</h2>
              <h3 class="h4 text-primary">Get remote financial consulting help</h3>
              <p class="mb-4 mb-lg-5">At ultricies id non quisque integer eget velit. Facilisis enim malesuada metus, risus amet ultricies. Magna aliquam id nunc ut eu.</p>
              <a href="#" class="btn btn-primary">Find out more</a>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-6">
              <lottie-player class="mx-auto" src="{{ asset('public/json/animation-financial-landing.json') }}" background="transparent" speed="1" loop autoplay style="max-width: 416px;"></lottie-player>
            </div>
          </div>
        </div>
      </section>


      <!-- Features (Icon boxes) -->
      <section class="container py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 text-center pt-1 pt-xl-3 mb-lg-4">Why Us?</h2>
        <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "800": {
              "slidesPerView": 3
            },
            "1200": {
              "slidesPerView": 4
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card h-100 card-body card-hover mx-2">
                <i class="bx bx-rocket display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                <h3 class="h5 pt-3 pb-1 mb-2">Innovative Solutions</h3>
                <p class="mb-0">Massa enim libero dictumst consectetur in convallis. Lobortis cursus mi a magna ullamcorper consectetur.</p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card h-100 card-body card-hover mx-2">
                <i class="bx bx-like display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                <h3 class="h5 pt-3 pb-1 mb-2">Success Guarantee</h3>
                <p class="mb-0">At ultricies id non quisque integer eget velit. Facilisis enim malesuada metus, risus amet ultricies. Magna aliquam id nunc.</p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card h-100 card-body card-hover mx-2">
                <i class="bx bx-time-five display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                <h3 class="h5 pt-3 pb-1 mb-2">On Time Service</h3>
                <p class="mb-0">Nisi augue at ridiculus odio ullamcorper in id. In bibendum diam nunc dignissim magna morbi mattis enim.</p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card h-100 card-body card-hover mx-2">
                <i class="bx bx-group display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                <h3 class="h5 pt-3 pb-1 mb-2">Professional Team</h3>
                <p class="mb-0">Pellentesque rhoncus viverra vestibulum, purus purus quisque quisque sed. Cras vestibulum facilisis dictumst consequat.</p>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative d-xl-none pt-3 mt-4"></div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-center pt-3 pt-sm-4">
          <a href="#" class="btn btn-primary shadow-primary btn-lg">Request a price</a>
        </div>
      </section>


      <!-- Industries (Slider) -->
      <section class="container pt-xl-3 pb-5">
        <h2 class="h1 text-center text-lg-start pb-4 mb-1 mb-lg-3">Industries We Serve</h2>
        <div class="row pb-2 pb-md-4 pb-lg-5">
          <div class="col-xl-4 col-lg-5 d-flex flex-column order-2 order-lg-1">

            <!-- Swiper slider -->
            <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
              "spaceBetween": 30,
              "loop": true,
              "tabs": true,
              "autoHeight": true,
              "navigation": {
                "prevEl": "#prev-industry",
                "nextEl": "#next-industry"
              }
            }'>
              <div class="swiper-wrapper text-center text-lg-start">

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#industry-1">
                  <h3 class="h4 mb-4">
                    <a href="#" class="nav-link justify-content-center justify-content-lg-start fw-bold p-0">
                      Transportation &amp; Logistics
                      <i class="bx bx-right-arrow-alt text-primary fs-3 fw-normal ms-2 mt-1"></i>
                    </a>
                  </h3>
                  <p>Risus massa fames metus lectus diam maecenas dui. Nibh morbi id purus eget tellus diam, integer blandit. Ac condimentum a nisl sagittis, interdum. Et viverra maecenas quis cras sed gravida volutpat, cursus enim. Enim ut nulla netus porta lacus diam. Et enim ultrices nunc, nunc. In iaculis venenatis at sit.</p>
                </div>

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#industry-2">
                  <h3 class="h4 mb-4">
                    <a href="#" class="nav-link justify-content-center justify-content-lg-start fw-bold p-0">
                      Construction &amp; Real Estate
                      <i class="bx bx-right-arrow-alt text-primary fs-3 fw-normal ms-2 mt-1"></i>
                    </a>
                  </h3>
                  <p>Nunc, amet et, et at habitant. Eget quis justo, metus at metus sapien. Urna quisque rutrum pharetra pulvinar vitae quam blandit non. Orci tempor cursus egestas quis orci at nisi maecenas. Enim in ultrices tortor, nibh quis sollicitudin tellus non maecenas. In libero ut semper nunc magna tortor.</p>
                </div>

                <!-- Item -->
                <div class="swiper-slide" data-swiper-tab="#industry-3">
                  <h3 class="h4 mb-4">
                    <a href="#" class="nav-link justify-content-center justify-content-lg-start fw-bold p-0">
                      Education
                      <i class="bx bx-right-arrow-alt text-primary fs-3 fw-normal ms-2 mt-1"></i>
                    </a>
                  </h3>
                  <p>Vivamus nisl sit volutpat laoreet ligula et. Nunc, duis est justo, cras ipsum vulputate eget tellus augue. Amet, sagittis ut enim nisl commodo, pharetra. Sapien imperdiet tristique interdum aliquet varius vitae facilisis vel. Erat convallis eget elit eget iaculis. Morbi id facilisis ligula odio sed amet suspendisse duis aliquet. Justo quam convallis id sed.</p>
                </div>
              </div>
            </div>

            <!-- Slider controls (Prev / next buttons) -->
            <div class="d-flex justify-content-center justify-content-lg-start mt-2 mt-lg-auto">
              <button type="button" id="prev-industry" class="btn btn-prev btn-icon btn-sm me-2">
                <i class="bx bx-chevron-left"></i>
              </button>
              <button type="button" id="next-industry" class="btn btn-next btn-icon btn-sm ms-2">
                <i class="bx bx-chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="col-lg-7 offset-xl-1 order-1 order-lg-2 pt-lg-3 mt-lg-n5 mb-4 mb-lg-0">

            <!-- Swiper tabs (Industry images) -->
            <div class="swiper-tabs mt-lg-n5">

              <!-- Industry 1 -->
              <div id="industry-1" class="swiper-tab active">
                <img src="{{ asset('public/img/landing/financial/industries/01.jpg') }}" class="rounded-3" alt="Image">
              </div>

              <!-- Industry 2 -->
              <div id="industry-2" class="swiper-tab">
                <img src="{{ asset('public/img/landing/financial/industries/02.jpg') }}" class="rounded-3" alt="Image">
              </div>

              <!-- Industry 3 -->
              <div id="industry-3" class="swiper-tab">
                <img src="{{ asset('public/img/landing/financial/industries/03.jpg') }}" class="rounded-3" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Brands (Carousel) -->
      <section class="container my-n2 my-md-0">
        <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/01.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/02.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/03.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/04.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/05.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="{{ asset('public/img/brands/06.svg') }}" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
      </section>


      <!-- Testimonials -->
      <section class="container py-5 mb-2 mt-md-2 mb-md-4 mt-lg-4 mb-lg-5">
        <div class="row pt-xl-1 pb-xl-3">
          <div class="col-lg-3 col-md-4">
            <h2 class="text-center text-md-start mx-auto mx-md-0 pt-md-2" style="max-width: 300px;">What Our <br class="d-none d-md-inline">Clients Say <br class="d-none d-md-inline">About Us:</h2>

            <!-- Slider controls (Prev / next buttons) -->
            <div class="d-flex justify-content-center justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
              <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2">
                <i class="bx bx-chevron-left"></i>
              </button>
              <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2">
                <i class="bx bx-chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="swiper mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "loop": true,
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "1000": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
              <div class="swiper-wrapper">
  
                <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                      <img src="{{ asset('public/img/avatar/03.jpg') }}" width="48" class="rounded-circle" alt="Fannie Summers">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Fannie Summers</h6>
                        <span class="fs-xs text-muted">Medical Center patient</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
  
                <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Phasellus luctus nisi id orci condimentum, at cursus nisl vestibulum. Orci varius natoque penatibus et magnis dis parturient montes commodo.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                      <img src="{{ asset('public/img/avatar/02.jpg') }}" width="48" class="rounded-circle" alt="Robert Fox">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                        <span class="fs-xs text-muted">Medical Center patient</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
  
                <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum odio, bibendum ornare mi at, efficitur urna.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                      <img src="{{ asset('public/img/avatar/06.jpg') }}" width="48" class="rounded-circle" alt="Annette Black">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                        <span class="fs-xs text-muted">Medical Center patient</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
  
                <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Etiam augue ante, imperdiet et nunc sed, bibendum faucibus est. Suspendisse egestas facilisis erat eu eleifend.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                      <img src="{{ asset('public/img/avatar/05.jpg') }}" width="48" class="rounded-circle" alt="Jerome Bell">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                        <span class="fs-xs text-muted">Medical Center patient</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
  
                <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Pellentesque finibus congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                      <img src="{{ asset('public/img/avatar/01.jpg') }}" width="48" class="rounded-circle" alt="Albert Flores">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Albert Flores</h6>
                        <span class="fs-xs text-muted">Medical Center patient</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Latest news (Carousel) -->
      <section class="bg-secondary py-5">
        <div class="container py-2 py-md-4 py-lg-5">
          <h2 class="h1 text-center pb-4 mb-1 mb-lg-3">Latest News</h2>
          <div class="position-relative px-xl-5">
          
            <!-- Slider prev/next buttons -->
            <button type="button" id="prev-news" class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y d-none d-xl-inline-flex">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-news" class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y d-none d-xl-inline-flex">
              <i class="bx bx-chevron-right"></i>
            </button>
  
            <!-- Slider -->
            <div class="px-xl-2">
              <div class="swiper mx-n2" data-swiper-options='{
                "slidesPerView": 1,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#prev-news",
                  "nextEl": "#next-news"
                },
                "breakpoints": {
                  "500": {
                    "slidesPerView": 2
                  },
                  "1000": {
                    "slidesPerView": 3
                  }
                }
              }'>
                <div class="swiper-wrapper">
      
                  <!-- Item -->
                  <div class="swiper-slide h-auto pb-3">
                    <article class="card h-100 border-0 shadow-sm mx-2">
                      <div class="position-relative">
                        <a href="#" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ asset('public/img/landing/financial/news/01.jpg') }}" class="card-img-top" alt="Image">
                      </div>
                      <div class="card-body pb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Business</a>
                          <span class="fs-sm text-muted">12 hours ago</span>
                        </div>
                        <h3 class="h5 mb-0">
                          <a href="#">How agile is your forecasting process?</a>
                        </h3>
                      </div>
                      <div class="card-footer py-4">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                          <img src="{{ asset('public/img/avatar/40.jpg') }}" class="rounded-circle" width="48" alt="Avatar">
                          <div class="ps-3">
                            <h6 class="fs-base fw-semibold mb-0">Marvin McKinney</h6>
                            <span class="fs-sm text-muted">Deputy Director, Capital Department</span>
                          </div>
                        </a>
                      </div>
                    </article>
                  </div>
      
                  <!-- Item -->
                  <div class="swiper-slide h-auto pb-3">
                    <article class="card h-100 border-0 shadow-sm mx-2">
                      <div class="position-relative">
                        <a href="#" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ asset('public/img/landing/financial/news/02.jpg') }}" class="card-img-top" alt="Image">
                      </div>
                      <div class="card-body pb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Enterprise</a>
                          <span class="fs-sm text-muted">1 day ago</span>
                        </div>
                        <h3 class="h5 mb-0">
                          <a href="#">A future with high public debt: low-for-long is not low forever</a>
                        </h3>
                      </div>
                      <div class="card-footer py-4">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                          <img src="{{ asset('public/img/avatar/04.jpg') }}" class="rounded-circle" width="48" alt="Avatar">
                          <div class="ps-3">
                            <h6 class="fs-base fw-semibold mb-0">Jenny Wilson</h6>
                            <span class="fs-sm text-muted">Financial Sector Expert</span>
                          </div>
                        </a>
                      </div>
                    </article>
                  </div>
      
                  <!-- Item -->
                  <div class="swiper-slide h-auto pb-3">
                    <article class="card h-100 border-0 shadow-sm mx-2">
                      <div class="position-relative">
                        <a href="#" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ asset('public/img/landing/financial/news/03.jpg') }}" class="card-img-top" alt="Image">
                      </div>
                      <div class="card-body pb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Finance</a>
                          <span class="fs-sm text-muted">Nov 24, 2021</span>
                        </div>
                        <h3 class="h5 mb-0">
                          <a href="#">Understanding the rise in long-term rates</a>
                        </h3>
                      </div>
                      <div class="card-footer py-4">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                          <img src="{{ asset('public/img/avatar/05.jpg') }}" class="rounded-circle" width="48" alt="Avatar">
                          <div class="ps-3">
                            <h6 class="fs-base fw-semibold mb-0">Albert Flores</h6>
                            <span class="fs-sm text-muted">Financial Counsellor and Director</span>
                          </div>
                        </a>
                      </div>
                    </article>
                  </div>
      
                  <!-- Item -->
                  <div class="swiper-slide h-auto pb-3">
                    <article class="card h-100 border-0 shadow-sm mx-2">
                      <div class="position-relative">
                        <a href="#" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ asset('public/img/landing/financial/news/04.jpg') }}" class="card-img-top" alt="Image">
                      </div>
                      <div class="card-body pb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Ticks &amp; Trips</a>
                          <span class="fs-sm text-muted">Oct 13, 2021</span>
                        </div>
                        <h3 class="h5 mb-0">
                          <a href="#">Stocks making the biggest moves after hours</a>
                        </h3>
                      </div>
                      <div class="card-footer py-4">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                          <img src="{{ asset('public/img/avatar/41.jpg') }}" class="rounded-circle" width="48" alt="Avatar">
                          <div class="ps-3">
                            <h6 class="fs-base fw-semibold mb-0">Jerome Bell</h6>
                            <span class="fs-sm text-muted">Business Analyst</span>
                          </div>
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
      
                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-4 mb-lg-2"></div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact form -->
      <section class="position-relative py-5">
        <div class="container position-relative zindex-5 py-2 py-md-4 py-lg-5">
          <div class="row justify-content-center text-center pt-xl-2 pb-4 mb-1 mb-lg-3">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-11">
              <h2 class="mb-4">Let's Change the Game Together</h2>
              <p class="text-muted mb-0">Like what you have seen? Let’s get started. Just fill in a few details and we will get in touch as soon as possible.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <form class="row needs-validation" novalidate>
                <div class="col-sm-6 mb-4">
                  <label for="fn" class="form-label">First name</label>
                  <input type="text" id="fn" class="form-control" required>
                  <div class="invalid-feedback">Please, enter your first name!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="ln" class="form-label">Last name</label>
                  <input type="text" id="ln" class="form-control" required>
                  <div class="invalid-feedback">Please, enter your last name!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" id="email" class="form-control" required>
                  <div class="invalid-feedback">Please, provide a valid email address!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" id="phone" class="form-control" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="city" class="form-label">City</label>
                  <select id="city" class="form-select" required>
                    <option value="" disabled selected>Choose city</option>
                    <option value="Boston">Boston</option>
                    <option value="Chicago">Chicago</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Miami">Miami</option>
                    <option value="New York">New York</option>
                    <option value="Philadelphia">Philadelphia</option>
                  </select>
                  <div class="invalid-feedback">Please, choose your city!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="company" class="form-label">Your company</label>
                  <input type="text" id="company" class="form-control">
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="position" class="form-label">Your position</label>
                  <select id="position" class="form-select">
                    <option value="Owner">Owner</option>
                    <option value="CEO">CEO</option>
                    <option value="Manager">Manager</option>
                    <option value="Accountant">Accountant</option>
                  </select>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="people" class="form-label">People in company</label>
                  <select id="people" class="form-select">
                    <option value="0-10">0-10</option>
                    <option value="10-25">10-25</option>
                    <option value="25-50">25-50</option>
                    <option value="50-100">50-100</option>
                  </select>
                </div>
                <div class="col-12 mb-4">
                  <label for="message" class="form-label">Message</label>
                  <textarea id="message" class="form-control" rows="4" required></textarea>
                  <div class="invalid-feedback">Please, enter your message!</div>
                </div>
                <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                  <button type="submit" class="btn btn-primary shadow-primary btn-lg">Send a request</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- BG shape -->
        <div class="position-absolute end-0 bottom-0 text-primary">
          <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
        </div>
      </section>
    </main>

@include('components/footer')
    