<?php
if(isset($_REQUEST['id']))
{
    $id_pl_delect = $_REQUEST['id']; 
    $sql1 = "DELETE FROM ct_dh WHERE id_dh=$id_pl_delect";
    $conn->exec($sql1);
    $sql2 = "DELETE FROM don_hang WHERE id_dh=$id_pl_delect";
    $count = $conn->exec($sql2);
    if($count>0){
        header('location:index.php?page=don_hang');
    }
}
?>
