<link rel="stylesheet" href="././style css/home.css">
<?php
		    $sql="select * from phim order by id_phim desc";
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
    <div class="booking-form">
        <div class="row-booking-form">
            <select class="form-select">
                <option selected>RẠP QNU</option>
                <!-- <option value="1">RẠP QNU</option> -->
            </select>
            <select class="form-select">
                <option selected>Phim</option>
                <option value="1">Doctor Strange 2</option>
            </select>
            <select class="form-select">
                <option selected>Ngày chiếu</option>
                <option value="1">Doctor Strange 2</option>
            </select>
            <select class="form-select">
                <option selected>Lịch chiếu</option>
                <option value="1">none</option>
            </select> 
        </div>
    </div>
    <!-- Top movie -->
    <section id="top-movie">
        <div class="top-movie-title">
            <h2>Phim Hot: <span style="color: rgb(255, 145, 0)">Tháng 4</span></h2>
        </div>
        <?php
            while($row = $run->fetch_array()){
        ?>
            <div class="row-movie-tabs">
                <div class="left-row">
                    <a href="#"></a>
                    <img src="images/<?php echo $row['img'] ?>" alt="">
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
                    <a href="#"><p class="time-red"><i class="fa-solid fa-ticket"></i> Đặt vé</p></a>
                </div>
            </div>
        <?php 
        } 
        ?>
    </section>
    