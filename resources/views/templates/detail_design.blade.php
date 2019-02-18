@extends('index')
@section('content')

<style>
    .lapicon_detail .fa-shopping-cart{ background: red;
    font-size: 45px;
    padding-top: 11px;
    padding-left: 12px;
    padding-right: 16px;
    padding-bottom: 11px;
    border-radius: 33px;
    color: white }

     .lapicon_detail .fa-desktop{ 
   background: #f2ca05;
    font-size: 30px;
    padding-top: 18px;
    padding-left: 18px;
    padding-right: 18px;
    padding-bottom: 18px;
    border-radius: 33px;
    color: white;}
     .lapicon_detail .fa-cog{ 
   background: #E0108C;
    font-size: 30px;
    padding-top: 18px;
    padding-left: 21px;
    padding-right: 21px;
    padding-bottom: 18px;
    border-radius: 33px;
    color: white;}

      .lapicon_detail .fa-diamond{ 
   background: #12E139;
   font-size: 30px;
    padding-top: 20px;
    padding-left: 18px;
    padding-right: 18px;
    padding-bottom: 20px;
    border-radius: 34px;
    color: white;}

     .lapicon_detail .fa-heart{ 
   background: #F06700;
   font-size: 30px;
   padding: 19px;
    border-radius: 34px;
    color: white;}

    .lapicon_detail .fa-cloud-upload{ 
   background: #950FE0;
   font-size: 30px;
   padding: 19px;
    border-radius: 34px;
    color: white;}
    .section-header.has-bottom-sep::before {
    content: "";
    display: inline-block;
    height: 1.5px;
    width: 240px;
    background: black;
    position: absolute;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}
.home-content__buttons {
    padding-top: 0rem;
    text-align: left;
}
.home-social {top: 254px;}
.about__line {display: none;}
.section-header.has-bottom-sep::before {top: 46px;}
.item-folio__thumb a { max-height: 350px;}
</style>
<section id="header_detailpost">
    <div class="container-fluid">
        <div class="row row_d_p">
            <div class="col-xs-6" style="padding-bottom: 40px;">
                <h1 style=" color: white; padding-top: 130px;">
                    {{$data->name}}
                </h1>

                <div class="home-content__buttons">
                    <a href="{{url('lien-he')}}" class="b_dkngay btn btn--stroke">
                    ĐĂNG KÝ NGAY
                </a>
                    <a href="{{url('lien-he')}}" class="b_dkngay btn btn--stroke">
                    TƯ VẤN MIỄN PHÍ
                </a>
                </div>
            </div>
            <div class="col-xs-6" style="">
                <ul class="home-social">
                    <li>
                        <a href="{{$setting->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                    </li>
                    <li>
                        <a href="{{$setting->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
                    </li>
                    <li>
                        <a href="{{$setting->google}}"><i class="fa fa-google" aria-hidden="true"></i><span>Google</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- about
================================================== -->
<section id='about' class="s-about">
    <div class="row section-header has-bottom-sep">
        <div class="col-full">
            <h1 style="color: white; text-transform: uppercase;">{{$data->name}}</h1>
        </div>
    </div>
    <!-- end section-header -->

    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-6">
            <img style="max-height: 600px; border-radius: 4px; margin-top: 46px;" src="{{asset('upload/news/'.$data->photo)}}" alt="">
            <p align="center" style="margin-top: 30px; margin-bottom: 20px; ">
                <a class="a_dkngay" href="{{url('lien-he')}}" class " btn btn--stroke">
                ĐĂNG KÝ NGAY
            </a></p>
        </div>
        <div class="col-xs-6 col-md-12 col-lg-6" style="color: white !important">
            {!! $data->content !!}
        </div>

    </div>
    <div class="about__line"></div>

</section>
<section id='services' class="s-services">

    <div class="row section-header has-bottom-sep">
        <div style=" margin-bottom: 20px;">
            <h1>CÁC GÓI THIẾT KẾ WEBSITE</h1>
        </div>
    </div>
    <!-- end section-header -->

    <div class="row services-list block-1-2 block-tab-full">

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-desktop" aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Thiết kế website giá rẻ</h3>
                <p>Chúng tôi cung cấp dịch vụ thiết kế website giá rẻ, giảm thiểu chi phí tối đa cho bạn nhưng giá trị mang lại vượt sự mong đợi
                </p>
            </div>
        </div>

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Thiết kế website TMĐT</h3>
                <p>Bạn là một doanh nghiệp kinh doanh dịch vụ hoặc đang kinh doanh một số sản phẩm, bạn muốn thiết kế một website theo ý tưởng mà bạn hình dung ra trong đầu..
                </p>
            </div>
        </div>

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-diamond " aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Chăm sóc website</h3>
                <p>Đa phần các doanh nghiệp khi xây dựng website không hoàn thiện nội dung của mình. Và tập trung vào quảng cáo hệ thống website, khi khách hàng truy cập vào website thì nội dung không tốt
                </p>
            </div>
        </div>

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Thiết kế website theo yêu cầu</h3>
                <p>Đến với HungThinh, chúng tôi không chỉ thiết kế website theo yêu cầu của bạn mà còn mang đến cho bạn những giải pháp kinh doanh hiệu quả thông qua website của mình.
                </p>
            </div>
        </div>

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Thiết kế lại, nâng cấp website</h3>
                <p>Theo kết quả khảo sát khách hàng và nhận định của chúng tôi, việc làm lại web đa số vì những lý do sau.
                </p>
            </div>
        </div>

        <div class="col-block service-item">
            <div class="service-icon lapicon_detail">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Thiết kế website bán hàng</h3>
                <p>Công ty thiết kế website bán hàng chuyên nghiệp HungThinh chuyên thiết kế web bán hàng chúng tôi đảm bảo sẽ mang đến cho bạn một website đẹp, giá rẻ chất lượng tốt nhất.
                </p>
            </div>
        </div>

    </div>
    <!-- end services-list -->

</section>
<section id='works' class="s-works">

    <div class="intro-wrap">

        <div class="row section-header light-sep">
            <div class="col-full">
                <h3 class="subhead" style="color: white">HungThinh VỚI KHÁCH HÀNG</h3>
                <h1 class="display-2 display-2--light">Những nhận xét của khách hàng về HungThinh</h1>
            </div>
        </div>
        <!-- end section-header -->

    </div>
    <!-- end intro-wrap -->

    <div class="row works-content">
        <div class="col-full masonry-wrap">
            <div class="masonry">
                @foreach($feedback as $f)
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="#" class="thumb-link" title="Shutterbug" data-size="1050x700">
                            <img src="{{asset('upload/hinhanh/'.$f->photo)}}"  alt="">
                        </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                {{$f->name}}
                            </h3>
                            <p class="item-folio__cat">
                                {!! $f->content !!}
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <!-- end masonry -->
        </div>
        <!-- end col-full -->
    </div>
    <!-- end works-content -->

</section>
@endsection