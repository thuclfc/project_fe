<?php
session_start();

	if (!isset($_SESSION['dangnhap']))
	{
		print "<script>document.location.href='dangnhap.php'</script>";
	
	}
    $email = $_SESSION['email'];
   include('../ketnoi.php');
   include('../modules/pages_record.php');  
   
?>
<!DOCTYPE html>

<html dir="ltr" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Thế giới đồ gỗ</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, , initial-scale=1.0">
      <meta name="description" content="Furniture store" />
      <link href="image/favicon.png" rel=" shortcut icon" />
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
      <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
      <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'/>
      <script src="../js/jquery-1.10.2.min.js"></script>
   </head>
   <body class="common-home">
      <div id="body">
         <div id="page">
             <header id="header">
                 <div class="toprow">
                     <div class="container">
                         <div class="row">
                             <div class="col-sm-12">
                                 <ul class="links">
                                     <li class="first"><a class="active" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                                     <li><a class="" href="exit.php"><i class="fa fa-shopping-cart"></i>Thoát</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div id="logo"><a href="../index.php"><img src="images/logo.png" title="Fashion store" alt="Fashion" /></a></div>
                     </div>
                 </div>
                 <div id="menu">
                     <div class="container">
                         <div class="row">
                             <div class="col-sm-12">
                                 <ul  class="sf-menu">
                                     <li class="cat_1"><a href="../index.php">TRANG CHỦ</a></li>
                                     <li class="cat_1"><a href="../gioithieu.php">GIỚI THIỆU</a></li>
                                     <li class="cat_2">
                                         <a href="../danhmucsp.php">DANH MỤC SẢN PHẨM</a>
                                         <div class="sf-mega">
                                             <ul class="sf-mega-section">
                                                 <li class="screenshot1"><a href="../thoi-trang-dong.php">Thời trang đông</a></li>
                                                 <li> <a class="screenshot1"  href="../thoi-trang-he.php">Thời trang hè</a></li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li class="cat_3">
                                         <a href="../tintuc.php">Tin tức</a>
                                     </li>
                                     <li class="cat_4">
                                         <a href="../lienhe.php">Liên hệ</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </header>
             <div id="article">
                 <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
                     <tr>
                         <td height="30" bgcolor="#0066CC" class="style1">C.PANEL</td>
                         <td height="30" align="left" bgcolor="#0066CC" class="style1"> Website_Fashion</td>
                         <td align="right" bgcolor="#0066CC" class="style1 style5">Hi: <?php echo $email ;?>  | <a href='logout.php'> <font color=\"#FFFFFF\"> Thoát </font> </a></td>
                     </tr>
                     <tr>
                         <td colspan="3">&nbsp;</td>
                     </tr>
                     <tr>
                         <td width="15%">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                     <td align="center" bgcolor="#0066CC" class="style4">Sản phẩm</td>
                                 </tr>
                                 <tr>
                                     <td class="style3"><a href="?action=sua_sp">Cập nhật sản phẩm</a></td>
                                 </tr>
                                 <tr>
                                     <td class="style3"><a href="?action=them_sp">Thêm sản phẩm mới</a></td>
                                 </tr>
                             </table>
                         </td>
                         <td width="85%" colspan="2" rowspan="2">
                             <?php
                             if($_GET['action'] == "sua_sp")
                             {
                                 if($_GET['MaHang'])
                                 {
                                     include("sua_qlsp.php");
                                 }
                                 else
                                 {
                                     include("ql_sp.php");
                                 }
                             }
                             else if($_GET['action'] == "them_sp")
                             {

                                 include("them_sp.php");
                             }
                             else if($_GET['action'] == "sua_tv")
                             {
                                 if($_GET['id'])
                                 {
                                     include("sua_qltv.php");
                                 }
                                 else
                                 {
                                     include("ql_tv.php");
                                 }

                             }
                             if($_GET['action'] == "sua_dh")
                             {
                                 include('ql_dh.php');
                             }
                             ?>
                         </td>
                     </tr>
                     <tr>
                         <td valign="top">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                     <td align="center" bgcolor="#0066CC" class="style4">Member</td>
                                 </tr>
                                 <tr>
                                     <td class="style3"><a href="?action=them_tv">Thêm thanh vien</a></td>
                                 </tr>
                                 <tr>
                                     <td class="style3"><a href="?action=sua_tv">Cập nhập thanh vien</a></td>
                                 </tr>
                             </table>
                         </td>
                     </tr>
                     <tr>
                         <td valign="top">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                     <td align="center" bgcolor="#0066CC" class="style4">Đơn hàng</td>
                                 </tr>

                                 <tr>
                                     <td class="style3"><a href="?action=sua_dh">Cập nhập đơn hàng</a></td>
                                 </tr>
                             </table>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="3" align="center" style="background: #06c; border:1px solid #ccc" class="style2"> Copyright 2014 @ thuclfc@gmail.com</td>
                     </tr>
                 </table>
             </div>
             <footer>
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div id="copyright">
                                 <p style="text-align: center; color: black; font-size: medium;" >TRƯỜNG ĐẠI HỌC GTVT - KHÓA LUẬN TỐT NGHIỆP NĂM 2017</p>
                                 <p style="text-align: center;color: black; font-size: medium;">SV: NGUYỄN THỊ VIỆT CHINH - lỚP LTCNTT- K19</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </footer>
         </div>
      </div>
   </body>
</html>