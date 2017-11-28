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
	if(isset($_POST['them']))
	{
		$id_tv = $_POST['id'];
		$level = $_POST['level'];
		$ten_tv = $_POST['HoTen'];
		$email = $_POST['email'];
		$phone = $_POST['dienthoai'];
		$password = $_POST['password'];

		if(empty($id_tv) || empty($level) || empty($ten_tv) || empty($email) || empty($phone) || empty($password)){
		    $messages .= "Bạn phải nhập thông tin cho thành viên trước khi thêm thành viên<br>";
        }

        if(mysqli_num_rows(mysqli_query($conn,"select email from members where email='{$_POST["email"]}'"))>0)
        {
            $email=false;
            $messages .= "Thêm thất bại do email \"{$_POST["email"]}\" đã tồn tại...<br>";

        } else {
            $email=addslashes($_POST['email']);
        }

        if($id_tv && $level && $ten_tv && $email && $phone && $password){
            $kq_query = mysqli_query($conn,"INSERT INTO members (id, level, HoTen, email, dienthoai, password) VALUES ('$id_tv','$level','$ten_tv','$email','$phone','$password')");
            $messages = "Thêm thành công!";
        }
	}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
      <td height="23" colspan="2" style="background: #06c; padding:5px 0" class="style1">THÊM MỚI THÀNH VIÊN</td>
    </tr>
      <tr>
          <td class="style2"></td>
          <td class="style2" style="color: #f0c; padding-top: 10px;"><?php echo $messages; ?></td>
      </tr>
      <tr>
      <td  class="ten_field">ID: </td>
      <td>
        <input name="id" type="text" id="id_tv" value="<?php echo $_POST['id'];  ?>" size="20" />
      </td>
    </tr>
      <tr>
      <td class="ten_field">Level:</td>
      <td><input name="level" type="text" id="level" value="<?php echo $_POST['level']; ?>" size="40" /></td>
    </tr>
      <tr>
      <td  class="ten_field">Họ tên:</td>
      <td >
        <input name="HoTen" type="text" id="ten_tv" value="<?php echo $_POST['HoTen'];  ?>">
      </td>
    </tr>
      <tr>
      <td  class="ten_field">Email:</td>
      <td ><input name="email" type="text" id="email" value="<?php echo $_POST['email']; ?>" size="20" />
      </td>
    </tr>
      <tr>
      <td  class="ten_field">Điện thoại:</td>
      <td ><input name="dienthoai" type="text" id="phone" value="<?php $_POST['dienthoai'];  ?>" size="20" /></td>
    </tr>
      <tr>
          <td  class="ten_field">Mật khẩu:</td>
          <td ><input name="password" type="password" id="password" value="<?php $_POST['password'];  ?>" size="20" /></td>
      </tr>
      <tr>
      <td colspan="2">
        <input type="submit" name="them" id="them" value="Thêm thành viên" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
