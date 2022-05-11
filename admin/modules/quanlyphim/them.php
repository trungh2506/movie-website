
<p style = "font-size:30px; text-align:center;">Thêm phim</p>
    <table border="1" width="100%" style="border-collapse: collapse;">
        <form method="POST" action="./modules/quanlyphim/xuly.php" enctype="multipart/form-data">
                    <tr>
                        <td>Tên phim</td>
                        <td><input type="text" name="tenphim"></td>
                     </tr>
                      <tr>
                         <td>Thể loại</td>
                         <td><input type="text" name="theloai"></td>
                     </tr>
                     <tr>
                         <td>Đạo diễn</td>
                         <td><input type="text" name="daodien"></td>
                     </tr>
                     <tr>
                         <td>Diễn viên</td>
                         <td><textarea rows="10" name="dienvien" style="resize: none"></textarea></td>
                     </tr>
                      <tr>
                         <td>Nội dung</td>
                         <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
                     </tr>
                     <tr>
                         <td>Thời lượng</td>
                         <td><input type="text" name="thoiluong"></td>
                     </tr>
                      <tr>
                         <td>Độ tuổi</td>
                         <td><input type="text" name="dotuoi"></td>
                     </tr>
                     <tr>
                        <td>Loại phim</td>
                        <td><input type="text" name="loaiphim"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="file" name="hinhanh"></td>
                    </tr>
                    <tr>
                       <td colspan="2"><input style="height: 50px; width: 100px; padding: 5px;" type="submit" name="themphim" value="Thêm phim"></td>
                    </tr>
        </form>
    </table>