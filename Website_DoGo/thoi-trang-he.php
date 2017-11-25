<?php include ('./header.php')?>
<?php
$sql_product="Select MaHang,TenMH,HinhAnh,MoTa,concat('$', Gia_ban) from mathang where MaLMH='03'";
$result_product=mysqli_query($conn,$sql_product);
//phantrang
$sodong=8;
$tongsodong=mysqli_num_rows($result_product);
$tongsotrang=ceil($tongsodong / $sodong);
if(!isset($_GET['p'])){
    $p=1;
}else{
    $p=intval($_GET['p']);
}
$x=($p-1) * $sodong;
$sql_product1="Select MaHang,TenMH,HinhAnh,MoTa,concat('$', Gia_ban) from mathang where MaLMH = '04' limit $x, $sodong";
$result_product1=mysqli_query($conn,$sql_product1);
$number_product=mysqli_num_rows($result_product1);
?>
<div class="category-product container">
    <h4>Danh sách sản phẩm / thời trang mùa hè</h4>
    <div class="products">
        <?php
        if($number_product > 0){
            while($row = mysqli_fetch_array($result_product1)){
                echo "<article class='post'>
                <a href='chitiet_sp.php?frame=chitiet&MaHang=$row[0]' class='post-thumb'><img width='250' height='250' src='image/sanphamnoibat/$row[2]' alt=''></a>
                <h3><a href='chitiet_sp.php?frame=chitiet&MaHang=$row[0]'>$row[1]</a></h3>
                <p class=\"tt\">$row[3]..</p>
                <span class='price'>$row[4]</span>
                <a class='cart' href='modules/addcart.php?MaHang=$row[0]'>thêm vào giỏ hàng</a>
            </article>";
            }

            echo "<div id='paganation'>
            <?php
            // Lấy địa chỉ hiện tại
            $self = 'danhmucsp.php?';
            page_record($self,$p,$tongsotrang);
            ?>
        </div>";

        }else{
            print "<p>Không có sản phẩm nào...</p>";
        }
        ?>
    </div>
</div>

<?php include ('./footer.php')?>
