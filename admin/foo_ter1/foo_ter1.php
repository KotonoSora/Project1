
<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa mục phân loại này khônng?')==true)
        {
            window.location = "index.php?page=xoa_foo_ter1&id="+id;
        }
    }
</script>
<?php
    $q = "SELECT COUNT(id_ft1) FROM foo_ter1";
    $count = $conn->query($q);
    foreach ($count as $r){
        $ft01 = $r[0];
    }
    if($ft01>0){
?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Mục Footer1</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 4%;">ID</th>
                    <th style="width: 21%;">Địa chỉ</th>
                    <th style="width: 10%;">Mail</th>
                    <th style="width: 8.5%;">Điện thoại</th>
                    <th style="width: 8.5%;">Hotline</th>
                    <th style="width: 8.5%;">website</th>
                    <th style="width: 8.5%;">showroom</th>
                    <th style="width:15%;">Tùy chọn</th>						
                </tr>
                </thead>
                <tbody>
              
                <?php
            
            
            //Truy van
            $query = "SELECT id_ft1, dia_chi, mail, dien_thoai, hot_line, website, showroom FROM foo_ter1 WHERE 1";
            //Thuc thi
            $rows = $conn->query($query);
            
            //Kiem tra
              foreach($rows as $cot) 
                { 
                echo "<tr>"
                . "<td>$cot[0]</td>"
                . "<td>$cot[1]</td>"
                . "<td>$cot[2]</td>"
                . "<td>$cot[3]</td>"
                . "<td>$cot[4]</td>"
                . "<td>$cot[5]</td>"
                . "<td>$cot[6]</td>"
                . "<td><a href='index.php?page=sua_foo_ter1&id=$cot[0]' class='btn btn-success'>Sửa</a> "
                . "<a href='#' onclick='check($cot[0])' class='btn btn-danger'>Xóa</a></td>"
                ."</tr>";
                }
                ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<?php 
    } else {
        header('location:index.php?page=them_foo_ter1');
    }
?>