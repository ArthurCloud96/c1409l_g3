<?php
require_once './inc_new.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="Utf-8">
        <title>Ahmad Tea</title>
        <link href="<?php base_url("css/global.css") ?>" rel="stylesheet" />
<!--lam cai fancybox-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<!--ket thuc fancybox-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.neoslideshow img:gt(0)').hide();//Ẩn tất cả các ảnh trừ ảnh đầu tiên
                setInterval(function () { //Đặt thời gian chuyển động của ảnh
                    $('.neoslideshow :first-child').fadeOut() //ảnh đang hiện
                            .next('img').fadeIn() //ảnh tiếp theo
                            .end().appendTo('.neoslideshow');
                },
                        2500);
            })
        </script>
     
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Roboto:400italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header>
            <div class="wrapper">
                <a href="home.php"><img src="<?php base_url("imgs/123.png") ?>"/></a>               
            </div>
        </header>
        <div class="wrapper">
            <nav>
                <ul class="list-inline">  
                    <li class="nav-button">
                        <a href="home.php">HOME</a>               
                    </li>
                    <li class="nav-button">
                        <a href="abouttea.php"> ABOUT AHMAD TEA </a>
                    </li>
                    <li class="nav-button">
                        <a href="category.php"> CATEGORY </a>
                    </li>
                    <li class="nav-button">
                        <a> GALLERY</a>
                    </li>
                </ul>       
            </nav>
        </div>
