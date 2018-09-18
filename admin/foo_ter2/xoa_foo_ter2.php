<?php
if(isset($_REQUEST['id']))
{
    $id_ft2_delect = $_REQUEST['id']; 
    $sql = "DELETE FROM foo_ter2 WHERE id_ft2=$id_ft2_delect";
    $count = $conn->exec($sql);
    if($count>0){
        header('location:index.php?page=foo_ter2');
    }
}
?>
