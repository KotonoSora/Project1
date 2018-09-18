<?php
    $q = "SELECT COUNT(id_lh) FROM lien_he";
    $count = $conn->query($q);
    foreach ($count as $r){
        $bv = $r[0];
    }
    if($bv==0){
    $dia_chiErr = $emailErr = $sdtErr = $ten_htErr = "";
    $dia_chi = $email = $sdt = $ten_ht = "";
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
            $kt++;
        }
        if (empty($_POST["email"])) {
            $emailErr = "Cần mail";
        } else {
            $email = test_input($_POST["email"]);
            // kiểm tra xem có đúng kiểu email hay không
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nhập đúng email của bạn"; 
            } else {
                $kt++;
            }
        }
        if (empty($_POST["sdt"])) {
            $sdtErr = "Cần số điện thoại";
        } else {
            $sdt = $_POST["sdt"];
            //kiểm tra nhập vào chỉ có chữ số từ 0->9 và khoảng 10, 11 chữ số
            if (!preg_match("/[0-9]{10,11}/",$sdt)) {
                $sdtErr = "Nhập đúng số điện thoại"; 
            } else {
                $kt++;
            }
        }
        if (empty($_POST["ten_ht"])) { //khi khong có giá trị nhập vào của ten_kh
            $ten_htErr = "Tên không được bỏ trống";
        } else {
            $ten_ht = test_input($_POST["ten_ht"]);
            // kiểm tra tên chỉ có chữ cái
            if (!preg_match("/[^0-9]/",$ten_ht)) {
                $ten_khErr = "Nhập đúng tên bạn"; 
            } else {
                // nhập vào chỉ có chữ không có số 
                // tăng biến đếm kiểm tra
                $kt++;
            }
        }
    }
    
    if($kt == 4){
        $sql = "INSERT INTO lien_he(dia_chi, mail, dien_thoai, ten_ht) "
                . "VALUES ('$dia_chi','$email','$sdt','$ten_ht')";
        $count = $conn->exec($sql);
        if($count>0)
        {
            header('location:index.php?page=lien_he');
        }   
    }
?>
<div class="box">
  <div class="box-header">
      <span class="error">Không có thông tin liên hệ của cửa hàng</span>
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
            <td>Mail: </td>
            <td style="width:600px">
                <input type="email" name="email" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $emailErr;?></span>
            </td>
        </tr>
         <tr style="height: 50px;">
            <td>Điện thoại: </td>
            <td>
                <input type="tel" name="sdt" style="width: 100px;">
                <span class="error">* <?php echo $sdtErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
           <td>Tên hỗ trợ viên: </td>
           <td style="width:600px">
               <input type="text" name="ten_ht" class="form-control">
           </td>
           <td>
               <span class="error">* <?php echo $ten_htErr;?></span>
           </td>
       </tr>
         <tr style="height: 80px;">
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
    <p/>Đã đủ thông tin liên hệ<br/><span class="error">Bạn không thể thêm mới liên hệ</span>
</div>
<?php } ?>
<p/><a href="index.php?page=lien_he"class="btn btn-linkedin">Xem thông tin liên hệ đã thêm</a>