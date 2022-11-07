
<div class="boxcenter">
<h1>them</h1>
    <form action="index.php?act=index.php" method="post">
        <p>Mã Loại</p>
        <input type="text" name="maloai" id="inputloai" disabled><br>
        <p>Tên Loại</p>
        <input type="text" name="tenloai" id="inputloai"><br>
        <input type="submit" value="Thêm mới" class="button" name="themmoi">
        <input type="reset" value="Nhập lại" class="button">
        <br>
        <button><a href="index.php?act=listdm">Danh Sách loại món ăn</a></button>
    </form>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
</div>
