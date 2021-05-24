@extends('layouts.web')
@section('content')
@section('css')
<style>
    .price {
        padding: 16px;
        background: #fafafa;
    }

    .btn-color-active,
    .btn-size-active {
        background: #ff084e;
        color: white !important;
    }
</style>
@endsection
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
<div class="breadcumb_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
                <!-- btn -->
                <a href="/" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Quay lại trang chủ</a>
            </div>
        </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
<section class="single_product_details_area section_padding_0_100">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        @if(!empty($products))
                        <ol class="carousel-indicators">
                            @foreach($products->image as $key =>$imageValue)
                            <li class="{{ ($key == 0) ? 'active' : '' }}" data-target="#product_details_slider" data-slide-to="" style="background-image: url(images/types/{!!$imageValue!!});">
                            </li>
                            @endforeach

                            @if(!empty($products->type['file']))
                            @php $i = count($products->image) @endphp
                            @foreach($products->type['file'] as $keyfcl =>$colorFile)
                            <li data-target="#product_details_slider" data-slide-to="" style="background-image: url(images/types/{!!$colorFile!!});">
                            </li>
                            @php $i++ @endphp
                            @endforeach
                            @endif

                        </ol>
                        <div class="carousel-inner">
                            @foreach($products->image as $key =>$imageValue)
                            <div class="carousel-item {{ ($key == 0) ? 'active' : '' }}">
                                <a class="gallery_img" href="{{asset('images/types')}}/{{$imageValue}}">
                                    <img class="d-block w-100" src="{{asset('images/types')}}/{{$imageValue}}" alt="First slide">
                                </a>
                            </div>
                            @endforeach
                            @if(!empty($products->type['file']))
                            @foreach($products->type['file'] as $keyfcl =>$colorFile)
                            <div class="carousel-item }}">
                                <a class="gallery_img" href="{{asset('images/types')}}/{{$colorFile}}">
                                    <img class="d-block w-100" src="{{asset('images/types')}}/{{$colorFile}}">
                                </a>
                            </div>
                            @endforeach
                            @endif

                        </div>

                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="single_product_desc">

                    <h4 class="title"><a href="#">{{$products->name}}</a></h4>
                    <div class=" _21hHOx" style="display:flex">
                        <div class="_119xyB" style="margin-right: 15px;padding-right: 15px;border-right: 1px solid #bfafaf;">Chưa có đánh giá</div>
                        <div class=" _210dTF">
                            <div class="aca9MM"><b>0</b> Đã bán</div>
                        </div>
                    </div>
                    <h4 class="price">
                        <p style="font-size: 1.875rem;font-weight: 500;color: #ee4d2d;"><span id="jsprice" price="{{$products->price}}">{{number_format($products->price,0,',','.')}}₫</span></p>
                    </h4>

                    <p class="available">Trạng thái: <span class="text-muted">Còn hàng</span></p>

                    <div class="single_product_ratings mb-15">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>

                    <div class="widget size mb-30">
                        <h6 class="widget-title">Màu sắc</h6>
                        <div class="widget-desc">
                            <ul>
                                @if(!empty($products->type['file']))
                                @php $i = count($products->image) @endphp
                                @foreach($products->type['name'] as $keyfcl =>$colorFile)
                                @if(!empty($colorFile))
                                <li data-target="#product_details_slider" data-slide-to="{{$i}}"><a class="btn-color" data-price="{{$products->type['price'][$keyfcl]}}">{{$colorFile}}</a></li>
                                @php $i++ @endphp
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="widget size mb-30">
                        <h6 class="widget-title">Size</h6>
                        <div class="widget-desc">
                            <ul>
                                @foreach($products->size['name'] as $keysz =>$size)
                                @if(!empty($size))
                                <li><a class="btn-size" data-price="{{$products->size['price'][$keysz]}}">{{$size}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="cart clearfix mb-30 d-flex">
                        <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            <input onchange="check()" type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <button type="button" name="addtocart" id="addtocart" value="5" class="btn cart-submit d-block">Thêm vào giỏ hàng</button>
                    </div>
                    <p id="product-exist">{{$products->exist}} sản phẩm có sẵn </p>
                    <p id="product-exist-warning" style="color:red"></p>
                    <input hidden id="productExist" name="productExist" value="{{$products->exist}}" type="text">
                    <input hidden id="productId" name="productId" value="{{$products->id}}" type="text">
                    <input hidden id="price" name="price" value="{{number_format($products->price,0,',','.')}}" type="text">
                    <!-- <h4 class="product-price">{{number_format($products->price,0,',','.')}}₫</h4> -->

                    <input hidden name="txtColor" id="txtColor" value="" type="text">
                    <input hidden name="txtSize" id="txtSize" value="" type="text">
                    <input hidden name="variant" id="variant" value="" type="text">
                    <input hidden id="jsTotalPrice" name="jsTotalPrice" value="" type="text">
                    <input hidden id="jsAvarta" name="jsAvarta" value="{{$products->image[0] ?? ''}}" type="text">
                    <input hidden id="jsProductName" name="jsProductName" value="{{$products->name ?? ''}}" type="text">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ****** Quick View Modal Area End ****** -->
<section class="you_may_like_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Sản phẩm tương tự</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="you_make_like_slider owl-carousel">
                    @foreach($productEquivalents as $productEquivalent)
                    <!-- Single gallery Item -->
                    <div class="single_gallery_item">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{asset('images/types/')}}/{{$productEquivalent->image[0]?? ''}}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">

                            <h4 class="product-price">{{number_format($productEquivalent->price,0,',','.')}}₫</h4>
                            <!-- <h4 class="product-price">{{number_format($productEquivalent->promotion_price)}}₫</h4> -->

                            <p>{{$productEquivalent->name}}</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">Mua ngay</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- dd(Session::get('Cart')) --}}

</section>

@push('scripts')

<script type="text/javascript">
    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    $('.btn-color').click(function() {
        $('.btn-color').removeClass('btn-color-active');
        $(this).addClass('btn-color-active');
        $('#variant').val($(this).data('price'));
    });
    $('.btn-size').click(function() {
        $('.btn-size').removeClass('btn-size-active');
        $(this).addClass('btn-size-active');
        //price with size
        var variant = Number($('#variant').val());
        if (variant != '') {
            var sizePrice = Number($(this).data('price'));
            var productPrice = Number($('#jsprice').attr('price'));
            var price = variant + sizePrice + productPrice;
            if (price != '') {
                var priceFormat = price.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
                // var a = formatNumber(price);
                $('#jsprice').text(priceFormat);
                $('#jsTotalPrice').val(price);
            }

        }

    });

    function check() {
        var id = $('#qty').val();
        var exist = $('#productExist').val();
        if (id > exist) {
            $('#product-exist-warning').text('Quá số lượng đặt hàng');
            $('#qty').val(1);
        }
    };
    $('#addtocart').click(function() {
        var url = "{{route('product.order')}}";
        var quantity = $('#qty').val();
        if (quantity <= 0) {
            alert('Số lượng sản phẩm lớn hơn 0');
            return false;
        }
        var type = $('.btn-color-active').text();
        var size = $('.btn-size-active').text();
        if (type == '' || size == '') {
            alert('Vui lòng chọn phân loại hàng');
            return false;
        }
        var productId = $('#productId').val();
        var data = {
            '_token': '{{ csrf_token() }}',
            'type': type,
            'size': size,
            'quantity': quantity,
            'productId': productId,
            'price': $('#jsTotalPrice').val(),
            'avatar': $('#jsAvarta').val(),
            'name': $('#jsProductName').val(),
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
                    swal({
                            title: 'Thông báo',
                            text: data.message,
                            icon: 'success',
                            timer: 3000,
                            buttons: true,
                        })
                        .then(() => {
                            window.location.replace(data.url);
                        })
                } else {
                    swal("Thông báo!", data.message, "warning");
                    return false;
                }
            }
        });
    });
</script>
@endpush
@endsection