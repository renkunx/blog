@extends('layouts/app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/blog.css')}}">

<div class="container">
<div class="row">
        <div class="col-12 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $article->title }}</h2>
            <p class="blog-post-meta"> {{ $article->author }} {{ $article->created_at }} </p>
            <div class="content">
              {!! $article->content !!}
            </div>
          </div>
        </div>
      </div>
</div>
@endsection