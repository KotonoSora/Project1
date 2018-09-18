<?php
if(isset($_REQUEST['id']))
{
    $id_pl_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM lien_he WHERE id_lh=$id_pl_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=lien_he');
    }
}
?>
