<?php
function load_binhluan()
{
    $sql = "select * from binhluan_sanpham order by id_binhluan";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id_binhluan)
{
    $sql = "delete from binhluan_sanpham where id_binhluan=" . $id_binhluan;
    pdo_execute($sql);
}
