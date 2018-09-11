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

  <div class="card-columns">
    @foreach ( $abcs as $abc )
    <div class="card">
      <img class="card-img-top" src="http://p77n9a5vi.bkt.clouddn.com/{{$abc->avatar}}?imageMogr2/auto-orient/thumbnail/350x350/gravity/Center/crop/350x500/interlace/1/blur/1x0/quality/75" alt="image">
      <div class="card-body">
        <h5 class="card-title">
          <a class="text-dark" href="/abc/{{ $abc->id }}">{{$abc->name}}</a>
        </h5>
        <p class="card-text">{{$abc->descripe}}</p>
        <footer class="blockquote-footer">
          <small>
            Someone famous in <cite title="Source Title">{{$abc->position}}</cite>
          </small>
          <br>
          <a href="/abc/{{ $abc->id }}"> 继续了解...</a>
        </footer>
      </div>
    </div>
    @endforeach
    <div class="flex-md-row mb-4 box-shadow h-md-250">{{ $abcs->links() }}</div>
  </div>
@endsection