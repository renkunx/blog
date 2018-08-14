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
        @foreach ( $newses as $news )
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">{{$news->categories}}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/news/{{ $news->articleid }}">{{$news->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$news->created_at}}</div>
              <p class="card-text mb-auto">{{$news->description}}</p>
              <a href="/news/{{ $news->articleid }}">完整阅读...</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164cf6b83c2%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164cf6b83c2%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2255.765625%22%20y%3D%22130.86875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: auto;">
          </div>
        </div>
        @endforeach
        <div class="flex-md-row mb-4 box-shadow h-md-250">{{ $newses->links() }}</div>
        
    </div>

@endsection