<div class="menu-bar">
        <a href="index.php"><p class="logo"><image src="images/logo.png" width="120" height="120"></image></p></a>
        <ul>
            <li id="home"><a href="index.php">Trang chủ</a></li>
            <li>
                <a href="#">Phim</a>
                <div class="dropdown-menu">
                    <ul>
                        <li id="dang-chieu" name="dang-chieu"><a href="index.php?page=dangchieu">Đang chiếu</a></li>
                        <li id="sap-chieu" name="sap-chieu"><a href="index.php?page=sapchieu">Sắp chiếu</a></li>
                    </ul>
                </div>
            </li>
            <li id="lich-chieu"><a href="index.php?page=lichchieu&ngaychieu=<?php echo date('Y-m-d')?>">Lịch chiếu</a></li>
            <li id="khuyen-mai"><a href="index.php?page=khuyenmai">Khuyến mãi</a></li>    
        </ul>
    </div>