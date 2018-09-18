<?php
    $tieu_deErr = $noi_dungErr = $phan_loaiErr = $trang_thaiErr = "";
    $tieu_de = $noi_dung = $phan_loai = $trang_thai = $hinh_anh = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tieu_de"])) {
          $tieu_deErr = "Cần tiêu đề bài viết";
        } else {
          $tieu_de = test_input($_POST["tieu_de"]);
        }
        if (empty($_POST["noi_dung"])) {
          $noi_dungErr = "Cần nội dung bài viết";
        } else {
          $noi_dung = $_POST["noi_dung"];
        }
        if (empty($_POST["phan_loai"])) {
          $phan_loaiErr = "Cần phân loại";
        } else {
          $phan_loai = test_input($_POST["phan_loai"]);
        }
        if (empty($_POST["trang_thai"])) {
          $trang_thaiErr = "Cần trạng thái";
        } else {
          $trang_thai = test_input($_POST["trang_thai"]);
        }
        $hinh_anh = $_FILES["hinh_anh"]["name"];
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $sql = "INSERT INTO bai_viet(tieu_de, noi_dung, phan_loai, trang_thai, hinh_anh) "
            . "VALUES ('$tieu_de', '$noi_dung', $phan_loai, $trang_thai, '$hinh_anh')";
    $count = $conn->exec($sql);
    if(!empty($hinh_anh)){
        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../image/$hinh_anh");
    }
    if($count>0){
        header('location:index.php?page=bai_viet');
    }
?>
<div class="box">
  <div class="box-header">
    <h1>Thêm mới</h1>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="" enctype="multipart/form-data">  
    <table class="them">
        <tr style="height: 80px;">
            <td>Tiêu đề bài viết: </td>
            <td style="width:600px">
                <input type="text" name="tieu_de" class="form-control" >
                </td>
            <td>
                <span class="error">* <?php echo $tieu_deErr;?></span>
            </td>
        </tr>
        <tr>
            <td>Nội dung bài viết: </td>
            <td>
                <textarea name="noi_dung"  class="ckeditor"></textarea>
            </td>
            <td>
                <span class="error">* <?php echo $noi_dungErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Phân loại: </td>
            <td>
                <input type="radio" name="phan_loai" value="1"/>Khuyến mãi
                <input type="radio" name="phan_loai" value="2"/>Tin tức
                <input type="radio" name="phan_loai" value="3"/>Kiến thức về trà
                <span class="error">* <?php echo $phan_loaiErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Trạng thái: </td>
            <td>
                <input type="radio" name="trang_thai" value="1"/>Hiển thị
                <input type="radio" name="trang_thai" value="2"/>Ẩn
                <span class="error">* <?php echo $trang_thaiErr;?></span>
            </td>
        </tr>
        <tr style="height: 80px;">
            <td>Ảnh: </td>
            <td>
                <input type="file" name="hinh_anh">
            </td>
        </tr>
        <tr>
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Đăng bài"/>
            </td>
        </tr>
    </table>
</form>
</div>
</div>
<p/><a href="index.php?page=bai_viet"class="btn btn-linkedin">Xem bài đã viết</a>