<?php
  session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Rạp phim QNU</title>
        <link rel="stylesheet" href="style css/index.css">
        <link rel="shortcut icon" href="images/logo.png"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <style>
      html{
        background-image: url('images/background3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
} 
</style>
    <body>
		<div class="container">
		<?php
      include ('modules/config.php');
      include ('modules/header.php');
			include ('modules/menu.php');
      include ('modules/content.php');
			include ('modules/footer.php');
		?>
		</div>
    </body>
</html>