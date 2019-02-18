@extends('index')
@section('content')
<style>
	.p_d20{ color: white; }
</style>
<section id="hero-area">
    <div class="container">
        <div class="row">
           	<div class="col-md-6">
              	<div class="block">
	                <h1 class="wow fadeInDown" style="color: white; visibility: visible; animation-name: fadeInDown;">THIẾT KẾ WEBSITE</h1>
	                <p class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;"></p>
	                <p>Thiết kế website - cách thiết kế website nhanh, chuyên nghiệp, chuẩn SEO với kho giao diện và ứng dụng sẵn có của HungThinh</p>
	                <p></p>
	                <p style=" margin-bottom: 40px;">
	                    <a class="btn btn-default btn-home" href="{{url('lien-he')}}" role="button">Đăng ký ngay</a>   
	                </p>
              	</div>
           	</div>
           	<div class="col-md-6 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
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
</section>
<section id="about" class="section">
        <div class="container">
            <div class="row">
               <h3 align="center" class="h3_title" style=" color: black;">TÍNH NĂNG NỔI BẬT</h3>
               <p align="center" style=""> <span class="sp_icon" style="color: white;"><i class="fa fa-diamond" aria-hidden="true"></i></span></p>
               <div class="col-md-6 col-sm-12 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                  <div class="sub-heading">
                    @foreach($data as $slogan)
                    <h6 class="h6_detail_c"> <i class="{{$slogan->icon}}" aria-hidden="true"></i>{{$slogan->name}}</h6>
                    <div class="p_d20">{!! $slogan->content !!}</div>
                    @endforeach
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="owl-carousel owl-carousel-fix owl-theme">
                        @foreach($sliders as $item)
                        <div class="item">
                            <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="" style="height: 400px;">
                        </div>
                        @endforeach
                    </div>
               </div>
            </div>
        </div>
</section>
<section id="service" class="section">
    <div class="container">
            <div class="row">
               <div class="heading wow fadeInUp" style="visibility: hidden; animation-name: none;">
                  <h3 class="h3_title">CÁC GÓI THIẾT KẾ WEBSITE</h3>
                  <p class="p_tkwebct">HungThinh cung cấp các gói thiết kế phong phú đa dạng</p>
                  <span class="sp_icon2"><i class="fa fa-diamond" aria-hidden="true"></i></span>
               </div>
                @foreach($package_desgin as $package)
                <div class="col-sm-6 col-md-3 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                  <div class="service">
                     <div class="icon-box">
                        <span class="icon">
                        <i class="{{$package->icon}}"></i>   
                        </span>
                     </div>
                     <div class="caption">
                        <h3>{{$package->name}}</h3>
                        <p class="p_tkwebct">{!! $package->content !!}</p>
                     </div>
                  </div>
                </div>
               @endforeach
            </div>
    </div>
</section>
<section id="contact" class="section">
        <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="block">
                     <div class="heading wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <h3 class="h3_title2" style="color: black ;">QUY TRÌNH THIẾT KẾ WEBSITE</h3>
                        <span class="sp_icon3"><i style="color: black;" class="fa fa-diamond" aria-hidden="true"></i></span>
                     </div>
                  </div>
               </div>
               <div class="row text-center">
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 0ms; animation-name: none;">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h3 class="h3_qt">Gặp gỡ khách hàng, lấy yêu cầu</h3>
                     </div>
                  </div>
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 100ms; animation-name: none;">
                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        <h3 class="h3_qt">Báo giá</h3>
                     </div>
                  </div>
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 200ms; animation-name: none;">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <h3 class="h3_qt">Thiết kế giao diện</h3>
                     </div>
                  </div>
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 300ms; animation-name: none;">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <h3 class="h3_qt">Lập trình</h3>
                     </div>
                  </div>
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 400ms; animation-name: none;">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <h3 class="h3_qt">Kiểm lỗi website</h3>
                     </div>
                  </div>
                  <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
                     <div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="400ms" style="visibility: hidden; animation-duration: 400ms; animation-delay: 500ms; animation-name: none;">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <h3 class="h3_qt">Bàn giao khách hàng</h3>
                     </div>
                  </div>
               </div>
            </div>
    </div>
</section>
@endsection