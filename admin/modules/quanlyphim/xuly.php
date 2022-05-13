<?php
	include '../../config.php';
	$tenphim = $_POST['tenphim'];
	$theloai = $_POST['theloai'];
	$daodien = $_POST['daodien'];
	$dienvien = $_POST['dienvien'];
	$noidung = $_POST['noidung'];
	$thoiluong = $_POST['thoiluong'];
	$dotuoi = $_POST['dotuoi'];
	$loaiphim = $_POST['loaiphim'];
	$trailer = $_POST['trailer'];

//xuly hinh anh
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
if(isset($_POST['themphim'])){
	//thêm
	$sql_them = "INSERT INTO phim(ten_phim,the_loai,dao_dien,dien_vien,noi_dung,thoi_luong,do_tuoi,loai_phim,img,trailer) 
	VALUE('".$tenphim."','".$theloai."','".$daodien."','".$dienvien."','".$noidung."','".$thoiluong."','".$dotuoi."','".$loaiphim."','".$hinhanh."','".$trailer."')";
	mysqli_query($conn,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location: ../../index.php?action=quanlyphim&query=them');
}elseif(isset($_POST['suaphim'])){
	//sửa
	if($hinhanh != ''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE phim SET ten_phim='".$tenphim."',the_loai='".$theloai."',dao_dien='".$daodien."',dien_vien='".$dienvien."',noi_dung='".$noidung."',thoi_luong='".$thoiluong."',do_tuoi='".$dotuoi."',loai_phim='".$loaiphim."',img='".$hinhanh."',trailer='".$trailer."' WHERE id_phim='$_GET[idphim]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM phim WHERE id_phim = '$_GET[idphim]' LIMIT 1";
		$query = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['img']);
		}
	}else{
		$sql_update = "UPDATE phim SET ten_phim='".$tenphim."',the_loai='".$theloai."',dao_dien='".$daodien."',dien_vien='".$dienvien."',noi_dung='".$noidung."',thoi_luong='".$thoiluong."',do_tuoi='".$dotuoi."',loai_phim='".$loaiphim."',img='".$hinhanh.",trailer='".$trailer."'' WHERE id_phim='$_GET[idphim]'";
	}
	mysqli_query($conn,$sql_update);
		header('Location:../../index.php?action=quanlyphim&query=them');
}else{
	//xóa
	$id=$_GET['idphim'];
	$sql = "SELECT * FROM phim WHERE id_phim = '$id' LIMIT 1";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['img']);
	}
	$sql_xoa = "DELETE FROM phim WHERE id_phim='".$id."'";
	mysqli_query($conn,$sql_xoa);
	header('Location:../../index.php?action=quanlyphim&query=them');
}

?>