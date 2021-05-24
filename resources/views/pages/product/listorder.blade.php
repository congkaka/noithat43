@extends('layouts.web')
@section('content')
@section('css')
@endsection
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
<div class="breadcumb_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item ">List</li>
                    <li class="breadcrumb-item active">Order</li>
                </ol>
                <!-- btn -->
                <a href="/" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Quay lại trang chủ</a>
            </div>
        </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->
<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_20 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Session::has('Cart') != null)
                            @foreach(Session::get('Cart')->products as $key => $value)
                            <tr>
                                <td class="cart_product_img d-flex align-items-center">
                                    <a href="#"><img src="{{asset('images/types')}}/{{$value['productInfo']['avatar'] ?? ''}}" alt="Product"></a>
                                    <h6>{{$value['productInfo']['name'] ?? ''}} | {{$value['productInfo']['type']}} | {{$value['productInfo']['size']}}</h6>
                                </td>
                                <td class="price"><span>{{number_format($value['productInfo']['price'],0,',','.')}}</span></td>
                                <td class="qty">
                                    <div class="quantity">
                                        <input type="number" class="qty-text quantity-{{$key}}" id="qty" step="1" min="1" max="99" name="quantity" value="{{$value['quanty'] ?? 1}}">
                                    </div>
                                </td>
                                <td class="total_price"><span>{{number_format($value['price'],0,',','.')}}</span></td>
                                <td class="total_price" style="text-align: center; display: flex;">
                                    <button class="btn btn-xs btnUpdate" data-id="{{$key}}"  data-price="{{$value['productInfo']['price']}}" data-url="{{route('product.edit',['id' => $key])}}"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-xs btnDelete" data-id="{{$key}}" data-url="{{route('product.delete',$key)}}" style="margin-left: 4px;"><i class="fa fa-trash-o" style="color:red;"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <form action="" id="JsFormSubmit"></form>
                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="/">Tiếp tục mua sắm</a>
                    </div>
                    <div class="update-checkout w-50 text-right">
                        <a href="#">clear cart</a>
                        <a href="#">Update cart</a>
                    </div>
                </div>

            </div>
        </div>
        {!! Form::open(['route' => 'web.product.store']) !!}
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="coupon-code-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Thông tin nhận hàng</h5>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="company">Họ Tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="street_address">Địa chỉ <span>*</span></label>
                            <input type="text" class="form-control mb-3" id="street_address" name="street_address" value="" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone_number">Số điện thoại<span>*</span></label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" min="0" value="" required>
                            @if(!empty($arrInputErr['phone']))
                            <span style="color: red;"><i>Số điện thoại không đúng định dạng</i></span>
                            @endif
                        </div>
                        <div class="col-12 mb-4">
                            <label for="email_address">Địa chỉ Email<span>*</span></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" value="" required>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="note">Yêu cầu của bạn<span></span></label>
                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-total-area mt-70">
                    <div class="cart-page-heading">
                        <h5>Cart total</h5>
                        <p>Final info</p>
                    </div>
                    @if(Session::has('Cart') != null)
                    <ul class="cart-total-chart">
                        <li><span>Subtotal</span> <span>₫{{number_format(Session::get('Cart')->totalPrice)}}</span></li>
                        <li><span>Shipping</span> <span>₫30.000</span></li>
                        <li><span><strong>Total</strong></span> <span><strong>₫{{number_format(Session::get('Cart')->totalPrice + 30000)}}</strong></span></li>
                    </ul>
                    <button type="submit" class="btn karl-checkout-btn">Đặt hàng</button>
                    @endif
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
<!-- ****** Cart Area End ****** -->
@push('scripts')
<script>
    $('.btnDelete').on('click', function() {
        swal({
                title: "Bạn chắc chắn muốn xóa",
                text: "Sản phẩm trong rỏ hàng!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var url = $(this).data('url');
                    var data = {
                        '_token': '{{ csrf_token() }}',
                    }
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: data,
                        dataType: 'json',
                        success: function(data) {
                            if (data.status == 1) {
                                $('#JsFormSubmit').submit();
                            } else {
                                swal("Thông báo!", data.message, "warning");
                                return false;
                            }
                        }
                    });
                } else {
                    return false;
                }
            });
    })
    //update
    $('.btnUpdate').on('click', function() {
        var url = $(this).data('url');
        var id = $(this).data('id');
        var price = $(this).data('price');
        var quanty = $('.quantity-' + id).val();
        var data = {
            '_token': '{{ csrf_token() }}',
            'quanty': quanty,
            'price': price,
        }
        $.ajax({
            type: 'POST',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'json',
            success: function(data) {
                if (data.status == 1) {
                    $('#JsFormSubmit').submit();
                } else {
                    swal("Thông báo!", data.message, "warning");
                    return false;
                }
            }
        });
    })
</script>
@endpush
@endsection