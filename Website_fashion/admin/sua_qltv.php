<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style1.css" />
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {color: #FFFFFF}
.ten_field{
padding-right:15px;
}
-->
</style>
</head>

<body>
<?php
	include("../ketnoi.php");
	$id_tv = $_GET['id'];
	// Cập nhật
	// Neu co an nut cap nhat
	if(isset($_GET['id']) && $_POST['capnhat'])
	{
		$id_tv = $_POST['id'];
		$level = $_POST['level'];
		$HoTen = $_POST['hoten'];
	    $email=$_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$address=$_POST['address'];
        $password=$_POST['password'];

        mysqli_query($conn,"UPDATE members SET id = '$id_tv', level = '$level', HoTen = '$HoTen', email= '$email', dienthoai='$dienthoai', address='$address' WHERE id = '$id_tv'");
	
		$tb = "Cập nhật thành công!";
        /* header("refresh:3;index.php");*/
	}
	$truyvan_qlsp = mysqli_query($conn,"SELECT id,level,HoTen,email,password,dienthoai,address FROM members WHERE  id = '$id_tv'");
	
	$r = mysqli_fetch_array($truyvan_qlsp);

?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="">
  <table style="width: 100%; border:1px solid #ccc; border-top:0 !important;" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" style="background: #06c; padding:5px 0" class="style1">CẬP NHẬT THÀNH VIÊN</td>
    </tr>
      <tr>
          <td class="style2">&nbsp;</td>
          <td class="style2" style="color: #f0c;"><?php echo $tb; ?></td>
      </tr>
    <tr>
      <td class="ten_field">ID: </td>
      <td>
        <input name="id" type="text" id="ma_tv" style="" readonly="readonly" value="<?php if(isset($_GET['id'])) { echo $r['id']; } ?>" size="20" />
      </td>
    </tr>
    <tr>
      <td class="ten_field">Level:</td>
      <td><input name="level" type="text" id="ten_tb" value="<?php if(isset($_GET['id'])) { echo $r['level']; } ?>" size="40" /></td>
    </tr>
      <tr>
      <td class="ten_field">HoTen:</td>
      <td><input name="hoten" type="text" id="giaban" value="<?php if(isset($_GET['id'])) { echo $r['HoTen']; }?>" size="20" /></td>
    </tr>
    <tr>
      <td class="ten_field">Email:</td>
      <td><input name="email" type="text" id="email" value="<?php if(isset($_GET['id'])) { echo $r['email']; } ?>" size="20" /></td>
    </tr>
     <tr>
      <td class="ten_field">Điện thoại: </td>
      <td><input name="dienthoai" type="text" id="phone" value="<?php if(isset($_GET['id'])) { echo $r['dienthoai']; } ?>" size="20" /></td>
    </tr>
     <tr>
      <td class="ten_field">Address:</td>
      <td><input name="address" type="text" id="address" value="<?php if(isset($_GET['id'])) { echo $r['address']; } ?>" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="capnhat" id="capnhat" value="Cập nhật" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
