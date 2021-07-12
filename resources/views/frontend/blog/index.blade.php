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
                              <span class="page-heading-title2">Tất cả bài viết</span>
                           </h2>
                           <!-- Begin: Nội dung blog -->
                           <ul class="blog-posts">
                              <li class="post-item">
                                 <article class="entry">
                                    <div class="row">
                                       <div class="col-sm-5">
                                          <div class="entry-thumb image-hover2 text-center">
                                             <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">
                                             <img src="{{asset('images/news/blog4.jpg')}}" alt="Diện váy xẻ cao quyến rũ như Miranda Kerr">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-sm-7">
                                          <div class="entry-ci">
                                             <h3 class="entry-title"><a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Diện váy xẻ cao quyến rũ như Miranda Kerr</a></h3>
                                             <div class="entry-meta-data">
                                                <span class="author">
                                                <i class="fa fa-user"></i>
                                                by: CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME
                                                </span>
                                                <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 0
                                                </span>
                                                <span class="date"><i class="fa fa-calendar"></i> 12/08/2017 lúc 12:37PM</span>
                                             </div>
                                             <div class="entry-excerpt">
                                                <p>Với lợi thế đôi chân thon dài kết hợp cùng thân hình chuẩn của một siêu mẫu, Miranda Kerr lựa chọn váy xẻ tà cao để khoe khéo ưu điểm này mỗi khi xuất hiện.Cựu thiên thần nội y nhiều lần khoe vẻ sexy khi diện váy maxi xẻ cao đi sự kiện hoặc dạo phố.Siêu mẫu khoe đôi chân thon dài trong chiếc váy ...</p>
                                             </div>
                                             <div class="entry-more">
                                                <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Xem thêm</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </li>
                              <li class="post-item">
                                 <article class="entry">
                                    <div class="row">
                                       <div class="col-sm-5">
                                          <div class="entry-thumb image-hover2 text-center">
                                             <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">
                                             <img src="{{asset('images/news/blog2.jpg')}}" alt="Những chiếc vòng cổ tạo đẳng cấp cho sao ngoại trên thảm đỏ">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-sm-7">
                                          <div class="entry-ci">
                                             <h3 class="entry-title"><a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Những chiếc vòng cổ tạo đẳng cấp cho sao ngoại trên thảm đỏ</a></h3>
                                             <div class="entry-meta-data">
                                                <span class="author">
                                                <i class="fa fa-user"></i>
                                                by: CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME
                                                </span>
                                                <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 0
                                                </span>
                                                <span class="date"><i class="fa fa-calendar"></i> 12/08/2017 lúc 12:36PM</span>
                                             </div>
                                             <div class="entry-excerpt">
                                                <p>Những chiếc vòng cổ được thiết kế cầu kỳ, lấp lánh, tuy nhỏ nhưng lại là điểm nhấn cho trang phục, giúp các mỹ nhân trở thành tâm điểm ở các sự kiện.Taylor Swift xinh đẹp và sang trọng với chiếc vòng cổ choker thời thượng.Vòng cổ sợi xích dài trễ ngực, đôi bông tai, những chiếc nhẫn chắc nịch, mọ...</p>
                                             </div>
                                             <div class="entry-more">
                                                <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Xem thêm</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </li>
                              <li class="post-item">
                                 <article class="entry">
                                    <div class="row">
                                       <div class="col-sm-5">
                                          <div class="entry-thumb image-hover2 text-center">
                                             <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">
                                             <img src="{{asset('images/news/blog1.jpg')}}" alt="20 bộ váy đẹp của các diễn viên từng đoạt giải Oscar">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-sm-7">
                                          <div class="entry-ci">
                                             <h3 class="entry-title"><a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">20 bộ váy đẹp của các diễn viên từng đoạt giải Oscar</a></h3>
                                             <div class="entry-meta-data">
                                                <span class="author">
                                                <i class="fa fa-user"></i>
                                                by: CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME
                                                </span>
                                                <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 0
                                                </span>
                                                <span class="date"><i class="fa fa-calendar"></i> 12/08/2017 lúc 12:28PM</span>
                                             </div>
                                             <div class="entry-excerpt">
                                                <p>Cùng điểm lại 20 trang phục tinh tế mà các nữ diễn viên chính xuất sắc từng mặc khi lên nhận tượng vàng Oscar từ năm 1996-2015.Tại Oscar năm ngoái, Julianne Moore đã được vinh danh với tượng vàng Oscar trong vai chính phim&nbsp;Still Alice. Ở tuổi 55, nữ diễn viên vẫn rất quyến rũ với bộ váy trắng tuy...</p>
                                             </div>
                                             <div class="entry-more">
                                                <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">Xem thêm</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </li>
                              <li class="post-item">
                                 <article class="entry">
                                    <div class="row">
                                       <div class="col-sm-5">
                                          <div class="entry-thumb image-hover2 text-center">
                                             <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">
                                             <img src="{{asset('images/news/blog3.jpg')}}" alt="Phối quần jeans cạp cao theo phong cách thập niên 1970">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-sm-7">
                                          <div class="entry-ci">
                                             <h3 class="entry-title"><a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Phối quần jeans cạp cao theo phong cách thập niên 1970</a></h3>
                                             <div class="entry-meta-data">
                                                <span class="author">
                                                <i class="fa fa-user"></i>
                                                by: CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME
                                                </span>
                                                <span class="comment-count">
                                                <i class="fa fa-comment-o"></i> 0
                                                </span>
                                                <span class="date"><i class="fa fa-calendar"></i> 12/08/2017 lúc 12:16PM</span>
                                             </div>
                                             <div class="entry-excerpt">
                                                <p>Quần jeans cạp cao xuất hiện từ những năm 1970 đã quay trở lại, được nhiều tín đồ thời trang yêu thích và phối cá tính theo hơi hướng hiện đại, trẻ trung.Item phảng phất nét bụi bặm này vẫn trông nhẹ nhàng khi phối với áo lụa dài tay và giày cao gót họa tiết da trăn.Một biến thể nữ tính khác của ...</p>
                                             </div>
                                             <div class="entry-more">
                                                <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Xem thêm</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </li>
                           </ul>
                        </div>
                     </div>
                    @include('frontend.blog.sidebar')
         </div>
@stop