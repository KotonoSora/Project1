<div class="col-md-9 sp_phai">
    <div class="san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="#">SP Quà Tặng  Trà</a>
        </div>   
        <?php 
           include 'connect.php';
            // cậu lệnh hiển thị từ file bài viết để xuất ra thông tin mình cần
            $query = "SELECT id_sp,ten_sp,id_pl,mo_ta,hinh_anh,trang_thai "
                    . " FROM san_pham  "
                    ." WHERE id_pl = 4 and trang_thai = 1 order by id_sp desc limit 5 "; // lấy ra sản phẩm là hộp quà
            $rows = $conn->query($query);
            foreach($rows as $cot) {
                $id_sp = $cot[0];
                $ten_sp = $cot[1];
                $mo_ta = $cot[3];
                $hinh_anh = $cot[4];
        ?>
        <div class="row sp_quatang">
            <h3><?php echo "$ten_sp";?></h3>
                <div class="dv_border">

                </div>  
                <div class="col-md-6 col-sm-12 sp_qt1">
                    <img src="<?php echo "image/$hinh_anh";?>"/>
            </div>
            <div class="col-md-6 col-sm-12 sp_qt_chu">
                <h5><?php echo "$mo_ta";?></h5>
                <p>
                    <span id="sp_sp"><a href="index.php?page=select&id_sp=<?php echo "$id_sp";?>">Sản phẩm</a></span> 
                    <span id="sp_lx"><a href="index.php?page=lienhe">Liên hệ</a></span> 
                </p>
            </div>
        </div>     
        <?php } ?>
    </div>                                      
</div>
   