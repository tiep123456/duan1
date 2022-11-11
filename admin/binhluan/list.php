<!-- nguyen duc huy -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh Sách Bình Luận
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>   
                <tr>
                    <th></th>
                    <th>Mã bình luận</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Nội dung bình luận</th>
                    <th>Ngày</th>
                    <th>Mã sản phẩm</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $xoabl = "index.php?act=xoabl&id=" . $id_binhluan;
                echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_binhluan . '</td>
                    <td>' . $ten . '</td>
                    <td>' . $email . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $ngay . '</td>
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