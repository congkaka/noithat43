<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <link href="{!! asset('client/vendor/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">   
    
    <link href="{!! asset('client/css/all.min.css') !!}" rel="stylesheet">   

    <link href="{!! asset('client/css/all.css') !!}" rel="stylesheet">   

    <link href="{!! asset('client/css/main.css') !!}" rel="stylesheet">   
    <script src="{!! asset('client/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('client/js/owl/dist/owl.carousel.min.js') !!}"></script>
</head>

<body>

    <header class="">
        <div id="top-bar" class="container-fluid">
            <div class="row">
                <div class="col-6 top-bar-left">
                    <ul class="list-inline ">
                        <li class="">
                            <i class="fas fa-phone text-light"></i>
                            Hotline:
                            <a href="tel:0868676687">0868676687</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 top-bar-right ">
                    <ul class="list-inline  float-right">
                        <li class="list-inline-item">
                            <a href="#">Cách chọn Size</a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#">Giới thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end top bar -->

        <div id="menu" class="container-fluid ">
            <div class="row">
                <div class="col-3 col-md-2 logo">
                    <a href="index.html"><img src="./img/logo.png" alt=""></a>
                </div>
                <div class="col-md-9 hidden-sm hidden-xs">
                    <nav class="hidden-sm hidden-xs">
                        <ul id="nav" class="nav">
                            <li class="nav-item active"><a class="nav-link" href="/">TRANG CHỦ</a></li>
                            <li class="nav-item ">
                                <a href="/collections/all" class="nav-link">PHÒNG NGỦ <i class="fa fa-angle-right"
                                        data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu nav-item-lv2">
                                        <a class="nav-link" href="/giuong-ngu">Giường ngủ <i
                                                class="fa fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/giuong-ngu-go-cong-nghiep">Giường ngủ gỗ công
                                                    nghiệp</a>
                                            </li>
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/giuong-go-tu-nhien">Giường gỗ tự nhiên</a>
                                            </li>
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/giuong-tan-co-dien">Giường tân cổ điển</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-dau-giuong">Tủ đầu giường</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ban-trang-diem">Bàn trang điểm</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-quan-ao">Tủ quần áo</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/bo-phong-ngu">Bộ phòng ngủ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="/collections/all" class="nav-link">PHÒNG KHÁCH <i class="fa fa-angle-right"
                                        data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu nav-item-lv2">
                                        <a class="nav-link" href="/sofa">Sofa <i class="fa fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/sofa-vang">Sofa văng</a>
                                            </li>
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/sofa-goc">Sofa góc</a>
                                            </li>
                                            <li class="nav-item-lv3">
                                                <a class="nav-link" href="/sofa-giuong">Sofa giường</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ban-tra-sofa">Bàn trà sofa</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ke-tivi">Kệ tivi</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ke-trang-tri">Kệ trang trí</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-giay">Tủ giầy</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="/collections/all" class="nav-link">PHÒNG BẾP <i class="fa fa-angle-right"
                                        data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/bo-ban-ghe-an">Bộ bàn ghế ăn</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-bep">Tủ bếp</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-ruou">Tủ rượu</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a href="/collections/all" class="nav-link">PHÒNG LÀM VIỆC <i class="fa fa-angle-right"
                                        data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ban-van-phong">Bàn làm việc</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ke-sach">kệ sách</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/tu-tai-lieu">Tủ tài liệu</a>
                                    </li>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="/ghe-van-phong">Ghế</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item "><a class="nav-link" href="/anh-ban-giao-khach-hang">TƯ VẤN THIẾT
                                    KẾ</a></li>
                            <li class="nav-item "><a class="nav-link" href="/lien-he">LIÊN HỆ</a></li>
                        </ul>

                    </nav>
                </div>
                <div class="col-1 col-md-1">
                    <div class="market-right float-right ">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search"></i>
                        <i class="fas fa-bars"></i>
                        <form action="" class="form-search">
                            <input type="text" placeholder="Tìm kiếm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header -->

    <!-- breadcrumb -->
    <section id="breadcrumb">
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline list-breadcrumb">
                        <li class="list-inline-item">
                            <a href="">Trang chủ</a>
                            <span class="span-brc">>></span>
                        </li>
                        <li class="list-inline-item">
                            <a href="">Category</a>
                            <span class="span-brc">>></span>
                        </li>
                        <li class="list-inline-item">
                            <a href="">Title product</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumb -->

    <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>project 43</p>
							<p>Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
							<p>Newyork USA</p>
							<p>Mobile: 085.9696.111</p>
							<p>Fax: 0123456789</p>
							<p>Email: thangdqph08320@fpt.edu.vn</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false"></span></a>
								</li>
								<li>
									<a href="#"><span class="iconify" data-icon="akar-icons:twitter-fill" data-inline="false"></span></a>
								</li>
								<li>
									<a href="#"><span class="iconify" data-icon="ant-design:google-plus-circle-filled" data-inline="false"></span></a>
								</li>
								<li>
									<a href="#"><span class="iconify" data-icon="openmoji:youtube" data-inline="false"></span></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	






    <!-- footer -->
    <footer>
        <div class="container-fluid col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-3 swidget-footer">
                    <img src="./img/logo-footer.png" alt="">
                    <p>THƯƠNG HIỆU NỘI THẤT VIỆT NAM</p>
                    <ul class="list-footer-contact">
                        <li>
                            <i class="far fa-envelope"></i>
                            Email :
                            <a href="">son@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            Hotline :
                            <a href="">0868676687</a>
                        </li>
                    </ul>
                    <a href="" class="contact-mail"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="contact-mail"><i class="fas fa-envelope"></i></a>
                </div>
                <div class=" col-12 col-md-3 widget-footer">
                    <h5>TRỢ GIÚP & TƯ VẤN</h5>
                    <ul class="menu-footer">
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Liên hệ</a>
                        </li>
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Bản đồ</a>
                        </li>
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Cách chọn size quần áo</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 widget-footer">
                    <h5>THƯ BÁO</h5>
                    <p>Đăng ký nhận email khuyến mãi</p>
                    <form action="">
                        <input type="text" placeholder="Email của bạn">
                        <button>ĐĂNG KÝ</button>
                    </form>
                </div>
                <div class="col-12 col-md-3 widget-footer">
                    <h5>FACEBOOK</h5>
                </div>
            </div>
        </div>
    </footer>

    <!-- end footer -->
   
    <script src="{!! asset('client/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('client/owl/owl.carousel.min.js') !!}"></script>

    <script src="./main.js"></script>
    <script src="{!! asset('client/owl/dist/main.js') !!}"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script>
        ;
    </script>
</body>

</html>