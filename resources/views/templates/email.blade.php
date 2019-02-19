@extends('index')
@section('content')
<section id="hero-area">
    <div class="container">
        <div class="row">
           <div class="col-md-6">
              <div class="block">
                 <h1 class="wow fadeInDown" style="color: white">EMAIL</h1>
                 <p class="wow fadeInDown" data-wow-delay="0.3s">
                 <p>Gửi mail h&agrave;ng loạt chỉ với một n&uacute;t nhấn. Kiểm tra thống k&ecirc; kết quả chiến dịch để cải thiện hiệu suất v&agrave; đo lường hiệu quả chiến dịch.</p>
                 </p>
                 <p style=" margin-bottom: 40px;">
                    <a class="btn btn-default btn-home" href="{{url('lien-he')}}" role="button">Đăng ký ngay</a>   
                 </p>
              </div>
           </div>
           <div class="col-md-6 wow zoomIn">
              <div class="block">
                 <div class="counter text-center">
                    <ul id="countdown_dashboard">
                       <li>
                          <div class="dash days_dash">
                             <p>THIẾT KẾ WEBSITE NHANH</p>
                             <span class="dash_title">Gói 3 Ngày</span>
                          </div>
                       </li>
                       <li>
                          <div class="dash hours_dash">
                             <p>THIẾT KẾ WEBSITE NHANH</p>
                             <span class="dash_title">Gói 5 Ngày</span>
                          </div>
                       </li>
                       <li>
                          <div class="dash minutes_dash">
                             <p>THIẾT KẾ WEBSITE NHANH</p>
                             <span class="dash_title">Gói 7 Ngày</span>
                          </div>
                       </li>
                       <li>
                          <div class="dash seconds_dash">
                             <p>THIẾT KẾ WEBSITE NHANH</p>
                             <span class="dash_title">Gói 9 Ngày</span>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
        <!-- .row close -->
    </div>
         <!-- .container close -->
</section>

<section id="contact" class="section" style="margin-top: 30px;margin-bottom: 30px;">
    <div class="container">
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="block">
                 <div class="heading wow fadeInUp">
                    <h3 style="color: black; font-size: 30px;">QUY TRÌNH THIẾT KẾ WEBSITE</h3>
                 </div>
              </div>
           </div>
           <div class="row text-center">
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 0ms;">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h3 class="h3_qt">Gặp gỡ khách hàng, lấy yêu cầu</h3>
                 </div>
              </div>
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 100ms;">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                    <h3 class="h3_qt">Báo giá</h3>
                 </div>
              </div>
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 200ms;">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <h3 class="h3_qt">Thiết kế giao diện</h3>
                 </div>
              </div>
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms;">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    <h3 class="h3_qt">Lập trình</h3>
                 </div>
              </div>
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 400ms;">
                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                    <h3 class="h3_qt">Kiểm lỗi website</h3>
                 </div>
              </div>
              <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                 <div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 500ms;">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <h3 class="h3_qt">Bàn giao khách hàng</h3>
                 </div>
              </div>
           </div>
        </div>
    </div>
</section>
@endsection