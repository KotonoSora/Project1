<?php
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];           
        $query = "SELECT dong1, dong2, dong3, dong4, dong5, dong6, dong7, dong8 FROM foo_ter2 WHERE id_ft2 = $id";        
        $rows = $conn->query($query);          
        $sua = $rows->fetch();
        $dong1 = $sua[0];
        $dong2 = $sua[1];
        $dong3 = $sua[2];
        $dong4 = $sua[3];
        $dong5 = $sua[4];
        $dong6 = $sua[5];
        $dong7 = $sua[6];
        $dong8 = $sua[7];
    }
    $kt=0;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($dong1 != $_POST["dong1"]){
            $dong1 = $_POST["dong1"];
            $kt++;
        }
        if($dong2 != $_POST["dong2"]){
            $dong2 = $_POST["dong2"];
            $kt++;
        }
        if($dong3 != $_POST["dong3"]){
            $dong3 = $_POST["dong3"];
            $kt++;
        }
        if($dong4 != $_POST["dong4"]){
            $dong4 = $_POST["dong4"];
            $kt++;
        }
        if($dong5 != $_POST["dong5"]){
            $dong5 = $_POST["dong5"];
            $kt++;
        }
        if($dong6 != $_POST["dong6"]){
            $dong6 = $_POST["dong6"];
            $kt++;
        }
        if($dong7 != $_POST["dong7"]){
            $dong7 = $_POST["dong7"];
            $kt++;
        }
        if($dong8 != $_POST["dong8"]){
            $dong8 = $_POST["dong8"];
            $kt++;
        }
        if($kt>0){
        $query = "UPDATE foo_ter2 SET dong1='$dong1',dong2='$dong2',dong3='$dong3',dong4='$dong4',dong5='$dong5',dong6='$dong6',dong7='$dong7',dong8='$dong8' "
                . "WHERE id_ft2 = $id";
        $count = $conn->exec($query);
        if($count>0)
        {
           header('location:index.php?page=foo_ter2');
        }
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
  <div class="box-body"><form action="" method="post">
    <table>
        <tr style="height:50px;">
            <td style="width:100px">Dòng 1: </td>
            <td style="width:600px">
                <input type="text" name="dong1" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[0]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Dòng 2: </td>
            <td style="width:600px">
                <input type="text" name="dong2" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[1]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Dòng 3: </td>
            <td style="width:600px">
                <input type="text" name="dong3" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[2]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Dòng 4: </td>
            <td style="width:600px">
                <input type="text" name="dong4" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[3]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Dòng 5: </td>
            <td style="width:600px">
                <input type="text" name="dong5" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[4]; ?>">
            </td>
        </tr>
        <tr style="height:50px;">
            <td>Dòng 6: </td>
            <td style="width:600px">
                <input type="text" name="dong6" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[5]; ?>">
            </td>
        </tr>
         <tr style="height:50px;">
            <td>Dòng 7: </td>
            <td style="width:600px">
                <input type="text" name="dong7" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[6]; ?>">
            </td>
        </tr>
         <tr style="height:50px;">
            <td>Dòng 8: </td>
            <td style="width:600px">
                <input type="text" name="dong8" class="form-control"
                       value="<?php if(isset($sua)) echo $sua[7]; ?>">
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
<br/><p/><a href="index.php?page=foo_ter2"class="btn btn-linkedin">Quay lại</a>
  </div>
</div>