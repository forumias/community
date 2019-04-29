@extends('layouts.front_layout')

@section('content')
<div class="main-wrapper d-flex flex-column justify-content-center">
<div class="d-flex flex-row justify-content-center">
@include('../Elements/left_side_bar')
<div class="feed-area profile-area">
    <div class="d-flex flex-row">
        <div class="feed-component">
            <div class="post-card title-card">
                <h1>Follow Users</h1>

                <p>Personalize your ForumIAS experience by following the users you care.</p>
                <?php $auth_user = @Auth::user(); ?>
            </div>
            @if(!$auth_user)
            <span class="log_uri" data-loguri="{{Config::get('constants.login_url')}}"></span>
            @endif
            <div class="post-card users-wrapper-card d-flex flex-row flex-wrap">
                @foreach($users_listing as $one_user)
                    <div class="single-user-unit">
                        <div class="user-photo">
                            <a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($one_user->id))) }}" target="_blank"><img src="{{$one_user->image}}" style="height:80px; width:80px;"></a>
                        </div>
                        <div class="user-meta-data"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($one_user->id))) }}" class="user-name" target="_blank">{{$one_user->full_name}}</a>
                            <p class="tagline">{{$one_user->about}}</p>
                            <?php /*<div class="user-info">
                                <div>Total Appreciations</div>
                                <div class="data">1.8K</div>
                            </div>*/?>
                            <div class="user-info">
                                <div>Joined on</div>
                                <div class="data">{{$one_user->created_at}}</div>
                            </div>
                            @if($auth_user)
                            <button class="follow-button cmn_follow <?php if(!empty(@$one_user->followInfo)){ echo 'active';}?>" data-tid="{{$one_user->id}}"><?php if(!empty(@$one_user->followInfo)){ echo 'Following';}else{ echo 'Follow';}?></button>
                            @else
                            <button class="follow-button log_uri_btn">Follow</button>
                            @endif
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection