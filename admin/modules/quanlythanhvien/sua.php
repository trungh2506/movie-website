<?php
	$sql_sua_thanhvien = "SELECT * FROM tk_khach WHERE id_khach='$_GET[idkhach]' LIMIT 1";
	$query_sua_thanhvien = mysqli_query($conn,$sql_sua_thanhvien);
?>
<p style = "font-size:30px; text-align:center;">Sửa thông tin thành viên</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_thanhvien)){
?>
 <form method="POST" action="modules/quanlythanhvien/xuly.php?idkhach=<?php echo $row['id_khach'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Họ tên</td>
	  	<td><input type="text" value="<?php echo $row['ho_ten'] ?>" name="hoten"></td>
	  </tr>
	   <tr>
	  	<td>Tên tài khoản</td>
	  	<td><input type="text" value="<?php echo $row['ten_tk'] ?>" name="tentk"></td>
	  </tr>
	  <tr>
	  	<td>Mật khẩu</td>
	  	<td><input type="text" value="<?php echo $row['mat_khau'] ?>" name="matkhau"></td>
	  </tr>
	  <tr>
	  	<td>Địa chỉ</td>
	  	<td><input type="text" value="<?php echo $row['dia_chi'] ?>" name="diachi"></td>
	  </tr>
      <tr>
	  	<td>CMND</td>
	  	<td><input type="text" value="<?php echo $row['cmnd'] ?>" name="cmnd"></td>
	  </tr>
      <tr>
	  	<td>Ngày sinh</td>
	  	<td><input type="text" value="<?php echo $row['ngay_sinh'] ?>" name="ngaysinh"></td>
	  </tr>
      <tr>
	  	<td>Số điện thoại</td>
	  	<td><input type="text" value="<?php echo $row['sdt'] ?>" name="sdt"></td>
	  </tr>
      <tr>
	  	<td>Email</td>
	  	<td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
	  </tr>
	  <tr>
	  	<td>Giới tính</td>
	  	<td><input type="text" value="<?php echo $row['gioi_tinh'] ?>" name="gioitinh"></td>
	  </tr>
	   <tr>
       <td colspan="2"><input style="height: 50px; width: 150px; padding: 5px;" type="submit" name="suathanhvien" value="Sửa thông tin thành viên"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>
</table>