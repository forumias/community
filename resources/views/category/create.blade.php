@extends('adminlte::page')

@section('title', 'Administrator')


@section('content')
<section class="content">
<div class="row">
<div class="col-xs-12">
<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Add Category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" name="saverenter">
            @csrf
            <!-- text input -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">

                <span class="invalid-feedback"> @if ($errors->has('name'))
                    <strong>{{ $errors->first('name') }}</strong> 
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