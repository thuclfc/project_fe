<?php include ('./header.php')?>
    <style>
    form{
        width:500px;
        margin:30px auto;
    }
    form label{
        width:140px;
        display: block;
        float: left;
    }
    form input{
        margin-bottom:10px;
        width:350px;
        display: block;

    }
    form input[type="submit"]{
        border:none;
        color:#fff;
        background:#f55600;
        padding:7px 15px;
        margin-top:20px;
        margin-left:140px;
    }
    #lienhe label.error{
        margin-left:150px;
        display: block;
        clear:both;
        float:none !important
    }
</style>
    <section>
        <div id="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-12   " id="content">
                        <div class="breadcrumb">
                            <a href="index.php">Trang chủ</a>
                            &raquo; <a href="lienhe.php">Liên hệ</a>
                        </div>
                        <h1>Thông tin liên hệ</h1>
                        <div class="contact-info">
                            <div class="content row">
                                <div class="map-left col-sm-6">
                                    <div class="contact-box">
                                        <i class="fa fa-home"></i>
                                        <b>Địa chỉ:</b>
                                        150 Tây Sơn, Đống Đa, Hà Nội
                                    </div>
                                    <div class="contact-box">
                                        <i class="fa fa-phone"></i><b>Điện thoại:</b>
                                        01675497177
                                    </div>
                                    <div class="contact-box">
                                        <i class="fa fa-phone"></i><b>Fax:</b>
                                        1-800-234-5678
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content contact-f form-horizontal">
                            <!--<h2>Contact Form</h2>-->
                            <div class="form-group">
                                <h1>Ý kiến phản hồi</h1>
                                <?php
                                if(isset($_POST['submit']))
                                {
                                    $name=trim($_POST['name']);
                                    $email=trim($_POST['email']);
                                    $content=trim($_POST['content']);
                                    $errors=array();
                                    $output = '';
                                    $messages=null;

                                    /*if (empty($_POST['name'])){
                                        $name=false;
                                        $messages .="<p>Bạn chưa nhập tên</p>";
                                    }else{
                                        $name=addslashes($_POST['name']);
                                    }

                                    if(empty($_POST['email'])){
                                        $email=false;
                                        $messages .="<p>Bạn chưa nhập email</p>";
                                    }*/

                                    if(strlen($name)==0)
                                        array_push($errors,"");
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                                        array_push($errors, "");
                                    if(strlen($content)==0)
                                        array_push($errors,"");

                                    if(count($errors)>0){
                                        print "<p style='text-align: center; color: #c00; margin-left: 90px;'>Bạn phải điền đầy đủ các thông tin bên dưới để gửi liên hệ</p>";
                                    }

                                    if(count($errors)==0){
                                        $query_insert=mysqli_query($conn,"Insert into lienhe (Date, Hoten, email, content) values(NOW(),'$name','$email','$content')");
                                        if($query_insert){
                                            print "<p>Cảm ơn bạn đã đóng góp ý kiến. Chúng tôi sẽ phản hồi trong thời gian sớm nhất.<a href='index.php'>Quay lai</a></p>";
                                            exit();
                                        } else {
                                            print "<p>Bạn không thể gửi ý kiến.<a href='".$_SERVER['HTTP_REFERER']."'>Quay lai</a></p>";
                                            exit();
                                        }
                                    }
                                }
                                ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="lienhe">
                                    <label>Tên bạn: </label>
                                    <input type="text" name="name" />
                                    <label>Email: </label>
                                    <input type="text" name="email" />
                                    <label>Nội dung thông điệp: </label>
                                    <textarea name="content" rows="7" style="width: 350px;"></textarea>
                                    <input type="submit" name="submit" value="Gửi" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include ('./footer.php')?>