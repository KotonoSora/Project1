<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa đơn hàng này không?')==true)
        {
            window.location = "index.php?page=xoa_don_hang&id="+id;
        }
    }
</script>
<?php 
    //duyệt đơn hàng
    if(isset($_REQUEST['up'])){
        $up = $_REQUEST['up'];
        $q = "update don_hang set trang_thai=1 where id_dh = $up and trang_thai = 2";
        $count = $conn->exec($q);
        if($count>0){
            header("location:index.php?page=dh_chi_tiet&id=$up");
        } else {
            header("location:index.php?page=don_hang");
        }
    }
?>
<?php
    $q = "SELECT COUNT(id_dh) FROM don_hang";
    $count = $conn->query($q);
    foreach ($count as $r){
        $bn02 = $r[0];
    }
    if($bn02>0){
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Danh sách đơn hàng</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Tổng Giá</th>
                    <th>Tùy chọn</th>					
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT id_dh, ten_kh, sdt, email ,trang_thai, ngay_dh, tong_gia FROM don_hang "
                        . " WHERE 1 order by id_dh desc";
                $rows = $conn->query($query);
                foreach($rows as $cot) { 
                    $tong_gia = number_format($cot[6]);
                ?>
                <tr>
                    <td><?php if(isset($cot)) echo $cot[0]; ?></td>
                    <td><?php if(isset($cot)) echo $cot[1]; ?></td>
                    <td><?php if(isset($cot)) echo $cot[2]; ?></td>
                    <td><a href="mailto:<?php if(isset($cot)) echo $cot[3]; ?>"><?php if(isset($cot)) echo $cot[3]; ?></a></td>
                    <?php
                    if($cot[4]==1){
                        echo "<td>Đã duyệt</td>";
                    } elseif($cot[4]==2) {
                        echo "<td>Chưa duyệt</td>";
                    } else {
                        echo "<td></td>";
                    }
                    ?>
                    <td><?php if(isset($cot)) {$date=date_create("$cot[5]"); echo date_format($date,"d/m/Y");}?></td>
                    <td><?php if(isset($cot)) echo $tong_gia; ?>VNĐ</td>
                    <td><a href='index.php?page=dh_chi_tiet&id=<?php if(isset($cot)) echo $cot[0];?>' class="btn btn-success">Xem</a>
                        <a href='#' class="btn btn-danger" onclick='check(<?php echo "$cot[0])";?>'>Xóa</a></td>
                </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php 
} else {
    echo "<span style='color:red'>Không có đơn đặt hàng nào</span>";
}
?>