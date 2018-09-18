<?php
    //sửa thông tin sản phẩm theo id
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "SELECT ten_kh, sdt, email ,trang_thai, ngay_dh, tong_gia, dia_chi FROM don_hang "
                        . " WHERE id_dh = $id"; 
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
        $tong_gia = number_format($sua[5]);
    }
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Thông tin đơn hàng</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Đơn Hàng</th>
                    <th>Tổng Giá</th>
                    <th>Địa chỉ</th>
                    <th>Tùy chọn</th>			
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php if(isset($sua)) echo $sua[0]; ?></td>
                <td><?php if(isset($sua)) echo $sua[1]; ?></td>
                <td><a href="mailto:<?php if(isset($sua)) echo $sua[2]; ?>"><?php if(isset($sua)) echo $sua[2]; ?></td>
                <td>
                <?php
                    if($sua[3]==1){
                        echo "Đã duyệt";
                    } elseif($sua[3]==2) {
                        echo "Chưa duyệt";
                    }
                ?>
                </td>
                <td><?php if(isset($sua)) echo $sua[4]; ?></td>
                <td><?php if(isset($sua)) echo $tong_gia; ?>VNĐ</td>
                <td><?php if(isset($sua)) echo $sua[6]; ?></td>
                <td>
                    <a href="index.php?page=don_hang" class="btn btn-linkedin">Quay lại</a>
                    <br/><?php if($sua[3]==2){?><a href="index.php?page=don_hang&up=<?php echo $id;?>" class="btn btn-success">Duyệt</a><?php } ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    
    <span style="font-family: sans-serif; font-size: 25px; color: red;">Các sản phẩm được đặt</span>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <th>Tên sản phẩm</th> 
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id_dh, ct_dh.id_sp, so_luong, ten_sp,hinh_anh,gia FROM ct_dh join san_pham on ct_dh.id_sp = san_pham.id_sp "
                        . " WHERE id_dh = $id";
                $ctdh = $conn->query($sql);          
                foreach ($ctdh as $ct){
                    $id_dh = $ct[0];
                    $id_sp = $ct[1];
                    $so_luong = $ct[2];
                    $ten_sp = $ct[3];
                    $hinh_anh = $ct[4];
                    $gia = $ct[5];
                ?>
                
                <tr>
                    <td><?php if(isset($ct)) echo $ten_sp."-ID:".$id_sp;?></td>
                    <td><img src="../image/<?php if(isset($ct)) echo $hinh_anh;?>" class="rounded" width="100px"/></td>
                    <td><?php if(isset($ct)) echo number_format($so_luong*$gia);?>VNĐ</td>
                    <td><?php if(isset($ct)) echo $so_luong;?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>