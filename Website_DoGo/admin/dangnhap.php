<?php
session_start();
include("../ketnoi.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, , initial-scale=1.0">
    <link href="http://livedemo00.template-help.com/opencart_50480/image/data/favicon.png" rel="icon" />
   
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" />
    <link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/slideshow.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/camera.css" rel="stylesheet" type="text/css" />
    <link href="css/superfish.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/photoswipe.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/livesearch.css"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/jquery.cycle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/jQuery.equalHeights.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jscript_zjquery.anythingslider.js"></script>
    <script src="js/common.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.mobile-events.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/script.js"></script>
    <script src="js/camera.js"></script>
    <!-- bx-slider -->
    <script src="js/jquery.bxslider.js"></script>
    <!-- photo swipe -->
    <script src="js/klass.min.js"></script>
    <script src="js/code.photoswipe.jquery-3.0.5.js"></script>
   
</head>
<body class="account-login">

                               
                                        <div class="login-content" style="text-align: center;">
                                              
                                                
                                                      <div class="heading" >
                                                              <i class="fa"><img src="images/iconkey.png" style="padding-left:90px; margin-right: 0;" /></i>
                                                              <div class="extra-wrap" style="margin-left:-70px; margin-top:10px;">
                                                                      <h2>Admin Login</h2>
                                                                      <b>Bạn là quản trị viên</b>
                                                              </div>
                                                      </div>
                                                  <?php include('login.php'); ?>
                                                
                                              
                                        </div>
                                
                   
</body></html>