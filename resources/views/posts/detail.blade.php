@extends('layouts.front_layout')

@section('content')
<style>
.create-post-widget {
    margin: 0rem !important;
}
.pub-about-me {
    margin-bottom: 0rem !important; 
}
.badge {
	padding:0!important;
}
</style>
<div class="main-wrapper d-flex flex-column justify-content-center">

    <div class="d-flex flex-row justify-content-center">
	<?php $auth_user = @Auth::user(); ?>
        <div class="feed-area full-width-area">

            <div class="d-flex flex-row">

                <div class="story-component">
                    <article class="feed-items-wrap" itemprop="mainEntity" itemscope="" itemtype="http://schema.org/Article">
                        <meta itemprop="dateCreated" content="2019-04-14T10:17:52.894Z">
                        <meta itemprop="datePublished" content="2019-04-14T10:17:52.894Z">
                        <meta itemprop="dateModified" content="2019-04-14T10:17:52.894Z">

                        <span itemscope="" itemprop="publisher" itemtype="http://schema.org/Organization">
<meta itemprop="name" content="Hashnode">

<span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
<meta itemprop="url" content="{{$post_detail->userInfo->image}}">
</span>
                        </span>
                        <meta itemprop="image" content="{{$post_detail->userInfo->image}}">
                        <meta itemprop="keywords" content="Java,android apps,Android,Productivity">

                        <div class="post-card main-card pub-card" itemprop="mainEntityOfPage">

                            <div class="post-card-data">

                                <div>

                                    <div class="post-card-details ">

                                        <div class="post-card-title">

                                            <div class="post-card-title-meta story-title-meta">
                                                <h1 class="story-title" itemprop="name">{{$post_detail->title}}</h1>

                                                <div class="d-flex flex-column align-items-center" itemprop="author" itemscope="" itemtype="http://schema.org/Person">

                                                    <div class="d-flex flex-row align-items-center story-name-meta">
                                                        <meta itemprop="image" content="{{$post_detail->userInfo->image}}">
                                                        <a href="#" class="profile-pic author-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$post_detail->userInfo->image}}" data-width="100" data-height="100" alt="Ali Tabrizi's photo" class="lazyautosizes lazyloaded" sizes="40px" style="height:40px; width:40px;"></a>

                                                        <p class="author-name">
                                                            <a href="#">

                                                                <span itemprop="name">{{$post_detail->userInfo->full_name}}
</span></a>
                                                        </p>

                                                       
                                                    </div>
													
                                                    <p class="date-time">Published <a href="/post/save-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76" title="April 14, 2019 3:47 PM">
													
													<?php 
														$then = $post_detail->created_at;
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

                                                <div class="post-tags d-flex flex-row flex-wrap  justify-content-center">
													@foreach($tags as $key=>$tag)
														<a href="{{URL::to('/tag_detail'.base64_encode(convert_uuencode($key)))}}" class="d-flex flex-row align-items-center">

                                                        <span><img data-sizes="auto" src="{{ asset('public/images/small-hash.png') }}" data-src="{{ asset('public/images/small-hash.png') }}" data-width="40" data-height="40" alt="" class="lazyautosizes lazyloaded" sizes="20px">
														</span>

                                                        <span class="tag-name">{{$tag}}
														</span></a>
													@endforeach
                                                    
                                                </div>

                                                <div class="featured-cover-image" style="background-image: url(&quot;{{ asset('public/images/posts/original/'.$post_detail->img) }}&quot;);">
                                                </div>
                                            </div>
                                        </div>
                                        <meta itemprop="headline" content="Save your phone’s battery by being notified whenever it’s full">

                                        <div class="post-card-content" itemprop="text">

                                           <?php echo nl2br( $post_detail->description );?>

                                        </div>
                                    </div>
                                </div>

                                <div>

                                    <div class="post-card-footer d-flex flex-row justify-content-between main-footer" style="z-index: auto; position: static; bottom: 0px; top: auto;">

                                        <div class="d-flex flex-row">

                                            <div>
												<?php
													$post_likes = @$like_user_info;
													$i = 0;
													if(is_array(@$post_likes['name'])){
														$n = count(@$post_likes['name']);
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
															<?php echo ($i>0)?',': '';  ?> <span class="badge badge-light">{{@$post_likes['name'][$i]}}</span>
														@endif
														
														@if($i == 3)
															and <span class="badge badge-light"><a href="javascript:void(0);" class="init_like_pop" data-pjhfd="{{$post_detail->id}}" data-toggle="modal" data-target="#myModal">{{$n-2}} more</a></span>
														@endif
													@endfor
													<?php /*<span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span><span class="badge badge-light">Light</span>*/?>

													</div>
												@endif
												

                                                <div class="d-flex flex-row align-items-center flex-wrap multiple-reactions-wrap">
												<?php 
													if(@$post_detail->likeInfo->user_ids){
														$like_ids = explode(',',@$post_detail->likeInfo->user_ids);
														$like_count = $post_detail->likeInfo->like_count;
													}else{
														$like_ids = array();
														$like_count = 0;
													}
													
												?>
														
                                                    <button class="hn-btn d-flex align-items-center like_btn <?php if(in_array(@$auth_user->id, $like_ids)){ echo 'active';}?> unique_like_{{$post_detail->id}}" data-reaction-id="5c090d96c2a9c2a674d35484" data-pyfdhh="{{base64_encode(convert_uuencode($post_detail->id))}}" data-likecount="{{$like_count}}">
													<img src="{{ asset('public/images/app-1-min.png')}}"/>
													<span class="like_count"><?php if($like_count > 0){ echo $like_count;}?></span>
													</button>

                                                    <?php /*<div class="appreciation-dropdown dropdown">
                                                        <button class="hn-btn d-flex align-items-center" data-toggle="dropdown">
                                                            <svg class="add-icon" viewBox="0 0 24 24">

                                                                <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="dropdown-menu">

                                                            <p class="dropdown-label">Select one:</p>

                                                            <div class="d-flex flex-row flex-wrap">
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35484"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35485"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-2-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35486"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-3-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abf"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-4-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abd"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-5-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abc"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-6-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abb"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-7-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab9"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-8-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab8"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-9-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35487"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-10-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35488"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-11-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35489"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-12-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548a"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-13-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5aba"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-14-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ac0"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-15-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548b"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-16-min.png"></a>
                                                                <a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abe"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-17-min.png"></a>
                                                            </div>
                                                        </div>
                                                    </div>*/?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row">

                                           <?php /* <div>
                                                <button title="Bookmark" class="d-flex align-items-center  hide-mobile hn-flat-btn">
                                                    <svg viewBox="0 0 24 24">

                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                        <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
                                                    </svg>

                                                    <span class="show-mobile">Bookmark
</span></button>
                                            </div>

                                            <div class="hide-mobile">
                                                <a href="https://twitter.com/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76&amp;text=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20%40alitabryzy&amp;via=hashnode" target="_blank" rel="noopener noreferrer" class="hn-flat-btn tweet-btn d-flex align-items-center">
                                                    <svg viewBox="0 0 24 24">

                                                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="dropdown">
                                                <button class="hn-flat-btn d-flex align-items-center" data-toggle="dropdown">
                                                    <svg viewBox="0 0 24 24">

                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                        <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"></path>
                                                    </svg>
                                                </button>

                                                <div class="dropdown-menu dropdown-menu-right social-share-menu">

                                                    <div class="social-share-items-wrap d-flex flex-row flex-wrap">

                                                        <div class="dropdown-item">
                                                            <input type="text" readonly="" value="https://hashnode.com/post/save-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76">
                                                        </div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center twitter" href="https://twitter.com/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76&amp;text=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20%40alitabryzy&amp;via=hashnode" target="_blank" rel="noopener noreferrer">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center whatsapp" href="https://api.whatsapp.com/send?text=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20Ali%20Tabrizi https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76" target="_blank" rel="noopener noreferrer">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65C2.57 15.8 2 13.97 2 12A10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96C8.69 19.46 10.28 20 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/dialog/share?app_id=176729339340246&amp;href=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76&amp;redirect_uri=https://hashnode.com">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center telegram" href="https://t.me/share/url?text=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20Ali%20Tabrizi&amp;url=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76" target="_blank" rel="noopener noreferrer">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center linkedin" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/cws/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center reddit" target="_blank" rel="noopener noreferrer" href="http://www.reddit.com/submit?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76&amp;title=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20Ali%20Tabrizi">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M22 11.5c0-1.4-1.1-2.5-2.5-2.5-.6 0-1.2.2-1.6.6-1.5-.9-3.3-1.5-5.4-1.6l1.1-4L17 5a2 2 0 0 0 2 2 2 2 0 0 0 2-2 2 2 0 0 0-2-2c-.7 0-1.4.4-1.7 1l-4-1c-.3-.1-.5.1-.6.4L11.5 8c-2 .1-3.9.7-5.4 1.6-.4-.4-1-.6-1.6-.6C3.1 9 2 10.1 2 11.5c0 .9.4 1.6 1.1 2.1l-.1.9c0 3.6 4 6.5 9 6.5s9-2.9 9-6.5l-.1-.9c.7-.5 1.1-1.2 1.1-2.1m-13 .3c.7 0 1.2.6 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.5-1.2-1.2.5-1.2 1.2-1.2m6.8 5.4c-1.8 1.1-5.8 1.1-7.6 0-.2-.2-.3-.5-.1-.7.2-.2.5-.3.7-.1 1.2.9 5.2.9 6.4 0 .2-.2.5-.1.7.1.2.2.1.5-.1.7m-.8-3c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.7 0 1.2.6 1.2 1.2 0 .7-.5 1.2-1.2 1.2z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center hackernews" target="_blank" rel="noopener noreferrer" href="http://news.ycombinator.com/submitlink?u=https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76&amp;t=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20Ali%20Tabrizi">
                                                            <svg viewBox="0 0 24 24">

                                                                <path d="M2 2h20v20H2V2m9.25 15.5h1.5v-4.44L16 7h-1.5L12 11.66 9.5 7H8l3.25 6.06v4.44z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-center email" target="_blank" href="mailto:?subject=Save%20your%20phone%E2%80%99s%20battery%20by%20being%20notified%20whenever%20it%E2%80%99s%20full%20by%20Ali%20Tabrizi&amp;body=Check out this response: https%3A%2F%2Fhashnode.com%2Fpost%2Fsave-your-phones-battery-by-being-notified-whenever-its-full-cjugrzxmo004gmts1iwpbrt76" title="Send via Email">
                                                            <svg viewBox="0 0 24 24">

                                                                <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                                <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> */?>
										@if(@$auth_user)
                                            <div class="dropdown">
                                                <button class="hn-flat-btn d-flex align-items-center" data-toggle="dropdown" aria-expanded="false">
                                                    <svg viewBox="0 0 24 24">

                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                                    </svg>
                                                </button>

                                                <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; transform: translate3d(-122px, -92px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <?php /*    <button title="Bookmark" class="d-flex align-items-center  show-mobile dropdown-item">
                                                        <svg viewBox="0 0 24 24">

                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                            <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
                                                        </svg>

                                                        <span class="show-mobile">Bookmark
</span></button>*/?>
													@if($post_detail->user_id == @$auth_user->id )
                                                    <a class="dropdown-item d-flex align-items-center " href="{{ URL::to('/delete_action?cmnType=1&cmnid='.$post_detail->id) }}">
                                                        <svg viewBox="0 0 24 24">

                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                            <path d="M19.29 17.29L18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.9 0 1.34-1.08.71-1.71zM16 17H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2z"></path>
                                                        </svg>

                                                        <span class="delete_act" data-cmnType="1" data-uuttrr="{{$post_detail->id}}">Delete
</span></a>
													@endif
													
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg viewBox="0 0 24 24">

                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>

                                                            <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                                                            <circle cx="12" cy="16" r="1"></circle>

                                                            <path d="M11 7h2v7h-2z"></path>
                                                        </svg>

                                                        <span>Report
</span></a>
													
                                                </div>
                                            </div>
											@endif
                                        </div>
                                    </div>

                                    <?php /*<div style="display: flex; width: 898px; height: 87px; float: none;">
                                    </div>*/?>

                                    <div class="post-footer-elem">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pub-about-me d-flex flex-row flex-wrap">

                            <div class="profile-image">
                                <a href="#" class="profile-pic author-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$post_detail->userInfo->image}}" data-src="{{$post_detail->userInfo->image}}" data-width="360" data-height="360" alt="{{$post_detail->userInfo->full_name}}'s photo" class="lazyautosizes lazyloaded" sizes="120px" style="height: 100px;width:120px;"></a>
                            </div>

                            <div class="content">
                                <h3><a href="#">{{$post_detail->userInfo->full_name}}</a></h3>

                                <div class="content-data content-tagline">{{$post_detail->userInfo->about}}
                                </div>

                               <?php /* <div class="pub-author-social d-flex flex-row flex-wrap">

                                    <p class="d-flex flex-row align-items-center">
                                        <svg viewBox="0 0 24 24">

                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>

                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                        </svg>

                                        <span>Istanbul/Turkey
</span></p>

                                    <span class="d-flex flex-row"><a href="http://github.com/alitabryzy" target="_blank" rel="noopener nofollow noreferrer" class="d-flex flex-row align-items-center"><svg viewBox="0 0 24 24">

<path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"></path></svg>

<span>alitabryzy
</span></a>
                                    <a href="https://twitter.com/alitabryzy" target="_blank" rel="noopener nofollow noreferrer" class="d-flex flex-row align-items-center">
                                        <svg viewBox="0 0 24 24">

                                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                                        </svg>

                                        <span>alitabryzy
</span></a>
                                    </span>
                                </div>*/?>

                                <div class="btn-wrap d-flex flex-row flex-wrap align-items-center">
									@if($auth_user)
										@if($auth_user->id != $post_detail->user_id)
										<button class="follow-button cmn_follow <?php if($following > 0){ echo 'active';}?>" data-tid="{{$post_detail->user_id}}"><?php if($following > 0){ echo 'Following';}else{ echo 'Follow'; }?></button>
										@endif
									@else
										<a href="{{Config::get('constants.login_url')}}" class="follow-button log_uri_btn">Follow</a>
									@endif
                                </div>
                            </div>
                        </div>
						
						@if($auth_user)
<!---------------------Editor ------------------>
						
                        <div class="write-card">
							<div class="write-header">
								<div class="d-flex flex-row align-items-center ">
									<a href="/@john123" class="profile-details"><img data-sizes="auto" src="{{$auth_user->image}}" data-src="{{$auth_user->image}}" data-width="70" data-height="70" alt="" class="lazyautosizes lazyloaded" sizes="40px"></a><a href="#" class="profile-details"><span>{{$auth_user->full_name}}</span></a></div>
							</div>
							<div>
								<div class="create-post-widget">
									<div class="create-toolbar">
										<div class="toolbar-tabs d-flex flex-row justify-content-between align-items-center">
											
										</div>
									</div>
									<div style="position: relative;">
										<div class="create-writearea">
											<textarea name="editor" id="comment_text_editor" placeholder="Write your comment…" style="overflow: hidden; overflow-wrap: break-word; height: 180px;"></textarea>
										</div>
										
									</div>
								</div>
								<div class="write-footer d-flex flex-row align-items-center justify-content-between">
									<p></p>
									<div class="">
										<button class="btn btn-success submit-btn comment_submit" data-tjadh="<?php echo base64_encode( convert_uuencode($auth_user->id))?>" data-ksjdh="<?php echo base64_encode( convert_uuencode($post_detail->id))?>">Submit</button>
									</div>
								</div>
							</div>
						</div>
						<!-------------editor end-------------------->
						@else
							<div class="post-card d-flex align-items-center write-comment-pre-placeholder"><img data-sizes="auto" src="{{Config::get('constants.default_user_img')}}" data-src="{{Config::get('constants.default_user_img')}}" data-width="70" data-height="70" alt="" class="profile-photo lazyautosizes lazyloaded" sizes="40px"><a href="{{Config::get('constants.login_url')}}" class="write-text-handle flex-fill log_uri_btn">Write your comment…</a></div>
						
						@endif

                        <span itemprop="interactionStatistic" itemscope="" itemtype="http://schema.org/InteractionCounter">
<meta itemprop="interactionType" content="http://schema.org/CommentAction">
<meta itemprop="userInteractionCount" content="0">
</span>
						
						@if($comment_count == 0)
                        <div id="main_comment">
							<?php //echo 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk:'.$comment_count;?>
                            <div class="responses-default-placeholder">
                                <svg viewBox="0 0 1000 1000">
                                    <g>

                                        <path d="M438.562 680.794l-25.097-25.097-21.213 21.213 46.31 46.311 109.563-109.563-21.213-21.213zM139.29 433.663h33.869v59.963c0 5.525 3.038 10.604 7.906 13.217 2.222 1.192 4.66 1.783 7.093 1.783 2.898 0 5.788-.839 8.292-2.5l109.256-72.464h283.878c29.938 0 54.295-24.356 54.295-54.294V194.165c0-29.938-24.356-54.294-54.295-54.294H139.29c-29.938 0-54.295 24.356-54.295 54.294V379.37c0 29.937 24.357 54.293 54.295 54.293zm-24.295-239.498c0-13.396 10.898-24.294 24.295-24.294h450.294c13.396 0 24.295 10.898 24.295 24.294V379.37c0 13.396-10.898 24.294-24.295 24.294h-288.4c-2.949 0-5.833.87-8.291 2.5L203.16 465.68v-47.015c0-8.284-6.716-15-15-15h-48.87c-13.396 0-24.295-10.898-24.295-24.294V194.165z"></path>

                                        <path d="M187.848 230.603h171.018v30H187.848zM187.848 315.248h354.035v30H187.848zM793.363 861.123V801.16h33.869c29.938 0 54.295-24.356 54.295-54.294V561.661c0-29.938-24.356-54.294-54.295-54.294H376.938c-29.938 0-54.295 24.356-54.295 54.294v185.205c0 29.938 24.356 54.294 54.295 54.294h283.878l109.256 72.463c2.504 1.661 5.394 2.5 8.292 2.5 2.433 0 4.871-.591 7.093-1.783 4.868-2.614 7.906-7.692 7.906-13.217zm-15-89.963c-8.284 0-15 6.716-15 15v47.015L673.63 773.66c-2.458-1.63-5.342-2.5-8.291-2.5h-288.4c-13.396 0-24.295-10.898-24.295-24.294V561.661c0-13.396 10.898-24.294 24.295-24.294h450.294c13.396 0 24.295 10.898 24.295 24.294v185.205c0 13.396-10.898 24.294-24.295 24.294h-48.87z"></path>

                                        <path d="M590.056 598.099h116.933v30H590.056zM590.056 682.745h209.285v30H590.056z"></path>
                                    </g>
                                </svg>

                                <p>Be the first one to comment</p>
                            </div>
                        </div>
						@else
			<div id="main_comment" data-checkmain="1">
					@foreach($comment_listing as $one_comment)
				<div>
				<?php //echo 'tttttttttttttttttttttttttttttttttttttt:'.$comment_count;?>
					<div class="post-card main-card response-card response-card " itemscope="" itemtype="http://schema.org/Comment" itemprop="comment" id="cjul7mmim0007xrs10v1pby16">
						<div class="post-card-data">
							<div class="post-card-details">
								<div class="post-card-header d-flex flex-row justify-content-between ">
									<div class="d-flex flex-row align-items-center" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
										<div>
											<meta itemprop="image" content="{{$one_comment->userInfo->image}}">
											<meta itemprop="name" content="{{$one_comment->userInfo->full_name}}">
											<a href="#" class="profile-pic author-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$one_comment->userInfo->image}}" data-src="{{$one_comment->userInfo->image}}" data-width="70" data-height="70" alt="{{$one_comment->userInfo->full_name}}'s photo" class="lazyautosizes lazyloaded" sizes="40px" style="height:40px; width:40px"></a>
										</div>
										<div class="author-name-meta d-flex flex-wrap align-items-center">
											<p class="author-name"><a href="#">{{$one_comment->userInfo->full_name}}</a></p>
											<p>·</p>
											
											<p class="date-time"><a href="{{url()->full()}}" title="{{$one_comment->created_at}}" class="date-time">
											<?php 
											$then = $one_comment->created_at;
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
									<meta itemprop="url" content="{{url()->full()}}">
								</div>
								<meta itemprop="dateCreated" content="2019-04-17T12:46:30.527Z">
								<div class="post-card-content " itemprop="text">
									<p><?php echo nl2br($one_comment->description);?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="post-card-footer d-flex flex-row justify-content-between">
								<div class="d-flex flex-row align-items-center">
									<div class="d-flex flex-row align-items-center flex-wrap multiple-reactions-wrap">
										<?php /*<meta itemprop="upvoteCount" content="7">
										<button class="hn-btn d-flex  align-items-center" data-reaction-id="567453d0b73d6a82ac8c5abf"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-4-min.png"><span>4</span></button>
										<button class="hn-btn d-flex  align-items-center" data-reaction-id="567453d0b73d6a82ac8c5abb"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-7-min.png"><span>3</span></button>
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
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35484"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35485"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-2-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35486"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-3-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abf"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-4-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abd"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-5-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abc"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-6-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abb"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-7-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab9"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-8-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ab8"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-9-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35487"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-10-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35488"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-11-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d35489"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-12-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548a"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-13-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5aba"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-14-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5ac0"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-15-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="5c090d96c2a9c2a674d3548b"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-16-min.png"></a>
													<a class="dropdown-item  d-flex align-items-center justify-content-center" href="#" data-reaction-id="567453d0b73d6a82ac8c5abe"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-17-min.png"></a>
												</div>
											</div>
										</div>*/?>
									</div>
								</div>
								<?php
									// echo 'Auth_id: '.@$auth_user->id;
									// echo '</br>comment user id: '.$one_comment->user_id;
									// echo '</br>post_detail user id: '.$post_detail->user_id;
									// die;
								?>
								<div class="d-flex flex-row align-items-center right-side-items">
									@if(@$auth_user->id == $one_comment->user_id || $post_detail->user_id == @$auth_user->id)
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" class="hn-flat-btn d-flex flex-row align-items-center">
											<svg viewBox="0 0 24 24">
												<path fill="none" d="M0 0h24v24H0V0z"></path>
												<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item d-flex flex-row align-items-center" href="{{ URL::to('/delete_action?cmnType=2&cmnid='.$one_comment->id) }}">
												<svg viewBox="0 0 24 24">
													<path fill="none" d="M0 0h24v24H0V0z"></path>
													<path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
													<circle cx="12" cy="16" r="1"></circle>
													<path d="M11 7h2v7h-2z"></path>
												</svg><span class="delete_act" data-cmnType="2" data-uuttrr="{{$one_comment->id}}">Delete</span></a>
										</div>
									</div>
									@endif
									<?php /*<div>
										<a href="https://twitter.com/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16&amp;text=%40minecrawlerx's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka&amp;via=hashnode" target="_blank" class="hn-flat-btn tweet-btn d-flex align-items-center">
											<svg viewBox="0 0 24 24">
												<path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
											</svg>
										</a>
									</div>
									<a href="#" title="Save" class="hn-flat-btn d-flex flex-row align-items-center ">
										<svg viewBox="0 0 24 24">
											<path fill="none" d="M0 0h24v24H0V0z"></path>
											<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
										</svg>
									</a>
									<div class="dropdown">
										<button class="hn-flat-btn d-flex align-items-center" data-toggle="dropdown">
											<svg viewBox="0 0 24 24">
												<path fill="none" d="M0 0h24v24H0V0z"></path>
												<path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"></path>
											</svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right social-share-menu">
											<div class="social-share-items-wrap d-flex flex-row flex-wrap">
												<div class="dropdown-item">
													<input type="text" readonly="" value="https://hashnode.com/post/meet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol#cjul7mmim0007xrs10v1pby16">
												</div>
												<a class="dropdown-item d-flex align-items-center justify-content-center twitter" href="https://twitter.com/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16&amp;text=%40minecrawlerx's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka&amp;via=hashnode" target="_blank" rel="noopener noreferrer" title="Tweet this">
													<svg viewBox="0 0 24 24">
														<path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center whatsapp" href="https://api.whatsapp.com/send?text=Marco%20Alka's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16" target="_blank" rel="noopener noreferrer" title="Share on Whatsapp">
													<svg viewBox="0 0 24 24">
														<path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65C2.57 15.8 2 13.97 2 12A10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96C8.69 19.46 10.28 20 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/dialog/share?app_id=176729339340246&amp;href=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16&amp;redirect_uri=https://hashnode.com" title="Share on Facebook">
													<svg viewBox="0 0 24 24">
														<path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center telegram" href="https://t.me/share/url?text=Marco%20Alka's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka&amp;url=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16" target="_blank" rel="noopener noreferrer" title="Share on Telegram">
													<svg viewBox="0 0 24 24">
														<path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center linkedin" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/cws/share?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16" title="Share on LinkedIn">
													<svg viewBox="0 0 24 24">
														<path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center reddit" target="_blank" rel="noopener noreferrer" href="http://www.reddit.com/submit?url=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16&amp;title=Marco%20Alka's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka" title="Share on Reddit">
													<svg viewBox="0 0 24 24">
														<path d="M22 11.5c0-1.4-1.1-2.5-2.5-2.5-.6 0-1.2.2-1.6.6-1.5-.9-3.3-1.5-5.4-1.6l1.1-4L17 5a2 2 0 0 0 2 2 2 2 0 0 0 2-2 2 2 0 0 0-2-2c-.7 0-1.4.4-1.7 1l-4-1c-.3-.1-.5.1-.6.4L11.5 8c-2 .1-3.9.7-5.4 1.6-.4-.4-1-.6-1.6-.6C3.1 9 2 10.1 2 11.5c0 .9.4 1.6 1.1 2.1l-.1.9c0 3.6 4 6.5 9 6.5s9-2.9 9-6.5l-.1-.9c.7-.5 1.1-1.2 1.1-2.1m-13 .3c.7 0 1.2.6 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.5-1.2-1.2.5-1.2 1.2-1.2m6.8 5.4c-1.8 1.1-5.8 1.1-7.6 0-.2-.2-.3-.5-.1-.7.2-.2.5-.3.7-.1 1.2.9 5.2.9 6.4 0 .2-.2.5-.1.7.1.2.2.1.5-.1.7m-.8-3c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.7 0 1.2.6 1.2 1.2 0 .7-.5 1.2-1.2 1.2z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center hackernews" target="_blank" rel="noopener noreferrer" href="http://news.ycombinator.com/submitlink?u=https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16&amp;t=Marco%20Alka's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka" title="Share on Hacker News">
													<svg viewBox="0 0 24 24">
														<path d="M2 2h20v20H2V2m9.25 15.5h1.5v-4.44L16 7h-1.5L12 11.66 9.5 7H8l3.25 6.06v4.44z"></path>
													</svg>
												</a>
												<a class="dropdown-item d-flex align-items-center justify-content-center email" target="_blank" href="mailto:?subject=Marco%20Alka's%20answer%20to%20Meet%20Hashnoders%3A%20Marco%20Alka&amp;body=Check out this response: https%3A%2F%2Fhashnode.com%2Fpost%2Fmeet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol%23cjul7mmim0007xrs10v1pby16" title="Send via Email">
													<svg viewBox="0 0 24 24">
														<path d="M20 8l-8 5-8-5V6l8 5 8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-1.11-.9-2-2-2z"></path>
													</svg>
												</a>
											</div>
										</div>
									</div>*/?>
								</div>
							</div>
							<div class="replies-container custom_container_{{$one_comment->id}}">
								@if(!empty(@$one_comment->subCommentInfo))
								@foreach($one_comment->subCommentInfo as $one_subComment)	
								<div class="single-reply-card-wrapper" id="">
									<div class="single-reply-card" id="">
										<div class="reply-header">
											<div class="d-flex flex-row align-items-center">
												<div>
													<?php
														$u_id = $one_subComment->user_id;
														$uuser = $final_sub_user[$u_id];
													?>
													<a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$uuser['image']}}" data-src="{{$uuser['image']}}" data-width="70" data-height="70" alt="{{$uuser['full_name']}}" class="lazyautosizes lazyloaded" sizes="32px" style="height:32px; width:32px"></a>
												</div><a href="#" class="prof-name">{{$uuser['full_name']}}</a><a href="#cjul7whyp0000hhs18mf5vahe" title="{{$one_subComment->created_at}}" class="date-time">
												<?php 
														$then = $one_subComment->created_at;
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
												</a></div>
										</div>
										<div class="reply-content">
											<p><?php echo nl2br($one_subComment->description);?></p>
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
											<?php 
												// echo 'Auth_id: '.@$auth_user->id;
									// echo '</br>comment user id: '.$one_comment->user_id;
									// echo '</br>post_detail user id: '.$post_detail->user_id;
									//die;
											?>
											@if(@$auth_user->id == $one_subComment->user_id || $post_detail->user_id == @$auth_user->id)
											<div class="d-flex flex-row align-items-center">
												<div class="dropdown">
													<a href="#" data-toggle="dropdown" class="hn-flat-btn d-flex flex-row align-items-center">
														<svg viewBox="0 0 24 24">
															<path fill="none" d="M0 0h24v24H0V0z"></path>
															<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
														</svg>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="{{ URL::to('/delete_action?cmnType=3&cmnid='.$one_subComment->id) }}" class="dropdown-item d-flex flex-row align-items-center">
															<svg viewBox="0 0 24 24">
																<path fill="none" d="M0 0h24v24H0V0z"></path>
																<path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
																<circle cx="12" cy="16" r="1"></circle>
																<path d="M11 7h2v7h-2z"></path>
															</svg><span>Delete</span></a>
													</div>
												</div>
											</div>
											@endif
										</div>
									</div>
								</div>
								@endforeach
								
								@if($auth_user)
								<div class="single-reply-card-wrapper">
									<div class="single-reply-card write-reply-card">
										<div class="reply-header d-flex flex-row align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center">
												<a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$auth_user->image}}" data-src="{{$auth_user->image}}" data-width="70" data-height="70" alt="john's photo" class="lazyautosizes lazyloaded" sizes="32px"></a><a href="/@john123" class="prof-name">{{$auth_user->full_name}}</a></div>
										</div>
										<div class="reply-write-area">
											<div class="create-post-widget">
												<div style="position: relative;">
													<div class="create-writearea">
														<textarea class="cmn_area sub_comment_text_{{$one_comment->id}}" name="reply-editor" placeholder="Reply to this…" style="overflow: hidden; overflow-wrap: break-word; height: 80px; margin-bottom: 0px !important;" data-check="{{$one_comment->id}}"></textarea>
													</div>
													
												</div>
											</div>
											<div class="btn_cls_{{$one_comment->id}}" style="display:none;">
												<button class="btn btn-success sub_comment_submit" data-tjadh="<?php echo base64_encode( convert_uuencode($auth_user->id))?>" data-ksjdh="<?php echo base64_encode( convert_uuencode($post_detail->id))?>" data-cmnt="{{$one_comment->id}}">Submit</button>
											</div>
										</div>
									</div>
								</div>
								@else
									<div class="replies-container">
										<div class="single-reply-card-wrapper">
										   <div class="single-reply-card write-reply-card">
											  <div class="reply-header d-flex flex-row align-items-center justify-content-between">
												 <div class="d-flex flex-row align-items-center">
													<a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{Config::get('constants.default_user_img')}}" data-src="{{Config::get('constants.default_user_img')}}" data-width="70" data-height="70" alt="john's photo" class="lazyautosizes lazyloaded" sizes="32px"></a><a href="#" class="prof-name">Your reply</a>
												 </div>
											  </div>
											  <div class="write-reply-placeholder">
												 <a href="{{Config::get('constants.login_url')}}" style="color: black;">Reply to this…</a>
											  </div>
										   </div>
										</div>
									 </div>
								@endif
							@endif
								
							<?php /*	@if($auth_user)
								<div class="single-reply-card-wrapper">
									<div class="single-reply-card write-reply-card">
										<div class="reply-header d-flex flex-row align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center">
												<a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$auth_user->image}}" data-src="{{$auth_user->image}}" data-width="70" data-height="70" alt="john's photo" class="lazyautosizes lazyloaded" sizes="32px"></a><a href="/@john123" class="prof-name">john</a></div>
										</div>
										<div class="reply-write-area">
											<div class="create-post-widget">
												<div style="position: relative;">
													<div class="create-writearea">
														<textarea class="cmn_area sub_comment_text_{{$one_comment->id}}" name="reply-editor" placeholder="Reply to this…" style="overflow: hidden; overflow-wrap: break-word; height: 80px; margin-bottom: 0px !important;" data-check="{{$one_comment->id}}"></textarea>
													</div>
													
												</div>
											</div>
											<div class="btn_cls_{{$one_comment->id}}" style="display:none;">
												<button class="btn btn-success sub_comment_submit" data-tjadh="<?php echo base64_encode( convert_uuencode($auth_user->id))?>" data-ksjdh="<?php echo base64_encode( convert_uuencode($post_detail->id))?>" data-cmnt="{{$one_comment->id}}">Submit</button>
											</div>
										</div>
									</div>
								</div>
								@else
									<div class="replies-container">
										<div class="single-reply-card-wrapper">
										   <div class="single-reply-card write-reply-card">
											  <div class="reply-header d-flex flex-row align-items-center justify-content-between">
												 <div class="d-flex flex-row align-items-center">
													<a href="#" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{Config::get('constants.default_user_img')}}" data-src="{{Config::get('constants.default_user_img')}}" data-width="70" data-height="70" alt="Your reply" class="lazyautosizes lazyloaded" sizes="32px"></a><a href="#" class="prof-name">Your reply</a>
												 </div>
											  </div>
											  <div class="write-reply-placeholder">
												 <a href="{{Config::get('constants.login_url')}}" style="color: black;">Reply to this…</a>
											  </div>
										   </div>
										</div>
									 </div>
								@endif */?>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				@if($comment_count > 5)
				<a href="/post/meet-hashnoders-marco-alka-cjul4pmcm002wl9s17xe47eol/2" class="post-card load-more-card d-flex flex-row align-items-center justify-content-center">
					<svg viewBox="0 0 24 24">
						<path fill="none" d="M0 0h24v24H0V0z"></path>
						<path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
					</svg>
					<span>Load more responses </span>
				</a>
				@endif
			</div>	
						
						@endif
                      <?php /*  <div class="similar-post-cards-wrapper">

                            <div class="transparent-card">
                                <h4>🔥 Posts You Must Read</h4>
                            </div>

                            <div class="post-card with-padding similar-post-card">

                                <div class="d-flex flex-row flex-wrap">

                                    <div class="post-card-details">

                                        <div class="post-card-title d-flex flex-row">

                                            <div class="author-photo">
                                                <a href="/@alitabryzy"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1555236594765/So6cPwJkV.jpeg?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1555236594765/So6cPwJkV.jpeg?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-width="240" data-height="240" alt="" class="profile-pic author-pic  lazyautosizes lazyloaded" sizes="48px"></a>
                                            </div>

                                            <div class="post-card-title-meta flex-grow-1">
                                                <h3><a href="/post/securing-jwt-by-totp-meet-the-new-jwts-cjugrm01f004emts1jz7k3h1o" data-slug="securing-jwt-by-totp-meet-the-new-jwts" data-cuid="cjugrm01f004emts1jz7k3h1o"> Securing JWT by TOTP, meet the new JWTS</a></h3>

                                                <div class="post-meta d-flex flex-row flex-wrap"><a href="/@alitabryzy">Ali Tabrizi</a>

                                                    <span>·
</span><a href="/post/securing-jwt-by-totp-meet-the-new-jwts-cjugrm01f004emts1jz7k3h1o" data-slug="securing-jwt-by-totp-meet-the-new-jwts" data-cuid="cjugrm01f004emts1jz7k3h1o">a day ago</a>
                                                </div>

                                                <div class="post-meta-extra d-flex flex-row flex-wrap">
                                                    <a href="/post/securing-jwt-by-totp-meet-the-new-jwts-cjugrm01f004emts1jz7k3h1o" data-slug="securing-jwt-by-totp-meet-the-new-jwts" data-cuid="cjugrm01f004emts1jz7k3h1o" class="meta-prop d-flex align-items-center"><img src="https://cdn.hashnode.com/res/hashnode/image/upload/w_80/v1545139896346/S1g6LdLlV.png">

                                                        <span>Add comment
</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-card with-padding similar-post-card">

                                <div class="d-flex flex-row flex-wrap">

                                    <div class="post-card-details">

                                        <div class="post-card-title d-flex flex-row">

                                            <div class="author-photo">
                                                <a href="/@albinotonnina"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1552163532436/9NvTKd9W_.png?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1552163532436/9NvTKd9W_.png?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-width="240" data-height="240" alt="" class="profile-pic author-pic  lazyautosizes lazyloaded" sizes="48px"></a>
                                            </div>

                                            <div class="post-card-title-meta flex-grow-1">
                                                <h3><a href="/post/designers-are-from-saturn-developers-are-from-jupiter-cjt1ykf41002gmvs1mq8uzwnq" data-slug="designers-are-from-saturn-developers-are-from-jupiter" data-cuid="cjt1ykf41002gmvs1mq8uzwnq"> Designers are from Saturn, Developers are from&nbsp;Jupiter</a></h3>

                                                <div class="post-meta d-flex flex-row flex-wrap"><a href="/@albinotonnina">Albino Tonnina</a>

                                                    <span>·
</span><a href="/post/designers-are-from-saturn-developers-are-from-jupiter-cjt1ykf41002gmvs1mq8uzwnq" data-slug="designers-are-from-saturn-developers-are-from-jupiter" data-cuid="cjt1ykf41002gmvs1mq8uzwnq">a month ago</a>
                                                </div>

                                                <div class="post-meta-extra d-flex flex-row flex-wrap">
                                                    <a href="/post/designers-are-from-saturn-developers-are-from-jupiter-cjt1ykf41002gmvs1mq8uzwnq" data-slug="designers-are-from-saturn-developers-are-from-jupiter" data-cuid="cjt1ykf41002gmvs1mq8uzwnq" class="meta-prop d-flex align-items-center"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png">

                                                        <span>11
</span></a>
                                                    <a href="/post/designers-are-from-saturn-developers-are-from-jupiter-cjt1ykf41002gmvs1mq8uzwnq" data-slug="designers-are-from-saturn-developers-are-from-jupiter" data-cuid="cjt1ykf41002gmvs1mq8uzwnq" class="meta-prop d-flex align-items-center"><img src="https://cdn.hashnode.com/res/hashnode/image/upload/w_80/v1545139896346/S1g6LdLlV.png">

                                                        <span>2
</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-card with-padding similar-post-card">

                                <div class="d-flex flex-row flex-wrap">

                                    <div class="post-card-details">

                                        <div class="post-card-title d-flex flex-row">

                                            <div class="author-photo">
                                                <a href="/@spencercarli"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/hcrb5jxyhvug0bgknesb_cropped/1507495539.png?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/hcrb5jxyhvug0bgknesb_cropped/1507495539.png?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-width="240" data-height="240" alt="" class="profile-pic author-pic  lazyautosizes lazyloaded" sizes="48px"></a>
                                            </div>

                                            <div class="post-card-title-meta flex-grow-1">
                                                <h3><a href="/post/how-to-detect-crashes-in-a-react-native-app-cjsxehl2n00384rs2aycvq0ts" data-slug="how-to-detect-crashes-in-a-react-native-app" data-cuid="cjsxehl2n00384rs2aycvq0ts"> How to Detect Crashes in a React Native App</a></h3>

                                                <div class="post-meta d-flex flex-row flex-wrap"><a href="/@spencercarli">Spencer Carli</a>

                                                    <span>·
</span><a href="/post/how-to-detect-crashes-in-a-react-native-app-cjsxehl2n00384rs2aycvq0ts" data-slug="how-to-detect-crashes-in-a-react-native-app" data-cuid="cjsxehl2n00384rs2aycvq0ts">a month ago</a>
                                                </div>

                                                <div class="post-meta-extra d-flex flex-row flex-wrap">
                                                    <a href="/post/how-to-detect-crashes-in-a-react-native-app-cjsxehl2n00384rs2aycvq0ts" data-slug="how-to-detect-crashes-in-a-react-native-app" data-cuid="cjsxehl2n00384rs2aycvq0ts" class="meta-prop d-flex align-items-center"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png">

                                                        <span>23
</span></a>
                                                    <a href="/post/how-to-detect-crashes-in-a-react-native-app-cjsxehl2n00384rs2aycvq0ts" data-slug="how-to-detect-crashes-in-a-react-native-app" data-cuid="cjsxehl2n00384rs2aycvq0ts" class="meta-prop d-flex align-items-center"><img src="https://cdn.hashnode.com/res/hashnode/image/upload/w_80/v1545139896346/S1g6LdLlV.png">

                                                        <span>Add comment
</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-card with-padding similar-post-card">

                                <div class="d-flex flex-row flex-wrap">

                                    <div class="post-card-details">

                                        <div class="post-card-title d-flex flex-row">

                                            <div class="author-photo">
                                                <a href="/@atapas"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1553708268042/lN68QFN3W.jpeg?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1553708268042/lN68QFN3W.jpeg?w=240&amp;h=240&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-width="240" data-height="240" alt="" class="profile-pic author-pic  lazyautosizes lazyloaded" sizes="48px"></a>
                                            </div>

                                            <div class="post-card-title-meta flex-grow-1">
                                                <h3><a href="/post/javascript-event-loop-why-so-serious-cjugdp0fm002j70s1nimnlaq7" data-slug="javascript-event-loop-why-so-serious" data-cuid="cjugdp0fm002j70s1nimnlaq7"> Javascript Event Loop - Why so Serious!</a></h3>

                                                <div class="post-meta d-flex flex-row flex-wrap"><a href="/@atapas">Tapas Adhikary</a>

                                                    <span>·
</span><a href="/post/javascript-event-loop-why-so-serious-cjugdp0fm002j70s1nimnlaq7" data-slug="javascript-event-loop-why-so-serious" data-cuid="cjugdp0fm002j70s1nimnlaq7">a day ago</a>
                                                </div>

                                                <div class="post-meta-extra d-flex flex-row flex-wrap">
                                                    <a href="/post/javascript-event-loop-why-so-serious-cjugdp0fm002j70s1nimnlaq7" data-slug="javascript-event-loop-why-so-serious" data-cuid="cjugdp0fm002j70s1nimnlaq7" class="meta-prop d-flex align-items-center"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png">

                                                        <span>21
</span></a>
                                                    <a href="/post/javascript-event-loop-why-so-serious-cjugdp0fm002j70s1nimnlaq7" data-slug="javascript-event-loop-why-so-serious" data-cuid="cjugdp0fm002j70s1nimnlaq7" class="meta-prop d-flex align-items-center"><img src="https://cdn.hashnode.com/res/hashnode/image/upload/w_80/v1545139896346/S1g6LdLlV.png">

                                                        <span>1
</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> */?>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@include('../Elements/pop-ups')
@if($auth_user)
	@include('../Elements/posts/comment_element')
	@include('../Elements/posts/sub_comment_element')
@endif

 @endsection