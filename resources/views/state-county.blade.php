@extends("layouts.app")

@section("content")

<!-- Content Main -->
<section class="position-relative py-1">
    <div class="container position-relative zindex-5 py-1 py-md-2 py-lg-2">
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
            <div class="col-lg-9 col-md-9">
                <div class="usamap">
                    <img src="{{ asset('assets/img/states/new-jersey.jpg') }}" usemap="#newjersey" class="mx-auto d-block" alt="united-state-map" style="width: 1200px; max-width: 100%; height: auto;" alt="new-jersey" />
                    <map name="newjersey">
                        @foreach ($counties as $county)
                            <area target="" alt="{{ $county->name }}" title="{{ $county->name }}" href="{{ route("feeds", ["state" => strtolower($county->state->code), 'county' => $county->slug]) }}" coords="607,192,107" shape="circle">
                        @endforeach
                        {{-- <area target="" alt="sussex" title="Sussex" href="{{ route('feeds') }}" coords="607,192,107" shape="circle">
                        <area target="" alt="passaic" title="Passaic" href="{{ route('feeds') }}" coords="808,229,60" shape="circle">
                        <area target="" alt="bergen" title="Bergen" href="{{ route('feeds') }}" coords="1011,344,63" shape="circle">
                        <area target="" alt="warren" title="Warren" href="{{ route('feeds') }}" coords="462,379,78" shape="circle">
                        <area target="" alt="morris" title="Morris" href="{{ route('feeds') }}" coords="721,405,97" shape="circle">
                        <area target="" alt="essex" title="Essex" href="{{ route('feeds') }}" coords="875,476,56" shape="circle">
                        <area target="" alt="hunterdon" title="Hunterdon" href="{{ route('feeds') }}" coords="465,634,96" shape="circle">
                        <area target="" alt="union" title="Union" href="{{ route('feeds') }}" coords="783,542,887,611" shape="rect">
                        <area target="" alt="hudson" title="Hudson" href="{{ route('feeds') }}" coords="940,486,932,513,950,506,959,517,957,533,969,554,953,581,985,555,1009,531,1014,494,1026,469,1014,456,984,469,976,494,964,499,958,488" shape="poly">
                        <area target="" alt="somerset" title="Somerset" href="{{ route('feeds') }}" coords="644,704,71" shape="circle">
                        <area target="" alt="middlesex" title="Middlesex" href="{{ route('feeds') }}" coords="762,797,70" shape="circle">
                        <area target="" alt="mercer" title="Mercer" href="{{ route('feeds') }}" coords="612,899,60" shape="circle">
                        <area target="" alt="monmouth" title="Monmouth" href="{{ route('feeds') }}" coords="880,898,78" shape="circle">
                        <area target="" alt="ocean" title="Ocean" href="{{ route('feeds') }}" coords="835,1178,82" shape="circle">
                        <area target="" alt="burlington" title="Burlington" href="{{ route('feeds') }}" coords="606,1181,124" shape="circle">
                        <area target="" alt="camden" title="Camden" href="{{ route('feeds') }}" coords="416,1288,535,1329" shape="rect">
                        <area target="" alt="gloucester" title="Gloucester" href="{{ route('feeds') }}" coords="209,1280,376,1345" shape="rect">
                        <area target="" alt="salem" title="Salem" href="{{ route('feeds') }}" coords="182,1429,79" shape="circle">
                        <area target="" alt="atlantic" title="Atlantic" href="{{ route('feeds') }}" coords="599,1522,106" shape="circle">
                        <area target="" alt="cumberland" title="Cumberland" href="{{ route('feeds') }}" coords="337,1628,88" shape="circle">
                        <area target="" alt="cape-may" title="Cape May" href="{{ route('feeds') }}" coords="483,1693,602,1799" shape="rect"> --}}
                    </map>
                </div>
            </div>
        </div>

        <!-- BG shape -->
        <div class="position-absolute end-0 bottom-0 text-primary">
            <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
        </div>
    </div>
</section>
@endsection
