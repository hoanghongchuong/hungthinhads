@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<style>
     .gt_ngan_detail p{ font-weight: normal; }
     .motangandm p{ font-weight: normal; }
  </style>
  <div class="container">
     <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
           <!-- Title -->
           <h1 class="mt-4 mt_l_h"> <a class="dk_duoi" href="">{{$news_detail->name}}</a></h1>
           <!-- Author -->
           <!-- Preview Image -->
           <div class="content_detailx">
               {!! $news_detail->content !!}
           </div>
           <hr>
           <!-- Comments Form -->
           <div class="comment-facebook">
               <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="2"></div>
           </div>
           
        </div>
        <!-- Sidebar Widgets Column -->
        @include('templates.layout.sidebar')
        <strong><strong>
        </strong></strong>
     </div>
     <strong>
        <strong>
           <!-- /.row -->
        </strong>
     </strong>
  </div>
@endsection

