<link rel="stylesheet" href="./style css/header.css">
<h3 class="title_admin" style="text-align: center; font-size: 50px">QUẢN LÝ RẠP PHIM QNU</h3>
<?php
	if(isset($_GET['logout'])&&$_GET['logout']==1){
		unset($_SESSION['login']);
		header('Location:login.php');
	}
?>
<p class="btn-member"><a href="index.php?logout=1"><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng Xuất</a> <?php if(isset($_SESSION['login'])){
		// echo $_SESSION['login'];

	} ?></a></p>