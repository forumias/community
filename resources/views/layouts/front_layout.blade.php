
<html>


<head>

<meta charset="utf-8">

<link rel="manifest" href="/static/manifest.json">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>ForumIAS Community
</title>
<link rel="icon" type="image/png" href="{{ asset('public/images/favicon.png')}}">

<link rel="stylesheet" href="{{ asset('public/css/frontend/bootstrap.min.css')}}">


<link rel="stylesheet" id="current-style" type="text/css" href="{{ asset('public/css/frontend/app.css')}}">


<link href="{{ asset('public/css/frontend/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('public/css/custom_style.css')}}">

<!-- jQuery library -->
<script src="{{ asset('public/js/frontend/app.bundle.min.js')}}" >
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
</script>
<script src="{{ asset('public/js/jquery.validate.js')}}" async="" defer="">
</script>
<link href="{{ asset('public/css/toastr.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('public/js/custom/public.js')}}" async="" defer=""></script>

@if (Request::segment(1) == 'story' || Request::segment(1) == 'askQuestion' || Request::segment(1) == 'createPoll' || Request::segment(1) == 'createNews')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<script src="{{ asset('public/js/custom/posts.js')}}" async="" defer="">
</script>

@endif
@if (Request::segment(1) == 'groups')
	<script src="{{ asset('public/js/custom/tags.js')}}" ></script>
@endif
@if (Request::segment(1) == 'users')
	<script src="{{ asset('public/js/custom/user_listing.js')}}" ></script>
@endif
@if (Request::segment(1) == 'post' && Request::segment(2) == 'detail')
	<script src="{{ asset('public/js/custom/post_detail.js')}}" ></script>
@endif

@if (Request::segment(1) == '' || Request::segment(1) == 'questions')
	<script src="{{ asset('public/js/custom/feeds.js')}}" ></script>
@endif


<!-- Latest compiled JavaScript -->




</head>


<body>


<div class="progressbar" id="hn-progressbar">
</div>  
@include('../Elements/front_header')
<!-- Tranding-select and banner Area -->  

@yield('content')
<!-- End Min Container area --> 
@include('../Elements/front_footer')
    