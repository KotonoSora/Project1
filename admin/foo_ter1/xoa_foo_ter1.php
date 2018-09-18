<?php
if(isset($_REQUEST['id']))
{
    $id_pl_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM foo_ter1 WHERE id_ft1=$id_pl_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=foo_ter1');
    }
}
?>
