<?php
session_start();
if (!isset($_SESSION['dangnhap']))
{
    print "<script>document.location.href='dangnhap.php'</script>";
}
$email = $_SESSION['email'];
include('../ketnoi.php');
include('../modules/pages_record.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin website fashion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, , initial-scale=1.0">
	<meta name="description" content="Fashion store" />
	<link href="images/favicon.png" rel=" shortcut icon" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
</head>
<body class="common-home">