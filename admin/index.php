<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hệ thống quản trị website</title>
  <script src="../ckeditor/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../css/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../css/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../css/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../css/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../css/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../css/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../css/bootstrap/css/style4.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php
    ob_start();
    //Ket noi
    include '../connect.php';
    //tạo cookie
    if(!(isset($_COOKIE['login_admin']) && $_COOKIE['login_admin']=='ok'))
    {
        header('location:login.php');
    }
?>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Trà</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Việt Nhân Trà</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="logout.php" >Đăng xuất</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="index.php?page=don_hang">
              <i class="fa fa-pie-chart"></i>
              <span>Đơn hàng</span>
          </a>
        </li>
        <li class="treeview">
          <a href="index.php?page=phan_hoi">
              <i class="fa fa-pie-chart"></i>
              <span>Phản hồi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Banner, Footer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=trang_chu"><i class="fa fa-pie-chart"></i>Banner</a></li>
            <li><a href="index.php?page=foo_ter1"><i class="fa fa-pie-chart"></i>Footer cột 1</a></li>
            <li><a href="index.php?page=foo_ter2"><i class="fa fa-pie-chart"></i>Footer cột 2</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý phân loại</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=them_phan_loai"><i class="fa fa-edit"></i> Thêm mới</a></li>
            <li><a href="index.php?page=phan_loai"><i class="fa fa-pie-chart"></i> Danh sách phân loại</a></li>
          </ul>
        </li>
        <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                    <li><a href="index.php?page=them_san_pham"><i class="fa fa-edit"></i> Thêm sản phẩm </a></li>
                    <li><a href="index.php?page=san_pham"><i class="fa fa-pie-chart"></i> Danh sách sản phẩm</a></li>
            </ul>
        </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-edit"></i> <span>Bài viết</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
                <li><a href="index.php?page=them_bai_viet"><i class="fa fa-edit"></i> Viết bài</a></li>
                <li><a href="index.php?page=bai_viet"><i class="fa fa-pie-chart"></i> Danh sách bài viết</a></li>
        </ul>
        </li>
        <li class="treeview">
          <a href="index.php?page=lien_he">
            <i class="fa fa-pie-chart"></i> <span>Thông tin liên hệ</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        
          
    <?php
     
        if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page']; 
        switch($page){
            //phần phân loại
            case 'phan_loai':
                include 'phan_loai/phan_loai.php';
                break;
            case 'sua_phan_loai':
                include 'phan_loai/sua_phan_loai.php';
                break;
            case 'them_phan_loai':
                include 'phan_loai/them_phan_loai.php';
                break;
            case 'xoa_phan_loai':
                include 'phan_loai/xoa_phan_loai.php';
                break;
            //phần sẩn phẩm
            case 'san_pham':
                include 'san_pham/san_pham.php';
                break;
            case 'sua_san_pham':
                include 'san_pham/sua_san_pham.php';
                break;
            case 'them_san_pham':
                include 'san_pham/them_san_pham.php';
                break;
            case 'xoa_san_pham':
                include 'san_pham/xoa_san_pham.php';
                break;
            //phần bài viết
            case 'bai_viet':
                include 'bai_viet/bai_viet.php';
                break;
            case 'them_bai_viet':
                include 'bai_viet/them_bai_viet.php';
                break;
            case 'sua_bai_viet':
                include 'bai_viet/sua_bai_viet.php';
                break;
            case 'xoa_bai_viet':
                include 'bai_viet/xoa_bai_viet.php';
                break;
            //phần đơn hàng
            case 'don_hang':
                include 'don_hang/don_hang.php';
                break;
            case 'dh_chi_tiet':
                include 'don_hang/dh_chi_tiet.php';
                break;
            case 'them_don_hang':
                include 'don_hang/them_don_hang.php';
                break;
            case 'sua_don_hang':
                include 'don_hang/sua_don_hang.php';
                break;
            case 'xoa_don_hang':
                include 'don_hang/xoa_don_hang.php';
                break;
            //phần liên hệ
            case 'lien_he':
                include 'lien_he/lien_he.php';
                break;
            case 'them_lien_he':
                include 'lien_he/them_lien_he.php';
                break;
            case 'sua_lien_he':
                include 'lien_he/sua_lien_he.php';
                break;
            case 'xoa_lien_he':
                include 'lien_he/xoa_lien_he.php';
                break;
            //phần phản hồi
            case 'phan_hoi':
                include 'phan_hoi/phan_hoi.php';
                break;
            case 'them_phan_hoi':
                include 'phan_hoi/them_phan_hoi.php';
                break;
            case 'sua_phan_hoi':
                include 'phan_hoi/sua_phan_hoi.php';
                break;
            case 'xoa_phan_hoi':
                include 'phan_hoi/xoa_phan_hoi.php';
                break;
            // footer1
            case 'foo_ter1':
                include 'foo_ter1/foo_ter1.php';
                break;
            case 'them_foo_ter1':
                include 'foo_ter1/them_foo_ter1.php';
                break;
            case 'sua_foo_ter1':
                include 'foo_ter1/sua_foo_ter1.php';
                break;
            case 'xoa_foo_ter1':
                include 'foo_ter1/xoa_foo_ter1.php';
                break;
            // footer2
            case 'foo_ter2':
                include 'foo_ter2/foo_ter2.php';
                break;
            case 'them_foo_ter2':
                include 'foo_ter2/them_foo_ter2.php';
                break;
            case 'sua_foo_ter2':
                include 'foo_ter2/sua_foo_ter2.php';
                break;
            case 'xoa_foo_ter2':
                include 'foo_ter2/xoa_foo_ter2.php';
                break;
            // trang_chủ
            case 'trang_chu':
                include 'trang_chu/trang_chu.php';
                break;
            case 'them_trang_chu':
                include 'trang_chu/them_trang_chu.php';
                break;
            case 'sua_trang_chu':
                include 'trang_chu/sua_trang_chu.php';
                break;
            case 'xoa_trang_chu':
                include 'trang_chu/xoa_trang_chu.php';
                break;
            }
        } else{
            include 'index2.php';
        }
    ?>
    
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../css/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../css/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../css/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../css/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../css/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../css/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../css/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../css/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


</body>
</html>
