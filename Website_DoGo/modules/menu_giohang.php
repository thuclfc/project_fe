<?php
$giohang = $_SESSION['giohang'];
if(count($giohang) != "")
{
    $tongcong = 0;
    $soluong=0;
    foreach($giohang as $MaHang => $sl)
    {
        // truy van lay thong tin san pham
        $truyvan_gh = mysqli_query($conn,"SELECT TenMH,MaHang,concat(Gia_ban,'USD'),HinhAnh FROM mathang WHERE MaHang in ('$MaHang')");
        $r_gh = mysqli_fetch_row($truyvan_gh);
        $tongcong += $sl*$r_gh[2];
        $soluong +=$sl;

    }
    echo "Số lượng: <font color='red'>$soluong</font> - <font color='red'>$tongcong</font> USD";

    ?>
    <?php
}
else
{
    ?>
    0 SẢN PHẨM - 0 VNĐ
    <?php
}
?>
