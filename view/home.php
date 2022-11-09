<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    $css3 = 'view/css/style.css';
    $style = 'view/css/margin.css';
    $margin = 'view/css/css3.css';
    $link_img = 'view/img/';
    $link_file = 'view/';
    if (isset($_SESSION['login_home'])) {
        $css3 = 'css/style.css';
        $style = 'css/css3.css';
        $margin = 'css/margin.css';
        $link_img = 'img/';
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
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">

<body>
    <div class="row top">
        <div class="boxcenter">
           <div class="logo"><img src="<?=$link_img?>logp.png" alt="" ></div> 
            <div class="menu-ngang" id="id-menu">
                <ul>
                    <li class="mr16 "><a href="<?=$link_file?>home.php">TRANG CHỦ</a></li>
                    <li class="mr16"><a href="<?=$link_file?>shop.php">THỰC ĐƠN</a></li>
                    <li class="mr16"><a href="#">LIÊN HỆ</a></li>
                    <li class="mr16"><a href="#">TIN TỨC</a></li>
                    <li ><a href="#">ĐẶT BÀN</a></li>
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
                                    <a href="../index.php?act=infouser">
                                    <input type="submit" class="dangnhap" value="'.$_SESSION['username'].'">
                                    </a> 
                                </div>';

                        echo ' <div class="gruopicon">
                                    <img src="'.$link_img.'icon 2.png" alt="" class="icon" >
                                    <a href="../index.php?act=logout">
                                        <input type="submit" class="dangky" value="Đăng xuất">
                                    </a>
                                </div> ';
                    }else{
                        echo ' <div class="gruopicon mr16">
                                    <img src="'.$link_img.'iconlogin.png" alt="" class="icon" >
                                    <a href="'.$link_file.'taikhoan/login.php">
                                        <input type="submit" class="dangnhap" value="Đăng nhập">
                                    </a>
                                </div>';
                        echo ' <div class="gruopicon">
                                <img src="'.$link_img.'icon 2.png" alt="" class="icon" >
                                <a href="'.$link_file.'taikhoan/register.php">
                                    <input type="submit" class="dangky" value="Đăng ký">
                                </a>
                            </div> ';
                    }
                    ?>
            </div>  
        </div>
    </div>
    <!-- end header -->
    <div class="row banner">
        <img src="<?=$link_img?>banner1.png" alt="">
    </div>
    <div class="row content">
            <div class="headtitle mt50 center "> DỊCH  VỤ  CỦA  CHÚNG  TÔI </div>
                <div class="boxcenter2">
                    <div class="box  mr">
                        <img src="<?=$link_img?>Rectangle 26.png" alt="" class="mb5">
                        <h2 class="mb5">Đầu bếp</h2>
                        <span>Với sự lựa chọn tỉ mỉ về đầu
                        bếp cùng với nghiệp vụ chuyên
                        nghiệp của các đầu bếp trong
                        nhà sẽ mang lại cho quý khách
                        một trải nghiệm tuyệt vời</span>
                    </div>

                    <div class="box  mr">
                        <img src="<?=$link_img?>Rectangle 26-1.png" alt="" class="mb5">
                        <h2 class="mb5">Món ăn</h2>
                        <span>Để đáp ứng nhu cầu tự do về ăn
                        uống theo quý khách, quý khách
                        có thể Đặt món online</span>
                    </div>

                    <div class="box  mr ">
                        <img src="<?=$link_img?>Rectangle 26-2.png" alt="" class="mb5">
                        <h2 class="mb5">Đặt hàng trực tuyến</h2>
                        <span>Đi cùng với dịch vụ chất lượng
                        món ăn thì dịch vụ chúng tôi
                        cũng không kém phần, chúng
                        tôi hỗ trợ Đặt bàn cho quý
                        khách 24/7</span>
                    </div>

                    <div class="box ">
                        <img src="<?=$link_img?>Rectangle 26-3.png" alt="" class="mb5">
                        <h2 class="mb5">Dịch vụ 24/7</h2>
                        <span>Những món ăn đảm bảo đủ tiêu
                        chuẩn an toàn thật phẩm, cùng
                        với tay nghề cao của các đầu
                        bếp sẽ mang lại cho quý khách
                        một cảm nhật Đặt biệt về các
                        món ăn của nhà hàng</span>
                    </div>
             </div>
          
            <div class="headtitle mt50 center "> NHỮNG MÓN ĂN NỔI BẬT </div>
            <div class="boxcenter3 ">
                <div class="tron mr60"> <img src="<?=$link_img?>sp1.png" alt=""></div>
                <div class="tron mr60 "><img src="<?=$link_img?>sp2.png" alt=""></div>
                <div class="tron mr60 "><img src="<?=$link_img?>sp3.png" alt=""></div>
                <div class="tron mr60 "><img src="<?=$link_img?>sp4.png" alt=""></div>
                <div class="tron mr60 "><img src="<?=$link_img?>sp5.png" alt=""></div>
                <div class="tron mr60 "><img src="<?=$link_img?>sp6.png" alt=""></div>
                <div class="tron"><img src="<?=$link_img?>sp7.png" alt=""></div>
            </div>
            <div class="hra"></div> 
            <div class="headtitle mt50 center "> NHỮNG MÓN ĂN CHÍNH </div>
            <div class="boxcenter4  ">
                <div class="boxsp mr4">
                    <img src="<?=$link_img?>cuarangme.png" alt="" class="img row">
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
                <div class="boxsp mr4">
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

        <div class="boxcenter5">
            <div id="imgnen">
                <img src="<?=$link_img?>banner_db.png" alt="">
            </div>
            <div class="formdatban">
                <div class="row">
                    <div class="textbox row center mt40">Đặt bàn online</div>
                </div>
                
                <div class="reservation row">
                   <div class="rv left"></div>
                    <div class="textbox2">Reservation</div>
                    <div class="rv right"></div>
                </div>

                <div class="row form">
                    <form action="" class="dacbanonline">
                        <input type="text" class="box-text  mr10pt" placeholder="Họ và tên" >
                        <input type="text" class="number" placeholder="Số điện thoại">
                        <input type="date" class="date mr10pt" placeholder="Ngày tháng">
                        <input type="time" class="box-text " >
                        <textarea name=""  id="yeucau-datbang" class="row" cols="30" rows="10" placeholder="Yều cầu đặt biệt"></textarea>
                        <input type="submit" class="datngay" placeholder="Đặt Ngay">
                    </form>
                </div>
            </div>
        </div>
    </div>
  
      
    </div>
    <div class="footer">
       <div class="row">
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
            Terms and conditions  -  privacy  -  @Create: Team
            <a href="<?=$link_file?>html/tym.html">
                <strong style="color: rgb(223, 64, 64);">FOOD RESTAURANT</strong>
            </a>
       </div>
    </div>
</body>
</html>