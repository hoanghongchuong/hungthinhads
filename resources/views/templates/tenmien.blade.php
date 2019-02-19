@extends('index')
@section('content')
<div class="sev1_w clearfix">
	<div class="container">
	    <div class="row">
	    	@foreach($data as $item)
	       	<div class="col-xs-6 col-sm-4 col-md-3 wow fadeInRight" data-wow-duration="2s">
	          <div class="sev1_colw bd_color">
	             <div class="sev1_col_img1">
	                <span class="sev1_col_img2"><img src="{{asset('upload/news/'.$item->photo)}}"
	                   alt="{{$item->mota}}"></span>
	             </div>
	             <div class="sev1_col_txt">
	                <h2><a href="{{url('chi-tiet/'.$item->alias.'.html')}}">{{$item->name}}</a></h2>
	                <p>{!! $item->mota !!}</p>
	             </div>
	             <div class="sev1_col_btn">
	                <a href="{{url('chi-tiet/'.$item->alias.'.html')}}" class="btn btn-primary">Tìm hiểu thêm <span><i
	                   class="fa fa-angle-right"></i></span></a>
	             </div>
	          </div>
	       	</div>
	       	@endforeach
	    </div>
	</div>
</div>
<div class="jarallax">
	 <div class="service_list wow zoomIn" data-wow-duration="2s">
	    <div class="container">
	       <div class="service_top">
	          <h1>Dịch vụ thiết kế web</h1>
	       </div>
	       <div class="row">
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Giao diện đẹp và phong phú</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">HungThinh Group với rất nhiều mẫu giao diện website đẹp phong phú đa dạng theo từng nghành nghề chúng tôi sẽ mang đến cho khách hàng những website đẹp nhất, hiệu quả nhất, chi phí tối ưu nhất và thời gian triển khai cũng nhanh nhất.</h5>
	                </div>
	             </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Tương thích mọi thiết bị</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">Thiết kế Web chuẩn SEO, tương thích mọi thiết bị. Hệ thống Website chuẩn SEO hỗ trợ tốt nhất cho SEOer. Thiết kế web chuẩn SEO giúp website tối ưu nhất, thân thiện nhất với các công cụ tìm kiếm Google Yahoo Bing giúp lên top một cách dễ dàng.</h5>
	                </div>
	             </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Công nghệ hiện đại</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">Chúng tôi sử dụng công nghệ lập trình mạnh mẽ và tiên tiến nhất hiện nay là PHP, được sử dụng trong 82 % website có dùng ngôn ngữ lập trình phía máy chủ, hiệu suất cao và nhiều khả năng đời mới, tính năng hiện đại và mô hình lập trình hướng đối tượng (OOP) thích hợp.</h5>
	                </div>
	             </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Tính năng chuẩn Seo</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">Chúng tôi thiết kế website theo đúng chuẩn seo bao gồm tối ưu các thẻ H1,H2, meta keyword, meta description, tối ưu url …Giúp trang web thân thiện với các công cụ tìm kiếm và thân thiện với người dung từ đó website sẽ có thứ hạng cao trên trang tìm kiếm </h5>
	                </div>
	             </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Hệ thống quản trị đơn giản</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">Hệ thống quản trị website hoàn toàn bằng tiếng Việt và được tối ưu thân thiện nhất đối với người dùng, hiển thị tốt trên mọi thiết bị, quản trị website cực kỳ đơn giản. ngoài ra bạn sẽ được cung cấp đầy đủ tài liệu và video hướng dẫn sử dụng website.</h5>
	                </div>
	             </div>
	          </div>
	          <div class="col-xs-12 col-sm-6 col-md-4">
	             <div class="service_col">
	                <div class="service_ic">
	                </div>
	                <div class="service_txt">
	                   <h3 align="center">Trợ giúp khách hàng</h3>
	                   <h5 style="text-align: justify; padding-top: 10px">HungThinh Group cam kết hỗ trợ quý khách hàng về website 24/7. Bảo hành và bảo trì website trọn đời.Quý khách hoàn toàn yên tâm khi sử dụng dịch vụ của chúng tôi. Hãy gọi và liên hệ với HungThinh Group để chúng tôi được phục vụ bạn</h5>
	                </div>
	             </div>
	          </div>
	       </div>
	    </div>
	 </div>
</div>
@endsection