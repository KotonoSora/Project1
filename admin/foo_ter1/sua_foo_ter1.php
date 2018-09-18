<?php
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "SELECT dia_chi, mail, dien_thoai, hot_line, website, showroom FROM foo_ter1 WHERE id_ft1 = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $dia_chi = $_POST["dia_chi"];
        $mail = $_POST["mail"];
        $dien_thoai = $_POST["dien_thoai"];
        $hot_line = $_POST["hot_line"];
        $website = $_POST["website"];
        $showroom = $_POST["showroom"];
        $query = "UPDATE foo_ter1 SET dia_chi='$dia_chi',mail='$mail',dien_thoai='$dien_thoai',hot_line='$hot_line',website='$website',showroom='$showroom' "
                . "WHERE id_ft1 = $id";
        $count = $conn->exec($query);
        if($count>0)
        {
           header('location:index.php?page=foo_ter1');
        }else {
            echo "<span class='error'>Chưa thay đổi thông tin nào</span>";
        }
    }
?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Sửa đổi </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<form action="" method="post">
    <table>
        <tr style="height:50px;">
            <td>Địa chỉ: </td>
            <td style="width:600px">
                <input type="text" name="dia_chi" class="form-control" 
                       value="<?php if(isset($sua)) echo $sua[0]; ?>">
            </td>
        </tr>
        
        <tr style="height:50px;">
            <td>Mail: </td>
            <td style="width:600px">
                <input type="email" name="mail" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[1]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Điện thoại: </td>
            <td>
                <input type="tel" name="dien_thoai" style="width:100px"
                       value="<?php if(isset($sua)) echo $sua[2]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Hotline: </td>
            <td>
                <input type="tel" name="hot_line"  style="width:100px"
                       value="<?php if(isset($sua)) echo $sua[3]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Website: </td>
            <td style="width:600px">
                <input type="text" name="website" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[4]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Showroom: </td>
            <td style="width:600px">
                <input type="text" name="showroom" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[5]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Cập nhật"/>
            </td>
        </tr>
    </table>
</form>     
<br/><p/><a href="index.php?page=foo_ter1"class="btn btn-linkedin">Quay lại</a>
  </div>
</div>