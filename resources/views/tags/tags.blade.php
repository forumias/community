@extends('layouts.front_layout')

@section('content')
<div class="main-wrapper d-flex flex-column justify-content-center">



<div class="d-flex flex-row justify-content-center">


@include('../Elements/left_side_bar')


<div class="feed-area profile-area">

<div class="d-flex flex-row">

<div class="feed-component">

<div class="communities-page">

<div class="post-card title-card"><h1>Follow Tags</h1>

<p>Personalize your ForumIAS experience by following the topics you care.</p>
</div>

<div class="post-card filter-bar tags-bar">

<?php /*<div class="tags-bar-wrapper d-flex flex-row align-items-center flex-nowrap">

<div class="d-flex flex-row flex-nowrap">

<span><a class="active" href="?tab=programming-languages">Programming Languages</a>
</span>

<span><a class="" href="?tab=blockchain">Blockchain</a>
</span>

<span><a class="" href="?tab=javascript">JavaScript</a>
</span>

<span><a class="" href="?tab=web-frameworks">Web Frameworks</a>
</span>

<span><a class="" href="?tab=mob``ile">Mobile</a>
</span>

<span><a class="" href="?tab=nosql">NoSQL</a>
</span>

<span><a class="" href="?tab=traditional-databases">Traditional Databases</a>
</span>

<span><a class="" href="?tab=dev-tools">Dev Tools</a>
</span>

<span><a class="" href="?tab=cloud">Cloud</a>
</span>

<span><a class="" href="?tab=design">Design</a>
</span>

<span><a class="" href="?tab=casual">Casual</a>
</span>

<span><a class="" href="?tab=new-gen">New Gen</a>
</span>

<span><a class="" href="?tab=others">Others</a>
</span>
</div>
</div>*/?>
</div>

<div class="communities-section-page d-flex flex-row flex-wrap">
@foreach($tags_listing as $tag)

<div class="single-community-widget d-flex flex-column justify-content-between">

<div>

<div class="header"><a href="#" class="community-image"><img data-sizes="auto" src="{{ asset('public/images/empty-tag.png')}}" data-src="{{ asset('public/images/empty-tag.png')}}" data-width="120" data-height="120" alt="" class="lazyautosizes lazyloaded" sizes="98px"></a><a href="#">{{$tag->title}}</a>
</div>

<div class="community-details">
<?php
$full_description = $tag->description;
if(strlen($full_description) > 100){
	$sub_string = substr($full_description,0, 100).'...';
}else{
	$sub_string = $tag->description;
}
?>
<p>{{$sub_string}}</p>
</div>
</div>

<div>
<?php 
  if(@$tag->followInfo->follow_by != ''){
    $follow_arr = explode(',',@$tag->followInfo->follow_by);
}else{
    $follow_arr = array();
}

?>
<div class="d-flex flex-row stats-box-wrapper">

<div class="stats-box"><a href="#">

<span class="big custom_follow_cnt_{{$tag->id}}" data-follow_cnt="{{count($follow_arr)}}">{{count($follow_arr)}}
</span>

<span>Followers
</span></a>
</div>

<div class="stats-box"><a href="#">

<span class="big">0
</span>

<span>Posts
</span></a>
</div>
<?php $auth = @Auth::user();

?>
</div>
@if($auth)
<?php
    
    $flag = 0;
    if(count($follow_arr)){
        $auth_id = @Auth::user()->id;
       // $pos = array_search($auth_id, $follow_arr);
        if(in_array($auth_id, $follow_arr)){
            $flag = 1;
        }
    }
?>
<button class="follow-button cmn_follow <?php if($flag == 1){ echo 'active';}?>" data-tid="{{$tag->id}}">
<?php if($flag != 1){ echo 'Follow';}else{ echo 'Following';} ?>


</button>
@else
<a class="follow-button" href="{{Config::get('constants.login_url')}}">Follow</a>
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
</div>
 @endsection