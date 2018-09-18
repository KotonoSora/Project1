<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa phản hồi này khônng?')==true)
        {
                window.location = "index.php?page=xoa_phan_hoi&id="+id;
        }
    }
</script>	
<?php
    $q = "SELECT COUNT(idph) FROM phanhoi";
    $count = $conn->query($q);
    foreach ($count as $r){
        $bn02 = $r[0];
    }
    if($bn02>0){
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Thông tin phản hồi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Điện thoại</th>
                    <th>Mail</th>
                    <th>Địa chỉ</th>
                    <th>Tiêu đề</th>
                    <th>Trạng thái</th>
                    <th>Tùy chọn</th>	
                </tr>
            </thead>
            <tbody>
            <?php
            //Truy van
                $query = "SELECT idph, ten_kh, sdt, email, dia_chi, tieu_de, trang_thai FROM phanhoi WHERE 1";
            //Thuc thi
                $rows = $conn->query($query);
            //vòng lặp hiện dữ liệu
                foreach($rows as $cot) { 
                   ?>
                <tr>
                    <td><?php if(isset($cot)) echo $cot[0]; ?></td>
                    <td><?php if(isset($cot)) echo $cot[1]; ?></td>
                    <td><?php if(isset($cot)) echo $cot[2]; ?></td>
                    <td><a href="mailto:<?php if(isset($cot)) echo $cot[3]; ?>"><?php if(isset($cot)) echo $cot[3]; ?></a></td>
                   <td><?php if(isset($cot)) echo $cot[4]; ?></td>
                   <td><?php if(isset($cot)) echo $cot[5]; ?></td>
                   <?php
                    if($cot[6]==1){
                        echo "<td><i class='btn btn-success'>Đã duyệt</i></td>";
                    } elseif($cot[6]==2) {
                        echo "<td><i class='btn btn-danger'>Chưa duyệt</i></td>";
                    } else {
                        echo "<td></td>";
                    }
                    ?>
                    <td><a href='index.php?page=sua_phan_hoi&id=<?php if(isset($cot)) echo $cot[0];?>' class="btn btn-success">Xem</a>
                        <a href='#' class="btn btn-danger" onclick='check(<?php echo "$cot[0]";?>)'>Xóa</a></td>
                </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<?php 
    } else {
        echo "<span style='color:red'>Không có phản hồi nào</span>";
    }
?>