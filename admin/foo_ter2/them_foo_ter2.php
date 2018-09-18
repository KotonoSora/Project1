<?php
    $q = "SELECT COUNT(id_ft2) FROM foo_ter2";
    $count = $conn->query($q);
    foreach ($count as $r){
        $ft = $r[0];
    }
    if($ft==0){
    $dong1Err = $dong2Err = $dong3Err = $dong4Err = $dong5Err = $dong6Err = $dong7Err = $dong8Err = "";
    $dong1 = $dong2 = $dong3 = $dong4 = $dong5 = $dong6 = $dong7 =$dong8 ="";
    $kt=0;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["dong1"])) {
            $dong1Err = "Viết vào dòng 1";
        } else {
            $dong1 = test_input($_POST["dong1"]);
            $kt+= 1;  
        }      
        //
        if (empty($_POST["dong2"])) {
            $dong2Err = "Viết vào dòng 2";
        } else {
            $dong2 = test_input($_POST["dong2"]);
            $kt+= 1;  
        }
        //
        if (empty($_POST["dong3"])) {
            $dong3Err = "Viết vào dòng 3";
        } else {
            $dong3 = test_input($_POST["dong3"]);
            $kt+= 1;  
        }
        //
        if (empty($_POST["dong4"])) {
            $dong4Err = "Viết vào dòng 4";
        } else {
            $dong4 = test_input($_POST["dong4"]);
            $kt+= 1;  
        }
        //
        if (empty($_POST["dong5"])) {
            $dong5Err = "Viết vào dòng 5";
        } else {
            $dong5 = test_input($_POST["dong5"]);
            $kt+= 1;  
        }
        //
         if (empty($_POST["dong6"])) {
            $dong6Err = "Viết vào dòng 6";
        } else {
            $dong6 = test_input($_POST["dong6"]);
            $kt+= 1;  
        }
        //
         if (empty($_POST["dong7"])) {
            $dong7Err = "Viết vào dòng 7";
        } else {
            $dong7 = test_input($_POST["dong7"]);
            $kt+= 1;  
        }
        //
         if (empty($_POST["dong8"])) {
            $dong8Err = "Viết vào dòng 8";
        } else {
            $dong8 = test_input($_POST["dong8"]);
            $kt+= 1;  
        }
    }
    
    if($kt == 8){
        $sql = "INSERT INTO foo_ter2(dong1, dong2, dong3, dong4, dong5, dong6, dong7, dong8) "
                . "VALUES ('$dong1','$dong2','$dong3','$dong4','$dong5','$dong6','$dong7','$dong8')";
        $count = $conn->exec($sql);
        if($count>0)
        {
            header('location:index.php?page=foo_ter2');
        }   
    }
?>
<div class="box">
  <div class="box-header">
      <span class="error">Không có thông nội dung footer cột 2</span>
    <h1>Thêm mới</h1>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="">  
    <table class="them">
        <tr>
            <td style="width: 100px"></td>
            <td>Các sản phẩm nổi bật: </td>
        </tr>
        <tr style="height: 50px;">
            <td>Sản Phẩm 1: </td>
            <td style="width:600px">
                <input type="text" name="dong1" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong1Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Sản Phẩm 2: </td>
            <td style="width:600px">
                <input type="text" name="dong2" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong2Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Sản Phẩm 3: </td>
            <td style="width:600px">
                <input type="text" name="dong3" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong3Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Sản Phẩm 4: </td>
            <td style="width:600px">
                <input type="text" name="dong4" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong4Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Sản Phẩm 5: </td>
            <td style="width:600px">
                <input type="text" name="dong5" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong5Err;?></span>
            </td>
        </tr>
        <tr>
            <td style="width: 100px"></td>
            <td>Hướng dẫn mua hàng: </td>
        </tr>
        <tr style="height: 50px;">
            <td>Bước 1: </td>
            <td style="width:600px">
                <input type="text" name="dong6" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong6Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Bước 2: </td>
            <td style="width:600px">
                <input type="text" name="dong7" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong7Err;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Bước 3: </td>
            <td style="width:600px">
                <input type="text" name="dong8" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dong8Err;?></span>
            </td>
        </tr>
     
        <tr style="height: 50px;">
            <td style="width:100px">
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
    <p/>Đã tồn tại footer cột 2<br/>Bạn không thêm mới footer
</div>
<?php } ?>
<br/><p/><a href="index.php?page=foo_ter2"class="btn btn-linkedin">Xem footer cột 2 đã thêm</a>
