@extends('index')
@section('content')
<section id="hero-area">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="block">
               <h1 class="wow fadeInDown" style="color: white; visibility: visible; animation-name: fadeInDown;">QUẢNG CÁO</h1>
               <p class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;"></p>
               <p>&nbsp;Ngày nay internet rất phổ cập đến nhiều gia đình,&nbsp;đó là một lợi thế để các doanh nghiệp khai thác&nbsp;quảng cáo&nbsp;sản phẩm và tiếp cận khách hàng một cách dễ dàng.</p>
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
   <!-- .container close -->
</section>
<section id="about" class="section">
   <div class="container">
      <h3 align="center" class="h3_title" style="color: black">GIẢI PHÁP QUẢNG CÁO TRỰC TUYẾN</h3>
      <p align="center" style=""> <span class="sp_icon" style="color: white;"><i class="fa fa-diamond" aria-hidden="true"></i></span></p>
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <div class="sub-heading">
               <h6 class=" h6_detail_c h6_detail_qc"> <i class="fa fa-cogs" style="margin-bottom: 15px;" aria-hidden="true"></i>HungThinh Group với đội ngũ nhân viên nhiều kinh nghiệm, sáng tạo và năng động</h6>
               <h6 class="h6_detail_c h6_detail_qc"> <i class="fa fa-diamond" style="margin-bottom: 15px;" aria-hidden="true"></i>Từng tham gia nhiều dự án về thiết kế và phát triển các ứng dụng trên Internet.</h6>
               <h6 class=" h6_detail_c h6_detail_qc"> <i class="fa fa-money" style="margin-bottom: 15px;" aria-hidden="true"></i>Đem đến cho khách hàng dịch vụ quảng cáo trực tuyến chuyên nghiệp, hiệu quả.</h6>
               <h6 class=" h6_detail_c h6_detail_qc"> <i class="fa fa-users" style="margin-bottom: 15px;" aria-hidden="true"></i> HungThinh Group luôn tâm niệm "hiệu quả của khách hàng chính là lợi nhuận cao nhất" của chúng tôi.</h6>
            </div>
         </div>
         <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
            <img height="400" width="100%" class="img_2" src="{{asset('public/images/img-luc-giac1.png')}}" alt="">
         </div>
      </div>
   </div>
</section>
<section id="dvquangcao" class="section">
   <div class="parallax_cnt">
      <section class="well well__ins1">
         <div class="container">
            <h3 class="text-center" style="padding-bottom: 20px;">
               <span style="font-family:arial,helvetica,sans-serif; ">DỊCH VỤ THIẾT KẾ&nbsp;QUẢNG CÁO TRỰC TUYẾN:</span>
            </h3>
            <div class="row">
               @foreach($news_cate as $cate)

               <div class="col-md-6">
                  <div class="content_qc">
                     <div class="left_d_30">
                        <img src="{{asset('upload/news/'.$cate->photo)}}" alt="">
                     </div>
                     <div class="right_d_70">
                        <h5>{{$cate->name}}</h5>
                        <p>{!! $cate->mota !!}</p>
                     </div>
                  </div>                  
               </div>
               @endforeach
            </div>
         </div>
      </section>
   </div>
</section>

<section id="contact" class="section">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="block">
               <div class="heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <h3 class="h3_title2" style="color: black ;">QUY TRÌNH THIẾT KẾ WEBSITE</h3>
                  <span class="sp_icon3"><i style="color: black;" class="fa fa-diamond" aria-hidden="true"></i></span>
               </div>
            </div>
         </div>
         <div class="row text-center">
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 0ms; animation-name: fadeInUp;">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <h3 class="h3_qt">Gặp gỡ khách hàng, lấy yêu cầu</h3>
               </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="100ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 100ms; animation-name: fadeInUp;">
                  <i class="fa fa-file-image-o" aria-hidden="true"></i>
                  <h3 class="h3_qt">Báo giá</h3>
               </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 200ms; animation-name: fadeInUp;">
                  <i class="fa fa-file-text" aria-hidden="true"></i>
                  <h3 class="h3_qt">Thiết kế giao diện</h3>
               </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 300ms; animation-name: fadeInUp;">
                  <i class="fa fa-codepen" aria-hidden="true"></i>
                  <h3 class="h3_qt">Lập trình</h3>
               </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 400ms; animation-name: fadeInUp;">
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                  <h3 class="h3_qt">Kiểm lỗi website</h3>
               </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6 quytrinh">
               <div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 500ms; animation-name: fadeInUp;">
                  <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                  <h3 class="h3_qt">Bàn giao khách hàng</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection