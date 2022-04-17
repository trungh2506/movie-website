<link rel="stylesheet" href="././style css/login.css">
<?php
	if(isset($_POST['confirm-login'])){
		$tentk=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="select * from tk_khach where ten_tk='$tentk' and mat_khau='$pass' limit 1";
		$query=$conn->query($sql);
		$nums=$query->num_rows;
		if($nums>0){
            $row = mysqli_fetch_array($query);
			// header('location:adminpage.php');
            $message = "Đăng nhập thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $_SESSION["confirm-login"]=$tentk;
            $_SESSION["username"] = $row['ten_tk'];
			$_SESSION["hoten"] = $row['ho_ten'];
            header('Location: ./index.php');
		}else{
			// header('location:login.php');
            echo '<h2 style="color: red; text-align: center; background-color: #ff9100;">Tài khoản hoặc mật khẩu không đúng! </h2>';
		}
	}
?>
<div class="container-login">
        <div class="login-area">
            <div class="row-login-left">
                <img src="images/logo.png" class="logo-login" id="logo-login">
                <p class="login-title">Đăng nhập với tài khoản <br>của bạn!</p>
            </div>
            <div class="row-login-right">
                <div class="form-login">
                  <form action="" method="post">
                    <h3 class="login-heading">Đăng nhập</h3>
                    <input type="text" id="username" name="username" placeholder="Email / Tên đăng nhập" required>
                    <input type="password" id="password" name="pass" placeholder="Mật khẩu(*)" required> 
                    <ul class="forgot-password">
                        <li><a href="index.php?page=register">Đăng ký /</a></li>
                        <li><a href="#">Quên mật khẩu</a></li>
                    </ul>
                    <a href="#"><input type="submit" id="confirm-login" name="confirm-login" value="Đăng nhập"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
