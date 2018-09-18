<?php
if(isset($_REQUEST['id']))
{
    $id_pl_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM phan_loai WHERE id_pl=$id_pl_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php');
    } else {
        header('location:err404.php');
    }
} else {
    header('location:index.php?page=sua_phan_loai');
}
?>