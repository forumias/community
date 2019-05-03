@extends('layouts.front_layout')

@section('content')
<div class="main-wrapper d-flex flex-column justify-content-center">



<div class="d-flex flex-row justify-content-center">


@include('../Elements/left_side_bar')


<div class="feed-area profile-area">

<div class="d-flex flex-row">

<div class="feed-component">

<div class="communities-page">

<div class="post-card title-card"><h1>Follow Groups</h1>

<p>Personalize your ForumIAS experience by following the groups you care.</p>
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

<div class="header"><a href="#" class="community-image">

<?php /*<img data-sizes="auto" src="{{ asset('public/images/empty-tag.png')}}" data-src="{{ asset('public/images/empty-tag.png')}}" data-width="120" data-height="120" alt="" class="lazyautosizes lazyloaded" sizes="98px">*/?>

	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 62.583 62.583" style="enable-background:new 0 0 62.583 62.583;" xml:space="preserve">
		<g id="group-70svg">
			<path id="path-1_66_" d="M52.69,52.824c-0.829,0-1.501-0.671-1.501-1.5c0-9.578-7.792-17.371-17.371-17.371
				s-17.372,7.793-17.372,17.371c0,0.829-0.672,1.5-1.5,1.5s-1.5-0.671-1.5-1.5c0-11.232,9.139-20.371,20.372-20.371
				s20.371,9.139,20.371,20.371C54.189,52.153,53.518,52.824,52.69,52.824z"/>
			<path id="path-2_66_" d="M33.818,33.393c-6.516,0-11.817-5.301-11.817-11.817c0-6.515,5.301-11.816,11.817-11.816
				s11.817,5.301,11.817,11.816C45.635,28.092,40.334,33.393,33.818,33.393z M33.818,12.76c-4.862,0-8.817,3.955-8.817,8.816
				c0,4.862,3.955,8.817,8.817,8.817s8.817-3.955,8.817-8.817C42.635,16.715,38.68,12.76,33.818,12.76z"/>
			<path id="path-3_54_" d="M13.045,48.51H1.5c-0.828,0-1.5-0.672-1.5-1.5c0-9.665,7.319-16.953,17.025-16.953
				c2.963,0,5.893,0.825,8.708,2.453c0.717,0.415,0.962,1.332,0.548,2.05c-0.415,0.717-1.333,0.962-2.05,0.548
				c-2.353-1.362-4.777-2.051-7.206-2.051c-7.484,0-13.247,5.256-13.952,12.453h9.972c0.828,0,1.5,0.672,1.5,1.5
				S13.873,48.51,13.045,48.51z"/>
			<path id="path-4_33_" d="M17.095,32.811c-5.529,0-10.026-4.498-10.026-10.026S11.566,12.76,17.095,12.76
				c2.678,0,5.195,1.043,7.089,2.936c0.586,0.586,0.586,1.537,0,2.122c-0.586,0.586-1.536,0.586-2.121,0
				c-1.328-1.327-3.091-2.058-4.968-2.058c-3.874,0-7.026,3.151-7.026,7.025c0,3.873,3.152,7.026,7.026,7.026
				c2.303,0,4.464-1.133,5.778-3.029c0.472-0.681,1.406-0.85,2.087-0.378c0.681,0.472,0.851,1.407,0.378,2.087
				C23.463,31.194,20.382,32.811,17.095,32.811z"/>
			<path id="path-5_16_" d="M61.083,48.51h-8.038c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5h6.456
				c-0.705-6.411-5.881-11.581-12.588-12.307c-0.735-0.079-1.304-0.683-1.337-1.422c-0.034-0.739,0.476-1.393,1.201-1.539
				c3.345-0.675,5.681-3.466,5.681-6.789c0-3.819-3.603-7.297-7.56-7.297c-0.828,0-1.5-0.671-1.5-1.5c0-0.829,0.672-1.5,1.5-1.5
				c5.625,0,10.56,4.812,10.56,10.297c0,3.166-1.466,5.993-3.845,7.818c6.482,2.469,10.97,8.626,10.97,15.739
				C62.583,47.838,61.911,48.51,61.083,48.51z"/>
		</g>
	</svg>




</a><a href="#">{{$tag->title}}</a>
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