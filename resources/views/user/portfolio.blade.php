@extends('layouts.app')


@section('meta_tags')
    <title>{{ __('Home - Buyer') }}</title>
    <meta name="description" content="Create Employee and Manage Employee Details">
    <meta name="keywords" content="employee,employee_create">
@endsection


@section('content')

    <div class="tophive-container">

        @include('partials.profile-header')

        <div class="tophive-grid">
            <main id="main" class="content-area tophive-col-12">
                <div class="content-inner">
                    <div class="bp-image-uploads">
                        <div class="bp-image-filters">
                            <span>
                                <span id="allphoto-link" class="bp-image-filter bp-image-filter-active">All Photos
                                </span>
                                {{-- <span id="allphoto" class="bp-img-no">1</span> --}}
                            </span>
                            {{-- <span>
                                <span id="myphoto" class="bp-image-filter">My Photos </span>
                                <span id="myphoto-count" class="bp-img-no">0</span>
                            </span> --}}
                        </div>

                        <form class="bp-search-input-box" action="" method="GET">
                            <input id="bp-image-search" type="text" placeholder="Search photos" name="q">
                            <svg viewBox="0 0 48 48">
                                <path
                                    d="m40.8994141 39.4853516-7.8127441-7.8127441c2.3978882-2.734375 3.7209473-6.1942749 3.7209473-9.8649902 0-4.0068359-1.5605469-7.7734375-4.3935547-10.6064453s-6.5996094-4.3935547-10.6064453-4.3935547-7.7734375 1.5605469-10.6064453 4.3935547-4.3935547 6.5996094-4.3935547 10.6064453 1.5605469 7.7734375 4.3935547 10.6064453 6.5996094 4.3935547 10.6064453 4.3935547c3.6707153 0 7.1306152-1.3230591 9.8649902-3.7209473l7.8127441 7.8127441c.1953125.1953125.4511719.2929688.7070313.2929688s.5117188-.0976563.7070313-.2929688c.3906249-.390625.3906249-1.0234375-.0000001-1.4140625zm-28.2841797-8.4853516c-2.4550781-2.4555664-3.8076172-5.7202148-3.8076172-9.1923828s1.3525391-6.7368164 3.8076172-9.1923828c2.4555664-2.4550781 5.7202148-3.8076172 9.1923828-3.8076172s6.7368164 1.3525391 9.1923828 3.8076172c2.4550781 2.4555664 3.8076172 5.7202148 3.8076172 9.1923828s-1.3525391 6.7368164-3.8076172 9.1923828c-2.4555664 2.4550781-5.7202148 3.8076172-9.1923828 3.8076172s-6.7368164-1.3525391-9.1923828-3.8076172z">
                                </path>
                            </svg>
                        </form>
                        <div class="bp-image-upload-box">
                            @if (Auth::user()->id == $user->id)
                                <label id="bp-upload-image" for="add-portfolio-photo" role="button">
                                    <svg viewBox="0 0 24 24">
                                        <g>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="M22,13a1,1,0,0,0-1,1v4.213A2.79,2.79,0,0,1,18.213,21H5.787A2.79,2.79,0,0,1,3,18.213V14a1,1,0,0,0-2,0v4.213A4.792,4.792,0,0,0,5.787,23H18.213A4.792,4.792,0,0,0,23,18.213V14A1,1,0,0,0,22,13Z">
                                            </path>
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="M6.707,8.707,11,4.414V17a1,1,0,0,0,2,0V4.414l4.293,4.293a1,1,0,0,0,1.414-1.414l-6-6a1,1,0,0,0-1.414,0l-6,6A1,1,0,0,0,6.707,8.707Z">
                                            </path>
                                        </g>
                                    </svg>
                                    <form action="{{ route('portfolio.upload') }}" method="POST" id="upload-portfolio"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" hidden name="photo" id="add-portfolio-photo"
                                            onchange="event.preventDefault(); document.getElementById('upload-portfolio').submit();">
                                    </form>
                                    Add Photos
                                </label>
                            @endif
                        </div>
                        {{-- <div class="bp-create-album-box">
                            <a id="bp-create-album" href="#">
                                <svg viewBox="0 0 24 24">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m17.453 24c-.168 0-.34-.021-.51-.066l-15.463-4.141c-1.06-.292-1.692-1.39-1.414-2.45l1.951-7.272c.072-.267.346-.422.612-.354.267.071.425.346.354.612l-1.95 7.27c-.139.53.179 1.082.71 1.229l15.457 4.139c.531.14 1.079-.176 1.217-.704l.781-2.894c.072-.267.346-.426.613-.353.267.072.424.347.353.613l-.78 2.89c-.235.89-1.045 1.481-1.931 1.481z">
                                            </path>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m22 18h-16c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h16c1.103 0 2 .897 2 2v12c0 1.103-.897 2-2 2zm-16-15c-.551 0-1 .449-1 1v12c0 .551.449 1 1 1h16c.551 0 1-.449 1-1v-12c0-.551-.449-1-1-1z">
                                            </path>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m9 9c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1z">
                                            </path>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4.57 16.93c-.128 0-.256-.049-.354-.146-.195-.195-.195-.512 0-.707l4.723-4.723c.566-.566 1.555-.566 2.121 0l1.406 1.406 3.892-4.67c.283-.339.699-.536 1.142-.54h.011c.438 0 .853.19 1.139.523l5.23 6.102c.18.209.156.525-.054.705-.209.18-.524.157-.705-.054l-5.23-6.102c-.097-.112-.231-.174-.38-.174-.104-.009-.287.063-.384.18l-4.243 5.091c-.09.108-.221.173-.362.179-.142.01-.277-.046-.376-.146l-1.793-1.793c-.189-.188-.518-.188-.707 0l-4.723 4.723c-.097.097-.225.146-.353.146z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                Create Album </a>
                        </div> --}}
                    </div>
                    <div class="media-upload-popup-container hide-popup">
                        <div class="media-upload-popup">
                            <span class="activity-uploading-loading"></span>
                            <div class="media-upload-header">
                                <h3 class="media-upload-header-text">Upload</h3>
                                <span class="close-media-popup dashicons dashicons-no-alt"></span>
                            </div>
                            <div class="media-upload-caption">
                                <textarea id="media-caption" name="" cols="30" rows="4"
                                    placeholder="Write something about your photos.."></textarea>
                            </div>
                            <div class="media-upload-box">
                                <input id="media-upload-btn" type="file" accept="image/*">
                                <label for="media-upload-btn">
                                    <svg viewBox="0 0 24 24">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.453 24c-.168 0-.34-.021-.51-.066l-15.463-4.141c-1.06-.292-1.692-1.39-1.414-2.45l1.951-7.272c.072-.267.346-.422.612-.354.267.071.425.346.354.612l-1.95 7.27c-.139.53.179 1.082.71 1.229l15.457 4.139c.531.14 1.079-.176 1.217-.704l.781-2.894c.072-.267.346-.426.613-.353.267.072.424.347.353.613l-.78 2.89c-.235.89-1.045 1.481-1.931 1.481z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m22 18h-16c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h16c1.103 0 2 .897 2 2v12c0 1.103-.897 2-2 2zm-16-15c-.551 0-1 .449-1 1v12c0 .551.449 1 1 1h16c.551 0 1-.449 1-1v-12c0-.551-.449-1-1-1z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m9 9c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m4.57 16.93c-.128 0-.256-.049-.354-.146-.195-.195-.195-.512 0-.707l4.723-4.723c.566-.566 1.555-.566 2.121 0l1.406 1.406 3.892-4.67c.283-.339.699-.536 1.142-.54h.011c.438 0 .853.19 1.139.523l5.23 6.102c.18.209.156.525-.054.705-.209.18-.524.157-.705-.054l-5.23-6.102c-.097-.112-.231-.174-.38-.174-.104-.009-.287.063-.384.18l-4.243 5.091c-.09.108-.221.173-.362.179-.142.01-.277-.046-.376-.146l-1.793-1.793c-.189-.188-.518-.188-.707 0l-4.723 4.723c-.097.097-.225.146-.353.146z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h4>Add Photos</h4>
                                </label>
                            </div>
                            <div class="upload-ready-medias"></div>
                            {{-- <div class="mf-activity-accessibility-container">
                                <select id="mf-activity-accessibility" class="mf-activity-accessibility" name="">
                                    <option value="public">Public</option>
                                    <option value="friends">Friends</option>
                                    <option value="onlyme">Onlyme</option>
                                </select>
                                <button id="popup-upload" disabled="">Upload<buttona>
                                    </buttona></button>
                            </div> --}}
                        </div>
                    </div>


                    <div class="album-upload-popup-container hide-popup">
                        <div class="album-upload-popup">
                            <span class="activity-uploading-loading"></span>
                            <div class="media-upload-header">
                                <h3 class="media-upload-header-text">Create album</h3>
                                <span class="close-album-popup dashicons dashicons-no-alt"></span>
                            </div>
                            <div class="media-upload-caption">
                                <label for="album-name" class="album-name">
                                    <input id="album-name" type="text" placeholder="Name">
                                </label>
                                <textarea id="album-caption" name="" cols="30" rows="4"
                                    placeholder="Write something about your albun.."></textarea>
                            </div>
                            <div class="media-upload-box">
                                <input id="album-upload-btn" type="file" accept="image/*" multiple="">
                                <label for="album-upload-btn">
                                    <svg viewBox="0 0 24 24">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.453 24c-.168 0-.34-.021-.51-.066l-15.463-4.141c-1.06-.292-1.692-1.39-1.414-2.45l1.951-7.272c.072-.267.346-.422.612-.354.267.071.425.346.354.612l-1.95 7.27c-.139.53.179 1.082.71 1.229l15.457 4.139c.531.14 1.079-.176 1.217-.704l.781-2.894c.072-.267.346-.426.613-.353.267.072.424.347.353.613l-.78 2.89c-.235.89-1.045 1.481-1.931 1.481z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m22 18h-16c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h16c1.103 0 2 .897 2 2v12c0 1.103-.897 2-2 2zm-16-15c-.551 0-1 .449-1 1v12c0 .551.449 1 1 1h16c.551 0 1-.449 1-1v-12c0-.551-.449-1-1-1z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m9 9c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1z">
                                                </path>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m4.57 16.93c-.128 0-.256-.049-.354-.146-.195-.195-.195-.512 0-.707l4.723-4.723c.566-.566 1.555-.566 2.121 0l1.406 1.406 3.892-4.67c.283-.339.699-.536 1.142-.54h.011c.438 0 .853.19 1.139.523l5.23 6.102c.18.209.156.525-.054.705-.209.18-.524.157-.705-.054l-5.23-6.102c-.097-.112-.231-.174-.38-.174-.104-.009-.287.063-.384.18l-4.243 5.091c-.09.108-.221.173-.362.179-.142.01-.277-.046-.376-.146l-1.793-1.793c-.189-.188-.518-.188-.707 0l-4.723 4.723c-.097.097-.225.146-.353.146z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h4>Add Photos</h4>
                                </label>
                            </div>
                            <div class="album-upload-ready-medias"></div>
                            <div class="mf-activity-accessibility-container">
                                <select id="mf-activity-accessibility" class="mf-activity-accessibility" name="">
                                    <option value="public">Public</option>
                                    <option value="friends">Friends</option>
                                    <option value="onlyme">Onlyme</option>
                                </select>
                                <button id="album-upload" disabled="">Upload</button>
                            </div>
                        </div>
                    </div>

                    <div id="loading-con">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>


                    <div class="mf-photo-previewer">
                        @foreach ($portfolios as $portfolio)
                            <div class="bp-image-single" id="1">
                                <div class="post-media-single">
                                    <a class="media-popup-thumbnail" href="">
                                        <img src="{{ asset("uploads/portfolio/$portfolio->file_name") }}" alt="gm">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>

    </div>


    {{-- <div class="th-media-viewer-container show">
        <div class="th-media-viewer">
            <span class="close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </span>
            <span class="image-viewer-next-prev">
                <span class="img-prev" data-current-id="2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                        </path>
                    </svg>
                </span>
                <span class="img-next" data-current-id="2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </span>
            </span>
            <div class="th-media-view"><img
                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/2021/03/post-images-06-1.jpg"
                    alt="image_popup"></div>
            <div class="th-media-comments">
                <div class="author_section">
                    <div class="media_author">
                        <div class="media_author_img"><img alt="media_author"
                                src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/5/1660978415-bpthumb.jpg"
                                srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/5/1660978415-bpfull.jpg 2x"
                                class="avatar avatar-40 photo" height="40" width="40" loading="lazy"
                                decoding="async"></div>
                        <div class="media_author_data"><span>Rockstar</span><span>1 year ago</span></div>
                    </div>
                </div>
                <div class="comment_section">
                    <div class="th-bp-media-comment-button">
                        <a href="" class="bp-media-reactions " data-media-id="9UZN5AQ2E7" data-activity-id="1590">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                                style="margin-top: -4px;">
                                <path
                                    d="M19.782,9H15.388l.863-2.592a3.9,3.9,0,0,0-1.532-4.464,2.447,2.447,0,0,0-3.341.63l-4.693,6.7A.993.993,0,0,0,6,9H2a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1H6a1,1,0,0,0,1-1v-.132l1.445.964A1.006,1.006,0,0,0,9,23h9a1,1,0,0,0,.895-.553l3.658-7.317A4.264,4.264,0,0,0,23,13.236V12.218A3.222,3.222,0,0,0,19.782,9ZM5,21H3V11H5Zm16-7.764a2.255,2.255,0,0,1-.236,1L17.382,21H9.3L7,19.465v-7.15L13.017,3.72a.43.43,0,0,1,.593-.112,1.893,1.893,0,0,1,.744,2.168l-1.3,3.908A1,1,0,0,0,14,11h5.782A1.219,1.219,0,0,1,21,12.218Z">
                                </path>
                            </svg>
                            <span class="like_count">0</span>
                        </a>
                        <a href="" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                                </path>
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                                </path>
                            </svg>
                            <span class="like_count">6</span>
                        </a>
                    </div>
                    <div class="th-media-comments-all">
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                    srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                    class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                    decoding="async"></div>
                            <div class="comment_data"><span>John</span><span class="times">2 months ago</span>
                                <p class="comment_text">9859595</p>
                            </div>
                        </div>
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                    srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                    class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                    decoding="async"></div>
                            <div class="comment_data"><span>John</span><span class="times">2 months ago</span>
                                <p class="comment_text">9</p>
                            </div>
                        </div>
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                    srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                    class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                    decoding="async"></div>
                            <div class="comment_data"><span>John</span><span class="times">5 months ago</span>
                                <p class="comment_text">cgjhgcjh
                                </p>
                            </div>
                        </div>
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                    srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                    class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                    decoding="async"></div>
                            <div class="comment_data"><span>John</span><span class="times">5 months ago</span>
                                <p class="comment_text">gggg</p>
                            </div>
                        </div>
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                    srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                    class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                    decoding="async"></div>
                            <div class="comment_data"><span>John</span><span class="times">8 months ago</span>
                                <p class="comment_text">hi
                                </p>
                            </div>
                        </div>
                        <div class="th-media-single-comment">
                            <div class="comment_author"><img alt=""
                                    src="https://secure.gravatar.com/avatar/?s=30&amp;d=mm&amp;r=g"
                                    srcset="https://secure.gravatar.com/avatar/?s=60&amp;d=mm&amp;r=g 2x"
                                    class="avatar avatar-30 photo avatar-default" height="30" width="30"
                                    loading="lazy" decoding="async"></div>
                            <div class="comment_data"><span></span><span class="times">1 year ago</span>
                                <p class="comment_text">kjkjk</p>
                            </div>
                        </div>
                    </div>
                    <div class="media_comment_box">
                        <div class="comment_author_img"><img alt=""
                                src="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpthumb.png"
                                srcset="https://demo.tophivetheme.com/metafans/classic/wp-content/uploads/sites/10/avatars/16/1676974617-bpfull.png 2x"
                                class="avatar avatar-30 photo" height="30" width="30" loading="lazy"
                                decoding="async"></div>
                        <div class="comment_text">
                            <textarea row="2" placeholder="Write a comment..."></textarea><button data-media-id="9UZN5AQ2E7" data-activity-id="1590"
                                class="th_media_comment_submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                    <path
                                        d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z">
                                    </path>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
