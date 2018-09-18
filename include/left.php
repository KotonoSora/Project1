<div class="col-md-3 col-sm-12 banner_sp">
    <div class="dong_sp"> 
        <div class="banner_sp1">
            <img src="image/banner_nen.png"/>
            <p>Sản Phẩm</p>
        </div>
        <div class="banner_sp_trai">
            <?php
            // lấy tên phân loại
                $sql = "SELECT id_pl, ten_pl, trang_thai FROM phan_loai "
                        . " WHERE trang_thai = 1 "
                        . " and ten_pl like '%khô%' "
                        . " or ten_pl like '%tươi%' "
                        . " limit 2";
                $rows = $conn->query($sql);
                $kt = 0;
                foreach($rows as $cot_pl) { 
                    $id_pl = $cot_pl[0];
                    $ten_pl = $cot_pl[1];
                    $kt++;
            ?>
            <p><span id="sp_cd1"><?php echo "$ten_pl";?></span>
            <?php
            // lấy tên sản phẩm
                    $query = "SELECT id_sp,ten_sp,id_pl"
                        ." FROM san_pham "
                        ." WHERE id_pl = $id_pl order by id_sp desc "
                        . " limit 5";
                    $rows = $conn->query($query);
                    foreach($rows as $cot_sp) { 
                        $id_sp = $cot_sp[0];
                        $ten_sp = $cot_sp[1];
            ?>
            <p><span id="sp_cd"><a href="index.php?page=select&id_sp=<?php echo "$id_sp";?>"><?php echo "$ten_sp";?></a></span>
            <?php }  } ?>
        </div>
    </div> <!-- xong Sản Phẩm -->
    <div class="gio_hang"> 
        <div class="banner_sp1">
            <img src="image/banner_nen.png"/>
            <p><a href="index.php?page=cart" style="color: white;">Giỏ Hàng</a></p>
        </div>
        <div class="img_giohang">
            <a href="index.php?page=cart"><img src="image/gio_hang.png"/></a>
        </div>
    </div> <!-- xong gio hàng -->
    <div class="hotro_khach_hang"> 
        <div class="banner_sp1">
            <img src="image/banner_nen.png"/>
            <p>Hổ Trợ Khách Hàng</p>
        </div>
        <?php
        //lấy thông tin hỗ trợ viên từ bảng liên hệ
        $query = "SELECT dien_thoai, ten_ht, count(id_lh) FROM lien_he";
        // lấy thông tin của hai người
        $rows = $conn->query($query);
        foreach($rows as $cot) {
            $dien_thoai=$cot[0];
            $ten_ht=$cot[1];
            $count = $cot[2];
        }
        if($count>0){
        ?>
        <div class="htkh">
            <div class="col-xs-3">
                <img src="image/icon1.png" class="img-responsive"/>
            </div>
            <div class="col-xs-5 htkh1">
            <?php 
                echo "$ten_ht:";
            ?>
            </div>
            <div class="col-xs-4 htkh1">
            <?php
                echo "$dien_thoai";
            ?>
            </div>
        </div>
        <?php 
        } else {
            echo" Đang cập nhật";
        }
        ?>
    </div> <!-- xong hỗ trợ khách hàng -->
    <!--<div class="luong_truy_cap"> 
        <div class="banner_sp1"> 
            <img src="image/banner_nen.png"/>
            <p>Lượng Truy Cập
        </div>
        <div class="ltc1">
            <script type="text/javascript" src="http://jf.revolvermaps.com/r.js"></script><script type="text/javascript">rm_f1st('0','220','true','false','000000','59etflkr0um','true','ff0000');</script><noscript><applet codebase="http://rf.revolvermaps.com/j" code="core.RE" width="220" height="220" archive="g.jar"><param name="cabbase" value="g.cab" /><param name="r" value="true" /><param name="n" value="false" /><param name="i" value="59etflkr0um" /><param name="m" value="0" /><param name="s" value="220" /><param name="c" value="ff0000" /><param name="v" value="true" /><param name="b" value="000000" /><param name="rfc" value="true" /></applet></noscript>
        </div>
    </div>  xong lượng truy cập-->
    <div class="tra_suckhoe"> 
        <div class="banner_sp1"> 
            <img src="image/banner_nen.png"/>
            <p>Trà Và Sức Khỏe
        </div>
        <?php
            $query = "SELECT id_bv, tieu_de, phan_loai, trang_thai, hinh_anh FROM bai_viet "
                    . " WHERE trang_thai = 1 and phan_loai = 2 order by id_bv desc limit 10";
            $rows = $conn->query($query);
            foreach($rows as $cot_bv) {
                $id_bv = $cot[0];
                $ten_bv = $cot_bv[1];
                $hinh_anh = $cot_bv[4];
        ?>
        <div class="row tra_sk">
            <div class="tra_sk1">
                <div class="col-xs-4">
                    <a href="#"><img src="image/<?php echo"$hinh_anh";?>" width="85px"/></a>
                </div>
                <div class="col-xs-8">
                    <a href="index.php?page=select&id_bv=<?php echo "$id_bv";?>"><?php echo"$ten_bv";?></a>
                </div>
            </div>	
        </div>
        <?php } ?>
    </div> <!-- xong trà và sức khỏe -->
</div>