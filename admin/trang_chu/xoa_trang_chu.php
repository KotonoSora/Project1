<?php
if(isset($_REQUEST['id']))
{
    //lấy id
    $id_pl_delect = $_REQUEST['id'];
    // xóa ảnh trong thư mục
    $query = "select logo from trang_chu where id_tc = $id_pl_delect";        
    $rows = $conn->query($query);          
    $sua = $rows->fetch();
    unlink("../image/$sua[0]");
    //bắt đầu xóa
    $sql = "DELETE FROM trang_chu WHERE id_tc=$id_pl_delect";
    $count=$conn->exec($sql);
    if($count>0){
        header('location:index.php?page=trang_chu');
    } 
}
?>