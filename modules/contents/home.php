<link rel="stylesheet" href="././style css/home.css">
<?php
		$sql="SELECT * from phim order by id_phim desc";
        $run=$conn->query($sql);
?>
<div id="slider">
        <figure>
            <img src="images/ktpm.png" alt="">
            <img src="images/batman.png" alt="">
            <img src="images/doctorstrange2.png" alt="" >
            <img src="images/nguoilangnghe.png" alt="">
        </figure>
    </div>

    <!-- Booking Form -->
    <?php
       $sql_booking = "SELECT * FROM phim order by id_phim desc";
       $query_booking = mysqli_query($conn,$sql_booking);
    ?>
    <div class="booking-form">
        <div class="row-booking-form">
            <select class="form-select">
                <option selected>Rạp QNU</option>
                <!-- <option value="1">RẠP QNU</option> -->
            </select>
            <select class="form-select">
                <option value="0" selected>Phim</option>
                <?php while($row_booking = mysqli_fetch_array($query_booking)){
                ?>
                <option value="<?php echo $row_booking['id_phim']?>"><?php echo $row_booking['ten_phim'] ?></option>
                <?php 
                }
                ?>
            </select>
            <select class="form-select">
                <option selected>Ngày chiếu</option>
                <option value="1">Doctor Strange 2</option>
            </select>
            <select class="form-select">
                <option selected>Giờ chiếu</option>
                <option value="1">none</option>
            </select> 
        </div>
    </div>
    
    <!-- Top movie -->
    <section id="top-movie">
        <div class="top-movie-title">
            <h2>Phim Hot: <span style="color: rgb(255, 145, 0)">Tháng <?php echo date("m")?></span></h2>
        </div>
        <?php
            while($row = $run->fetch_array()){
        ?>
            <div class="row-movie-tabs">
                <div class="left-row">
                    <a href="index.php?page=dangchieu&query=xem&idphim=<?php echo $row['id_phim'] ?>"><img src="admin/modules/quanlyphim/uploads/<?php echo $row['img'] ?>" alt=""></a>
                    
                </div>
                <div class="right-row">
                    <h3 class="no-underline"><?php echo $row['ten_phim']?></h3>
                    <span class="title"><?php echo $row['the_loai']?></span>
                    <div class="time-time-red">
                        <p class="time"><?php echo $row['loai_phim']?></p>
                        <p class="time-red"><?php echo $row['do_tuoi']?></p>
                    </div>
                    <p class="desc"><b>Đạo diễn: </b><?php echo $row['dao_dien']?></p>
                    <p class="desc"><b>Diễn viên: </b><?php echo $row['dien_vien']?></p>
                    <p class="content"><b>Mô tả: </b><?php echo $row['noi_dung']?></p>
                    <a href="index.php?page=dangchieu&query=xem&idphim=<?php echo $row['id_phim'] ?>"><p class="time-red"><i class="fa-solid fa-ticket"></i> Đặt vé</p></a>
                </div>
            </div>
        <?php 
        } 
        ?>
    </section>