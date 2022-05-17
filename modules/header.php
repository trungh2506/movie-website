<header>
    <div class="header-area">
            <!-- Header Top Area Start -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-3 col-sm-12">
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7-col-md-9-col-sm-12">
                            <div class="header-top-menu">
                                <ul>
                                <?php
                        if(isset($_SESSION['confirm-login'])){
                        ?>
                        <h1 role="presentation" style="color: white; font-size: 20px; padding: 5px;"><a href="#" style="color: white;">Chào <?php echo $_SESSION['confirm-login']?>!</a></h1>
                        <li role="presentation" class="btn-member" name="logout"><a href=./modules/contents/logout.php><i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng Xuất</a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li>
                            <a href="index.php?page=login" class="btn-member" name="login"><i class="fa-solid fa-user"></i>  Đăng nhập</i></a></li>
                        <li>
                            <a href="index.php?page=register" class="btn-member" name="register"><i class="fa-solid fa-pen"></i>  Đăng ký</a></li>
                        <?php
                        }
                        ?>   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     