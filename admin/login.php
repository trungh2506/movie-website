<link rel="stylesheet" href="./style css/login.css">
<?php
    session_start();
    include "./config.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql="select * from admin where user_name='$username' and password='$password' limit 1";
		$query=$conn->query($sql);
        $nums=$query->num_rows;
        if($nums > 0){
            $row = mysqli_fetch_array($query);
            $message = "Đăng nhập thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $_SESSION['login'] = $username;
            header("Location: index.php");
        }else{
            echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>ADMIN LOGIN</title>
</head>
<body>
    <div class="container"> 
        <h3>ADMIN LOGIN</h3>
        <form action="" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" name="login" value="Login"><a href=""></a>
        </form>
    </div>
</body>
</html>