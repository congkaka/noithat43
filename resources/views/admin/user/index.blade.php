@extends('layouts.admin.mains')
@section('title','User')
@section('page','User')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Table</h3>

              <div class="box-tools">
              	<!-- <form action="" method="get"> -->
	                <div class="input-group input-group-sm" style="width: 150px;">
	                  <input type="text" name="keyword" id="loc" onkeyup="hamcuatoi();" class="form-control pull-right" placeholder="Search">

	                  <div class="input-group-btn">
	                    <!-- <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button> -->
	                  </div>
	                </div>
                <!-- </form> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
               <table class="table table-hover  table-bordered" id="bang">
	                <tbody>
                    <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Image</th>
	                  <th>Address</th>
                      <th>Number</th>
                      <th>Role</th>
		              <th>
		                <a href="{{route('add.user')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
					@foreach($models as $model)
                    <tr class="fortr">
						<td> {{$model->id}} </td>
						<td> {{$model->name}} </td>
						<td> {{$model->email}} </td>
						<td> <img src="{{asset($model->avatar)}}" alt="image" width="50"> </td>
                        <td> {{$model->address}} </td>
                        <td> {{$model->number}} </td>
						<td> @if($model->role == 500) {{'Admin'}} @elseif($model->role == 1) {{'Menber'}} @endif</td>
						<td>
							<a href="{{route('edit.user',['id'=>$model->id])}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.user',['id'=>$model->id])}}" class="btn btn-danger" id="delete-btn">Delete</button>


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
		var input, table, tr, tdname, tdemail, tdnumber, filter, textValueName, textValueEmail, textValueNumber, i;
		input = document.getElementById('loc');
		filter = input.value.toUpperCase();
		table = document.getElementById('bang');
		tr = table.getElementsByClassName('fortr');

		for (i = 0; i < tr.length; i++) {
			tdname = tr[i].getElementsByTagName('td')[1];
			tdemail = tr[i].getElementsByTagName('td')[2];
			tdnumber = tr[i].getElementsByTagName('td')[5];

			if(tdname){
				textValueName = tdname.textContent || tdname.innerText;
				textValueEmail = tdemail.textContent || tdemail.innerText;
				textValueNumber = tdnumber.textContent || tdnumber.innerText;

				if(textValueName.toLocaleUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}else if(textValueEmail.toLocaleUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}else if(textValueNumber.toLocaleUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}else{
					tr[i].style.display = "none";
				}
			}
		}
		
	}


</script>