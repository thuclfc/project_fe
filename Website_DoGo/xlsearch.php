<?php
session_start();
   include('./ketnoi.php');
   include('modules/pages_record.php');
?>
<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Tìm kiếm sản phẩm</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, , initial-scale=1.0">
      <script type="text/javascript">
      </script>
      <link href="image/favicon.png" rel="icon" />
     
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
    <script type="text/javascript">
         /* <![CDATA[ */
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-7078796-5']);
         _gaq.push(['_trackPageview']);
         
         (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
         
         (function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
         /* ]]> */
      </script>
   </head>
   <body class="account-register">
      <div id="body">
         <div class="swipe">
            <div class="swipe-menu">
               <ul class="links">
                            <li class="first"><a class="" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li class="login_h"><a href="login.php"><i class="fa fa-lock"></i>Đăng nhập</a></li> 
                            <li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký</a></li>  
                            <li><a class="" href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                            <li><a class="" href="exit.php"><i class="fa fa-check"></i>Thoát</a></li>
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
                                    <li class="first"><a class="" href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                                    <li class="login_h"><a href="login.php"><i class="fa fa-lock"></i>Đăng nhập</a></li> 
                                    <li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký</a></li>  
                                    <li><a class="" href="cart.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                    <li><a class="" href="exit.php"><i class="fa fa-check"></i>Thoát</a></li>
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
                           <div id="logo"><img src="image/logo.png" title="Furniture store" alt="Furniture store" /></div>
                           <div id="search">
                              <div class="inner">
                                 <form action="xlsearch.php" method="post" class="search">
<label>
      <input name="search" type="text" value="<?php echo $_POST['search']; ?>" size="50" placeholder="Tìm kiếm sản phẩm" />
    </label>
   <label>
      <input type="submit" name="button" id="button" value=" TÌM KIẾM " />
    </label>

</form>          </div>
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
                     <div id="menu-gadget">
                        <div class="row">
                           <div class="col-sm-12">
                                    <ul  class="sf-menu">
                                                            <li class="cat_1"><a href="index.php">Trang chủ </a></li>
                                                            <li class="cat_1"><a href="gioithieu.php">Giới thiệu</a></li>
                                                            <li class="cat_2"><a href="#">Danh mục sản phẩm</a>		
                                                                <div class="sf-mega">
                                                                    <ul class="sf-mega-section">
                                                                        <li><a class="screenshot1"  href="phongvesinh.php">Phòng vệ sinh </a> </li>
                                                                        <li><a class="screenshot1"  href="phongngu.php">Phòng ngủ</a></li>		
                                                                        <li><a class="screenshot1"  href="phongkhach.php">Phòng khách </a>
                                                                        <li><a class="screenshot1"  href="phonglamviec.php">Phòng làm việc </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="cat_3"><a href="tintuc.php">Tin tức</a></li>
                                                            <li class="cat_4"><a href="lienhe.php">Liên hệ</a></li>
                                    </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </header>
               <section>
                  <div id="container">
                     <p id="back-top"> <a href="#top"><span></span></a> </p>
                     <div class="container">
                        <div id="notification"></div>
                        <div class="row">
                           <div class="col-sm-9 col-sm-12   " id="content">
                              <div class="breadcrumb">
                                 <a href="index.php">Trang chủ</a>
                                 &raquo; <a href="xlsearch.php">Kết quả tìm kiếm</a>
                              </div>
                             
                              <div class="box-container">
                              
<?php


	if($_GET['kq'])
	{	
		$ten_sp = $_GET['kq'];
	}	
	else
	{
		$ten_sp = $_POST['search'];
	}
	if((isset($_POST['search']) && $_POST['search']!="") || $_GET['kq'])
	{
	
		$query = mysql_query("select HinhAnh, TenMH, concat('$',Gia_ban,' USD'), MaHang FROM mathang WHERE TenMH like '%".$ten_sp."%'");
		$tongsodl = mysql_num_rows($query);
		if($tongsodl == 0)
		{
			$tb = "Không tìm thấy từ khóa: \"<font color='orange'>$ten_sp</font>\" trong cơ sở dữ liệu!";
		}
		else
		{
			$tb = "Có <font color='orange'> $tongsodl</font> kết quả được tìm thấy";
		}

	// Phan trang
	$sodong = 6;
	$tongsodong = mysql_num_rows($query);
	$tongsotrang = ceil($tongsodong / $sodong);
	if(!isset($_GET["p"]))
	{
		$p = 1;
	}
	else
	{
		$p = intval($_GET["p"]);
	}
	$x = ($p -1)* $sodong;

		$truyvan_pages=mysql_query("select HinhAnh,TenMH,concat('$',Gia_ban,' USD'), MaHang, SLTon FROM mathang WHERE  TenMH like '%".$ten_sp."%' limit $x, $sodong");

}
else
{
	$tb ="Bạn chưa nhập từ khóa tìm kiếm";
}
?>

    	       <?php
			  	if(isset($_POST['search']) || isset($_GET['kq']))
				{
					 echo "<p class=\"message\">Kết quả tìm kiếm: $tb</p>";
                }
               ?>    

				                
<?php
	if((isset($_POST['search']) && $_POST['search']!="")|| isset($_GET['kq']))
		{
					while($row=mysql_fetch_array($truyvan_pages))
					{
						
					 echo "<div class='chitiet_sp1'>
						
								<a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'><img src='image/sanphamnoibat/".$row[0]."' width='150px' height='150px' border='0px' /></a>
						    
							    <h3><a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'>$row[1]</a></h3>
					
						 
						<p>Mã sản phẩm: $row[3]</p>
					
						<p>Số lượng còn trong kho: $row[4]</p>
						<p>Giá: <font color='red'>$row[2]</font>	
                        <a class='giohang' href='modules/addcart.php?MaHang=$row[3]'>
										thêm vào giỏ hàng
										</a></p>
    		           
					
						
						
					</div>";
					}
		}
?>
         <div class="clear"></div>
	<div id="paganation">
 <?php  

					// Lấy địa chỉ hiện tại
                    echo "<div class=\"paga\">";
					$self = "?frame=search&kq=$ten_sp&";
                    page_record($self,$p,$tongsotrang);
					echo "</div>";
			
?>   
</div>   
          
                                 
                              </div>
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
               </section>
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
      <script type="text/javascript">/* CloudFlare analytics upgrade */</script>
   </body>
</html>


