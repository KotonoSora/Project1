<?php
    
    //sửa thông tin sản phẩm theo id
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "select ten_sp,id_pl,khoi_luong,gia,trang_thai,mo_ta,hinh_anh,chi_tiet from san_pham "
                . "where id_sp = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $ten_sp = $_POST['ten_sp'];
        $id_pl = $_POST['id_pl'];
        $khoi_luong = $_POST['khoi_luong'];
        $gia = $_POST['gia'];
        $trang_thai = $_POST['trang_thai'];
        $mo_ta = $_POST['mo_ta'];
        $hinh_anh = $_FILES["hinh_anh"]["name"];
        if(empty($hinh_anh)){
            $hinh_anh=$sua[6];
        }
        $chi_tiet = $_POST['chi_tiet'];
        
        $query = "update san_pham set ten_sp ='$ten_sp', id_pl=$id_pl,khoi_luong=$khoi_luong,gia=$gia,"
                . "trang_thai=$trang_thai,mo_ta='$mo_ta',hinh_anh='$hinh_anh',chi_tiet='$chi_tiet'"
                . "where id_sp = $id";
        $count = $conn->exec($query);
        if(!empty($hinh_anh)){
            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "image/$hinh_anh");
        }
        if($count>0){
            header('location:index.php?page=san_pham');
        }else {
            echo "<span class='error'>Chưa thay đổi thông tin nào</span>";
        }
    }
?>
<div class="box">
<div class="box-header">
<h1>Sửa đổi</h1>
</div>
<!-- /.box-header -->
<div class="box-body">
<form action="" method="post" enctype="multipart/form-data">
<table>
    <tr style="height: 40px;">
        <td>Tên sản phẩm: </td>
        <td style="width:600px">
            <input type="text" name="ten_sp"  class="form-control" value="<?php if(isset($sua)) echo $sua[0]; ?>"/>
        </td>
    </tr>
    <tr style="height: 40px;">
        <td>Mô tả: </td>
        <td>
            <input type="text" name="mo_ta"  class="form-control" value="<?php if(isset($sua)) echo $sua[5]; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Chi tiết sản phẩm: </td>
        <td>
            <textarea name="chi_tiet" class="ckeditor">
                <?php if(isset($sua)) echo $sua[7]; ?>
            </textarea>
        </td>
    </tr>
    <tr style="height: 50px;">
        <td>Loại hàng: </td>
        <td>
            <select name="id_pl">
            <?php
                $query = "SELECT id_pl, ten_pl FROM phan_loai WHERE 1";
                $rows = $conn->query($query);
                foreach($rows as $k) { 
                    $str = "";
                    if($sua[1] == $k[0]){
                        $str = "selected";
                    }
                    echo "<option value='$k[0]' $str>$k[1]</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    <tr style="height: 50px">
        <td>Khối lượng sản phẩm(gram): </td>
        <td >
            <!--<input type="text" name="khoi_luong" style="width: 100px" value="<?php // if(isset($sua)) echo $sua[2]; ?>"><span>gram</span>-->
            <select name="khoi_luong">
                <option value="200" <?php if($sua[2]==200) echo "selected"; ?>>200 gram </option>
                <option value="500" <?php if($sua[2]==500) echo "selected"; ?>>500 gram </option>
                <option value="1000" <?php if($sua[2]==1000) echo "selected"; ?>>1 kg</option>
            </select>
        </td>
    </tr>
    <tr style="height: 50px">
        <td>Giá sản phẩm: </td>
        <td>
            <input type="text" name="gia" style="width: 150px" value="<?php if(isset($sua)) echo $sua[3]; ?>"><span>đồng</span>
        </td>
    </tr>
    <tr style="height: 50px">
        <td>Trạng thái: </td>
        <td>
            <input type="radio" name="trang_thai" value="1"
                   <?php if(isset($sua) && $sua[4]==1) echo 'checked'; ?>/>Hiển thị
            <input type="radio" name="trang_thai" value="2"
                   <?php if(isset($sua) && $sua[4]==2) echo 'checked'; ?>/>Ẩn
        </td>
    </tr>
    
    <tr style="height: 120px">
        <td>Ảnh đại diện sản phẩm: </td>
        <td>
            <input type="file" name="hinh_anh">
            <?php 
                if(isset($sua[6])) echo "<img src='../image/$sua[6]' width='100px'>";
                echo "<br>";
            ?>
            
        </td>
    </tr>
    
    <tr>
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Cập nhật"/>
            </td>
        </tr>
    </table>
</form>
<br/><p/><a href="index.php?page=bai_viet"class="btn btn-linkedin">Quay lại</a>
    </div></div>