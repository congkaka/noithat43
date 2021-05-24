@extends('layouts.admin.mains')
@section('title','Slide')
@section('page','Slide')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slide Table</h3>

              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
               <table class="table table-hover  table-bordered">
	                <tbody>
                    <tr>
	                  <th>ID</th>
					  <th>Title</th>
	                  <th>Image</th>
	                  <th>Order_num</th>
                      <th>Status</th>
		              <th>
		                <a href="{{route('add.slide')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
					@foreach($models as $model)
                    <tr>
						<td> {{$model->id}} </td>
						<td> {{$model->title}} </td>
						<td> <img src="{{asset($model->image)}}" alt="image" width="100"> </td>
						<td> {{$model->order_num}} </td>
                        <td>@if($model->status == 0)							
								{{'Hien thi'}}
							@elseif($model->status == 1)
								{{'An'}}
							@endif 
						</td>
						<td>
							<a href="{{route('edit.slide',['id'=>$model->id])}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.slide',['id'=>$model->id])}}" class="btn btn-danger" id="delete-btn">Delete</button>


							@include('layouts.admin._layouts.confirm')

						</td>
					</tr>
					@endforeach
	              </tbody>
          	  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection