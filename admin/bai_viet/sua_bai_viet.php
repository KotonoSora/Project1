<?php
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "select tieu_de, noi_dung, phan_loai, trang_thai, hinh_anh from bai_viet where id_bv = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $phan_loai = $_POST['phan_loai'];
        $trang_thai = $_POST['trang_thai'];
        $hinh_anh = $_FILES["hinh_anh"]["name"];
        if(empty($hinh_anh)){
            $hinh_anh=$sua[4];
        }
        $query = "update bai_viet set tieu_de='$tieu_de',noi_dung='$noi_dung',phan_loai='$phan_loai',trang_thai=$trang_thai, "
                . "hinh_anh='$hinh_anh' "
                . "where id_bv = $id";
        $count = $conn->exec($query);
        if(!empty($hinh_anh)){
            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../image/$hinh_anh");
        }
        if($count>0)
        {
           header('location:index.php?page=bai_viet');
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
        <tr>
            <td>Tiêu đề: </td>
            <td>
                <input type="text" name="tieu_de" class="form-control"style="width:450px" value="<?php if(isset($sua)) echo $sua[0]; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Nội dung: </td>
            <td style="width: 800px;">
                <textarea name="noi_dung" class="ckeditor"><?php if(isset($sua)) echo $sua[1]; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Phân loại: </td>
            <td>
                <input type="radio" name="phan_loai" value="1"
                       <?php if(isset($sua) && $sua[2]==1) echo 'checked'; ?>/>Khuyến mại
                <input type="radio" name="phan_loai" value="2"
                       <?php if(isset($sua) && $sua[2]==2) echo 'checked'; ?>/>Tin tức
                <input type="radio" name="phan_loai" value="2"
                       <?php if(isset($sua) && $sua[2]==3) echo 'checked'; ?>/>Kiến thức trà
            </td>
        </tr>
        <tr>
            <td>Trạng thái: </td>
            <td>
                <input type="radio" name="trang_thai" value="1"
                       <?php if(isset($sua) && $sua[3]==1) echo 'checked'; ?>/>Hiển thị
                <input type="radio" name="trang_thai" value="2"
                       <?php if(isset($sua) && $sua[3]==2) echo 'checked'; ?>/>Ẩn
            </td>
        </tr>
        <tr>
        <td>Ảnh: </td>
        <td>
            <?php 
                if(isset($sua[4])) echo "<img src='../image/$sua[4]' width='100px'>";
                echo "<br>";
            ?>
            <input type="file" name="hinh_anh">
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
</div>
</div>