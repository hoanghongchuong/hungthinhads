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
                  <div class="about-slider">
                     <div class="init-slider owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                           <div class="owl-stage" style="transform: translate3d(-1110px, 0px, 0px); transition: all 0s ease 0s; width: 6105px;">
                              
                             
                              <div class="owl-item" style="width: 555px; margin-right: 0px;">
                                 <div class="about-item">
                                    <img height="265" class="img_2" src="http://safzagroup.com/public/backend/block/sYGCK-học-thiết-kế-đồ-họa_1.png" alt="">
                                 </div>
                              </div>
                              <div class="owl-item" style="width: 555px; margin-right: 0px;">
                                 <div class="about-item">
                                    <img height="265" class="img_2" src="http://safzagroup.com/public/backend/block/6PV4m-reposiver-web-banner.jpg" alt="">
                                 </div>
                              </div>
                              <div class="owl-item" style="width: 555px; margin-right: 0px;">
                                 <div class="about-item">
                                    <img height="265" class="img_2" src="http://safzagroup.com/public/backend/block/1ESiy-w1.jpg" alt="">
                                 </div>
                              </div>
                              <div class="owl-item cloned" style="width: 555px; margin-right: 0px;">
                                 <div class="about-item">
                                    <img height="265" class="img_2" src="http://safzagroup.com/public/backend/block/gJlD9-quy-trinh-quang-cao-website-hoatech.jpg" alt="">
                                 </div>
                              </div>
                              <div class="owl-item cloned" style="width: 555px; margin-right: 0px;">
                                 <div class="about-item">
                                    <img height="265" class="img_2" src="http://safzagroup.com/public/backend/block/68WhL-26_2_2014_13_24_09_jv0tp327fa1bhf9744c4r54f27_se3lz2n161.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="owl-controls">
                           <!-- <div class="owl-nav">
                              <div class="owl-prev" style="display: none;">prev</div>
                              <div class="owl-next" style="display: none;">next</div>
                           </div> -->
                           <div class="owl-dots" style="">
                              <!-- <div class="owl-dot active"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div> -->
                           </div>
                        </div>
                     </div>
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
                  <p class="p_tkwebct">Safza cung cấp các gói thiết kế phong phú đa dạng</p>
                  <span class="sp_icon2"><i class="fa fa-diamond" aria-hidden="true"></i></span>
               </div>
               <div class="col-sm-6 col-md-3 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                  <div class="service">
                     <div class="icon-box">
                        <span class="icon">
                        <i class="ion-android-desktop"></i>   
                        </span>
                     </div>
                     <div class="caption">
                        <h3>Thiết kế website giá rẻ</h3>
                        <p class="p_tkwebct">Chúng tôi cung cấp dịch vụ thiết kế website giá rẻ, giảm thiểu chi phí tối đa cho bạn nhưng giá trị mang lại vượt sự mong đợi</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                  <div class="service">
                     <div class="icon-box">
                        <span class="icon">
                        <i class="ion-android-desktop"></i>   
                        </span>
                     </div>
                     <div class="caption">
                        <h3>Thiết kế website TMĐT</h3>
                        <p class="p_tkwebct">Bạn là một doanh nghiệp kinh doanh dịch vụ hoặc đang kinh doanh một số sản phẩm, bạn muốn thiết kế một website theo ý tưởng mà bạn hình dung ra trong đầu..</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                  <div class="service">
                     <div class="icon-box">
                        <span class="icon">
                        <i class="ion-speedometer"></i>   
                        </span>
                     </div>
                     <div class="caption">
                        <h3>Chăm sóc website</h3>
                        <p class="p_tkwebct">Đa phần các doanh nghiệp khi xây dựng website không hoàn thiện nội dung của mình. Và tập trung vào quảng cáo hệ thống website, khi khách hàng truy cập vào website thì nội dung không tốt</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                  <div class="service">
                     <div class="icon-box">
                        <span class="icon">
                        <i class="ion-ios-infinite-outline"></i>   
                        </span>
                     </div>
                     <div class="caption">
                        <h3>Thiết kế website theo yêu cầu</h3>
                        <p class="p_tkwebct">Đến với Safzagroup.com, chúng tôi không chỉ thiết kế website theo yêu cầu của bạn mà còn mang đến cho bạn những giải pháp kinh doanh hiệu quả thông qua website của mình.</p>
                     </div>
                  </div>
               </div>
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