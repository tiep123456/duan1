
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh Sách Danh Mục
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tùy chọn</th>
                    <th>Mã loại</th>
                    <th>Tên danh mục</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <!-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot> -->
            <tbody>
            <?php 
            foreach ($listdm as $danhmuc_sp) {
                extract($danhmuc_sp);
                $deldm = "index.php?act=deldm&id_danhmuc=".$id_danhmuc;
                $suadm = "index.php?act=suadm&id_danhmuc=".$id_danhmuc;
            
                echo '  <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_danhmuc.'</td>
                            <td>'.$ten_danhmuc.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> | <a href="'.$deldm.'"><input type="button" value="Xóa"></a></td>
                        </tr> ';
            }
            ?>
            
            </tbody>
        </table>
        <div class="select">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Thêm loại"></a>
        </div>
    </div>
</div>


