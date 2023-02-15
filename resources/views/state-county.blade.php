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
                        <img src="{{ asset("uploads/images/$state->image") }}" usemap="#usmap" class="img-fluid rounded mx-auto d-block" alt="united-state-map" >
                        <a class="btn btn-default" type="button" data-toggle="modal" data-target="#stateModel">
                            <!-- <img class="img-fluid rounded" src="{{ asset('img/united-states-map-transparent.png') }}" width="100%" alt="united-state-map" title="United State Map"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <!-- <img src="https://via.placeholder.com/250x800?text=Banner+Ads"> -->
                </div>
            </div>

            <map name="usmap">
                @foreach ($counties as $county)
                    <area alt="{{ $county->name }}" title="{{ $county->name }}" shape="{{ $county->shape }}" coords="{{ $county->coords }}" href="{{ route('feeds') }}" />
                @endforeach
            </map>

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
