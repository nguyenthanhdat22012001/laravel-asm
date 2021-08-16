var host = window.location.protocol + "//" + window.location.host;
console.log(host);
function AddCart(id){ 
    $.ajax({
        type: 'GET',
        url: host+'/them-gio-hang/'+id,
        success: function (res) { 
          rederCart(res);
          alertify.success('Thêm Sản Phẩm Vào Giỏ Hàng Thành Công');
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    };

    $('#changeCart').on('click','.remove_link',function(){
       $.ajax({
        type: 'GET',
        url: 'xoa-gio-hang/'+ $(this).data('id'),
        success: function (res) { 
             rederCart(res);
          alertify.success('Xóa Giỏ Hàng Thành Công');
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    });

    function rederCart(res){
       $('#changeCart').empty();
       $('#changeCart').html(res);

     var  totalQuanty =  $('#hiddenTotalQuanty').val();
       $('#totalQuanty').text(totalQuanty);
       $('#totalQuantySroll').text(totalQuanty);
    }

   
    function login(){
       alertify.error('Bạn chưa đăng nhập');
    }
    

    function updateMenuCart(){
        $.ajax({
            type: 'GET',
            url: 'update-menu-gio-hang',
            success: function (res) { 
                rederCart(res)
            },
            error: function (XMLHttpRequest, textStatus) {
               console.log(XMLHttpRequest, textStatus);
            }
        });
    }

    function deleteItemPageCart(id){ 
        $.ajax({
            type: 'GET',
            url: 'xoa-page-gio-hang/'+id,
            success: function (res) { 
                rederPageCart(res);
              alertify.success('Xóa Giỏ Hàng Thành Công');
              updateMenuCart();
            },
            error: function (XMLHttpRequest, textStatus) {
               console.log(XMLHttpRequest, textStatus);
            }
        });
    };

    function updateItemPageCart(id){
     var qty = $('#quantyItemCart_'+id).val() ;
     console.log('update-page-gio-hang/'+id+'/'+qty);
        $.ajax({
            type: 'GET',
            url: 'update-page-gio-hang/'+id+'/'+qty,
            success: function (res) { 
                rederPageCart(res);
              alertify.success('Cập Nhật Giỏ Hàng Thành Công');
              updateMenuCart();
            },
            error: function (XMLHttpRequest, textStatus) {
               console.log(XMLHttpRequest, textStatus);
            }
        });
    };

 function rederPageCart(res){
           $('#listCart').empty();
           $('#listCart').html(res);
    }
 function notCheckOut(){
           alertify.error('Không thể thanh toán');
    }