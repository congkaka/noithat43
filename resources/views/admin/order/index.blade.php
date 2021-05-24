@extends('layouts.admin.mains')
@section('title','Order')
@section('page','Order')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Order Table</h3>

				<div class="box-tools">
					<form action="" method="get">
						<div class="input-group input-group-md" style="width: 250px;">
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
							<th>ID</th>
							<th>Tên người order</th>
							<th>Email</th>
							<th>Địa chỉ</th>
							<th>Sđt</th>
							<th>Ngày đặt</th>
							<th>Số lượng</th>
							<th>Giá</th>
						</tr>
						@foreach($orders as $order)
						<tr>
							<td> <a href="{{route('get.order',['id' => $order->id])}}">{{$order->id}}</a> </td>
							<td> {{$order->name}} </td>
							<td> {{$order->email}} </td>
							<td> {{$order->address}} </td>
							<td> {{$order->number}} </td>
							<td> {{$order->created_at}} </td>
							<td> {{$order->total_pro}} </td>
							<td> {{number_format($order->total_price)}} </td>
							<td>
								<a href="{{route('detail.order',['id' => $order->id])}}" class="btn btn-primary">Detail</a>
								<a href="{{route('confirm.order',['id' => $order->id])}}" class="btn btn-primary">Confirm</a>
								<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.order',['id' => $order->id])}}" class="btn btn-danger" id="delete-btn">Delete</button>
								@include('layouts.admin._layouts.confirm')
							</td>
						</tr>
						@endforeach
						<tr>
							<td colspan="5" class="text-center">{{$orders->links()}}</td>
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