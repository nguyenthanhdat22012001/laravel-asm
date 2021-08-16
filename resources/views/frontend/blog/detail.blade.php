@extends('layout.frontend2')
@section('content')

<div id="article">
            <div class="main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="breadcrumb clearfix">
                           <ul>
                              <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                 <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                              </li>
                              <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="icon-li">
                                 <a title="Tin tức" href="{{route('get.blog')}}" itemprop="url"><span itemprop="title">Tin tức</span></a>
                              </li>
                              <li class="icon-li"><strong>{{$blogDetail->bl_name}}</strong> </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div class="news-detail">
                           <h1 class="page-heading">
                              <span class="page-heading-title2">{{$blogDetail->bl_name}}</span>
                           </h1>
                           <article class="entry-detail">
                              <div class="entry-meta-data">
                                 <span class="author">
                                 <i class="fa fa-user"></i>
                                 by: 
                                 </span>
                                 <span class="date"><i class="fa fa-calendar"></i>  {{date('d/n/Y', strtotime($blogDetail->created_at))}} lúc 12:37PM</span>
                              </div>
                              <div class="body-content content-text clearfix">
                                  {!! $blogDetail->bl_description !!}
                              </div>
                              <div class="social-group">
                                 <!-- AddThis Button BEGIN -->
                                 <div class="addthis_toolbox addthis_default_style">
                                    <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count">
                                       <div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="{{route('get.blogDetail',$blogDetail->bl_slug)}}" data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=227481454296289&amp;container_width=150&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Ftin-tuc%2Fdien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="f19799881025f5" width="90px" height="25px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=227481454296289&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3f0e31baec6dd4%26domain%3Drunecom02.runtime.vn%26origin%3Dhttp%253A%252F%252Frunecom02.runtime.vn%252Ff174e6810b1d604%26relation%3Dparent.parent&amp;container_width=150&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Ftin-tuc%2Fdien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div>
                                    </a>
                                    <a class="addthis_button_google_plusone at300b" g:plusone:size="medium">
                                       <div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;">
                                          <span>
                                             <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1623942909503" name="I0_1623942909503" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Frunecom02.runtime.vn&amp;url=http%3A%2F%2Frunecom02.runtime.vn%2Ftin-tuc%2Fdien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.PNahV6oVl7o.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCPZpf8JNqtIzWYrfd4pILuWfltGEg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1623942909503&amp;_gfid=I0_1623942909503&amp;parent=http%3A%2F%2Frunecom02.runtime.vn&amp;pfname=&amp;rpctoken=30484460" data-gapiattached="true"></iframe></div>
                                             <g:plusone size="medium" lang="null" href="{{route('get.blogDetail',$blogDetail->bl_slug)}}" callback="_at_plusonecallback" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone>
                                          </span>
                                       </div>
                                    </a>
                                    <div class="atclear"></div>
                                 </div>
                                 <script type="text/javascript" src="/scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                                 <!-- AddThis Button END -->        
                              </div>
                           </article>
                           <div class="news-other">
                              <h3><span>Tin tức liên quan</span></h3>
                              <ul>
                              </ul>
                           </div>
                           <!-- Comment -->
                           <div class="single-box">
                           </div>
                           <!-- ./Comment -->
                        </div>
                     </div>
                     @include('frontend.blog.sidebar')
         </div>
@stop