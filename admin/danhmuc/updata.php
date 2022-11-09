<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="center">
    <form action="index.php?act=updatedm" method="post">
        <h1>CẬP NHẬT HÀNG HÓA</h1>
        <p>Mã Loại</p>
        <input type="text" name="id_danhmuc" id="" readonly value="<?=$id_danhmuc?>"><br>
        <p>Tên Loại</p>
        <input type="text" name="ten_danhmuc" id="" value="<?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc; ?>"><br>
        <input type="hidden" name="id_danhmuc" value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc; ?>">
        <input type="submit" value="Cập nhật" class="button" name="capnhat">
        <input type="reset" value="Nhập lại" class="button">
        <a href="index.php?act=listdm">Danh Sách</a>
    </form>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
</div>