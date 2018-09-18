    <?php
    
    //sửa thông tin phân loại theo id
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "select ten_pl, trang_thai from phan_loai where id_pl = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $ten_pl = $_POST['ten_pl'];
        $trang_thai = $_POST['trang_thai'];
        $query = "update phan_loai set ten_pl ='$ten_pl', trang_thai=$trang_thai where id_pl = $id";
        $count = $conn->exec($query);
        if($count>0)
        {
           header('location:index.php?page=phan_loai');
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
        <tr style="width:50px;">
            <td>Tên danh mục: </td>
            <td style="width: 600px;">
                <input type="text" name="ten_pl" class="form-control" value="<?php if(isset($sua)) echo $sua[0]; ?>"/>
            </td>
        </tr>
        <tr style="width:50px;">
            <td>Trạng thái: </td>
            <td>
                <input type="radio" name="trang_thai" value="1"
                       <?php if(isset($sua) && $sua[1]==1) echo 'checked'; ?>/>Hiển thị
                <input type="radio" name="trang_thai" value="2"
                       <?php if(isset($sua) && $sua[1]==2) echo 'checked'; ?>/>Ẩn
            </td>
        </tr>
        <tr>
            <td>
                <input type="reset" class="btn btn-github" name="btnSubmit" value="Nhập lại"/>
            </td>
            <td>
                <input type="submit" class="btn btn-instagram" name="btnSubmit" value="Cập nhật"/>
            </td>
        </tr>
    </table>
</form>
      
<br/><p/><a href="index.php?page=phan_loai"class="btn btn-linkedin">Quay lại</a>
  </div>
</div>