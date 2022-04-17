<div class="content">
    <?php
    	if(isset($_GET['page'])){
			$tam=$_GET['page'];
		}else{
			$tam='';
		}if($tam == 'register'){
			include ('contents/register.php');
		}if($tam == 'home'){
			include ('contents/home.php');
		}elseif($tam=='login'){
			include('login.php');
		}elseif($tam=='dangchieu'){
			include('contents/dangchieu.php');
		}elseif($tam=='sapchieu'){
			include('contents/sapchieu.php');
		}elseif($tam=='lichchieu'){
			include('contents/lichchieu.php');
		}elseif($tam=='khuyenmai'){
			include('contents/khuyenmai.php');
		};
	?>
</div>
<div class="clear"></div>