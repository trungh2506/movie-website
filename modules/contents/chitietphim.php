
<link rel="stylesheet" href="././style css/chitietphim.css">
<?php
    // include '../../modules/config.php';
    $sql_chitiet = "SELECT * FROM phim WHERE id_phim='$_GET[idphim]' LIMIT 1";
	$query_chitiet = mysqli_query($conn,$sql_chitiet);
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
                    <a href="<?php echo $row_chitiet['trailer']?>" class="fancybox.iframe amy-fancybox play-video">
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
        <div class="trailer-area">
            <iframe width="560" height="315" src="<?php echo $row_chitiet['trailer']?>" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        </div>
      </div>   
  </div>
  <?php
} 
?>