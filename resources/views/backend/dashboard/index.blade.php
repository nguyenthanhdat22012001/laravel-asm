
@extends('layout.backend')
@section('title', 'THỐNG KÊ')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card widget-block p-4 rounded bg-primary border">
                    <div class="card-block">
                        <i class="mdi mdi-account-outline mr-4 text-white"></i>
                        <h4 class="text-white my-2">{{$customerToday}}</h4>
                        <p>Khách Hàng Hôm Nay</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card widget-block p-4 rounded bg-warning border">
                    <div class="card-block">
                        <i class="mdi mdi-cart-outline mr-4 text-white"></i>
                        <h4 class="text-white my-2">{{$orderToday}}</h4>
                        <p>Đơn Hàng Hôm Nay</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card widget-block p-4 rounded bg-danger border">
                    <div class="card-block">
                        <i class="mdi mdi-cart-outline  mr-4 text-white"></i>
                        <h4 class="text-white my-2">{{number_format($revenueToday)}}đ</h4>
                        <p>Doanh Thu Hôm Nay</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card widget-block p-4 rounded bg-success border">
                    <div class="card-block">
                        <i class="mdi mdi-diamond t mr-4 text-white"></i>
                        <h4 class="text-white my-2">{{number_format($revenueThisMonth)}}đ</h4>
                        <p>Doanh Thu Tháng {{date('m',time())}}</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
            <div class="col-xl-6 col-md-12">
                <!-- Sales Graph -->
                <h4 class="mb-30"><strong>TỔNG SẢN PHẨM TỪNG DANH MỤC</strong></h4>
                <canvas id="chartReturncategory" width="400" height="400"></canvas>
            </div>
            <div class="col-xl-6 col-md-12">
                <!-- Doughnut Chart -->
                <h4 class="mb-30"><strong>DOANH THU TỪNG THÁNG</strong></h4>
                <canvas id="chartReturnRevenueByMonth" width="400" height="400"></canvas>
            </div>
    </div>
    <div class="row mt-50">
        <div class="col-xl-10 col-md-12">
                <!-- Doughnut Chart -->
                <h4 class="mb-30"><strong>SẢN PHẨM HOT TREND THÁNG</strong></h4>
                <canvas id="chartReturnProductHotTrend" width="400" height="400"></canvas>
        </div>
    </div>

    </div>
</div>


<script>
    // tổng số lượng sp từng danh mục
    returnCategory();

    function returnCategory(){ 
    $.ajax({
        type: 'GET',
        url: "{{route('get_backend.home.returnCategory')}}",
       // dataType: 'application/json',
        success: function (res) { 
          var data =  JSON.parse(res);
            console.log(data.lables);
            chartReturncategory(data.lables,data.dataReturnCategory,data.backgroundColor);
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    };

   

    function chartReturncategory(labels,dataReturnCategory,backgroundColor){
        var data = {
        labels: labels,
        datasets: [
            {
            label: 'My First Dataset',
            data: dataReturnCategory,
            backgroundColor: backgroundColor,
            hoverOffset: 4
            },
        ]
        };
    var config = {
    type: 'doughnut',
    data: data,
    options:{
        plugins:{
            legend:{
                display: true,
                labels:{
                    padding: 20,
                },
            }
        }
    }
    };
    var ctx = document.getElementById('chartReturncategory');
    var myChart = new Chart(ctx, config);
    }
    // doanh thu tung tháng
    ReturnRevenueByMonth();

    function ReturnRevenueByMonth(){ 
    $.ajax({
        type: 'GET',
        url: "{{route('get_backend.home.chartReturnRevenueByMonth')}}",
       // dataType: 'application/json',
        success: function (res) { 
          var data =  JSON.parse(res);
            console.log(data.lables);
            chartReturnRevenueByMonth(data.lables,data.dataRevenueByMonth,data.backgroundColor);
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    };

    function chartReturnRevenueByMonth(labels,dataRevenueByMonth,backgroundColor){
        var data = {
        labels: labels,
        datasets: [{
            label: 'Doanh Thu Tháng',
            data: dataRevenueByMonth,
            fill: false,
            borderColor: backgroundColor,
            tension: 0.1
        }]
        };
        var config = {
        type: 'line',
        data: data,
        options:{
            scales:{
                y: {
                    title: {
                        display: true,
                        text: 'VNĐ',
                        //color: 'red',
                    },
                }

            }
        }
        };
    var ctx = document.getElementById('chartReturnRevenueByMonth');
    var myChart = new Chart(ctx, config);
    }

    //sản phẩm hot từng tháng
    ReturnProductHotTrend();
    function ReturnProductHotTrend(){ 
    $.ajax({
        type: 'GET',
        url: "{{route('get_backend.home.chartReturnProductHotTrend')}}",
       // dataType: 'application/json',
        success: function (res) { 
          var data =  JSON.parse(res);
            console.log(data.lables);
            chartReturnProductHotTrend(data.lables,data.dataset);
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    };

    function chartReturnProductHotTrend(labels,dataset){
        var data = {
        labels: labels,
        datasets: dataset
        };
        var config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart - Stacked'
                },
                },
                responsive: true,
                scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Số Lượng Sản Phẩm',
                        //color: 'red',
                    },
                }
                }
            }
            };
    var ctx = document.getElementById('chartReturnProductHotTrend');
    var myChart = new Chart(ctx, config);
    }

</script>
@stop