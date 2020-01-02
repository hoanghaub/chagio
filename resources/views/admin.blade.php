<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{url('')}}/public/admin/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{url('')}}/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('')}}/public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('')}}/public/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{url('')}}/public/admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>IMAGES</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Images</h6>
            <a class="collapse-item" href="{{route('images_cs1')}}">Ảnh Cơ Sở 1</a>
            <a class="collapse-item" href="{{route('images_cs2')}}">Ảnh Cơ Sở 2</a>
            <a class="collapse-item" href="{{route('images_cs3')}}">Ảnh Cơ Sở 3</a>
            <a class="collapse-item" href="{{route('images_cs4')}}">Ảnh Cở Sở 4</a>
            <a class="collapse-item" href="{{route('images_cs5')}}">Ảnh Cở Sở 5</a>
            <a class="collapse-item" href="{{route('images_food')}}">Ảnh Món Ăn</a>
            <a class="collapse-item" href="{{route('images_customer')}}">Ảnh Khách Hàng</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('address')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Address</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('introduction')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Introduction</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('menu')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Article</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Article</h6>
            <a class="collapse-item" href="{{route('article')}}">articles</a>
            <a class="collapse-item" href="{{route('article_detail')}}">articles_detail</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>News</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="{{route('news')}}">news</a>
            <a class="collapse-item" href="{{route('news_detail')}}">news detail</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{url('')}}/public/admin/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>
          @yield('main')
          
          
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{url('')}}/public/admin/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('')}}/public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('')}}/public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{url('')}}/public/admin/js/ruang-admin.min.js"></script>
  <script src="{{url('')}}/public/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="{{url('')}}/public/admin/js/demo/chart-area-demo.js"></script>  
</body>

</html>