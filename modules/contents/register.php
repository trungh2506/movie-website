<link rel="stylesheet" href="././style css/register.css">
<?php   
	if(isset($_POST['confirm-register'])){
        $hoten = $_POST['fullname'];
		$tentk = $_POST['username'];
		$pass = $_POST['pass'];
        $rpass = $_POST['re-pass'];
		$diachi = $_POST['address'];
        $cmnd = $_POST['CMND'];
        $ngaysinh = $_POST['birthday'];
        $sdt = $_POST['phonenumber'];
        $email = $_POST['email'];
        $gioitinh = $_POST['gender'];

        if($pass != $rpass){
            echo '<h2 style="color: red; text-align: center; background-color: #ff9100;">Vui lòng xác nhận lại mật khẩu! </h2>';
        }
        else{
		$sql = "insert into tk_khach(ho_ten, ten_tk, mat_khau, dia_chi, cmnd, ngay_sinh, sdt, email, gioi_tinh)
        values ('$hoten','$tentk', '$pass','$diachi', '$cmnd', '$ngaysinh', '$sdt', '$email', '$gioitinh')";
		$query = $conn->query($sql);

		if($query){
            $message = "Đăng ký thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
			// header('location:index.php?xem=thongbao');
		// }	// header('location:index.php?xem=dangky');
        }
        else{
            header('location:index.php?page=register');
        }
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
                            <input type="text" id="fullname" name="fullname" placeholder="Họ & tên(*)" required>
                            <input type="text" id="address" name="address" placeholder="Địa chỉ(*)" required>
                            <input type="text" id="CMND" name="CMND" placeholder="CMND(*)" required>
                            <input type="text" id="birthday" name="birthday" placeholder="Ngày sinh">
                            <input type="text" id="phonenumber" name="phonenumber" placeholder="Điện thoại(*)" required>
                        </div>
                        <div class="col-register-left">
                            <input type="text" id="email" name="email" placeholder="Email(*)" required>
                            <input type="text" id="username" name="username" placeholder="Email / Tên đăng nhập(*)" required>
                            <input type="password" id="pass" name="pass" placeholder="Mật khẩu(*)" required>
                            <input type="password" id="re-pass" name="re-pass" placeholder="Xác nhận mật khẩu(*)" required>
                            <div class="gender">
                               <input type="radio" id="gender" name="gender" value="nam">
                               <label for="gender">Nam</label>
                               <input type="radio" id="gender" name="gender" value="nữ" >
                               <label for="gender">Nữ</label>
                            </div>
                            <input type="submit" id="confirm-register" name="confirm-register" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>