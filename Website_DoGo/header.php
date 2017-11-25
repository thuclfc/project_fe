<?php
session_start();
include('./ketnoi.php');
include('modules/pages_record.php');
$u_member = $_SESSION['HoTen'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cửa hàng thời trang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, , initial-scale=1.0">
    <meta name="description" content="" />
    <link href="image/favicon.png" rel=" shortcut icon" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
</head>
<body class="common-home">
<div class="wrapper">
    <header id="header">
        <div class="toprow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="links">
                            <li class="first"><a class="active" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><a class="login_h" href="login.php"><i class="fa fa-user"></i>Đăng nhập</a></li>
                            <li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký </a></li>
                            <li><a class="" href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                            <?php
                            $email=$_SESSION['email'];
                            if(isset($_SESSION['login'])){
                                echo "<li class=\"chao\"><a href=\"logout.php\">Thoát</a></li>";
                                echo "<li class=\"chao\">Hi:  $u_member </li>";
                            }
                            ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="logo"><img src="" /></div>
                </div>
                <div id="logo"><a href="index.php"><img src="image/logo.png" title="Fashion store" alt="Fashion" /></a></div>
                <div id="search">
                    <div class="inner">

                        <form action="xlsearch.php" method="post" class="search">
                            <label>
                                <input name="search" type="text" value="<?php echo $_POST['search']; ?>" size="50" placeholder="Tìm kiếm sản phẩm" />
                            </label>
                            <label>
                                <input type="submit" name="button" id="button" value="TÌM KIẾM" />
                            </label>

                        </form>
                    </div>
                </div>
                <div class="cart-position">
                    <div class="cart-inner">
                        <div id="cart" >
                            <a href="cart.php">Giỏ hàng: </a>
                            <?php
                            include("modules/menu_giohang.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul  class="sf-menu">
                            <li class="cat_1"><a href="index.php">TRANG CHỦ</a></li>
                            <li class="cat_1"><a href="gioithieu.php">GIỚI THIỆU</a></li>
                            <li class="cat_2">
                                <a href="danhmucsp.php">DANH MỤC SẢN PHẨM</a>
                                <div class="sf-mega">
                                    <ul class="sf-mega-section">
                                        <li class="screenshot1">
                                            <a href="/thoi-trang-dong.php">Thời trang đông</a>
                                        </li>
                                        <li> <a class="screenshot1"  href="/thoi-trang-he.php">Thời trang hè</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="cat_3">
                                <a href="tintuc.php">Tin tức</a>
                            </li>
                            <li class="cat_4">
                                <a href="lienhe.php">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>