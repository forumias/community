@extends('adminlte::page')

@section('title', 'Administrator')


@section('content')
<section class="content">
<div class="row">
<div class="col-xs-12">
<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Group</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="{{ route('groups.update',$tag->id) }}" method="POST" enctype="multipart/form-data" name="saverenter">
            @csrf
            @method('PUT')	
            <!-- text input -->
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$tag->title}}">

                <span class="invalid-feedback"> @if ($errors->has('title'))
                    <strong>{{ $errors->first('title') }}</strong> 
                    @endif
                </span>
            </div>
           <input type="hidden" name="status" value=1>
            <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Description" name="description">{{$tag->description}}</textarea>

                <span class="invalid-feedback"> @if ($errors->has('description'))
                    <strong>{{ $errors->first('description') }}</strong> 
                    @endif
                </span>
            </div>
			<?php if($tag->tag_img) { ?>
			<div class="form-group">
                <label>Image</label>
                <img src="{{ asset('public/images/tags/thumb/'.$tag->tag_img) }}">
            </div>
			<?php } ?>
			<div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="image">
                <span class="invalid-feedback"> @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong> 
                    @endif
                </span>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
    </div>
    <!-- /.box-body -->
    </div>
    </div>
    </div>
</section>

@stop