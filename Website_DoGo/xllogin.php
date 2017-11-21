<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

include("./ketnoi.php");

 if(isset($_POST['submit'])){
    $email=addslashes($_POST['email']);
    $password=md5(addslashes($_POST['password']));
    $sql_query=mysql_query("select email, password from members where email='{$email}'");
    $member=mysql_fetch_array($sql_query);
    if(mysql_num_rows($sql_query)==0)
    {
        print "Ten truy cap khong ton tai. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit;
    }
    if($password !=$member['password'])
    {
        print "Mat khau khong dung. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit;
    }
    // khoi dong phien lam viec session
    $_SESSION['user_id']=$member['id'];
    $_SESSION['user_admin']=$member['admin'];
    
    print "Dang nhap thanh cong. Tai khoan cua ban la {$member['username']}. <a href='index.php'>Quay lai trang chu</a>";
}
else
{
    print <<<EOF
    <form action="login.php?act=do" method="post">
    Username: <input type="text" name="username" value="">
    Password: <input type="password" name="password" value="">
    <input type="submit" name="submit" value="Dang Nhap">
    </form>
EOF;
}
?>