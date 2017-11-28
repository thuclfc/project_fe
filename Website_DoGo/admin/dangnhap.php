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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
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
    <script src="../js/jquery-1.10.2.min.js"></script>
</body>
</html>