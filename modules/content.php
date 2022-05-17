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
				if(isset($_GET['query'])){
					$query = $_GET['query'];
				}
				else{
					$query = '';
				}
				if($query =='xem'){
					include 'modules/contents/chitietphim.php';
				}
				else{
					include('contents/dangchieu.php');
				}	
		}elseif($tam=='sapchieu'){
			include('contents/sapchieu.php');
		}elseif($tam=='lichchieu'){
			include('contents/lichchieu.php');
		}elseif($tam=='khuyenmai'){
			include('contents/khuyenmai.php');
		}elseif($tam=='datve'){
			if(isset($_SESSION['confirm-login'])){
				include('contents/datve.php');
			}
			else{
			include('contents/login.php');
			}
		}elseif($tam=='datfood'){
			include('contents/datfood.php');
		}elseif($tam=='thanhtoan'){
			include('contents/thanhtoan.php');
		}
		else{
			include('contents/home.php');
		}
	?>
</div>
<div class="clear"></div>