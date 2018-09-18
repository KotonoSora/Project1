<div class="col-md-9 sp_phai">
    <div class="row san_pham_noi_bat">
        <div class="sp_nb_img">
            <img src="image/img_cayla.png"/>
            <p/><a href="index.php?page=gioithieu">Giới Thiệu Về Việt Nhân Trà</a>
        </div> <!-- xong tên đề mục  -->
        <div class=" gioi_thieu">
            <h3>Tên công ty:CÔNG TY TNHH VIỆT NHÂN TRÀ</h3>
            <!--<p/>Tên quốc tế : -->
            <p/> Địa chỉ: 34 Kim Đồng ,Phường Giáp Bát, Quận Hoàng Mai, TP.Hà Nội
            <p/>Giấy phép Đăng ký kinh doanh: 16088888888
            <p/>Giấy chứng nhận đầu tư số: c1608g3842                                          
            <p/>Điện thoại liên hệ: 0210.3582.369 - 0210.3600.079 - Fax : 0210.3873.857 - Hotline: 0912.355.161 
            Email: baolong_tea1@yahoo. com.vn - website: http://baolongtea.com - http://trabaolong.com 
            <p/>Ngày bắt đầu hoạt động: 14/3/2017
            <p/>Tư cách pháp nhân; Là loại hình công ty TNHH 2 thành viên hạch toán kinh tế độc lập, tự chủ về tài chính. 
            Công ty đã có nhà máy sx ở Khu Bãi Tần, thị trấn Thanh Sơn, huyện TS, tỉnh Phú Thọ
            <p/>Ngành nghề kinh doanh:
            <p/>* Sản xuất và cung ứng các loại chè xanh, chè tươi loại ( thượng hạng, ngon, thường... ) 
            <p/>* Sản xuất ,kinh doanh hàng nông, lâm sản
            <p/>* Kinh doanh vận tải hàng hóa
            Vốn điều lệ: 5.000.000.000 đồng VN(Năm tỷ đồng)
            <p/>Công ty TNHH Trà Việt Nhân với gần 20 cán bộ kỹ thuật và công nhân lành nghề trong viêc sản xuất ,chế biến chè .Công ty đã có nhà máy sản xuất chè tại thị trấn Cầu Đất nằm trên vùng nguyên liệu trù phú ở tại 3 huyện : Thanh Sơn, Yên Lập ,Cẩm Khê của tỉnh Phú Thọ có chất lượng, sản lượng cao,có dây chuyền công nghệ sản xuất chè tiên tiến, hiện đại với công suất 30 tấn chè búp tươi/ngày, hàng năm cung ứng 1500tấn chè đen các loại với chất lượng cao, đáp ứng mọi nhu cầu của khách hàng.
            Trong hoạt động sản xuất kinh doanh Phương châm mà công ty theo đuổi là :Chất Lượng- Bền Vững. Công ty TNHH Chè Xuất Khẩu Bảo Long sẽ là địa chỉ tin cậy của khách hàng. 
            <div class="dv_border"></div>
            <?php
            // truy vấn 
            $query = "SELECT logo FROM trang_chu";
            $rows = $conn->query($query);
            foreach($rows as $cot_tc) 
            { 
                $logo = $cot_tc[0];          
            }
            ?>
            <div class="gt_1">
                <div class="col-md-3 col-sm-12 gioi_thieu_anh">
                    <img src="image/<?php echo "$logo";?>" style="width:90%;"/>
                </div>
                <div class="col-md-9 col-sm-12 gioi_thieu_gt">
                    <h4>TẠI SAO CHÚNG TÔI CHỌN TRÀ LÀM SỰ NGHIỆP ?</h4>
                    <p/><h2>Sự ngưỡng mộ của thế giới bắt đầu từ lòng tự hào của chúng ta</h2>
                    <p/>Chúng tôi tin tưởng trà có một sức mạnh, sức mạnh xây dựng một lối sống hướng thượng và vị tha hơn, lối sống giao hòa và trân trọng hiện tại, lối sống của hạnh phúc hơn, qua nghệ thuật ẩm trà và lòng tự hào Việt nam. Mong muốn mang giá trị trà đến với nhiều người hơn, chúng tôi đã chọn trà là niềm hãnh diện, là “cái tôi” và là sự nghiệp của mình.
                </div>	
            </div>
            <div class="gt_1">
                <div class="col-md-3 col-sm-12 gioi_thieu_center">
                    <h3>Hoạt động cốt lõi</h3>
                    <p/>Xây dựng chuỗi trải nghiệm giá trị Trà uống tận hưởng hương sắc vị hoài niệm tri kỷ. 
                </div>
                <div class="col-md-9 col-sm-12 gioi_thieu_center1">
                    <h4><a href="index.php?page=spquatang">SP Quà tặng trà</a></h4>
                    <p/>Xuất thân từ những người sành trà cộng với đội ngũ thiết kế xuất sắc, Trà Việt Nhân mới thành lập là chuyên gia trong lĩnh vực cung cấp trà làm quà tặng cho doanh nghiệp và cá nhân. Đặc biệt trong các dịp: tết, trung thu, ngày kỷ niệm, thăm người thân, gặp đối tác…
                    <p/><h4><a href="index.php?page=sanphamtra">Sản Phẩm Trà</a></h4>
                    <p/>Các dòng sản phẩm chính của Trà Việt Nhân: SP Quà tặng, Trà Tươi Thái Nguyên , Trà Khô Thái Nguyên.
                    <p/>Trà Việt Nhân với truyền thống đậm nét, phục vụ các loại trà ngon Việt Nam theo một phong cách đầy tự hào. Nơi mọi người có thể “chạm” được các giá trị trà cao quý giống như câu nói logon của công ty chúng tôi.                            
                </div>	
            </div>
            <!--<div class="gt_1">
                <div class="col-md-3 gioi_thieu_bottom">
                    <h3>Quản Lý</h3>
                    <p/>Các thành viên đang cùng nhau vì một Trà Việt Nhân rạng danh
                </div>
                <div class="col-md-9 gioi_thieu_bottom1">
                    <div class="col-md-4 gioi_thieu_img">
                        <img src="image/ql1.png" />
                    </div>   
                    <div class="col-md-4 gioi_thieu_img">
                        <img src="image/ql2.png" />
                    </div>
                    <div class="col-md-4 gioi_thieu_img">                          
                        <img src="image/ql3.png"/>                        	
                    </div>
                </div>	
            </div>-->        
        </div> <!-- xong hiển thị thông tin quan trọng  -->
    </div> <!-- xong hiển thị thông tin -->
</div>   <!-- xong bên phải  -->
