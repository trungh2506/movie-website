<link rel="stylesheet" href="././style css/lienhe.css">

<div class="container-contact">
    <div class="left-row">
        <div class="info-box">
            <h3 class="title"><strong>Thông tin</strong></h3>
            <ul>
                <li><span>Hotline: </span>19000008</li>
                <li><span>Trụ sở: </span>tòa nhà 15 tầng trường Đại Học Quy Nhơn</li>
                <li><span>Web: </span><a href="">qnu-cinema.com</a></li>
                <li><span>E-mail: </span><a href="">trungvipqn12@gmail.com</a></li>
            </ul>
        </div>
    </div>
    <div class="right-row">
        <div class="email-box">
            <h3 class="title">Gửi liên hệ</h3>
            <form action="" class="form-email" method="POST" enctype="multipart/form-data">
                <ul>
                    <li><input type="text" placeholder="Họ tên" name = "hoten"></li>
                    <li><input type="text" placeholder="Your email@gmail.com" name="youremail"></li>
                    <li><input type="text" placeholder="SĐT" name="sdt"></li>
                    <li><input class="input-area" type="text" placeholder="Nội dung cần liên hệ" name="noidung"></li>
                    <li><input type="submit" value="Gửi" name="email-submit"></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['email-submit'])){

    $to = "trungvipqn12@gmail.com";
    $subject = "Test Email";
    $message = $_POST['noidung'];
    $from = $_POST['youremail'];
    $headers = "From:" . $from;
    
    mail($to, $subject, $message, $from, $headers);
    echo "<script type='text/javascript'>alert('Gửi email thành công');</script>";
    }
?>