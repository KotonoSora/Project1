<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa mục trang chủ này khônng?')==true)
        {
            window.location = "index.php?page=xoa_trang_chu&id="+id;
        }
    }
</script>    
<?php
    $q = "SELECT COUNT(id_tc) FROM trang_chu";
    $count = $conn->query($q);
    foreach ($count as $r){
        $bn02 = $r[0];
    }
    if($bn02>0){
?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Banner</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th style="width: 2%;">ID</th>
          <th style="width: 11%;">Banner</th>  
          <th style="width: 11%;">Banner1</th>
          <th style="width: 3%;">Logo</th>		
          <th style="width: 4%;">Tùy chọn</th>					
      </tr>
      </thead>
      <tbody>
      <?php
      //Truy van
      $query = "SELECT id_tc, banner, banner1, logo FROM trang_chu WHERE 1";
      //Thuc thi
      $rows = $conn->query($query);

      //Kiem tra
      foreach($rows as $cot) 
      { 
              echo "<tr>"
                    . "<td>$cot[0]</td>"
                    . "<td>$cot[1]</td>"   
                    . "<td>$cot[2]</td>"; 
              echo "<td><img src='../image/$cot[3]' style='width:80px;'></td>"
                    . "<td><a href='index.php?page=sua_trang_chu&id=$cot[0]' class='btn btn-success'>Sửa</a> "
                    . "<a href='#' onclick='check($cot[0])' class='btn btn-danger'>Xóa</a></td>"
              ."</tr>";
      }
      ?>
      </tbody>
    </table>
  </div>
</div>
<?php 
    } else {
        header('location:index.php?page=them_trang_chu');
    }
?>