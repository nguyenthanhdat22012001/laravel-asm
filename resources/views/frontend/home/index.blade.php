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
                           S???n ph???m khuy???n m??i
                           </span>
                        </h2>
                        <div class="latest-deals-product">
                           <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="10" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                              <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" title="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Th??m v??o gi???</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" title="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Th??m v??o gi???</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" title="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Th??m v??o gi???</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" title="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Th??m v??o gi???</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                             <li ng-repeat="item in ProductPromotionSlides" class="ng-scope">
                                 <div class="left-block">
                                     <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" title="?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                     <div class="quick-view">
                                         <a title="Add to my wishlist" class="heart" href="#"></a>
                                         <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                         <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                     </div>
                                     <div class="add-to-cart">
                                         <a class="add-to-car" href="javascript:void(0);" ng-click="AddToCard(item)">Th??m v??o gi???</a>
                                     </div>
                                     <div class="price-percent-reduction2 ng-binding">
                                         Sale
                                         <br>-35<strong>%</strong>
                                     </div>
                                 </div>
                                 <div class="right-block">
                                     <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung</a></h5>
                                    <div class="content_price ng-scope" ng-if="ConfigProduct.ShowPrice==true">
                                       <span class="price product-price ng-binding ng-scope" >400,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                        <span class="price old-price ng-binding ng-scope" >620,000&nbsp;???</span><!-- end ngIf: item.IsPromotion==true&&item.Price>0 -->
                                     </div>
                                 </div>
                             </li>
                           </ul>
                        </div>
                     </div>
                     <!--End-->
                     <script type="text/javascript">
                        window.ProductPromotionSlides = [{"Id":51001,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung","Serial":"","Name":"?????m body c?? t??nh v???i nhi???u m??u s???c hi???n ?????i, tr??? trung","CreatedDate":"2017-08-12T15:32:00","UpdatedDate":"2017-08-12T15:32:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p35_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p35_large.jpg","Summary":"<p>T??n S???n Ph???m?????m noel ??u??i c??Ch???t Li???uC??t H??nM??u S???c?????Size+ size M: Chi???u d??i ?????m: 85cm, Ng???c 80-84cm, Eo 68-72cm, M??ng 88-92cm+ size L: Chi???u d??i ?????m: 86cm, Ng???c 84-88cm, Eo 72-76cm, M??ng 92-96cm+ ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":620000.0000,"StrPrice":"620.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":400000.0000,"StrDiscountPrice":"400.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":35.0,"StrPercent":"35","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":1,"Inactive":false,"Timestamp":"AAAAAAAqY3k=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51002,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-maxi-du-tiec-hoa-hong-nh028","Serial":"","Name":"?????m maxi d??? ti???c hoa h???ng - NH028","CreatedDate":"2017-08-12T23:13:00","UpdatedDate":"2017-08-12T23:14:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p49_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p49_large.jpg","Summary":"<p>Ph?? v???n chuy???n & th???i gian nh???n h??ngPhi?? v????n chuy????n toa??n : + ?????i v???i khu v???c n????i tha??nh TPHCM : Mi???n ph?? v???n chuy???n+ ??????i v????i khu v????c ngoa??i tha??nh TPHCM  ( Q9, Q12, Thu?? ??????c, Bi??nh T??n ) : ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":240000.0000,"StrPrice":"240.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":190000.0000,"StrDiscountPrice":"190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":21.0,"StrPercent":"21","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":2,"Inactive":false,"Timestamp":"AAAAAAAqY7I=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51003,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-body-lap-the-tay-dai","Serial":"","Name":"?????m body l???p th??? tay d??i","CreatedDate":"2017-08-12T23:20:00","UpdatedDate":"2017-08-12T23:20:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p50_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p50_large.jpg","Summary":"<p>??I???M N???I B???T?????m body l???p th??? tay d??i c?? ki???u d??ng ????n gi???n, ?????m body c??? tr??n, tay d??i mang ?????n phong c??ch n??ng ?????ng, hi???n ?????i  H???a ti???t k??? ?? vu??ng ??en tr??n n???n tr???ng n???i b???t, t???o ??i???m nh???n cho s???n ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":560000.0000,"StrPrice":"560.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":310000.0000,"StrDiscountPrice":"310.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":45.0,"StrPercent":"45","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":3,"Inactive":false,"Timestamp":"AAAAAAAqY7Y=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51004,"ShopId":2198,"ProductGroupId":40412,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"dam-mac-nha-tay-lo-nitimo-2001","Serial":"","Name":"?????m m???c nh?? tay l??? NITIMO 2001","CreatedDate":"2017-08-12T23:39:00","UpdatedDate":"2017-08-12T23:39:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p51_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p51_large.jpg","Summary":"<p>??I???M N???I B???T?????m m???c nh?? tay l??? NITIMO 2001 c?? thi???t k??? ????n gi???n, ?????m su??ng c??? tr??n, tay l???ng mang ?????n n??t duy??n d??ng cho ng?????i m???c                       C??? c??ch ??i???u ph???i n??t ??? tr?????c xinh x???n gi??p ...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":280000.0000,"StrPrice":"280.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":190000.0000,"StrDiscountPrice":"190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":32.0,"StrPercent":"32","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":4,"Inactive":false,"Timestamp":"AAAAAAAqY7o=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51007,"ShopId":2198,"ProductGroupId":40397,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"giay-tennis-t19-xanh","Serial":"","Name":"Gi??y Tennis T19 xanh","CreatedDate":"2017-08-13T00:05:00","UpdatedDate":"2017-08-13T00:05:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p55_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p55_large.jpg","Summary":"<p>Ph???n tr??n: da ??an k???t b???i ch???t li???u s???i t???ng h???p si??u nh??? t???o s??? th???m m???, nh???, ??m v?? ch???c ch???n ch???u s??? ma s??t cao k???t h???p t???m l?????i th??ng tho??ng, kh??ng gi??? m??? h??i, m??t ch??n.??? Mi???ng l??t trong: b???ng...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":900000.0000,"StrPrice":"900.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":790000.0000,"StrDiscountPrice":"790.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":12.0,"StrPercent":"12","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":7,"Inactive":false,"Timestamp":"AAAAAAAqY8w=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51010,"ShopId":2198,"ProductGroupId":40397,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"vot-tennis-wilson-pro-staff-97-ls-wrt7250102","Serial":"","Name":"V???t tennis Wilson Pro Staff 97 LS WRT7250102","CreatedDate":"2017-08-13T18:55:00","UpdatedDate":"2017-08-13T18:55:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p58_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p58_large.jpg","Summary":"<p>V???t tennis Wilson Pro Staff 97 LS WRT7250102V???t tennis Wilson Pro Staff 97 LS WRT7250102 la?? m????t trong nh????ng m????u v????t tennis m????i trong n??m 2015 cu??a Wilson. V????t ????????c sa??n xu????t tr??n c??ng ngh??...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":6400000.0000,"StrPrice":"6.400.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":4150000.0000,"StrDiscountPrice":"4.150.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":35.0,"StrPercent":"35","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":10,"Inactive":false,"Timestamp":"AAAAAAAqY94=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51013,"ShopId":2198,"ProductGroupId":40418,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"noi-com-dien-tu-philips-hd3130","Serial":"","Name":"N???i C??m ??i???n T??? PHILIPS HD3130","CreatedDate":"2017-08-13T19:05:00","UpdatedDate":"2017-08-13T19:05:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p61_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p61_large.jpg","Summary":"<p>T??nh n??ng s???n ph???mTh??ng Tin ChungLo???i S???n Ph???mN???i C??m ??i???n T???ModelHD3130Dung t??ch1.8 L??tCh??? ????? n???u7 ch??? ????? n???u : H???m, N???u nhanh, H??m n??ng, N???u c??m, L??m b??nh, Gi??? ???m, N???u ch??o.Ch???c n??ng gi??? ???mC??Ch???c...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1900000.0000,"StrPrice":"1.900.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1705000.0000,"StrDiscountPrice":"1.705.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":10.0,"StrPercent":"10","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":13,"Inactive":false,"Timestamp":"AAAAAAAqY+8=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51014,"ShopId":2198,"ProductGroupId":40418,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"noi-com-dien-panasonic-sr-ga721wra","Serial":"","Name":"N???i C??m ??i???n PANASONIC SR-GA721WRA","CreatedDate":"2017-08-13T19:10:00","UpdatedDate":"2017-08-13T19:10:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p62_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p62_large.jpg","Summary":"<p>T??nh n??ng s???n ph???mTh??ng Tin ChungLo???i S???n Ph???mN???i C??m ??i???n - N???p R???iModelSR-GA721WRADung t??ch7.2 L??tCh??? ????? n???uN???u / Gi??? ???m.Ch???c n??ng gi??? ???mT???i ??a 5 gi???.Ch???ng d??nhL??ng n???i b???ng nh??m / Kh??ng ch???ng d??...</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1545000.0000,"StrPrice":"1.545.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1250000.0000,"StrDiscountPrice":"1.250.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":19.0,"StrPercent":"19","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":14,"Inactive":false,"Timestamp":"AAAAAAAqY/Q=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51021,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-kieu-cho-nhan-vien-van-phong","Serial":"","Name":"Gh?? ki???u cho nh??n vi??n v??n ph??ng","CreatedDate":"2017-08-13T19:31:00","UpdatedDate":"2017-08-13T19:31:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p77_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p77_large.jpg","Summary":"<p>Ch??a c?? m?? t??? cho s???n ph???m n??y</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1300000.0000,"StrPrice":"1.300.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1190000.0000,"StrDiscountPrice":"1.190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":8.0,"StrPercent":"8","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":21,"Inactive":false,"Timestamp":"AAAAAAAqZBQ=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51022,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-nhua-chan-cao-tien-nghi","Serial":"","Name":"Gh??? nh???a ch??n cao, ti???n nghi","CreatedDate":"2017-08-13T19:32:00","UpdatedDate":"2017-08-13T19:32:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p78_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p78_large.jpg","Summary":"<p>Ch??a c?? m?? t??? cho s???n ph???m n??y</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":250000.0000,"StrPrice":"250.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":210000.0000,"StrDiscountPrice":"210.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":16.0,"StrPercent":"16","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":22,"Inactive":false,"Timestamp":"AAAAAAAqZBg=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51023,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-cao-cap-gt3300","Serial":"","Name":"Gh?? cao c???p GT3300","CreatedDate":"2017-08-13T19:34:00","UpdatedDate":"2017-08-13T19:34:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p79_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p79_large.jpg","Summary":"<p>Ch??a c?? m?? t??? cho s???n ph???m n??y</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1600000.0000,"StrPrice":"1.600.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1450000.0000,"StrDiscountPrice":"1.450.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":9.0,"StrPercent":"9","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":23,"Inactive":false,"Timestamp":"AAAAAAAqZBw=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null},{"Id":51024,"ShopId":2198,"ProductGroupId":40419,"ProductGroupCode":null,"ProductGroupName":null,"ProductTypeId":null,"ProductTypeName":null,"UnitId":null,"UnitName":null,"Code":"ghe-cao-cap-tg9930","Serial":"","Name":"Gh??? cao c???p TG9930","CreatedDate":"2017-08-13T19:35:00","UpdatedDate":"2017-08-13T19:35:00","DealDate":"0001-01-01T00:00:00","SKU":"","Barcode":"","Image":"public/images/product/p80_large.jpg","ImageThumbnai":"public/_thumbs/images/product/p80_large.jpg","Summary":"<p>Ch??a c?? m?? t??? cho s???n ph???m n??y</p>\n","Content":null,"MetaTitle":"","MetaKeyword":"","MetaDescription":"","Price":1350000.0000,"StrPrice":"1.350.000","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":1190000.0000,"StrDiscountPrice":"1.190.000","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":12.0,"StrPercent":"12","IsTrackingInventory":false,"Quantity":0,"VariantQuantity":0,"VariantCount":0,"TrackingInventoryText":"---","Weight":0,"IsShipping":true,"AllowPurchaseWhenSoldOut":false,"IsVariant":false,"IsBest":true,"IsHot":true,"IsNew":true,"IsPromotion":true,"PromotionContent":null,"Warranty":null,"AllowOrder":false,"ShowHome":false,"CountView":0,"Index":24,"Inactive":false,"Timestamp":"AAAAAAAqZCA=","ModelShared_ProductImage":null,"ModelShared_ProductTab":null,"ModelShared_ProductTag":null,"ModelShared_ProductOption":null,"ModelShared_ProductVariant":null,"ModelShared_ProductOtherGroup":null}];
                        window.ConfigProduct = {"Id":0,"PageSize":12,"Sort":"index","Order":"asc","ColumnProduct":4,"ColumnProductGroup":4,"ColumnProductHome":4,"QuantitySlide":12,"QuantityHot":5,"QuantityNew":5,"QuantityPromotion":5,"QuantityBest":5,"AutoQuantityOrder":true,"AllowOrder":true,"ShowControlSortBy":true,"ShowPrice":true,"TextNotPrice":"Li??n h???","TextPriceZero":"0","AllowComment":false,"ApproveCommentPost":true,"ReceiveEmailComment":true,"AllowCommentFacebook":false,"ShowSerial":false,"ShowWarranty":false,"ShowLikeShareFacebook":true,"ShowRate":true,"WidthRatio":1,"HeightRatio":1,"IsInventory":false,"Sys_Shop":null};
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
                                    <div class="navbar-brand"><a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/icon/s5.png')}}" />Th???i trang</a></div>
                                    <span class="toggle-menu"></span>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a data-toggle="tab" href="#tab_1">T???t c??? s???n ph???m</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_0' data-code="40422">&#193;o s?? mi</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_1' data-code="40423">&#193;o kho&#225;c</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_2' data-code="40424">&#193;o thun</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_3' data-code="40427">?????m, v&#225;y n???</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_4' data-code="40428">Ch&#226;n v&#225;y</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_5' data-code="40432">????? l&#243;t, ????? ng???</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_6' data-code="40436">????? b??i</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_1_7' data-code="40437">Ph??? ki???n</a></li>
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
                                          <li><a href="/san-pham/ao-so-mi-40422">&#193;o s?? mi</a></li>
                                          <li><a href="/san-pham/ao-khoac-40423">&#193;o kho&#225;c</a></li>
                                          <li><a href="/san-pham/ao-thun-40424">&#193;o thun</a></li>
                                          <li><a href="/san-pham/quan-tay-cong-so-40425">Qu???n t&#226;y c&#244;ng s???</a></li>
                                          <li><a href="/san-pham/quan-jean-40426">Qu???n jean</a></li>
                                          <li><a href="/san-pham/dam-vay-nu-40427">?????m, v&#225;y n???</a></li>
                                          <li><a href="/san-pham/chan-vay-40428">Ch&#226;n v&#225;y</a></li>
                                          <li><a href="/san-pham/quan-kaki-nam-40429">Qu???n kaki nam</a></li>
                                          <li><a href="/san-pham/ao-vest-blazer-nam-40430">&#193;o vest, blazer nam</a></li>
                                          <li><a href="/san-pham/quan-shorts-nam-40431">Qu???n shorts nam</a></li>
                                          <li><a href="/san-pham/do-lot-do-ngu-40432">????? l&#243;t, ????? ng???</a></li>
                                          <li><a href="/san-pham/quan-thoi-trang-40433">Qu???n th???i trang</a></li>
                                          <li><a href="/san-pham/quan-legging-40434">Qu???n legging</a></li>
                                          <li><a href="/san-pham/trang-phuc-cuoi-40435">Trang ph???c c?????i</a></li>
                                          <li><a href="/san-pham/do-boi-40436">????? b??i</a></li>
                                          <li><a href="/san-pham/phu-kien-40437">Ph??? ki???n</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-10 col-right-tab">
                                       <div class="product-featured-tab-content">
                                          <div class="tab-container">
                                             <div class="tab-panel active" id="tab_1">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <ul class="product-list row">
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">?????m body c&#225; t&#236;nh v???i nhi???u m&#224;u s???c hi???n ?????i, tr??? trung</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">400.000???</span>
                                                               <span class="price old-price">620.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p35_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51001,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html">?????m maxi d??? ti???c hoa h???ng - NH028</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">190.000???</span>
                                                               <span class="price old-price">240.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p49_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51002,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-body-lap-the-tay-dai.html">?????m body l???p th??? tay d&#224;i</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">310.000???</span>
                                                               <span class="price old-price">560.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-body-lap-the-tay-dai.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p50_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51003,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html">?????m m???c nh&#224; tay l??? NITIMO 2001</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">190.000???</span>
                                                               <span class="price old-price">280.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p51_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51004,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html">?????m m???c nh&#224; ph???i n?? xinh x???n Twins</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">2.400.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p52_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51005,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html">?????m d???o ph??? h???a ti???t style - A1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">220.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p53_large.jpg')}}" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51006,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_1_0">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                                      <a href="/san-pham/thoi-trang-40412"><img src="{{asset('images/banner/banner-product1.jpg')}}" alt="Th???i trang"></a>
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
                                    <div class="navbar-brand"><a href="/san-pham/trang-suc-40416"><img src="public/images/icon/s9.png" />Trang s???c</a></div>
                                    <span class="toggle-menu"></span>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a data-toggle="tab" href="#tab_3">T???t c??? s???n ph???m</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_0' data-code="40485">Trang s???c c?????i</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_1' data-code="40486">Trang s???c v&#224;ng</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_2' data-code="40488">Nh???n ??&#237;nh h&#244;n</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_3' data-code="40489">M???t ??&#225; qu&#253;</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_4' data-code="40490">Ng???c trai</a></li>
                                          <li><a class="sub" data-toggle="tab" href='#tab_3_5' data-code="40495">V&#242;ng c???</a></li>
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
                                          <li><a href="/san-pham/trang-suc-cuoi-40485">Trang s???c c?????i</a></li>
                                          <li><a href="/san-pham/trang-suc-vang-40486">Trang s???c v&#224;ng</a></li>
                                          <li><a href="/san-pham/trang-suc-kim-cuong-40487">Trang s???c kim c????ng</a></li>
                                          <li><a href="/san-pham/nhan-dinh-hon-40488">Nh???n ??&#237;nh h&#244;n</a></li>
                                          <li><a href="/san-pham/mat-da-quy-40489">M???t ??&#225; qu&#253;</a></li>
                                          <li><a href="/san-pham/ngoc-trai-40490">Ng???c trai</a></li>
                                          <li><a href="/san-pham/trang-suc-cz-40491">Trang s???c CZ</a></li>
                                          <li><a href="/san-pham/trang-suc-italy-40492">Trang s???c Italy</a></li>
                                          <li><a href="/san-pham/trang-suc-jemma-40493">Trang s???c Jemma</a></li>
                                          <li><a href="/san-pham/vong-tay-40494">V&#242;ng tay</a></li>
                                          <li><a href="/san-pham/vong-co-40495">V&#242;ng c???</a></li>
                                          <li><a href="/san-pham/bong-tai-40496">B&#244;ng tai</a></li>
                                          <li><a href="/san-pham/lac-tay-chan-40497">L???c tay, ch&#226;n</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-10 col-right-tab">
                                       <div class="product-featured-tab-content">
                                          <div class="tab-container">
                                             <div class="tab-panel active" id="tab_3">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
                                                   </div>
                                                </div>
                                                <div class="box-right">
                                                   <ul class="product-list row">
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html">M???t d&#226;y hi???n ?????i, sang tr???ng 20-0216P3001NA611</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">11.200.000???</span>
                                                               <span class="price old-price">14.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"><img class="img-responsive" alt="product" src="public/images/product/p44_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/mat-day-hien-dai-sang-trong-20-0216p3001na611.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51025,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-085-1014r7054vc1.html">Nh???n n??? 085-1014R7054VC1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">55.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-085-1014r7054vc1.html"><img class="img-responsive" alt="product" src="public/images/product/p82_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/nhan-nu-085-1014r7054vc1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-085-1014r7054vc1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51026,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-1210r4455a2.html">Nh???n n??? 1210R4455A2</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">33.000.000???</span>
                                                               <span class="price old-price">37.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-1210r4455a2.html"><img class="img-responsive" alt="product" src="public/images/product/p83_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/nhan-nu-1210r4455a2.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-1210r4455a2.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51027,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-1211r0018bm.html">Nh???n n??? 1211R0018BM</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">75.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-1211r0018bm.html"><img class="img-responsive" alt="product" src="public/images/product/p84_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/nhan-nu-1211r0018bm.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-1211r0018bm.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51028,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/kieng-co-0109n7009pun1.html">Ki???ng c??? 0109N7009PUN1</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">1.300.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/kieng-co-0109n7009pun1.html"><img class="img-responsive" alt="product" src="public/images/product/p85_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/kieng-co-0109n7009pun1.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/kieng-co-0109n7009pun1.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51029,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li class="col-sm-4">
                                                         <div class="right-block">
                                                            <h5 class="product-name"><a href="/san-pham/nhan-nu-107r8044bm.html">Nh???n n??? 107R8044BM</a></h5>
                                                            <div class="content_price">
                                                               <span class="price product-price">33.000.000???</span>
                                                            </div>
                                                         </div>
                                                         <div class="left-block">
                                                            <a href="/san-pham/nhan-nu-107r8044bm.html"><img class="img-responsive" alt="product" src="public/images/product/p86_large.jpg" /></a>
                                                            <div class="quick-view">
                                                               <a title="Add to my wishlist" class="heart" href="#"></a>
                                                               <a title="Xem chi ti???t" class="compare" href="/san-pham/nhan-nu-107r8044bm.html"></a>
                                                               <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/nhan-nu-107r8044bm.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                               <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51030,1)">Th??m v??o gi???</a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="tab-panel" id="tab_3_0">
                                                <div class="box-left">
                                                   <div class="banner-img">
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                                                      <a href="/san-pham/trang-suc-40416"><img src="public/images/banner/jewelry-slide.jpg" alt="Trang s???c"></a>
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
                           <span class="page-heading-title">Tin t???c n???i b???t</span>
                        </h2>
                        <div class="blog-list-wapper">
                           <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html"><img src="{{asset('images/news/blog4.jpg')}}" alt="Di???n v&#225;y x??? cao quy???n r?? nh?? Miranda Kerr"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Di???n v&#225;y x??? cao quy???n r?? nh?? Miranda Kerr</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> B??nh lu???n</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/dien-vay-xe-cao-quyen-ru-nhu-miranda-kerr-10103.html">Xem th??m</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html"><img src="{{asset('images/news/blog2.jpg')}}" alt="Nh???ng chi???c v&#242;ng c??? t???o ?????ng c???p cho sao ngo???i tr&#234;n th???m ?????"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Nh???ng chi???c v&#242;ng c??? t???o ?????ng c???p cho sao ngo???i tr&#234;n th???m ?????</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> B??nh lu???n</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/nhung-chiec-vong-co-tao-dang-cap-cho-sao-ngoai-tren-tham-do-10102.html">Xem th??m</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html"><img src="{{asset('images/news/blog1.jpg')}}" alt="20 b??? v&#225;y ?????p c???a c&#225;c di???n vi&#234;n t???ng ??o???t gi???i Oscar"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">20 b??? v&#225;y ?????p c???a c&#225;c di???n vi&#234;n t???ng ??o???t gi???i Oscar</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> B??nh lu???n</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/20-bo-vay-dep-cua-cac-dien-vien-tung-doat-giai-oscar-10101.html">Xem th??m</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="post-thumb image-hover2">
                                    <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html"><img src="{{asset('images/news/blog3.jpg')}}" alt="Ph???i qu???n jeans c???p cao theo phong c&#225;ch th???p ni&#234;n 1970"></a>
                                 </div>
                                 <div class="post-desc">
                                    <h5 class="post-title">
                                       <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Ph???i qu???n jeans c???p cao theo phong c&#225;ch th???p ni&#234;n 1970</a>
                                    </h5>
                                    <div class="post-meta">
                                       <span class="date">
                                       12/08/2017
                                       </span>
                                       <span class="comment">0<span> B??nh lu???n</span></span>
                                    </div>
                                    <div class="readmore">
                                       <a href="/tin-tuc/phoi-quan-jeans-cap-cao-theo-phong-cach-thap-nien-1970-10100.html">Xem th??m</a>
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
                                       <h3 class="title"><a href="1">Gi?? tr??? l???n</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Ch??ng t??i cung c???p gi?? c??? c???nh tranh nh???t tr??n t???ng s???n ph???m, ph?? h???p v???i m???i t??i ti???n.
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
                                       <h3 class="title"><a href="3">Giao h??ng</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Giao h??ng t???n n??i, s???n ph???m s??? c?? m???t t???i nh?? b???n t??? 3 ?????n 5 ng??y l??m vi???c.
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
                                       <h3 class="title"><a href="5">S???n ph???m</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       S???n ph???m ch??nh h??ng, b???o h??nh tr??n to??n qu???c.
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
                                       <h3 class="title"><a href="2">H??? tr???</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       H??? tr??? 24/7. <br>Phone: +84 908 77 00 95.<br>Emal: info@runtime.vn
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
                                       <h3 class="title"><a href="4">???ng d???ng</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       C??i ?????t ???ng d???ng khi mua h??ng s??? ???????c gi???m gi?? ?????c bi???t t??? 5 ?????n 10%.
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
                                       <h3 class="title"><a href="6">Thanh to??n</a></h3>
                                    </div>
                                    <div class="col-sm-6 text">
                                       Thanh to??n khi nh???n h??ng. <br>Ph????ng th???c thanh to??n ??a d???ng
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