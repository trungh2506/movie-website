<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <title>Admin Control Panel</title>
        <link rel="stylesheet" href=".././style css/index.css">
        <link rel="shortcut icon" href=".././images/logo.png"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	
</head>
	<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location:login.php');
	} 
	?>
<body>
	<div class="wrapper">
	<?php 
	include("./config.php");	
        include("modules/header.php");
        ?>
        <p style="font-size: 20px; text-align: right; color: red;">Chào ADMIN: <?php echo $_SESSION['login']?></p>
        <?php
        include("modules/menu.php");
        include("modules/content.php");
    ?>
        
    <?php
	include(".././modules/footer.php");
	?>
	</div>

</body>
</html>