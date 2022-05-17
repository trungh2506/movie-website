<link rel="stylesheet" href="././style css/datve.css">
<?php 
    $idsuatchieu = $_GET['idsuatchieu'];
    $ngaychieu = $_GET['ngaychieu'];
    $sql_1 = "SELECT * from ghe, suat_chieu where hang = '1' and ghe.id_rap = suat_chieu.id_rap and suat_chieu.id_phim = '$_GET[idphim]' and suat_chieu.thoi_diem_bat_dau = '$_GET[suatchieu]'";
    $run_1 = $conn->query($sql_1);
    
    $sql_2 = "SELECT * from ghe, suat_chieu where hang = '2' and ghe.id_rap = suat_chieu.id_rap and suat_chieu.id_phim = '$_GET[idphim]' and suat_chieu.thoi_diem_bat_dau = '$_GET[suatchieu]'";
    $run_2 = $conn->query($sql_2);

    $sql_3 = "SELECT * from ghe, suat_chieu where hang = '3' and ghe.id_rap = suat_chieu.id_rap and suat_chieu.id_phim = '$_GET[idphim]' and suat_chieu.thoi_diem_bat_dau = '$_GET[suatchieu]'";
    $run_3 = $conn->query($sql_3);

    $sql_4 = "SELECT * from ghe, suat_chieu where hang = '4' and ghe.id_rap = suat_chieu.id_rap and suat_chieu.id_phim = '$_GET[idphim]' and suat_chieu.thoi_diem_bat_dau = '$_GET[suatchieu]'";
    $run_4 = $conn->query($sql_4);

    $sql_5 = "SELECT * from ghe, suat_chieu where hang = '5' and ghe.id_rap = suat_chieu.id_rap and suat_chieu.id_phim = '$_GET[idphim]' and suat_chieu.thoi_diem_bat_dau = '$_GET[suatchieu]'";
    $run_5 = $conn->query($sql_5);

?>
<div class="container-seat">
    <div class="top">
        <h2 style="color: #fff">Bước 1: Chọn ghế</h2>
    </div>
    <div class="bottom">
        <div class="list-seat">
            <div class="screen-thumb">
                <h4 class="title-screen" style="color: #fff">Màn hình</h4>
                <img src="http://pixner.net/boleto/demo/assets/images/movie/screen-thumb.png" alt="">
            </div>
    <table style="width:100%" border="0" style="border-collapse: collapse;">
        <thead>
    <tr>
        <th class="tg-0pky"></th>
        <th class="tg-0pky">1</th>
        <th class="tg-0pky">2</th>
        <th class="tg-0pky">3</th>
        <th class="tg-0pky">4</th>
        <th class="tg-0pky">5</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-0pky">1</td>
        <?php
            while($row_1 = mysqli_fetch_array($run_1)){?>
            <td><a href="index.php?page=datve&idphim=<?php echo $row_1['id_phim'] ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $row_1['thoi_diem_bat_dau']?>&idghe=<?php echo $row_1['id_ghe'] ?>&giave=<?php echo $row_1['gia_ve'] ?>" id="<?php echo $row_1['id_ghe']?>"><p style="display: inline-block"><img class="seat" src="https://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="" ></p></a></td>
        <?php    
        }
        ?>
    </tr>
    <tr>
        <td class="tg-0pky">2</td>
        <?php
            while($row_2 = mysqli_fetch_array($run_2)){?>
            <td><a href="index.php?page=datve&idphim=<?php echo $row_2['id_phim'] ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $row_2['thoi_diem_bat_dau']?>&idghe=<?php echo $row_2['id_ghe'] ?>&giave=<?php echo $row_2['gia_ve'] ?>" id="<?php echo $row_2['id_ghe']?>"><p style="display: inline-block"><img class="seat" src="https://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="" ></p></a></td>
        <?php    
        }
        ?>
    </tr>
    <tr>
        <td class="tg-0pky">3</td>
        <?php
            while($row_3 = mysqli_fetch_array($run_3)){?>
            <td><a href="index.php?page=datve&idphim=<?php echo $row_3['id_phim'] ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $row_3['thoi_diem_bat_dau']?>&idghe=<?php echo $row_3['id_ghe'] ?>&giave=<?php echo $row_3['gia_ve'] ?>" id="<?php echo $row_3['id_ghe']?>"><p style="display: inline-block"><img class="seat" src="https://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="" ></p></a></td>
        <?php    
        }
        ?>
    </tr>
    <tr>
        <td class="tg-0pky">4</td>
        <?php
            while($row_4 = mysqli_fetch_array($run_4)){?>
            <td><a href="index.php?page=datve&idphim=<?php echo $row_4['id_phim'] ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $row_4['thoi_diem_bat_dau']?>&idghe=<?php echo $row_4['id_ghe'] ?>&giave=<?php echo $row_4['gia_ve'] ?>" id="<?php echo $row_4['id_ghe']?>"><p style="display: inline-block"><img class="seat" src="https://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="" ></p></a></td>
        <?php    
        }
        ?>
    </tr>
    <tr>
        <td class="tg-0pky">5</td>
        <?php
            while($row_5 = mysqli_fetch_array($run_5)){?>
            <td><a href="index.php?page=datve&idphim=<?php echo $row_5['id_phim'] ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $row_5['thoi_diem_bat_dau']?>&idghe=<?php echo $row_5['id_ghe']?>&giave=<?php echo $row_5['gia_ve'] ?>" id="<?php echo $row_5['id_ghe']?>"><p style="display: inline-block"><img class="seat" src="https://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="" ></p></a></td>
        <?php    
        }
        ?>
    </tr>
    </tbody>
    </table>
    <?php 
        if(isset($_GET['idghe'])){?>
            <?php 
            $idghe = $_GET['idghe'];
            $idphim = $_GET['idphim'];
            $suatchieu = $_GET['suatchieu'];
            $giave = $_GET['giave'];
             ?>
        <div class="thongbao">
            <h1>Bạn đã chọn ghế: <?php echo "$idghe" ?></h1>
            <a href="index.php?page=datfood&idphim=<?php echo $idphim ?>&idsuatchieu=<?php echo $idsuatchieu ?>&ngaychieu=<?php echo $ngaychieu ?>&suatchieu=<?php echo $suatchieu?>&idghe=<?php echo $idghe ?>&giave=<?php echo $giave ?>" id="<?php echo $idghe ?>" ><p id="continue-button">Tiếp tục</p></a>
            <!-- #thêm vé -->
            <?php 
            $idkhach = $_SESSION['idkhach'];
            $tddv = date("h:i:sa");
            $tongtien = $_GET['giave'];


            // $sql_themve = "INSERT INTO dat_ve(id_suat_chieu,id_khach,thoi_diem_dat_ve,tong_tien) 
            // VALUE('".$idsuatchieu."','".$idkhach."','".$tddv."','".$tongtien."')";
            // $run_themve=$conn->query($sql_themve);

            // $sql_themchitietve = "INSERT INTO chi_tiet_ve(ma_ghe, thanh_tien) 
            // VALUE('".$idghe."','".$tongtien."')";
            // $run_themchitietve=$conn->query($sql_themchitietve);
            ?>
        </div>     
        <?php
        }
        ?>  
        </div>
    </div>
</div>
