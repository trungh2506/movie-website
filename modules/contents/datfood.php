<link rel="stylesheet" href="././style css/datfood.css">
<?php
    $idphim = $_GET["idphim"];
    $idsuatchieu = $_GET["idsuatchieu"];
    $ngaychieu = $_GET["ngaychieu"];
    $suatchieu = $_GET["suatchieu"];
    $idghe = $_GET["idghe"];
    $giave = $_GET["giave"];

    $sql_food = "SELECT * FROM fast_food";
	$query_food = mysqli_query($conn,$sql_food);
?>
<div class="container-food">
    <div class="top">
        <h2 style="color: #fff">Bước 2: Chọn thức ăn</h2>
    </div>
    <div class="bottom">
        <ul class="list-food">
            <?php while ($row_food = mysqli_fetch_array($query_food)){?>
            <li class="li-list-food">
                <div class="box-food">
                    <form action="" method="GET" enctype="multipart/form-data">
                    <img class="img-food" src="././images/fastfood/<?php echo $row_food['img']?>" alt="">
                    <h2><?php echo $row_food['ten_mon'] ?></h2>
                    <h3 class="price-food" name="giatien"><i class="fa-solid fa-dollar-sign"></i> <?php echo $row_food['gia']?> vnđ</h3>
                    <h4 class="description-food"><?php echo $row_food['mo_ta'] ?></h4>
                    <p><a href="index.php?page=datfood&idphim=<?php echo $idphim ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $suatchieu?>&idghe=<?php echo $idghe ?>&giave=<?php echo $giave ?>&idfood=<?php echo $row_food['id_food']?>&giafood=<?php echo $row_food['gia'] ?>"><input type="text" value="Thêm" class="btn-add" name=""></a></p>
                    </form>
                </div>
            </li> 
            <?php 
                } 
            ?>
        </ul>
        <?php
        if(isset($_GET['idfood'])){

            $idfood = $_GET['idfood'];
            $giafood = $_GET['giafood'];

            $tongtien = $_GET['giave'] + $_GET['giafood'];

            $_SESSION["idphim"] = $_GET["idphim"];
            $_SESSION["idsuatchieu"] = $_GET["idsuatchieu"];
            $_SESSION["giave"] = $_GET["giave"];
            $_SESSION["giafood"] = $_GET["giafood"];
            $_SESSION["idghe"] = $_GET["idghe"];
            $_SESSION["idfood"] = $_GET["idfood"];
            $_SESSION["tongtien"] = $tongtien;
            ?>
            <div class="thong-bao">
            <h1>Tổng tiền: <?php echo $tongtien ?> </h1>
            <a href="index.php?page=thanhtoan&idphim=<?php echo $idphim ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $suatchieu?>&idghe=<?php echo $idghe ?>&giave=<?php echo $giave ?>&idfood=<?php echo $idfood ?>&giafood=<?php echo $giafood?>" id="<?php echo $idghe ?>" ><p id="continue-button">Thanh toán</p></a>
            </div>
        <?php
         }
        ?>
    </div>
</div>
<?
