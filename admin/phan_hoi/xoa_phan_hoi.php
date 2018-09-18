<?php
if(isset($_REQUEST['id']))
{
    $id_pl_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM phanhoi WHERE idph=$id_pl_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=phan_hoi');
    }
} 
?>
