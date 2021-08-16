

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<!-- chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
</head>


  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        
        @include('backend.popular.sidebar')
      

      <div class="page-wrapper">
                  <!-- Header -->
        
         @include('backend.popular.header')

         <div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>@yield('title')</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                    @yield('title')
                    </li>
                </ol>
            </nav>
        </div>

        <div class="row">
        @yield('content')
        </div>
        @include('backend.popular.footer')

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
