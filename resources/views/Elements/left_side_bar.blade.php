<header class="global-sidebar" id="global-sidebar">
<?php $auth = @Auth::user();?>
<div class="d-flex flex-column global-sidebar-content">

<div class="sidebar-top"><nav class="primary">
<ul class="list-unstyled">
<li><a href="{{ URL::to('/') }}" class="d-flex flex-row align-items-center <?php if(Request::segment(1) == ''){ echo 'active';}?>"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"></path></svg>

<span>Home
</span></a></li>
<li class="dropright"><a href="#" class="d-flex flex-row align-items-center" data-toggle="dropdown"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 10h9v2H5zm0-3h9v2H5z"></path></svg>

<span>Posts
</span><svg viewBox="0 0 24 24" class="right-arrow">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path></svg></a>

<div class="dropdown-menu dropdown-menu-right"><a href="{{ URL::to('/') }}" class="">

<span>Stories
</span></a><a href="{{ URL::to('/') }}" class="">

<span>Questions
</span></a>
</div></li>

<li><a href="{{ URL::to('/users') }}" class="d-flex flex-row align-items-center <?php if(Request::segment(1) == 'users'){ echo 'active';}?>"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path></svg>

<span>Users
</span></a></li>
<li><a href="{{ URL::to('/groups') }}" class="d-flex flex-row align-items-center <?php if(Request::segment(1) == 'groups'){ echo 'active';}?>"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

<span>Groups
</span></a></li>

<?php /*<li><a href="{{ URL::to('/jobs') }}" class="d-flex flex-row align-items-center "><svg viewBox="0 0 24 24">

<path d="M20 6c.58 0 1.05.2 1.42.59.38.41.58.86.58 1.41v11c0 .55-.2 1-.58 1.41-.37.39-.84.59-1.42.59H4c-.58 0-1.05-.2-1.42-.59C2.2 20 2 19.55 2 19V8c0-.55.2-1 .58-1.41C2.95 6.2 3.42 6 4 6h4V4c0-.58.2-1.05.58-1.42C8.95 2.2 9.42 2 10 2h4c.58 0 1.05.2 1.42.58.38.37.58.84.58 1.42v2h4M4 8v11h16V8H4m10-2V4h-4v2h4z"></path></svg>

<span>Jobs
</span></a></li>*/?>
<li class="divider"></li>
<li><a href="#" class="d-flex flex-row align-items-center "><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2z"></path></svg>

<span>My Bookmarks
</span></a></li>

<li class="show-mobile"><a href="#" class="d-flex flex-row align-items-center" data-toggle="dropdown"><svg viewBox="0 0 24 24">

<path fill="none" d="M0 0h24v24H0V0z"></path>

<path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>

<span>More
</span></a>

<div class="dropdown-menu dropdown-menu-right"><a href="/about">

<span>About
</span></a><a href="#careers">

<span>Careers
</span></a><a href="#media">

<span>Logo &amp; Media
</span></a><a href="#/terms">

<span>Terms of service
</span></a><a href="#/privacy">

<span>Privacy
</span></a>
</div></li>
</ul></nav>

<div class="sidebar-profile-section">

<div class="profile-widget">
@if(@$auth && @$auth->type != 1)
<div class="profile-details d-flex align-items-center"><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($auth->id))) }}" class="profile-pic"><img src="{{@$auth->image}}"></a><a href="{{ URL::to('/detail/'.base64_encode(convert_uuencode($auth->id))) }}" class="profile-name">{{@$auth->full_name}}</a>
</div>
@endif
</div>


</div>

<div class="company-footer">

<p>© 
<!-- -->{{ date('Y')}}
<!-- --> · ForumIAS</p>
<ul class="list-inline">
<li class="list-inline-item"><a href="{{ URL::to('/about') }}">About</a></li>
<li class="list-inline-item"><a href="{{ URL::to('/careers') }}">Careers</a></li>
<li class="list-inline-item"><a href="{{ URL::to('/terms') }}">Terms</a></li>
<li class="list-inline-item"><a href="{{ URL::to('/privacy') }}">Privacy</a></li>
</ul>
<ul class="list-inline social-media">
<li class="list-inline-item"><a class="twitter" href="https://twitter.com/ForumIAS/" target="_blank" rel="noopener nofollow noreferrer"><svg viewBox="0 0 24 24">

<path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21-.36.1-.74.15-1.13.15-.27 0-.54-.03-.8-.08.54 1.69 2.11 2.95 4 2.98-1.46 1.16-3.31 1.84-5.33 1.84-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path></svg></a></li>
<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/ForumIAS/" target="_blank" rel="noopener nofollow noreferrer"><svg viewBox="0 0 24 24">

<path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path></svg></a></li>
<li class="list-inline-item"><a class="instagram" href="#" target="_blank" rel="noopener nofollow noreferrer"><svg viewBox="0 0 24 24">

<path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg></a></li>

</ul>
</div>
</div>
</div></header>