<link rel="stylesheet" href="././style css/register.css">
<?php   
	if(isset($_POST['confirm-register'])){
		$tenkhach = $_POST['username'];
		$pass = $_POST['pass'];
		$diachi = $_POST['address'];
        $cmnd = $_POST['CMND'];
        $ngaysinh = $_POST['birthday'];
        $sdt = $_POST['phonenumber'];
        $email = $_POST['email'];
        $gioitinh = $_POST['gender'];

		$sql = "insert into tk_khach(ten_khach, mat_khau, dia_chi, cmnd, ngay_sinh, sdt, email, gioi_tinh)
        values ('$tenkhach', '$pass','$diachi', '$cmnd', '$ngaysinh', '$sdt', '$email', '$gioitinh')";
		$query = $conn->query($sql);
		if($query){
            $message = "Đăng ký thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
			// header('location:index.php?xem=thongbao');
		// }	// header('location:index.php?xem=dangky');
    }
}
?>

<div class="container-register">
        <div class="register-area">
            <div class="row-register-left">
                <img src="images/logo.png" class="logo-register">
                <p class="register-title">Đăng ký tài khoản thành<br> viên và nhận nhiều ưu đãi!</p>
            </div>
            <div class="row-register-right">
                    <div class="register-heading">
                        <h3 style="font-size: 30px">Thông tin tài khoản</h3>
                    </div>
                <div class="form-register">
                    <form action="index.php?page=register" method="POST">
                        <div class="col-register-right">
                            <input type="text" id="fullname" name="fullname" placeholder="Họ & tên(*)">
                            <input type="text" id="address" name="address" placeholder="Địa chỉ(*)">
                            <input type="text" id="CMND" name="CMND" placeholder="CMND(*)">
                            <input type="text" id="birthday" name="birthday" placeholder="Ngày sinh">
                            <input type="text" id="phonenumber" name="phonenumber" placeholder="Điện thoại(*)">
                        </div>
                        <div class="col-register-left">
                            <input type="text" id="email" name="email" placeholder="Email(*)">
                            <input type="text" id="username" name="username" placeholder="Email / Tên đăng nhập(*)">
                            <input type="password" id="pass" name="pass" placeholder="Mật khẩu(*)">
                            <input type="password" id="re-pass" name="re-pass" placeholder="Nhập lại mật khẩu(*)">
                            <div class="gender">
                               <input type="radio" id="gender" name="gender">
                               <label for="gender">Nam</label>
                               <input type="radio" id="gender" name="gender">
                               <label for="gender">Nữ</label>
                            </div>
                            <input type="submit" id="confirm-register" name="confirm-register" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>