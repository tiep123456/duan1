<!-- nguyenthihuyentrang -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh Sách Sản Phảm
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th></th>
                    <th>Mã sp</th>
                    <th>Tên sp</th>
                    <th>Trạng thái</th>
                    <th>Hình sp</th>
                    <th>Hình chi tiết</th>
                    <th>Giá sp</th>
                    <th>Giá sale</th>
                    <th>Chi tiết sp</th>
                    <th>Lượt xem</th>
                    <th>Mã loại sp</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasanpham&id_sanpham=" . $id_sanpham;
                $xoasp = "index.php?act=xoasanpham&id_sanpham=" . $id_sanpham;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $img = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $img = "không có hình";
                }
                $hinhpath = "../upload/" . $list_img;
                if (is_file($hinhpath)) {
                    $list_img = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $list_img = "không có hình";
                }
                echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_sanpham . '</td>
                    <td>' . $ten_sanpham . '</td>
                    <td>' . $trangthai . '</td>
                    <td>' . $img . '</td>
                    <td>' . $list_img . '</td>
                    <td>' . $gia . '</td>
                    <td>' . $gia_sell . '</td>
                    <td>' . $chi_tiet . '</td>
                    <td>' . $luot_xem . '</td>
                    <td>' . $id_danhmuc . '</td>
                    <td>
                    <a href="' . $suasp . '"><input type="button" value="Sửa"></a> 
                    <a href="' . $xoasp . '"><input  type="button" value="Xoá"></a>
                    </td>
                </tr>
                    ';
            }
            ?>
        </table>
        <div class="select">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsanpham"><input type="button" value="Thêm sản phẩm"></a>
        </div>
    </div>
</div>
<!-- nguyenthihuyentrang -->