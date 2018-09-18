<?php
    $ten_plErr = $trang_thaiErr = "";
    $ten_pl = $trang_thai = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["ten_pl"])) {
        $ten_plErr = "Cần tên phân loại";
      } else {
        $ten_pl = test_input($_POST["ten_pl"]);
      }
      if (empty($_POST["trang_thai"])) {
        $trang_thaiErr = "Cần trạng thái";
      } else {
        $trang_thai = test_input($_POST["trang_thai"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $sql = "INSERT INTO phan_loai (ten_pl, trang_thai) VALUES ('$ten_pl', $trang_thai)";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=phan_loai');
    }
?>
<div class="box">
<div class="box-header">
<h1>Thêm mới sản phẩm</h1>
</div>
<!-- /.box-header -->
<div class="box-body">
<p><span class="error">*Bắt buộc.</span></p>
<form method="post" action="">  
    <table class="them">
        <tr style="height: 50px;">
            <td>Tên phân loại: </td>
            <td style="width: 600px;">
                <input type="text" name="ten_pl" class="form-control">
            </td>
            <td>
                <span class="error">* <?php echo $ten_plErr;?></span>
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
<br/><p/><a href="index.php?page=phan_loai"class="btn btn-linkedin">Xem phân loại đã thêm</a>