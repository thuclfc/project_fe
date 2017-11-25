<?php include ('./header.php')?>
<section>
    <div id="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="box featured">
                        <?php
                        $giohang = $_SESSION['giohang'];
                        // Nếu người dùng cập nhật lại giỏ hàng (ấn nút cập nhật)
                        if(isset($_POST['capnhat']) && 	count($giohang) != "")
                        {
                            $soluong_cn = $_POST['soluong'];
                            print_r ($soluong_cn);
                            foreach($soluong_cn as $MaHang => $sl)
                            {
                                // Nếu như người dùng đặt lại số lượng  = 0  ==> thì ta hủy luôn sản phẩm đó ($id_sp) trong giỏ hàng ($_SESSION['giohang'])
                                if($sl == 0)
                                {
                                    unset($_SESSION['giohang'][$MaHang]);
                                }
                                // Nguoc lại số lượng sp phải là số ta cập nhật lại số lượng giỏ hàng
                                else if($sl > 0 && is_numeric($sl))
                                {
                                    $_SESSION['giohang'][$MaHang] = $sl;
                                }
                                // Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
                                // refresh lại giỏ hàng
                                header("location: ".$_SERVER['REQUEST_URI']."");
                            }
                        }
                        ?>
                        <div id="cart1">
                            <?php
                            // nếu giỏ hàng có sản phẩm
                            if(count($giohang))
                            {
                                ?>
                                <form action="" method="post">
                                    <?php
                                    // Duyệt hết giỏ hàng
                                    $tongcong =0;
                                    foreach($giohang as $MaHang => $sl)
                                    {
                                        // truy van lay thong tin san pham
                                        $truyvan_gh = mysqli_query($conn,"SELECT TenMH,MaHang,concat(Gia_ban,' USD'), HinhAnh FROM mathang WHERE MaHang in ('$MaHang')");
                                        $r_gh = mysqli_fetch_row($truyvan_gh);
                                        ?>
                                        <div id="viewcart" class="cf">
                                            <div class="left"><a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><img src="image/sanphamnoibat/<?php echo $r_gh[3]; ?>" border="1" width="250" height="250" /></a></div>
                                            <p>Tên sản phẩm: <a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><?php echo $r_gh[0]; ?> </a></p>
                                            <p> Mã SP: <?php echo $MaHang; ?></p>
                                            <p>Giá bán: <font color="#FF0000"><?php echo $r_gh[2]; ?>  </font></p>
                                            <div class="right">
                                                <p>Số lượng:
                                                    <input name="soluong[<?php echo $MaHang; ?>]" type="text" id="soluong" size="5" value="<?php echo $sl; ?>" /> cái</p>
                                                <p>Thành tiền: <font color="#FF0000"><?php echo $sl*$r_gh[2]; ?> USD</font></p>
                                                <a href="modules/delcart.php?MaHang=<?php echo $MaHang; ?>"> Xóa sản phẩm </a>
                                            </div>
                                        </div>
                                        <?php
                                        $tongcong += $sl*$r_gh[2];
                                    }
                                    ?>
                                    <input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='index.php'" value="Mua thêm" />
                                    <input name="capnhat" style="height:30px; padding:0 5px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" type="submit" value="Cập nhật giỏ hàng" />
                                    <input type='button' style="height:30px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;" onClick="location='modules/delcart.php?del_all=true'" value="Xóa giỏ hàng" /><p></p>
                                    <a href="muahang.php" style="height:30px; float:right; margin-top:-65px; padding:6px 5px; border:#CCCCCC 1px solid; background:#FFCCCC; color:#000099;font-weight:bold;">Mua Hàng</a>
                                    <p class="total">Tổng cộng: <font color="#FF0000"><?php echo $tongcong; ?></font> USD</p>
                                </form>
                                <?php
                            } // end if gio hang co sp
                            else
                            {
                                ?>
                                <div id="giohang">
                                    Bạn chưa có sản phẩm nào. Hãy quay về <a href="index.php">trang chủ</a> và mua sản phẩm
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<?php include ('./footer.php')?>
