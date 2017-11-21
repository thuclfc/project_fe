<!DOCTYPE html>

<html dir="ltr" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    include ('class/Database.class.php');
    $db = new Database(); // Khoi tao 1 doi tuong thuoc class Database
    //Khi khoi tao 1 doi tuong cua bat ky class nao, neu class co ham __construct() thi no se chay ham ho
    //Lay tat record cua bang san pham nhe
    $sql = 'SELECT * FROM mathang'; // Cau truy van nay se lay ra tat ca nhung ban ghi trong bang mat hang
    // Goi ham findAll trong class Database
    $list = $db->findAll($sql);
    // IN RA man hinh cai mang list nhe
    //echo '<pre>'; // Them cai the này cho de nhin
    //print_r($list); // Ham in mang
    //$key se tuong duong voi 0-1-2-3-4-5....
    
    // $value se tuong tuong voi tung mang con ben trong HỈU KO? ok
    foreach($list as $key=>$value){
        echo 'key:' . $key . '<br />';
        echo 'MaNCC:' . $value['MaNCC'].'<br />';
        echo 'TenMH:' . $value['TenMH'].'<br />';
        echo 'Hinhanh:' . $value['Hinhanh'].'<br />';
    }
?>