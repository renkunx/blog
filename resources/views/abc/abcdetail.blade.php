@extends('layouts/app') 
@section('content')

<div class="container">
  <div class="row">
    <div class="card mb-3">
      <img class="card-img-top rounded mx-auto d-block img-fluid z-depth-1 zoom" style="width:50vh;margin-top:5vh;" src="http://p77n9a5vi.bkt.clouddn.com/{{$abc->avatar}}?imageMogr2/auto-orient/thumbnail/350x350/gravity/Center/crop/350x500/interlace/1/blur/1x0/quality/75" alt="image">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <dl class="row">
          <dt class="col-2">姓名</dt>
          <dd class="col-10">{{$abc->name}}</dd>
          
          <dt class="col-2">年龄</dt>
          <dd class="col-10">{{$abc->age}}</dd>
        
          <dt class="col-2">身高</dt>
          <dd class="col-10">{{$abc->height}}cm</dd>
        
          <dt class="col-2">单位</dt>
          <dd class="col-10">{{$abc->work}}</dd>
        
          <dt class="col-2 text-truncate">职位</dt>
          <dd class="col-10">{{$abc->position}}</dd>
        
          <dt class="col-2">微信</dt>
          <dd class="col-10">{{$abc->weixin}}</dd>
        
          <dt class="col-2">电子邮箱</dt>
          <dd class="col-10">{{$abc->email}}</dd>
        
          <dt class="col-2">个人简介</dt>
          <dd class="col-10">{{$abc->descripe}}</dd>
        </dl>
      </div>
    </div>


  </div>

</div>
@endsection