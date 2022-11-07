<?php
    function list_danhmuc(){
        $sql="select * from danhmuc_sp";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    
    function loadone_danhmuc($ma_loai){
        $sql = "select * from danhmuc_sp where id_danhmuc=".$ma_loai;
        $updatedm = pdo_query_one($sql);
        return $updatedm;
    }
    
    function insert_danhmuc($tenloai){
        $sql="insert into loaihang(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }

    function update_danhmuc($maloai,$tenloai){
        $sql= "update loaihang set ten_loai='".$tenloai."' where ma_loai=".$maloai;
        pdo_execute($sql);
    }

    function delete_danhmuc($ma_loai){
        $sql="delete from loaihang where ma_loai=".$ma_loai;
        pdo_execute($sql);
    }

?>