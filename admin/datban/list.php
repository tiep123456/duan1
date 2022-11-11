<!-- nguyen duc huy -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh Sách Đặt Bàn
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>   
                <tr>
                   
                    <th>Số Bàn</th>
                    <th>Họ tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Giờ</th>
                    <th>Nội Dung</th>
                    <th>Mã Khách hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <?php
            foreach ($list_db as $datban) {
                extract($datban);
               
                echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_ban . '</td>
                    <td>' . $ten . '</td>
                    <td>' . $sdt . '</td>
                    <td>' . $gio_dat . '</td>
                    <td>' . $yeu_cau. '</td>
                    <td>' . $id_sanpham . '</td>
                    <td> <a href="' . $xoabl . '"><input type="button" value="Xoá"></a></td>
                </tr>
                    ';
            }
            ?>
        </table>
        <div class="select">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
        </div>
    </div>
</div>