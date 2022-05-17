<?php
	include '../../config.php';
	$hoten = $_POST['hoten'];
	$tentk = $_POST['tentk'];
	$matkhau = $_POST['matkhau'];
	$diachi = $_POST['diachi'];
    $ngaysinh = $_POST['ngaysinh'];
	$cmnd = $_POST['cmnd'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
    $gioitinh = $_POST['gioitinh'];

if(isset($_POST['themthanhvien'])){
	//thêm
	$sql_them = "INSERT INTO tk_khach(ho_ten,ten_tk,mat_khau,dia_chi,cmnd,ngay_sinh,sdt,email,gioi_tinh) 
	VALUE('".$hoten."','".$tentk."','".$matkhau."','".$diachi."','".$cmnd."','".$ngay_sinh."','".$sdt."','".$email."','".$gioi_tinh."')";
	mysqli_query($conn,$sql_them);
	header('Location: ../../index.php?action=quanlythanhvien&query=them');
}elseif(isset($_POST['suathanhvien'])){
	//sửa
	$sql_update = "UPDATE tk_khach SET ho_ten='".$hoten."',ten_tk='".$tentk."',mat_khau='".$matkhau."',dia_chi='".$diachi."',cmnd='".$cmnd."',ngay_sinh='".$ngaysinh."',sdt='".$sdt."',email='".$email."',gioi_tinh='".$gioitinh."' WHERE id_khach='$_GET[idkhach]'";

	mysqli_query($conn,$sql_update);
		header('Location:../../index.php?action=quanlythanhvien&query=them');
}else{
	//xóa
	$id=$_GET['idkhach'];
	$sql = "SELECT * FROM tk_khach WHERE id_khach = '$id' LIMIT 1";
	$query = mysqli_query($conn,$sql);
	// while($row = mysqli_fetch_array($query)){
	// 	unlink('uploads/'.$row['img']);
	// }
	$sql_xoa = "DELETE FROM tk_khach WHERE id_khach='".$id."'";
	mysqli_query($conn,$sql_xoa);
	header('Location:../../index.php?action=quanlythanhvien&query=them');
}

?>