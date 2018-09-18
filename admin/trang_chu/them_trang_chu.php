<?php
    $q = "SELECT COUNT(id_tc) FROM trang_chu";
    $count = $conn->query($q);
    foreach ($count as $r){
        $bn = $r[0];
    }
    if($bn==0){
    $logoErr = $bannerErr = $banner1Err = "";
    $logo = $banner = $banner1 = "";
    $kt = 0;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["banner"])) {
          $bannerErr = "Cần tiêu đề banner";
        } else {
          $banner = test_input($_POST["banner"]);
          $kt++;
        }  
         if (empty($_POST["banner1"])) {
          $banner1Err = "Cần tiêu đề banner1";
        } else {
          $banner1 = test_input($_POST["banner1"]);
          $kt++;
        }       
        if($_FILES["logo"]["name"] !=""){
            $logo = $_FILES["logo"]["name"];
            $kt++;
        }
    }
    
    if($kt==3){
        $sql = "INSERT INTO trang_chu(logo, banner, banner1) "
                . "VALUES ('$logo', '$banner','$banner1')";
        $count = $conn->exec($sql);
        if(!empty($logo)){
            move_uploaded_file($_FILES['logo']['tmp_name'], "../image/$logo");
        }
        if($count>0){
            header('location:index.php?page=trang_chu');
        }
    }
?>
<div class="box">
  <div class="box-header">
      <span class="error">Không có thông nội dung banner</span>
    <h1>Thêm mới</h1>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="" enctype="multipart/form-data">  
    <table class="them">
        <tr style="height: 50px;">
            <td>Logo: </td>
            <td>
                <input type="file" name="logo">
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Banner dòng 1: </td>
            <td style="width:600px">
                <input type="text" name="banner" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $bannerErr;?></span>
            </td>
        </tr> 
        <tr style="height: 50px;">
            <td>Banner dòng 2: </td>
            <td style="width:600px">
                <input type="text" name="banner1" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $banner1Err;?></span>
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
</div></div>
<?php  } else { ?>
<div class="box">
    <p/>Đã tồn tại banner<br/><span class="error">Bạn không thêm mới banner</span>
</div>
<?php } ?>
<p/><a href="index.php?page=trang_chu"class="btn btn-linkedin">Xem banner đã thêm</a>