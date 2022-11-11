<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $css3 = 'css/style.css';
    $style = 'css/css3.css';
    $margin = 'css/margin.css';
    $link_img = 'img/';
    $link_file = './';
    
    if (isset($_SESSION['login_home'])) {
        $css3 = 'view/css/style.css';
        $style = 'view/css/margin.css';
        $margin = 'view/css/css3.css';
        $link_img = 'view/img/';
        $link_file = '';
    }
    ?>
    <link rel="stylesheet" href="<?=$style?>">
    <link rel="stylesheet" href="<?=$margin?>">
    <link rel="stylesheet" href="<?=$css3?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Pangolin&family=Roboto:wght@500&family=Saira&family=Sanchez&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Thực Đơn Món Ăn</title>
<body>
    <div class="row top">
        <div class="boxcenter">
           <div class="logo"><img src="<?=$link_img?>logp.png" alt="" ></div> 
            <div class="menu-ngang ">
                <ul>
                    <li class="mr16 "><a href="<?=$link_file?>home.php">TRANG CHỦ</a></li>
                    <li class="mr16"><a href="<?=$link_file?>shop.php">THỰC ĐƠN</a></li>
                    <li class="mr16"><a href="#">LIÊN HỆ</a></li>
                    <li class="mr16"><a href="#">TIN TỨC</a></li>
                    <li ><a href="">ĐẶT BÀN</a></li>
                </ul>
            </div>
            <div class="login">
                <!-- login -->
                <?php
                    error_reporting(0);
                    session_start();
                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")){
                        // echo $_SESSION['username'];
                        echo ' <div class="gruopicon mr16">
                                    <img src="'.$link_img.'iconlogin.png" alt="avatar" class="icon">
                                    <a href="'.$link_file.'index.php?act=infouser">
                                    <input type="submit" class="dangnhap" value="'.$_SESSION['username'].'">
                                    </a> 
                                </div>';

                        echo ' <div class="gruopicon">
                                    <img src="'.$link_img.'icon 2.png" alt="" class="icon" >
                                    <a href="'.$link_file.'index.php?act=logout">
                                        <input type="submit" class="dangky" value="Đăng xuất">
                                    </a>
                                </div> ';
                    }else{
                        echo ' <div class="gruopicon mr16">
                                    <img src="'.$link_img.'iconlogin.png" alt="" class="icon" >
                                    <a href="view/taikhoan/login.php">
                                        <input type="submit" class="dangnhap" value="Đăng nhập">
                                    </a>
                                </div>';
                        echo ' <div class="gruopicon">
                                <img src="'.$link_img.'icon 2.png" alt="" class="icon" >
                                <a href="'.$link_file.'index.php?act=logout">
                                    <input type="submit" class="dangky" value="Đăng ký">
                                </a>
                            </div> ';
                    }
                    ?>
            </div>
        </div>
    </div>
    <div class="row banner">
        <img src="<?=$link_img?>banner-shop.png" alt="">
    </div>
    <div class="row content">
        <div class="row nau mb20">
            <div class="danhmuc">
                <li><a href="">HẢI SẢN </a></li>
                <li><a href="">THỊT</a></li>
                <li><a href="">ÓC</a></li>
            </div>
        </div>    
        <div class="headtitle center mb20"> HẢI SẢN </div>
        <div class=" boxcenter4  row">
            <div class="boxsp mr4 mb20">
                <img src="<?=$link_img?>cuarangme.png" alt="" class="img row">
                
                <div class="contac row">    
                    <div class="cachkhoang mb20 ">
                        <a href="" class="namesp">Cua rang me</a>
                        <p class="gia">300.000đ</p>
                    </div>

                    <div class="cachkhoang row datmon">
                        <input type="submit" value="Đặt món">
                        <input type="submit" value="Thêm vào giỏ">
                    </div>
                </div>  
            </div>
            <div class="boxsp mr4 mb20">
                <img src="<?=$link_img?>Rectangle 21-1.png" alt="" class="img row">
                
                <div class="contac row">    
                    <div class="cachkhoang mb20">
                        <a href="" class="namesp">Cua rang me</a>
                        <p class="gia">300.000đ</p>
                    </div>

                    <div class="cachkhoang row datmon">
                        <input type="submit" value="Đặt món">
                        <input type="submit" value="Thêm vào giỏ">
                    </div>
                </div>  
            </div>
                <div class="boxsp mr4 mb20">
                <img src="<?=$link_img?>Rectangle 21-2.png" alt="" class="img row">
                
                <div class="contac row">    
                    <div class="cachkhoang mb20">
                        <a href="" class="namesp">Cua rang me</a>
                        <p class="gia">300.000đ</p>
                    </div>

                    <div class="cachkhoang row datmon">
                        <input type="submit" value="Đặt món">
                        <input type="submit" value="Thêm vào giỏ">
                    </div>
                    </div>  
                </div>
                <div class="boxsp mb20">
                    <img src="<?=$link_img?>Rectangle 21-3.png" alt="" class="img row">
                    
                    <div class="contac row">    
                        <div class="cachkhoang mb20">
                            <a href="" class="namesp">Cua rang me</a>
                            <p class="gia">300.000đ</p>
                        </div>

                        <div class="cachkhoang row datmon">
                            <input type="submit" value="Đặt món" class="sp">
                            <input type="submit" value="Thêm vào giỏ" class="sp">
                        </div>
                        </div>  
                    </div>
                    <div class="boxsp mr4">
                        <img src="<?=$link_img?>cuarangme.png" alt="" class="img row">
                        
                        <div class="contac row">    
                            <div class="cachkhoang mb20">
                                <a href="" class="namesp">Cua ran me</a>
                                <p class="gia">300.000đ</p>
                            </div>
    
                            <div class="cachkhoang row datmon">
                                <input type="submit" value="Đặt món">
                                <input type="submit" value="Thêm vào giỏ">
                            </div>
                        </div>  
                    </div>
                    <div class="boxsp mr4">
                        <img src="<?=$link_img?>Rectangle 21-1.png" alt="" class="img row">
                        
                        <div class="contac row">    
                            <div class="cachkhoang mb20">
                                <a href="" class="namesp">Cua ran me</a>
                                <p class="gia">300.000đ</p>
                            </div>
    
                            <div class="cachkhoang row datmon">
                                <input type="submit" value="Đặt món">
                                <input type="submit" value="Thêm vào giỏ">
                            </div>
                        </div>  
                    </div>
                        <div class="boxsp mr4">
                        <img src="<?=$link_img?>Rectangle 21-2.png" alt="" class="img row">
                        
                        <div class="contac row">    
                            <div class="cachkhoang mb20">
                                <a href="" class="namesp">Cua ran me</a>
                                <p class="gia">300.000đ</p>
                            </div>
    
                            <div class="cachkhoang row datmon">
                                <input type="submit" value="Đặt món">
                                <input type="submit" value="Thêm vào giỏ">
                            </div>
                            </div>  
                        </div>
                        <div class="boxsp">
                            <img src="<?=$link_img?>Rectangle 21-3.png" alt="" class="img row">
                            
                            <div class="contac row">    
                                <div class="cachkhoang mb20">
                                    <a href="" class="namesp">Cua ran me</a>
                                    <p class="gia">300.000đ</p>
                                </div>
        
                                <div class="cachkhoang row datmon">
                                    <input type="submit" value="Đặt món" class="sp">
                                    <input type="submit" value="Thêm vào giỏ" class="sp">
                                </div>
                                </div>  
                            </div>
                <div class="chuyenslide row">
                    <div class="tron2 mr10"></div>
                    <div class="tron2 mr10"></div>
                    <div class="tron2 mr10"></div>
                    <div class="tron2 mr10"></div>
                    <div class="tron2 mr10"></div>
                </div>
            </div>            
        </div>
    </div>
    <!-- footer -->
    </div>
    <div class="footer">
       <div class="row ">
            <div class="boxcenter">
                <div class="boxfooter1 pt50 ">
                    <h2>LIÊN KẾT NHANH</h2>
                        <a href="">Thực đơn</a>
                        <a href="">Tin tức</a>
                        <a href="">Liên hệ</a>
                        <a href="">Đặt bàn</a>
                </div>
                <div class="boxfooter2 pt50"> 
                     <h2>CÁC LOẠI MÓN  ĂN</h2>
                    
                        <a href="">Các món ăn hàng đầu</a>
                        <a href="">Giá tiền các món ăn tốt nhất</a>
                        <a href="">Món ăn gọi nhiều nhất</a>
                  
                </div>
                <div class="boxfooter3 pt50"> 
                    <h2>THÔNG TIN LIÊN HỆ</h2>
                        <div class="row icon2 mt20" >
                            <img src="<?=$link_img?>iconhome.png" alt="" class="imgicon2">
                                <a href="" class="text-footer">Quốc lộ 1A, Công Viên Phần Mềm <br>
                                Quang Trung, Q12, TP.HCM</a>
                        </div>

                        <div class="row icon2">
                            <img src="<?=$link_img?>icontele.png" alt="" class="imgicon2">
                                <a href="" class="text-footer">+84 985 225 000</a>
                        </div>

                        <div class="row icon2">
                            <img src="<?=$link_img?>iconadrees.png" alt="" class="imgicon2">
                                <a href="" class="text-footer">supportkhachhang247@gmail.com</a>
                        </div>
                      
                       
                    
                </div>
                <div class="boxfooter4 pt50">
                  <h2>THEO DÕI CHÚNG TÔI THÔNG <br>
                    
                    QUA CÁC MẠNG XÃ HỘI</h2>
                    <ul>
                        <li>
                          <a href="#">
                            <i class="fab fa-facebook-f icon"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-twitter icon"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                        <li>
                          <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
                          
                      </ul>
                </div>
            </div>
       </div>
       <div class="row team">
            Terms and conditions  -  privacy  -  @Create: Team  <strong style="color: rgb(223, 64, 64);">FOOD RESTAURANT
             </strong>
       </div>
    </div>
</body>
</html>