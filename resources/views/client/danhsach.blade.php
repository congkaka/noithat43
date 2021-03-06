<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
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

  
    <title>Shop Homepage - Start Bootstrap Template</title>

<!-- Bootstrap core CSS -->
<link href="{!! asset('client/vendor/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">   

<!-- Custom styles for this template -->
<!-- <link href="css/shop-homepage.css" rel="stylesheet"> -->
<link href="{!! asset('client/danhsach.css') !!}" rel="stylesheet">   
<link href="./css/css.css" rel="stylesheet">
<link href="{!! asset('client/css/css.css') !!}" rel="stylesheet">   
</head>

<body>

  <!-- Navigation -->
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
                        <a href="#">C??ch ch???n Size</a>
                    </li>
                    <li class="list-inline-item ">
                        <a href="#">Gi???i thi???u</a>
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
                        <li class="nav-item active"><a class="nav-link" href="/">TRANG CH???</a></li>
                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">PH??NG NG??? <i class="fa fa-angle-right"
                                    data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu nav-item-lv2">
                                    <a class="nav-link" href="/giuong-ngu">Gi?????ng ng??? <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/giuong-ngu-go-cong-nghiep">Gi?????ng ng??? g??? c??ng
                                                nghi???p</a>
                                        </li>
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/giuong-go-tu-nhien">Gi?????ng g??? t??? nhi??n</a>
                                        </li>
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/giuong-tan-co-dien">Gi?????ng t??n c??? ??i???n</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-dau-giuong">T??? ?????u gi?????ng</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ban-trang-diem">B??n trang ??i???m</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-quan-ao">T??? qu???n ??o</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/bo-phong-ngu">B??? ph??ng ng???</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">PH??NG KH??CH <i class="fa fa-angle-right"
                                    data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu nav-item-lv2">
                                    <a class="nav-link" href="/sofa">Sofa <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/sofa-vang">Sofa v??ng</a>
                                        </li>
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/sofa-goc">Sofa g??c</a>
                                        </li>
                                        <li class="nav-item-lv3">
                                            <a class="nav-link" href="/sofa-giuong">Sofa gi?????ng</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ban-tra-sofa">B??n tr?? sofa</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ke-tivi">K??? tivi</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ke-trang-tri">K??? trang tr??</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-giay">T??? gi???y</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">PH??NG B???P <i class="fa fa-angle-right"
                                    data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/bo-ban-ghe-an">B??? b??n gh??? ??n</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-bep">T??? b???p</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-ruou">T??? r?????u</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">PH??NG L??M VI???C <i class="fa fa-angle-right"
                                    data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ban-van-phong">B??n l??m vi???c</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ke-sach">k??? s??ch</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/tu-tai-lieu">T??? t??i li???u</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/ghe-van-phong">Gh???</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item "><a class="nav-link" href="/anh-ban-giao-khach-hang">T?? V???N THI???T
                                K???</a></li>
                        <li class="nav-item "><a class="nav-link" href="/lien-he">LI??N H???</a></li>
                    </ul>

                </nav>
            </div>
            <div class="col-1 col-md-1">
                <div class="market-right float-right ">
                    <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-search"></i>
                    <i class="fas fa-bars"></i>
                    <form action="" class="form-search">
                        <input type="text" placeholder="T??m ki???m">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

  <!-- Page Content -->
  
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">All products</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Category <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="box">
          <label class="input-container closed">
            <div class="shadow"></div>
            <div class="center">
              <input type="text" class="input" placeholder="Search">
            </div>
            <div class="sticks"></div>
          </label>
        </div>  
      </form>
    </div>
  </nav>
    <div class="row">

   

      <div class="col">


        <div class="row box-wrap">

          <div class="  col-lg-3 col-md-6 mb-4">
            <div class="card  client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <span>Th??m v??o gi??? h??ng</span>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card  client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card  client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card  client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card  client  client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><div class=" col-lg-3 col-md-6 mb-4">
            <div class="card client h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    
  </div>
  <div class="col-12   "style="text-align:center" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group" role="group" aria-label="Third group">
      <button type="button" class="btn btn-outline-secondary">1</button>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
      <button type="button" class="btn btn-outline-secondary">2</button>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
      <button type="button" class="btn btn-outline-secondary">3</button>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
      <button type="button" class="btn btn-outline-secondary">4</button>
    </div>
  </div>
  <!-- /.container -->

 <!-- footer -->
 <footer>
  <div class="container-fluid col-12 col-md-12">
      <div class="row">
          <div class="col-12 col-md-3 swidget-footer">
              <img src="./img/logo-footer.png" alt="">
              <p>TH????NG HI???U N???I TH???T VI???T NAM</p>
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
              <h5>TR??? GI??P & T?? V???N</h5>
              <ul class="menu-footer">
                  <li class="">
                      <a href=""><i class="fas fa-angle-double-right"></i> Li??n h???</a>
                  </li>
                  <li class="">
                      <a href=""><i class="fas fa-angle-double-right"></i> B???n ?????</a>
                  </li>
                  <li class="">
                      <a href=""><i class="fas fa-angle-double-right"></i> C??ch ch???n size qu???n ??o</a>
                  </li>
              </ul>
          </div>
          <div class="col-12 col-md-3 widget-footer">
              <h5>TH?? B??O</h5>
              <p>????ng k?? nh???n email khuy???n m??i</p>
              <form action="">
                  <input type="text" placeholder="Email c???a b???n">
                  <button>????NG K??</button>
              </form>
          </div>
          <div class="col-12 col-md-3 widget-footer">
              <h5>FACEBOOK</h5>
          </div>
      </div>
  </div>
</footer>

<!-- end footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="{!! asset('client/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

</body>

</html>