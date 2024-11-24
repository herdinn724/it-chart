<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/vendors/css/vendor.bundle.base.css') }}">
    
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/vendors/jquery-bar-rating/css-starts.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets_pluginAdmin/css/demo_1/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets_pluginAdmin/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('layouts.partial.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        @include('layouts.partial.setting_panel')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('layouts.partial.navbar')
        <!-- partial -->
        @include('layouts.dashboard')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets_pluginAdmin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets_pluginAdmin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets_pluginAdmin/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/js/misc.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/js/settings.js')}}"></script>
    <script src="{{asset('assets_pluginAdmin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets_pluginAdmin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>