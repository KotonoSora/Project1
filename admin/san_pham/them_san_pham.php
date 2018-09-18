<?php
    $ten_spErr=$id_plErr=$trang_thaiErr=$mo_taErr=$hinh_anhErr=$chi_tietErr= "";
    $ten_sp=$id_pl=$khoi_luong=$gia=$trang_thai=$mo_ta=$hinh_anh=$chi_tiet = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ten_sp"])) {
          $ten_spErr = "Tên sản phẩm là bắt buộc";
        } else {
          $ten_sp = test_input($_POST["ten_sp"]);
        }
        if (empty($_POST["id_pl"])) {
          $id_plErr = "Loại hàng là bắt buộc";
        } else {
          $id_pl = test_input($_POST["id_pl"]);
        }
        if (empty($_POST["khoi_luong"])) {
          $khoi_luong = "0";
        } else {
          $khoi_luong = test_input($_POST["khoi_luong"]);
        }
        if (empty($_POST["gia"])) {
          $gia = "0";
        } else {
          $gia = test_input($_POST["gia"]);
        }
        if (empty($_POST["trang_thai"])) {
          $trang_thaiErr = "Cần trạng thái";
        } else {
          $trang_thai = test_input($_POST["trang_thai"]);
        }
        if (empty($_POST["mo_ta"])) {
          $mo_taErr = "Mô tả là bắt buộc";
        } else {
          $mo_ta = test_input($_POST["mo_ta"]);
        }
        $hinh_anh = $_FILES["hinh_anh"]["name"];  
        if (empty($_POST["chi_tiet"])) {
          $chi_tietErr = "Chi tiết là bắt buộc";
        } else {
          $chi_tiet = $_POST["chi_tiet"];
        }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $sql = "INSERT INTO san_pham(ten_sp, id_pl,khoi_luong,gia,trang_thai,mo_ta,hinh_anh,chi_tiet) "
            . "VALUES ('$ten_sp',$id_pl,$khoi_luong,$gia,$trang_thai,'$mo_ta','$hinh_anh','$chi_tiet')";
    $count = $conn->exec($sql);
    if(!empty($hinh_anh)){
        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../image/$hinh_anh");
    }
    if($count>0){
        header('location:index.php?page=san_pham');
    }
?>
<div class="box">
<div class="box-header">
<h1>Thêm mới sản phẩm</h1>
</div>
<!-- /.box-header -->
<div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="" enctype="multipart/form-data">
    <table class="them">
        <tr style="height: 50px;">
            <td>Tên sản phẩm: </td>
            <td style="width: 600px;">
                <input type="text" name="ten_sp" class="form-control">
                    </td>
        <td>
                <span class="error">* <?php echo $ten_spErr;?></span>
            </td>
        </tr>
        <tr>
            <td>Loại hàng: </td>
            <td>
                <select name="id_pl">
                    <?php
                        include 'connect.php';
                        try {
                            $query = "SELECT id_pl, ten_pl FROM phan_loai WHERE 1";
                            $rows = $conn->query($query);
                            foreach($rows as $r) { 
                                echo "<option value='$r[0]'>"
                                        . "$r[1]"
                                        . "</option>";
                            }
                        }
                        catch(PDOException $e) {
                            echo $sql . "<br>" . $e->getMessage();
                        }
                        $conn = null;
                    ?>
                </select>
                <span class="error">* <?php echo $id_plErr;?></span>
            </td>
        </tr>
        
        
        <tr style="height: 50px;">
            <td>Mô tả sản phẩm: </td>
            <td>
                <input type="text" name="mo_ta" class="form-control">
                    </td>
        <td>
                <span class="error">* <?php echo $mo_taErr;?></span>
            </td>
        </tr>
        <tr>
            <td>Chi tiết sản phẩm: </td>
            <td>
                <textarea name="chi_tiet" class="ckeditor"></textarea>
                </td>
        <td>
                <span class="error">* <?php echo $chi_tietErr;?></span>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Khối lượng sản phẩm: </td>
            <td>
                <!--<input type="text" name="khoi_luong" style="width: 100px;">-->
                <select name="khoi_luong">
                    <option value="200">200 gram </option>
                    <option value="500">500 gram </option>
                    <option value="1000">1 kg</option>
                </select>
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Giá sản phẩm: </td>
            <td>
                <input type="text" name="gia" style="width: 150px;">
                <span>đồng</span>
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
        <tr style="height: 50px;">
            <td>Ảnh đại diện sản phẩm: </td>
            <td>
                <input type="file" name="hinh_anh">
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Thêm mới"/>
            </td>
        </tr>
    </table>
</form>
</div>
</div>
<br/><p/><a href="index.php?page=san_pham"class="btn btn-linkedin">Xem sản phẩm đã thêm</a>