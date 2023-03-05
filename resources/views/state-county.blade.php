@extends("layouts.app")

@section("content")

<!-- Content Main -->
<section class="position-relative py-1 bg-white">
    <div class="container-fluid position-relative zindex-5 py-1 py-md-2 py-lg-2">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3">
                <?php $states = DB::select('select * from states'); //return view('stud_view',['states'=>$states]); ?>
                @foreach ($states as $state)
                <ul class="list-group" data-testid="state-list">
                    <li class="list-group-item list-group-item-action state-id-{{ $state->id }}" value="{{ $state->code }}" >
                        <a class="btn btn-default" href="{{ strtolower($state->code) }}">{{ $state->name }}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="col-lg-9 col-md-9 ps-md-0">
                {{-- <div class="container position-relative zindex-5 py-1 py-md-2 py-lg-2">
                    <div class="row justify-content-center">
                        <!-- slider main container -->
                        <div id="tcpSwiper" class="swiper-container">
                            <!-- additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- slides -->
                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=502" alt="">
                                        <h2 class="product__name">Lorem ipsum 1</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=401" alt="">
                                        <h2 class="product__name">Lorem ipsum 2</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=201" alt="">
                                        <h2 class="product__name">Lorem ipsum 3</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=504" alt="">
                                        <h2 class="product__name">Lorem ipsum 4</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=404" alt="">
                                        <h2 class="product__name">Lorem ipsum 5</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=406" alt="">
                                        <h2 class="product__name">Lorem ipsum 6</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product">
                                        <img class="photograph" src="https://unsplash.it/g/200/300?image=407" alt="">
                                        <h2 class="product__name">Lorem ipsum 7</h2>
                                        <p class="product__description">lorem ipsum dol</p>
                                    </div>
                                </div>
                            </div>

                            <!-- pagination -->
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- navigation buttons -->
                        <div id="tcpPrev" class="swiper-button-prev"></div>
                        <div id="tcpNext" class="swiper-button-next"></div>
                    </div>
                </div> --}}
                <div class="tabs7">
                    <ul class="nav m-0">
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('trade.list', 'tradesmen') }}">Tradesmen</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('trade.list', 'contractors') }}">Contractors</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('message.board', 'architects_engineers') }}">Architects/Engineers</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('message.board', 'organization_associations') }}">Organizations/Associations</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('message.board', 'schools_education') }}">Schools/Education</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('message.board', 'facility_property_mgmt') }}">Facility/Property Mgmt</a></li>
                        <li class="nav-item"><a class="nav-link bg-white" style="font-size: 14px; padding: 10px 12px" href="{{ route('message.board', 'vendors') }}">Vendors</a></li>
                    </ul>
                </div>

                @if (count($counties) > 0)
                    <div class="usamap">
                        <img src="{{ asset('assets/img/states/new-jersey.jpg') }}" usemap="#newjersey" class="mx-auto d-block" alt="united-state-map" style="width: 1200px; max-width: 100%; height: auto;" alt="new-jersey" />
                        <map name="newjersey">
                            @foreach ($counties as $county)
                                <area target="" alt="{{ $county->slug }}" title="{{ $county->name }}" href="{{ route('feeds', ['state' => strtolower($county->state->code), 'county' => $county->slug]) }}" coords="{{ $county->coords }}" shape="{{ $county->shape }}">
                            @endforeach
                        </map>
                    </div>
                @else
                    <img src="{{ asset("images/under-construction.png") }}" alt="">
                @endif

            </div>
        </div>

        <!-- BG shape -->
        <div class="position-absolute end-0 bottom-0 text-primary">
            <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
        </div>
    </div>
</section>
@endsection
