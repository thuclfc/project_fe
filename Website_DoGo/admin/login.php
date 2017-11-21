<?php
if(isset($_POST['submit'])){
    $email=addslashes($_POST['email']);
    $password=addslashes($_POST['password']);
    $sql_login="select id, HoTen, email, password, level from members where email='{$email}' and password='$password'";
    $sql_query=mysqli_query($conn,$sql_login);
    $member=mysqli_fetch_array($sql_query);
    if(mysqli_num_rows($sql_query)==0)
    {
        print "Ten truy cap khong ton tai. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit;
    }
   
    if($member['level'] !=2){
        print "Bạn không phải là admin. <a href='javascript:history.go(-1)'>Quay lai</a>";
        exit();
    }
    // khoi dong phien lam viec session
    $_SESSION['u_id']=$member['id'];
   
    $_SESSION['email']=$member['email'];
    $_SESSION['dangnhap']="1";
    print "Dang nhap thanh cong. Tai khoan cua ban la {$member['email']}. <a href='index.php'>Quay lai trang chu</a>";
   header("refresh:3;index.php");
}
else
{
    print <<<EOF
    <form action="" method="post" class="login">
    <label>Email: </label> <input type="text" name="email" value="">
    <label>Password: </label> <input type="password" name="password" value="">
    <input type="submit" name="submit" value="Dang Nhap">
    </form>
EOF;
}
?>