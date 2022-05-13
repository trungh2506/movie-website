<link rel="stylesheet" href="././style css/dangchieu.css">
<?php
		    $sql="select * from phim order by id_phim desc";
            $run=$conn->query($sql);
?>
<?php
    if(isset($_GET['query'])){
        $query = $_GET['query'];
    }
    else{
        $query = '';
    }
    if($query =='xem'){
        include 'modules/contents/chitietphim.php';
    }

?>
<div class="movie-list-area">
        <div class="container-movie-list-area">
            <?php
                while($row = $run->fetch_array()){
                ?>
                <div class="info-film">
                <a href="index.php?page=dangchieu&query=xem&idphim=<?php echo $row['id_phim'] ?>"><img src="admin/modules/quanlyphim/uploads/<?php echo $row['img']?>" alt="" style="width: 600px; height: 900px"></a>
                <h4 class="title-film"><?php echo $row['ten_phim']?></h4>
                <p class="category"><?php echo $row['the_loai']?></p>
            </div>
            <?php
                }
            ?>
        </div>
</div>
