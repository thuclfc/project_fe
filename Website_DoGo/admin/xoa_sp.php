<?php
session_start();
include("ketnoi.php");
	
		$del_id_sp = $_SESSION['del_id_sp'];
		// Xóa
		$query=("DELETE FROM mathang WHERE MaHang = '$del_id_sp'");
        $result=mysql_query($query);
if($result){
    echo "Sản phẩm với mã $del_id_sp đã xóa thành công";
} else{
    echo "co loi";
}        
	
?>