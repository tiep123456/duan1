<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    table {
        margin-top: 20px;
        text-align: center;
        width: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        display: table;
        border-collapse: collapse;
    }
    th{
        text-transform: uppercase;
        padding: 10px 0px;
    }

    tr:nth-child(2n+1) {
        background: #FF8B8B;
    }

    table .tde {
        background-color: #D61C4E;
        color: wheat;
        text-transform: uppercase;
        padding: 10px;
    }

    tr td {
        padding: 10px;
    }
    /* .list-danh-muc{
        
    } */
    table input{
        padding: 5px 10px;
        cursor: pointer;
    }
    
    .nhapthem {
        display: inline;
        float: right;  
    }
    .nhapthem input{
        padding: 5px 10px;
        cursor: pointer;
    }

    .nhapthem input:hover,
    table input:hover{
        background-color:#D61C4E;
        color: #fff;
        border: none;
    }
</style>
<h1>DANH SÁCH TÀI KHOẢN</h1>
<table class="list-danh-muc">
    <tr>
        <th></th>
        <th>Mã tài khoản</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Kích hoạt</th>
        <th>Vai trò</th>
        <th></th>
    </tr>
    <?php 
        foreach ($listtaikhoan as $khachhang) {
            extract($khachhang);
            $deltk = "index.php?act=deltk&id=".$id;
            $suatk = "index.php?act=suatk&id=".$id;
           
            echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ten_dang_nhap.'</td>
                        <td>'.$mat_khau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$kich_hoat.'</td>
                        <td>'.$vai_tro.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> | <a href="'.$deltk.'"><input type="button" value="Xóa"></a></td>
                    </tr> ';
        }
    ?>
</table>
<div class="select">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
</div>
