@extends('layouts.app')


@section('content')
    <div class="tophive-container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <section class="mt-3 widget widget_block widget_bp_core_members_widget buddypress">
                    <div class="bp-dynamic-block-container">
                        <h2 class="widget-title">Search Results</h2>
                        <hr>
                                <ul id="members-list-63faa9ae2a56f" class="item-list" aria-live="polite" aria-relevant="all" aria-atomic="true">
                            <li class="vcard d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="item-avatar me-2">
                                        <a href="https://theconstructionplatform.com/members/admin/" class="bp-tooltip" data-bp-tooltip="admin">
                                            <img loading="lazy" src="//www.gravatar.com/avatar/82597721255b38f095bf4d5ca9c50b8c?s=50&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-50 photo" width="50" height="50" alt="Profile picture of admin">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <div class="item-title fn"><a href="https://theconstructionplatform.com/members/admin/">admin</a></div>
                                        <div class="item-meta">
                                            <span class="activity">Active right now</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary text-white">View Profile</a>
                                </div>
                            </li>
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
