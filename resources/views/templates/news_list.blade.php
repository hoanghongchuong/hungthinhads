@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<style>
    .fa-star,.fa-star-half-o{ color: #10b805 !important;
     margin-right: 0px;}  
     p{
     font-weight: normal;
     }
</style>
<div class="container">
     <div class="row">
        <div class="col-lg-8" style="padding-bottom: 30px;">
           <h5 class="card-header mt_l_h" style="padding-top: 40px;"><span class="dk_duoi">{{$tintuc_cate->name}}</span></h5>
           @if($tintuc_cate->background !='')
           <p><img class="img_m20" style="width: 100%" src="{{asset('upload/news/'.$tintuc_cate->background)}}" alt=""></p>
            @endif
           <div style="padding-left: 5%; padding-right: 5%"></div>
           @foreach($tintuc as $item)
            <div class="col-lg-6 col-md-6" style="min-height: 400px;">
              <aside>
                 <a href="{{url('chi-tiet/'.$item->alias.'.html')}}"><img class="img_cat_post" src="{{asset('upload/news/'.$item->photo)}}"></a>
                 <div class="content-title">
                    <div style=" min-height: 180px">
                       <div style=" height:70px ">
                          <h3><a href="{{url('chi-tiet/'.$item->alias.'.html')}}">{{$item->name}}</a></h3>
                       </div>
                       <div style=" height: 80px; ">
                          {!! $item->mota !!}
                       </div>
                       <div style="width: 70%; float: left;">
                          <small>
                             <i style="padding-right: 4px;" class="fa fa-calendar" data-original-title="" title=""></i> {{date('d/m/Y', strtotime($item->created_at))}}
                          </small>
                       </div>
                       <div style="width: 30%; float: right; margin-bottom: 20px;">
                          <p style="text-align: right;">
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          </p>
                          <div>
                          </div>
                       </div>
                    </div>
                 </div>
              </aside>
            </div>
           @endforeach
           <div class="pagination col-md-12">
               {!! $tintuc->links() !!}
           </div>
        </div>
        @include('templates.layout.sidebar')
        <strong><strong>
        </strong></strong>
     </div>
     <strong><strong>
     </strong></strong>
  </div>
@endsection