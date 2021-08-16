<div class="col-xs-7 col-sm-7 header-search-box">
    <div class="search-box">
    <form class="search form-inline">
        <div class="form-group input-serach">
            <input type="text" name="search" class="search_box" id="txtsearch" onblur="if(this.value=='')this.value='Nhập từ khóa tìm kiếm...'"
                onfocus="if(this.value=='Nhập từ khóa tìm kiếm...')this.value=''" value="Nhập từ khóa tìm kiếm..." />
        </div>
        <button type="button" id="btnsearch" class="pull-right btn-search">
        <span class="hidden-400">Tìm kiếm</span>
        <span class="show-400"><i class="fa fa-search" aria-hidden="true"></i></span>
        </button>
    </form>
    </div>
</div>

<script type="text/javascript">
    $("#btnsearch").click(function () {
        SearchProduct();
    });
    $("#txtsearch").keydown(function (event) {
        if (event.keyCode == 13) {
            SearchProduct();
        }
    });
    function SearchProduct() {
        var key = $('#txtsearch').val();
        var trimKey =  key.trim();
        var txtSearch = trimKey.replace(/\s+/g, " ");
        if (txtSearch == '' || txtSearch == 'Nhập từ khóa tìm kiếm...') {
            $('#txtsearch').focus();
            return;
        }
        window.location = '/tim-kiem/key=' + txtSearch;
    }
 </script>