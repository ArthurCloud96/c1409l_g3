<?php
require_once './inc_new.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="Utf-8">
        <title>Ahmad Tea</title>
        <link href="<?php base_url("css/global.css") ?>" rel="stylesheet" />
        <script src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.neoslideshow img:gt(0)').hide();//Ẩn tất cả các ảnh trừ ảnh đầu tiên
                setInterval(function () { //Đặt thời gian chuyển động của ảnh
                    $('.neoslideshow :first-child').fadeOut() //ảnh đang hiện
                            .next('img').fadeIn() //ảnh tiếp theo
                            .end().appendTo('.neoslideshow');
                },
                        2780);
            })
        </script>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Roboto:400italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header>
            <div class="wrapper">
                <img src="<?php base_url("imgs/123.png") ?>" />
            </div>
        </header>
        <div class="wrapper">
            <nav>
                <div class="list">
                    <ul class="list-inline">
                        <li class="nav-button">
                            <a href="home.php"> HOME </a>
                        </li>
                        
                        <li class="nav-button">
                            <a href="abouttea.php"> ABOUT AHMAD TEA </a>
                        </li>
                        
                        <li class="nav-button">
                            <a href="category.php"> CATEGORY </a>
                        </li>
                        
                        <li class="nav-button">
                            <a href="cart_view.php"> MY CART</a>
                        </li>
                        
                                               
                    </ul>
                </div>
            </nav>
        </div>
