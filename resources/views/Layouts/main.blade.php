<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard MSI</title>
  <link rel="shortcut icon" type="image/png" href="/images/logos/favicon.jpg" />
  <link rel="stylesheet" href="/css/styles.min.css" />
  <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('Partials.sidebar')



    <!--  Main wrapper -->
    <div class="body-wrapper">
    @include('Partials.header')
      <div class="container-fluid">
          @yield('container')
      </div>
    </div>
  </div>
  <script src="/libs/jquery/dist/jquery.min.js"></script>
  <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/sidebarmenu.js"></script>
  <script src="/js/app.min.js"></script>
  <script src="/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/libs/simplebar/dist/simplebar.js"></script>
  <script src="/js/dashboard.js"></script>
</body>

</html>
