@extends('layouts.front_layout')

@section('content')

<style>
 .custom_optoin{
    margin-bottom: 1%;
 }
</style>
<div class="container">    
     <script>
		var all_tags = <?php echo $all_tags ?>
	 </script>       
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-10 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                
            </div>  
            <div class="panel-body" >
				<h2>Create News</h2> 
                <form method="post" action="{{URL::to('/createNews')}}" class="input_group" id="create_poll" enctype="multipart/form-data">
					@csrf
				  <div class="form-group row">
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control form-control-sm required" placeholder="News title" name="title">
					  <span class="invalid-feedback"> @if ($errors->has('title'))
						<strong>{{ $errors->first('title') }}</strong> 
						@endif
					</span>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
					  <textarea id="editor-dropdown" class="form-control" placeholder="Describe your poll…" name="description"></textarea>
					  <span class="invalid-feedback"> @if ($errors->has('description'))
							<strong>{{ $errors->first('description') }}</strong> 
							@endif
						</span>
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="colFormLabel" class="col-sm-2 col-form-label">Tag</label>
					<div class="col-sm-10">
					  <input type="hidden" name="tag_name" class="original_tag">                  
						<div class="autocomplete" data-index="0" data-initialized="true">
						<input class="form-control" id="get_tags" placeholder="Enter a tag" name="temp_tag">
							<div>
							<span class="invalid-feedback"> @if ($errors->has('tag_name'))
								<strong>{{ $errors->first('tag_name') }}</strong> 
								@endif
							</span></div>
						</div> 
						<div class="my_tags">
							
						</div>
					</div>
				  </div>
				  <div class="form-group row">
					<button type="submit" class="btn btn-success custom_submit">Share</button>
				  </div>
				</form>
            </div>
        </div>
    </div> 
</div>
    

    @endsection