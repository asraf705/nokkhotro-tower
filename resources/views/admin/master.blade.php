<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/css/style.css">
    <!-- End layout styles -->
    {{-- <link rel="shortcut icon" href="{{ asset('back-end-assets') }}/assets/images/favicon.png" /> --}}
  </head>
  <body>

    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.include.left-sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.include.header')
        <!-- partial -->

        <div class="main-panel">
        @yield('content')

          <!-- content-wrapper ends -->

          <!-- partial:partials/_footer.html -->
          @include('admin.include.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('back-end-assets') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('back-end-assets') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('back-end-assets') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/misc.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/settings.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('back-end-assets') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>