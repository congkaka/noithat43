@extends('layouts.web')
@section('content')
@section('css')
@endsection
<section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <!-- <h6 class="mb-0">GIÁ SẢN PHẨM</h6> -->
                                                                            <!-- Section: Price -->
                                            <section class="mb-4" filter="price">
                                            <h6 class="font-weight-bold mb-3">GIÁ SẢN PHẨM</h6>
                                                <ul>
                                                    <li><a href="">Dưới 1 triệu</a></li>
                                                    <li><a href="">1.000.000 - 3.000.000</a></li>
                                                    <li><a href="">3.000.000 - 5.000.000</a></li>
                                                    <li><a href="">5.000.000 - 7.000.000</a></li>
                                                    <li><a href="">7.000.000 - 10.000.000</a></li>
                                                    <li><a href="">Lớn Hơn 10 Triệu</a></li>
                                                </ul>
                                            </section>
                                            <!-- Section: Price -->
                                </div>

                                <!-- end -->
                            </div>

                            <div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Metre Uzunluğu</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Seçiniz: 0 - 1350</div>
                                    </div>
                                </div>
                            </div>

                        

                            <div class="widget size mb-50">
                               
                            </div>

                          
                        </div>
                    </div>
                  
                    <div class="col-12 col-md-8 col-lg-9">
                            <h3 style="color: #ff8a12; font-size:20px;">Tìm Kiếm Với Từ Khóa:<span>{{$keyword}}</span></h3>
                        <div class="shop_grid_product_area">
          
                            <div class="row">

                                <!-- Single gallery Item -->
                                @foreach($items as $product)
            <div class="col-12 col-sm-6 col-md-4 single_gallery_item noithat{{$product->category_id}} wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Product Image -->
                <div class="product-img">
                    <img style="width: 250px;height: 230px;" src="{{asset('images/types')}}/{{$product->image[0] ?? ''}}" alt="">
                    <div class="product-quicview">
                        <a href="{{route('product.detail')}}" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description">
                    <h4 class="product-price">{{number_format($product->price,0,',','.')}}₫</h4>
                    <p>{{$product->name}}</p>
                    <!-- Mua ngay -->
                    <a href="{{route('product.detail', ['item' => $product->id])}}" class="add-to-cart-btn">Mua ngay</a>
                </div>
            </div>
            @endforeach

                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </section>
@push('scripts')

@endpush

@endsection

@section('script')
<script type="text/javascript">
  
</script>
@endsection