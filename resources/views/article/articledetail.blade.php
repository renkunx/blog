@extends('layouts/app')

@section('head')
<meta name="descripe" content="{{$article->descripe}}">
<meta name="author" content="{{ $article->author }}">
<title>{{ $article->title }}</title>
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/blog.css')}}">
<div class="container">
        <div class="col-12 blog-main">
            <div class="blog-post">
              <h2 class="blog-post-title">{{ $article->title }}</h2>
              <p class="blog-post-meta"> 
                <span class="label label-default">{{ $article->created_at }}</span>
                <span class="label label-success">{{ $article->author }}</span>
                <span class="label label-info">{{ $article->keywords }}</span>
                <span>·{{ $article->visits }}阅读</span>
              </p>
              <div class="content">
                {!! $article->content !!}
              </div>
            </div>
        </div>
</div>
@endsection