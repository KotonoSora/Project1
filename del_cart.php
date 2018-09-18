<?php
    //lấy id_sp,hiển thị thông tin sản phẩm
    if(isset($_REQUEST['id_sp']))
    {
        // lấy thông tin sản phẩm
        $id_sp = $_REQUEST['id_sp'];
        
       
        if(isset($_SESSION['cart'][$id_sp])){
            unset($_SESSION['cart'][$id_sp]);
            header('location:index.php?page=cart');
        } else {
            header('location:index.php?page=cart');
        }
        
    } else {
        header('location:index.php');
    }
?>