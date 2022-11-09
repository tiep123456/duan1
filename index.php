<?php
session_start();
error_reporting(0);
ob_start();
include "./model/pdo.php";
include "./model/taikhoan.php";
// include "./model/sanpham.php";
// include "model/danhmuc.php";

if((isset($_GET['act']))&&($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            $check = true;
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $name = $_POST['fullname'];
                if (empty($_POST["fullname"])) {
                    $nameErr = '<p style="color: red; margin-top: 5px;">Vui lòng nhập họ tên của bạn</p>';
                    $check = false;
                }

                // $email = $_POST['email'];
                // if (empty($_POST["email"])) {
                //     $email_err = "Vui lòng điền email !!!";
                // }else {
                //     // check if e-mail address is well-formed
                //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //         $email_err = "Định dạng email không hợp lệ !!!";
                //     }
                // }
                $phone = $_POST['phone'];
                if ($phone == '') {
                    $phoneErr = '<p style="color: red; margin-top: 5px;">Vui lòng nhập số điện thoại</p>';;
                    $check = false;
                }
                $pass = $_POST['password'];
                $conf_pass = $_POST['confirm-pwd'];
                if ($pass == '') {
                    $passErr = '<p style="color: red; margin-top: 5px;">Vui lòng nhập mật khẩu</p>';;
                    $check = false;
                }elseif ($pass != $conf_pass) {
                    $pass_conErr = '<p style="color: red; margin-top: 5px;">Mật khẩu xác nhận không chính xác !!!</p>';
                    $check = false;
                }
                
                if ($check) {
                    insert_taikhoan($name, $phone, $pass);
                    // $thongbao = '<p style="color: green; margin-top: 5px;">Đăng ký thành công</p>';
                    header("location: view/taikhoan/login.php");
                    break;
                }
            }
            // điều kiện để thay đổi đường dẫn css
            $_SESSION['css_reg'] = true;
            include "view/taikhoan/register.php";
            break;
        case 'dangnhap':
            $check = true;
            $phone_input = $_POST['phone'];
            $pass = $_POST['password'];
            if ($phone_input == '') {
                $phoneErr = '<p style="color: red; margin-top: 5px;">Vui lòng nhập số điện thoại</p>';;
                $check = false;
            }else if ($pass == '') {
                $passErr = '<p style="color: red; margin-top: 5px;">Vui lòng nhập mật khẩu</p>';;
                $check = false;
            }else {
                $data_user = checkuser($phone_input, $pass);
                // print_r($data_user);
                $level = $data_user[0]['level'];
                $name = $data_user[0]['name'];
                $phone = $data_user[0]['phone'];
                $password = $data_user[0]['password'];
                $image = $data_user[0]['image'];
                $iduser = $data_user[0]['id'];
                if ($phone == $phone_input) {
                    if ($password != $pass) {
                        $passErr = '<p style="color: red; margin-top: 5px;">Sai mật khẩu !!!</p>';;
                        $check = false;
                    }
                }else{
                    $phoneErr = '<p style="color: red; margin-top: 5px;">Tài khoản không tồn tại !!! !!!</p>';;
                    $check = false;
                }
                if ($check) {
                    if ($level == 2) {
                        header("location: admin/index.php");
                    }elseif ($level == 0) {
                        header("location: view/home.php");
                        $_SESSION['login_home'] = true;
                        $_SESSION['username'] = $name;
                        $_SESSION['iduser'] = $iduser;
                    }elseif ($level == 1){
                        // chua phat trien
                    }
                }
            }
            include "view/taikhoan/login.php";
            // $_SESSION['css_log'];
            break;
        case 'logout':
            unset($_SESSION['username']);
            unset($_SESSION['iduser']);
            unset($_SESSION['login_home']);
            header("location: view/taikhoan/login.php");
        case 'infouser':
            include "view/infouser.php";
            break;
        default:
            include "view/home.php";
            break;

    }
}else{
    // unset($_SESSION['username'];
    include "view/home.php";
}

?>