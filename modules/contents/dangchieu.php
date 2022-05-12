<link rel="stylesheet" href="././style css/dangchieu.css">
<?php
		    $sql="select * from phim order by id_phim desc";
            $run=$conn->query($sql);
?>
<div class="movie-list-area">
        <div class="container-movie-list-area">
            <?php
                while($row = $run->fetch_array()){
                ?>
                <div class="info-film">
                <a href="#"><img src="admin/modules/quanlyphim/uploads/<?php echo $row['img']?>" alt="" style="width: 600px; height: 900px"></a>
                <h4 class="title-film"><?php echo $row['ten_phim']?></h4>
                <p class="category"><?php echo $row['the_loai']?></p>
            </div>
            <?php
                }
            ?>
        </div>
</div>