<?php
	session_start();
	ob_start();
	if(isset($_GET['MaHang']))
	{
		unset($_SESSION['giohang'][$_GET['MaHang']]);
		header("location: ../index.php?frame=giohang");
	}
	if($_GET['del_all'] == "true" && count($_SESSION['giohang']))
	{
		foreach($_SESSION['giohang'] as $MaHang => $sl)
		{
			unset($_SESSION['giohang'][$MaHang]);	
		}
		header("location: ../index.php?frame=giohang");
	}	

?>