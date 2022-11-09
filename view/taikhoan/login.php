<?php
// session_start();
// if(isset($_SESSION['username'])){
//     header("location: ./home.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto Flex' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <?php
    if (isset($_SESSION['css_reg'])) {
        ?>
        <link rel="stylesheet" href="view/css/login.css">
        <?php
    } else{
        ?>
        <link rel="stylesheet" href="../css/login.css">
        <?php
    }
    ?>
    
    <title>Đăng nhập tài khoản</title>
</head>
<body>
    <div class="container">
        <h1 class="text-banner">Đăng nhập tài khoản</h1>
        <div class="bgr-login">
            <div class="bgr-login1">
                <!-- left background  -->
                <div class="bgr-image">
                        <!-- image in css -->
                </div>
                <!-- right background form login -->
                <div class="bgr-form">
                    <?php
                        $link_home = '../../index.php?act=dangnhap';
                        $link_reg = 'register.php';
                        if (isset($_SESSION['css_log'])) {
                            $link_home = 'index.php?act=dangnhap';
                            $link_reg = 'view/taikhoan/register.php';
                        }
                    ?>
                    <form action="<?=$link_home?>" method="POST">
                        <p class="text-login padding-text">Đăng nhập</p>
                        <div class="group1">
                            <p class="text-not-acc padding-text">Bạn chưa có tài khoản ?</p>
                            <a class="cre-acc" href="<?=$link_reg?>">Tạo tài khoản</a>
                        </div>

                        <p class="text-phone padding-text">Số điện thoại</p>
                        <input type="text" name="phone" id="phone" placeholder="+84 985 225 190">
                        <?php
                        if(isset($phoneErr) && ($phoneErr != "")){
                            echo $phoneErr;
                        }
                        ?>
                        <p class="text-pwd">Mật khẩu</p>
                        <input type="password" name="password" id="password" placeholder="********">
                        <?php
                        if(isset($passErr) && ($passErr != "")){
                            echo $passErr;
                        }
                        ?>
                        <div class="group2">
                            <label class="switch">
                                <input type="checkbox" name="remember" checked>
                                <span class="slider round"></span>
                            </label>
                            <p class="remember">Ghi nhớ tôi</p>
                        </div>

                        <input class="btn-login" type="submit" name="dangnhap" value="Đăng nhập">
                        
                        <h5 class="line-or"><span>OR</span></h5>

                        <div class="four-elip-btn">
                            <button class="elip-btn img-gg">
                                <!-- <img src="../../assets/img/Vector.png" alt=""> -->
                            </button>
                            <button class="elip-btn img-fb">

                            </button>
                            <button class="elip-btn img-tw">

                            </button>
                            <button class="elip-btn img-apple">

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="text-foooter">
                <p>Terms and conditions  -  privacy  -  @Create: Team</p>
                <h3>FOOD RESTAURANT</h3>
            </div>
        </footer>
    </div>
</body>
</html>