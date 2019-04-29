<div class="d-flex flex-sm-row flex-md-column">
<?php $auth_user = @Auth::user(); ?>
    <div class="profile-photo">
        <a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($user_info->id))) }}"><img data-sizes="auto" src="{{$user_info->image}}" data-src="{{$user_info->image}}" data-width="400" data-height="400" alt="" class="lazyautosizes lazyloaded" sizes="246px"></a>
    </div>
    <div class="profile-main-info">
        <h1 class="profile-name"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($user_info->id))) }}">{{$user_info->full_name}}</a></h1>
        <h5 class="profile-username"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($user_info->id))) }}">@<?php echo $user_info->name; ?></a></h5>
        <p class="profile-tagline">{{$user_info->about}}</p>
        <div class="profile-buttons-wrapper d-flex flex-row align-items-center flex-wrap">
        @if($auth_user)
			@if($auth_user->id != $user_info->id)
            <button class="follow-button user_follow <?php if($following > 0){ echo 'active';}?>" data-tid="{{$user_info->id}}">
            <svg viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H9zm-3-3v-3h3v-2H6V7H4v3H1v2h3v3z"></path></svg><span><?php if($following > 0){ echo 'Following';}else{ echo 'Follow'; }?></span></button>
            @endif
        @else
            <a href="{{Config::get('constants.login_url')}}" class="follow-button log_uri_btn">Follow</a>
        @endif
            <?php /*<button class="profile-button">
                <svg viewBox="0 0 24 24">
                    <path d="M12 13L2 6.76V6c0-1.11.89-2 2-2h16a2 2 0 0 1 2 2v.75L12 13m10 5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.11l2 1.25V18h16v-7.64l2-1.25V18z"></path>
                </svg><span>Message</span></button> */?>
        </div>
    </div>
</div>
<div class="profile-meta-information">
    <div class="profile-score-area d-flex flex-row flex-wrap">
        <div class="score-unit">
            <p class="score-label">Followers</p>
            @php
                $follow_u_id = explode(',',@$user_info->followInfo->follow_by);
            @endphp
            <p class="big-num">
                <a href="javascript:void(0);" class="follow_cnt" data-followcnt="{{count($follow_u_id)}}">{{count($follow_u_id)}}</a>
            </p>
        </div>
        <div class="score-unit">
            <p class="score-label">Following</p>
            <p class="big-num"><a href="javascript:void(0);">{{$following_count}}</a></p>
        </div>
        <div class="score-unit">
            <p class="score-label">Posts</p>
            <p class="big-num"><a href="javascript:void(0);">{{$post_count}}</a></p>
        </div>
        <?php /*<div class="score-unit">
            <p class="score-label">Appreciations</p>
            <p class="big-num">1.9K</p>
        </div>*/?>
    </div>
    <?php /*<div class="profile-details">
        <div class="profile-unit d-flex flex-row align-items-center">
            <svg viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg><span>Netherlands</span></div>
        <div class="profile-unit d-flex flex-row align-items-center">
            <svg viewBox="0 0 24 24">
                <path d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5c0-1.11-.9-2-2-2h-1V1m-1 11h-5v5h5v-5z"></path>
            </svg><span>Joined January 29, 2018</span></div>
        <div class="profile-social-media d-flex flex-row align-items-center flex-wrap">
            <a href="https://twitter.com/markverleg" rel="noopener nofollow noreferrer" target="_blank">
                <svg viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                </svg>
            </a>
            <a href="https://github.com/mverleg/" rel="noopener nofollow noreferrer" target="_blank">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"></path>
                </svg>
            </a>
            <a href="https://stackoverflow.com/users/723090/mark" rel="noopener nofollow noreferrer" target="_blank">
                <svg viewBox="0 0 24 24">
                    <path d="M17.36 20.2v-5.38h1.79V22H3v-7.18h1.8v5.38h12.56M6.77 14.32l.37-1.76 8.79 1.85-.37 1.76-8.79-1.85m1.16-4.21l.76-1.61 8.14 3.78-.76 1.62-8.14-3.79m2.26-3.99l1.15-1.38 6.9 5.76-1.15 1.37-6.9-5.75m4.45-4.25L20 9.08l-1.44 1.07-5.36-7.21 1.44-1.07M6.59 18.41v-1.8h8.98v1.8H6.59z"></path>
                </svg>
            </a>
            <a href="https://markv.nl/" rel="noopener nofollow noreferrer" target="_blank">
                <svg viewBox="0 0 24 24">
                    <path d="M17.9 17.39c-.26-.8-1.01-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H8v-2h2a1 1 0 0 0 1-1V7h2a2 2 0 0 0 2-2v-.41c2.93 1.18 5 4.05 5 7.41 0 2.08-.8 3.97-2.1 5.39M11 19.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.22.21-1.79L9 15v1a2 2 0 0 0 2 2m1-16A10 10 0 0 0 2 12a10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2z"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="profile-details profile-actions d-flex justify-content-between">
        <div class="profile-unit meta-unit">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Report profile</a></li>
            </ul>
        </div>
        <div class="handle-right-sidebar">
            <button class="btn btn-hamburger d-flex flex-row align-items-center">
                <svg viewBox="0 0 500 500">
                    <g stroke="#000000" stroke-width="17.2413793" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M500 491.37931H189.655172M500 8.62068966H189.655172M500 77.5862069H189.655172M500 146.551724H327.586207M500 215.517241H327.586207M500 284.482759H327.586207M500 353.448276H327.586207M500 422.413793H189.655172M120.689655 370.689655v-68.965517H241.37931V198.275862H120.689655v-68.965517L0 250z"></path>
                    </g>
                </svg><span>More Details</span></button>
        </div>
    </div>*/?>
</div>