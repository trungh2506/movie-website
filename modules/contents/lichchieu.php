<link rel="stylesheet" href="././style css/lichchieu.css">
<?php 
    $sql_lichchieu = "SELECT * FROM phim,suat_chieu where phim.id_phim = suat_chieu.id_phim and suat_chieu.ngay_chieu = '$_GET[ngaychieu]'";
	$query_lichchieu = mysqli_query($conn,$sql_lichchieu);
    
?>
<section>
    <div class="container-schedule">
        <div class="container-schedule-intro">
            <div class="intro">
                <div class="intro-box">
                 <h1>RẠP PHIM ĐẠI HỌC QUY NHƠN</h1>
                 <p>1900 1080</p>
                 <p>TRUNG TÂM GIẢI TRÍ RẠP PHIM ĐẠI HỌC QUY NHƠN TẦNG 16 TÒA NHÀ 15 TẦNG ĐẠI HỌC QUY NHƠN, TỈNH 
                    BÌNH ĐỊNH
                 </p>
                </div>
            </div>
            <div style="" class="times">
             <ul class="times-items">
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php echo date("Y-m-d")?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php echo date("l") ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                            <?php echo date("Y-m-d") ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                    <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("tomorrow"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                         $d=strtotime("tomorrow");
                         echo date("l", $d);
                         ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                        <?php
                        $d=strtotime("tomorrow");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("+2 day"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                        $d=strtotime("+2 day");
                        echo date("l", $d); 
                        ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                         <?php
                        $d=strtotime("+2 day");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("+3 day"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                        $d=strtotime("+3 day");
                        echo date("l", $d); 
                        ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                         <?php
                        $d=strtotime("+3 day");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("+4 day"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                        $d=strtotime("+4 day");
                        echo date("l", $d); 
                        ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                         <?php
                        $d=strtotime("+4 day");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("+5 day"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                        $d=strtotime("+5 day");
                        echo date("l", $d); 
                        ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                         <?php
                        $d=strtotime("+5 day");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
                 <li class="days">
                     <a href="index.php?page=lichchieu&ngaychieu=<?php $d=strtotime("+6 day"); echo date("Y-m-d",$d) ?>">
                         <p style="width: 100%; text-align: center; color: rgb(255, 145, 0); font-weight: 600; font-size: 20px ">
                         <?php
                        $d=strtotime("+6 day");
                        echo date("l", $d); 
                        ?>
                         </p>
                         <p style="width: 100%; text-align: center;padding-top:5px; color: #2b2b31; ">
                         <?php
                        $d=strtotime("+6 day");
                        echo date("Y-m-d", $d); 
                        ?></p>
                         <div class="days-border"></div>
                     </a>
                 </li>
             </ul>
             </div>
             <?php while($row_lichchieu = mysqli_fetch_array($query_lichchieu)){
            ?>
             <div class="container-movies">
                <div class="container-single-movie">
                     <div class="single-movie-list">
                         <div class="single-movie">
                             
                             <div class="single-movie-left">
                                <a href=""></a>
                                <img style="border-radius: 10px" width="300px" height="450px" src="admin/modules/quanlyphim/uploads/<?php echo $row_lichchieu['img'] ?>" alt="top movie">
                             </div>
                             <div class="single-movie-right">
                                 <h3>
                                     <a href="index.php?page=dangchieu&query=xem&idphim=<?php echo $row_lichchieu['id_phim'] ?>"><?php echo $row_lichchieu['ten_phim']?></a>
                                 </h3>
                                 <ul>
                                     <li class="rating"><?php echo $row_lichchieu['loai_phim']?></li>
                                     <li class="rating"><?php echo $row_lichchieu['do_tuoi']?></li>
                                 </ul>
                                 <p class="list-gender"><?php echo $row_lichchieu['the_loai']?></p>
                                 <div class="movie-info">
                                     <p>
                                        Đạo diễn: 
                                        <span><?php echo $row_lichchieu['dao_dien'] ?></span>
                                     </p>
                                     <p>
                                         Diễn viên:
                                         <span><?php echo $row_lichchieu['dien_vien'] ?></span>
                                     </p>
                                     <br>
                                     <span style=""class="details">
                                    <?php echo $row_lichchieu['noi_dung']?>
                                     </span>
                                 </div>
                                 <div class="hours">
                                     <a class="hours-item" href="index.php?page=datve&idphim=<?php echo $row_lichchieu['id_phim'] ?>&idsuatchieu=<?php echo $row_lichchieu['id_suat_chieu']?>&ngaychieu=<?php echo $row_lichchieu['ngay_chieu']?>&suatchieu=<?php echo $row_lichchieu['thoi_diem_bat_dau'] ?>" style="color: #ffff; display:inline-flex; margin-bottom: 10px">
                                        <?php echo $row_lichchieu['thoi_diem_bat_dau']?>
                                     </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php 
            } 
            ?>
             </div>
</section> 