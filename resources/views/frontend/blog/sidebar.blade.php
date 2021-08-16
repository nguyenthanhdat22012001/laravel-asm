<div class="col-md-3">
   <div id="left_column">
      <div class="block left-module">
         <p class="title_block">Danh mục tin tức</p>
         <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
               <div class="layered-content">
                  <ul class="tree-menu">
                     @foreach($categoryBlogGlobal as $item)
                     <li><a href="{{ route('get.categoryblog', $item->cbl_slug) }}"><span class="menu-icon"><i class="fa fa-arrow-circle-o-right"></i></span> <span class="menu-label">{{$item['cbl_name']}}</span></a></li>
                     @endforeach
                  </ul>
               </div>
            </div>
            <!-- ./layered -->
         </div>
      </div>
   </div>
   <div id="left_column">
      <div class="block left-module">
         <p class="title_block">Bài viết nổi bật</p>
         <div class="block_content">
            <!-- layered -->
            <div class="layered">
               <div class="layered-content">
                  <ul class="blog-list-sidebar clearfix">
                     <!--Begin: Bài viết mới nhất-->
                     @foreach($blogHotGlobal as $item)
                     <li>
                        <div class="post-thumb">
                           <a href="{{route('get.blogDetail',$item->bl_slug)}}"><img src="{{asset('images/news\/')}}{{$item->bl_avatar}}" alt="{{$item->bl_name}}"></a>
                        </div>
                        <div class="post-info">
                           <h5 class="entry_title"><a href="{{route('get.blogDetail',$item->bl_slug)}}">{{$item->bl_name}}</a></h5>
                           <div class="post-meta">
                              <span class="date"><i class="fa fa-calendar"></i> {{date('d/n/Y', strtotime($item->created_at))}}</span> 
                           </div>
                        </div>
                     </li>
                     @endforeach
                     <!--End: Bài viết mới nhất-->
                  </ul>
               </div>
            </div>
            <!-- ./layered -->
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>