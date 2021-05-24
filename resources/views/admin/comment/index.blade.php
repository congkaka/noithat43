@extends('layouts.admin.mains')
@section('title','Comment')
@section('page','Comment')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Comment Table</h3>

              <div class="box-tools">
              	<form action="" method="get">
	                <div class="input-group input-group-md" style="width: 200px;">
					  <select name="keyword" class="form-control pull-right">
					  	<option value="">Select Product</option>
						@foreach($products as $product)
						<option value="{{$product->id}}">{{$product->name}}</option>
						@endforeach
					  </select>
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
	                  <th>Content</th>
	                  <th>User_id</th>
	                  <th>Pro_id</th>
                      <th>Status</th>
	                </tr>
					@foreach($models as $model)
                    <tr>
						<td> {{$model->id}} </td>
						<td> {{$model->content}} </td>
						<td> {{$model->user_id}} </td>
                        <td> {{$model->pro_id}} </td>
						<td> 
							<form action="{{route('list.comment')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="hidden" name="id" value="{{$model->id}}">
									<select name="status">
										<option value="0" @if($model->status == 0) selected @endif >Show</option>
										<option value="1" @if($model->status == 1) selected @endif >Hide</option>
									</select>
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
								
							</form>
						</td>
					</tr>
					@endforeach
	                <tr>
						<td colspan="5" class="text-center">{{$models->links()}}</td>
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