@extends('layouts.admin.mains')
@section('title','Product')
@section('page','Product')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Table</h3>

              <div class="box-tools" style="right: 38px;">
              	<form action="" method="get">
	                <div class="input-group input-group-sm" style="width: 150px;">

					  <input type="text" name="keyword" class="form-control pull-right" placeholder="Search Name">

	                  <div class="input-group-btn">
	                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	                  </div>
	                </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
               <table class="table table-hover  table-bordered">
	                <tbody>
                    <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Price</th>
                      <th>Category</th>
                      <th>Status</th>
		              <th>
		                <a href="{{route('add.pro')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
					@foreach($models as $key => $model)
                    <tr>
						<td> {{$model->id}} </td>
						<td> {{$model->name}} </td>
						<td>{{number_format($model->price)}} </td>
                        <td> @if(isset($model->category->name))
								{{$model->category->name}} 
							 @endif
						</td>
						<td> @if($model->status == 0)							
								{{'Con hang'}}
							@else
								{{'Het hang'}}
							@endif 
						</td>
						<td>
							<a href="{{route('edit.pro',['id'=>$model->id])}}" class="btn btn-info">Edit</a>
							
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.pro',['id'=>$model->id])}}" class="btn btn-danger" id="delete-btn">Delete</button>


							@include('layouts.admin._layouts.confirm')

						</td>
					</tr>
					@endforeach
	                <tr>
						<td colspan="8" class="text-center">{{$models->links()}}</td>
					</tr>
	              </tbody>
          	  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection