<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 14:45:00 GMT -->
<head>
    <!-- Title -->
    <title>A24Fashion</title>
    <!-- Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon -->
    <link rel="shortcut icon"  type="image/png" href="{{asset('admin/dist/images/a24.jpg')}}"/>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('admin/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/style-dark.min.css')}}" />
  </head>
  <body data-theme="dark">
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        @include('components.layout.sidebar')
        <!-- End Sidebar scroll-->
    </aside>
    
      <!-- Sidebar End -->
      <!-- Main wrapper -->
      <div class="body-wrapper">
        <!-- Header Start -->
        @include('components.layout.header')
        <!-- Header End -->
        <div class="container-fluid">

          @yield('content')
          
        </div>
      </div>
    </div>
    <!--  Shopping Cart -->
    @include('components.layout.shoppingcart')
    <!--  Mobilenavbar -->
    @include('components.layout.mobilenavbar')
    <!-- Search Bar -->
    @include('components.layout.searchbar')
    <!-- Customizer -->
    <!-- @include('components.layout.customizer') -->
    <!-- Customizer -->
    <!-- Import Js Files -->
    <script src="{{asset('admin/dist/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- core files -->
    <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/app.dark.init.js')}}"></script>
    <script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('admin/dist/js/custom.js')}}"></script>
    <!-- current page js files -->
    <script src="{{asset('admin/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/dashboard2.js')}}"></script>
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 14:45:00 GMT -->
</html>