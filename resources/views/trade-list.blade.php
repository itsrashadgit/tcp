@extends('layouts.app')


@section('content')
    <div class="tophive-container">
        {{-- <div class="tabs7 my-4">
            <ul class="nav m-0">
                @foreach ($trades as $trade)
                    <li class="nav-item"><a class="nav-link bg-white" href="{{ route("message.board") }}">{{ $trade->name }}</a></li>
                @endforeach
            </ul>
        </div> --}}
        <div class="row my-4 gx-1">
            @foreach ($trades as $trade)
                <div class="col-md-2">
                    <a class="nav-link bg-white text-center m-1 text-dark rounded d-block" href="{{ route("message.board", $trade->id) }}">
                        <div>
                            {{-- <i class="fas fa-toolbox"></i> --}}
                            <img src="{{ asset("uploads/trades/$trade->image") }}" alt="{{ $trade->name }}" class="img-fluid" width="40">
                        </div>
                        <div>{{ $trade->name }}</div>
                    </a>
                </div>
            @endforeach
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
