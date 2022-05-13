<?php
	$sql_sua_phim = "SELECT * FROM phim WHERE id_phim='$_GET[idphim]' LIMIT 1";
	$query_sua_phim = mysqli_query($conn,$sql_sua_phim);
?>
<p style = "font-size:30px; text-align:center;">Sửa phim</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_phim)){
?>
 <form method="POST" action="modules/quanlyphim/xuly.php?idphim=<?php echo $row['id_phim'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên phim</td>
	  	<td><input type="text" value="<?php echo $row['ten_phim'] ?>" name="tenphim"></td>
	  </tr>
	   <tr>
	  	<td>Thể loại</td>
	  	<td><input type="text" value="<?php echo $row['the_loai'] ?>" name="theloai"></td>
	  </tr>
	  <tr>
	  	<td>Đạo diễn</td>
	  	<td><input type="text" value="<?php echo $row['dao_dien'] ?>" name="daodien"></td>
	  </tr>
	  <tr>
	  	<td>Diễn viên</td>
	  	<td><textarea  rows="10" type="text" style="resize: none" value="<?php echo $row['dien_vien'] ?>" name="dienvien"></textarea></td>
	  </tr>
      <tr>
	  	<td>Nội dung</td>
	  	<td><textarea  rows="10" type="text" style="resize: none" value="<?php echo $row['noi_dung'] ?>" name="noidung"></textarea></td>
	  </tr>
      <tr>
	  	<td>Thời lượng</td>
	  	<td><input type="text" value="<?php echo $row['thoi_luong'] ?>" name="thoiluong"></td>
	  </tr>
      <tr>
	  	<td>Độ tuổi</td>
	  	<td><input type="text" value="<?php echo $row['do_tuoi'] ?>" name="dotuoi"></td>
	  </tr>
      <tr>
	  	<td>Loại phim</td>
	  	<td><input type="text" value="<?php echo $row['loai_phim'] ?>" name="loaiphim"></td>
	  </tr>
	  <tr>
	  	<td>Trailer</td>
	  	<td><input type="text" value="<?php echo $row['trailer'] ?>" name="trailer"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlyphim/uploads/<?php echo $row['img'] ?>" width="150px">
	  	</td>
	  </tr>
	   <tr>
       <td colspan="2"><input style="height: 50px; width: 100px; padding: 5px;" type="submit" name="suaphim" value="Sửa phim"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>
</table>