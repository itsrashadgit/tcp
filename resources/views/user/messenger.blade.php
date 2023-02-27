@extends('layouts.app')


@section('meta_tags')
    <title>{{ __('Home - Buyer') }}</title>
    <meta name="description" content="Create Employee and Manage Employee Details">
    <meta name="keywords" content="employee,employee_create">
@endsection


@section('content')
    <div class="tophive-container">

        @include("partials.profile-header")

        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-12">
               <div class="content-inner">
                  <article id="post-0" class="bp_members type-bp_members entry post-0 page type-page status-publish hentry">
                     <header class="entry-header">
                        <h1 class="entry-title">Jhon</h1>
                     </header>
                     <!-- .entry-header -->
                     <div class="entry-content">
                        <div id="buddypress" class="buddypress-wrap metafans community-moderator round-avatars bp-dir-hori-nav">
                           <div id="item-header" role="complementary" data-bp-item-id="16" data-bp-item-component="members" class="users-header single-headers">
                              <div id="cover-image-container">
                                 <a id="header-cover-image" href="https://demo.tophivetheme.com/metafans/classic/members/user/"></a>
                                 <div id="item-header-cover-image">
                                    <div class="profile-friendship-button">
                                    </div>
                                    <div id="item-header-avatar">
                                       <img loading="lazy" src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png" class="avatar user-16-avatar avatar-150 photo" width="150" height="150" alt="Profile picture of Jhon">
                                    </div>
                                    <div id="item-header-content">
                                       <h2 class="user-nicename">Jhon</h2>
                                       <div id="item-buttons"></div>
                                       <p class="bp-user-designation"><small>Developer Team</small></p>
                                       <div id="item-meta">
                                          <p class="profile-header-meta-date"><span class="hide-badge">@user</span> • <span>Joined : November 2, 2021 </span></p>
                                          <div class="user-facts">
                                             <p>
                                                <span class="secondary-color followers-count-16">12</span>
                                                <span>Followers</span>
                                             </p>
                                             <p>
                                                <span class="secondary-color following-count-16">7</span>
                                                <span>Following</span>
                                             </p>
                                             <!-- <p>
                                                <span class="secondary-color">2</span>
                                                <span>Topics</span>
                                                </p>
                                                                <p>
                                                    <span class="secondary-color">0</span>
                                                    <span>Friends</span>
                                                </p>
                                                -->
                                             <p>
                                                <span class="secondary-color">1.6k</span>
                                                <span>Points</span>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="template-notices" role="alert" aria-atomic="true">
                              </div>
                           </div>
                           <!-- #item-header -->
                           <div class="bp-wrap">
                              <div id="item-body" class="item-body">
                                 <div class="tophive-bp-messenger-main-wrapper show_chat">
                                    <div class="th-messenger-chat-list">
                                       <div class="th-bpm-top">
                                          <form>
                                             <input class="search_chat_members" type="search" placeholder="Search member...">
                                          </form>
                                          <div class="show_searched_members"></div>
                                       </div>
                                       <div class="th-bpm-chat-members">

                                          @foreach ($receivers as $rc)
                                            <a href="?receiver_id={{ $rc->id }}">
                                                <div class="single-thread single">
                                                    <img src="{{ asset($rc->avatar ? 'images/user/' . $rc->avatar : 'images/avatar.png') }}" alt="" class="avatar avatar-40 photo" height="40" width="40" loading="lazy" decoding="async">
                                                    <div class="item-content"><span class="name">{{ $rc->name }}</span><span class="last-thread">You: hi</span></div>
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
               <!-- #.content-inner -->
            </main>
            <!-- #main -->
         </div>

    </div><!-- #.tophive-container -->
@endsection





@push('body_scripts')
    <script>
        vdata = {
            ...vdata,
            loading_feeds: true,
            feeds: [],
        }

        vmethods = {
            ...vmethods,

        }

        vcreated = {
            ...vcreated,
            run: function() {

            }
            // function key: function(){}
        }

        vmounted = {
            ...vmounted,
            // function key: function(){}
        }
    </script>
@endpush
