<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa bài viết này khônng?')==true)
        {
            window.location = "index.php?page=xoa_bai_viet&id="+id;
        }
    }
</script>
<div class="box">
<div class="box-header">
    <h3 class="box-title">Danh Sách Bài Viết</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Phân loại</th>
                <th>Trạng Thái</th>
                <th>Hình ảnh</th>		
                <th>Tùy chọn</th>					
            </tr>
        </thead>
        <tbody>
            <?php
            //Truy van
            $query = "SELECT id_bv, tieu_de, phan_loai, trang_thai, hinh_anh FROM bai_viet WHERE 1";
            //Thuc thi
            $rows = $conn->query($query);

            //hiển thị danh sách bài viết
            foreach($rows as $cot) { 
                ?>

            <tr>
                <td><?php if(isset($cot[0])) echo "$cot[0]"; ?></td>
            <td style="width:350px;"><?php if(isset($cot[1])) echo "$cot[1]"; ?></td>
            <?php
            if($cot[2]==1){
                    echo "<td>Khuyến mãi</td>";
            } elseif($cot[2]==2) {
                    echo "<td>Tin tức</td>";
            }elseif ($cot[2]==3) {
                    echo "<td>Kiến thức về trà</td>";
            }
            if($cot[3]==1){
                    echo "<td>Hiển thị</td>";
            } elseif($cot[3]==2) {
                    echo "<td>Ẩn</td>";
            }?>
            <td><img src="../image/<?php if(isset($cot[4])) echo "$cot[4]"; ?>" style="width:100px;"></td>
            <td><a href="index.php?page=sua_bai_viet&id=<?php if(isset($cot[0])) echo "$cot[0]"; ?>" class="btn btn-success">Xem</a> 
                <a href='#' onclick='check(<?php if(isset($cot[0])) echo "$cot[0]"; ?>)' class="btn btn-danger">Xóa</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>