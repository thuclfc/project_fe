<?php
   


 if(isset($_POST['submit'])){
    
     include_once("./ketnoi.php");
    
    function check_email($email) {
    if (strlen($email) == 0) return false;
    if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) return true;
    return false;
}
  function escape_data($data){
        global $dbc;
        if(ini_get('magic_quotes_gpc')){
            $data=stripslashes($data);
        }
        return mysql_real_escape_string($data, $dbc);
    }
$message=null;
    // Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
    $hoten = addslashes( $_POST['firstname'] );
    $phone = addslashes( $_POST['telephone'] );
    $password = md5( addslashes( $_POST['password'] ) );
    $verify_password = md5( addslashes( $_POST['password1'] ) );
    $email = addslashes( $_POST['email'] );
    $company = addslashes( $_POST['company'] );
    $tp = addslashes( $_POST['city'] );
    $qg = addslashes( $_POST['country_id'] );
    // Kiểm tra 7 thông tin, nếu có bất kỳ thông tin chưa điền thì sẽ báo lỗi
    
     if(empty($_POST['firstname'])){
         $hoten=false;
         $message .="<p>Ban chua nhap ho ten!</p>";
      } else {
        $hoten=escape_data($_POST['firstname']);
      }
    
     if(empty($_POST['email'])){
        $email=false;
        $message .="<p>Ban chua nhap email</p>";
      } else {
        $email=escape_data($_POST['email']);
      }
       if(empty($_POST['telephone'])){
        $phone=false;
        $message .="<p>Ban chua nhap dien thoai</p>";
      } else {
        $phone=escape_data($_POST['email']);
      }
      if(empty($_POST['company'])){
        $company=false;
        $message .="<p>Ban chua nhap dia chi</p>";
      } else {
        $company=escape_data($_POST['company']);
      }
    
       if(empty($_POST['city'])){
        $tp=false;
        $message .="<p>Ban chua nhap thanh pho</p>";
      } else {
        $tp=escape_data($_POST['city']);
      }
     if(empty($_POST['country_id'])){
        $qg=false;
        $message .="<p>Ban chua chon quoc gia</p>";
      } else {
        $qg=escape_data($_POST['country_id']);
      }
    
     if(empty($_POST['password'])){
        $password=false;
        $message .="<p>Ban chua nhap password</p>";
      } else {
        if($_POST['password']== $_POST['password1']){
            $password=escape_data($_POST['password']);
        } else {
            $password=false;
            $message .="<p>Mau khau khong dung</p>";
        }
      }
    
    
    
    
    
    
    
    if ( ! $hoten || ! $_POST['password'] ||  ! $email || ! $phone || ! $tp || ! $company || ! $qg)
    {
        print "Xin vui lòng nhập đầy đủ các thông tin. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
    }
    // Kiểm tra username nay co nguoi dung chua

    // Kiểm tra email nay co hop le ko
    if (!check_email($email))
    {
        print "Email này ko hợp lệ. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
    }

    // Kiểm tra email nay co nguoi dung chua
    if ( mysql_num_rows(mysql_query("SELECT email FROM members WHERE email='$email'"))>0)
    {
        print "Email này đã có người dùng, Bạn vui lòng chọn Email khác. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
        exit;
    }
    // Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau

    // Tiến hành tạo tài khoản
    @$a=mysql_query("INSERT INTO members (HoTen, email, dienthoai, address, TP,QuocGia, password) VALUES ('{$hoten}', '{$email}', '{$phone}', '{$company}', '{$tp}', '{$qg}', '{$password}')");
    // Thông báo hoàn tất việc tạo tài khoản
    if ($a)
        print "Tài khoản {$username} đã được tạo. <a href='login.php'>Nhấp vào đây để đăng nhập</a>";
    else
        print "Có lỗi trong quá trình đăng kí, Vui lòng liên hệ BQT";
}
?>