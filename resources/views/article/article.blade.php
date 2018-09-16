@extends('layouts.app')

@section('content')

<div class="container">

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">遇见</h1>
          <p class="lead my-3">古往今来，有太多太多的文字，在描写着各种各样的遇见。“蒹葭苍苍，白露为霜，所谓伊人，在水一方。”这是撩动心弦的遇见；“这位妹妹，我曾经见过。”这是宝玉和黛玉之间，初初见面时欢喜的遇见；“幸会，今晚你好吗？”这是《罗马假日》里，安妮公主糊里糊涂的遇见；“遇到你之前，我没有想过结婚，遇到你之后，我结婚没有想过和别的人。”这是钱钟书和杨绛之间，决定一生的遇见。</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">继续阅读 ...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        @foreach ( $articles as $article )
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">{{$article->keywords}}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/article/{{ $article->id }}">{{$article->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$article->created_at}}</div>
              <!-- <p class="card-text mb-auto">{{$article->descripe}}</p>
              <a href="/article/{{ $article->id }}">完整阅读...</a> -->
              <a class="text-dark" href="/article/{{ $article->id }}">
                <img class="flex-auto d-none d-lg-block" data-src="{{$article->image}}" alt="{{$article->keywords}}" src="{{$article->image}}" data-holder-rendered="true" data-holder-rendered="true" style="width: 100%;max-height:500px">
              </a>
            </div>
            
          </div>
        </div>
        @endforeach
        <div>{{ $articles->render() }}</div>
        
    </div>

@endsection