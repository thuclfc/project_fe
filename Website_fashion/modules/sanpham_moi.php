<?php
    $sql="SELECT HinhAnh, TenMH, concat('$', Gia_ban), MaHang, MoTa FROM mathang";
	$result = mysqli_query($conn,$sql);
	// Phân trang
	$sodong =8;
	$tongsodong = mysqli_num_rows($result);
	$tongsotrang = ceil($tongsodong / $sodong);
	if(!isset($_GET["p"]))
	{
		$p = 1;
	}
	else
	{
		$p = intval($_GET["p"]);
	}
	$x = ($p -1)* $sodong;
	$sql1="SELECT HinhAnh, TenMH, concat('$', Gia_ban), MaHang, MoTa, SLTon FROM mathang ORDER BY SLTon DESC limit $x, $sodong";
	$truyvan_1 = mysqli_query($conn,$sql1);
?>
<div id="product">
     <div id="label">
          <h4>Sản phẩm nổi bật</h4>
     </div>
     <div id="sp">
        <?php
        $dem = 1;
        while($row = mysqli_fetch_array($truyvan_1))
        {
            if($row[5]>0){
          if($dem %2 ==1)
          {
            echo "<div id=\"view\">";
          }
                echo "<div class=\"pro\"  width='50%' class='phansp' height='250px' align='center'>
                            <a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'><img border='1px' width='240px' height='240px' src='image/sanphamnoibat/$row[0]'/></a><br>
                            <h3><a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'>$row[1]</a></h3>
                            <p class=\"tt\">$row[4]..</p>
                            <span class='giaban'>$row[2]</span><br>
                            <a class='giohang' href='modules/addcart.php?MaHang=$row[3]'>thêm vào giỏ hàng</a>
                    </div>";

        if($dem % 2 == 0)
        {
            echo "</div>";
        }
        $dem++;
        }
      }
     ?>
     </div>
     <div class="clear"></div>
     <div id="paganation">
        <?php
        // Lấy địa chỉ hiện tại
        $self = "index.php?";
        page_record($self,$p,$tongsotrang);
    ?>
     </div>
</div>
            