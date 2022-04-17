<link rel="stylesheet" href="././style css/login.css">
<?php
	include('modules/config.php');
	session_start();
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select * from admin where username='$user' and password='$pass' limit 1";
		$query=$conn->query($sql);
		$nums=$query->num_rows;
		if($nums>0){
			$_SESSION['login']=$user;
			header('location:adminpage.php');
		}else{
			header('location:login.php');
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
                  <form action="login.php" method="post">
                    <h3 class="login-heading">Đăng nhập</h3>
                    <input type="text" id="username" name="username" placeholder="Email / Tên đăng nhập">
                    <input type="password" id="password" name="password" placeholder="Mật khẩu(*)">
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
