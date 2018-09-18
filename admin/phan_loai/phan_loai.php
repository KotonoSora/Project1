
<script>
    function check(id,sl_sp)
    {
        //kiểm tra số sản phẩm trong phân loại, nếu có thì không xóa phân loại
        if(sl_sp>0){
            alert("Có "+sl_sp+" sản phẩm trong phân loại. Bạn không thể xóa")
        }else{
        if(confirm('Bạn có muốn xóa mục phân loại này khônng?')==true){
                window.location = "index.php?page=xoa_phan_loai&id="+id;
            }
        }
    }
</script>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Danh Mục Phân Loại </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th>ID</th>
          <th>Tên Phân Loại</th>
          <th>Trạng Thái</th>
          <th>Số sản phẩm</th>
          <th>Tùy chọn</th>					
      </tr>
      </thead>
      <tbody>

      <?php


  //Truy van
  $query = "SELECT phan_loai.id_pl, ten_pl, phan_loai.trang_thai, COUNT(id_sp) FROM phan_loai left JOIN san_pham ON phan_loai.id_pl = san_pham.id_pl GROUP BY ten_pl";
  //Thuc thi
 $rows = $conn->query($query);

  //Kiem tra
    foreach($rows as $cot) 
      { ?>
      <tr>
            <td><?php if(isset($cot)) echo"$cot[0]";?></td>
            <td><?php if(isset($cot)) echo"$cot[1]";?></td>
      <?php
        if($cot[2]==1) echo "<td><i class='btn btn-success'>Hiện</i></td>";
        if($cot[2]==2) echo "<td><i class='btn btn-warning'>Ẩn</i></td>";
      ?>
      <td><?php if(isset($cot)) echo"$cot[3]";?></td>
      <td><a href='index.php?page=sua_phan_loai&id=<?php if(isset($cot)) echo"$cot[0]";?>' class="btn btn-success">Sửa</a>
      <a href='#' class="btn btn-danger" onclick='check(<?php if(isset($cot)) echo"$cot[0],$cot[3]";?>)'>Xóa</a></td>
      </tr>
      <?php
      }
  ?>
      </tbody>

    </table>
  </div>
</div>