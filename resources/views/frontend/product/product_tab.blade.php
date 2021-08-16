
<div class="product-tabs">
                        <ul class="nav nav-tabs">
                            <li role="presentation"  class="ng-scope active">
                                <a data-toggle="tab" href="#p_description" aria-expanded="true" class="ng-binding">Chi tiết sản phẩm</a>
                            </li>
                            <li role="presentation"  class="ng-scope">
                                <a data-toggle="tab" href="#p_rating" class="ng-binding">Đánh giá sản phẩm</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                             <div class="tab-pane fade in ng-scope active"  id="p_description" style="overflow: hidden;">
                                 <div class="box_p_description" >
                                 {!! $product->p_description ??  'Mổ tả sản phẩm đang cập nhật' !!}
                                 </div>
                                    
                            </div>

                            <div class="tab-pane fade in ng-scope"  id="p_rating" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                
                                                   <input type="hidden" id="rc_p_id" value="{{$product->id}}">
                                                   <input type="hidden" id="rc_u_id" value="{{Auth::user() ? Auth::user()->id : 'null' }}">
                                                   <div class="col-md-2 imageUserComment">
                                                   @php
                                                   if(Auth::check()){
                                                    if(Auth::user()->google_id){
                                                            $avatar = Auth::user()->avatar;
                                                        }else
                                                        if(Auth::user()->avatar != null){
                                                            $avatar  = url('images/account\/')."".Auth::user()->avatar;
                                                        }
                                                        else{
                                                            $avatar = url('images/account\no-user.png').'';
                                                        }
                                                   }else{
                                                         $avatar = url('images/account\no-user.png').'';
                                                   }
                                                        
                                                    @endphp
                                                        <img src="{{ $avatar }}" alt="">
                                                   </div>
                                                    <form class="form-inline col-md-10">
                                                    <textarea placeholder="Viết bình luận của bạn ở đây" id="rc_comment" class="pb-cmnt-textarea"></textarea>
                                                     
                                                        <p class="post-rating-star pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </p>
                                                     <input type="hidden" id="input-rating-star" value="">
                                                        <button class="btn btn-primary pull-right" id="btnComment" type="button">Bình luận</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-white post" id="listRatingComment">
                                                   
                                            @include('frontend.product.listComment')

                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                            </div>
                        </div>
                    </div>

        <script>
            $('.box_p_description').readmore({
                collapsedHeight: 300,
                speed: 500,
                embedCSS: false,
                moreLink: '<a href="#">Xem Thêm</a>',
                lessLink: '<a href="#">Đóng</a>',
                beforeToggle: function(trigger, element, expanded) {
                    if (expanded === false) {
                    element.addClass('remove-after');
                    console.log('oke');
                    } else {
                    element.removeClass('remove-after');
                    }
                }
                });
        </script> 
        <style>
            .box_p_description+[data-readmore-toggle],
            .box_p_description[data-readmore] {
            display: block;
            
            }

            .box_p_description[data-readmore]::after {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 85%);
            bottom: 0;
            content: '';
            display: inline-block;
            height: 250px;
            position: absolute;
            right: 0;
            width: 100%;
            }

            .remove-after::after {
            display: none !important;
            }

            [data-readmore-toggle] {
            position: absolute;
            left: 35%;
            top: 100%;
            line-height:1em;
            letter-spacing:0.06em;
            font-weight:normal;
            font-size:14px;
            text-decoration:none;
            color:#fff;
            background:#0090c9;
            display:inline-block;
            padding:12px 9px 12px 12px;
            transition:background 200ms;
            border-radius:4px;
            }
            [data-readmore-toggle]:after {
            font-family: 'FontAwesome', sans-serif;
            font-weight:300;
            content: "\f105";
            margin-left:20px;
            color:#fff;
            font-size:18px;
            vertical-align:middle;
            transition:color 200ms;
            }

            [data-readmore-toggle]:hover:after {
            color:#231f20;
            }
        </style>           

        <script>
            const stars = document.querySelectorAll('.post-rating-star i');
            var rc_stars = document.getElementById('input-rating-star');
                rc_stars.value = 0;
            let flag = false;
          // add event listener to each span
            stars.forEach((sp, j)=>{
                sp.addEventListener('click', ()=>{
                // if clicked, then not dismissing the background colour after mouse leave
                flag = true;
                // reassign all stars back to original grey
                stars.forEach(dsp=>{
                    dsp.style.color = '#000';
                });
                // assign bg to red of the stars from 0 to clicked index
                Array.from(new Array(j+1), (x, i) => i).forEach(ind=>{
                    stars[ind].style.color = '#ff9900';
                    rc_stars.value++;
                });
            });
                // redo if mouse enters
                sp.addEventListener('mouseenter', ()=>{
                flag = false;
            });
                // if any span is hovered
                sp.addEventListener('mouseover', ()=>{
                // reassign all stars back to original grey
                stars.forEach(dsp=>{
                    dsp.style.color = '#000';
                });
                // assign bg to red of the stars from 0 to clicked index
                Array.from(new Array(j+1), (x, i) => i).forEach(ind=>{
                    stars[ind].style.color = '#ff9900';
                });
            });
            // in moseleave, only save the background colour if click happened
            sp.addEventListener('mouseleave', ()=>{
                if(!flag){
                stars.forEach(dsp=>{
                    dsp.style.color = '#000';
                    rc_stars.value = 0;
                });
                }
            });
            });


        $("#btnComment").click(function () {
        addCommentRating();
        });
        // $("#rc_comment").keydown(function (event) {
        //     if (event.keyCode == 13) {
        //         addCommentRating();
        //     }
        // });
    function addCommentRating(){
        // check login
        var rc_u_id = $('#rc_u_id').val();
        if(rc_u_id == 'null'){
            login();
        }else{
            var rc_comment = $('#rc_comment').val();
            var rc_p_id = $('#rc_p_id').val();
            console.log(rc_comment);
            if (rc_comment == '') {
                $('#rc_comment').focus();
                return;
            }
            console.log(rc_stars.value);
            postRatingcomment(rc_comment,rc_u_id,rc_p_id,rc_stars.value);
        }
        
    }
    function postRatingcomment(rc_comment,rc_u_id,rc_p_id,rc_stars){
        let _token   = $('meta[name="csrf-token"]').attr('content');
        var data = {
            _token: _token,
            rc_comment: rc_comment,
            rc_u_id:rc_u_id,
            rc_p_id:rc_p_id,
            rc_stars:rc_stars
        };
            $.ajax({
                type: 'POST',
                url: '{{route("postRatingComment")}}',
                data:data,
                success: function (res) { 
                    //console.log(res);
                    rederComment(res);
                },
                error: function (XMLHttpRequest, textStatus) {
                console.log(XMLHttpRequest, textStatus);
                }
            });
    }
    function rederComment(res){
           $('#listRatingComment').empty();
           $('#listRatingComment').html(res);
    }
</script>

<style>
            .post-rating-star {
           
                width: 180px;
                }

               .post-rating-star i {
                float: left;
                display: inline-block;
                font-size: 24px;
                margin-left: 4px;
                color: #000;
                cursor: pointer;
                }

          
               .post-rating-star i:hover {
                opacity: 0.8;
                color: #ff9900;
                } 

            .pb-cmnt-container {
                font-family: Lato;
                margin-top: 100px;
            }

            .pb-cmnt-textarea {
                resize: none;
                padding: 20px;
                height: 60px;
                width: 100%;
                border: 1px solid #F2F2F2;
            }
            .imageUserComment img{
                border-radius: 50%;
                width: 90px;
                height: 90px;
                object-fit:cover;
            }
            .rating-star{
                color: orange;
            }
        </style>