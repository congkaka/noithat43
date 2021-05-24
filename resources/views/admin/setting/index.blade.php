@extends('layouts.admin.mains')
@section('title','Setting')
@section('page','Setting')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Setting Table</h3>

              <div class="box-tools">
              	<form action="" method="get">
	                <div class="input-group input-group-sm" style="width: 150px;">
	                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

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
	                  <th>Name</th>
	                  <th>Logo</th>
	                  <th>Logo text</th>
                      <th>Email</th>
					  <th>Hotline</th>
					  <th>Address</th>
                      <th>map</th>
	                </tr>
                    <tr>
						<td> name </td>
						<td> <img src="" alt="logo" width="100"> </td>
                        <td> logo text </td>
                        <td> email </td>
						<td> hotline </td>
						<td> address </td>
						<td> map </td>
						<td>
							<a href="{{route('edit.setting')}}" class="btn btn-info">Edit</a>
						</td>
					</tr>
	                <tr>
						<td colspan="5" class="text-center">1</td>
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