
<!-- Main content -->
<section class="content">
<!-- Info boxes -->
<div class="row">
  
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="ion ion-briefcase"></i></span>
<?php
    $q = "SELECT COUNT(id_sp) FROM san_pham";
    $count_sp = $conn->query($q);
    foreach ($count_sp as $r){
        $sp = $r[0];
    }
?>
      <div class="info-box-content">
        <span class="info-box-text">Sản phẩm</span>
        <span class="info-box-number"><?php echo "$sp";?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
<?php
    $q = "SELECT COUNT(id_dh) FROM don_hang";
    $count_dh = $conn->query($q);
    foreach ($count_dh as $r){
        $dh = $r[0];
    }
?>
      <div class="info-box-content">
        <span class="info-box-text">Đơn hàng</span>
        <span class="info-box-number"><?php echo "$dh";?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
<?php
    $q = "SELECT COUNT(id_dh) FROM don_hang";
    $count_dh = $conn->query($q);
    foreach ($count_dh as $r){
        $dh = $r[0];
    }
?>
      <div class="info-box-content">
        <span class="info-box-text">Khách hàng</span>
        <span class="info-box-number"><?php echo "$dh";?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- /.row -->

<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <div class="col-md-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Đơn đặt hàng mới nhất</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
            <tr>
              <th>Tên Khách Hàng</th>   <!-- product -->
              <th>Số điện thoại</th> <!-- tiếng anh Status -->
              <th>Ngày Đặt Hàng</th>   <!-- Date -->
              <th>Tổng Giá</th>   <!-- Popularity -->
            </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT id_dh, ten_kh, sdt, email ,trang_thai, ngay_dh, tong_gia FROM don_hang "
                        . " WHERE trang_thai = 2 order by id_dh desc";
                $rows = $conn->query($query);
                foreach($rows as $cot) { 
                    $tong_gia = number_format($cot[6]);
                ?>
            <tr>
                <td><a href="index.php?page=dh_chi_tiet&id=<?php if(isset($cot)) echo $cot[0];?>"><?php if(isset($cot)) echo $cot[1]; ?></a></td>
              <td><span class="sparkbar"><?php if(isset($cot)) echo $cot[2];?></span></td>
              <td>
                  <div class="sparkbar" data-color="#00a65a" data-height="20"><?php if(isset($cot)) {$date=date_create("$cot[5]"); echo date_format($date,"d/m/Y");}?></div>
              </td>
              <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php if(isset($cot)) echo $tong_gia;?>VNĐ</div>
              </td>
            </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="index.php?page=don_hang" class="btn btn-sm btn-info btn-flat pull-left">Xem tất cả đơn hàng</a>
      </div>
      <!-- /.box-footer -->
    </div> <!-- Mục đơn hàng -->
  </div>
  <!-- /.col -->
  <div class="col-md-4"> 
    <!-- Mục sản phẩm -->

    <!-- PRODUCT LIST -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sản phẩm mới được thêm</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>

         <?php 
                  // cậu lệnh hiển thị từ file liên hệ để xuất ra thông tin mình cần
                  $query = "SELECT id_sp,ten_sp,ten_pl,khoi_luong,gia,san_pham.trang_thai,mo_ta,hinh_anh,chi_tiet "
                          . "FROM san_pham join phan_loai on san_pham.id_pl = phan_loai.id_pl "
                          ."WHERE 1 order by id_sp desc limit 4"; // Desc xap xep id san pham nguoc tu so lon den so nho 
                  $rows = $conn->query($query);        
          ?>
      <!-- /.box-header --> <!-- -->
      <div class="box-body">
        <ul class="products-list product-list-in-box">
            <?php  // Đây là vòng lập hiện thị Sản phẩm trong class Box-body 
            foreach($rows as $cot) {
                $id_sp = $cot[0];
                $ten_sp = $cot[1];
                      $ten_pl = $cot[2];
                      $khoi_luong = $cot[3];
                      $gia = $cot[4];
                      $hinh_anh = $cot[7];

            ?>
          <li class="item">
            <div class="product-img">
                <?php echo "<img src='../image/$hinh_anh'>"; ?>
            </div>
            <div class="product-info">
                <span class="product-title"><?php echo "$ten_sp";?></span>
                    <span class="label label-success pull-right"><?php echo "$gia";?></span>
                  <span class="product-description">
                    <?php echo "$khoi_luong";?>
                  </span>
            </div>
          </li>
            <?php } ?> <!-- đây là kết thúc câu lệnh vòng lập Sản Phẩm -->
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
          <a href="index.php?page=san_pham" class="btn btn-sm btn-info btn-flat">Xem tất cả sản phẩm</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div> <!-- Mục sản phẩm -->
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
