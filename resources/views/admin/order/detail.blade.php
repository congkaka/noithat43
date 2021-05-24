@extends('layouts.admin.mains')
@section('title','Chi tiết đơn hàng')
@section('page','Chi tiết đơn hàng')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{route('list.order')}}">
                    < back</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
                @if(!empty($order))
                <table id="userInfo" class="table table-bordered" style="margin-bottom: 10px;">
                    <thead>
                        <tr>
                            <th class="col-md-4"><b>Thông tin khách hàng</b></th>
                            <th class="col-md-6"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thông tin người đặt hàng</td>
                            <td>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td>Ngày đặt hàng</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>{{ $order->number }}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{ $order->address }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>{{ $order->status }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover  table-bordered">
                    <tbody>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                        </tr>
                        @if(!empty($order->data))
                        @php
                        $i = 1;
                        $orderData = json_decode($order->data, true) ;
                        if(!empty($orderData['products'])){
                        $products = $orderData['products'];
                        }
                        @endphp
                        @if(!empty($products))
                        @foreach($products as $key => $value)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$value['productInfo']['name']}}</td>
                            <td>{{$value['quanty']}}</td>
                            <td>{{number_format($value['price'])}} VNĐ</td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                        @endif
                        <tr>
                            <td colspan="3"><b>Phí ship</b></td>
                            <td colspan="1"><b class="text-blue">30,000 VNĐ</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>Tổng tiền</b></td>
                            <td colspan="1"><b class="text-red">{{ number_format($orderData['totalPrice'] + 30000) }} VNĐ</b></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                @endif
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection