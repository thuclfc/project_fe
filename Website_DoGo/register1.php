  <?php
  if(isset($_POST['submit'])){
    $email=addslashes($_POST['email']);
    $password=addslashes($_POST['password']);
    $sql_query=mysqli_query($conn,"select HoTen, email, password from members where email='{$email}'");
    $member=mysqli_fetch_array($sql_query);
    if(empty($member[1]) && empty($member[2]))
    {
        print "Email hoặc mật khẩu không đúng. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit;
    }
    if($password !=$member['password'])
    {
        print "Mat khau khong dung. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit;
    }
    // khoi dong phien lam viec session
    $email=$_SESSION['email'];
    $_SESSION['user_id']=$member['id'];
    $_SESSION['email']=$member['email'];
    $_SESSION['HoTen']=$member['HoTen'];
    $_SESSION['login']=1;
    print "Dang nhap thanh cong. Tai khoan cua ban la {$member['email']}. <a href='index.php'>Quay lai trang chu</a>";
   header("refresh:3;index.php");
}
else
{
    print <<<EOF
    <form action="login.php?act=do" method="post" class="login">
        <label>Email: </label> <input type="text" name="email" value="">
        <label>Password: </label> <input type="password" name="password" value="">
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
EOF;
}
?>