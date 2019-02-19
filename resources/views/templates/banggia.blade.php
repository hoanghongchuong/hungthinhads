@extends('index')
@section('content')
<section id="hero-area">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="block">
                     <h1 class="wow fadeInDown" style="color: white; visibility: visible; animation-name: fadeInDown;">DỊCH VỤ TÊN MIỀN CỦA HungThinh group</h1>
                     <p class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;"></p>
                     <p style=" margin-bottom: 40px;">
                        <a class="btn btn-default btn-home" href="{{url('lien-he')}}" role="button">Đăng ký ngay</a>   
                     </p>
                  </div>
               </div>
               <div class="col-md-6 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <!-- <div class="block">
                     <div class="counter text-center">
                         <ul id="countdown_dashboard">
                             <li>
                                 <div class="dash days_dash">
                                     <p>HỖ TRỢ ĐĂNG KÝ TÊN MIỀN NHANH</p>
                            
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
                     </div>-->
               </div>
            </div>
            <!-- .row close -->
         </div>
         <!-- .container close -->
</section>
<section class="section">
        <div class="container">
            <h1 align="center" style="font-size: 36px; padding-bottom: 30px; padding-top: 30px;">BẢNG GIÁ TÊN MIỀN </h1>
        </div>
        <div class="pricedomain_toptlt">
            <p align="center" class="tenmien_l"><button class="btn btn_lap">Vui lòng chọn</button></p>
        </div>
        <div id="exTab1" class="container">
            <ul class="nav nav-pills" style="padding-left: 32%;padding-right: 30%; padding-bottom: 20px;">
               <li class="active">
                  <a href="#1a" data-toggle="tab">Tên miền Việt Nam</a>
               </li>
               <li><a href="#2a" data-toggle="tab">Tên miền quốc tế</a>
               </li>
               <li><a href="#3a" data-toggle="tab">Tên miền khác</a>
               </li>
            </ul>
            <div class="tab-content clearfix">
               <div class="tab-pane active" id="1a">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12">
                        <div class="pricedomain_cttabs">
                           <figure>
                              <table class="list-price table table-striped" id="domain_vn">
                                 <thead>
                                    <tr>
                                       <th style="width:25%">Tên miền</th>
                                       <th>Phí cài đặt</th>
                                       <th>Phí duy trì mỗi năm</th>
                                       <th>Chuyển về</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>.vn</td>
                                       <td>350.000 đ</td>
                                       <td>480.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.com.vn</td>
                                       <td>350.000 đ</td>
                                       <td>350.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.net.vn</td>
                                       <td>350.000 đ</td>
                                       <td>350.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.org.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.info.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.gov.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.edu.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.biz.vn</td>
                                       <td>350.000 đ</td>
                                       <td>350.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.name.vn</td>
                                       <td>30.000 đ</td>
                                       <td>30.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.pro.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.health.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>.ac.vn</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                    <tr>
                                       <td>Tên miền địa giới hành chính .VN (ví du: hanoi.vn, haiphong.vn,...)</td>
                                       <td>200.000 đ</td>
                                       <td>200.000 đ</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="2a">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12">
                        <div class="pricedomain_cttabs">
                           <figure>
                              <table class="list-price table table-striped" id="domain_vn">
                                 <thead>
                                    <tr>
                                       <th style="width:25%">Tên miền</th>
                                       <th>Phí cài đặt</th>
                                       <th>Phí duy trì mỗi năm</th>
                                       <th>Chuyển về</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>.com</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>299.000 đ</td>
                                       <td>210.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.net</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>299.000 đ</td>
                                       <td>210.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.org</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>299.000 đ</td>
                                       <td>230.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.info</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>299.000 đ</td>
                                       <td>230.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.us</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>205.000 đ</td>
                                       <td>205.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.biz</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>280.000 đ</td>
                                       <td>230.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.cc</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>460.000 đ</td>
                                       <td>460.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.asia</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>360.000 đ</td>
                                       <td>360.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.eu</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>280.000 đ</td>
                                       <td>Không được phép transfer</td>
                                    </tr>
                                    <tr>
                                       <td>.me</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>610.000 đ</td>
                                       <td>610.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.tel</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>340.000 đ</td>
                                       <td>289.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.ws</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>460.000 đ</td>
                                       <td>460.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.name</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>229.000 đ</td>
                                       <td>195.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.tv</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>610.000 đ</td>
                                       <td>519.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.mobi</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>460.000 đ</td>
                                       <td>460.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.bz</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>610.000 đ</td>
                                       <td>610.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.mn</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>910.000 đ</td>
                                       <td>910.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.in</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>340.000 đ</td>
                                       <td>340.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.co.uk</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>205.000 đ</td>
                                       <td>205.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.co</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>610.000 đ</td>
                                       <td>610.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.ca</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>360.000 đ</td>
                                       <td>360.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.es</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>280.000 đ</td>
                                       <td>210.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.de</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>280.000 đ</td>
                                       <td>210.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.xxx</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.400.000 đ</td>
                                       <td>2.400.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.com.ru</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>280.000 đ</td>
                                       <td>210.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.pro</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>360.000 đ</td>
                                       <td>306.000 đ</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </figure>
                        </div>
                     </div>
                  </div>
               	</div>
               	<div class="tab-pane" id="3a">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12">
                        <div class="pricedomain_cttabs">
                           <figure>
                              <table class="list-price table table-striped" id="domain_vn">
                                 <thead>
                                    <tr>
                                       <th style="width:25%">Tên miền</th>
                                       <th>Phí cài đặt</th>
                                       <th>Phí duy trì mỗi năm</th>
                                       <th>Chuyển về</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>.sx</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.pw</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>213.000 đ</td>
                                       <td>181.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.nl</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>227.000 đ</td>
                                       <td>193.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.rest</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>887.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.bar</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.977.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.associates</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>731.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.media</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>731.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.lease</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.186.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.kaufen</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.654.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.toys</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>731.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.town</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>731.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.university</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.183.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.uk</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>199.000 đ</td>
                                       <td>169.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.accountants</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.179.000 đ</td>
                                       <td>1.852.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.actor</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.attorney</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.audio</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.berlin</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.244.000 đ</td>
                                       <td>1.057.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.bharat</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>229.000 đ</td>
                                       <td>195.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.bid</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>722.000 đ</td>
                                       <td>614.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.blackfriday</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.blue</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>364.000 đ</td>
                                       <td>309.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.build</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.657.000 đ</td>
                                       <td>1.408.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.capetown</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>612.000 đ</td>
                                       <td>520.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.casa</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>612.000 đ</td>
                                       <td>520.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.christmas</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.click</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>172.000 đ</td>
                                       <td>146.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.cn</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>213.000 đ</td>
                                       <td>181.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.cn.com</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>969.000 đ</td>
                                       <td>824.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.co.com</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.co.de</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>257.000 đ</td>
                                       <td>218.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.com.de</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>199.000 đ</td>
                                       <td>169.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.consulting</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.cooking</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.country</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.credit</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.179.000 đ</td>
                                       <td>1.852.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.creditcard</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>3.444.000 đ</td>
                                       <td>2.927.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.cricket</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.657.000 đ</td>
                                       <td>1.408.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.degree</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>969.000 đ</td>
                                       <td>824.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.dentist</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.desi</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>419.000 đ</td>
                                       <td>356.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.diet</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.durban</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>612.000 đ</td>
                                       <td>520.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.enegry</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.152.000 đ</td>
                                       <td>1.829.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.engineer</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.fashion</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.fishing</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.flowers</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.forsale</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.garden</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.gift</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.global</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.657.000 đ</td>
                                       <td>1.408.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.green</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.069.000 đ</td>
                                       <td>1.759.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.guitars</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.haus</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.help</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.hiphop</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.horse</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.host</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.124.000 đ</td>
                                       <td>1.805.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.hosting</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.ink</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.investments</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.179.000 đ</td>
                                       <td>1.852.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.jobs</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>3.307.000 đ</td>
                                       <td>2.811.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.joburg</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>612.000 đ</td>
                                       <td>520.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.juegos</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.kim</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>364.000 đ</td>
                                       <td>309.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.lawyer</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.link</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>227.000 đ</td>
                                       <td>193.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.loans</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.179.000 đ</td>
                                       <td>1.852.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.london</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.107.000 đ</td>
                                       <td>941.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.luxury</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>13.207.000 đ</td>
                                       <td>11.226.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.menu</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.mortgage</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.107.000 đ</td>
                                       <td>941.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.nyc</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.ooo</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>639.000 đ</td>
                                       <td>543.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.party</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.pics</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.pictures</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.pink</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>364.000 đ</td>
                                       <td>309.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.press</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.657.000 đ</td>
                                       <td>1.408.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.property</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.pub</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.quebec</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.red</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>364.000 đ</td>
                                       <td>309.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.rocks</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>282.000 đ</td>
                                       <td>240.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.rodeo</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.sagathan</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.sc</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.344.000 đ</td>
                                       <td>1.992.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.science</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.sexy</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>447.000 đ</td>
                                       <td>380.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.shabaka</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>419.000 đ</td>
                                       <td>356.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.social</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.software</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.soy</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.space</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>199.000 đ</td>
                                       <td>169.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.surf</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>612.000 đ</td>
                                       <td>520.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.tattoo</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>567.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.tires</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>2.152.000 đ</td>
                                       <td>1.829.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.tokyo</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>392.000 đ</td>
                                       <td>333.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.trade</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>722.000 đ</td>
                                       <td>614.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.uno</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>419.000 đ</td>
                                       <td>356.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.vc</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>942.000 đ</td>
                                       <td>801.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.vegas</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>1.382.000 đ</td>
                                       <td>1.175.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.vodka</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>694.000 đ</td>
                                       <td>590.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.wang</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.webcam</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>722.000 đ</td>
                                       <td>614.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.website</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>474.000 đ</td>
                                       <td>403.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.wedding</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.wiki</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>639.000 đ</td>
                                       <td>543.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.xyz</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>309.000 đ</td>
                                       <td>263.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.rest</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>887.000 đ</td>
                                       <td>754.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.sx</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>832.000 đ</td>
                                       <td>707.000 đ</td>
                                    </tr>
                                    <tr>
                                       <td>.date</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>739.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.top</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>360.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.win</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>667.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td>.com.au</td>
                                       <td><span style="color:red">Miễn phí</span></td>
                                       <td>630.000 đ</td>
                                       <td>&nbsp;</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </figure>
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
           	<div class="heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <p style="color: white !important; padding-top: 10px; font-size: 30px;">CÁC GÓI THIẾT KẾ WEBSITE</p>
              <p>HungThinh cung cấp các gói thiết kế phong phú đa dạng</p>
           	</div>
           	@foreach($package as $item)
           	<div class="col-sm-6 col-md-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              <div class="service">
                 <div class="icon-box">
                    <span class="icon">
                    <i class="{{$item->icon}}"></i>   
                    </span>
                 </div>
                 <div class="caption">
                    <h3>{{$item->name}}</h3>
                    <p>{!! $item->content !!}</p>
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
	                <div class="heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	                    <p style=" color: black; padding-top: 10px; font-size: 30px; margin-bottom: 10px;">QUY TRÌNH THIẾT KẾ WEBSITE</p>
	                    <p style="color: black">Với một quy trình xây dựng website chuyên nghiệp nhất.</p>
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