<div class="col-md-9 sp_phai">
    <div class="san_pham_noi_bat">
    <div class="sp_nb_img">
        <img src="image/img_cayla.png"/>
        <p/><a href="#">Sản Phẩm Trà(Chè)</a>
    </div> <!-- xong tên đề mục  -->
    <?php 
        $query = "SELECT id_pl, ten_pl, trang_thai FROM phan_loai WHERE trang_thai = 1";
        $pl = $conn->query($query);
        $idvt = 1;
        foreach($pl as $cot_pl) { 
            $id_pl = $cot_pl[0];
            $ten_pl = $cot_pl[1];
            
            if($ten_pl != 'Hộp Quà Biếu'){
    ?>
    <div class="row sp_1" id="<?php echo "$idvt";?>">        				
        <div class="col-md-12 sp_1_chu"><h3><?php echo"$ten_pl";?></h3></div>                               
        <div class="col-md-12 sp_1_dong"></div>   
        <div class="col-md-12 tra_kho">  
            <?php
                $sql = "SELECT id_sp,ten_sp,id_pl,khoi_luong,gia,trang_thai,hinh_anh"
                        ." FROM san_pham "
                        ." WHERE trang_thai = 1 and id_pl = $id_pl order by id_sp desc "
                        ." limit 6";
                $sp = $conn->query($sql);
                foreach($sp as $cot_sp) { 
                    $id_sp = $cot_sp[0];
                    $ten_sp = $cot_sp[1];
                    $hinh_anh = $cot_sp[6];
                    $khoi_luong = $cot_sp[3];
            ?>
            <div class="col-md-4 sp_kho1" style="">
                <p/><img src="image/<?php echo "$hinh_anh";?>" style="height: 100px;" class="img-responsive"/>
                <p/><a href="index.php?page=select&id_sp=<?php echo "$id_sp";?>"> <?php echo "$ten_sp $khoi_luong gram";?></a>
                <!--<p/><span id="sp_img"><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/></span>-->
                <p/><span id="sp_giohang"><a href="index.php?page=cart&id_sp=<?php echo"$id_sp"?>">Thêm vào giỏ</a></span>
            </div>
                <?php }?>
        </div>
    </div> <!-- TRÀ KHÔ -->  
            <?php $idvt++;} } ?>
    </div>  <!-- xong hiển thị thông tin -->
</div>   <!-- xong bên phải  -->    
