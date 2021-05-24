@extends('layouts.web')
@section('content')
@section('css')
<style>
    .orderby {
    font-size: 14px;    
    width: 161px;
    border: 1px solid #e6e6e6;
    border-radius: 2px;

    
}
.nav-side-menu .active{
    color:#ff8a12;
}
.nav-side-menu a{
    color: #6f6f6f;
    cursor: pointer;
    font-size: 1em;
    font-weight: normal;
}
.widget {
   
    padding-top: 51px;
}
li.filter-item {
    /* margin: 0; */
    cursor: pointer;
    line-height: 2.5em;
    color: #6f6f6f;
    cursor: pointer;
    font-size: 1em;
    font-weight: normal;
}
</style>
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
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 1 ? 'active' : ' '}}" href="{{ request()->fullUrlWithQuery(['price' => 1]) }}">Dưới 1 triệu</a></li>
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 2 ? 'active' : ' '}}" href="{{ request()->fullUrlWithQuery(['price' => 2]) }}">1.000.000 - 3.000.000</a></li>
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 3 ? 'active' : ' '}}" href="{{ request()->fullUrlWithQuery(['price' => 3]) }}">3.000.000 - 5.000.000</a></li>
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 4 ? 'active' : ' '}}"  href="{{ request()->fullUrlWithQuery(['price' => 4]) }}">5.000.000 - 7.000.000</a></li>
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 5 ? 'active' : ' '}}"  href="{{ request()->fullUrlWithQuery(['price' => 5]) }}">7.000.000 - 10.000.000</a></li>
                                                    <li class="filter-item"> <a class="{{ Request::get('price') == 6 ? 'active' : ' '}}"  href="{{ request()->fullUrlWithQuery(['price' => 6]) }}">Lớn Hơn 10 Triệu</a></li>
                                                </ul>
                                            </section>
                                            <!-- Section: Price -->
                                </div>

                                <!-- end -->
                            </div>

                            <!-- <div class="widget price mb-50">
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
                            </div> -->

                        

                            <div class="widget size mb-50">
                               
                            </div>

                          
                        </div>
                    </div>
                  
                    <div class="col-12 col-md-8 col-lg-9">
                    <div class="float-right formselect1">
                                <form class="tree-most" id="form_order"  method="get" >
                                    <span>Sắp Xếp:</span>
                                        <select name="orderby" class="orderby">
                                        <option value="md" selected>Chọn</option>
                                        <option value="price_max">Giá Tăng Dần</option>
                                        <option value="price_min">Giá Giảm Dần</option>
                                        </select>
                                </form>  
                    </div><br><br>

                        <div class="shop_grid_product_area">
          
                            <div class="row">

                                <!-- Single gallery Item -->
                                @foreach($products as $product)
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

                        <!-- <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div> -->

                    </div>
                </div>
            </div>
        </section>
@push('scripts')
<script type="text/javascript">
    $(function(){
        $('.orderby').change(function(){
            $("#form_order").submit(); 
        })
    })
</script>
@endpush

@endsection

@section('script')

@endsection