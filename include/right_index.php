<div class="col-md-9 sp_phai">
    <!-- Sản phẩm nổi bật -->
    <div class="san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="index.php?page=sanphamtra#tt">Sản phẩm nổi bật</a>
        </div>
        <?php
            $sql = "SELECT id_sp,ten_sp,id_pl,khoi_luong,gia,trang_thai,hinh_anh"
                    ." FROM san_pham "
                    ." WHERE trang_thai = 1 and khoi_luong>=200 order by id_sp desc "
                    ." limit 3";
            $sp = $conn->query($sql);
            foreach($sp as $cot_sp) { 
                $id_sp = $cot_sp[0];
                $ten_sp = $cot_sp[1];
                $hinh_anh = $cot_sp[6];
                if($cot_sp[3]>=1000){
                    $kl = $cot_sp[3]/1000;
                    $khoi_luong = "$kl kg";
                } else {
                    $khoi_luong = "$cot_sp[3] gram";
                }
                $gia = $cot_sp[4];
        ?>
        <div class="sp_nb1">
            <div class="col-md-3 col-sm-12">
                <a href="#"><img src="image/<?php echo"$hinh_anh"?>" class="img-responsive" style="height: 100px;"/></a>
            </div>
            <div class="col-md-9 col-sm-12">
                <span id="sp_chu1"><a href="#"> <?php echo "$ten_sp $khoi_luong";?></a></span>
                <p/><span id="sp_chu2"> Giá : <?php echo " $gia VNĐ/$khoi_luong";?> </span>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=select&id_sp=<?php echo "$id_sp";?>">Chi tiết</a>
                </div>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=cart&id_sp=<?php echo"$id_sp"?>">Thêm vào giỏ</a>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"> </div>
            </div>
        </div>
        <!-- xong san pham nổi bật 1-->
        <?php } ?>
    </div>
    <!-- xong sản phẩm nổi bật -->
    <!-- Trà biếu cao cấp -->
    <div class="san_pham_noi_bat">
        <?php
            $query = "SELECT * FROM phan_loai WHERE ten_pl LIKE '%cao cấp%' and trang_thai = 1";
            $pl = $conn->query($query);
            foreach ($pl as $cot_pl) {
                $id_pl = $cot_pl[0];
                $ten_pl = $cot_pl[1];
        ?>
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="index.php?page=spquatang"><?php echo "$ten_pl";?></a>
        </div>
        <?php
            $sql = "SELECT id_sp,ten_sp,id_pl,khoi_luong,gia,trang_thai,hinh_anh"
                    ." FROM san_pham "
                    ." WHERE trang_thai = 1 and id_pl = $id_pl order by id_sp desc "
                    ." limit 3";
            $sp = $conn->query($sql);
            foreach($sp as $cot_sp) { 
                $id_sp = $cot_sp[0];
                $ten_sp = $cot_sp[1];
                $hinh_anh = $cot_sp[6];
                if($cot_sp[3]>=1000){
                    $kl = $cot_sp[3]/1000;
                    $khoi_luong = "$kl kg";
                } else {
                    $khoi_luong = "$cot_sp[3] gram";
                }
                $gia = $cot_sp[4];
        ?>
        <div class="sp_nb1">
            <div class="col-md-3 col-sm-12">
                <a href="#"><img src="image/<?php echo"$hinh_anh"?>" class="img-responsive" style="height: 100px;"/></a>
            </div>
            <div class="col-md-9 col-sm-12">
                <span id="sp_chu1"><a href="#"> <?php echo "$ten_sp $khoi_luong";?></a></span>
                <p/><span id="sp_chu2"> Giá : <?php echo " $gia VNĐ/$khoi_luong";?> </span>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=select&id_sp=<?php echo "$id_sp";?>">Chi tiết</a>
                </div>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=cart&id_sp=<?php echo"$id_sp"?>">Thêm vào giỏ</a>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"> </div>
            </div>
        </div>
        <!-- xong san pham nổi bật 1-->
        <?php } ?>
        <?php } ?> 
    </div>
    
    <!-- xong trà biếu cao cấp -->
    <!-- Hộp quà -->
    <div class="san_pham_noi_bat">
        <?php
            $query = "SELECT * FROM phan_loai WHERE ten_pl LIKE '%quà%' and trang_thai = 1";
            $pl = $conn->query($query);
            foreach ($pl as $cot_pl) {
                $id_pl = $cot_pl[0];
                $ten_pl = $cot_pl[1];
        ?>
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p><a href="index.php?page=spquatang"><?php echo "$ten_pl";?></a></p>
        </div>
        <?php
            $sql = "SELECT id_sp,ten_sp,id_pl,khoi_luong,gia,trang_thai,hinh_anh"
                    ." FROM san_pham "
                    ." WHERE trang_thai = 1 and id_pl = $id_pl order by id_sp desc "
                    ." limit 3";
            $sp = $conn->query($sql);
            foreach($sp as $cot_sp) { 
                $id_sp = $cot_sp[0];
                $ten_sp = $cot_sp[1];
                $hinh_anh = $cot_sp[6];
                $khoi_luong = $cot_sp[3];
                $gia = $cot_sp[4];
        ?>
        <div class="sp_nb1">
            <div class="col-md-3 col-sm-12">
                <a href="#"><img src="image/<?php echo"$hinh_anh"?>" class="img-responsive" style="height: 100px;"/></a>
            </div>
            <div class="col-md-9 col-sm-12">
                <span id="sp_chu1"><a href="index.php?page=spquatang"> <?php echo "$ten_sp";?> </a></span>
                <p/>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=select&id_sp=<?php echo "$id_sp";?>">Chi tiết</a>
                </div>
                <div class="col-sm-2">
                <a class='btn btn-warning' href="index.php?page=lienhe">Liên hệ đặt hàng</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- xong san pham nổi bật 1-->      
        <?php } ?>
    </div>
    
    <!-- xong hộp quà -->
</div>  