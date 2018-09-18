
<div class="col-md-9 sp_phai">
    <div class="row san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="#">Liên Hệ</a>
        </div>
        <?php 
            // cậu lệnh hiển thị từ file liên hệ để xuất ra thông tin mình cần
            $query = "SELECT dia_chi, mail, dien_thoai, ten_ht, count(id_lh) FROM lien_he order by id_lh desc";
            $rows = $conn->query($query);
            foreach($rows as $cot) {
                $dia_chi = $cot[0];
                $mail = $cot[1];
                $dien_thoai = $cot[2];
                $ten_ht = $cot[3];
                $count_lh = $cot[4];
            }
        ?>
        <div class="tt_lh">
            <?php 
                if($count_lh>0){
            ?>
            <p/><h3>1.Thông tin liên hệ </h3>
            <table>
                <tr>
                    <td style="width: 120px;">Địa chỉ:</td>
                    <td><span id="chu_tt_lh"><?php echo "$dia_chi";?></span></td>
                </tr>
                <tr>
                    <td>Điện thoại:</td>
                    <td><span id="chu_tt_lh"><?php echo "$dien_thoai";?></span></td>
                </tr>
                <tr>
                    <td>Mail:</td>
                    <td><span id="chu_tt_lh"><a href="mailto:<?php echo "$mail";?>"><?php echo "$mail";?></a></span></td>
                </tr>
            </table>
            <p/>
            <p/><h3>2.Hổ trợ trực tuyến</h3>
            <p/><span id="chu_tt_lh"><img src="image/icon1.png"/> <?php echo "$ten_ht: $dien_thoai";?></span>
            <?php
                }  else {
                    echo "Đang cập nhật";
                }
            ?>
            <p/><h3>3.Thông tin phản hồi</h3>
            <p/><span id="chu_tt_lh">Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi .Chúng tôi sẻ trả lời bạn ngay sau khi nhận được.</span>
            <p/><span id="chu_tt_lh">Xin chân thành cảm ơn! </span>
        </div>

        <div class="tt_lh1">
            <!-- mã gửi dữ liệu về csdl -->
            <?php
                // đoạn mã php nhận và gửi phản hồi về csdl
                $ten_khErr = $sdtErr = $dia_chiErr = $emailErr = $tieu_deErr = $noi_dungErr  = "";
                $ten_kh = $sdt = $dia_chi = $email = $tieu_de = $noi_dung = "";
                $kt = 0; // biến kiểm tra lỗi
                // hàm test kiểm tra đầu dữ liệu nhập vào và chống bị hack
                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                // bắt đầu lấy dữ liệu và kiểm tra
                if ($_SERVER["REQUEST_METHOD"] == "POST") { // khi ấn nút submit
                    if (empty($_POST["ten_kh"])) { //khi khong có giá trị nhập vào của ten_kh
                        $ten_khErr = "Tên không được bỏ trống";
                    } else {
                        $ten_kh = test_input($_POST["ten_kh"]);
                        // kiểm tra tên chỉ có chữ cái
                        if (!preg_match("/^(\w)[^(\d)]*$/",$ten_kh)) {
                            $ten_khErr = "Nhập đúng tên bạn"; 
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
                        if (!preg_match("/[0-9]{10,11}/",$sdt)) {
                            $sdtErr = "Nhập đúng số điện thoại"; 
                        } else {
                            $kt+= 1;
                        }
                    }
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
                    if (empty($_POST["tieu_de"])) {
                      $tieu_deErr = "Cần tiêu đề";
                    } else {
                      $tieu_de = test_input($_POST["tieu_de"]);
                      $kt+= 1;
                    }
                    if (empty($_POST["noi_dung"])) {
                      $noi_dungErr = "Cần nội dung";
                    } else {
                      $noi_dung = test_input($_POST["noi_dung"]);
                      $kt+= 1;
                    }
                }
                
                // điều kiện để gửi dữ liệu về csdl
                if($kt == 6){ // $kt == 6 tức là đã kiểm tra và không có lỗi nào 
                    // câu lệnh nhập dữ liệu vào bảng phản hồi
                    $sql = "INSERT INTO phanhoi(ten_kh, sdt, dia_chi, email, tieu_de, noi_dung, trang_thai)"
                        . " VALUES ('$ten_kh', '$sdt', '$dia_chi', '$email', '$tieu_de', '$noi_dung', 2)";
                    $count = $conn->exec($sql);
                    if($count>0){
                        $ten_kh = $sdt = $dia_chi = $email = $tieu_de = $noi_dung = "";
                        echo "<span style='color:red'>Gửi thành công</span>";
                    }
                }
            ?>
            <!-- form nhận dữ liệu của khách -->
            <form method="post" action="">  
                <table>
                    <tr style="height: 50px;">
                        <td style="width: 150px;">Họ tên: </td>
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
                        <td>Tiêu đề: </td>
                        <td>
                            <input type="text" name="tieu_de" value="<?php if(isset($tieu_de)) echo "$tieu_de";?>" class="form-control" required placeholder="Nhập tiêu đề ý kiến của bạn">
                            <span class="error">* <?php echo $tieu_deErr;?></span>
                        </td>
                    </tr>
                    <tr style="height: 50px;">
                        <td>Nội dung: </td>
                        <td>
                            <textarea name="noi_dung" class="ckeditor"  placeholder="Nhập nội dung ý kiến của bạn">
                                <?php if(isset($noi_dung)) echo "$noi_dung";?>
                            </textarea>
                        </td>
                        <td>
                            <span class="error">* <?php echo $noi_dungErr;?></span>
                        </td>
                    </tr>
                    <tr style="height: 50px;">
                        <td><input type="reset" value="Nhập lại" class='btn btn-warning'></td>
                        <td><input type="submit" value="Gửi" class='btn btn-success'></td>
                    </tr>
                </table>
            </form>
        </div>
    </div> <!-- xong hiển thị thông tin -->
   <div class="ban_do">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="#">Bản Đồ</a>
        </div>
        <div class="code_bd">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6265.122338182527!2d105.84351326429689!3d20.982050813261274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac4268899b93%3A0xa67c7d66ff9242c5!2zMzQgS2ltIMSQ4buTbmcsIEdpw6FwIELDoXQsIEhvw6BuZyBNYWksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1486950885146" width="865" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>  <!--  xong bản đồ -->
</div> <!-- xong bên phải  -->