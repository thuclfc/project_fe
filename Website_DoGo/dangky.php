<?php include ('./header.php')?>
    <section>
        <div id="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-12   " id="content">
                        <div class="breadcrumb">
                            <a href="index.php">Trang chủ</a>
                            &raquo; <a href="dangky.php">Đăng ký</a>
                        </div>
                        <h1>Đăng ký tài khoản</h1>
                        <div class="box-container">
                            <?php
                            if(isset($_POST['submit'])){

                                include_once("./ketnoi.php");

                                function check_email($email) {
                                    if (strlen($email) == 0) return false;
                                    if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) return true;

                                }

                                $message=null;
                                // Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
                                $hoten = addslashes( $_POST['firstname'] );
                                $phone = addslashes( $_POST['telephone'] );
                                $password = md5( addslashes( $_POST['password'] ) );
                                $verify_password = md5( addslashes( $_POST['password1'] ) );
                                $email = addslashes( $_POST['email'] );
                                $company = addslashes( $_POST['company'] );
                                $tp = addslashes( $_POST['city'] );
                                $qg = addslashes( $_POST['country_id'] );
                                // Kiểm tra 7 thông tin, nếu có bất kỳ thông tin chưa điền thì sẽ báo lỗi

                                if(empty($_POST['firstname'])){
                                    $hoten=false;
                                    $message .="<p>Ban chua nhap ho ten!</p>";
                                } else {
                                    $hoten=addslashes($_POST['firstname']);
                                }

                                if(empty($_POST['email'])){
                                    $email=false;
                                    $message .="<p>Ban chua nhap email</p>";
                                } else {
                                    $email=addslashes($_POST['email']);
                                }


                                if(empty($_POST['telephone'])){
                                    $phone=false;
                                    $message .="<p>Ban chua nhap dien thoai</p>";
                                } else {
                                    $phone=addslashes($_POST['telephone']);
                                }
                                if(empty($_POST['company'])){
                                    $company=false;
                                    $message .="<p>Ban chua nhap dia chi</p>";
                                } else {
                                    $company=addslashes($_POST['company']);
                                }

                                if(empty($_POST['city'])){
                                    $tp=false;
                                    $message .="<p>Ban chua nhap thanh pho</p>";
                                } else {
                                    $tp=addslashes($_POST['city']);
                                }


                                if(empty($_POST['password'])){
                                    $password=false;
                                    $message .="<p>Ban chua nhap password</p>";
                                } else {
                                    if($_POST['password']== $_POST['password1']){
                                        $password=addslashes($_POST['password']);
                                    } else {
                                        $password=false;
                                        $message .="<p>Mau khau khong dung</p>";
                                    }
                                }

                                if(mysqli_num_rows(mysqli_query($conn,"select email from  members where email='{$_POST["email"]}'"))>0)
                                {
                                    $email=false;
                                    $message .= "Email da co nguoi dung. Ban vui long chon email khac. ";

                                } else {
                                    $email=addslashes($_POST['email']);
                                }




                                if($hoten && $email && $phone && $company && $tp && $city && $password){



                                    @$a=mysqli_query($conn,"INSERT INTO members (HoTen, email, dienthoai, address, TP,QuocGia, password) VALUES ('{$hoten}', '{$email}', '{$phone}', '{$company}', '{$tp}', '{$qg}', '{$password}')");
                                    // Thông báo hoàn tất việc tạo tài khoản
                                    if ($a){
                                        echo "Tài khoản {$username} đã được tạo. <a href='login.php'>Nhấp vào đây để đăng nhập</a>";

                                        exit();
                                    } else {
                                        $message .="<p>Ban khong the dang ky</p>".mysql_error();
                                    }
                                    mysql_close();
                                } else {
                                    $message .="<p>Hay thu lai</p>";
                                }


                            }




                            ?>
                            <div id="error">
                                <?php

                                if(isset($message)){
                                    echo "<div class=\"error1\">";
                                    echo '<h4>Vui lòng sửa các lỗi sau để tiếp tục đăng ký:</h4>';
                                    echo '<p class=\'error\'>',$message,'</p>';
                                    "</div>";
                                }

                                ?>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <fieldset>
                                    <h4>Thông tin cá nhân: </h4>
                                    <hgroup>
                                        <p><b>Ho Ten: </b><input type="text" name="firstname" size="15" maxlength="15" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" /></p>
                                        <p><b>Email: </b><input type="text" name="email" size="40" maxlength="40" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" /></p>
                                        <p><b>Phone: </b><input type="text" name="telephone" size="10" maxlength="20" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']?>" /></p>
                                    </hgroup>
                                    <h4>Địa chỉ</h4>
                                    <hgroup>
                                        <p><b>Xóm/Phường/thị trấn: </b><input type="text" name="company" size="40" maxlength="40" value="<?php if(isset($_POST['company'])) echo $_POST['company'];?>" /></p>
                                        <p><b>TP: </b><input type="text" name="city" size="10" maxlength="20" value="" /></p>
                                    </hgroup>
                                    <h4>Bảo mật</h4>
                                    <hgroup>
                                        <p><b>Mat khau: </b><input type="password" name="password" size="20" maxlength="20" /></p>
                                        <p><b>Xac thuc mat khau: </b><input type="password" name="password1" size="20" maxlength="20" /></p>
                                    </hgroup>
                                </fieldset>
                                <div style="text-align: center;">
                                    <input type="submit" value="Dang ky" name="submit" />
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
<?php include ('./footer.php')?>