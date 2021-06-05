<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 23:24:50 GMT -->
<head>
       <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Aviark - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('layouts.sidebar')
         <!-- TOP Nav Bar -->
         @include('layouts.navbar')
         <!-- TOP Nav Bar END -->
         <!-- Right Sidebar Panel Start-->
         <!-- @include('layouts.right-sidebar') -->
         <!-- Right Sidebar Panel End-->
         <!-- Page Content  -->
         @yield('content')
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
       @include('layouts.footer')
         <!-- <script type="text/javascript"> -->
             @yield('custom-script')
         <!-- </script> -->
      <!-- Footer END-->
     