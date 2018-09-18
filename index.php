<!doctype html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico"/>
<meta charset="utf-8">
<title>Công Ty TNHH Việt Nhân Trà </title>

<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/css/style1.css"/>
<link rel="stylesheet" type="text/css" href="css/css/style2.css"/>
<script src="ckeditor/ckeditor.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Dancing+Script|Indie+Flower|Lobster|Pacifico|Permanent+Marker|Shadows+Into+Light" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.3.js"></script> <!-- jquery của nút di chuyển -->
<script type="text/javascript" src="css/btn_top.js"></script> <!-- js của nút di chuyển -->
</head>

<body>
<?php
    ob_start();
    session_start(); //Khởi tạo session
    include 'connect.php';
?>
<div class="container">
    <?php include 'include/header.php';?>  <!-- xong header -->
    <?php include 'include/menu.php';?>  <!-- xong nav menu -->
    <?php include 'include/slider_anh.php';?>  <!-- xong nav slider ảnh -->
    <div class="row sp">
        <?php include 'include/left.php';?> <!-- xong bên trái  -->
        <?php
            if(isset($_REQUEST['page'])){
                $page = $_REQUEST['page']; 
                switch($page){
                    case 'gioithieu':
                        include 'gioithieu.php';
                        break;
                    case 'sanphamtra':
                        include 'sanphamtra.php';
                        break;
                    case 'nghethuattra':
                        include 'nghethuattra.php';
                        break;
                    case 'spquatang':
                        include 'spquatang.php';
                        break;
                    case 'khuyenmai':
                        include 'khuyenmai.php';
                        break;
                    case 'lienhe':
                        include 'lienhe.php';
                        break;
                    case 'select':
                        include 'select.php';
                        break;
                    case 'cart':
                        include 'cart.php';
                        break;
                    case 'del_cart':
                        include 'del_cart.php';
                        break;
                    case 'order':
                        include 'order.php';
                        break;
                }
            } else { 
                include 'include/right_index.php';
            } ?>
        <!-- xong bên phải  -->
    </div> <!-- xong row sp  -->
    <?php include 'include/footer.php';?> <!-- xong footer  -->
</div> <!-- hết phần containar -->     
</body>
</html>