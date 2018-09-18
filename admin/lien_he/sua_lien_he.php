<?php
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "SELECT dia_chi, mail, dien_thoai,ten_ht FROM lien_he WHERE id_lh = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    $kt=0;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if (!empty($_POST["dia_chi"])) {
            $dia_chi = test_input($_POST["dia_chi"]);
            $kt++;
        }
        if (!empty($_POST["email"])) {
            $email = test_input($_POST["email"]);
            // kiểm tra xem có đúng kiểu email hay không
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $kt++;
            } 
        }
        if (!empty($_POST["sdt"])) {
            $sdt = $_POST["sdt"];
            //kiểm tra nhập vào chỉ có chữ số từ 0->9 và khoảng 10, 11 chữ số
            if (preg_match("/[0-9]{10,11}/",$sdt)) {
                $kt++;
            }
        }
        if (!empty($_POST["ten_ht"])) {
            $ten_ht = test_input($_POST["ten_ht"]);
            // kiểm tra tên chỉ có chữ cái
            if (preg_match("/[^0-9]/",$ten_ht)) {
                $kt++;
            }
        }
        if($kt == 4){
            $query = "UPDATE lien_he SET dia_chi='$dia_chi',mail='$email',dien_thoai='$sdt' WHERE id_lh = $id";
            $count = $conn->exec($query);
            if($count>0)
            {
               header('location:index.php?page=lien_he');
            } else {
                echo "<span class='error'>Chưa thay đổi thông tin nào</span>";
            } 
        }
    }
?>
<div class="box">
  <div class="box-header">
    <h1>Sửa đổi</h1>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<form action="" method="post">
    <table>
         <tr style="height: 50px;">
            <td>Địa chỉ: </td>
            <td style="width:600px">
                <input type="text" name="dia_chi" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[0]; ?>">
            </td>
        </tr>
         <tr style="height: 50px;">
            <td>Mail: </td>
            <td style="width:600px">
                <input type="email" name="email" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[1]; ?>">
            </td>
        </tr>
         <tr style="height: 50px;">
            <td>Điện thoại: </td>
            <td>
                <input type="tel" name="sdt" style="width: 100px;"
                       value="<?php if(isset($sua)) echo $sua[2]; ?>">
            </td>
        </tr>
        <tr style="height: 50px;">
           <td>Tên hỗ trợ viên: </td>
           <td style="width:600px">
               <input type="text" name="ten_ht" class="form-control"
                      value="<?php if(isset($sua)) echo $sua[3]; ?>">
           </td>
       </tr>
         <tr style="height: 50px;">
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Cập nhật"/>
            </td>
        </tr>
    </table>
</form>
<br/><p/><a href="index.php?page=lien_he"class="btn btn-linkedin">Quay lại</a>
</div>
</div>