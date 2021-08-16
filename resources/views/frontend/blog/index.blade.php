@extends('layout.frontend2')
@section('content')
<div id="blog-template">
            <div class="main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="breadcrumb clearfix">
                           <ul>
                              <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                 <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                              </li>
                              <li class="icon-li"><strong>Tin tức</strong> </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div class="news-content">
                           <h2 class="page-heading">
                              <span class="page-heading-title2">{{$title}}</span>
                           </h2>
                           <!-- Begin: Nội dung blog -->
                           <ul class="blog-posts">
                             @foreach($blogs as $item)
                           <li class="post-item">
                                 <article class="entry">
                                    <div class="row">
                                       <div class="col-sm-5">
                                          <div class="entry-thumb image-hover2 text-center">
                                             <a href="{{route('get.blogDetail',$item->bl_slug)}}">
                                             <img src="{{asset('images/news\/')}}{{$item->bl_avatar}}" alt="{{$item->bl_name}}">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-sm-7">
                                          <div class="entry-ci">
                                             <h3 class="entry-title"><a href="{{route('get.blogDetail',$item->bl_slug)}}">{{$item->bl_name}}</a></h3>
                                             <div class="entry-meta-data">
                                                <!-- <span class="author">
                                                <i class="fa fa-user"></i>
                                                by: CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME
                                                </span> -->
                                                <!-- <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 0
                                                </span> -->
                                                <span class="date"><i class="fa fa-calendar"></i> {{date('d/m/Y',strtotime($item->created_at))}} lúc 12:37PM</span>
                                             </div>
                                             <div class="entry-excerpt">
                                                <p>{{textReadmore($item->bl_description_short)}}</p>
                                             </div>
                                             <div class="entry-more">
                                                <a href="{{route('get.blogDetail',$item->bl_slug)}}">Xem thêm</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </li>
                              @endforeach
                           </ul>
                           <div class="col-md-12 content_sortPagiBar pagi">
                              <div id="pagination" class="clearfix">
                                 <!-- pagination -->
                                 {{ $blogs->links('vendor.pagination.custom') }}
                                
                              </div>
                           </div>
                        </div>
                     </div>
                    @include('frontend.blog.sidebar')
         </div>
@stop