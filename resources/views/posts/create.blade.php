@extends('adminlte::page')

@section('title', 'Administrator')


@section('content')
<section class="content">
<div class="row">
<div class="col-xs-12">
<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">General Elements</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="{{ route('hashtags.store') }}" method="POST" enctype="multipart/form-data" name="saverenter">
            @csrf
            <!-- text input -->
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">

                <span class="invalid-feedback"> @if ($errors->has('title'))
                    <strong>{{ $errors->first('title') }}</strong> 
                    @endif
                </span>
            </div>
           <input type="hidden" name="status" value=1>
            <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Description" name="description"></textarea>

                <span class="invalid-feedback"> @if ($errors->has('description'))
                    <strong>{{ $errors->first('description') }}</strong> 
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