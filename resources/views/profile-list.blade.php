@extends('layouts.app')


@section('content')
    <div class="tophive-container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <section class="mt-3 widget widget_block widget_bp_core_members_widget buddypress">
                    <div class="bp-dynamic-block-container">
                        <h2 class="widget-title">Profiles</h2>
                        <hr>
                        <ul id="members-list-63faa9ae2a56f" class="item-list" aria-live="polite" aria-relevant="all" aria-atomic="true">
                            @foreach ($profiles as $profile)
                                <li class="vcard d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="item-avatar me-2">
                                            <a href="{{ route("user.profile", $profile->username) }}" class="bp-tooltip" data-bp-tooltip="admin">
                                                <img loading="lazy" src="{{ asset($profile->avatar ? '/images/user/' . $profile->avatar : 'images/avatar.png') }}" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of admin">
                                            </a>
                                        </div>

                                        <div class="item">
                                            <div class="item-title fn">
                                                <a href="{{ route("user.profile", $profile->username) }}">{{ $profile->name }}</a></div>
                                            <div class="item-meta">
                                                <span class="activity">{{ $profile->user_type }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{ route("user.profile", $profile->username) }}" class="btn btn-primary text-white">View Profile</a>
                                    </div>
                                </li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
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
