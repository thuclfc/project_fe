<?php session_start(); ?>
<?php
	$sql_sever = "localhost";
	$sql_user = "root";
	$sql_pass = "";
	$sql_database = "website_fashion";
	$conn = new mysqli($sql_sever,$sql_user,$sql_pass,$sql_database);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{

	}
// session start
ob_start();
//session_start();
?>
