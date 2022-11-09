<!-- nguyenthihuyentrang -->
<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='100'>";
} else {
    $img = "không có hình";
}

$hinhpath = "../upload/" . $list_img;
if (is_file($hinhpath)) {
    $list_img = "<img src='" . $hinhpath . "' height='100'>";
} else {
    $list_img = "không có hình";
}
?>
<div>
    <div>
        <h3>Thêm sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=update_sanpham" method="post" enctype="multipart/form-data">
            <div>
                Loại sản phẩm: <br>
                <select name="id_danhmuc" id="">
                    <?php
                    foreach ($listdm as $danhmuc_sp) {
                        extract($danhmuc_sp);
                        echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div>
                Tên sản phẩm: <br>
                <input type="text" name="ten_sanpham" value="<?= $ten_sanpham ?>">
            </div>
            <div>
                Trạng thái: <br>
                <input type="text" name="trangthai" value="<?= $trangthai ?>">
            </div>
            <div>
                Hình sản phẩm: <br>
                <input type="file" name="img">
                <?= $img ?>
            </div>
            <div>
                Hình chi tiết: <br>
                <input type="file" name="list_img">
                <?= $list_img ?>
            </div>
            <div>
                Giá sản phẩm: <br>
                <input type="text" name="gia" value="<?= $gia ?>">
            </div>
            <div>
                Giá sale: <br>
                <input type="text" name="gia_sell" value="<?= $gia_sell ?>">
            </div>
            <div>
                Chi tiết sản phẩm: <br>
                <textarea name="chi_tiet" cols="30" rows="10"><?= $chi_tiet ?></textarea>

            </div>
            <div>
                <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                <input type="submit" name="capnhat" value="Cập nhật">

                <a href="index.php?act=listsanpham"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
<!-- nguyenthihuyentrang -->