<?php
session_start();
include("ketnoi.php");
$id_sp = $_GET['MaHang'];
$truyvan_qlsp = mysqli_query($conn,"SELECT MaHang FROM mathang WHERE  MaHang = '$id_sp'");
$r = mysqli_fetch_array($truyvan_qlsp);
if($_GET['del_id_sp'])
    {
        $del_id_sp = $_GET['del_id_sp'];
        // Xóa
        $result=mysqli_query($conn,"DELETE FROM mathang WHERE MaHang = '$del_id_sp'");
        if($result){
            echo "Sản phẩm với mã $del_id_sp đã xóa thành công";
        } else{
            echo "Có lỗi";
        }
    }
?>