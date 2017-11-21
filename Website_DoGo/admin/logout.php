<?php 
	session_start();
	if (!isset($_SESSION['dangnhap']))
	{
		print "<script>document.location.href='dangnhap.php'</script>";
	}
	else
	{
	   	unset($_SESSION['u_id']);
		unset($_SESSION['email']);
        unset($_SESSION['dangnhap']);
	print "<script>document.location.href='dangnhap.php'</script>";
;	}
?>
