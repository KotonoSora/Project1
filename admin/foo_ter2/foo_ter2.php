
<script>
    function check(id)
    {
        if(confirm('Bạn có muốn xóa mục phân loại này khônng?')==true)
        {
            window.location = "index.php?page=xoa_foo_ter2&id="+id;
        }
    }
</script>
<?php
    $q = "SELECT COUNT(id_ft2) FROM foo_ter2";
    $count = $conn->query($q);
    foreach ($count as $r){
        $ft02 = $r[0];
    }
    if($ft02>0){
?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Mục Footer2</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th style="width: 4%;">ID</th>
					<th style="width: 11%;">Dòng 1</th>
                                        <th style="width: 10%;">Dòng 2</th>
					<th style="width: 8.5%;">Dòng 3</th>
                                        <th style="width: 8.5%;">Dòng 4</th>
                                        <th style="width: 8.5%;">Dòng 5</th>
                                        <th style="width: 8.5%;">Dòng 6</th>
                                        <th style="width: 8.5%;">Dòng 7</th>
                                        <th style="width: 8.5%;">Dòng 8</th>
					<th style="width:6%;">Tùy chọn</th>						
                </tr>
                </thead>
                <tbody>
              
                <?php
            
            
            //Truy van
            $query = "SELECT id_ft2, dong1, dong2, dong3, dong4, dong5, dong6, dong7, dong8 FROM foo_ter2 WHERE 1";
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
                . "<td>$cot[7]</td>"
                . "<td>$cot[8]</td>"
               
                . "<td><a href='index.php?page=sua_foo_ter2&id=$cot[0]' class='btn btn-success'>Sửa</a> "
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
        header('location:index.php?page=them_foo_ter2');
    }
?>