@extends('index')
@section('content')
<section id="hero-area">
    <div class="container">
        <div class="row">
               <div class="col-md-6">
                  <div class="block">
                     <h1 class="wow fadeInDown" style="color: white; visibility: visible; animation-name: fadeInDown;">HOSTING</h1>
                     <p class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;"></p>
                     <p>Web Hosting hay 'Shared Web Hosting' là tài khoản lưu trữ Website của bạn được đặt trên một máy chủ dùng chung.</p>
                     <p></p>
                     <p style=" margin-bottom: 40px;">
                        <a class="btn btn-default btn-home" href="http://safzagroup.com/lienhe.html" role="button">Đăng ký ngay</a>   
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
    </div>
</section>
<div class="hosting_w" style="margin-top: 20px;">
         <div class="container">
            
            <div class="row">
               <div class="StarLine">&nbsp;</div>
               <div class="text-center txt_star">
                  <h1 class="text-danger" style="padding-bottom: 20px;">Bảng giá dịch vụ Linux Hosting</h1>
                  <h4  style="padding-bottom: 20px;">Dịch vụ SSD Hosting chất lượng cao trên máy chủ Linux mạnh mẽ</h4>
               </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
            	<img src="{{asset('public/images/hosting.jpg')}}" alt="">
            </div>
            <!-- <div id="HostFeature">
               <div class="container laptingnangnoibat">
                  <p class=" co_white" style="text-align: center; font-size: 30px; padding-bottom: 10px; padding-top: 10px;">TÍNH NĂNG NỔI BẬT</p>
                  <p align="center" class=" co_white">Hosting Linux của Safza Group sử dụng 100% ổ SSD, đạt tốc độ load web chỉ 1s, với những tính năng ưu việt.</p>
                  <div class="row ListFeature">
                     <div class="col-md-4">
                        <h4 class="co_white">Nhanh Gấp 6 Lần</h4>
                        <p class="co_white">Các máy chủ Shared Hosting tại Safza Group được cài đặt LiteSpeed WebServer giúp tăng tốc độ xử lý nhanh gấp 6 lần so với các hệ thống thông thường.</p>
                     </div>
                     <div class="col-md-4">
                        <h4 class="co_white">Chống Local-Attack</h4>
                        <p class="co_white">Với hệ điều hành CloudLinux được cài đặt trên các máy chủ tại Safza Group thì việc bị tấn công qua Local-Attack không còn là điều lo lắng.</p>
                     </div>
                     <div class="col-md-4">
                        <h4 class="co_white">Tạo Website Trong 1 Phút</h4>
                        <p class="co_white">Ứng dụng Softaculous được cài đặt sẵn trên máy chủ giúp bạn có thể cài đặt các mã nguồn website như Wordpress, Joomla... chỉ trong tíc tắc.</p>
                     </div>
                  </div>
                  <div class="row ListFeature">
                     <div class="col-md-4">
                        <h4 class="co_white">cPanel Chuyên Nghiệp</h4>
                        <p class="co_white">Phần mềm quản trị cPanel được cài đặt sẵn trên các máy chủ Shared Hosting Linux giúp bạn có một giao diện quản lý trực quan với tính năng vượt trội.</p>
                     </div>
                     <div class="col-md-4">
                        <h4 class="co_white">Sao Lưu Hàng Ngày</h4>
                        <p class="co_white">Việc sao lưu dữ liệu tại Safza Group được thực hiện hàng ngày thay vì hàng tuần như thông thường. Với tiêu chí dữ liệu của khách hàng luôn được ưu tiên hàng đầu.</p>
                     </div>
                     <div class="col-md-4">
                        <h4 class="co_white">7 Ngày Dùng Thử</h4>
                        <p class="co_white">Nếu bạn nghi ngờ về chất lượng dịch vụ tại Safza Group bạn có thể đăng ký dùng thử miễn phí trong 7 ngày mà không phải mất bất kỳ chi phí nào.</p>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- <div class="row">
               <div class="StarLine StarLineed">&nbsp;</div>
            </div>
            <div class="row">
               <div class="feature clearfix">
                  <div class="top_feature">
                     <h2>LÝ DO BẠN NÊN DÙNG <span style="color:#2c87bc; font-weight:bold">HOSTING TẠI HungThinh Group</span></h2>
                  </div>
                  <div class="mid_feature">
                     <ul>
                        <li class="wow flipInY" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/icon-td.png"> <span>Tốc độ truy xuất cực nhanh với ổ cứng SSD</span></li>
                        <li class="wow flipInY" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/icon-bangthong.png"> <span>Đường truyền băng thông rộng lên đến 1Gbps</span></li>
                        <li class="wow flipInY" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/icon-baove.png"> <span>An toàn dữ liệu với công nghệ HDD Raid 10</span></li>
                        <li class="wow flipInY" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/icon-dacbiet.png"> <span>Chính sách ưu đãi đặc biệt <small style="color:#F00">(*)</small></span></li>
                        <li class="wow flipInY" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/icon-dollar.png"> <span>Hoàn tiền trong 30 ngày nếu khách hàng không hài lòng</span></li>
                     </ul>
                  </div>
               </div>
            </div> -->
         </div>
        <!--  <div class="hosting_tabs">
            <div class="container">
               <div class="hosting_tabs_li">
                 
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="active">Dịch vụ bổ sung</li>
                     <li>Đặc tính kỹ thuật</li>
                     <li>Thông số kỹ thuật</li>
                  </ul>
               </div>
            </div>
            <div class="hosting_tabs_content">
              
               <div class="tab-content">
                  <div class="tab-pane active" id="hosting_tabs1" role="tabpanel">
                     <div class="w_hosting_tabs1">
                        <div class="container">
                           <table class="table table-bordered table-bordered-d table-hover">
                              <thead>
                                 <tr class="dark">
                                    <th class="fs18 text-uppercase" colspan="3" data-toggle="true">bảng giá DỊCH VỤ CỘNG THÊM</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Bổ sung thêm 1GB băng thông tiếp theo</td>
                                    <td class="fw400"><a href="#">15.000 VNĐ/Tháng</a></td>
                                    <td class="text-center">Liên hệ</td>
                                 </tr>
                                 <tr>
                                    <td>Bổ sung thêm 10GB băng thông tiếp theo</td>
                                    <td class="fw400"><a href="#">100.000 VNĐ/Tháng</a></td>
                                    <td class="text-center">Liên hệ</td>
                                 </tr>
                                 <tr>
                                    <td>Mỗi 100MB lưu trữ tiếp theo</td>
                                    <td class="fw400"><a href="#">30.000 VNĐ/Tháng</a></td>
                                    <td class="text-center">Liên hệ</td>
                                 </tr>
                                 <tr>
                                    <td>Download hợp đồng cung cấp Hosting</td>
                                    <td>&nbsp;</td>
                                    <td style="text-align: center">Tải về</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="hosting_tabs3" role="tabpanel">
                     <div class="w_hosting_tabs3">
                        <div id="HostSpec">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-4 ListTopSpec">
                                    <ul class="TopSpec">
                                       <li><strong>LiteSpeed Web Server</strong> nhanh gấp 3 lần</li>
                                       <li>Chống Local-Attack với <strong>CloudLinux OS</strong></li>
                                       <li>Hệ thống <strong>máy chủ DELL</strong> chuyên dụng</li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4 ListTopSpec">
                                    <ul class="TopSpec">
                                       <li>Cài đặt Website One-Click với <strong>Softaculous</strong></li>
                                       <li>Phần mềm quản trị <strong>cPanel</strong> chuyên nghiệp</li>
                                       <li>Khởi tạo dịch vụ <strong>miễn phí</strong></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4 ListTopSpec">
                                    <ul class="TopSpec">
                                       <li>PHP phiên bản 5.2 đến 5.6</li>
                                       <li>MySQL (MariaDB)</li>
                                       <li>Hệ thống Thống kê và Logs<br>
                                          <br>
                                          &nbsp;
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="feature_section">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-4">
                     <div class="feature_section_img"><img alt="hosting linux" src="http://naiad.vn/event/assets/img/click.jpg"></div>
                  </div>
                  <div class="col-xs-12 col-sm-8">
                     <div class="feature_section_col">
                        <h2>1 Click cài đặt 100+ mã nguồn mở</h2>
                        <div class="feature_section_list">
                           <ul>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/wordpress.jpg" style="height: 70px; width: 160px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/joomla.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/drupal.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/mysql.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/linux.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/prestashop.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/magento.jpg" style="width: 160px; height: 70px;"></a></li>
                              <li><a href="#"><img alt="hosting linux" src="http://safzagroup.com/public/fontend/safza/image/mambo.jpg" style="width: 160px; height: 70px;"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
</div>
@endsection