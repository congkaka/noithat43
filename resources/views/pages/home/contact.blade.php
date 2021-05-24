@extends('layouts.web')
@section('content')
@section('css')
@endsection
        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_50">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Gửi Thông Tin</h5>
                                <!-- <p>Bizimle irtibat için mesaj bırakınız</p> -->
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <!-- <div class="col-md-6 mb-3">
                                        <label for="first_name">İsim <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Soyisim <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" value="" required>
                                    </div> -->
                                    <div class="col-12 mb-3">
                                        <label for="fullname">Họ Và tên <span>*</span></label>
                                        <input type="text" class="form-control" id="fullname" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Số Điện Thoại <span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Nội Dung <span>*</span></label>
                                        <textarea name="" id="" cols="40" rows="20" class="form-control" placeholder=""></textarea>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <a href="#" class="btn karl-checkout-btn">Gửi Tin Nhắn</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="address" style="margin-top:47px">
                            <h5>THÔNG TIN LIÊN HỆ</h5>
                            <p>CÔNG TY CỔ PHẦN NỘI THẤT DƯƠNG ĐÔNG</p>
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.306596621155!2d105.79047351440728!3d21.020414893440176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1621632717643!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->
@push('scripts')
@endpush
@endsection