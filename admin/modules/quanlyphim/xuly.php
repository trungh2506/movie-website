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

//xuly hinh anh
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
if(isset($_POST['themphim'])){

// $tinhtrang = $_POST['tinhtrang'];
	//thêm
	$sql_them = "INSERT INTO phim(ten_phim,the_loai,dao_dien,dien_vien,noi_dung,thoi_luong,do_tuoi,loai_phim,img) 
	VALUE('".$tenphim."','".$theloai."','".$daodien."','".$dienvien."','".$noidung."','".$thoiluong."','".$dotuoi."','".$loaiphim."','".$hinhanh."')";
	mysqli_query($conn,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location: ../../index.php?action=quanlyphim&query=them');
}elseif(isset($_POST['suaphim'])){
	//sửa
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
	}else{
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysp&query=them');
}else{
	$id=$_GET['id_phim'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysp&query=them');
}

?>