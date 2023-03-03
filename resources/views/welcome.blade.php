@extends("layouts.app")

@section("content")
    <!-- Content Main -->
    <section class="position-relative py-1 bg-white">
        <div class="container position-relative zindex-5 py-1 py-md-2 py-lg-2">
            <div class="row justify-content-center">
                <div class="text-center">
                    <a href="{{ route('welcome') }}" class="logo-link" rel="home">
                        <img class="site-img-logo" src="{{ asset('assets/img/logo.png') }}"
                            alt="the-construction-platform"
                            title="The Construction Platform" width="180"/>
                    </a>
                    <p>Revolutionizing The Industry, Where All Business Gets Done</p>
                </div>
                {{-- <h1 class="mb-4 text-center">The Construction Platform</h1> --}}
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="usamap">
                        <img src="{{ asset('assets/img/usa.jpg') }}" usemap="#usamap" class="img-fluid mx-auto d-block" />
                        <map name="usamap">
                            <area target="" alt="Washington" title="Washington" href="{{ route('state.counties','wa') }}" coords="78,34,165,91" shape="rect">
                            <area target="" alt="Oregon" title="Oregon" href="{{ route('state.counties','or') }}" coords="95,143,44" shape="circle">
                            <area target="" alt="California" title="California" href="{{ route('state.counties','ca') }}" coords="82,396,46,375,49,355,31,321,38,305,32,294,42,267,50,227,80,271,97,303,114,338,143,377,155,407,132,431" shape="poly">
                            <area target="" alt="Alaska" title="Alaska" href="{{ route('state.counties','ak') }}" coords="78,595,98,588,108,547,163,552,193,584,195,627,194,663,141,655,112,687,68,650,83,634,97,614" shape="poly">
                            <area target="" alt="Montana" title="Montana" href="{{ route('state.counties','mt') }}" coords="213,46,303,63,399,75,392,155,277,143,249,157,227,116" shape="poly">
                            <area target="" alt="Idaho" title="Idaho" href="{{ route('state.counties','id') }}" coords="193,43,157,201,255,221,263,172,234,174,212,135,208,100,195,75" shape="poly">
                            <area target="" alt="Nevada" title="Nevada" href="{{ route('state.counties','nv') }}" coords="106,201,201,224,174,353,158,369,90,262" shape="poly">
                            <area target="" alt="Wyoming" title="Wyoming" href="{{ route('state.counties','wy') }}" coords="283,160,395,169,388,261,265,245" shape="poly">
                            <area target="" alt="Utah" title="Utah" href="{{ route('state.counties','ut') }}" coords="211,225,254,234,254,258,293,262,283,352,192,338" shape="poly">
                            <area target="" alt="Colorado" title="Colorado" href="{{ route('state.counties','co') }}" coords="305,264,295,355,406,367,422,368,425,277" shape="poly">
                            <area target="" alt="Arizona" title="Arizona" href="{{ route('state.counties','az') }}" coords="261,497,267,446,273,399,279,365,189,351,184,373,170,378,167,395,173,414,156,445,193,476" shape="poly">
                            <area target="" alt="New Mexico" title="New Mexico" href="{{ route('state.counties','nm') }}" coords="293,366,328,368,374,376,400,379,401,437,395,498,319,491,288,494,275,496" shape="poly">
                            <area target="" alt="North Dakota" title="North Dakota" href="{{ route('state.counties','nd') }}" coords="414,76,465,79,518,82,519,98,526,115,527,146,407,141" shape="poly">
                            <area target="" alt="South Dakota" title="South Dakota" href="{{ route('state.counties','sd') }}" coords="407,151,528,155,528,170,535,179,533,209,533,231,522,220,510,225,479,219,403,218" shape="poly">
                            <area target="" alt="Nebraska" title="Nebraska" href="{{ route('state.counties','ne') }}" coords="404,228,400,262,435,268,436,294,501,294,555,296,546,281,540,247,517,235,496,230,474,230,451,226" shape="poly">
                            <area target="" alt="Kansas" title="Kansas" href="{{ route('state.counties','ks') }}" coords="432,368,435,304,499,303,564,307,573,323,576,343,573,375" shape="poly">
                            <area target="" alt="Oklahoma" title="Oklahoma" href="{{ route('state.counties','ok') }}" coords="572,383,511,382,471,378,435,378,412,378,413,386,470,387,473,442,508,455,542,460,567,453,576,459" shape="poly">
                            <area target="" alt="Texas" title="Texas" href="{{ route('state.counties','tx') }}" coords="328,503,404,507,411,431,411,396,463,394,463,446,501,467,544,471,565,467,584,475,587,509,601,538,589,558,567,563,569,576,554,586,536,586,533,599,510,623,512,660,486,650,463,613,449,578,436,564,404,556,394,557,388,572,364,554,355,532" shape="poly">
                            <area target="" alt="Hawaii" title="Hawaii" href="{{ route('state.counties','hi') }}" coords="357,666,64" shape="circle">
                            <area target="" alt="Minnesota" title="Minnesota" href="{{ route('state.counties','mn') }}" coords="527,79,559,80,564,74,569,86,585,92,597,88,617,97,636,99,616,117,604,141,596,154,601,174,599,190,617,196,631,211,541,209,542,171,538,159,536,109,528,94" shape="poly">
                            <area target="" alt="Iowa" title="Iowa" href="{{ route('state.counties','ia') }}" coords="541,218,631,220,635,230,642,234,653,249,633,265,636,287,625,276,617,285,593,285,554,283,549,246,543,238" shape="poly">
                            <area target="" alt="Missouri" title="Missouri" href="{{ route('state.counties','mo') }}" coords="562,292,602,294,627,289,634,298,637,314,658,333,663,347,678,363,685,380,674,401,673,387,583,388,585,322,576,306" shape="poly">
                            <area target="" alt="Arkansas" title="Arkansas" href="{{ route('state.counties','ar') }}" coords="583,398,666,394,663,406,677,411,667,420,659,432,663,444,650,454,651,478,617,479,595,478,594,466,585,464" shape="poly">
                            <area target="" alt="Louisiana" title="Louisiana" href="{{ route('state.counties','la') }}" coords="596,488,615,488,652,486,655,503,643,528,647,540,684,539,688,545,671,549,686,562,698,558,692,567,700,576,682,568,670,572,656,567,653,559,619,564,613,554,601,560,609,543,605,522,598,508" shape="poly">
                            <area target="" alt="Wisconsin" title="Wisconsin" href="{{ route('state.counties','wi') }}" coords="616,134,634,129,653,141,675,145,689,156,691,175,699,177,694,186,695,196,695,228,648,228,638,224,643,216,638,211,636,200,630,195,622,188,610,184,609,168,604,155" shape="poly">
                            <area target="" alt="Illinois" title="Illinois" href="{{ route('state.counties','il') }}" coords="653,237,696,237,706,255,707,297,711,311,704,321,707,333,704,343,713,347,705,350,692,371,684,354,670,345,670,326,655,321,646,308,643,292,644,267,662,255" shape="poly">
                            <area target="" alt="Michigan" title="Michigan" href="{{ route('state.counties','mi') }}" coords="728,242,760,244,778,238,793,209,786,191,781,197,775,203,764,194,772,176,767,157,752,151,740,167,728,179,721,197,734,232" shape="poly">
                            <area target="" alt="Indiana" title="Indiana" href="{{ route('state.counties','in') }}" coords="713,259,721,254,726,249,755,251,760,283,765,294,766,313,751,328,743,340,736,338,721,347,717,339,715,330,718,302" shape="poly">
                            <area target="" alt="Ohio" title="Ohio" href="{{ route('state.counties','oh') }}" coords="761,252,777,250,797,250,808,253,824,242,837,238,846,283,836,298,823,306,818,321,809,316,795,322,779,314,772,306,773,296" shape="poly">
                            <area target="" alt="Kentucky" title="Kentucky" href="{{ route('state.counties','ky') }}" coords="799,373,824,352,815,329,808,326,800,330,783,325,771,321,756,334,751,345,737,348,718,355,700,371,691,383,700,390,713,381,737,380" shape="poly">
                            <area target="" alt="Tennessee" title="Tennessee" href="{{ route('state.counties','tn') }}" coords="687,393,702,394,715,388,746,388,767,384,787,381,807,379,836,374,816,388,796,402,791,417,726,423,676,425,683,415,683,403" shape="poly">
                            <area target="" alt="Mississippi" title="Mississippi" href="{{ route('state.counties','ms') }}" coords="712,432,712,485,713,520,716,536,694,540,689,531,652,531,651,524,658,509,666,506,660,484,660,458,671,443,669,434,679,431" shape="poly">
                            <area target="" alt="Alabama" title="Alabama" href="{{ route('state.counties','al') }}" coords="720,430,766,427,783,486,780,505,786,510,785,520,789,524,733,522,734,538,731,530,722,539,719,526" shape="poly">
                            <area target="" alt="Georgia" title="Georgia" href="{{ route('state.counties','ga') }}" coords="773,425,795,423,811,420,812,428,822,433,834,449,847,454,867,480,877,481,870,487,866,502,865,512,853,512,852,530,819,533,796,528,791,519,794,506,787,498,791,488" shape="poly">
                            <area target="" alt="Florida" title="Florida" href="{{ route('state.counties','fl') }}" coords="739,530,741,539,748,539,758,534,773,541,793,545,802,539,852,562,853,582,860,589,863,609,876,613,882,630,902,647,910,651,917,628,916,609,905,591,873,533,868,521,859,518,858,535,815,539,793,535,788,530" shape="poly">
                            <area target="" alt="South Carolina" title="South Carolina" href="{{ route('state.counties','sc') }}" coords="817,422,824,418,832,414,851,415,859,411,872,418,891,417,911,430,906,445,899,452,897,460,885,466,878,469,879,476,870,474,866,467,848,445,839,444" shape="poly">
                            <area target="" alt="North Carolina" title="North Carolina" href="{{ route('state.counties','nc') }}" coords="918,423,926,420,932,403,953,394,945,387,944,377,954,377,966,369,962,361,953,370,945,369,948,359,960,352,919,363,901,369,888,369,849,373,823,395,799,413,821,412,828,406,862,406,876,411,898,409,905,417" shape="poly">
                            <area target="" alt="Virginia" title="Virginia" href="{{ route('state.counties','va') }}" coords="954,347,931,350,907,356,897,361,884,362,862,363,839,368,817,371,831,358,852,358,869,341,873,323,887,318,901,289,912,297,922,300,921,313,940,329,924,333,935,338" shape="poly">
                            <area target="" alt="West Virginia" title="West Virginia" href="{{ route('state.counties','wv') }}" coords="831,350,846,350,856,344,862,333,872,310,882,307,895,289,875,297,868,289,853,288,839,305,829,312,825,325" shape="poly">
                            <area target="" alt="Pennsylvania" title="Pennsylvania" href="{{ route('state.counties','pa') }}" coords="846,233,853,226,857,233,905,224,934,219,947,230,943,255,952,263,934,268,906,272,877,280,853,282" shape="poly">
                            <area target="" alt="New York" title="New York" href="{{ route('state.counties','ny') }}" coords="866,198,871,212,857,222,862,226,885,220,904,216,936,210,951,225,965,230,967,185,952,160,953,140,941,140,925,146,915,160,915,181,899,192" shape="poly">
                            <area target="" alt="Vermont" title="Vermont" href="{{ route('state.counties','vt') }}" coords="930,91,960,137,960,162,972,181,982,181,980,163,978,147,984,140,982,127,969,70" shape="poly">
                            <area target="" alt="Maine" title="Maine" href="{{ route('state.counties','me') }}" coords="1011,157,997,124,1003,89,999,80,1006,72,1009,57,1018,63,1029,56,1036,75,1040,97,1050,103,1062,114,1045,121,1033,126,1031,137,1021,151" shape="poly">
                            <area target="" alt="New Hampshire" title="New Hampshire" href="{{ route('state.counties','nh') }}" coords="1066,141,1033,148,1016,166,1009,167,989,123,989,147,987,166,989,181,1009,178,1035,169,1074,170,1074,151" shape="poly">
                            <area target="" alt="Massachusetts" title="Massachusetts" href="{{ route('state.counties','ma') }}" coords="1067,175,1034,173,1019,178,1010,186,993,188,975,190,973,211,980,200,992,200,1001,197,1012,199,1020,206,1036,203,1068,207" shape="poly">
                            <area target="" alt="Rhode Island" title="Rhode Island" href="{{ route('state.counties','ri') }}" coords="1053,221,1031,211,1019,212,1010,205,1004,201,1005,214,1012,227,1025,241,1045,240" shape="poly">
                            <area target="" alt="Connecticut" title="Connecticut" href="{{ route('state.counties','ct') }}" coords="1018,243,1008,229,999,214,998,201,995,208,984,207,974,216,972,229,982,237,983,248,1008,248" shape="poly">
                            <area target="" alt="New Jersey" title="New Jersey" href="{{ route('state.counties','nj') }}" coords="1020,255,994,252,978,254,969,252,965,239,953,233,950,252,960,257,953,273,955,281,962,281,967,272,1018,275" shape="poly">
                            <area target="" alt="Delaware" title="Delaware" href="{{ route('state.counties','de') }}" coords="1018,284,976,280,968,287,951,286,946,271,942,273,950,301,961,301,1014,303" shape="poly">
                            <area target="" alt="Maryland" title="Maryland" href="{{ route('state.counties','md') }}" coords="937,320,928,313,927,295,923,287,914,290,902,283,879,291,877,285,893,283,918,277,933,275,939,279,946,297,950,306,962,308,1010,307,1009,331,957,332,952,314,942,307,934,283,933,305" shape="poly">
                        </map>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                </div>
            </div>

            <!-- BG shape -->
            <div class="position-absolute end-0 bottom-0 text-primary">
                <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
            </div>
        </div>
    </section>

    <!-- Photos Slider -->
    <section class="position-relative py-1 bg-white">
        <div class="container position-relative zindex-5 py-1 py-md-2 py-lg-2">
            <h3 class="text-center my-3">Platform Tour To Maximize<br/> Your Site Use And Experience</h3>
            <div class="d-flex align-items-center gap-2">
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="photograph img-fluid" style="border-radius: 10px" src="https://unsplash.it/g/200/300?image=502" alt="">
                    </a>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div id="tcpSwiper" class="swiper-container">
                    <div class="swiper-wrapper">
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
                    <div class="swiper-pagination"></div>
                </div>
                <div id="tcpPrev" class="swiper-button-prev"></div>
                <div id="tcpNext" class="swiper-button-next"></div>
            </div> --}}
        </div>
    </section>
@endsection
