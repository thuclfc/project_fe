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
	// Neu co an nut thêm
	if($_POST['them'])
	{
		$ma_tb = $_POST['MaHang'];
		$ten_tb = $_POST['TenMH'];
	
		$giaban = $_POST['Gia_ban'];

		$dactinh = $_POST['mota'];
		$soluong = $_POST['SLTon'];
		$file = $_FILES['HinhAnh']['name'];
	

			$kq_query = mysql_query("INSERT INTO mathang (MaHang, TenMH ,MoTa , Gia_ban , SLTon, HinhAnh) VALUES ('$ma_tb','$ten_tb','$dactinh','$giaban','$soluong','$file')");
		
			move_uploaded_file($_FILES['file']['tmp_name'],"../image/sanphamnoibat/".$_FILES['file']['name']);
		if($kq_query == "")
		{
			$tb = "Thêm thất bại do mã thiết bị \"$ma_tb\" trùng";
		}
		else
		{
			$tb = "Thêm thành công!";
		}
	}


?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="23" colspan="2" style="background: #06c; padding:5px 0" class="style1">THÊM SẢN PHẨM</td>
    </tr>

    <tr>
      <td  class="ten_field">Mã thiết bị: </td>
      <td><label>
        <input name="MaHang" type="text" id="ma_tb"  value="<?php echo $_POST['MaHang'];  ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td class="ten_field">Tên thiết bị:</td>
      <td ><input name="TenMH" type="text" id="ten_tb" value="<?php echo $_POST['TenMH']; ?>" size="40" /></td>
    </tr>
   
  <tr>
      <td  class="ten_field">Đặc tính kỹ thuật:</td>
      <td ><label>
        <textarea name="mota" id="dactinh" cols="45" rows="4"><?php echo $_POST['mota'];  ?>
        </textarea>
      </label></td>
    </tr>
    <tr>
      <td  class="ten_field">Giá bán:</td>
      <td ><input name="Gia_ban" type="text" id="giaban" value="<?php echo $_POST['Gia_ban']; ?>" size="20" />
      </td>
    </tr>
   
   
    <tr>
      <td  class="ten_field">Số lượng còn:</td>
      <td ><input name="SLTon" type="text" id="soluong" value="<?php $_POST['SLTon'];  ?>" size="20" /></td>
    </tr>
    <tr>
      <td  class="ten_field">Hình ảnh:</td>
      <td><label>
        <input type="file" name="HinhAnh" id="file" />
      </label></td>
    </tr>
    <tr>
      <td class="style2">&nbsp;</td>
      <td class="style2" style="color: #f0c;"><?php echo $tb; ?></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="submit" name="them" id="them" value="Thêm sản phẩm" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>