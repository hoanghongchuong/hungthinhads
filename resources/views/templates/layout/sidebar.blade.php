<?php
    $setting = Cache::get('setting');
    $recentlyPost = DB::table('news')->where('status',1)->where('com','bai-viet')->orderby('created_at','desc')->take(8)->get();
?>
<div class="col-lg-4">
    <div class="widget-sidebar">
      <h5 class="card-header mt_l_h"><span class="dk_duoi">Bài viết mới nhất</span></h5>
      <div class="content-widget-sidebar" style=" margin-top: 20px;">
         <ul>
            @foreach($recentlyPost as $post)
            <li class="recent-post">
               <div class="post-img">
                  <a href="{{url('chi-tiet/'.$post->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$post->photo)}}" class="img-responsive"></a>
               </div>
               <a style="color: black; font-weight: bold; font-size: 16px;" href="{{url('chi-tiet/'.$post->alias.'.html')}}">
                  <h5 style="font-size: 15px; text-align: justify; font-weight: bold; ">{{$post->name}}</h5>
               </a>
               <p style=" text-align: justify; font-size: 5px !important;"></p>
               {!! $post->mota !!}
               <p><strong><small><i style="padding-right: 4px;" class="fa fa-calendar" data-original-title="" title=""></i>{{date('d/m/Y', strtotime($post->created_at))}}</small></strong></p>
               <strong>
               </strong>
            </li>
            <hr>
            @endforeach
         </ul>
         <strong><strong>
         </strong></strong>
      </div>
      <strong><strong>
      </strong></strong>
    </div>
   <!--  <strong>
      <strong>
         <div class="widget-sidebar">
            <h2 class="title-widget-sidebar">VIDEO</h2>
            <div class="last-post">
               <iframe width="100%" height="200" src="https://www.youtube.com/watch?v=AwsYcRFf7sE" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <hr>
         </div>
        
      </strong>
    </strong> -->
</div>