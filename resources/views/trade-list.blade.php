@extends('layouts.app')


@section('content')
    <div class="tophive-container">
        <div class="tabs7 mt-4">
            <ul class="nav m-0">
                <li class="nav-item"><a class="nav-link" href="">Electronics</a></li>
                <li class="nav-item"><a class="nav-link" href="">Plumbers</a></li>
                <li class="nav-item"><a class="nav-link" href="">HVAC</a></li>
                <li class="nav-item"><a class="nav-link" href="">Telecommunication</a></li>
                <li class="nav-item"><a class="nav-link" href="">Fire Alarm</a></li>
                <li class="nav-item"><a class="nav-link" href="">Facility/Property Mgmt</a></li>
                <li class="nav-item"><a class="nav-link" href="">Vendors</a></li>
            </ul>
        </div>
    </div>
@endsection


@push('body_scripts')


        <script>
            vdata = {
                ...vdata,
                loading_feeds: true,
                feeds: [],
                feedform: {
                    visibility: 'public'
                },
            }

            vmethods = {
                ...vmethods,
            }

            vcreated = {
                ...vcreated,
                run: function(){

                }
                // function key: function(){}
            }

            vmounted = {
                ...vmounted,
                // function key: function(){}
            }
        </script>
@endpush
