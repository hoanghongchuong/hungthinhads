@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->get();
?>
<div id="header_second">
    <div class="container-fluid">
        <!-- <img src="public/logo/logo.png" class="logo hvr-grow"> -->
        <div class="row">
            <div class="slider div50">
                <div class="owl-carousel owl-theme slider_carosel">
                    @foreach($slider as $key=>$item)
                    <div class="item">
                        <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="">
                    </div>
                    @endforeach                
                </div>
                <div class="qconline">
                    <p align="right">Chiến dịch quảng cáo online <br> đạt hiệu quả cao nhất</p>
                    <form action="" method="post">
                        {{csrf_field()}}
                        <input class="qhemal" name="email" type="email" required="" placeholder="Nhập e-mail của bạn">
                        <input type="submit" class="subemai" value="Nhận tư vấn miễn phí">
                        
                    </form>
                </div>
            </div>
            <div class="slider mauxanh div50">
                <div class="vongtron">
                    <a href=""><img class="img_l1" src="{{asset('public/images/banner_cp.png')}}" class=""></a>
                    
                </div>
                <div class="conten_vt">
                    <p align="center" class="lap_tt">Cung cấp các giải pháp marketing online <br> hiện đại hiệu quả</p>
                    <p align="center"><a class="timhieu" href="#">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="wp_content">
    <div id="list_service" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 list-title wow animated jackInTheBox" data-wow-duration="1s">
                    <h2 class="title">Chiếm lĩnh thị trường marketing Online</h2>
                    <p>Cung cấp giải pháp tối ưu</p>
                </div>
                <div class="col-md-4 col-sm-4 item-ser hvr-grow-shadow" data-wow-duration="1s">
                    <div class="row">
                        <div class="ser-img">
                            <img src="http://safzagroup.com/public/fontend/safza/image/anh1.png" class="ser-thumb clearfix hvr-grow">
                            <span class="hvr-grow"><img src="http://safzagroup.com/public/fontend/safza/image/web.png" class="ser-icon"><a href="http://safzagroup.com/chi-tiet-bai-viet3">Thiết kế website</a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ser-detail">

                            <P class="pd_l_ser">TỐI ƯU CODE CHUẨN SEO <br> Giao diện reposive mobile Lập trình ngôn ngữ thuần PHP, MYSQL Đáp ứng các yêu cầu thiết kế web khó nhất Với hơn 8 năm kinh nghiệm thiết kế web Cam kết với mức giá website tốt nhất</P>


                            <a href="http://safzagroup.com/chi-tiet-bai-viet3" class="btn btn-default btn-more hvr-grow">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 item-ser hvr-grow-shadow" data-wow-duration="1s">
                    <div class="row">
                        <div class="ser-img">
                            <img src="http://safzagroup.com/public/fontend/safza/image/anh2.png" class="ser-thumb clearfix hvr-grow">
                            <span class="hvr-grow"><img src="http://safzagroup.com/public/fontend/safza/image/video.png" class="ser-icon"><a href="http://safzagroup.com/quang-cao.html">Quảng cáo trực tuyến</a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ser-detail">

                            <p class="pd_l_ser">CÔNG TY CHÚNG TÔI CHUYÊN CUNG CẤP <br>Dịch vụ quảng cáo trực tuyến hiệu quả, với mục tiêu số 1 là đẩy mạnh bán hàng cho doanh nghiệp! Với phương châm đó, toàn thể đội ngũ quản lý/ nhân viên Safza Group luôn tâm niệm "hiệu
                                quả của khách hàng chính là lợi nhuận cao nhất của chúng tôi."</p>
                            <a href="http://safzagroup.com/quang-cao.html" class="btn btn-default btn-more hvr-grow">Xem thêm</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4 item-ser hvr-grow-shadow" data-wow-duration="1s">
                    <div class="row">
                        <div class="ser-img">
                            <img src="http://safzagroup.com/public/fontend/safza/image/anh3.png" class="ser-thumb clearfix hvr-grow">
                            <span class="hvr-grow"><img src="http://safzagroup.com/public/fontend/safza/image/web2.png" class="ser-icon"><a href="http://safzagroup.com/bo-nhan-dien-thuong-hieu.html">Nhận diện thương hiệu</a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ser-detail">

                            <p class="pd_l_ser">CUNG CẤP CÁC DỊCH VỤ <br>thiết kế nhận diện thương hiệu cho doanh nghiệp Cung cấp các giải pháp toàn diện về thiết kế nhận diện thương hiệu cho doanh nghiệp Cung cấp các bước chi tiết về thiết kế nhận diện thương hiệu cho
                                doanh nghiệp
                            </p>
                            <a href="http://safzagroup.com/bo-nhan-dien-thuong-hieu.html" class="btn btn-default btn-more hvr-grow">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
