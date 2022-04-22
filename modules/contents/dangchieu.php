<link rel="stylesheet" href="././style css/dangchieu.css">
<?php
        if(isset($_POST['dang-chieu'])){
		    $sql="select * from phim order by id_phim desc";
            $query=$conn->query($sql);
            $nums=$query->num_rows;
        }
?>
<div class="movie-list-area">
        <div class="container-movie-list-area">
            <div class="info-film">
                <a href="#">
                <img src="images/doctor.jpg" alt=""></a>
                <h4 class="title-film">Doctor Strange 2</h4>
                <p class="category">Hành động</p>
            </div>
        </div>
</div>
        
      