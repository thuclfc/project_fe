<?php
session_start();
ob_start();
?>
    <head>
        <meta http-equiv="content-type" content="text/html charset=utf-8" />
    </head>
<?php
// connect to db
$id_tb = $_GET['MaHang'];
if($id_tb != "") //  Nếu có ID truyền vào
{
    require('../ketnoi.php');
    // Kiểm tra xem id này có trong CSDL hay k?
    $q = mysqli_query($conn,"SELECT MaHang FROM mathang WHERE MaHang in ('$MaHang')");
    $num_q = mysqli_num_rows($q);
    // Nếu tồn tại
    if($num_q == 1)
    {
        //session_register("giohang");
        //  nếu id này có trong giỏ hàng rồi
        if(isset($_SESSION['giohang'][$MaHang]))
        {
            // Tăng số lượng nó lên
            $_SESSION['giohang'][$MaHang] ++;
        }
        else // Chưa có trong giỏ hàng (mới chọn)
        {
            $_SESSION['giohang'][$MaHang] = 1; // Số lượng mặc định là 1
        }
        // Chuyển tức khắc qua trang giỏ hàng
        header("location: ../cart.php");
    }
    else
    {
        echo "<p align='center' style='font-size:18px;color:red'>Không tồn tại sản phẩm này!</p>";
        header("refresh:3;../cart.php");
    }
}
else // Nếu không có id truyền vào
{
    echo "<p align='center' style='font-size:18px;color:red'>Access Denny!</p>";
}

?>