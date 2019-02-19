<?php
    $setting = Cache::get('setting');
   	$partners = DB::table('partner')->get();
?>
<footer>
    <div id="list_custom" class="container-fluid">
        <div class="row" data-wow-duration="1s">
            <div class="col-md-4">
                <hr>
            </div>
            <div class="col-md-4">
                <p class="title">Các thương hiệu đồng hành cùng HUNGTHINH</p>
            </div>
            <div class="col-md-4">
                <hr>
            </div>
        </div>
        <div class="row" data-wow-duration="2s">
            <div class="col-md-12" style="padding-bottom: 20px;">
                <p>HUNGTHINH group luôn tự hào là đối tác đồng hành với sự phát triển lớn mạnh cho doanh nghiệp trong và ngoài nước đến nhiều ngành nghề với quy mô lớn nhỏ khác nhau</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow animated fadeInLeft" data-wow-duration="1s">
                <ul class="list_web">
                    @foreach($partners as $partner)
                    <li><img class="img-responsive" src="{{asset('upload/banner/'.$partner->photo)}}"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="footer_list">
        <div class="container-fluid">
            <div class="ft-menu wow animated fadeInLeft" data-wow-duration="1s">
                <ul style="text-align: center;">
                    <li><a href="">Về HUNGTHINH</a></li>
                    <li><a href="">Khách hàng</a></li>
                    <li><a href="">Đối tác</a></li>
                    <li><a href="">Đại lý</a></li>
                    <li><a href="">Chuyên gia</a></li>
                    <li><a href="">Sự kiện</a></li>
                    <li><a href="">Hội thảo</a></li>
                </ul>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5 col-xs-12 wow animated fadeInLeft" data-wow-duration="1s">
                    <p align="left" class="title">DỊCH VỤ - GIẢI PHÁP</p>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul>
                            <li><a target="_blank" href="#">Thiết kế web bán hàng</a></li>
                            <li><a target="_blank" href="#">Thiết kế Landing Page</a></li>
                            <li><a target="_blank" href="#">Thiết kế web chuẩn SEO</a></li>
                            <li><a target="_blank" href="#">Thiết kế web doanh nghiệp</a></li>
                            <li><a target="_blank" href="#">Thiết kế web bất động sản</a></li>
                            <li><a target="_blank" href="#">Thiết kế web theo yêu cầu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul>
                            <li><a target="_blank" href="#">Digital marketing solutions</a></li>
                            <li><a target="_blank" href="#">Thiết kế web Ẩm thực</a></li>
                            <li><a target="_blank" href="#">Thiết kế web Thời trang</a></li>
                            <li><a target="_blank" href="#">Thiết kế web Nội thất</a></li>
                            <li><a target="_blank" href="#">Thiết kế web Mẹ và Bé</a></li>
                            <li><a target="_blank" href="#">Dịch vụ nâng cấp Website</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 wow animated fadeInLeft" data-wow-duration="1s">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <p align="left" class="title">HUNGTHINH GROUP</p>
                        <ul>
                            <li><a target="_blank" href="#">Quảng cáo Zalo</a></li>
                            <li><a target="_blank" href="#">Thiết kế website</a></li>
                            <li><a target="_blank" href="#">Quảng cáo Facebook</a></li>
                            <li><a target="_blank" href="#">Quảng cáo Google</a></li>
                            <li><a target="_blank" href="#">Thiết kế Logo</a></li>
                            <li><a target="_blank" href="#">Nhận diện thương hiệu</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <p align="left" class="title">HỖ TRỢ</p>
                        <ul>
                            <li><a target="_blank" href="{{url('lien-he')}}">Liên hệ với HUNGTHINH</a></li>
                            <li><a target="_blank" href="">Hướng dẫn sử dụng</a></li>
                            <li><a target="_blank" href="">Hình thức thanh toán</a></li>
                            <li><a target="_blank" href="">Thiết kế HUNGTHINH Themes</a></li>
                            <li><a target="_blank" href="">HUNGTHINH CSS Framework</a></li>
                            <li><a target="_blank" href="#">Profile Công ty</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 vesafza">
                        <p align="left" class="title">VỀ HUNGTHINH</p>
                        <ul>
                            <li><a target="_blank" href="#">Báo chí</a></li>
                            <li><a target="_blank" href="#">Tin tức</a></li>
                            <li><a target="_blank" href="">Khuyến mãi</a></li>
                            <li><a target="_blank" href="#">Tuyển dụng</a></li>
                            <li><a target="_blank" href="">Quy định sử dụng</a></li>
                            <li><a target="_blank" href="">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 wow animated fadeInLeft" data-wow-duration="1s">
                    <p class="title">Thông tin liên hệ</p>
                    <p class="content_l">Trụ sở: {{$setting->address}}</p>
                    <p class="content_l">Số điện thoại: {{$setting->phone}}</p>
                    <p class="content_l">Hotline: {{$setting->hotline}} </p>
                    <!-- <p class="content_l">Thời gian làm việc:8:00 - 17:00 Từ Thứ 2 Đến Thứ 7</p> -->
                    <p class="content_l">Email: {{$setting->email}}</p>
                    <p class="content_l">Website: <a href="{{$setting->website}}">{{$setting->website}}</a></p>
                </div>
                <div class="col-md-3 wow animated fadeInDown" align="center" data-wow-duration="1s">
                    <p class="title">Kết nối với chúng tôi</p>
                    <ul>
                        <li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="{{$setting->google}}" title=""><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                        <li><a href="{{$setting->youtube}}" title=""><i class="fa fa-youtube-square fa-2x"></i></a></li>
                    </ul>
                    <!-- <img src="http://safzagroup.com/public/fontend/safza/image/ndth.png"> -->
                </div>
                <div class="col-md-4 wow animated fadeInRight input_footer" data-wow-duration="1s">
                    <p class="title">Tư vấn trực tuyến</p>
                    <p>Để lại email để nhận được tư vấn miến phí</p>
                    <input type="text" class="form-control btn-email" name="" placeholder="Nhập e-mail">
                    <a href="" class="btn submit_f_l"><i class="fa fa-envelope "></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <h3>2019 hungthinhgroup</h3>
    </div>
    <div class="box_fix0206">
        <div class="container">
            <div class="w_fix0206">
                <ul>
                    <li><a href="tel:{{$setting->phone}}"><i class="fa fa-phone" aria-hidden="true"></i><span class="hl_2706">  Hotline 24/7: </span><span>{{$setting->phone}}</span></a></li>
                    <!-- <li><a href="tel:0965822758"><i class="fa fa-phone" aria-hidden="true"></i>  Kỹ thuật: <span>0965822758</span></a></li> -->
                    <!-- <li><a href="#" target="_blank"><i class="fa fa-credit-card" aria-hidden="true"></i>  Profile Công Ty</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</footer>