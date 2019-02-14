<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $menu_top = DB::table('menu')->where('com','menu-top')->where('status',1)->orderBy('stt','asc')->get();
    $menu_bot = \App\Menu::where('com','menu-bot')->where('status',1)->where('parent_id', 0)->orderBy('stt','asc')->get();
    
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
    <span><a href="{{url('')}}" title="HungThinh group"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="HungThinh group"></a></span>
    <a style="position: absolute;" href="javascript:void(0)" class="closebtn fl_left" onclick="closeNav()">&times;</a>
    <div class="block_button bl_bt_2 clearfix">
        <ul class="colmenu cleft">

            <li><a href="{{url('')}}">TRANG CHỦ</a></li>
            @foreach($menu_bot as $bot)
            <li><a href="{{$bot->alias}}"> {{$bot->name}}</a></li>
            @endforeach
        </ul>
        <!-- <ul class="colmenu cright">
            <li><a href="http://safzagroup.com/email.html"> EMAIL</a></li>
            <li><a href="http://safzagroup.com/vps.html"> VPS</a></li>
            <li><a href="http://safzagroup.com/bo-nhan-dien-thuong-hieu.html"> BỘ NHẬN DIỆN THƯƠNG HIỆU</a></li>
            <li><a href="http://safzagroup.com/kho-giao-dien.html"> KHO GIAO DIỆN</a></li>
        </ul> -->
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
    <span><a href="{{url('')}}" title="Naiad"><img src="{{asset('')}}" alt="HungThinh"></a></span>
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
                    @foreach($menu_bot as $bot)
                    <li>
                        <a href="{{$bot->alias}}" style=" text-transform: uppercase;">{{$bot->name}}</a>
                        <div class="sub_menu">
                            @foreach($bot->menu as $menu_sub)
                            <div class="sub_col1">
                                <ul>
                                    <li>
                                        <span class="icon_sub"><img src="{{asset('upload/hinhanh/'.$menu_sub->photo)}}" alt=""></span>
                                        <div class="txt_sub">
                                            <a href="{{$menu_sub->alias}}">
                                            <span class="txt_sub_sp" style=" text-transform: uppercase;">{{$menu_sub->name}}</span>                                           
                                        </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- <div id="header_second">
    <div class="container-fluid">
       
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
</div> -->