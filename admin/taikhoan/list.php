<!-- nguyenthihuyentrang -->
<div class="card mb-4">
    <div>
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh Sách Khách Hàng
    </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>id khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th>email</th>
                        <th>password</th>
                        <th>phone</th>
                        <th>Địa chỉ</th>
                        <th>Avater</th>
                        <th>Level</th>
                        <!-- <th>Quyền</th> -->
                    </tr>
                </thead>
                <?php
                foreach ($list_acc as $account) {
                    $role = true;
                    extract($account);
                    $sua_acc = "index.php?act=sua_acc&id=" . $id;
                    $xoa_acc = "index.php?act=xoa_acc&id=" . $id;
                    $hinhpath = "../upload/" . $image;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $img = "không có hình";
                    }
                    // if ($level == 0) {
                    //     echo "hhh";
                    //     $type_acc == 'Customer';
                    // }else if ($level == 2){
                    //     $type_acc = 'Admin';
                    // }else if ($level == 1) {
                    //     $type_acc = 'CTV';
                    // }
                    echo '
                        <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $password . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $image . '</td>
                        <td>' . $level . '</td>
                       
                        <td>
                        <a href="' . $sua_acc . '"><input type="button" value="Sửa"></a> 
                        <a href="' . $xoa_acc . '"><input  type="button" value="Xoá"></a>
                        </td>
                    </tr>
                        ';
                }
                ?>
            </table>
        </div>
        <div class="select">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=add_acc"><input type="button" value="Thêm tài khoản"></a>
        </div>
    </div>
</div>
<!-- nguyenthihuyentrang -->