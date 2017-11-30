<?php include ('./header.php')?>
    <div id="body">
         <div id="page">
             <header id="header">
                 <div class="toprow">
                     <div class="container">
                         <div class="row">
                             <div class="col-sm-12">
                                 <ul class="links">
                                     <li class="first"><a class="active" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                                     <li><a class="" href="logout.php"><i class="fa fa-shopping-cart"></i>Thoát</a></li>
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
                 <table width="100%" border="1" cellpadding="0" cellspacing="0">
                     <tr>
                         <td height="30" bgcolor="#0066CC" class="style1">C.PANEL</td>
                         <td height="30" align="left" bgcolor="#0066CC" class="style1"> Website_Fashion</td>
                         <td align="right" bgcolor="#0066CC" class="style1 style5">Hi: <?php echo $email ;?>  | <a href='logout.php'> <font color=\"#FFFFFF\"> Thoát </font> </a></td></tr>
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
                                 }else if($_GET['action'] == "them_tv"){
                                     include("them_tv.php");
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
                                     <td class="style3"><a href="?action=them_tv">Thêm thành viên</a></td>
                                 </tr>
                                 <tr>
                                     <td class="style3"><a href="?action=sua_tv">Cập nhập thành viên</a></td>
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
                         <td colspan="3" align="center" style="background: #06c;" class="style2"> Copyright 2014 @ thuclfc@gmail.com</td>
                     </tr>
                 </table>
             </div>
         </div>
      </div>
<?php include ('./footer.php')?>