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
	$id_sp = $_GET['MaHang'];
	// Cập nhật
	// Nếu có nút cập nhật
	if(isset($_GET['MaHang']) && $_POST['capnhat'])
	{
		$ma_tb = $_POST['MaHang'];
		$ten_tb = $_POST['TenMH'];
		$giaban = $_POST['Gia_ban'];
	    $mota=$_POST['mota'];
		$soluong = $_POST['SLTon'];
		$file = $_FILES['file']['name'];

		// Nếu không chọn file
		if($_FILES['file']['name'] == "")
		{
			mysqli_query($conn,"UPDATE mathang SET MaHang = '$ma_tb', TenMH = '$ten_tb', Gia_ban = '$giaban', SLTon= '$soluong' WHERE MaHang = '$id_sp'");
		}
		else
		{
			mysqli_query($conn,"UPDATE mathang SET MaHang = '$ma_tb', TenMH = '$ten_tb',  Gia_ban = '$giaban', SLTon= '$soluong', HinhAnh = '$file' WHERE MaHang = '$id_sp' ");
			move_uploaded_file($_FILES['file']['tmp_name'],"../image/sanphamnoibat/".$_FILES['file']['name']);
		}
		$tb = "Cập nhật thành công!";
         /*header("refresh:3;index.php");*/
	}
	$truyvan_qlsp = mysqli_query($conn,"SELECT MaHang,TenMH,Gia_ban,SLTon,HinhAnh,MoTa FROM mathang WHERE  MaHang = '$id_sp'");
	$r = mysqli_fetch_array($truyvan_qlsp);

?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="">
  <table style="width: 100%; border:1px solid #ccc; border-top:0 !important;" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" style="background: #06c; padding:5px 0" class="style1">CẬP NHẬT SẢN PHẨM</td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <?php
	  	echo "<img src='../image/sanphamnoibat/".$r[4]."' width='150px' height='150px' border='0' style='object-fit:cover; object-position: top' />";
	  ?>      </td>
    </tr>
    <tr>
      <td class="ten_field">Mã Sản Phẩm: </td>
      <td><label>
        <input name="MaHang" type="text" id="ma_tb" style="" readonly="readonly" value="<?php if(isset($_GET['MaHang'])) { echo $r['MaHang']; } ?>" size="20" />
      </label></td>
    </tr>
    <tr>
      <td  class="ten_field">Tên Sản phẩm:</td>
      <td><input name="TenMH" type="text" id="ten_tb" value="<?php if(isset($_GET['MaHang'])) { echo $r['TenMH']; } ?>" size="40" /></td>
    </tr>


      <td class="ten_field">Giá bán:</td>
      <td><input name="Gia_ban" type="text" id="giaban" value="<?php if(isset($_GET['MaHang'])) { echo $r['Gia_ban']; }?>" size="20" />

        </td>
    </tr>

    <tr>
      <td class="ten_field">Đặc tính kỹ thuật:</td>
      <td><label>
        <textarea name="mota" id="dactinh" cols="55" rows="4"><?php if(isset($_GET['MaHang'])) { echo $r['MoTa']; } ?>
        </textarea>
      </label></td>
    </tr>
    <tr>
      <td class="ten_field">Số lượng còn:</td>
      <td><input name="SLTon" type="text" id="soluong" value="<?php if(isset($_GET['MaHang'])) { echo $r['SLTon']; } ?>" size="20" /></td>
    </tr>
    <tr>
      <td class="ten_field">Hình ảnh:</td>
      <td><label>
        <input type="file" name="file" id="file" />
      </label></td>
    </tr>
    <tr>
      <td class="style2">&nbsp;</td>
      <td class="style2" style="color: #f0c;"><?php echo $tb; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="capnhat" id="capnhat" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
