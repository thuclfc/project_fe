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
      <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'/>
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
      <script src="js/jquery.cycle.js"></script>
   </head>
   <body class="common-home">
      <div id="body">
         <div class="swipe">
            <div class="swipe-menu">
               <ul class="links">
                  <li class="first"><a class="active" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                  <li><a class="login_h" href="login.php"><i class="fa fa-user"></i>Đăng nhập</a></li>
                  <li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký </a></li>
                  <li><a class="" href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                  <li><a href="exit.php"><i class="fa fa-user"></i>Thoát</a></li>
               </ul>
              
            </div>
         </div>
         <div id="page">
            <div id="shadow">
               <div class="shadow"></div>
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
                                 <li><a class="" href="exit.php"><i class="fa fa-shopping-cart"></i>Thoát</a></li>
                                
                              </ul>
                              <div class="clear"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="container">
                     <div class="toprow-1">
                        <div class="row">
                           <div class="col-sm-12">
                              <a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
                              <div class="top-search">
                                 <i class="fa fa-search"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div id="logo"><img src="" /></div>
                        </div>
                        <div id="logo"><img src="images/logo.png" title="Furniture store" alt="Furniture store" /></div>
                        <div id="search">
                           <div class="inner">
                              
                             <form action="xlsearch.php" method="post" class="search">
<label>
      <input name="search" type="text" value="<?php echo $_POST['search']; ?>" size="50" placeholder="Tìm kiếm sản phẩm" />
    </label>
   <label>
      <input type="submit" name="button" id="button" value=" TÌM KIẾM " />
    </label>

</form>
                           </div>
                        </div>
                        <div class="cart-position">
                           <div class="cart-inner">
                              <div id="cart" >
                            
                                
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
                                          <a href="danhmucsp.php/phongvesinh.php">Phòng vệ sinh </a>
                                       </li>
                                       <li> <a class="screenshot1"  href="danhmucsp.php/phongngu.php">Phòng ngủ</a></li>
                                       <li> <a class="screenshot1"  href="danhmucsp.php/phongkhach.php">Phòng khách </a> </li>
                                       <li><a class="screenshot1"  href="danhmucsp.php/phonglamviec.php">Phòng làm việc </a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="cat_3">
                                 <a href="tintuc.php">Tin tức</a>
                              </li>
                              <li class="cat_4">
                                 <a href="lienhe.php">Liên hệ</a>
                              </li>
                              <div class="clear"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </header>
               
                <div id="article">
                  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
  <tr>
    <td height="30" bgcolor="#0066CC" class="style1">C.PANEL</td>
    <td height="30" align="left" bgcolor="#0066CC" class="style1"> Website_DoGo</td>
    <td align="right" bgcolor="#0066CC" class="style1 style5">Hi: <?php echo $email ;?>  | <a href='logout.php'> <font color=\"#FFFFFF\"> Thoát </font> </a> | <a href="../index.php" class="style2" target="_blank"><font color="#FFFFFF">Trang chủ</font></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" bgcolor="#0066CC" class="style4">Sản phẩm</td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=sua_sp">Cập nhật sản phẩm</a></td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=them_sp">Thêm sản phẩm mới</a></td>
      </tr>
    </table></td>
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
	
	?>    </td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" bgcolor="#0066CC" class="style4">Member</td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=them_tv">Thêm thanh vien</a></td>
      </tr>
      <tr>
        <td class="style3"><a href="?action=sua_tv">Cập nhập thanh vien</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" bgcolor="#0066CC" class="style4">Đơn hàng</td>
      </tr>
     
      <tr>
        <td class="style3"><a href="?action=sua_dh">Cập nhập đơn hàng</a></td>
      </tr>
    </table></td>
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
                              <p style="text-align: center; color: black; font-size: medium;" >TRƯỜNG HVKTQS - KHÓA LUẬN TỐT NGHIỆP NĂM 2014</p>
                              <p style="text-align: center;color: black; font-size: medium;">SV: VĂN THỊ THANH - LỚP NET2K16C</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
               <script type="text/javascript" 	src="js/livesearch.js"></script>
            </div>
         </div>
      </div>
   </body>
</html>