<?php
include "../admin/header.php";
include "../admin/main.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";

//controller dieu khien
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra user đã click vào hay chưa
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm mới thành công!";
            }
            include "danhmuc/add.php";
            break;
        
        case 'listdm':
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'addsp':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm mới thành công!";
            }
            include "sanpham/add.php";
            break;
        case 'listsp':
            $listsp = list_sanpham_home();
            include "sanpham/list.php";
            break;
    }

}

?>