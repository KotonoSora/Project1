<div class="col-md-9 sp_phai">
    <div class="san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="#">Kiến Thức Về Trà</a>
        </div>
        <div class="thanh_mau">
            <div class="col-md-12 tmau_left">
                    Tiêu đề danh mục
            <!--<span id="tm_right">Số truy cập</span>-->
            </div>
        </div>
        <div class="thanh_mau3">
        <?php 
            // cậu lệnh hiển thị từ file bài viết để xuất ra thông tin mình cần
            $query = "SELECT id_bv, tieu_de , phan_loai FROM bai_viet WHERE phan_loai = 3 limit 15"; // limit = số giá trị mình cho
                        // lấy từ CSDL id_bv, tieu_de , phan_loai TỪ bảng bài_viết khi phân_loại là = 3
            $rows = $conn->query($query);
            $i =0; // id bắt đầu từ số không rùi tăng lên 
            foreach($rows as $cot) {
                $i++; // cùng với cộ $i = 0 ;
                $id_bv = $cot[0];
                $tieu_de = $cot[1];
                ?>
                    <p><?php echo "$i. ";?>
                        <span id="thanh_mau3_l">
                            <a href="index.php?page=select&id_bv=<?php echo "$id_bv";?>">
                                <?php echo "$tieu_de";?> <!-- hiển thị tiêu đề -->
                            </a>
                        </span>
                        <!--<span id="thanh_mau3_r"> 0 </span>-->
                    </p>
        <?php } ?>
       </div>
    </div>  
</div>       