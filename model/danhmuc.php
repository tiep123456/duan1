<?php
    function list_danhmuc(){
        $sql="select * from danhmuc_sp";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    
    function loadone_danhmuc($id_danhmuc){
        $sql = "select * from danhmuc_sp where id_danhmuc=".$id_danhmuc;
        $updatedm = pdo_query_one($sql);
        return $updatedm;
    }
    
    function insert_danhmuc($ten_danhmuc){
        $sql="insert into danhmuc_sp(ten_danhmuc) values('$ten_danhmuc')";
        pdo_execute($sql);
    }

    function update_danhmuc($id_danhmuc,$ten_danhmuc){
        $sql= "update danhmuc_sp set ten_danhmuc='".$ten_danhmuc."' where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }

    function delete_danhmuc($id_danhmuc){
        $sql="delete from danhmuc_sp where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }

?>