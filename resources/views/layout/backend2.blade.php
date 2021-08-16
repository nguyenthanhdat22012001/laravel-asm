

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin-Shoppo</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('backend/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
  <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>


  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('backend/css/sleek.css')}}" />

  

  <!-- FAVICON -->
  <link href="{{asset('backend/img/favicon.png" rel="shortcut icon')}}" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/plugins/nprogress/nprogress.js')}}"></script>
</head>

<body class="header-fixed sidebar-fixed header-light sidebar-dark" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding-top: 20px;">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html">
                                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z"></path>
                                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z"></path>
                                    </g>
                                </svg>

                                <span class="brand-name">Sleek Dashboard</span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Đăng Nhập</h4>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('backend/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('backend/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('backend/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('backend/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('backend/js/sleek.js')}}"></script>
<script src="{{asset('backend/js/chart.js')}}"></script>
<script src="{{asset('backend/js/date-range.js')}}"></script>
<script src="{{asset('backend/js/map.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>




  </body>
</html>
