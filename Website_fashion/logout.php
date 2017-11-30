<?php 
	session_start();
	if (!isset($_SESSION['login']))
	{
		print "<script>document.location.href='index.php'</script>";
	}
	else
	{
	   	unset($_SESSION['u_id']);
		unset($_SESSION['email']);
        unset($_SESSION['login']);
	print "<script>document.location.href='index.php'</script>";
;	}
?>