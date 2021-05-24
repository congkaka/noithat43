@extends('layouts.admin.mains')
@section('title','Category')
@section('page','Category')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Table</h3>

              <div class="box-tools">
              	<!-- <form action="" method="get"> -->
	                <div class="input-group input-group-sm" style="width: 150px;">
	                  <input type="text" name="keyword" id='loc' onkeyup="hamcuatoi();" class="form-control pull-right" placeholder="Search">

	                  <div class="input-group-btn">
	                    <!-- <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button> -->
	                  </div>
	                </div>
                <!-- </form> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
               <table class="table table-hover table-bordered" id="bang">
	                <tbody>
                    <tr>
	                  <th>ID</th>
	                  <th>Name</th>
					  <th>Slug</th>
		              <th>
		                <a href="{{route('add.cate')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
					@foreach($models as $model)
                    <tr class="fortr">
						<td> {{$model->id }}</td>
						<td> {{$model->name }}</td>
						<td> {{$model->slug}} </td>
						<td>
							<a href="{{route('edit.cate',['id' => $model->id])}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.cate',['id' => $model->id])}}" class="btn btn-danger" id="delete-btn">Delete</button>


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
<script>

	function hamcuatoi(){
		var input, table, tr, tdname, filter, textValueName, i;
		input = document.getElementById('loc');
		filter = input.value.toUpperCase();
		table = document.getElementById('bang');
		tr = table.getElementsByClassName('fortr');

		for (i = 0; i < tr.length; i++) {
			tdname = tr[i].getElementsByTagName('td')[1];
			
			if(tdname){
				textValueName = tdname.textContent || tdname.innerText;

				if(textValueName.toLocaleUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}else{
					tr[i].style.display = "none";
				}
			}
		}
		
	}


</script>