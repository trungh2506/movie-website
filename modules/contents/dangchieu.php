<link rel="stylesheet" href="././style css/dangchieu.css">
<?php
		    $sql="select * from phim order by id_phim desc";
            $run=$conn->query($sql);
?>
<div class="movie-list-area">
        <div class="container-movie-list-area">
            <div class="info-film">
                <?php
                while($row = $run->fetch_array()){
                ?>
                <a href="#"><img src="images/<?php echo $row['img']?>" alt=""></a>
                <h4 class="title-film"><?php echo $row['ten_phim']?></h4>
                <p class="category"><?php echo $row['the_loai']?></p>
                <?php
                }
                ?>
            </div>
        </div>
</div>