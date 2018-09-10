@extends('layouts/app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/blog.css')}}">

<div class="container">
<div class="row">
        <div class="col-md-7 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $news->title }}</h2>
            <p class="blog-post-meta"> 
              <span class="label label-default">{{ $news->created_at }}</span>
              
              
              @foreach ( $news->relatednews as $relatednews )
              
              <span class="label label-info">{{ $relatednews->brand }}</span>
              @endforeach
              <span class="label label-success">{{ $news->visits }}关注</span>
              
            </p>

            

            {!! $news->content !!}
          </div><!-- /.blog-post -->

          <!-- <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> -->

        </div><!-- /.blog-main -->

        <aside class="col-md-5 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded" style="background-color: rgba(143, 159, 175, 0.28) !important">
            <h4 class="font-italic">相关报道</h4>
            <ol class="list-unstyled mb-0">
              @foreach ( $news->relatednews as $relatednews )
                <li><a href="{{$relatednews->url}}">{{ $relatednews->title }}</a></li>  
              @endforeach
    
            </ol>
            
          </div>

          <div class="p-3" style="background-color: rgba(143, 159, 175, 0.28) !important">
            <h4 class="font-italic">事件追踪</h4>
            <ol class="mb-0">
              @foreach ( $news->newstimelines as $newstimeline )
                <li><a href="{{$newstimeline->url}}">{{$newstimeline->date}} {{$newstimeline->title}}</a></li>  
              @endforeach
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div>

</div>

@endsection