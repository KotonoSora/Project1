<?php
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "select banner,banner1, logo from trang_chu where id_tc = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $banner = $_POST['banner'];
        $banner1 = $_POST['banner1'];
        $logo = $_FILES["logo"]["name"];
        if(empty($logo)){
            $logo=$sua[2];
        }
        $query = "update trang_chu set banner='$banner', banner1='$banner1',logo='$logo' "              
                . "where id_tc = $id";
        $count = $conn->exec($query);
        if(!empty($logo)){
            move_uploaded_file($_FILES['logo']['tmp_name'], "../image/$logo");
        }
        if($count>0)
        {
           header('location:index.php?page=trang_chu');
        } else {
            echo "<span class='error'>Chưa thay đổi thông tin nào</span>";
        }
    }
?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Sửa đổi Banner</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr style="height: 50px;">
            <td>Logo: </td>
            <td>
                <input type="file" name="logo">
                <img src="../image/<?php echo "$sua[2]";?>" style="width: 80px;">
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>Banner dòng 1: </td>
            <td style="width:600px">
                <input type="text" name="banner" class="form-control" value="<?php if(isset($sua)) echo $sua[0]; ?>"/>
            </td>
        </tr>  
        <tr style="height: 50px;">
            <td>Banner dòng 2: </td>
            <td style="width:600px">
                <input type="text" name="banner1" class="form-control" value="<?php if(isset($sua)) echo $sua[1]; ?>"/>
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
  </div></div>
<p/><a href="index.php?page=trang_chu"class="btn btn-linkedin">Quay lại</a>