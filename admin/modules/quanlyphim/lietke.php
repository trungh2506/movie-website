<?php
	$sql_lietke_phim = "SELECT * FROM phim ORDER BY id_phim DESC";
	$query_lietke_phim = mysqli_query($conn,$sql_lietke_phim);
?>
<p style = "font-size:30px; text-align:center;">Liệt kê phim</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>ID</th>
    <th>Tên phim</th>
    <th>Thể loại</th>
    <th>Đạo diễn</th>
    <th>Diễn viên</th>
    <th>Nội dung</th>
    <th>Thời lượng</th>
    <th>Độ tuổi</th>
    <th>Loại phim</th>
    <th>Trailer</th>
  	<th>Hình ảnh</th>
    <th>Trạng thái</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_phim)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['ten_phim'] ?></td>
    <td><?php echo $row['the_loai'] ?></td>
    <td><?php echo $row['dao_dien'] ?></td>
    <td><?php echo $row['dien_vien'] ?></td>
    <td><?php echo $row['noi_dung'] ?></td>
    <td><?php echo $row['thoi_luong'] ?></td>
    <td><?php echo $row['do_tuoi'] ?></td>
    <td><?php echo $row['loai_phim'] ?></td>
    <td><?php echo $row['trailer'] ?></td>
    <td><img src="modules/quanlyphim/uploads/<?php echo $row['img'] ?>" width="150px"></td>
    <!-- <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
    </td> -->
   	<td>
   		<a href="modules/quanlyphim/xuly.php?idphim=<?php echo $row['id_phim'] ?>">Xoá</a> | <a href="?action=quanlyphim&query=sua&idphim=<?php echo $row['id_phim'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>