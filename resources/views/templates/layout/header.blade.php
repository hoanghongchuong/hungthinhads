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