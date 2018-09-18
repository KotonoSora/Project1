<?php
if(isset($_REQUEST['id']))
{ 
    //lấy id
    $id_pl_delect = $_REQUEST['id'];
    // xóa ảnh trong thư mục
    $query = "select hinh_anh from bai_viet where id_bv = $id_pl_delect";        
    $rows = $conn->query($query);          
    $sua = $rows->fetch();
    unlink("../image/$sua[0]");
    //bắt đầu xóa
    $sql = "DELETE FROM bai_viet WHERE id_bv=$id_pl_delect";
    $count=$conn->exec($sql);
    if($count>0){
        header('location:index.php?page=bai_viet');
    } 
}
?>