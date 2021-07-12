@extends('layout.frontend2')
@section('content')
         <div id="page">
            <div class="main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="menu-about">
                           <h3>
                              <span>
                              Giới thiệu
                              </span>
                           </h3>
                           <ul>
                              <li><a href="/gioi-thieu/ve-chung-toi.html">Về chúng tôi</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-9">
                        <div class="breadcrumb clearfix">
                           <ul>
                              <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                 <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                              </li>
                              <li class="icon-li"><strong>Giới thiệu</strong> </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div id="layout-page">
                           <div class="header-page clearfix">
                              <h1>Về chúng tôi</h1>
                           </div>
                           <div class="content-page">
                              <div>
                                 <div>
                                    <div>
                                       <p>Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p>
                                       <p>Một vài gợi ý cho nội dung trang Giới thiệu:</p>
                                       <div>
                                          <ul>
                                             <li>Bạn là ai</li>
                                             <li>Giá trị kinh doanh của bạn là gì</li>
                                             <li>Địa chỉ cửa hàng</li>
                                             <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
                                             <li>Bạn kinh doanh ngành hàng online được bao lâu</li>
                                             <li>Đội ngũ của bạn gồm những ai</li>
                                             <li>Thông tin liên hệ</li>
                                             <li>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
                                          </ul>
                                       </div>
                                       <p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <a href="https://kute-shop.myharavan.com/admin/page#/detail/1000136574"><strong>đây</strong></a> hoặc thêm những bài viết mới trong phần quản lý <a href="https://kute-shop.myharavan.com/admin/page#/new"><strong>Trang nội dung</strong></a>.</p>
                                       <div>&nbsp;</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@stop