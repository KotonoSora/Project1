<?php
    //lấy id_sp,hiển thị thông tin sản phẩm khi tồn tại biến id_sp và gửi bằng phương thức get
    if(isset($_REQUEST['id_sp']) && $_SERVER["REQUEST_METHOD"] == "GET")
    {
        // lấy thông tin sản phẩm
        $id_sp = $_REQUEST['id_sp'];
        $query = "select id_sp,ten_sp,gia,hinh_anh, khoi_luong from san_pham "
                . "where id_sp = $id_sp";        
        $row_sp = $conn->query($query);          
        $cot_sp = $row_sp->fetch();
        
        $id_sp = $cot_sp[0];
        $ten_sp = $cot_sp[1];
        $gia = $cot_sp[2];
        $hinh_anh = $cot_sp[3];
        if($cot_sp[4]>=1000){
            $kl = $cot_sp[4]/1000;
            $khoi_luong = "$kl kg";
        } else {
            $khoi_luong = "$cot_sp[4] gram";
        }
        //lấy số lượng
        if(isset($_REQUEST['sl'])){
            $sl=$_REQUEST['sl'];
        } else {
            $sl=1;
        }
        
        //bắt đàu nhập giá trị cho biến session
        if(!isset($_SESSION['cart'][$id_sp])){
        //Nếu chưa có sản phẩm trong giỏ hàng
            $_SESSION['cart'][$id_sp] = array('id_sp'=>$id_sp,'ten_sp'=>$ten_sp,'gia'=>$gia,'hinh_anh'=>$hinh_anh,
                'so_luong'=>$sl, 'khoi_luong'=>$khoi_luong);
            header('location:index.php?page=cart');
        } else { 
        //Nếu đã có sản phẩm trong giỏ hàng => thay đổi số lượng
            foreach ($_SESSION['cart'] as $ttsl) {
                if($ttsl['id_sp'] = $id_sp){
                    $_SESSION['cart'][$id_sp]['so_luong'] = $sl;
                }
            }
            header('location:index.php?page=cart');
        }  
    }
    
    //nếu tồn tại biến sp và truyền theo phương thức post
    if(isset($_REQUEST['sp']) && isset($_REQUEST['sl'])){
        //lấy danh sách id_sp và số lượng của sản phẩm đó
        foreach ($_POST['sp'] as $value) {
            $array_keys[] = $value;
        }
        foreach ($_POST['sl'] as $value) {
            $array_values[] = $value;
        }
        //cập nhật biến sesseion
        for($i=0;$i<count($array_values);$i++){
            $id_sp = $array_keys[$i];
            $sl = $array_values[$i];
            $_SESSION['cart'][$id_sp]['so_luong'] = $sl;
            header('location:index.php?page=cart');
        }
        
    }
?>
<div class="col-md-9 sp_phai">
<div class="row san_pham_noi_bat">
<div class="sp_nb_img">
    <img src="image/img_cayla.png"/>
    <p/><span id="sp_top_left"><a href="index.php?page=cart">Giỏ hàng</a></span>
</div>
    
<?php 
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    //nếu tồn tại session thì hiện thị những sản phẩm đã chọn 
?>
    
<form action="index.php" method="post">
<input type="hidden" name="page" value="cart">
<!--truyền giá trị bằng phương thức post đến trang cart-->
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th style="width: 4%;">STT</th>
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>  
        <th>Khối lượng</th> 
        <th>Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $tong_gia = 0;
    $stt=1;
    //bắt đầu hiện thông tin sản phẩm trong giỏ hàng
    foreach ($_SESSION['cart'] as $cart) {
        ?>
        <tr>
            <td><?php echo "$stt";?></td>
            <td> 
                <a href='index.php?page=select&id_sp=<?php echo $cart['id_sp'];?>'>
                    <?php echo $cart['ten_sp'];?>
                </a>
            </td>
            <td>
                <?php echo number_format($cart['gia']*$cart['so_luong']);?> VND
            </td>
            <td>
                <img src='image/<?php echo $cart['hinh_anh'];?>' style='height:100px;'/>
            </td>
            <td> 
                <!--truyền id_sp vào mảng sp[] và so_luong vào mảng sl[]-->
                <input type="hidden" name="sp[]" value="<?php echo $cart['id_sp'];?>">
                <input type='number' name="sl[]" class='form-control' value="<?php echo $cart['so_luong'];?>" 
                       min="1" max="1000" style='text-align:right;width:80px;'>
            </td>
            <td><?php echo $cart['khoi_luong'];?></td>
            <td>
                <a class='btn btn-danger'href='index.php?page=del_cart&id_sp=<?php echo $cart['id_sp'];?>'>
                    Xóa
                </a>
            </td>
            </tr>
        <?php
        $tong_gia += $cart['gia']*$cart['so_luong'];
        $stt++;
    }
    ?>
    </tbody>
    <tfoot>
    <td></td>
    <td colspan="6">
        <span class="btn btn-danger">Tổng tiền: <?php if(isset($tong_gia)) echo number_format($tong_gia);?> đồng</span>
        <input type="submit" class="btn btn-warning" value="Cập nhật giỏ hàng">
        <a href="index.php?page=order" class='btn btn-success'>Thanh toán</a>
    </td>
    </tfoot>
</table>
</form>

<?php 
    } else { // nếu không mời họ chọn sản phẩm
        echo "<p style='font-size:20px; color:red;'>Bạn chưa chọn sản phẩm nào!!!"; 
    }
?>

<p/><a href="index.php" class="btn btn-info">Tiếp tục mua hàng</a>
</div>
</div>