<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa sản phẩm này khônng?')==true)
        {
            window.location = "index.php?page=xoa_san_pham&id="+id;
        }
    }
</script>
<div class="box">
<div class="box-header">
<h3 class="box-title">Danh sách sản phẩm</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th style="width: 4%;">ID</th>
            <th style="width: 21%;">Tên sản phẩm</th>
            <th style="width: 10%;">Loại sản phẩm</th>
            <th style="width: 8.5%;">Khối lượng</th>
            <th style="width: 5%;">Giá</th>
            <th style="width: 8%;">Trạng thái</th>
            <th style="width: 9%;">Hình ảnh</th>
            <th style="width: 6.5%;">Tùy chọn</th>    

        </tr>
    </thead>
    <tbody>
        <?php
        //Truy van
        $query = "SELECT id_sp,ten_sp,ten_pl,khoi_luong,gia,san_pham.trang_thai,mo_ta,hinh_anh,chi_tiet "
            . "FROM san_pham join phan_loai on san_pham.id_pl = phan_loai.id_pl ";
        //Thuc thi
        $rows = $conn->query($query);
        //Kiem tra
         foreach($rows as $cot) {
             $gia = number_format($cot[4]);
             ?>
            <tr>
            <td><?php if(isset($cot)) echo"$cot[0]";?></td>
            <td><?php if(isset($cot)) echo"$cot[1]";?></td>
            <td><?php if(isset($cot)) echo"$cot[2]";?></td>
            <td><?php if(isset($cot)) echo"$cot[3]";?></td>
            <td><?php if(isset($cot)) echo"$gia";?></td>
            <?php
            if($cot[5]==1)  echo "<td><i class='btn btn-success'>Hiện</i></td>";
            elseif($cot[5]==2)  echo "<td><i class='btn btn-warning'>Ẩn</i></td>";
            else  echo "<td></td>";
            ?>
            <td><img src='../image/<?php if(isset($cot)) echo"$cot[7]";?>' style='width:100px;'></td>
            <td><a href='index.php?page=sua_san_pham&id=<?php if(isset($cot)) echo"$cot[0]";?>' class="btn btn-success">Sửa</a>
      <a href='#' class="btn btn-danger" onclick='check(<?php if(isset($cot)) echo"$cot[0]";?>)'>Xóa</a></td>
            </tr>
                <?php
                    }
        ?>
    </tbody>
  </table>
</div>
<!-- /.box-body -->
</div>