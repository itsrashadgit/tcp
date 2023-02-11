@extends('layouts.app')

@push('head_tags')
    <style>
        a{
            text-decoration: none;
            color: #555;
        }

        .comment-section{
            background: #F2F2F2;
            display: flex;
            align-items: center;
        }

        .make-comment {
            position: relative;
            border: 1px solid rgba(151,157,172,0.13);
            width: 100%;
            border-radius: 30px !important;
        }

        .make-comment input, .make-comment input:focus{
            border: none;
            width: 100%;
            padding: 5px 13px;
            outline: 0px solid transparent;
            border: 1px solid #ddd;
            height: 36px;
            font-weight: 400;
            border-radius: 30px !important;
            cursor: text;
        }

        .make-comment label{
            position: absolute;
            z-index: 9;
        }
    </style>
@endpush

@section('content')
    <div style="background: #F8F8F8">

        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card rounded-md mb-3">
                        <div class="card-body py-2 px-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm rounded-circle pe-2">
                                        <img alt="Image placeholder" src="http://localhost/tcp/public/images/avatar.png"
                                            width="40" height="40" class="img-fluid">
                                    </span>
                                    <span class="fw-bold text-muted">What's on your mind?</span>
                                </div>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="18" fill="#F8F8F8"></circle>
                                    <path
                                        d="M9 14.7059C9 14.3925 9 14.2358 9.01316 14.1038C9.14004 12.8306 10.1531 11.8234 11.4338 11.6973C11.5666 11.6842 11.7327 11.6842 12.065 11.6842C12.1931 11.6842 12.2571 11.6842 12.3114 11.6809C13.0055 11.6391 13.6134 11.2036 13.8727 10.5622C13.893 10.512 13.912 10.4554 13.95 10.3421C13.988 10.2289 14.007 10.1722 14.0273 10.122C14.2866 9.48058 14.8945 9.04506 15.5886 9.00327C15.6429 9 15.7029 9 15.823 9H20.177C20.2971 9 20.3571 9 20.4114 9.00327C21.1055 9.04506 21.7134 9.48058 21.9727 10.122C21.993 10.1722 22.012 10.2289 22.05 10.3421C22.088 10.4554 22.107 10.512 22.1273 10.5622C22.3866 11.2036 22.9944 11.6391 23.6886 11.6809C23.7429 11.6842 23.8069 11.6842 23.935 11.6842C24.2673 11.6842 24.4334 11.6842 24.5662 11.6973C25.8469 11.8234 26.86 12.8306 26.9868 14.1038C27 14.2358 27 14.3925 27 14.7059V21.7053C27 23.2086 27 23.9602 26.7057 24.5344C26.4469 25.0395 26.0338 25.4501 25.5258 25.7074C24.9482 26 24.1921 26 22.68 26H13.32C11.8079 26 11.0518 26 10.4742 25.7074C9.96619 25.4501 9.55314 25.0395 9.29428 24.5344C9 23.9602 9 23.2086 9 21.7053V14.7059Z"
                                        stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path
                                        d="M18 21.9737C19.9882 21.9737 21.6 20.3713 21.6 18.3947C21.6 16.4181 19.9882 14.8158 18 14.8158C16.0118 14.8158 14.4 16.4181 14.4 18.3947C14.4 20.3713 16.0118 21.9737 18 21.9737Z"
                                        stroke="#C4C4C4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-md mb-3">
                        <div class="card-body">
                            <div class="d-flex w-100">
                                <div>
                                    <img alt="Image placeholder" src="http://localhost/tcp/public/images/avatar.png"
                                        width="40" height="40" class="img-fluid rounded-circle">
                                </div>
                                <div class="w-100 ps-2">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <p class="mb-0">
                                            Michael Knight posted an update
                                        </p>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>1 Week Ago</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ratione atque itaque
                                    eum non cum!</p>
                            </div>
                            <hr>
                            <div class="d-flex pt-2">
                                <div class="d-flex">
                                    <div class="th-bp-post-like-button th-bp-activity-like-button pe-2">
                                        <a href="#" data-reaction="" data-id="59" class="button" data-user="1"
                                            data-nonce="87b0a5f472">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                </path>
                                            </svg>
                                            <span class="ms-1">Like</span>
                                        </a>
                                        <span class="reaction_icons d-none">

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="like"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/like.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">like</span>
                                            </span>

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="love"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/love.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">love</span>
                                            </span>

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="haha"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/haha.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">haha</span>
                                            </span>

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="wow"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/wow.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">wow</span>
                                            </span>

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="cry"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/sad.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">cry</span>
                                            </span>

                                            <span class="reaction_icon_con">
                                                <img data-activity-id="59" data-type="angry"
                                                    src="https://theconstructionplatform.com/wp-content/themes/metafans/assets/images/reactions/angry.png"
                                                    alt="reaction">
                                                <span class="reaction_icon_tooltip">angry</span>
                                            </span>

                                        </span>
                                    </div>
                                    <div class="th-bp-post-comment-button">
                                        <a href="" data-activity-id="activity-59" class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>Comment</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="th-bp-post-share-button ms-auto">
                                    <a href="" data-activity-id="59" class="button activity-share">
                                        <span class="share_icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="#888"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="arcs">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49">
                                                </line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49">
                                                </line>
                                            </svg></span>
                                        <span>Share</span>
                                    </a>
                                    <ul class="sharing-options d-none">
                                        <li><a href="59" class="timeline-share"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z">
                                                    </path>
                                                </svg>Share on activity</a></li>
                                        <li><a target="_blank" data-share-type="twitter"
                                                href="https://twitter.com/intent/tweet?url=https://theconstructionplatform.com/activity/p/59/"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                                    </path>
                                                </svg>Share on twitter</a></li>
                                        <li><a target="_blank" data-share-type="facebook"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://theconstructionplatform.com/activity/p/59/"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                    </path>
                                                </svg>Share on facebook</a></li>
                                        <li><a data-share-type="whatsapp"
                                                href="whatsapp://send?text=https://theconstructionplatform.com/activity/p/59/"
                                                data-action="share/whatsapp/share"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="15" height="15" fill="currentColor"
                                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                                    </path>
                                                </svg>Share on whatsApp</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex comment-section p-3">
                            <img alt="Image placeholder" src="http://localhost/tcp/public/images/avatar.png"
                            width="40" height="40" class="img-fluid rounded-circle pe-2">
                            <div class="make-comment">
                                <input type="text" placeholder="Type a Comment ...">
                                <label for="comment-upload-media-59">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#999999" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M20.4 14.5L16 10 4 20"></path></svg>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
