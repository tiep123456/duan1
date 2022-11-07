<?php

function list_sanpham_home(){
    $sql = "select * from sanpham";
    $listsp1 = pdo_query($sql);
    return $listsp1;
}

function list_sanpham_danhmuc($iddm){
    $sql = "select * from sanpham where ma_loaihang='".$iddm."' limit 0,24";
    $listsp = pdo_query($sql);
    return $listsp;
}

function list_sanpham_cungloai($iddm){
    $sql="select * from sanpham where ma_loaihang='".$iddm."' order by ma_hh limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function list_sanpham($keyword,$iddm){
    $sql="select * from sanpham where 1";
    if($keyword!=""){
        $sql.=" and ten_hh like '%".$keyword."%'";
    }
    if($iddm>0){
        $sql.=" and ma_loaihang = '".$iddm."'";
    }
    //nối chuỗi phải có dấu cách, nếu ko sẽ bị lỗi dính chùm cú pháp
    $sql.=" order by ma_hh";
    $listsp = pdo_query($sql);
    return $listsp;
}

function list_sanpham_timkiem($keyword){
    $sql="select * from sanpham where 1";
    if($keyword!=""){
        $sql.=" and ten_hh like '%".$keyword."%'";
    }
    //nối chuỗi phải có dấu cách, nếu ko sẽ bị lỗi dính chùm cú pháp
    $sql.=" order by ma_hh";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadone_sanpham($ma_hh){
    $sql = "select * from sanpham where ma_hh=".$ma_hh;
    $sp = pdo_query_one($sql);
    return $sp;
}

function insert_sanpham($tensp,$giasp,$hinhsp,$mota,$iddm){
    $sql="insert into sanpham(ten_hh,don_gia,hinh,mo_ta,ma_loaihang) values('$tensp','$giasp','$hinhsp','$mota','$iddm')";
    pdo_execute($sql);
}

function update_sanpham($ma_hh,$tensp,$giasp,$hinhsp,$mota,$iddm){
    if($hinhsp!="")
        $sql = "update sanpham set ten_hh='".$tensp."',don_gia='".$giasp."',hinh='".$hinhsp."',mo_ta='".$mota."',ma_loaihang='".$iddm."' where ma_hh=".$ma_hh;
    else
        $sql = "update sanpham set ten_hh='".$tensp."',don_gia='".$giasp."',                   mo_ta='".$mota."',ma_loaihang='".$iddm."' where ma_hh=".$ma_hh;
    pdo_execute($sql);
}

function delete_sanpham($ma_hh){
    $sql="delete from sanpham where ma_hh=".$ma_hh;
    pdo_execute($sql);
}

?>