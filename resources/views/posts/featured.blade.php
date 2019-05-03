@extends('layouts.front_layout')

@section('content')
<style>
.badge {
	padding:0!important;
}
</style>

<div class="main-wrapper d-flex flex-column justify-content-center">



<div class="d-flex flex-row justify-content-center">


@include('../Elements/left_side_bar')


<div class="feed-area flex-grow-1">

<?php $auth_user = @Auth::user(); ?>


<div class="d-flex flex-row">



<div class="feed-component">

<main class="feed-items-wrap main_append" itemprop="mainEntityOfPage" data-page="1" data-acttype="2">




<div class="post-card filter-bar">

	
<ul class="nav nav-pills">
		
<li class="nav-item">
		<a class="nav-link" href="{{ URL::to('/') }}">My space</a></li>
		
<li class="nav-item"><a class="nav-link active" href="{{ URL::to('/featured') }}">Featured</a></li>
		
<li class="nav-item"><a class="nav-link " href="{{ URL::to('/latest') }}">Latest</a></li>

	
</ul>


</div>




@php
	$n = 0;
@endphp

@foreach($stories as $story)
<div class="post-card hn-post-card ">

<div class="d-flex flex-row">

<div class="hn-post-card-data d-flex flex-grow-1 flex-wrap flex-row">

<div class="post-content"><h1><a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($story->id))) }}">{{$story->title}}</a></h1>

<div class="post-meta-data d-flex flex-row justify-content-between align-items-center flex-wrap">

<div class="d-flex flex-row flex-wrap align-items-center">

<div class="hn-post-author"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($story->userInfo->id))) }}" class="profile-pic author-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$story->userInfo->image}}" data-src="{{$story->userInfo->image}}" data-width="240" data-height="240" alt="Ryosuke's photo" class=" lazyload"></a>
</div>

<div class="d-flex flex-row align-items-center">

<div class="d-flex flex-column"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($story->userInfo->id))) }}">{{$story->userInfo->full_name}}</a>

<div class="d-flex flex-row align-items-center"><a class="username" href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($story->userInfo->id))) }}">@<?php echo $story->userInfo->name; ?></a>

<p class="date-time">

<span class="middot">·
</span><a href="#" title="February 18, 2019 9:39 PM">
<?php 
$then = $story->created_at;
$then = new DateTime($then);
 
$now = new DateTime();
 
$sinceThen = $then->diff($now);
 
//Combined
if($sinceThen->y > 0){
	echo $sinceThen->y . ' yesr(s) ago' ;
}elseif($sinceThen->m > 0){
	echo $sinceThen->m . ' month(s) ago' ;
}elseif($sinceThen->d > 0){
	echo $sinceThen->d . ' day(s) ago' ;
}elseif($sinceThen->h > 0){
	echo $sinceThen->h . ' hours(s) ago' ;
}elseif($sinceThen->i > 0){
	echo $sinceThen->i . ' minute(s) ago' ;
}elseif($sinceThen->s > 0){
	echo $sinceThen->s . ' second(s) ago' ;
}else{
	echo 'Just now';
}


?>

</a></p>
</div>
</div>
</div>
</div>
</div>

<div class="post-tags">
<ul class="list-inline">
<?php /*<li class="list-inline-item"><a href="#" class="d-flex flex-row align-items-center">

<span><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1513324674454/r1qtxW-zf.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1513324674454/r1qtxW-zf.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="40" data-height="40" alt="" class=" lazyload">
</span>

<span class="tag-name">Design
</span></a></li>*/?>
<?php
	$post_tags = explode(',',$story->tag_id);
	foreach($post_tags as $post_tag){
		
?>
<li class="list-inline-item"><a href="#" class="d-flex flex-row align-items-center">

<span><img data-sizes="auto" src="{{ asset('public/images/small-hash.png') }}" data-src="{{ asset('public/images/small-hash.png') }}" data-width="40" data-height="40" alt="" class=" lazyload">
</span>

<span class="tag-name">
<?php
	
	echo @$tags[$post_tag];
?>
</span></a></li>
<?php }?>
<?php /*<li class="list-inline-item"><a href="#" class="d-flex flex-row align-items-center">

<span><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/dnrwfr6sxylhx60mp26j/1474023086.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/dnrwfr6sxylhx60mp26j/1474023086.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="40" data-height="40" alt="" class=" lazyload">
</span>

<span class="tag-name">UX
</span></a></li>
<li class="list-inline-item"><a href="#" class="d-flex flex-row align-items-center">

<span><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/jy8ee18buuag2zbsbqai/1487144606.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/jy8ee18buuag2zbsbqai/1487144606.png?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="40" data-height="40" alt="" class=" lazyload">
</span>

<span class="tag-name">UI
</span></a></li>
<li class="list-inline-item"><a href="#" class="d-flex flex-row align-items-center">

<span><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1522266937699/ByGS7dtcG.jpeg?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1522266937699/ByGS7dtcG.jpeg?w=40&amp;h=40&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="40" data-height="40" alt="" class=" lazyload">
</span>

<span class="tag-name">Sketch
</span></a></li>*/?>
</ul>
</div>

<div class="post-card-brief">
<?php
$full_story = strip_tags($story->description);
if(strlen($full_story) > 250){
	$sub_string = substr($full_story,0, 250);
}else{
	$sub_string = $story->description;
}
?>
<p><a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($story->id))) }}"><?php echo $sub_string;?></a></p>
</div>
</div>
@if($story->img != '')
<div class="post-cover-image"><a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($story->id))) }}" class="d-flex flex-grow-1" style="background-image:url(&quot;{{ asset('public/images/posts/original/'.$story->img) }}&quot;)"></a>
</div>
@endif
</div>
</div>



<div>
<?php
	$post_likes = @$like_user_info[$story->id];
	$i = 0;
	if(is_array($post_likes['name'])){
		$n = count($post_likes['name']);
	}
//echo count($post_likes['name']);die;
?>

@if(!empty($post_likes))
	<div style="margin-bottom: 2%;">
	<h6>Liked by</h6>
	@for($i=0; $i<$n; $i++ )
		@if($i <= 2)
			<span class="badge badge-light"><img class="circle_img" height="25" width="25" src="{{@$post_likes['img'][$i]}}" title="{{@$post_likes['name'][$i]}}" /></span>
		@endif
		
	@endfor	
		
	@for($i=0; $i<$n; $i++ )
		@if($i <= 1)
			<?php echo ($i > 0)?',': '';  ?>  <span class="badge badge-light">{{@$post_likes['name'][$i]}}</span>
		@endif
		
		@if($i == 3)
			and <span class="badge badge-light"><a href="#" class="init_like_pop" data-pjhfd="{{$story->id}}" data-toggle="modal" data-target="#myModal">{{$n-2}} more</a></span>
		@endif
	@endfor
	<?php /*<span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span>*/?>

	</div>
@endif
<div class="post-card-footer d-flex flex-row justify-content-between undefined">

<div class="d-flex flex-row">

<div>


<div class="appreciation-dropdown dropdown">
 
    	
    
	<?php 
		if(@$story->likeInfo->user_ids){
			$like_ids = explode(',',@$story->likeInfo->user_ids);
			$like_count = $story->likeInfo->like_count;
		}else{
			$like_ids = array();
			$like_count = 0;
		}
		
	?>
	<button class="hn-btn  d-flex align-items-center like_btn <?php if(in_array(@$auth_user->id, $like_ids)){ echo 'active';}?> unique_like_{{$story->id}}" data-pyfdhh="{{base64_encode(convert_uuencode($story->id))}}" data-likecount="{{$like_count}}"><img src="{{ asset('public/images/app-1-min.png')}}">

	<span class="like_count"><?php if($like_count > 0){ echo $like_count;}?></span>
	</button>
</div>
</div>

<div><a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($story->id))) }}" class="hn-btn no-border d-flex align-items-center"><svg viewBox="0 0 24 24"><g transform="translate(0 2)" fill="none" fill-rule="evenodd">

<path d="M20.6225325.4084275H3.3256575c-1.442325 0-2.61159 1.16931-2.61159 2.611635V12.57675c0 1.44237 1.169265 2.611635 2.61159 2.611635H4.85958V20.6154l5.5014525-5.427015H20.62254c1.442325 0 2.61168-1.169265 2.61168-2.611635V3.020055C23.2342125 1.5777375 22.06485.4084275 20.6225325.4084275z" fill="#FFFFFF"></path>

<path d="M20.6225325.4084275H3.3256575c-1.442325 0-2.61159 1.16931-2.61159 2.611635V12.57675c0 1.44237 1.169265 2.611635 2.61159 2.611635H4.85958V20.6154l5.5014525-5.427015H20.62254c1.442325 0 2.61168-1.169265 2.61168-2.611635V3.020055C23.2342125 1.5777375 22.06485.4084275 20.6225325.4084275z" fill="#B9D4F8"></path>

<path d="M23.234955 3.0211575V12.57615c0 1.439985-1.170045 2.609985-2.61003 2.609985h-10.2675l-5.49747 5.4300375V15.186135H3.3224175c-1.439985 0-2.609985-1.17-2.609985-2.609985V3.0211575c0-1.439985 1.17-2.609985 2.609985-2.609985h1.20003c-.7874925.1349925-2.28003 1.012485-2.1825225 5.82747.0525075 2.2424925.5099925 4.81503 2.625015 6.0150225 1.9244475 1.0963275 4.71138.9066225 6.872205.9664725 1.800435.0498675 3.603135.017985 5.4006675-.09576 1.4116875-.0893325 3.3002775.05388 4.4716575-.8897325 1.1411475-.898515.945945-2.6100675 1.0454775-3.9034725.0824925-1.0725375.1349925-2.1525.15747-3.2250375.03003-1.0049775.1350375-2.1449925.060015-3.2249925.165015.345015.2625225.7275225.2625225 1.140015z" fill="#659BDB"></path><circle fill="#FFFFFF" cx="6.5624625" cy="7.798425" r="1.5577125"></circle><circle fill="#FFFFFF" cx="11.986035" cy="7.798425" r="1.55769"></circle><circle fill="#FFFFFF" cx="17.409585" cy="7.798425" r="1.55769"></circle>

<path d="M4.662105.6249s7.2421875.6328125 11.71875 1.0546875 5.709165.3515625 6.28125 2.8125C23.23419 6.953025 23.23419 7.3749 23.23419 7.3749s.3502725-5.8659375-.743715-6.1790625c-1.0939875-.313125.4997625-.951525-4.2814875-.784665C13.42773.5780325 4.662105.6249 4.662105.6249z" fill="#FFFFFF"></path><g stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round">

<path d="M4.859715 15.1883775H3.3256725c-1.442325 0-2.6115825-1.16925-2.6115825-2.61165v-9.55665c0-1.442325 1.1692575-2.61165 2.6115825-2.61165h17.296875c1.442325 0 2.6116425 1.169325 2.6116425 2.61165v9.55665c0 1.4424-1.1693175 2.61165-2.6116425 2.61165h-10.2615M4.859565 15.1883775v5.427l5.5014825-5.427"></path></g><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="6.5624625" cy="7.798425" r="1.5577125"></circle><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="11.986035" cy="7.798425" r="1.55769"></circle><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="17.409585" cy="7.798425" r="1.55769"></circle></g></svg>

<span>{{count($story->commentInfo)}}
</span></a>
</div>
</div>

<div class="d-flex flex-row">

<?php /*<div><button title="Bookmark" class="d-flex align-items-center  hide-mobile hn-flat-btn"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path></svg>

<span class="show-mobile">Bookmark
</span></button>
</div>*/?>

<div class="hide-mobile1
"><a href="https://api.whatsapp.com/send?text={{$story->title}} {{ URL::to('/post/detail/'.base64_encode(convert_uuencode($story->id))) }}" target="_blank" rel="noopener noreferrer" class="hn-flat-btn tweet-btn d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg></a>
</div>

<div class="dropdown"><?php /*<button class="hn-flat-btn d-flex align-items-center" data-toggle="dropdown"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"></path></svg></button>

<div class="dropdown-menu dropdown-menu-right social-share-menu">

<div class="social-share-items-wrap d-flex flex-row flex-wrap">

<div class="dropdown-item">
<input type="text" readonly="" value="{{$story->title}}">
</div><a class="dropdown-item d-flex align-items-center justify-content-center twitter" href="https://twitter.com/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6&amp;text=Design%20Collaboration%20Tools%20in%202019%20by%20%40whoisryosuke&amp;via=hashnode" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24">

<path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center whatsapp" href="https://api.whatsapp.com/send?text=Design%20Collaboration%20Tools%20in%202019%20by%20Ryosuke https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24">

<path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65C2.57 15.8 2 13.97 2 12A10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96C8.69 19.46 10.28 20 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/dialog/share?app_id=176729339340246&amp;href=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6&amp;redirect_uri=https://hashnode.com"><svg viewBox="0 0 24 24">

<path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center telegram" href="https://t.me/share/url?text=Design%20Collaboration%20Tools%20in%202019%20by%20Ryosuke&amp;url=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24">

<path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center linkedin" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/cws/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6"><svg viewBox="0 0 24 24">

<path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center reddit" target="_blank" rel="noopener noreferrer" href="http://www.reddit.com/submit?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6&amp;title=Design%20Collaboration%20Tools%20in%202019%20by%20Ryosuke"><svg viewBox="0 0 24 24">

<path d="M22 11.5c0-1.4-1.1-2.5-2.5-2.5-.6 0-1.2.2-1.6.6-1.5-.9-3.3-1.5-5.4-1.6l1.1-4L17 5a2 2 0 0 0 2 2 2 2 0 0 0 2-2 2 2 0 0 0-2-2c-.7 0-1.4.4-1.7 1l-4-1c-.3-.1-.5.1-.6.4L11.5 8c-2 .1-3.9.7-5.4 1.6-.4-.4-1-.6-1.6-.6C3.1 9 2 10.1 2 11.5c0 .9.4 1.6 1.1 2.1l-.1.9c0 3.6 4 6.5 9 6.5s9-2.9 9-6.5l-.1-.9c.7-.5 1.1-1.2 1.1-2.1m-13 .3c.7 0 1.2.6 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.5-1.2-1.2.5-1.2 1.2-1.2m6.8 5.4c-1.8 1.1-5.8 1.1-7.6 0-.2-.2-.3-.5-.1-.7.2-.2.5-.3.7-.1 1.2.9 5.2.9 6.4 0 .2-.2.5-.1.7.1.2.2.1.5-.1.7m-.8-3c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.7 0 1.2.6 1.2 1.2 0 .7-.5 1.2-1.2 1.2z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center hackernews" target="_blank" rel="noopener noreferrer" href="http://news.ycombinator.com/submitlink?u=https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6&amp;t=Design%20Collaboration%20Tools%20in%202019%20by%20Ryosuke"><svg viewBox="0 0 24 24">

<path d="M2 2h20v20H2V2m9.25 15.5h1.5v-4.44L16 7h-1.5L12 11.66 9.5 7H8l3.25 6.06v4.44z"></path></svg></a><a class="dropdown-item d-flex align-items-center justify-content-center email" target="_blank" href="mailto:?subject=Design%20Collaboration%20Tools%20in%202019%20by%20Ryosuke&amp;body=Check out this response: https%3A%2F%2Fhashnode.com%2Fpost%2Fdesign-collaboration-tools-in-2019-cjsav52wl01tshws1t0kg27i6" title="Send via Email"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"></path></svg></a>
</div>
</div>*/?>
</div>
@if($auth_user)
<div class="dropdown"><button class="hn-flat-btn d-flex align-items-center show_op_btn" data-postid="{{$story->id}}" data-toggle="dropdown"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg></button>

<div class="dropdown-menu dropdown-menu-right">
<?php /*<button title="Bookmark" class="d-flex align-items-center  show-mobile dropdown-item"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path></svg>

<span class="show-mobile">Bookmark
</span></button>*/?>
@if($auth_user->id == $story->user_id)
<a class="dropdown-item d-flex align-items-center " href="{{ URL::to('/delete_action?cmnType=1&cmnid='.$story->id) }}"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M19.29 17.29L18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.9 0 1.34-1.08.71-1.71zM16 17H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2z"></path></svg>

<span>Delete
</span></a>
@endif
<a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#reportModal"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path><circle cx="12" cy="16" r="1"></circle>

<path d="M11 7h2v7h-2z"></path></svg>

<span class="cmn_report" data-postid="{{$story->id}}">Report
</span></a>
</div>

</div>
@endif
</div>
</div>

<div class="post-footer-elem">
</div>
</div>
</div>
@php
	$n++;
@endphp

@endforeach
@if($n == 0)
	<div class="post-card hn-post-card ">

		<div class="d-flex flex-row">

			<div class="hn-post-card-data d-flex flex-grow-1 flex-wrap flex-row">
				There is no featured post found.
			</div>
		</div>
	</div>

@endif




</main>
<div class="text-center feed_loader" style="display:none;">
<img class="img-responsive" style="height:100px" src="{{ asset('public/images/loader.gif')}}">
</div>


</div>


<!--- RIGHT -- SIDEBAR -->
@include('../Elements/rigth_side_bar')
<!--------Report pop-up--------------->
@include('../Elements/posts/report_popup')

@include('../Elements/pop-ups')
</div>
</div>
</div>
</div>
 @endsection