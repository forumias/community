<div class="right-sidebar">
<?php $auth_user = @Auth::user(); ?>
@if($auth_user)
<div class="hn-widget">

<div class="widget-header"><h3><a href="{{ URL::to('/tags') }}" target="_blank" rel="noopener" class="d-flex flex-row align-items-center">

<span>Tags Following
</span></a></h3>
</div>

<div class="widget-body tags-wrapper">
<ul class="list-unstyled post-list tags-list">
@if(count($tag_followed) > 0)
@foreach($tag_followed as $one_tag)
	<li><a href="#" class="d-flex align-items-center justify-content-between">

<span>{{@$one_tag->mytags->title}}
</span>
<img data-sizes="auto" src="{{ asset('public/images/empty-tag.png')}}" data-src="{{ asset('public/images/empty-tag.png')}}" data-width="120" data-height="120" alt="" class="lazyautosizes lazyloaded" sizes="264px">
</a></li>

@endforeach
@else
	You are no tag following.
@endif

</ul>
</div>
</div>
@endif
<div class="hn-widget">

<div class="widget-header"><h3><a href="{{URL::to('/users')}}" target="_blank" rel="noopener" class="d-flex flex-row align-items-center">

<span>Most Helpful This Week
</span></a></h3>
</div>

<div class="widget-body">
@foreach($users_tofollow as $one_to_follow)
	<div class="profile-unit d-flex flex-row">

	<div><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($one_to_follow->id))) }}" class="profile-pic user-photo drop-theme-arrows drop-target"><img data-sizes="auto" src="{{$one_to_follow->image}}" data-src="{{$one_to_follow->image}}" data-width="240" data-height="240" alt="Syed Fazle Rahman's photo" class="lazyautosizes lazyloaded" sizes="52px" height="40"></a>
	</div>

	<div class="user-meta"><h3><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($one_to_follow->id))) }}">{{$one_to_follow->full_name}}</a></h3>

	<p class="user-tagline">{{$one_to_follow->about}} </p>
	@if($auth_user)
	<button class="d-flex flex-row align-items-center follow-button cmn_follow <?php if(!empty(@$one_to_follow->followInfo)){ echo 'active';}?> " data-tid="{{$one_to_follow->id}}"><svg viewBox="0 0 24 24">

	<path fill="none" d="M0 0h24v24H0V0z"></path>

	<path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H9zm-3-3v-3h3v-2H6V7H4v3H1v2h3v3z"></path></svg>

	<span class="flw_text_{{$one_to_follow->id}}"><?php if(!empty(@$one_to_follow->followInfo)){ echo 'Following';}else{ echo 'Follow';}?>
	</span></button>
	@else
		<a style="width: 45%;" class="d-flex flex-row align-items-center follow-button" href="{{Config::get('constants.login_url')}}"><svg viewBox="0 0 24 24">

	<path fill="none" d="M0 0h24v24H0V0z"></path>

	<path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H9zm-3-3v-3h3v-2H6V7H4v3H1v2h3v3z"></path></svg>

	<span class="flw_text_{{$one_to_follow->id}}">Follow
	</span></a>
	
	@endif
	</div>
	</div>


@endforeach

</div>

<div class="hn-widget-footer"><a href="{{ URL::to('/users') }}" class="d-flex flex-row align-items-center more-link">

<span>Show all
</span><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path></svg></a>
</div>
</div>

<div class="hn-widget">

<div class="widget-header"><h3><a href="#" target="_blank" rel="noopener" class="d-flex flex-row align-items-center">

<span>Hot discussions
</span></a></h3>
</div>

<div class="widget-body">
<ul class="list-unstyled post-list">
@foreach($hot_discussions as $one_discussion)

<li><a href="{{URL::to('/post/detail/'.base64_encode(convert_uuencode($one_discussion->post_id)))}}"><?php echo $one_discussion->getPost->title;?></a><a href="{{URL::to('/post/detail/'.base64_encode(convert_uuencode($one_discussion->post_id)))}}" class="post-meta d-flex flex-row align-items-center">

<span class="post-meta-unit d-flex align-items-center"><img src="https://d3h1a9qmjahky9.cloudfront.net/app-1-min.png">

<span>0
</span>
</span>

<span class="post-meta-unit d-flex align-items-center"><svg viewBox="0 0 24 24"><g transform="translate(0 2)" fill="none" fill-rule="evenodd">

<path d="M20.6225325.4084275H3.3256575c-1.442325 0-2.61159 1.16931-2.61159 2.611635V12.57675c0 1.44237 1.169265 2.611635 2.61159 2.611635H4.85958V20.6154l5.5014525-5.427015H20.62254c1.442325 0 2.61168-1.169265 2.61168-2.611635V3.020055C23.2342125 1.5777375 22.06485.4084275 20.6225325.4084275z" fill="#FFFFFF"></path>

<path d="M20.6225325.4084275H3.3256575c-1.442325 0-2.61159 1.16931-2.61159 2.611635V12.57675c0 1.44237 1.169265 2.611635 2.61159 2.611635H4.85958V20.6154l5.5014525-5.427015H20.62254c1.442325 0 2.61168-1.169265 2.61168-2.611635V3.020055C23.2342125 1.5777375 22.06485.4084275 20.6225325.4084275z" fill="#B9D4F8"></path>

<path d="M23.234955 3.0211575V12.57615c0 1.439985-1.170045 2.609985-2.61003 2.609985h-10.2675l-5.49747 5.4300375V15.186135H3.3224175c-1.439985 0-2.609985-1.17-2.609985-2.609985V3.0211575c0-1.439985 1.17-2.609985 2.609985-2.609985h1.20003c-.7874925.1349925-2.28003 1.012485-2.1825225 5.82747.0525075 2.2424925.5099925 4.81503 2.625015 6.0150225 1.9244475 1.0963275 4.71138.9066225 6.872205.9664725 1.800435.0498675 3.603135.017985 5.4006675-.09576 1.4116875-.0893325 3.3002775.05388 4.4716575-.8897325 1.1411475-.898515.945945-2.6100675 1.0454775-3.9034725.0824925-1.0725375.1349925-2.1525.15747-3.2250375.03003-1.0049775.1350375-2.1449925.060015-3.2249925.165015.345015.2625225.7275225.2625225 1.140015z" fill="#659BDB"></path><circle fill="#FFFFFF" cx="6.5624625" cy="7.798425" r="1.5577125"></circle><circle fill="#FFFFFF" cx="11.986035" cy="7.798425" r="1.55769"></circle><circle fill="#FFFFFF" cx="17.409585" cy="7.798425" r="1.55769"></circle>

<path d="M4.662105.6249s7.2421875.6328125 11.71875 1.0546875 5.709165.3515625 6.28125 2.8125C23.23419 6.953025 23.23419 7.3749 23.23419 7.3749s.3502725-5.8659375-.743715-6.1790625c-1.0939875-.313125.4997625-.951525-4.2814875-.784665C13.42773.5780325 4.662105.6249 4.662105.6249z" fill="#FFFFFF"></path><g stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round">

<path d="M4.859715 15.1883775H3.3256725c-1.442325 0-2.6115825-1.16925-2.6115825-2.61165v-9.55665c0-1.442325 1.1692575-2.61165 2.6115825-2.61165h17.296875c1.442325 0 2.6116425 1.169325 2.6116425 2.61165v9.55665c0 1.4424-1.1693175 2.61165-2.6116425 2.61165h-10.2615M4.859565 15.1883775v5.427l5.5014825-5.427"></path></g><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="6.5624625" cy="7.798425" r="1.5577125"></circle><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="11.986035" cy="7.798425" r="1.55769"></circle><circle stroke="#1B4A9A" stroke-linecap="round" stroke-linejoin="round" cx="17.409585" cy="7.798425" r="1.55769"></circle></g></svg>

<span>{{$one_discussion->count_row}}
</span>
</span></a></li>
@endforeach

</ul>
</div>
</div>


</div>