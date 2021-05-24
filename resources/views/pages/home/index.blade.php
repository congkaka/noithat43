@extends('layouts.web')
@section('content')
@section('css')
<style>
   .sec-banner.bg0.p-t-80.p-b-50 {
    padding: 38px 0 0;
}
.float-right {
    padding-right: 116px;
    float: right!important;
}
</style>

@endsection
<!-- ****** Welcome Slides Area Start ****** -->
@include('layouts.slide')
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Quick View Modal Area Start ****** -->
<?php setlocale(LC_MONETARY, 'en_US'); ?>
<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="quickview_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="quickview_pro_img">
                                    <img src="img/product-img/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview_pro_des">
                                    <h4 class="title">Boutique Silk Dress</h4>
                                    <div class="top_seller_product_rating mb-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="price">$120.99 <span>$130</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                    <a href="#">View Full Product Details</a>
                                </div>
                                <!-- Mua ngay Form -->
                                <form class="cart" method="post">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="cart-submit">Mua ngay</button>
                                    <!-- Wishlist -->
                                    <div class="modal_pro_wishlist">
                                        <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                    </div>
                                    <!-- Compare -->
                                    <div class="modal_pro_compare">
                                        <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                    </div>
                                </form>

                                <div class="share_wf mt-30">
                                    <p>Share With Friend</p>
                                    <div class="_icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ****** Quick View Modal Area End ****** -->

<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="page/img/noithatchatluongcao.png" alt="IMG-BANNER">

					<!-- 	<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a> -->
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="page/img/uytin.png" alt="IMG-BANNER">

						<!-- <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a> -->
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="page/img/tuvan.png" alt="IMG-BANNER">

						<!-- <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>





<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading ">
                    <h2>SẢN PHẨM HOT</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="karl-projects-menu mb-100">
        <div class="float-right portfolio-menu">
            <button class="btn active" data-filter="*">Tất cả</button>
            @foreach($categories as $category)
            <button class="btn" data-filter=".noithat{{$category->id}}">{{$category->name}}</button>
            @endforeach
            <!-- <button class="btn" data-filter=".phonglamviec">Phòng làm việc</button>
            <button class="btn" data-filter=".phongngu">Phòng ngủ</button>
            <button class="btn" data-filter=".phongtam">Phòng tắm</button>
            <button class="btn" data-filter=".phongbep">Phòng bếp</button> -->
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

            <!-- Single gallery Item Start -->
            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-md-3 single_gallery_item noithat{{$product->category_id}} wow fadeInUpBig" data-wow-delay="0.2s">
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
</section>
<!-- ****** New Arrivals Area End ****** -->
@push('scripts')
@endpush
@endsection