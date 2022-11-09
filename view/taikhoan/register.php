<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($_SESSION['css_reg'])) {
        ?>
        <link rel="stylesheet" href="view/css/register.css">
        <?php
    } else{
        ?>
        <link rel="stylesheet" href="../css/register.css">
        <?php
    }
    ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto Flex' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <div class="container">
        <h1 class="text-banner">Đăng ký tài khoản</h1>
        <div class="bgr-login">
            <div class="bgr-login1">
                <!-- left background  -->
                <div class="bgr-image">
                        <!-- image in css -->
                </div>
                <!-- right background form login -->
                <div class="bgr-form">
                    <!-- không hiểu hỏi -->
                    <?php
                        $link_home = '../../index.php?act=dangky';
                        $link_log = 'login.php';
                        if (isset($_SESSION['css_reg'])) {
                            $link_home = 'index.php?act=dangky';
                            $link_log = 'view/taikhoan/login.php';
                        }
                    ?>
                    <form action="<?=$link_home?>" method="post">
                        <!-- chữ thôi -->
                        <p class="text-login padding-text">Đăng ký</p>
                        <div class="group1">
                            <p class="text-not-acc padding-text">Bạn đã có tài khoản</p>
                            <a class="cre-acc" href="<?=$link_log?>">Đăng nhập</a>
                        </div>
                        
                        <p class="text-fullname padding-text">Họ và tên</p>
                        <input class="form-input" type="text" name="fullname" id="fullname" placeholder="Nguyễn Văn A">
                        <?php
                        if(isset($nameErr) && ($nameErr != "")){
                            echo $nameErr;
                        }
                        ?>
                        <!-- Phone Number -->
                        <p class="text-phone padding-text">Số điện thoại</p>
                        <input class="form-input" type="text" name="phone" id="phone" placeholder="+84 985 225 190">
                        <?php
                        if(isset($phoneErr) && ($phoneErr != "")){
                            echo $phoneErr;
                        }
                        ?>
                        <p class="text-pwd padding-text">Mật khẩu</p>
                        <input class="form-input" type="password" name="password" id="password" placeholder="********">
                        <?php
                        if(isset($passErr) && ($passErr != "")){
                            echo $passErr;
                        }
                        ?>
                        <p class="text-pwd padding-text">Xác nhận mật khẩu</p>
                        <input class="form-input" type="password" name="confirm-pwd" id="confirm-pwd" placeholder="********">
                        <?php
                        if(isset($pass_conErr) && ($pass_conErr != "")){
                            echo $pass_conErr;
                        }
                        ?>
                        <input class="btn-reg" aria-label="Show SweetAlert2 success message" name="dangky" type="submit" onclick="executeExample('sweetAlert')" value="Đăng ký">
                        
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
    <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script>
</body>
</html>