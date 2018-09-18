<?php
    //kiểm tra có biến id_bv hay không 
    // hiển thị bài viết
    if(isset($_REQUEST['id_bv']))
    {
        //lấy biến id_bv
        $id_bv = $_REQUEST['id_bv'];    
        //lệnh select lấy thông tin
        $query = "select id_bv, tieu_de, noi_dung, hinh_anh from bai_viet where id_bv = $id_bv";        
        $rows = $conn->query($query);
        //hàm fetch lấy thông tin 1 tin
        $cot = $rows->fetch();
        //biến lấy thông tin
        $tieu_de = $cot[1];
        $noi_dung = $cot[2];
        $hinh_anh = $cot[3];
    
?>
<div class="col-md-9 sp_phai">
    <div class="row san_pham_noi_bat">
        <?php
            if(isset($_REQUEST['id_bv'])){
                //hiển thị tiêu đề
                echo "<h3>$tieu_de </h3><br/>";
                //hiển thị hình ảnh
                echo "<img src='image/$hinh_anh'class='img-responsive img-thumbnail'> <br/>";
                //hiển thị nội dung
                echo "<div clas='km_chu'>$noi_dung </div>";
            }
        ?>
    </div> <!-- xong hiển thị thông tin -->
</div> <!-- xong bên phải  -->
<?php } ?>

<?php
    //lấy id_sp,hiển thị thông tin sản phẩm
    if(isset($_REQUEST['id_sp']))
    {
        // lấy thông tin sản phẩm
        $id_sp = $_REQUEST['id_sp'];
        $query = "select id_sp, ten_sp,san_pham.id_pl,khoi_luong,gia,mo_ta,hinh_anh,chi_tiet,ten_pl from san_pham join phan_loai on san_pham.id_pl = phan_loai.id_pl"
                . " where id_sp = $id_sp";        
        $row_sp = $conn->query($query);          
        $cot_sp = $row_sp->fetch();
        // đặt biến lấy thông tin
        $id_sp = $cot_sp[0];
        $ten_sp = $cot_sp[1];
        $id_pl = $cot_sp[2];
        if($cot_sp[3]>=1000){
            $kl = $cot_sp[3]/1000;
            $khoi_luong = "$kl kg";
        } else {
            $khoi_luong = "$cot_sp[3] gram";
        }
        $gia = $cot_sp[4];
        $mo_ta = $cot_sp[5];
        $hinh_anh = $cot_sp[6];
        $chi_tiet = $cot_sp[7];
        $ten_pl = $cot_sp[8];
?>
<div class="col-md-9 sp_phai">
    <div class="san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><span id="sp_top_left"><a href="#"><?php echo "$ten_pl";?></a></span>
        </div>
        <div class="row sp_tra">
            <div class="sp_tra1">
            <div class="col-md-4 sp_tra_l" style="height: 300px;">
                <img src="image/<?php echo "$hinh_anh";?>" style="width:100%" class="img-responsive"/>
            </div>
            <form action="index.php">
                <div class="col-md-6 sp_tra_r">
                    <p/>Tên sản phẩm: <?php echo "<span style='font-weight:bold; font-size:18px;'>$ten_sp</span>";?>
                    <!--gửi thông tin sản phẩm-->
                    <input type="hidden" name="page" value="cart">
                    <input type="hidden" name="id_sp" value="<?php echo"$id_sp"?>">
                    <?php if($cot_sp[3]>0) { ?>
                    <!--nhập số lượng sản phẩm-->
                    <p>
                        <?php 
                            if(isset($_SESSION['cart'][$id_sp])){
                                foreach ($_SESSION['cart'] as $ttsl) {
                                    if($ttsl['id_sp']==$id_sp)
                                    $so_luong = $ttsl['so_luong'];
                                }
                            } else {
                                $so_luong = 1;
                            }
                        ?>
                        <span>Số lượng: 
                            <input type="number" name="sl" value="<?php echo"$so_luong";?>" min="1" max="1000" style="width: 60px;text-align: right;">
                        </span>
                    </p>
                    <p/><span style="color: red">Giá: <?php echo"$gia VND/ $khoi_luong"?></span>
                    <?php } ?>
                    <!--chuyển hướng-->
                    <p>
                        <?php if($cot_sp[3]>0) {
                            echo "<p/> Mã SP: T$id_pl - $khoi_luong<br/>Tình trạng: Còn Hàng";
                            echo "<p/> <input type= 'submit' class='btn btn-warning' value='Thêm vào giỏ'>";
                            } else{
                                echo "<a class='btn btn-warning' href='index.php?page=lienhe'>Liên hệ đặt hàng</a>";
                            }
                        ?>
                    </p>
                    <!--<p/>Đánh giá :<img src="image/ngoi_sao_den.png"/><img src="image/ngoi_sao_den.png"/><img src="image/ngoi_sao_den.png"/><img src="image/ngoi_sao_den.png"/><img src="image/ngoi_sao_den.png"/>-->
                </div>  
            </form>
        </div>
        </div> 
        <div class="sp_tra2">
            <div class="container">
                <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Thông tin sản phẩm</a></li>
                      <!--<li><a data-toggle="tab" href="#menu1">Đánh giá</a></li>-->
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <?php echo "$chi_tiet";?>
                    </div>
                    <!--<div id="menu1" class="tab-pane fade ">
                      <h3>Đánh giá</h3>
                      <p> phần này ghi đánh giá</p>
                    </div>   -->
                </div>
            </div>
        </div>
        

        <div class="row sp_1">
            <div class="col-md-12 sp_tra_cungloai"><h4>Sản phẩm cùng loại</h4></div>
            <div class="col-md-12 tra_kho"> 
                <?php
                    $id_sp = $_REQUEST['id_sp'];
                        $query = "select id_sp, ten_sp,id_pl,khoi_luong,gia,mo_ta,hinh_anh,chi_tiet, trang_thai from san_pham "
                                . " where trang_thai = 1 and id_pl = $id_pl and id_sp != $id_sp "
                                . " order by id_sp desc limit 9 ";        
                        $row_sp = $conn->query($query);          
                        foreach ($row_sp as $sp_lq){
                            if($sp_lq>0){
                                if($sp_lq[3]>=1000){
                                    $kl1 = $sp_lq[3]/1000;
                                    $kl2 = "$kl kg";
                                } else {
                                    $kl2 = "$sp_lq[3] gram";
                                }
                            }
                ?>
                <div class="col-md-4 sp_kho1">
                    <p/><img src="image/<?php echo "$sp_lq[6]";?>"width="160px"/>
                    <p>
                        <a href="index.php?page=select&id_sp=<?php echo "$sp_lq[0]";?>">
                            <?php 
                                echo "$sp_lq[1] ";
                                if($kl2>0) echo " $kl2";
                            ?>
                        </a>
                    </p>
                    <!--<p/><span id="sp_img"><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/><img src="image/ngoi_sao.png"/></span>-->
                    <p><span id="sp_giohang"><a href="index.php?page=select&id_sp=<?php echo "$id_sp";?>">Chi tiết</a></span></p>
                </div>  
                            <?php } ?>
                <div class="col-md-4">
                </div>
            </div>
        </div> 
</div> 
</div>  
<?php } ?>