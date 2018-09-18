<?php
    $q = "SELECT COUNT(id_ft1) FROM foo_ter1";
    $count = $conn->query($q);
    foreach ($count as $r){
        $ft = $r[0];
    }
    if($ft==0){
    $dia_chiErr = $emailErr = $sdtErr = $hot_lineErr = $websiteErr = $showroomErr = "";
    $dia_chi = $email = $sdt = $hot_line = $website = $showroom = "";
    $kt=0;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["dia_chi"])) {
            $dia_chiErr = "Cần địa chỉ";
        } else {
            $dia_chi = test_input($_POST["dia_chi"]);
            $kt+= 1;  
        }
        if (empty($_POST["email"])) {
            $emailErr = "Cần mail";
        } else {
            $email = test_input($_POST["email"]);
            // kiểm tra xem có đúng kiểu email hay không
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nhập đúng email của bạn"; 
            } else {
                $kt+= 1;
            }
        }
        //
        if (empty($_POST["sdt"])) {
            $sdtErr = "Cần số điện thoại";
        } else {
            $sdt = $_POST["sdt"];
            //kiểm tra nhập vào chỉ có chữ số từ 0->9 và khoảng 10, 11 chữ số
            if (!preg_match("/[0-9]{10,11}/",$sdt)) {
                $sdtErr = "Nhập đúng số điện thoại"; 
            } else {
                $kt+= 1;
            }
        }
        //
        if (empty($_POST["hot_line"])) {
            $hot_lineErr = "Cần số điện thoại";
        } else {
            $hot_line = $_POST["hot_line"];
            //kiểm tra nhập vào chỉ có chữ số từ 0->9 và khoảng 10, 11 chữ số
            if (!preg_match("/[0-9]{10,11}/",$hot_line)) {
                $hot_lineErr = "Nhập đúng số điện thoại"; 
            } else {
                $kt+= 1;
            }
        }
        //
         if (empty($_POST["website"])) {
            $webiteErr = "Cần địa chỉ";
        } else {
            $website = test_input($_POST["website"]);
            $kt+= 1;  
        }
        //
        if (empty($_POST["showroom"])) {
            $showroomErr = "Cần địa chỉ";
        } else {
            $showroom = test_input($_POST["showroom"]);
            $kt+= 1;  
        }
    }
    
    if($kt == 6){
        $sql = "INSERT INTO foo_ter1(dia_chi, mail, dien_thoai, hot_line, website, showroom) "
                . "VALUES ('$dia_chi','$email','$sdt','$hot_line','$website','$showroom')";
        $count = $conn->exec($sql);
        if($count>0)
        {
            header('location:index.php?page=foo_ter1');
        }   
    }
?>
<div class="box">
  <div class="box-header">
      <span class="error">Không có thông nội dung footer cột 1</span>
    <h1>Thêm mới</h1>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="">  
    <table class="them">
        <tr style="height: 50px;">
            <td>Địa chỉ: </td>
            <td style="width:600px">
                <input type="text" name="dia_chi" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $dia_chiErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Phòng trưng bày: </td>
            <td style="width:600px">
                <input type="text" name="showroom"class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $showroomErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Mail: </td>
            <td style="width:600px">
                <input type="email" name="email" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $emailErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Website: </td>
            <td style="width:600px">
                <input type="text" name="website" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $websiteErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Điện thoại: </td>
            <td>
                <input type="tel" name="sdt" style="width:100px">
                <span class="error">* <?php echo $sdtErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Hotline: </td>
            <td>
                <input type="tel" name="hot_line" style="width:100px">
                <span class="error">* <?php echo $hot_lineErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
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
    <p/>Đã tồn tại footer cột 1<br/>Bạn không thêm mới footer
</div>
<?php } ?>
<br/><p/><a href="index.php?page=foo_ter1"class="btn btn-linkedin">Xem footer cột 1 đã thêm</a>