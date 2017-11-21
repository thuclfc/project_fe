<?php
session_start();
   include('./ketnoi.php');
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery.reveal.js"></script> 
     
    <script src="js/jquery.validate.min.js"></script>
     <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
            phone: "required",
            address: "required",
            email: {
                required: true,
                email: true
            },
          
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
            phone: "Please specify your phone",
            address: "Please enter your address",
            email: "Please enter a valid email address",
            slcon:"fafa",
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
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
                              <a href="">Giỏ hàng: </a>
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
               <section>
                  <div class="header-modules">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12">
                             

                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div id="container">
                     <p id="back-top"> <a href="#top"><span></span></a> </p>
                     <div class="container">
                        <div id="notification"></div>
                        <div class="row">
                           <div class=" col-sm-12   " id="content">
                              <script type="text/javascript">
                                 if ($('body').width() > 767) {
                                 
                                 	(function($){$.fn.equalHeights=function(minHeight,maxHeight){tallest=(minHeight)?minHeight:0;this.each(function(){if($(this).height()>tallest){tallest=$(this).height()}});if((maxHeight)&&tallest>maxHeight)tallest=maxHeight;return this.each(function(){$(this).height(tallest)})}})(jQuery)
                                 
                                 $(window).load(function(){
                                 
                                 	if($(".maxheight-feat").length){
                                 
                                 	$(".maxheight-feat").equalHeights()}
                                 
                                 });
                                 
                                 };
                                 
                              </script>
                              <div class="box featured">
                                    
                                    
                                   <?php

	$giohang = $_SESSION['giohang'];
	// Nếu người dùng cập nhật lại giỏ hàng (ấn nút cập nhật)
	if(isset($_POST['capnhat']) && 	count($giohang) != "")
	{
		$soluong_cn = $_POST['soluong'];
		print_r ($soluong_cn);
		foreach($soluong_cn as $MaHang => $sl)
		{
			
			// Nếu như người dùng đặt lại số lượng  = 0  ==> thì ta hủy luôn sản phẩm đó ($id_sp) trong giỏ hàng ($_SESSION['giohang']) 
			if($sl == 0)
			{
				unset($_SESSION['giohang'][$MaHang]);
			}
			// Nguoc lại số lượng sp phải là số ta cập nhật lại số lượng giỏ hàng
			
			else if($sl > 0 && is_numeric($sl))
			{
				$_SESSION['giohang'][$MaHang] = $sl;
			}
			// Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
			// refresh lại giỏ hàng
			header("location: ".$_SERVER['REQUEST_URI']."");
		}
	}
    	
	  ?>

		
<div id="cart1">
        	<?php
				// nếu giỏ hàng có sản phẩm
				if(count($giohang))
				{
			?>
       
           	 <form action="" method="post">
        
                    <?php
					// Duyệt hết giỏ hàng
					$tongcong =0;
					foreach($giohang as $MaHang => $sl)
					{
						// truy van lay thong tin san pham
						$truyvan_gh = mysql_query("SELECT TenMH,MaHang,concat(Gia_ban,' USD'), HinhAnh FROM mathang WHERE MaHang in ('$MaHang')");
						$r_gh = mysql_fetch_row($truyvan_gh);
					?>
                    	
                    <div id="viewcart">
                    
                           <div class="left"><a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><img src="image/sanphamnoibat/<?php echo $r_gh[3]; ?>" border="1" width="150" height="150" /></a></div>
                          
                        <p>Tên sản phẩm: <a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><?php echo $r_gh[0]; ?> </a></p>
                        <p> Mã SP: <?php echo $MaHang; ?></p>
                        <p>Giá bán: <font color="#FF0000"><?php echo $r_gh[2]; ?>  </font></p>
                        
                     
                          <div class="right">
                          <p>Số lượng: 
                          <input name="soluong[<?php echo $MaHang; ?>]" type="text" id="soluong" size="5" value="<?php echo $sl; ?>" /> cái</p>
                          <p>Thành tiền: <font color="#FF0000"><?php echo $sl*$r_gh[2]; ?> USD</font></p>
                          
                          <a href="modules/delcart.php?MaHang=<?php echo $MaHang; ?>"> Xóa sản phẩm </a>
                          </div>
                     </div>
                    
                    <?php
					$tongcong += $sl*$r_gh[2];
					}

					?>
                     
                        
                    
                   
               		<input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='index.php'" value="Mua thêm" />
                    <input name="capnhat" style="height:30px; padding:0 5px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" type="submit" value="Cập nhật giỏ hàng" />
                    <input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='modules/delcart.php?del_all=true'" value="Xóa giỏ hàng" /><p></p>
               <a href="muahang.php" style="height:30px; float:right; margin-top:-65px; padding:6px 5px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;">Mua Hàng</a>

             <p class="total">Tổng cộng: <font color="#FF0000"><?php echo $tongcong; ?></font> USD</p>
               </form> 
              <?php
			  	} // end if gio hang co sp
			  	else
				{
			  ?>
                <div id="giohang">
                	Bạn chưa có sản phẩm nào. Hãy quay về <a href="index.php">trang chủ</a> và mua sản phẩm 
                </div>
              <?php
			  }
			  ?>  
</div>		 

                                    
                                    
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
                
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



   </body>
</html>

