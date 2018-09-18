<?php
if(isset($_REQUEST['id']))
{
    include 'connect.php';
    $id_pl_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM san_pham WHERE id_sp=$id_pl_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=san_pham');
    }
}
?>
