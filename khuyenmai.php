<div class="col-md-9 sp_phai">
    <div class="row san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png" style="width:25%;"/>
            <p/><a href="khuyenmai.php">Khuyến mãi</a>
        </div> <!-- xong tên đề mục  -->
        <!-- phần php hiển thị thông tin -->
        <?php
            //lệch select lấy thông tin
            $query = "SELECT id_bv, tieu_de, noi_dung, hinh_anh, trang_thai, phan_loai FROM bai_viet "
                    . "where trang_thai = 1 and phan_loai = 1 order by id_bv desc limit 5";
            $rows = $conn->query($query);
            while ($cot = $rows->fetch())
            {
                $id_bv = $cot[0];
                $tieu_de = $cot[1];
                $noi_dung = substr($cot[2], 0, 500);
                $hinh_anh = $cot[3];
        ?>
        <div class="khuyen_mai1">
            <h3> <?php echo "$tieu_de"; ?> </h3> <!-- hiển thị tiêu đề bài viết  -->
            <div class="col-md-6 col-sm-12 km_anh">
                <?php echo "<img src='image/$hinh_anh'/>";?><!-- hiển thị ảnh bài viết  -->
            </div> <!-- xong nửa bên trái -->
            <div class="col-md-6 col-sm-12 km_chu">
            <?php echo "$noi_dung .....";?> <!-- hiển thị nội dung -->
            <div class="doc_them">
                <img src="image/mui_ten_DT.png"/>
                <span id="chu_doc_them">
                    <a <?php echo"href='index.php?page=select&id_bv=$id_bv'"?>>Đọc thêm ...</a>
                </span>
            </div> <!-- xong nút đọc thêm -->
            </div> <!-- xong nửa bên phải  -->
            <img src="image/duong_vien_mau.png" style="width:99%;"/>
        </div> <!-- xong 1 tin  -->
         <?php } ?>
    </div> <!-- xong hiển thị thông tin -->
</div> <!-- xong bên phải  -->
