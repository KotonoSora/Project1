<!--<div class="row footer1">  xong footer chính sách 
    <div class="col-md-4 col-sm-12">
        <img src="image/icon-tien.png" style="width:9%;"/><span id="ft_chu"><a href="#">Hướng dẫn thanh toán</a></span>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="image/icon-tien1.png" style="width:9%;"/><span id="ft_chu"><a href="#">Chính sách vận chuyển</a></span>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="image/icon-tien3.png" style="width:9%;"/><span id="ft_chu"><a href="#">Chính sách bảo mật</a></span>
    </div>
</div>   xong footer 1  -->
<div class="row footer2">
         <?php 
        $query = "SELECT id_ft1, dia_chi, mail, dien_thoai, hot_line, website, showroom FROM foo_ter1 WHERE 1";
             
        $rows = $conn->query($query);
        foreach($rows as $cot_ft1) { 
            $id_ft1 = $cot_ft1[0];
            $dia_chi = $cot_ft1[1];
            $mail = $cot_ft1[2];
            $dien_thoai = $cot_ft1[3];
            $hot_line = $cot_ft1[4];
            $website = $cot_ft1[5];
            $showroom = $cot_ft1[6];
        }
        ?>
    <div class="col-md-4 col-sm-12">       
        <h4>Trụ Sở Chính: </h4>
        <p/>Địa chỉ :<?php echo "$dia_chi";?>      
        <p/>Điện thoại : <?php echo "$dien_thoai";?>   
        <p/>Hotline : <?php echo "$hot_line";?>  
        <p/>Mail: <a href= "mailto:<?php echo "$mail";?>"><?php echo "$mail";?></a>
        <p/>Phòng trưng bày : <?php echo "$showroom";?> 
        <p/>Website : <a href="index.php"><?php echo "$website";?>  </a>	
    </div> 
    <?php 
        $query =   "SELECT id_ft2, dong1, dong2, dong3, dong4, dong5, dong6, dong7, dong8 FROM foo_ter2 WHERE 1";
        $rows = $conn->query($query);
        foreach($rows as $cot_ft2) 
           { 
           $id_ft2 = $cot_ft2[0];
           $dong1 = $cot_ft2[1];
           $dong2 = $cot_ft2[2];
           $dong3 = $cot_ft2[3];
           $dong4 = $cot_ft2[4];
           $dong5 = $cot_ft2[5];
           $dong6 = $cot_ft2[6];
           $dong7 = $cot_ft2[7];
           $dong8 = $cot_ft2[8];
           }       
       ?>  
    <div class="col-md-4 col-sm-12">
        <h4>Liên Kết Nhanh: </h4>
        <p style="font-size: 20px;">Các sản phẩm nổi bật :</p>
        <p/>  <span id="ft2_right">- <?php echo "$dong1";?></span> 
        <p/>  <span id="ft2_right">- <?php echo "$dong2";?></span> 
        <p/>  <span id="ft2_right">- <?php echo "$dong3";?></span> 
        <p/>  <span id="ft2_right">- <?php echo "$dong4";?></span> 
        <p/>  <span id="ft2_right">- <?php echo "$dong5";?></span> 
        <p style="font-size: 20px;">Hướng dẫn mua hàng</p>
        <p/>B1: <?php echo "$dong6";?>
        <p/>B2: <?php echo "$dong7";?>
        <p/>B3: <?php echo "$dong8";?>
    </div>
    <div class="col-md-4 col-sm-12">
        <h4>Facebook: </h4>
        <p/><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftraviet%2F&tabs=timeline&width=250&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
</div>  <!-- xong footer 2  -->
<div class="row footer3">
    <div class="col-md-7 col-sm-12">
        <span id="ft_trai">Copyright &copy;<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date(' Y');?> <!--Lấy năm hiện tại-->
            <font style="font-size: 16px">Nhóm 6-HTTH</font></span>
    </div>
    
    <div class="col-md-4 col-sm-12">
        <span id="ft3_giua"><a href="index.php">Trang chủ</a></span> 
        <span id="ft3_phai"><a href="index.php?page=lienhe">Liên hệ</a></span>
    </div>
     <div class="col-md-1 col-sm-12">
        <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> <!-- code của nút di chuyển -->
    </div>
</div>  <!-- xong footer 3  -->