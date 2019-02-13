<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $menu_top = DB::table('menu')->where('com','menu-top')->where('status',1)->orderBy('stt','asc')->get();
    
?>
<header id="header">
    <div class="container lg_mnw">
        <div class="row">
            <div class="col-xs-12 col-sm-2 logo_w">
                <div class="logo wow zoomIn" data-wow-duration="2s" data-wow-delay="1" style="visibility: visible; animation-duration: 2s;">
                    <span><a href="{{url('')}}" title="Safza group"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="Safza group"></a></span>
                </div>
            </div>
            <div class="menu_hdw">
                <div class="menu_hd wow zoomIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
                    <ul class="nav navbar-nav">
                        @if($menu_top)
                        @foreach($menu_top as $m_top)
                        <li><a href="{{$m_top->alias}}">{{$m_top->name}}</a></li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="mySidenav" class="sidenav">
    <span><a href="{{url('')}}" title="Safza group"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="Safza group"></a></span>
    <a style="position: absolute;" href="javascript:void(0)" class="closebtn fl_left" onclick="closeNav()">&times;</a>
    <div class="block_button bl_bt_2 clearfix">
        <ul class="colmenu cleft">

            <li><a href="{{url('')}}">TRANG CHỦ</a></li>
            <li><a href="http://safzagroup.com/thiet-ke-website.html"> THIẾT KẾ WEBSITE</a></li>
            <li><a href="http://safzagroup.com/quang-cao.html"> QUẢNG CÁO</a></li>
            <li><a href="http://safzagroup.com/ten-mien.html"> TÊN MIỀN</a></li>
            <li><a href="http://safzagroup.com/hosting.html"> HOSTING</a></li>
        </ul>
        <ul class="colmenu cright">
            <li><a href="http://safzagroup.com/email.html"> EMAIL</a></li>
            <li><a href="http://safzagroup.com/vps.html"> VPS</a></li>
            <li><a href="http://safzagroup.com/bo-nhan-dien-thuong-hieu.html"> BỘ NHẬN DIỆN THƯƠNG HIỆU</a></li>
            <li><a href="http://safzagroup.com/kho-giao-dien.html"> KHO GIAO DIỆN</a></li>
        </ul>
    </div>
    <ul style="display: -webkit-box;">
        <li><a href=""><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-phone fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-envelope fa-2x"></i></a></li>
    </ul>
</div>
<div class="btnopen" style=" position: absolute; z-index: 999">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
</div>
<div class="btnopen" style="text-align: center;">
    <span><a href="{{url('')}}" title="Naiad"><img src="{{asset('')}}" alt="logo Naiad.net"></a></span>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        document.getElementById("wrapper").style.marginLeft = "100%";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("wrapper").style.marginLeft= "0";
    }
</script>
<!-- end nav mobile -->

<!-- nav -->
<div id="nav">
    <div class="menu wow fadeInLeft" data-wow-duration="1.2s" id="menu_rps" style="visibility: visible; animation-duration: 1.2s;">
        <div class="container">
            <div class="menu_liw">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('')}}" title="Trang Chủ"><i class="fa fa-home"></i></a></li>
                    <li>
                        <a href="http://safzagroup.com/thiet-ke-website.html">THIẾT KẾ WEBSITE</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/px8DP-icon-request.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/thiet-ke-web-theo-yeu-cau.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">THIẾT KẾ WEB THEO Y&Ecirc;U CẦU</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/ugIJ2-icon-landingpage.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/thiet-ke-landing-page.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">THIẾT KẾ LANDING PAGE</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/gqFCa-icon-chamsoc1.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/cham-soc-website.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">CHĂM S&Oacute;C WEBSITE</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/X99Yl-icon-nangcap.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/nang-cap-website.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">N&Acirc;NG CẤP WEBSITE</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/HocOK-icon-tmdt (1).png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/website-thuong-mai-dien-tu.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">WEBSITE THƯƠNG MẠI ĐIỆN TỬ</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/G5xhi-icon-shoppingcart.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/website-ban-hang.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">WEBSITE B&Aacute;N H&Agrave;NG</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/Vh0Vz-icon-fashion.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/website-thoi-trang.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">WEBSITE THỜI TRANG</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/8EjwF-icon-jobs.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet-bai-viet/website-theo-nganh-nghe.html">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">WEBSITE THEO NG&Agrave;NH NGHỀ</span>
                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                    </li>
                    <li><a href="http://safzagroup.com/quang-cao.html">QUẢNG CÁO</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/DrtqQ-icon-qc-google.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-google.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O GOOGLE</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/TSOKg-icon-qc-fb.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-facebook.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O FACEBOOK</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/NnmpI-icon-qc-instagram.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-instagram.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O INSTAGRAM</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/9vZ7e-icon-qc-sms1.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/sms-marketing.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">SMS MARKETING</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/xblKO-icon-qc-youtube.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-youtube.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O YOUTUBE</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/ghRJM-icon-qc-email.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/email-marketing.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">EMAIL MARKETING</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/DLsAN-icon-qc-gdn.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-gdn.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O GDN</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/xK5YU-icon-qc-zalo.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/danh-sach-tin/quang-cao-zalo.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢNG C&Aacute;O ZALO</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://safzagroup.com/ten-mien.html">TÊN MIỀN</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/fontend/safza/image/icon-banggia2.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/bang-gia-ten-mien.html">
                                                <span class="txt_sub_sp">BẢNG GIÁ TÊN MIỀN</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/wYml4-icon-dangky.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/dang-ky-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">ĐĂNG K&Yacute; T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/voEtA-icon-hoidap3.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hoi-dap-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">HỎI Đ&Aacute;P T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/SML5S-icon-check.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/kiem-tra-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">KIỂM TRA T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/i496g-icon-giahan.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/gia-han-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">GIA HẠN T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/ZLnYp-icon-quanly1.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/quan-ly-dns-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">QUẢN L&Yacute; DNS T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/vbSL1-icon-tuvan.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/tu-van-chon-ten-mien.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">TƯ VẤN CHỌN T&Ecirc;N MIỀN</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/wItAx-icon-canhan.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/email-ca-nhan.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Email c&aacute; nh&acirc;n</span>
                                               
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="http://safzagroup.com/hosting.html">HOSTING</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/MANrs-images.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hosting-linux.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">HOSTING LINUX</span>
                                             
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/IxyXm-1506994887.jpg" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hosting-windown.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">HOSTING WINDOWN</span>
                                             
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/L5sde-8.jpg" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/kien-thuc-su-dung-hosting.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">KIẾN THỨC SỬ DỤNG HOSTING</span>
                                             
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/0aXlT-1506994887.jpg" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hosting-chat-luong-cao.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Hosting chất lượng cao</span>
                                             
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://safzagroup.com/email.html">EMAIL</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/xIpic-icon-catalogue.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/email-ca-nhan.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Email c&aacute; nh&acirc;n</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/qW7tH-icon-jobs1.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/email-doanh-nghiep.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Email doanh nghiệp</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/ngwHs-icon-emailrelay.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/email-replay.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Email replay</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/Y8h1B-icon-kienthuc.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/kien-thuc-su-dung-email.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Kiến thức sử dụng email</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/sB55k-icon-hoidap2.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hoi-dap-email.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Hỏi đ&aacute;p email</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/kiKXb-email-marketing1-624x352.jpg" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/email-marketing-hieu-qua.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Email Marketing hiệu quả</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://safzagroup.com/vps.html">VPS</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/hiv3B-icon-hoidap2.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/hoi-dap-vps.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Hỏi đ&aacute;p VPS</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/28JxT-icon-thuong-hieu3.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/cap-nhat-he-thong.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Cập nhật hệ thống</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/SdTCH-vps.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/cac-thong-so-can-biet-khi-mua-vps.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">C&aacute;c th&ocirc;ng số cần biết khi mua VPS</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://safzagroup.com/bo-nhan-dien-thuong-hieu.html">BỘ NHẬN DIỆN THƯƠNG HIỆU</a>
                        <div class="sub_menu">
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/qst6L-icon-logo.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/logo.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Logo</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/N6qpp-icon-ho-so-nang-luc.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/ho-so-nang-luc.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Hồ sơ năng lực</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/xDO8F-icon-thuong-hieu3.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/thiet-ke-brochure.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">Thiết kế Brochure</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="http://safzagroup.com/public/backend/post/ow7DZ-icon-1.png" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="http://safzagroup.com/chi-tiet/cach-xay-dung-bo-nhan-dang-thuong-hieu.html">
                                                <span class="txt_sub_sp" style=" text-transform: uppercase;">C&aacute;ch x&acirc;y dựng bộ nhận dạng thương hiệu</span>
                                              
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://safzagroup.com/kho-giao-dien.html">KHO GIAO DIỆN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="header_second">
    <div class="container-fluid">
        <!-- <img src="public/logo/logo.png" class="logo hvr-grow"> -->
        <div class="row">
            <div class="slider div50">
                <div class="owl-carousel owl-theme slider_carosel">
                    <div class="item">
                        <img src="images/bg1.jpg" alt="">
                    </div>
                
                </div>
                <div class="qconline">
                    <p align="right">Chiến dịch quảng cáo online <br> đạt hiệu quả cao nhất</p>
                    <form action="" method="post">
                        <input class="qhemal" name="email" type="email" required="" placeholder="Nhập e-mail của bạn">
                        <input type="submit" class="subemai" value="Nhận tư vấn miễn phí">
                        <input type="hidden" name="_token" value="CCGahp31qwVlu6aeMh5qucKkPXszUrBqExHpZaGS">
                    </form>
                </div>
            </div>
            <div class="slider mauxanh div50">
                <div class="vongtron">
                    <a href=""><img class="img_l1" src="images/banner_cp.png" class=""></a>
                    
                </div>
                <div class="conten_vt">
                    <p align="center" class="lap_tt">Cung cấp các giải pháp marketing online <br> hiện đại hiệu quả</p>
                    <p align="center"><a class="timhieu" href="http://safzagroup.com/chi-tiet/3-giai-phap-hieu-qua-cho-dich-vu-maketing-online.html">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
    </div>
</div>