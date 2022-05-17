<?php
	$sql_lietke_thanhvien = "SELECT * FROM tk_khach ORDER BY id_khach DESC";
	$query_lietke_thanhvien = mysqli_query($conn,$sql_lietke_thanhvien);
?>
<p style = "font-size:30px; text-align:center;">Danh sách thành viên tại QNU</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>ID</th>
    <th>Họ tên</th>
    <th>Tên tài khoản</th>
    <th>Mật khẩu</th>
    <th>Địa chỉ</th>
    <th>CMND</th>
    <th>Ngày sinh</th>
    <th>Số điện thoại</th>
    <th>Email</th>
    <th>Giới tính</th>
    <th>Trạng thái</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_thanhvien)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['ho_ten'] ?></td>
    <td><?php echo $row['ten_tk'] ?></td>
    <td><?php echo $row['mat_khau'] ?></td>
    <td><?php echo $row['dia_chi'] ?></td>
    <td><?php echo $row['cmnd'] ?></td>
    <td><?php echo $row['ngay_sinh'] ?></td>
    <td><?php echo $row['sdt'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['gioi_tinh'] ?></td>
   	<td>
   		<a href="modules/quanlythanhvien/xuly.php?idkhach=<?php echo $row['id_khach'] ?>">Xoá</a> | <a href="?action=quanlythanhvien&query=sua&idkhach=<?php echo $row['id_khach'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>