<p style = "font-size:30px; text-align:center;">Thêm thành viên</p>
    <table border="1" width="100%" style="border-collapse: collapse;">
        <form method="POST" action="./modules/quanlythanhvien/xuly.php" enctype="multipart/form-data">
                    <tr>
                        <td>Họ tên</td>
                        <td><input type="text" name="hoten"></td>
                     </tr>
                      <tr>
                         <td>Tên tài khoản</td>
                         <td><input type="text" name="tentk"></td>
                     </tr>
                     <tr>
                         <td>Mật khẩu</td>
                         <td><input type="text" name="matkhau"></td>
                     </tr>
                     <tr>
                         <td>Địa chỉ</td>
                         <td><input type="text" name="diachi"></td>
                     </tr>
                      <tr>
                         <td>Ngày sinh</td>
                         <td><input type="text" name="ngaysinh"></td>
                     </tr>
                     <tr>
                         <td>Số điện thoại</td>
                         <td><input type="text" name="sdt"></td>
                     </tr>
                      <tr>
                         <td>Email</td>
                         <td><input type="text" name="email"></td>
                     </tr>
                     <tr>
                        <td>Giới tính</td>
                        <td><input type="text" name="gioitinh"></td>
                    </tr>
                    
                    <tr>
                       <td colspan="2"><input style="height: 50px; width: 100px; padding: 5px;" type="submit" name="themthanhvien" value="Thêm thành viên"></td>
                    </tr>
        </form>
    </table>