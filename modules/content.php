<div class="content">
    <?php
    	if(isset($_GET['page'])){
			$tam=$_GET['page'];
		}else{
			$tam='';
		}if($tam == 'register'){
			include ('contents/register.php');
		}elseif($tam == 'home'){
			include ('contents/home.php');
		}elseif($tam=='login'){
			include('contents/login.php');
		}elseif($tam=='dangchieu'){
			include('contents/dangchieu.php');
		}elseif($tam=='sapchieu'){
			include('contents/sapchieu.php');
		}elseif($tam=='lichchieu'){
			include('contents/lichchieu.php');
		}elseif($tam=='khuyenmai'){
			include('contents/khuyenmai.php');
		}
		else{
			include('contents/home.php');
		}
	?>
</div>
<div class="clear"></div>