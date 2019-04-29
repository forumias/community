@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
	<p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
	<p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning" role="alert">
	<p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info" role="alert">
	<p>{{ $message }}</p>
</div>
@endif

@if ($errors->any())
	@if( Request::segment(1) != 'login')
	<div class="alert alert-danger" role="alert">
	<p>Please check the form below for errors</p>
	</div>
	@endif
@endif
@if ($errors->any())
	@if( Request::segment(1) == 'login')
	<div class="alert alert-danger" role="alert">
	<p>Oops! That email / password combination is not valid.</p>
	</div>
	@endif
@endif