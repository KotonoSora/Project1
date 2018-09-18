<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id = $_POST['id_ph'];
        $query = "update phanhoi set trang_thai= 1 WHERE idph = $id";
        $count = $conn->exec($query);
        
    }
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "SELECT ten_kh, sdt, email, dia_chi, tieu_de, noi_dung, trang_thai, idph FROM phanhoi WHERE idph = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
        // đặt biết lấy thông tin nội dung
        $noi_dung =  html_entity_decode($sua[5]);
    }
    
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Thông tin phản hồi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
<form action="" method="post">
    <table>
        <tr>
            <td>Họ tên: </td>
            <td>
                <?php if(isset($sua)) echo $sua[0]; ?>
            </td>
        </tr>
        
        <tr>
            <td>Điện thoại: </td>
            <td>
                <?php if(isset($sua)) echo $sua[1]; ?>
            </td>
        </tr>
        <tr>
            <td>Mail: </td>
            <td>
                <a href="mailto:<?php if(isset($sua)) echo $sua[2]; ?>"><?php if(isset($sua)) echo $sua[2]; ?>
            </td>
        </tr>
        <tr>
            <td>Địa chỉ: </td>
            <td>
                <?php if(isset($sua)) echo $sua[3]; ?>
            </td>
        </tr>
        <tr>
            <td>Tiên đề: </td>
            <td>
                <?php if(isset($sua)) echo $sua[4]; ?>
            </td>
        </tr>
        <tr>
            <td>Nội dung: </td>
            <td>
                <div><?php if(isset($noi_dung)) echo "$noi_dung"; ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="index.php?page=phan_hoi"class="btn btn-linkedin">Quay lại</a>
            </td>
            <td>
                <?php 
                    if($sua[6]==2){
                ?>
                <input type="hidden" name="id_ph" value="<?php if(isset($sua)) echo $sua[7]; ?>">
                <input type="submit" value="Đánh dấu đã đọc" class="btn btn-instagram"></a>
                    <?php } ?>
            </td>
        </tr>
    </table>
</form>
</div>
</div>