<div class="clear"></div>
<div class="main">
	<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				// quản lý danh mục
				if($tam=='quanlyphim' && $query=='them'){
					include("modules/quanlyphim/them.php");
					include("modules/quanlyphim/lietke.php");
				}
				// }elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
				// 	include("modules/quanlydanhmucsp/sua.php");
				// // quản lý sản phẩm
				// }elseif ($tam=='quanlysp' && $query=='them') {
				// 	include("modules/quanlysp/them.php");
				// 	include("modules/quanlysp/lietke.php");
				// }elseif($tam=='quanlysp' && $query=='sua'){
				// 	include("modules/quanlysp/sua.php");

				// }elseif($tam=='quanlydonhang' && $query=='lietke'){
				// 	include("modules/quanlydonhang/lietke.php");

				// }elseif($tam=='donhang' && $query=='xemdonhang'){
				// 	include("modules/quanlydonhang/xemdonhang.php");

				// }elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
				// 	include("modules/quanlydanhmucbaiviet/them.php");
				// 	include("modules/quanlydanhmucbaiviet/lietke.php");

				// }elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
				// 	include("modules/quanlydanhmucbaiviet/sua.php");
					
				// }elseif ($tam=='quanlybaiviet' && $query=='them') {
				// 	include("modules/quanlybaiviet/them.php");
				// 	include("modules/quanlybaiviet/lietke.php");

				// }elseif ($tam=='quanlybaiviet' && $query=='sua') {
				// 	include("modules/quanlybaiviet/sua.php");
				// }elseif($tam=='quanlysp' && $query=='sua'){
				// 	include("modules/quanlybaiviet/sua.php");
					
				// }else{
				// 	include("modules/dashboard.php");
				// }
	?> 
	
</div>