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
  

  $(function() {
  
 
    $("#register-form").validate({
    
      
        rules: {
            name: "required",
            phone: "required",
            address: "required",
            email: {
                required: true,
                email: true
            },
          
        },
        
      
        messages: {
            name: "Bạn chưa nhập tên",
            phone: "Bạn chưa nhập Sđt",
            address: "Bạn chua nhập địa chỉ",
            email: "Bạn chưa nhập email",
            
           
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
                                    
                                    
                                
      
      <div id="mask1">
      
      <h4>Thông tin mua hàng</h4>
      
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="register-form">
        
                    <?php
					// Duyệt hết giỏ hàng
                    $giohang = $_SESSION['giohang'];
					$tongcong =0;
					foreach($giohang as $MaHang => $sl)
					{
						// truy van lay thong tin san pham
						$truyvan_gh = mysql_query("SELECT TenMH,MaHang,concat(Gia_ban,' USD'), HinhAnh FROM mathang WHERE MaHang in ('$MaHang')");
						$r_gh = mysql_fetch_row($truyvan_gh);
                        $ten=$r_gh[0];
					?>
                    	
                    <div id="viewcart1">
                    
                           <div class="left"><a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><img src="image/sanphamnoibat/<?php echo $r_gh[3]; ?>" border="1" width="70" height="70" /></a></div>
                          
                        <p>Tên sản phẩm: <?php echo $ten; ?></p>
                      
                        <p>Giá bán: <font color="#FF0000"><?php echo $r_gh[2]; ?>  </font></p>
                        
                       <p>Số lượng: 
                          <input name="soluong[<?php echo $MaHang; ?>]" type="text" id="soluong" size="5" value="<?php echo $sl; ?>" /> cái</p>
                   
                         
                     </div>
                    
                    <?php
					$tongcong += $sl*$r_gh[2];
					}

					?>
                     <p class="total1">Tổng cộng: <span style="color: #f00;"><?php echo $tongcong; ?></span> USD</p>
               <?php



if(isset($_POST['datmua'])) {

  $name = trim($_POST['name']);
  $phone=trim($_POST['phone']);
  $email = trim($_POST['email']);
  $address = trim($_POST['address']);
  $note = trim($_POST['note']);
  $output = '';
  $errors = array();
  
  $message=null;
   
  // Validate the input
  if (strlen($name) == 0)
    array_push($errors, "");
    
 if (strlen($phone) == 0)
    array_push($errors, "");

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "");

  
  if (strlen($address) == 0) 
    array_push($errors, "");
   
    
    	foreach($giohang as $MaHang => $sl)
      {
    $truyvan_gh = mysql_query("SELECT SLTon, TenMH FROM mathang WHERE MaHang in ('$MaHang')");
						$row1 = mysql_fetch_row($truyvan_gh);
                        if($row1['0'] < $sl){
                            print "<p class=\"erorr1\">Mặt hàng <span style=\"color:#f00\">{$row1['1']}</span> hiện không còn đủ số lượng trong kho.<a href='cart.php'>Quay lai</a></p>";
                            exit();
                           } else {
                           
                           $slcon=$row1['0'] - $sl;
                        $query_update=mysql_query("UPDATE mathang set SLTon=$slcon where MaHang in ('$MaHang')");
                     
                        } 
                      
      }
  // If no errors were found, proceed with storing the user input
  if (count($errors) == 0 && $slcon > 0) {
 
    	foreach($giohang as $MaHang => $sl)
      {
    $mahh=$r_gh['1'];
    $ten=$r_gh['0'];
      $query_insert=mysql_query("Insert into dondathang (MaHH, Date, TenHH, SoLuong,GiatriDH, HoTen, Email, SDT, address, note) values('$mahh',NOW(),'$ten','$sl','$tongcong','$name','$email','$phone','$address','$note') ");
      if($query_insert){
         print "<p class=\"sucess\">Don hang da duoc gui di. <a href='index.php'>Quay lai</a></p>";
         unset($_SESSION['giohang']);
        exit;
      } else {
        $message .= "k thể đặt hàng";
      }
  }
 
  }

  
  //Prepare errors for output
  $output = '';
  foreach($errors as $val) {
    $output .= "<div class='output'>$val</div>";
  }
  
}

?>

              
                    <input type="text" name="name" placeholder="Họ Tên" />
                    <input type="text" name="phone" placeholder="Số điện thoại" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="address" placeholder="Địa chỉ giao hàng" />
                    <input type="text" name="note" placeholder="Ghi chú khác (không bắt buộc) " />
                    <input type="submit" name="datmua" value="Đặt mua" />
               </form>
               <?php echo $output; ?>
    
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

