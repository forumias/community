
<html>


<head>

<meta charset="utf-8">

<link rel="manifest" href="/static/manifest.json">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>ForumIAS Community
</title>


<?php /*<link rel="stylesheet" href="{{ asset('public/css/frontend/bootstrap.min.css')}}">*/?>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

<link rel="stylesheet" id="current-style" type="text/css" href="{{ asset('public/css/frontend/app.css')}}">


<link href="{{ asset('public/css/frontend/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('public/css/custom_style.css')}}">

<!-- jQuery library -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
@if (Request::segment(1) == 'story' || Request::segment(1) == 'askQuestion')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="{{ asset('public/js/custom/posts.js')}}" async="" defer="">
</script>

@endif


<?php /*<script src="{{ asset('public/js/frontend/app.bundle.min.js')}}" async="" defer="">
</script>*/?>

<!-- Latest compiled JavaScript -->

<?php /*<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
</script>*/?>
 


</head>


<body>


<div class="progressbar" id="hn-progressbar">
</div>  
@include('../Elements/front_header')
<!-- Tranding-select and banner Area -->  

@yield('content')
<!-- End Min Container area --> 
@include('../Elements/front_footer')
    