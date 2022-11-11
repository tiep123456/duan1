<?php
include "../admin/header.php";
include "../admin/main.php";

// model php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";

//controller dieu khien
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra user đã click vào hay chưa
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                insert_danhmuc($ten_danhmuc);
                $thongbao = "Thêm mới thành công!";
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'deldm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include "danhmuc/updata.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_danhmuc($id_danhmuc, $ten_danhmuc);
                $thongbao = "Cập nhật thành công!";
            }

            $listdm = list_danhmuc();
            include "danhmuc/list.php";
            break;
    
        case 'listsanpham':
            $listsanpham = list_sanpham();
            include "sanpham/list.php";
            break;
        case 'addsanpham':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia = $_POST['gia'];
                $gia_sell = $_POST['gia_sell'];
                $chi_tiet = $_POST['chi_tiet'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                $list_img = $_FILES['list_img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['list_img']['name']);
                if (move_uploaded_file($_FILES["list_img"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }


                insert_sanpham($ten_sanpham, $img, $list_img, $gia, $gia_sell, $chi_tiet, $id_danhmuc);
                $thongbao = "Thêm thành công";
            }

            $listdm = list_danhmuc();
            include "sanpham/add.php";
            break;

        case 'xoasanpham':
            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                delete_sanpham($_GET['id_sanpham']);
            }

            $listsanpham = list_sanpham();
            include "sanpham/list.php";
            break;

        case 'suasanpham':
            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                $sanpham = load_one_sanpham($_GET['id_sanpham']);
            }
            $listdm = list_danhmuc();
            $listsanpham = list_sanpham();
            include "sanpham/update.php";
            break;

        case 'update_sanpham':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $id_sanpham = $_POST['id_sanpham'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $trangthai = $_POST['trangthai'];
                $gia = $_POST['gia'];
                $gia_sell = $_POST['gia_sell'];
                $chi_tiet = $_POST['chi_tiet'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                $list_img = $_FILES['list_img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['list_img']['name']);
                if (move_uploaded_file($_FILES["list_img"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($ten_sanpham, $id_sanpham, $trangthai, $img, $list_img, $gia, $gia_sell, $chi_tiet, $id_danhmuc);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = list_danhmuc();
            $listsanpham = list_sanpham();
            include "sanpham/list.php";
            break;
        case 'listaccount':
            $list_acc = list_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'add_acc':
            
            break;
        case 'update_acc':
        
            break;
        case 'xoa_acc':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_taikhoan($_GET['id']);
            }
            $list_acc = list_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'bl':
            $listbinhluan = load_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = load_binhluan();
            include "binhluan/list.php";
            break;
    }

}
include "../admin/footer.php";
?>