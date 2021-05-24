<header class="header_area">
    <?php
        use App\Bill;
        $dataHeaders = Bill::with('orderProduct', 'product')->get();
     ?>
    <div class="main_header_area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 d-md-flex justify-content-between">
                    <!-- Header Social Area -->
                    <div class="header-social-area">
                    <a href="#"><img src="{{asset('page/img/core-img/logo.png')}}" alt=""></a>

                    </div>
                    <!-- Menu Area -->
                    <div class="main-menu-area">
                        <nav class="navbar navbar-expand-lg align-items-start">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                            <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh Mục</a>
                                        <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                        @foreach($categories as $category)
                                            <a class="dropdown-item" href="{{route('category',['slug'=>$category->slug])}}">{{$category->name}}</a>

                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Cửa hàng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">hot</span> Không gian</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                                </ul>
                                  <!-- tim kiem -->
                        
                            </div>
                        </nav>
                    </div>
                  
                    <div class="top_search" style="width: 20%;">
                    <form action="{{asset('search/')}}" method="get" >
                            <input type="text" placeholder="Tìm kiếm..." title="Nhấn Enter để tìm kiếm" class="form-control" name="result">
                     </form>  
                        </div>                
                    <!-- Help Line -->
                    <div class="help-line">
                    <div class="header-cart-menu d-flex align-items-center ml-auto">
                            <!-- Cart Area -->
                            <div class="cart">
                                <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">{{Session::get('Cart')->totalQuanty ?? 0}}</span> <i class="ti-bag"></i> Giỏ Hàng</a>
                                <!-- Cart List Area Start -->
                                <ul class="cart-list">
                                @if(Session::has('Cart') != null)
                                    @foreach(Session::get('Cart')->products as $dataHeader)
                                    <li>
                                        <a href="#" class="image"><img src="{{asset('images/types/')}}/{{$dataHeader['productInfo']['avatar'] ?? ''}}" class="cart-thumb" alt=""></a>
                                        <div class="cart-item-desc">
                                            <h6><a href="#">{{$dataHeader['productInfo']['name'].'|'.$dataHeader['productInfo']['type'].'|'.$dataHeader['productInfo']['size'] ?? ''}}</a></h6>
                                            <p>{{$dataHeader['quanty'] ?? 1}}x - <span class="price">{{number_format($dataHeader['price'],0,',','.')}}đ</span></p>
                                        </div>
                                        <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                    </li>
                                    @endforeach
                                @endif
                                    <li class="total">
                                        <!-- <span class="pull-right">Total: $20.00</span> -->
                                        <a href="{{route('product.listOrder')}}" class="btn btn-sm btn-cart">View Cart</a>
                                        <a href="{{route('product.listOrder')}}" class="btn btn-sm btn-checkout">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>