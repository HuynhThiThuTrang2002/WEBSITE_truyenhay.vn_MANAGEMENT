<?php require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" href="<?php public_patch('img/trang.jpg') ?>" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <script src=""></script>
  <link rel="stylesheet" href="<?php public_patch('css/trang2.css') ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php public_patch('admin/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/summernote/summernote-bs4.min.css') ?>">
  <link rel="stylesheet" href="<?php public_patch('css/jquery-confirm.min1.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php public_patch('img/trang.jpg') ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo APP_URL ?>" class="nav-link">Trang Hiển Thị Tủ Sách</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo DangXuat ?>" role="button">
        Đăng xuất
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo APP_URL ?>" class="brand-link">
      <img src="<?php public_patch('img/trang.jpg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tủ Sách Healthy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php public_patch('img/user.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['truyenhay_user'] ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo bangdieukhien ?>" class="nav-link <?php active('admin/bang-dieu-khien', 'active') ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng Điều Khiển
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo DangTruyen ?>" class="nav-link <?php active('admin/dang-truyen', 'active') ?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Đăng Sách
              </p>
            </a>
          </li>
          <li class="nav-header">CHỨC NĂNG CƠ BẢN</li>
          <li class="nav-item">
            <a href="<?php echo theloaitruyen ?>" class="nav-link <?php active('admin/the-loai-truyen', 'active') ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Thể Loại Sách
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo Truyen ?>" class="nav-link <?php active('admin/truyen', 'active'); active('admin/sua-truyen', 'active'); active('admin/danh-sach-chuong', 'active'); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Bộ Sưu Tập Sách
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require_once './mvc/views/'.$data['page'].'.php'; ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-<?php echo date('Y') ?> <a href="<?php echo APP_URL ?>">TuSachHealthy</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php public_patch('admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php public_patch('admin/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php public_patch('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?php public_patch('admin/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php public_patch('admin/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?php public_patch('admin/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?php public_patch('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php public_patch('admin/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?php public_patch('admin/plugins/moment/moment.min.js') ?>"></script>
<script src="<?php public_patch('admin/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php public_patch('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?php public_patch('admin/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php public_patch('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php public_patch('admin/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php public_patch('admin/dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php public_patch('admin/dist/js/pages/dashboard.js') ?>"></script>
<script src="<?php public_patch('js/jquery-confirm2.min.js') ?>"></script>
<script src="<?php public_patch('js/js_alert1.js') ?>"></script>
<?php
    if(isset($_COOKIE['message'])){
      echo '<script>Alert("'.$_COOKIE["message"].'")</script>';
    }
?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
<script type="text/javascript">
    function ChinhSua(id, ten, noidung){
        document.getElementById('id_chinhsua').value = id;
        document.getElementById('ten_chinhsua').value = ten;
    }
</script>
<script src="<?php public_patch('ckeditor/ckeditor.js') ?>"></script>
<script src="<?php public_patch('js/trang1.js') ?>"></script>
<script src="<?php public_patch('js/trang3.js') ?>"></script>
</body>
</html>