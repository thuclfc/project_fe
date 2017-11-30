<?php include ('./header.php')?>
<section>
    <div id="container">
        <div class="container">
            <div id="notification"></div>
            <div class="row">
                <div class="col-sm-12" id="content">
                    <div class="box featured">
                        <div id="mask1">
                            <h4>Thông tin mua hàng</h4>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="register-form">
                                <?php
                                // Duyệt hết giỏ hàng
                                $giohang = $_SESSION['giohang'];
                                $tongcong =0;
                                foreach($giohang as $MaHang => $sl)
                                {
                                    // truy van lay thong tin san pham
                                    $truyvan_gh = mysqli_query($conn,"SELECT TenMH,MaHang,concat(Gia_ban,' USD'), HinhAnh FROM mathang WHERE MaHang in ('$MaHang')");
                                    $r_gh = mysqli_fetch_row($truyvan_gh);
                                    $ten=$r_gh[0];
                                    ?>
                                    <div id="viewcart1">
                                        <div class="left"><a href="chitiet_sp.php?frame=chitiet&MaHang=<?php echo $MaHang; ?>"><img src="image/sanphamnoibat/<?php echo $r_gh[3]; ?>" border="1" width="70" height="70" /></a></div>
                                        <p>Tên sản phẩm: <?php echo $ten; ?></p>
                                        <p>Giá bán: <font color="#FF0000"><?php echo $r_gh[2]; ?>  </font></p>
                                        <p>Số lượng:
                                        <input name="soluong[<?php echo $MaHang; ?>]" type="text" id="soluong" size="5" value="<?php echo $sl; ?>" /> cái</p>
                                    </div>
                                    <?php
                                    $tongcong += $sl*$r_gh[2];
                                }
                                ?>
                                <p class="total1">Tổng cộng: <span style="color: #f00;"><?php echo $tongcong; ?></span> USD</p>
                                <?php
                                if(isset($_POST['datmua'])) {
                                    $name = trim($_POST['name']);
                                    $phone=trim($_POST['phone']);
                                    $email = trim($_POST['email']);
                                    $address = trim($_POST['address']);
                                    $note = trim($_POST['note']);
                                    $output = '';
                                    $errors = array();
                                    $message=null;

                                    // Validate the input
                                    if(empty($_POST['name'])){
                                        $name=false;
                                        $message .="<p>Bạn chua nhập họ tên!</p>";
                                    } else {
                                        $name=addslashes($_POST['name']);
                                    }

                                    if(empty($_POST['phone'])){
                                        $phone=false;
                                        $message .="<p>Bạn chưa nhập số điện thoại</p>";
                                    }else{
                                        $phone=addslashes($_POST['phone']);
                                    }

                                    if(empty($_POST['email'])){
                                        $email=false;
                                        $message .="<p>Bạn chưa nhập email</p>";
                                    }else{
                                        $email=addslashes($_POST['email']);
                                    }

                                    if(empty($_POST['address'])){
                                        $address=false;
                                        $message .="<p>Bạn chưa nhập địa chỉ</p>";
                                    }else{
                                        $address=addslashes($_POST['address']);
                                    }

                                    if(isset($message)){
                                        echo "<div class=\"error1\">";
                                        echo '<h5>Vui lòng sửa các lỗi sau để tiếp tục mua hàng:</h5>';
                                        echo '<p class=\'error\'>',$message,'</p>';
                                        echo "</div>";
                                    }

                                    if(!isset($message)){
                                        foreach($giohang as $MaHang => $sl)
                                        {
                                            $truyvan_gh = mysqli_query($conn,"SELECT SLTon, TenMH FROM mathang WHERE MaHang in ('$MaHang')");
                                            $row1 = mysqli_fetch_row($truyvan_gh);
                                            if($row1['0'] < $sl){
                                                print "<p class=\"erorr1\">Mặt hàng <span style=\"color:#f00\">{$row1['1']}</span> hiện không còn đủ số lượng trong kho.<a href='cart.php'>Quay lai</a></p>";
                                                exit();
                                            } else {
                                                $slcon=$row1['0'] - $sl;
                                                $query_update=mysqli_query($conn,"UPDATE mathang set SLTon = $slcon where MaHang in ('$MaHang')");
                                            }
                                        }
                                    }
                                    // If no errors were found, proceed with storing the user input
                                    if (count($message) == 0 && $slcon >= 0) {
                                        foreach($giohang as $MaHang => $sl)
                                        {
                                            $mahh=$r_gh['1'];
                                            $ten=$r_gh['0'];
                                            $query_insert=mysqli_query($conn,"Insert into dondathang (MaHH, Date, TenHH, SoLuong,GiatriDH, HoTen, Email, SDT, address, note) values('$mahh',NOW(),'$ten','$sl','$tongcong','$name','$email','$phone','$address','$note') ");
                                            if($query_insert){
                                                print "<p class=\"sucess\">Don hang da duoc gui di. <a href='index.php'>Quay lai</a></p>";
                                                unset($_SESSION['giohang']);
                                                exit;
                                            } else {
                                                $message .= "k thể đặt hàng";
                                            }
                                        }
                                    }
                                    //Prepare errors for output
                                    $output = '';
                                    foreach($errors as $val) {
                                        $output .= "<div class='output'>$val</div>";
                                    }
                                }
                                ?>
                                <input type="text" name="name" placeholder="Họ Tên" />
                                <input type="text" name="phone" placeholder="Số điện thoại" />
                                <input type="text" name="email" placeholder="Email" />
                                <input type="text" name="address" placeholder="Địa chỉ giao hàng" />
                                <input type="text" name="note" placeholder="Ghi chú khác (không bắt buộc) " />
                                <input type="submit" name="datmua" value="Đặt mua" />
                            </form>
                            <?php echo $output; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include ('./footer.php')?>
