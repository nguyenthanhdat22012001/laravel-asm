@extends('layout.frontend1')
@section('content')
</div>
         <div class="slideshow">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9 ">
                     <div id="home-slider">
                        <div class="header-top-right">
                           <div class="homeslider">
                              <ul id="contenhomeslider">
                                 <li>
                                    <a href="#">
                                    <img class="img-responsive" alt="01" src="{{asset('images/slider/banner_silder_2.jpg')}}">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                    <img class="img-responsive" alt="02" src="{{asset('images/slider/banner_silder_3.jpg')}}">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                    <img class="img-responsive" alt="03" src="{{asset('images/slider/banner_silder_4.jpg')}}">
                                    </a>
                                 </li>                               
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--Begin-->
                     <!--End-->                        
                  </div>
               </div>
            </div>
         </div>
         <div class="adv">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!--Begin-->
                     <div class="product-content" ng-controller="productController" ng-init="initProductPromotionSlideController('ProductPromotionSlides')">
                        <h2 class="page-heading">
                           <span class="page-heading-title">
                           Sản phẩm khuyến mãi
                           </span>
                        </h2>
                        <div class="latest-deals-product">
                           <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="10" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                              <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" title="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Thêm vào giỏ</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" title="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Thêm vào giỏ</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" title="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Thêm vào giỏ</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" title="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Thêm vào giỏ</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" title="Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Thêm vào giỏ</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;₫</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                           </ul>
                        </div>
                     </div>
                     <!--End-->
                     <script type="text/javascript">
                        window.ProductPromotionSlides = [{"Id":51001,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung","Serial":"","Name":"Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung","CreatedDate":"2017-08-12T15:32:00","UpdatedDate":"2017-08-12T15:32:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p35_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p35_large.jpg","Summary":"<p>Tên Sản PhẩmĐầm noel đuôi cáChất LiệuCát HànMàu SắcĐỏSize+ size M: Chiều dài đầm: 85cm, Ngực 80-84cm, Eo 68-72cm, Mông 88-92cm+ size L: Chiều dài đầm: 86cm, Ngực 84-88cm, Eo 72-76cm, Mông 92-96cm+ ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":620000.0000,"StrPrice":"620.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":400000.0000,"StrDiscountPrice":"400.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":35.0,"StrPercent":"35","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":1,"Inactive":false,"Timestamp":"AAAAAAAqY3k=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51002,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-maxi-du-tiec-hoa-hong-nh028","Serial":"","Name":"Đầm maxi dự tiệc hoa hồng - NH028","CreatedDate":"2017-08-12T23:13:00","UpdatedDate":"2017-08-12T23:14:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p49_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p49_large.jpg","Summary":"<p>Phí vận chuyển & thời gian nhận hàngPhí vận chuyển toàn : + Đối với khu vực nội thành TPHCM : Miễn phí vận chuyển+ Đối với khu vực ngoại thành TPHCM  ( Q9, Q12, Thủ Đức, Bình Tân ) : ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":240000.0000,"StrPrice":"240.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":190000.0000,"StrDiscountPrice":"190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":21.0,"StrPercent":"21","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":2,"Inactive":false,"Timestamp":"AAAAAAAqY7I=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51003,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-body-lap-the-tay-dai","Serial":"","Name":"Đầm body lập thể tay dài","CreatedDate":"2017-08-12T23:20:00","UpdatedDate":"2017-08-12T23:20:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p50_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p50_large.jpg","Summary":"<p>ĐIỂM NỔI BẬTĐầm body lập thể tay dài có kiểu dáng đơn giản, đầm body cổ tròn, tay dài mang đến phong cách năng động, hiện đại  Họa tiết kẻ ô vuông đen trên nền trắng nổi bật, tạo điểm nhấn cho sản ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":560000.0000,"StrPrice":"560.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":310000.0000,"StrDiscountPrice":"310.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":45.0,"StrPercent":"45","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":3,"Inactive":false,"Timestamp":"AAAAAAAqY7Y=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51004,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-mac-nha-tay-lo-nitimo-2001","Serial":"","Name":"Đầm mặc nhà tay lỡ NITIMO 2001","CreatedDate":"2017-08-12T23:39:00","UpdatedDate":"2017-08-12T23:39:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p51_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p51_large.jpg","Summary":"<p>ĐIỂM NỔI BẬTĐầm mặc nhà tay lỡ NITIMO 2001 có thiết kế đơn giản, đầm suông cổ tròn, tay lững mang đến nét duyên dáng cho người mặc                       Cổ cách điệu phối nút ở trước xinh xắn giúp ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":280000.0000,"StrPrice":"280.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":190000.0000,"StrDiscountPrice":"190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":32.0,"StrPercent":"32","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":4,"Inactive":false,"Timestamp":"AAAAAAAqY7o=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51007,"ShopId":2198,"ProductGroupId":40397,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"giay-tennis-t19-xanh","Serial":"","Name":"Giày Tennis T19 xanh","CreatedDate":"2017-08-13T00:05:00","UpdatedDate":"2017-08-13T00:05:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p55_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p55_large.jpg","Summary":"<p>Phần trên: da đan kết bởi chất liệu sợi tổng hợp siêu nhỏ tạo sự thẩm mỹ, nhẹ, êm và chắc chắn chịu sự ma sát cao kết hợp tấm lưới thông thoáng, không giữ mồ hôi, mát chân.• Miếng lót trong: bằng...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":900000.0000,"StrPrice":"900.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":790000.0000,"StrDiscountPrice":"790.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":12.0,"StrPercent":"12","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":7,"Inactive":false,"Timestamp":"AAAAAAAqY8w=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51010,"ShopId":2198,"ProductGroupId":40397,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"vot-tennis-wilson-pro-staff-97-ls-wrt7250102","Serial":"","Name":"Vợt tennis Wilson Pro Staff 97 LS WRT7250102","CreatedDate":"2017-08-13T18:55:00","UpdatedDate":"2017-08-13T18:55:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p58_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p58_large.jpg","Summary":"<p>Vợt tennis Wilson Pro Staff 97 LS WRT7250102Vợt tennis Wilson Pro Staff 97 LS WRT7250102 là một trong những mẫu vợt tennis mới trong năm 2015 của Wilson. Vợt được sản xuất trên công nghê...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":6400000.0000,"StrPrice":"6.400.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":4150000.0000,"StrDiscountPrice":"4.150.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":35.0,"StrPercent":"35","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":10,"Inactive":false,"Timestamp":"AAAAAAAqY94=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51013,"ShopId":2198,"ProductGroupId":40418,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"noi-com-dien-tu-philips-hd3130","Serial":"","Name":"Nồi Cơm Điện Tử PHILIPS HD3130","CreatedDate":"2017-08-13T19:05:00","UpdatedDate":"2017-08-13T19:05:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p61_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p61_large.jpg","Summary":"<p>Tính năng sản phẩmThông Tin ChungLoại Sản PhẩmNồi Cơm Điện TửModelHD3130Dung tích1.8 LítChế độ nấu7 chế độ nấu : Hầm, Nấu nhanh, Hâm nóng, Nấu cơm, Làm bánh, Giữ ấm, Nấu cháo.Chức năng giữ ấmCóChức...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1900000.0000,"StrPrice":"1.900.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1705000.0000,"StrDiscountPrice":"1.705.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":10.0,"StrPercent":"10","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":13,"Inactive":false,"Timestamp":"AAAAAAAqY+8=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51014,"ShopId":2198,"ProductGroupId":40418,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"noi-com-dien-panasonic-sr-ga721wra","Serial":"","Name":"Nồi Cơm Điện PANASONIC SR-GA721WRA","CreatedDate":"2017-08-13T19:10:00","UpdatedDate":"2017-08-13T19:10:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p62_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p62_large.jpg","Summary":"<p>Tính năng sản phẩmThông Tin ChungLoại Sản PhẩmNồi Cơm Điện - Nắp RờiModelSR-GA721WRADung tích7.2 LítChế độ nấuNấu / Giữ ấm.Chức năng giữ ấmTối đa 5 giờ.Chống dínhLòng nồi bằng nhôm / Không chống dí...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1545000.0000,"StrPrice":"1.545.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1250000.0000,"StrDiscountPrice":"1.250.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":19.0,"StrPercent":"19","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":14,"Inactive":false,"Timestamp":"AAAAAAAqY/Q=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51021,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-kieu-cho-nhan-vien-van-phong","Serial":"","Name":"Ghê kiểu cho nhân viên văn phòng","CreatedDate":"2017-08-13T19:31:00","UpdatedDate":"2017-08-13T19:31:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p77_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p77_large.jpg","Summary":"<p>Chưa có mô tả cho sản phẩm này</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1300000.0000,"StrPrice":"1.300.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1190000.0000,"StrDiscountPrice":"1.190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":8.0,"StrPercent":"8","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":21,"Inactive":false,"Timestamp":"AAAAAAAqZBQ=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51022,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-nhua-chan-cao-tien-nghi","Serial":"","Name":"Ghế nhựa chân cao, tiện nghi","CreatedDate":"2017-08-13T19:32:00","UpdatedDate":"2017-08-13T19:32:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p78_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p78_large.jpg","Summary":"<p>Chưa có mô tả cho sản phẩm này</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":250000.0000,"StrPrice":"250.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":210000.0000,"StrDiscountPrice":"210.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":16.0,"StrPercent":"16","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":22,"Inactive":false,"Timestamp":"AAAAAAAqZBg=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51023,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-cao-cap-gt3300","Serial":"","Name":"Ghê cao cấp GT3300","CreatedDate":"2017-08-13T19:34:00","UpdatedDate":"2017-08-13T19:34:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p79_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p79_large.jpg","Summary":"<p>Chưa có mô tả cho sản phẩm này</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1600000.0000,"StrPrice":"1.600.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1450000.0000,"StrDiscountPrice":"1.450.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":9.0,"StrPercent":"9","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":23,"Inactive":false,"Timestamp":"AAAAAAAqZBw=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51024,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-cao-cap-tg9930","Serial":"","Name":"Ghế cao cấp TG9930","CreatedDate":"2017-08-13T19:35:00","UpdatedDate":"2017-08-13T19:35:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p80_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p80_large.jpg","Summary":"<p>Chưa có mô tả cho sản phẩm này</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1350000.0000,"StrPrice":"1.350.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1190000.0000,"StrDiscountPrice":"1.190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":12.0,"StrPercent":"12","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":24,"Inactive":false,"Timestamp":"AAAAAAAqZCA=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null}];
                        window.ConfigProduct = {"Id":0,"PageSize":12,"Sort":"index","Order":"asc","ColumnProduct":4,"ColumnProductGroup":4,"ColumnProductHome":4,"QuantitySlide":12,"QuantityHot":5,"QuantityNew":5,"QuantityPromotion":5,"QuantityBest":5,"AutoQuantityOrder":true,"AllowOrder":true,"ShowControlSortBy":true,"ShowPrice":true,"TextNotPrice":"Liên hệ","TextPriceZero":"0","AllowComment":false,"ApproveCommentPost":true,"ReceiveEmailComment":true,"AllowCommentFacebook":false,"ShowSerial":false,"ShowWarranty":false,"ShowLikeShareFacebook":true,"ShowRate":true,"WidthRatio":1,"HeightRatio":1,"IsInventory":false,"Sys_Shop":null};
                     </script>                        
                  </div>
               </div>
            </div>
         </div>
         <div class="main">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="content-page">
                        <div class="container">
                           <div class="category-featured featured1">
                              <nav class="navbar nav-menu show-brand">
                                 <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-brand"><a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/icon/s5.png')}}" />Thời trang</a></div>
                                    <span class="toggle-menu"></span>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a data-toggle="tab" href="#tab_1">Tất cả sản phẩm</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_0' data-code="40422">&#193;o sơ mi</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_1' data-code="40423">&#193;o kho&#225;c</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_2' data-code="40424">&#193;o thun</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_3' data-code="40427">Đầm, v&#225;y nữ</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_4' data-code="40428">Ch&#226;n v&#225;y</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_5' data-code="40432">Đồ l&#243;t, đồ ngủ</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_6' data-code="40436">Đồ bơi</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_7' data-code="40437">Phụ kiện</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                 </div>
                                 <!-- /.container-fluid -->
                                 <div id="elevator-1" class="floor-elevator">
                                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                                 </div>
                              </nav>
                              <div class="product-featured clearfix">
                                 <div class="row">
                                    <div class="col-sm-2 sub-category-wapper">
                                       <ul class="sub-category-list">
                                          <li><a href="/san-pham/ao-so-mi-40422">&#193;o sơ mi</a></li>
                                          <li><a href="/san-pham/ao-khoac-40423">&#193;o kho&#225;c</a></li>
                                          <li><a href="/san-pham/ao-thun-40424">&#193;o thun</a></li>
                                          <li><a href="/san-pham/quan-tay-cong-so-40425">Quần t&#226;y c&#244;ng sở</a></li>
                                          <li><a href="/san-pham/quan-jean-40426">Quần jean</a></li>
                                          <li><a href="/san-pham/dam-vay-nu-40427">Đầm, v&#225;y nữ</a></li>
                                          <li><a href="/san-pham/chan-vay-40428">Ch&#226;n v&#225;y</a></li>
                                          <li><a href="/san-pham/quan-kaki-nam-40429">Quần kaki nam</a></li>
                                          <li><a href="/san-pham/ao-vest-blazer-nam-40430">&#193;o vest, blazer nam</a></li>
                                          <li><a href="/san-pham/quan-shorts-nam-40431">Quần shorts nam</a></li>
                                          <li><a href="/san-pham/do-lot-do-ngu-40432">Đồ l&#243;t, đồ ngủ</a></li>
                                          <li><a href="/san-pham/quan-thoi-trang-40433">Quần thời trang</a></li>
                                          <li><a href="/san-pham/quan-legging-40434">Quần legging</a></li>
                                          <li><a href="/san-pham/trang-phuc-cuoi-40435">Trang phục cưới</a></li>
                                          <li><a href="/san-pham/do-boi-40436">Đồ bơi</a></li>
                                          <li><a href="/san-pham/phu-kien-40437">Phụ kiện</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-10 col-right-tab">
                                       <div class="product-featured-tab-content">
                                          <div class="tab-container">
                                             <div class="tab-panel active" id="tab_1">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <ul class="product-list row">
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">Đầm body c&#225; t&#236;nh với nhiều m&#224;u sắc hiện đại, trẻ trung</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">400.000₫</span>
                                                               <span class="price old-price">620.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p35_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51001,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html">Đầm maxi dự tiệc hoa hồng - NH028</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">190.000₫</span>
                                                               <span class="price old-price">240.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p49_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51002,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-body-lap-the-tay-dai.html">Đầm body lập thể tay d&#224;i</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">310.000₫</span>
                                                               <span class="price old-price">560.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-body-lap-the-tay-dai.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p50_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51003,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html">Đầm mặc nh&#224; tay lỡ NITIMO 2001</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">190.000₫</span>
                                                               <span class="price old-price">280.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p51_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51004,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html">Đầm mặc nh&#224; phối nơ xinh xắn Twins</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">2.400.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p52_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51005,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html">Đầm dạo phố họa tiết style - A1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">220.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p53_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51006,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_0">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_1">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_2">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_3">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_4">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_5">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_6">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_7">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Thời trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="{{asset('images/ajax-loader.gif')}}" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="category-featured featured3">
                              <nav class="navbar nav-menu show-brand">
                                 <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-brand"><a href="/san-pham/trang-suc-40416"><img src="public/images/icon/s9.png" />Trang sức</a></div>
                                    <span class="toggle-menu"></span>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a data-toggle="tab" href="#tab_3">Tất cả sản phẩm</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_0' data-code="40485">Trang sức cưới</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_1' data-code="40486">Trang sức v&#224;ng</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_2' data-code="40488">Nhẫn đ&#237;nh h&#244;n</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_3' data-code="40489">Mặt đ&#225; qu&#253;</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_4' data-code="40490">Ngọc trai</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_5' data-code="40495">V&#242;ng cổ</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_6' data-code="40496">B&#244;ng tai</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                 </div>
                                 <!-- /.container-fluid -->
                                 <div id="elevator-3" class="floor-elevator">
                                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
                                 </div>
                              </nav>
                              <div class="product-featured clearfix">
                                 <div class="row">
                                    <div class="col-sm-2 sub-category-wapper">
                                       <ul class="sub-category-list">
                                          <li><a href="/san-pham/trang-suc-cuoi-40485">Trang sức cưới</a></li>
                                          <li><a href="/san-pham/trang-suc-vang-40486">Trang sức v&#224;ng</a></li>
                                          <li><a href="/san-pham/trang-suc-kim-cuong-40487">Trang sức kim cương</a></li>
                                          <li><a href="/san-pham/nhan-dinh-hon-40488">Nhẫn đ&#237;nh h&#244;n</a></li>
                                          <li><a href="/san-pham/mat-da-quy-40489">Mặt đ&#225; qu&#253;</a></li>
                                          <li><a href="/san-pham/ngoc-trai-40490">Ngọc trai</a></li>
                                          <li><a href="/san-pham/trang-suc-cz-40491">Trang sức CZ</a></li>
                                          <li><a href="/san-pham/trang-suc-italy-40492">Trang sức Italy</a></li>
                                          <li><a href="/san-pham/trang-suc-jemma-40493">Trang sức Jemma</a></li>
                                          <li><a href="/san-pham/vong-tay-40494">V&#242;ng tay</a></li>
                                          <li><a href="/san-pham/vong-co-40495">V&#242;ng cổ</a></li>
                                          <li><a href="/san-pham/bong-tai-40496">B&#244;ng tai</a></li>
                                          <li><a href="/san-pham/lac-tay-chan-40497">Lắc tay, ch&#226;n</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-10 col-right-tab">
                                       <div class="product-featured-tab-content">
                                          <div class="tab-container">
                                             <div class="tab-panel active" id="tab_3">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <ul class="product-list row">
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html">Mặt d&#226;y hiện đại, sang trọng 20-0216P3001NA611</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">11.200.000₫</span>
                                                               <span class="price old-price">14.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"><img class="img-responsive" alt="product" src="public/images/product/p44_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51025,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-085-1014r7054vc1.html">Nhẫn nữ 085-1014R7054VC1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">55.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-085-1014r7054vc1.html"><img class="img-responsive" alt="product" src="public/images/product/p82_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/nhan-nu-085-1014r7054vc1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-085-1014r7054vc1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51026,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-1210r4455a2.html">Nhẫn nữ 1210R4455A2</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">33.000.000₫</span>
                                                               <span class="price old-price">37.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-1210r4455a2.html"><img class="img-responsive" alt="product" src="public/images/product/p83_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/nhan-nu-1210r4455a2.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-1210r4455a2.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51027,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-1211r0018bm.html">Nhẫn nữ 1211R0018BM</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">75.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-1211r0018bm.html"><img class="img-responsive" alt="product" src="public/images/product/p84_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/nhan-nu-1211r0018bm.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-1211r0018bm.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51028,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/kieng-co-0109n7009pun1.html">Kiềng cổ 0109N7009PUN1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">1.300.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/kieng-co-0109n7009pun1.html"><img class="img-responsive" alt="product" src="public/images/product/p85_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/kieng-co-0109n7009pun1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/kieng-co-0109n7009pun1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51029,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-107r8044bm.html">Nhẫn nữ 107R8044BM</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">33.000.000₫</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-107r8044bm.html"><img class="img-responsive" alt="product" src="public/images/product/p86_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi tiết" class="compare" href="/san-pham/nhan-nu-107r8044bm.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-107r8044bm.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51030,1)">Thêm vào giỏ</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_0">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_1">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_2">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_3">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_4">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_5">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_6">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang sức"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="public/images/ajax-loader.gif" /></div>
                                                   <ul class="product-list row"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          
                     <script type="text/javascript">
                        $(document).ready(function () {
                            $(".category-featured .navbar-nav a.sub").click(function () {
                                var tabId = $(this).attr("href");
                                var code = $(this).attr("data-code");
                                $(".loading").show();
                                var query = '/option/productgroup';
                                $.ajax({
                                    url: query + '?code=' + code,
                                    success: function (data) {
                                        $(".loading").hide();
                                        $(tabId + " .product-list").html(data);
                                        $(window).resize();
                                    }
                                });
                            });
                        });
                     </script>                    
                  </div>
               </div>
            </div>
         </div>
         <div class="partner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- blog list -->
                     <div class="blog-list news-home">
                        <h2 class="page-heading">
                           <span class="page-heading-title">Tin tức nổi bật</span>
                        </h2>
                        <div class="blog-list-wapper">
                           <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html"><img src="{{asset('images/news/blog4.jpg')}}" alt="Diện v&#225;y xẻ cao quyến rũ như Miranda Kerr"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Diện v&#225;y xẻ cao quyến rũ như Miranda Kerr</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> Bình luận</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Xem thêm</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html"><img src="{{asset('images/news/blog2.jpg')}}" alt="Những chiếc v&#242;ng cổ tạo đẳng cấp cho sao ngoại tr&#234;n thảm đỏ"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Những chiếc v&#242;ng cổ tạo đẳng cấp cho sao ngoại tr&#234;n thảm đỏ</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> Bình luận</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Xem thêm</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html"><img src="{{asset('images/news/blog1.jpg')}}" alt="20 bộ v&#225;y đẹp của c&#225;c diễn vi&#234;n từng đoạt giải Oscar"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">20 bộ v&#225;y đẹp của c&#225;c diễn vi&#234;n từng đoạt giải Oscar</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> Bình luận</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">Xem thêm</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html"><img src="{{asset('images/news/blog3.jpg')}}" alt="Phối quần jeans cạp cao theo phong c&#225;ch thập ni&#234;n 1970"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Phối quần jeans cạp cao theo phong c&#225;ch thập ni&#234;n 1970</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> Bình luận</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Xem thêm</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- ./blog list -->
                     <!--Begin-->
                     <div class="row banner-bottom">
                        <div class="col-sm-6 item-left">
                           <div class="banner-boder-zoom">
                              <a href="1"><img alt="ads" class="img-responsive" src="{{asset('images/banner-botom1.jpg')}}" /></a>
                           </div>
                        </div>
                        <div class="col-sm-6 item-right">
                           <div class="banner-boder-zoom">
                              <a href="2"><img alt="ads" class="img-responsive" src="{{asset('images/banner-bottom2.jpg')}}" /></a>
                           </div>
                        </div>
                     </div>
                     <!--End-->
                     <!--Begin-->
                     <div class="services2">
                        <ul>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s1.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="1">Giá trị lớn</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Chúng tôi cung cấp giá cả cạnh tranh nhất trên từng sản phẩm, phù hợp với mọi túi tiền.
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s2.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="3">Giao hàng</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Giao hàng tận nơi, sản phẩm sẽ có mặt tại nhà bạn từ 3 đến 5 ngày làm việc.
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s3.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="5">Sản phẩm</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Sản phẩm chính hãng, bảo hành trên toàn quốc.
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s4.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="2">Hổ trợ</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Hổ trợ 24/7. <br>Phone: +84 908 77 00 95.<br>Emal: info@runtime.vn
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s5.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="4">Ứng dụng</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Cài đặt ứng dụng khi mua hàng sẽ được giảm giá đặc biệt từ 5 đến 10%.
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                              <div class="service-wapper">
                                 <div class="row">
                                    <div class="col-sm-6 image">
                                       <div class="icon">
                                          <img src="{{asset('images/icon-s6.png')}}" alt="service">
                                       </div>
                                       <h3 class="title"><a href="6">Thanh toán</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Thanh toán khi nhận hàng. <br>Phương thức thanh toán đa dạng
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <!--End-->
                  </div>
               </div>
            </div>
         </div>
@stop