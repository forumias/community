<div id="sub_comment_html" style="display:none;"> 
<?php $auth_user = @Auth::user(); ?> 
    <div class="single-reply-card-wrapper" id="">
    <div class="single-reply-card" id="">
        <div class="reply-header">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$auth_user->image}}" data-src="{{$auth_user->image}}" data-width="70" data-height="70" alt="{{$auth_user->full_name}}'s photo" class="lazyautosizes lazyloaded" sizes="32px" style="height:32px; width:32px;"></a>
                </div><a href="#" class="prof-name">{{$auth_user->full_name}}</a><a href="#cjul7whyp0000hhs18mf5vahe" title="Just now" class="date-time">just now</a></div>
        </div>
        <div class="reply-content">
            <p class="sub_text_description">loading data...</p>
        </div>
        <div class="post-card-footer d-flex flex-row justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <?php /*<div class="d-flex flex-row align-items-center flex-wrap multiple-reactions-wrap">
                    <button class="hn-btn d-flex  align-items-center" data-reaction-id="567453d0b73d6a82ac8c5abf"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-4-min.png"><span>1</span></button>
                    <div class="appreciation-dropdown dropdown">
                        <button class="hn-btn d-flex align-items-center" data-toggle="dropdown">
                            <svg class="add-icon" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu">
                            <p class="dropdown-label">Select one:</p>
                            <div class="d-flex flex-row flex-wrap">
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35484"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35485"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-2-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35486"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-3-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abf"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-4-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abd"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-5-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abc"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-6-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abb"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-7-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab9"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-8-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab8"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-9-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35487"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-10-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35488"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-11-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35489"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-12-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548a"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-13-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5aba"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-14-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ac0"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-15-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548b"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-16-min.png"></a>
                                <a class="dropdown-item  d-flex align-items-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abe"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-17-min.png"></a>
                            </div>
                        </div>
                    </div>
                </div>*/?>
            </div>
            <div class="d-flex flex-row align-items-center">
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" class="hn-flat-btn d-flex flex-row align-items-center">
                        <svg viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item d-flex flex-row align-items-center">
                            <svg viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                                <circle cx="12" cy="16" r="1"></circle>
                                <path d="M11 7h2v7h-2z"></path>
                            </svg><span>Delete</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>