
<link rel="stylesheet" href="././style css/chitietphim.css">
<?php
    //  include '../../modules/config.php';
    $sql_chitiet = "SELECT * FROM phim WHERE id_phim='$_GET[idphim]' LIMIT 1";
	$query_chitiet = mysqli_query($conn,$sql_chitiet);
    

    $sql_suatchieu = "SELECT * FROM phim,suat_chieu WHERE suat_chieu.id_phim = phim.id_phim and phim.id_phim='$_GET[idphim]'";
	$query_suatchieu = mysqli_query($conn,$sql_suatchieu);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
  <div class="movie-details">
      <div class="container-details">
          <div class="img-details">
              <div class="details-banner">
                <img width="260" height="387" src="admin/modules/quanlyphim/uploads/<?php echo $row_chitiet['img']?>">
              </div>   
          </div>
          <div class="info-details">
              <div class="details-banner-info">
                <h3 class="title-details"><?php echo $row_chitiet['ten_phim']?></h3>
                <p class="c13"><?php echo $row_chitiet['do_tuoi']?></p>
                <p class="details-genre">
                    <?php echo $row_chitiet['the_loai']?>
                    <span><?php echo $row_chitiet['loai_phim'] ?></span>
                </p>  
                <a herf="#" class="trailer-details">
                    <a style="color: rgb(255, 145, 0);" href="<?php echo $row_chitiet['trailer']?>" class="fancybox.iframe amy-fancybox play-video">
                        <i aria-hidden="true" class="fa fa-play"></i>Trailer
                    </a>
                </a>
                <ul>
                  <li><b>Đạo diễn</b> : <?php echo $row_chitiet['dao_dien'] ?></li>
                  <li><b>Ngày chiếu</b> : 25/03/2022</li>
                  <li><b>Diễn viên</b> : <?php echo $row_chitiet['dien_vien'] ?></li>
                  <li><b>Thời lượng</b> : <?php echo $row_chitiet['thoi_luong']?></li>
                  </ul>
                  <div class="movie-content">
                      <div class="tab-body">
                          <b>Nội dung phim:</b>
                          <p><?php echo $row_chitiet['noi_dung'] ?></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>  
      <div class="trailer-area">
            <iframe width="560" height="315" src="<?php echo $row_chitiet['trailer']?>" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        </div> 
  </div>
  <?php
}
?>
  <div class="movie-calendar" style="padding: 10px; background-color: #E6E7E9;">
    <h2 style="text-align: center;text-transform: uppercase; text-decoration: underline; font-weight: 500; padding: 10px">LỊCH CHIẾU</h2>
    <h2 style="color:rgb(255, 145, 0); font-weight: 500; border: 2px solid rgb(255, 145, 0); padding: 10px;margin-top: 20px; margin-bottom: 20px">RẠP PHIM QNU 
        <br>
        <small style="color: black;">Trung tâm giải trí rạp phim đại học Quy Nhơn tầng 16 tòa nhà 15 tầng đại học Quy Nhơn, tỉnh Bình Định    </small>
    </h2>
    <?php
    while($row_suatchieu = mysqli_fetch_array($query_suatchieu)){ 
    ?>
    <div class="time" style="display: flex; background-color: #e6e7e9;">
        <div class="time-left">
            <span class="time" style="margin-right: 10px; border-radius: 5px; background: #444444;width: 200px; height: 50px; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px; color: #fff; padding: 5px ">
        <?php echo $row_suatchieu['ngay_chieu'] ?></span>
        </div>
        <div class="time-right">
            <a href="index.php?page=datve&idphim=<?php echo $row_suatchieu['id_phim'] ?>&idsuatchieu=<?php echo $row_suatchieu['id_suat_chieu']?>&ngaychieu=<?php echo $row_suatchieu['ngay_chieu']?>&suatchieu=<?php echo $row_suatchieu['thoi_diem_bat_dau'] ?>"><span class="time-items" style="border-radius: 5px; background:rgb(255, 145, 0); padding: 5px; color: #fff; margin-right: 50px"><?php echo $row_suatchieu['thoi_diem_bat_dau']?></span></a>
        
        </div> 
        <?php
        }
        ?>
        </div>    
  </div>

