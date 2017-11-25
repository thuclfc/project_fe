<?php include ('./header.php')?>
<section>
    <div id="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-12   " id="content">
                    <div class="breadcrumb">
                        <a href="index.php">Trang chủ</a>
                        &raquo; <a href="xlsearch.php">Kết quả tìm kiếm</a>
                    </div>
                    <div class="box-container">
                        <?php
                        if($_GET['kq'])
                        {
                            $ten_sp = $_GET['kq'];
                        }
                        else
                        {
                            $ten_sp = $_POST['search'];
                        }
                        if((isset($_POST['search']) && $_POST['search']!="") || $_GET['kq'])
                        {
                            $query = mysqli_query($conn,"select HinhAnh, TenMH, concat('$',Gia_ban,' USD'), MaHang FROM mathang WHERE TenMH like '%".$ten_sp."%'");
                            $tongsodl = mysqli_num_rows($query);
                            if($tongsodl == 0)
                            {
                                $tb = "Không tìm thấy từ khóa: \"<font color='orange'>$ten_sp</font>\" trong cơ sở dữ liệu!";
                            }
                            else
                            {
                                $tb = "Có <font color='orange'> $tongsodl</font> kết quả được tìm thấy";
                            }

                            // Phan trang
                            $sodong = 6;
                            $tongsodong = mysqli_num_rows($query);
                            $tongsotrang = ceil($tongsodong / $sodong);
                            if(!isset($_GET["p"]))
                            {
                                $p = 1;
                            }
                            else
                            {
                                $p = intval($_GET["p"]);
                            }
                            $x = ($p -1) * $sodong;

                            $truyvan_pages=mysqli_query($conn,"select HinhAnh,TenMH,concat('$',Gia_ban,' USD'), MaHang, SLTon FROM mathang WHERE  TenMH like '%".$ten_sp."%' limit $x, $sodong");
                        }
                        else
                        {
                            $tb ="Bạn chưa nhập từ khóa tìm kiếm";
                        }
                        ?>

                        <?php
                        if(isset($_POST['search']) || isset($_GET['kq']))
                        {
                            echo "<p class=\"message\">Kết quả tìm kiếm: $tb</p>";
                        }
                        ?>

                        <?php
                        if((isset($_POST['search']) && $_POST['search']!="")|| isset($_GET['kq']))
                        {
                            while($row=mysqli_fetch_array($truyvan_pages))
                            {
                                echo "<div class='chitiet_sp1'>
                                    <a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'><img src='image/sanphamnoibat/".$row[0]."' width='250px' height='250px' border='0px' /></a>
                                    <h3><a href='chitiet_sp.php?frame=chitiet&MaHang=$row[3]'>$row[1]</a></h3>
                                    <p>Mã sản phẩm: $row[3]</p>
                                    <p>Số lượng còn trong kho: $row[4]</p>
                                    <p>Giá: <font color='red'>$row[2]</font>	
                                    <a class='giohang' href='modules/addcart.php?MaHang=$row[3]'>thêm vào giỏ hàng</a></p>		
					            </div>";
                            }
                        }
                        ?>
                        <div id="paganation">
                            <?php
                            // Lấy địa chỉ hiện tại
                            echo "<div class=\"paga\">";
                            $self = "?frame=search&kq=$ten_sp&";
                            page_record($self,$p,$tongsotrang);
                            echo "</div>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('./footer.php')?>


