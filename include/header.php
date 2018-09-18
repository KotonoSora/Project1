<header class="banner">
    <?php
    // truy vấn 
    $query = "SELECT id_tc, logo, banner, banner1    FROM trang_chu WHERE 1";
    
     $rows = $conn->query($query);
     foreach($rows as $cot_tc) 
            { 
            $id_tc = $cot_tc[0];
            $logo = $cot_tc[1];
            $banner = $cot_tc[2];
            $banner1 = $cot_tc[3];           
            }       
         
    ?>
    <div class="row banner1">
        <div class="col-md-2 banner_menu">
            <a href="index.php"><img class="img_bannertop" src="image/<?php echo "$logo";?>"/></a>
        </div>
        <div class="col-md-8 banner_menu">
            <h2><!--Tụ tri kỉ--><?php echo "$banner";?></h2>
            <p/><!--tận hưởng hương sắc vị--><?php echo "$banner1";?>
        </div>
        
        <div class="col-md-2 banner_menu">
            <!--
            <div class="baner_chu">
                <img src="image/icon_vn.png" style="width:18%;"/><a href="#">Tiếng việt</a>                    
                <img src="image/icon_vn_anh.png" style="width:17%;"/><a href="#">English </a>
            </div>
        </div>-->
    </div>
</header>
