<div class="col-md-9 sp_phai">
    <div class="row san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><span id="sp_top_left"><a href="index.php?page=cart">Thanh toán </a></span>
        </div>

            <?php
           $tong_gia = 0;
          foreach ($_SESSION['cart'] as $cart) {
               $tong_gia += $cart['gia']*$cart['so_luong'];
          }
          ?>
        <p style="font-size:20px;">Tổng tiền: <?php echo number_format($tong_gia);?> đồng</p>

<?php
//gửi thông tin khách hàng vào bảng don_hang
    $ten_khErr=$emailErr=$sdtErr=$dia_chiErr=$ngay_dhErr= "";
    $ten_kh=$sdt=$email=$dia_chi = "";
    
    $kt = 0;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ten_kh"])) { //khi khong có giá trị nhập vào của ten_kh
            $ten_khErr = "Tên không được bỏ trống";
        } else {
            $ten_kh = test_input($_POST["ten_kh"]);
            // kiểm tra tên chỉ có chữ cái
            if (!preg_match("/^(\w)[^(\d)]*$/",$ten_kh)) {
                $ten_khErr = "Nhập đúng tên bạn"; 
                $ten_kh = "";
            } else {
                // nhập vào chỉ có chữ không có số 
                // tăng biến đếm kiểm tra
                $kt+= 1;
            }
        }     
        if (empty($_POST["sdt"])) {
            $sdtErr = "Cần số điện thoại";
        } else {
            $sdt = $_POST["sdt"];
            //kiểm tra nhập vào chỉ có chữ số từ 0->9 và khoảng 10, 11 chữ số
            if (!preg_match("/[0-9]{10}$/",$sdt)) {
                $sdtErr = "Nhập đúng số điện thoại"; 
                $sdt="";
            } else {
                $kt+= 1;
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Cần mail";
        } else {
            $email = test_input($_POST["email"]);
            // kiểm tra xem có đúng kiểu email hay không
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nhập đúng email của bạn"; 
                $email = "";
            } else {
                $kt+= 1;
            }
        }
        if (empty($_POST["dia_chi"])) {
          $dia_chiErr = "Địa chỉ là bắt buộc.";
        } else {
            $dia_chi = test_input($_POST["dia_chi"]);
            // kiểm tra tên chỉ có chữ cái
            $kt+= 1;
        }
    }
    
    if($kt==4){
        $sql = "INSERT INTO don_hang(ten_kh, sdt, email, trang_thai, ngay_dh, tong_gia, dia_chi)"
            . "VALUES ('$ten_kh','$sdt','$email',2,now(),$tong_gia,'$dia_chi')";
        $conn->exec($sql);
        
        // lấy id_dh của đơn hàng vừa thêm vào
        $id_dh = $conn->lastInsertId();
        
        $query = "INSERT INTO ct_dh(id_dh, id_sp, so_luong) VALUES";
        
        foreach ($_SESSION['cart'] as $cart) {
            $id_sp = $cart['id_sp'];
            $so_luong = $cart['so_luong'];
            
            $query .= "($id_dh,$id_sp,$so_luong),";
        }
        
        // xóa dấu phẩy ở cuối của chuỗi sql
        $query = substr($query, 0, strlen($query)-1);
        //thực thi câu lệnh
        $count = $conn->exec($query);
        
        if($count>0){
            unset($_SESSION['cart']);
            header('location:index.php');
        }
    }
?>
        <h2>Thông tin khách hàng</h2>
        <p><span class="error">*Bắt buộc.</span></p>
        <form method="post" action="">
            <table class="them">
                <tr style="height: 50px;">
                    <td style="width: 100px;">Họ tên: </td>
                    <td style="width: 500px;">
                        <input type="text" name="ten_kh" value="<?php if(isset($ten_kh)) echo "$ten_kh";?>" class="form-control" required placeholder="Nhập tên của bạn.">
                    </td>
                    <td>
                        <span class="error">* <?php echo $ten_khErr;?></span>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td>Số điện thoại: </td>
                    <td>
                        <input type="text" name="sdt" value="<?php if(isset($sdt)) echo "$sdt";?>" style="width: 110px;" class="form-control" required placeholder="SĐT của bạn">
                        <span class="error">* <?php echo $sdtErr;?></span>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td>Email: </td>
                    <td>
                        <input type="email" name="email" value="<?php if(isset($email)) echo "$email";?>" class="form-control" required placeholder="Nhập email của bạn để nhận thư trả lời của chúng tôi.">
                    </td>
                    <td>
                        <span class="error">* <?php echo $emailErr;?></span>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td>Địa chỉ: </td>
                    <td>
                        <input type="text" name="dia_chi" value="<?php if(isset($dia_chi)) echo "$dia_chi";?>" class="form-control" required placeholder="Nhập địa chỉ của bạn.">
                    </td>
                    <td>
                        <span class="error">* <?php echo $dia_chiErr;?></span>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td><input type="reset" value="Nhập lại" class='btn btn-warning'></td>
                    <td><input type="submit" value="Thanh toán" class='btn btn-success'></td>
                </tr>
            </table>
        </form>
        <br/><a href="index.php?page=cart" class='btn btn-info'>Xem lại giỏ hàng</a>
    </div>
</div>