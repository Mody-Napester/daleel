<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('assets_dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ url('assets_dashboard/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('assets_dashboard/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
{{--  <link rel="shortcut icon" href="{{ url('assets_dashboard/images/favicon.png') }}" />--}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @yield('head')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{ route('dashboard.home.index') }}">
{{--            <img src="{{ url('assets_dashboard/images/logo.svg') }}" alt="logo" />--}}
              Daleel
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard.home.index') }}">
            <img src="{{ url('assets_dashboard/images/logo-mini.svg') }}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
            <h3 class="welcome-sub-text">Check what you want </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ url('assets_dashboard/images/faces/face8.jpg') }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ url('assets_dashboard/images/faces/face8.jpg') }}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
              </div>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('Logout') }}</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('@dashboard._layouts._sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-{{ session('message')['type'] }} alert-dismissible fade show" role="alert">
                    {{ session('message')['text'] }}
                </div>
            @endif

          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Daleel Solutions</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © {{ date('Y') }}. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

      @include('@dashboard._modals.confirm_delete')
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ url('assets_dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ url('assets_dashboard/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ url('assets_dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('assets_dashboard/vendors/progressbar.js/progressbar.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('assets_dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ url('assets_dashboard/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('assets_dashboard/js/template.js') }}"></script>
  <script src="{{ url('assets_dashboard/js/settings.js') }}"></script>
  <script src="{{ url('assets_dashboard/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('assets_dashboard/js/dashboard.js') }}"></script>
  <script src="{{ url('assets_dashboard/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

  @yield('footer')
</body>

</html>

