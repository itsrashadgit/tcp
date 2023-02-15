@extends("layouts.master")


@section("content")
    <!-- Content Main -->
    <section class="position-relative py-1">
        <div class="container position-relative zindex-5 py-1 py-md-2 py-lg-2">
            <!-- <div class="row justify-content-center text-center pt-xl-2 pb-4 mb-1 mb-lg-3">
                <div class="col-lg-2 col-md-2">
                    <img src="https://via.placeholder.com/250x250?text=Intro+Video+Professionals">
                </div>
                <div class="col-lg-8 col-md-8">
                    <h1 class="mb-4">The Construction Platform</h1>
                    <p class="text-muted mb-0"><button class="btn btn-default" type="button" data-toggle="modal" data-target="#stateModel"><i class="bx bx-map fs-8 me-2"></i><span>All of United State</span></button></p>
                    <form data-testid="search-bar-v2" class="form-inline">
                        <div class="input-group">
                            <input name="query" type="search" autocomplete="off" aria-label="Search Input" class="form-control" placeholder="What are you looking for?">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="bx bx-search fs-3"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2">
                    <img src="https://via.placeholder.com/250x250?text=Intro+Video+Students">
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2">
                    <!-- <img src="https://via.placeholder.com/250x800?text=Banner+Ads"> -->
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="usa-map">
                        <img src="{{ asset('assets/img/map/usa.gif') }}" usemap="#usmap" class="img-fluid rounded mx-auto d-block" alt="united-state-map" width="100%" >
                    </div>
                    <map name="usmap">
                        <area alt="dc" title="District of Columbia" shape="rect" coords="499,187,531,204" href="{{ route('state.counties','dc') }}" />
                        <area alt="md" title="Maryland" shape="rect" coords="510,163,539,183" href="{{ route('state.counties','md') }}" />
                        <area alt="de" title="Delaware" shape="rect" coords="512,145,543,158" href="{{ route('state.counties','de') }}" />
                        <area alt="nj" title="New Jersey" shape="rect" coords="500,127,527,144" href="{{ route('state.counties','nj') }}" />
                        <area alt="ct" title="Connecticut" shape="rect" coords="529,121,552,139" href="{{ route('state.counties','ct') }}" />
                        <area alt="ri" title="Rhode Island" shape="rect" coords="537,103,559,120" href="{{ route('state.counties','ri') }}" />
                        <area alt="ma" title="Massachusetts" shape="circle" coords="544,81,14" href="{{ route('state.counties','ma') }}" />
                        <area alt="nh" title="New Hampshire" shape="circle" coords="488,34,14" href="{{ route('state.counties','nh') }}" />
                        <area alt="vt" title="Vermont" shape="circle" coords="454,48,13" href="{{ route('state.counties','vt') }}" />
                        <area alt="tn" title="Tennessee" shape="circle" coords="371,207,16" href="{{ route('state.counties','tn') }}" />
                        <area alt="or" title="Oregon" shape="circle" coords="52,78,16" href="{{ route('state.counties','or') }}" />
                        <area alt="ca" title="California" shape="circle" coords="39,173,16" href="{{ route('state.counties','ca') }}" />
                        <area alt="nv" title="Nevada" shape="circle" coords="81,135,16" href="{{ route('state.counties','nv') }}" />
                        <area alt="id" title="Idaho" shape="circle" coords="111,93,16" href="{{ route('state.counties','id') }}" />
                        <area alt="mt" title="Montana" shape="circle" coords="156,57,16" href="{{ route('state.counties','mt') }}" />
                        <area alt="wy" title="Wyoming" shape="circle" coords="178,111,16" href="{{ route('state.counties','wy') }}" />
                        <area alt="ut" title="Utah" shape="circle" coords="125,155,16" href="{{ route('state.counties','ut') }}" />
                        <area alt="az" title="Arizona" shape="circle" coords="114,217,16" href="{{ route('state.counties','az') }}" />
                        <area alt="ky" title="Kentucky" shape="circle" coords="394,181,16" href="{{ route('state.counties','ky') }}" />
                        <area alt="co" title="Colorado" shape="circle" coords="185,164,16" href="{{ route('state.counties','co') }}" />
                        <area alt="nm" title="New Mexico" shape="circle" coords="174,222,16" href="{{ route('state.counties','nm') }}" />
                        <area alt="nd" title="North Dakota" shape="circle" coords="241,60,16" href="{{ route('state.counties','nd') }}" />
                        <area alt="sd" title="South Dakota" shape="circle" coords="237,98,16" href="{{ route('state.counties','sd') }}" />
                        <area alt="ne" title="Nebraska" shape="circle" coords="244,136,16" href="{{ route('state.counties','ne') }}" />
                        <area alt="ks" title="Kansas" shape="circle" coords="254,174,16" href="{{ route('state.counties','ks') }}" />
                        <area alt="ok" title="Oklahoma" shape="circle" coords="265,213,16" href="{{ route('state.counties','ok') }}" />
                        <area alt="tx" title="Texas" shape="circle" coords="242,260,16" href="{{ route('state.counties','tx') }}" />
                        <area alt="mn" title="Minnesota" shape="circle" coords="293,71,16" href="{{ route('state.counties','mn') }}" />
                        <area alt="ia" title="Iowa" shape="circle" coords="304,130,16" href="{{ route('state.counties','ia') }}" />
                        <area alt="mo" title="Missouri" shape="circle" coords="313,177,16" href="{{ route('state.counties','mo') }}" />
                        <area alt="ar" title="Arkansas" shape="circle" coords="316,221,16" href="{{ route('state.counties','ar') }}" />
                        <area alt="la" title="Louisiana" shape="circle" coords="319,262,16" href="{{ route('state.counties','la') }}" />
                        <area alt="mi" title="Michigan" shape="circle" coords="386,114,16" href="{{ route('state.counties','mi') }}" />
                        <area alt="ms" title="Mississippi" shape="circle" coords="349,242,16" href="{{ route('state.counties','ms') }}" />
                        <area alt="wi" title="Wisconsin" shape="circle" coords="334,93,16" href="{{ route('state.counties','wi') }}" />
                        <area alt="il" title="Illinois" shape="circle" coords="341,153,16" href="{{ route('state.counties','il') }}" />
                        <area alt="in" title="Indiana" shape="circle" coords="376,153,16" href="{{ route('state.counties','in') }}" />
                        <area alt="oh" title="Ohio" shape="circle" coords="407,142,16" href="{{ route('state.counties','oh') }}" />
                        <area alt="wv" title="West Virginia" shape="circle" coords="429,164,15" href="{{ route('state.counties','wv') }}" />
                        <area alt="al" title="Alabama" shape="circle" coords="380,239,16" href="{{ route('state.counties','al') }}" />
                        <area alt="ga" title="Georgia" shape="circle" coords="414,239,16" href="{{ route('state.counties','ga') }}" />
                        <area alt="sc" title="South Carolina" shape="circle" coords="441,225,16" href="{{ route('state.counties','sc') }}" />
                        <area alt="fl" title="Florida" shape="circle" coords="445,300,16" href="{{ route('state.counties','fl') }}" />
                        <area alt="va" title="Virginia" shape="circle" coords="455,171,14" href="{{ route('state.counties','va') }}" />
                        <area alt="pa" title="Pennsylvania" shape="circle" coords="454,128,16" href="{{ route('state.counties','pa') }}" />
                        <area alt="ny" title="New York" shape="circle" coords="474,95,16" href="{{ route('state.counties','ny') }}" />
                        <area alt="me" title="Maine" shape="circle" coords="521,55,16" href="{{ route('state.counties','me') }}" />
                        <area alt="nc" title="North Carolina" shape="circle" coords="461,198,14" href="{{ route('state.counties','nc') }}" />
                        <area alt="wa" title="Washington" shape="circle" coords="70,33,16" href="{{ route('state.counties','wa') }}" />
                        <area alt="ak" title="Alaska" shape="circle" coords="121,306,16" href="{{ route('state.counties','ak') }}" />
                        <area alt="hi" title="Hawaii" shape="circle" coords="342,344,16" href="{{ route('state.counties','hi') }}" />
                    </map>
                </div>
                <div class="col-lg-2 col-md-2">
                    <!-- <img src="https://via.placeholder.com/250x800?text=Banner+Ads"> -->
                </div>
            </div>

            <!-- BG shape -->
            <div class="position-absolute end-0 bottom-0 text-primary">
                <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
            </div>
        </div>
    </section>


<!-- State Modal -->
<div class="modal fade" id="stateModel" tabindex="-1" role="dialog" aria-labelledby="stateModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="stateModelLabel">All of United States</h4>
                <button class="btn btn-default" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x fs-2"></i>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $states = DB::select('select * from states');
                //return view('stud_view',['states'=>$states]);
                ?>
                @foreach ($states as $state)
                <ul class="list-group" data-testid="state-list">
                    <li class="list-group-item list-group-item-action state-id-{{ $state->id }}" value="{{ $state->code }}" >
                        <a class="btn btn-default" href="{{ strtolower($state->code) }}">{{ $state->name }}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
@endsection
