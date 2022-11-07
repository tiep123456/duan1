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
    .chon input:hover,
    .nhapthem input:hover,
    table input:hover{
        background-color:#D61C4E;
        color: #fff;
        border: none;
    }
    .chon input{
        margin: 10px 0px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>

<h1>DANH SÁCH SẢN PHẨM</h1>
<form action="index.php?act=listsp" method="post">
    <input type="text" name="keyword">
    <select name="iddm" id="">
        <option value="0" selected>Tất cả</option>
        <?php
        foreach ($listdm as $dm) {
            extract($dm);
            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
        }
        ?>
        <input type="submit" name="timkiemsp" value="Tìm kiếm">
    </select>

    <div class="nhapthem">
    <a href="index.php?act=addsp"><input type="button" value="Thêm sản phẩm"></a>
    </div>
</form>
<div class="list-danh-muc">
<table >
    <tr>
        <th>Tùy chọn</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Mô tả sản phẩm</th>
        <th>Mã loại hàng</th>
        <th>Chức năng</th>
    </tr>
    <?php
    foreach ($listsp as $sanpham) {
        extract($sanpham);
        $delsp = "index.php?act=delsp&ma_hh=" . $ma_hh;
        $suasp = "index.php?act=suasp&ma_hh=" . $ma_hh;
        $hinhpath = "../upload/" . $hinh;
        if (is_file($hinhpath)) {
            $hinhsp = "<img src='" . $hinhpath . "' height='50px'>";
        } else {
            $hinhsp = "không có hình ảnh";
        }
        echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $ma_hh . '</td>
                        <td>' . $ten_hh . '</td>
                        <td>' . $don_gia . '</td>
                        <td>' . $hinhsp .  '</td>
                        <td>' . $mo_ta . '</td>
                        <td>' . $ma_loaihang . '</td>
                        
                        <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> | <a href="' . $delsp . '"><input type="button" value="Xóa"></a></td>
                    </tr> ';
    }
    ?>
</table>
    <div class="chon">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    </div>
</div>
