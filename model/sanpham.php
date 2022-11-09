<?php
// nguyenthihuyentrang
function list_sanpham()
{
    $sql = "select * from sanpham order by id_sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function insert_sanpham($ten_sanpham, $img, $list_img, $gia, $gia_sell, $chi_tiet, $id_danhmuc)
{
    $sql = "insert into sanpham(ten_sanpham, img, list_img, gia, gia_sell, chi_tiet, id_danhmuc)
     values('$ten_sanpham', '$img', '$list_img', '$gia', '$gia_sell', '$chi_tiet', '$id_danhmuc')";
    pdo_execute($sql);
}

function delete_sanpham($id_sanpham)
{
    $sql = "delete from sanpham where id_sanpham=" . $id_sanpham;
    pdo_execute($sql);
}

function load_one_sanpham($id_sanpham)
{
    $sql = "select * from sanpham where id_sanpham=" . $id_sanpham;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function update_sanpham($ten_sanpham, $id_sanpham, $trangthai, $img, $list_img, $gia, $gia_sell, $chi_tiet, $id_danhmuc)
{
    if ($img != "")
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "', ten_sanpham='" . $ten_sanpham . "', trangthai='" . $trangthai . "', 
         img='" . $img . "', list_img='" . $list_img . "', gia='" . $gia . "', gia_sell='" . $gia_sell . "',
         chi_tiet='" . $chi_tiet . "' where id_sanpham=" . $id_sanpham;
    else
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "', ten_sanpham='" . $ten_sanpham . "', trangthai='" . $trangthai . "', 
            list_img='" . $list_img . "', gia='" . $gia . "', gia_sell='" . $gia_sell . "',
            chi_tiet='" . $chi_tiet . "' where id_sanpham=" . $id_sanpham;
    pdo_execute($sql);
}

// nguyenthihuyentrang