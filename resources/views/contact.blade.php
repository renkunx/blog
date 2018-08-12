@extends('layouts.app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/timeline.css')}}">
       <div class="container">
           <h3 class="text-center text-uppercase">联系我们</h3>
           <p class="text-center w-75 m-auto">一个专业的技术团队，位于西安高新区，提供如下服务：</p>
           <p class="text-center w-75 m-auto">金融行业/电商行业/零售行业解决方案</p>
           <p class="text-center w-75 m-auto">微信/支付宝认证金牌服务商</p>
           <p class="text-center w-75 m-auto">微信/支付宝小程序开发</p>
           <p class="text-center w-75 m-auto">企业网站/公众号建设</p>
           <p class="text-center w-75 m-auto">移动应用开发</p>
           <p class="text-center w-75 m-auto">软件开发</p>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-6 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <a href="tel:+8618629080248">+86 186 2908 0248</a>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-6 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <a href="mailto:rk@pusi.site?subject=项目合作">rk@pusi.site</a>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-6 my-5">
                 <div class="card border-0">
                    <div class="card-body text-center">
                      <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                      <h4 class="text-uppercase mb-5">office loaction</h4>
                      <address>西安市高新区高新六路北口铁建瑞园3-1-203</address>
                    </div>
                  </div>
              </div>
             <div class="col-sm-12 col-md-6 col-lg-6 my-5">
                 <div class="card border-0">
                 <div class="card-body text-center">
                 <iframe width="350" height="350" frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://f.amap.com/6CCNc_0395nCQ'></iframe>'
                    </div>
                  </div>
              </div>
           </div>

           <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">2017.11.21</h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                    </div>
                    <div class="timeline-body">
                        <p>西安爱普斯信息科技有限公司成立</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">2018.3.11</h4>
                    </div>
                    <div class="timeline-body">
                        <p>易递取产品发布</p>
                        <p>致力于解决快递最后一公里问题，是一款包裹管理小程序，基于微信小程序生态，覆盖 android 和 ios 平台。</p>
                        <ul>
                            <li>有序的管理包裹，让您管理大量包裹事半功倍；</li>
                            <li>使用提货码双向保证安全；</li>
                            <li>微信通知降低成本，提高满意度;</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">...</h4>
                    </div>
                    <div class="timeline-body">
                        <p>正在制作更优秀的产品</p>
                    </div>
                </div>
            </li>
            <!-- <li>
                <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    </div>
                </div>
            </li> -->
        </ul>
       </div>
       @endsection