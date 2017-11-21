<?php include ('./header.php')?>
<div id="body">
    <section>
        <div id="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" id="content">
                        <div class="box featured">
                            <?php
                                if($_GET['frame'] == "chitiet" && isset($_GET['MaHang']) )
                                {
                                    $MaHang = $_GET['MaHang'];
                                    $lenh = "select HinhAnh,TenMH,concat('$', Gia_ban) ,concat(SLTon,' cái'), MoTa, MaHang FROM mathang WHERE MaHang ='".$MaHang."'";
                                    $kq = mysqli_query($conn,$lenh);
                                    echo "<div id=\"chitiet\" >";
                                    if(mysqli_num_rows($kq)!=0)
                                    {
                                        echo "<div id=\"ct\">";
                                        $row = mysqli_fetch_row($kq);
                                        echo " <div class=\"img\"><img width='250px' height='250px' src='image/sanphamnoibat/".$row[0]."'/></div>
                                        <div class='chitiet_sp'>
                                            <h2>$row[1]</h2>
                                            <p>	
                                                <strong>Mã sản phẩm:</strong> $row[5]<br>
                                                <strong>Số lượng còn trong kho:</strong> $row[3]<br>
                                                <strong>Đặc tính kỹ thuật:</strong> $row[4]<br>
                                            </p>
                                            <h4>Giá bán:  <font color='red' size='4'>$row[2]</font>
                                            <a class='giohang' href='modules/addcart.php?MaHang=$row[5]'>thêm vào giỏ hàng</a>
                                            <br></h4>
                                            <h5> <a href='".$_SERVER['HTTP_REFERER']."'> <font size='3'>Quay về</font></a></h5>	
                                            </div>
                                    </div>
                                    </div>";
                                    }
                                }
                                else
                                {
                                    echo "Access Denny";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('./footer.php')?>

