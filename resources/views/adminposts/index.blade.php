@extends('adminlte::page')

@section('title', 'Administrator')


@section('content')
<style>
  .addbtn {
    text-align: left;
    width: 6%;
    margin-top: 2%;
}
</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @include('../Elements/flash-message')
      <h1>
        We are working on this module....
        
      </h1>
      <div class="addbtn"><a class="btn btn-block btn-success" href="{{ route('hashtags.create') }}">Add Tag</a></div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Posts Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>{{$tag->title}}</td>
                  <td>{{$tag->description}}
                  </td>
                  <td>
                  <form action="{{ route('hashtags.destroy',$tag->id) }}" method="POST">
                         @csrf
													@method('DELETE')
                      <a href="{{ route('hashtags.edit',$tag->id) }}"><i class="fa fa-fw fa-edit"></i></a>|
                    
                        <button type="submit"   href="javascript:void(0);" onclick="return confirm('Are you sure you want to delete this tag?');" style="background:none;border:none;">
                        <i class="fa fa-fw fa-remove"></i>
                        </button>

                    </form>
                  </td>
                 
                </tr>
                @endforeach
               
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  @stop

 