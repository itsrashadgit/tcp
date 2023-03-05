@extends('layouts.app')


@section('content')


    <div class="tophive-container">

        <div class="tabs7 mt-4">
            <ul class="nav m-0">
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('trade.list', 'tradesmen') }}">Tradesmen</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('trade.list', 'contractors') }}">Contractors</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('message.board', 'architects_engineers') }}">Architects/Engineers</a>
                </li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('message.board', 'organization_associations') }}">Trade
                        Organizations/Associations</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('message.board', 'schools_education') }}">Trade
                        Schools/Education</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('message.board', 'facility_property_mgmt') }}">Facility/Property
                        Mgmt</a></li>
                <li class="nav-item"><a class="nav-link bg-white" href="{{ route('message.board', 'vendors') }}">Vendors</a></li>
            </ul>
        </div>

        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-9_md-9_sm-12">
                <div class="content-inner">
                    <article id="post-0" class="bp_members type-bp_members entry post-0 page type-page status-publish hentry">
                       <header class="entry-header">
                          <h1 class="entry-title">Jhon</h1>
                       </header>
                       <!-- .entry-header -->
                       <div class="entry-content">
                          <div id="buddypress" class="buddypress-wrap metafans community-moderator round-avatars bp-dir-hori-nav">

                             <div class="bp-wrap">
                                <div id="item-body" class="item-body">
                                   <div class="tophive-bp-messenger-main-wrapper show_chat">
                                      <div class="th-messenger-chat-list">
                                         <div class="th-bpm-top">
                                            <form>
                                               <input class="search_chat_members" type="search" placeholder="Search Profiles...">
                                            </form>
                                            <div class="show_searched_members"></div>
                                         </div>
                                         <div class="th-bpm-chat-members">

                                            @foreach ($receivers as $rc)
                                              <a href="?receiver_id={{ $rc->id }}">
                                                  <div class="single-thread single">
                                                      <img src="{{ asset($rc->avatar ? 'images/user/' . $rc->avatar : 'images/avatar.png') }}" alt="" class="avatar avatar-40 photo" height="40" width="40" loading="lazy" decoding="async">
                                                        <div class="item-content"><span class="name">{{ $rc->name }}</span>
                                                            {{-- @php
                                                                $lastmsg = \App\Models\ChatMessage::whereIn("sender_id", [Auth::user()->id, $rc->id ?? ""])
                                                                ->whereIn("receiver_id", [Auth::user()->id, $rc->id ?? ""])->first();
                                                            @endphp
                                                            @if ($lastmsg)
                                                                <span class="last-thread">{{ $lastmsg->sender_id == Auth::user()->id ? "You" : $lastmsg->user->name }}: {{ $lastmsg->message }}</span>
                                                            @endif --}}
                                                        </div>
                                                  </div>
                                              </a>
                                            @endforeach

                                         </div>
                                      </div>

                                      @if ($receiver != null)
                                      <div class="th-messenger-chat-main">
                                          <div class="chat-filed-header">
                                             <span class="mobile-back">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                                   <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                                                </svg>
                                             </span>
                                             <div class="recipient-avatar">
                                                <div class="avatar-img">
                                                   <span class="group-photos">
                                                      <img alt="" src="{{ asset($receiver->avatar ? 'images/user/' . $receiver->avatar : 'images/avatar.png') }}" height="20" width="20" loading="lazy" decoding="async">
                                                      {{-- <span class="more">+16</span> --}}
                                                  </span>
                                                   <div class="item-content">
                                                      <span class="name">{{ $receiver->name }}</span>
                                                      <span class="last-activity">Active 2 days ago</span>
                                                  </div>
                                                </div>
                                             </div>
                                             <div class="recipient-options"></div>
                                          </div>
                                          <div class="conversion-content open" id="conversion-content" data-thread-id="49" data-sender="16" data-last-id="2952">

                                              @foreach ($messages as $message)
                                                  <div class="single-conversation {{ $message->sender_id == Auth::user()->id ? "c-right" : "c-left" }}">
                                                      <span class="{{ $message->sender_id == Auth::user()->id ? "c-right" : "c-left" }}">{{ $message->message }}
                                                          <span class="time">{{ $message->created_at->format("h:i a") }}</span>
                                                      </span>
                                                  </div>
                                              @endforeach
                                             {{-- <span class="chat-date-span">March 28,2022</span>
                                             <div class="single-conversation c-left" data-conv-id="1541"><span class="c-left">Hi<span class="time">03:10 am</span></span></div>
                                             <span class="chat-date-span">April 2,2022</span> --}}
                                          </div>

                                          <div class="conversion-form">
                                             <form action="{{ route('send.msg') }}" method="POST" id="chat-form">
                                               @csrf
                                                <textarea class="conv-text" placeholder="Aa" name="message"></textarea>
                                                <input type="hidden" name="receiver" value="{{ request('receiver_id') }}">
                                                <span class="attachemnt"></span><span class="emoji"></span>
                                                <span class="send--button" onclick="event.preventDefault(); document.getElementById('chat-form').submit();">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 20 20">
                                                      <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"></path>
                                                   </svg>
                                                </span>
                                             </form>
                                          </div>
                                       </div>
                                      @else
                                          <div class="th-messenger-chat-main">
                                              <div class="start-new-conv">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512">
                                                      <g>
                                                          <path d="m502.839 362.82-34.35-104.336c-1.295-3.934-5.536-6.074-9.469-4.779-3.935 1.295-6.074 5.535-4.779 9.469l32.351 98.267c-.968-.143-1.951-.241-2.958-.241h-29.021l-38.312-116.375v-76.548h2.923c2.258 0 4.25 1.441 4.956 3.586l18.486 56.153c1.039 3.156 3.972 5.157 7.123 5.157.777 0 1.568-.122 2.347-.378 3.935-1.295 6.074-5.535 4.779-9.469l-18.486-56.153c-2.737-8.311-10.454-13.895-19.204-13.895h-112.086c-14.751-9.527-32.31-15.063-51.139-15.063s-36.388 5.536-51.139 15.063h-112.086c-8.75 0-16.467 5.584-19.204 13.896l-64.41 195.647c-.673 2.043-1.014 4.17-1.014 6.321v53.424c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-41.148c0-2.877 2.341-5.218 5.218-5.218h93.901c1.979 0 3.82 1.149 4.688 2.928l18.452 37.781c3.366 6.892 10.497 11.345 18.167 11.345h184.853c7.67 0 14.801-4.454 18.167-11.345l18.452-37.781c.869-1.778 2.709-2.928 4.688-2.928h93.901c2.877 0 5.218 2.341 5.218 5.218v110.364c0 2.877-2.341 5.218-5.218 5.218h-455.269c-2.877 0-5.218-2.341-5.218-5.218v-32.189c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v32.189c0 11.148 9.07 20.218 20.218 20.218h455.27c11.148 0 20.218-9.07 20.218-20.218v-122.64c0-2.15-.341-4.277-1.014-6.322zm-101.537-132.503c-1.479-.342-3.012-.529-4.58-.529h-46.249c-.731-23.73-10.251-45.283-25.408-61.511h76.237zm-239.775-.528h-46.249c-1.568 0-3.101.186-4.58.529v-62.04h76.237c-15.156 16.228-24.677 37.781-25.408 61.511zm-136.12 131.653 62.412-189.578c.706-2.145 2.698-3.586 4.956-3.586h2.923v76.549l-38.312 116.373h-29.021c-1.007 0-1.989.099-2.958.242zm346.159 11.103-18.453 37.782c-.868 1.778-2.708 2.927-4.688 2.927h-184.851c-1.979 0-3.819-1.149-4.688-2.928l-18.452-37.781c-3.366-6.892-10.497-11.345-18.167-11.345h-49.088l37.144-112.825c.706-2.145 2.698-3.586 4.956-3.586h46.975c2.238 17.327 9.259 33.851 20.323 47.479 13.407 16.515 32.165 28.14 52.818 32.734 4.043.896 8.051-1.649 8.95-5.693.899-4.043-1.649-8.05-5.693-8.95-17.366-3.863-33.145-13.646-44.429-27.546-11.443-14.096-17.746-31.88-17.746-50.075 0-43.85 35.674-79.524 79.523-79.524s79.523 35.674 79.523 79.524c0 37.38-26.505 70.103-63.022 77.806-4.053.855-6.646 4.833-5.791 8.886.745 3.531 3.86 5.954 7.331 5.954.513 0 1.034-.053 1.555-.163 20.892-4.407 39.896-15.973 53.512-32.567 11.249-13.709 18.378-30.371 20.636-47.865h46.976c2.258 0 4.25 1.441 4.956 3.586l37.146 112.825h-49.089c-7.669 0-14.8 4.453-18.167 11.345z">
                                                          </path>
                                                          <path d="m53.912 477.393h27.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-27.446c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z">
                                                          </path>
                                                          <path d="m53.912 453.964h27.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-27.446c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z">
                                                          </path>
                                                          <path d="m273.294 266.144c2.119 0 4.225-.893 5.708-2.631 2.689-3.15 2.315-7.885-.835-10.574-6.184-5.278-14.396-8.199-23.125-8.226-8.714-.019-16.958 2.846-23.173 8.088-3.167 2.67-3.569 7.402-.898 10.568 2.67 3.167 7.402 3.57 10.568.898 3.435-2.896 8.311-4.555 13.388-4.555h.07c5.104.016 9.999 1.705 13.432 4.635 1.412 1.207 3.143 1.797 4.865 1.797z">
                                                          </path>
                                                          <path d="m214.689 216.564h-.089c-4.143.026-7.474 3.317-7.496 7.459-.023 4.142 3.361 7.518 7.503 7.541h.042c4.123 0 7.477-3.331 7.499-7.459.022-4.142-3.317-7.518-7.459-7.541z">
                                                          </path>
                                                          <path d="m296.665 231.523c.056.006.114.005.17.01.184.015.367.03.555.031h.042.01c.006 0 .011-.001.017-.001.249-.001.495-.013.738-.037 3.788-.379 6.745-3.575 6.745-7.462 0-4.069-3.243-7.374-7.284-7.489-.062-.002-.123-.01-.186-.01h-.023c-.002 0-.005 0-.007 0h-.059-.032c-.003 0-.007 0-.01 0-4.122 0-7.432 3.331-7.455 7.459-.021 3.896 2.974 7.113 6.779 7.499z">
                                                          </path>
                                                          <path d="m188.294 35.535c1.464 1.465 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197l6.063-6.063 6.063 6.063c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197c2.929-2.929 2.929-7.678 0-10.606l-6.063-6.063 6.063-6.063c2.929-2.929 2.929-7.678 0-10.606-2.928-2.929-7.677-2.929-10.606 0l-6.063 6.063-6.063-6.063c-2.929-2.929-7.678-2.929-10.606 0-2.929 2.929-2.929 7.678 0 10.606l6.063 6.063-6.063 6.063c-2.929 2.929-2.929 7.678 0 10.606z">
                                                          </path>
                                                          <path d="m134.858 113.76c18.883 0 34.245-15.362 34.245-34.246 0-18.883-15.362-34.245-34.245-34.245s-34.245 15.362-34.245 34.245c0 18.884 15.363 34.246 34.245 34.246zm0-53.49c10.612 0 19.245 8.633 19.245 19.245s-8.633 19.246-19.245 19.246-19.245-8.633-19.245-19.246c0-10.612 8.634-19.245 19.245-19.245z">
                                                          </path>
                                                          <path d="m357.925 109.132c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197l6.063-6.063 6.063 6.063c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197c2.929-2.929 2.929-7.678 0-10.606l-6.063-6.063 6.063-6.063c2.929-2.929 2.929-7.678 0-10.606-2.929-2.929-7.678-2.929-10.606 0l-6.063 6.063-6.063-6.063c-2.929-2.929-7.678-2.929-10.606 0-2.929 2.929-2.929 7.678 0 10.606l6.063 6.063-6.063 6.063c-2.929 2.929-2.929 7.678 0 10.606z">
                                                          </path>
                                                          <path d="m255.588 107.999h.023c4.131 0 7.487-3.343 7.5-7.478l.066-22.333c.012-4.142-3.335-7.51-7.478-7.522-.008 0-.015 0-.023 0-4.131 0-7.487 3.343-7.5 7.478l-.066 22.333c-.012 4.141 3.336 7.509 7.478 7.522z">
                                                          </path>
                                                          <path d="m206.846 84.209c-3.553 2.128-4.708 6.734-2.58 10.288l11.604 19.374c1.406 2.347 3.891 3.647 6.441 3.647 1.311 0 2.64-.344 3.847-1.067 3.553-2.128 4.708-6.734 2.58-10.288l-11.604-19.374c-2.129-3.553-6.735-4.709-10.288-2.58z">
                                                          </path>
                                                          <path d="m284.967 116.734c1.216.738 2.559 1.089 3.884 1.089 2.535 0 5.008-1.285 6.419-3.609l11.72-19.31c2.149-3.541 1.021-8.154-2.52-10.303-3.542-2.148-8.154-1.021-10.303 2.52l-11.72 19.31c-2.149 3.541-1.02 8.154 2.52 10.303z">
                                                          </path>
                                                          <path d="m324.46 66.991c15.85 0 28.744-12.895 28.744-28.744s-12.894-28.744-28.744-28.744-28.744 12.895-28.744 28.744 12.894 28.744 28.744 28.744zm0-42.488c7.579 0 13.744 6.166 13.744 13.744s-6.166 13.744-13.744 13.744-13.744-6.166-13.744-13.744 6.165-13.744 13.744-13.744z">
                                                          </path>
                                                      </g>
                                                  </svg>
                                                  <h4>You have not yet started a chat yet</h4>
                                                  <p>Start a new conversation by finding a member</p>
                                              </div>
                                          </div>
                                      @endif
                                   </div>
                                </div>
                                <!-- #item-body -->
                             </div>
                             <!-- // .bp-wrap -->
                          </div>
                          <!-- #buddypress -->
                       </div>
                       <!-- .entry-content -->
                       <footer class="entry-footer">
                       </footer>
                       <!-- .entry-footer -->
                    </article>
                    <!-- #post-0 -->
                 </div>
            </main>
            <!-- #main -->
            <aside id="sidebar-primary" class="sidebar-primary tophive-col-3_sm-12">
                <div class="sidebar-primary-inner sidebar-inner widget-area">
                    <section id="block-25" class="widget widget_block widget_bp_core_members_widget buddypress">
                        <div class="bp-dynamic-block-container">
                            <h2 class="widget-title">Pipeline</h2>

                            <ul class="item-list">
                                <li class="vcard d-flex align-items-center">
                                    <div class="item-avatar">
                                        <a href="https://theconstructionplatform.com/members/admin/" class="bp-tooltip"
                                            data-bp-tooltip="admin">
                                            <img loading="lazy"
                                                src="data:image/jpeg;base64,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"
                                                class="avatar user-1-avatar avatar-50 photo" width="50"
                                                height="50" alt="Profile picture of admin">
                                        </a>
                                    </div>
                                    <div class="mx-1"></div>
                                    <div class="item">
                                        <div class="item-title fn"><a href="">Event Name</a></div>
                                        <div class="item-meta">
                                            <span class="activity">Event Descriptions</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section id="block-25" class="widget widget_block widget_bp_core_members_widget buddypress">
                        <div class="bp-dynamic-block-container">
                            <h2 class="widget-title">Upcoming Events</h2>

                            <ul class="item-list">
                                <li class="vcard d-flex align-items-center">
                                    <div class="item-avatar">
                                        <a href="https://theconstructionplatform.com/members/admin/" class="bp-tooltip"
                                            data-bp-tooltip="admin">
                                            <img loading="lazy"
                                                src="data:image/jpeg;base64,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"
                                                class="avatar user-1-avatar avatar-50 photo" width="50"
                                                height="50" alt="Profile picture of admin">
                                        </a>
                                    </div>
                                    <div class="mx-1"></div>
                                    <div class="item">
                                        <div class="item-title fn"><a href="">Event Name</a></div>
                                        <div class="item-meta">
                                            <span class="activity">Event Descriptions</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </aside>

        </div>
        <!-- #.tophive-grid -->
    </div>
    <!-- #.tophive-container -->
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
