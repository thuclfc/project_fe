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
                        <h1 style="font-size: 20px; text-transform: uppercase">Đăng ký tài khoản</h1>
                        <div class="box-container">
                            <?php
                            if(isset($_POST['submit'])){
                                function check_email($email) {
                                    if (strlen($email) == 0) return false;
                                    if (mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) return true;
                                }
                                $message=null;
                                // Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
                                $hoten = addslashes( $_POST['firstname'] );
                                $phone = addslashes( $_POST['sdt'] );
                                $password = md5( addslashes( $_POST['password'] ) );
                                $verify_password = md5( addslashes( $_POST['password1'] ) );
                                $email = addslashes( $_POST['email'] );

                                // Kiểm tra thông tin, nếu có bất kỳ thông tin chưa điền thì sẽ báo lỗi

                                if(empty($_POST['firstname'])){
                                    $hoten=false;
                                    $message .="<p>Bạn chua nhập họ tên!</p>";
                                } else {
                                    $hoten=addslashes($_POST['firstname']);
                                }

                                if(empty($_POST['email'])){
                                    $email=false;
                                    $message .="<p>Bạn chưa nhập email</p>";
                                } else {
                                    $email=addslashes($_POST['email']);
                                }

                                if(empty($_POST['sdt'])){
                                    $phone=false;
                                    $message .="<p>Bạn chưa nhập SĐT</p>";
                                } else {
                                    $phone=addslashes($_POST['sdt']);
                                }

                                if(empty($_POST['password'])){
                                    $password=false;
                                    $message .="<p>Bạn chưa nhập mật khẩu</p>";
                                } else {
                                    if($_POST['password']== $_POST['password1']){
                                        $password=addslashes($_POST['password']);
                                    } else {
                                        $password=false;
                                        $message .="<p>Mật khẩu không đúng</p>";
                                    }
                                }

                                if(mysqli_num_rows(mysqli_query($conn,"select email from  members where email='{$_POST["email"]}'"))>0)
                                {
                                    $email=false;
                                    $message .= "Email đã được sử dụng, bạn vui lòng chọn email khác.";

                                } else {
                                    $email=addslashes($_POST['email']);
                                }

                                if($hoten && $email && $password && $phone){
                                    @$a=mysqli_query($conn,"INSERT INTO members (HoTen, email, password, dienthoai) VALUES ('{$hoten}','{$email}','{$password}','{$phone}')");
                                    // Thông báo hoàn tất việc tạo tài khoản
                                    if ($a){
                                        echo "Tài khoản {$username} đã được tạo. <a href='login.php'>Nhấp vào đây để đăng nhập</a>";
                                        exit();
                                    } else {
                                        $message .="<p>Bạn không thể đăng ký</p>".mysqli_error();
                                    }
                                    mysqli_close();
                                } else {
                                    $message .="<p>Hãy thử lại...</p>";
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
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="register">
                                <fieldset>
                                    <h4>Thông tin cá nhân: </h4>
                                    <article>
                                        <div class="frm">
                                            <label>Họ tên: </label>
                                            <input type="text" name="firstname" size="15" maxlength="15" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" />
                                        </div>
                                        <div class="frm">
                                            <label>Email: </label>
                                            <input type="text" name="email" size="40" maxlength="40" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" />
                                        </div>
                                        <div class="frm">
                                            <label>SĐT: </label>
                                            <input type="text" name="sdt" size="10" maxlength="20" value="<?php /*if(isset($_POST['sdt'])) echo $_POST['sdt']*/?>" />
                                        </div>
                                    </article>
                                    <h4>Bảo mật</h4>
                                    <article>
                                        <div class="frm">
                                            <label>Mật khẩu: </label>
                                            <input type="password" name="password" size="20" maxlength="20" />
                                        </div>
                                        <div class="frm">
                                            <label>Xác thực mật khẩu: </label>
                                            <input type="password" name="password1" size="20" maxlength="20" />
                                        </div>
                                    </article>
                                </fieldset>
                                <div style="float: right;">
                                    <input type="submit" value="Đăng ký" name="submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include ('./footer.php')?>