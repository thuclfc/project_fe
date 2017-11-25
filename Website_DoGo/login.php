<?php include ('./header.php')?>
    <section>
        <div id="container">
            <div class="container">
                <div id="notification"></div>
                <div class="row">
                    <div class="col-sm-9 col-sm-12" id="content">
                        <div class="breadcrumb">
                            <a href="index.php">Trang chủ</a>
                            &raquo; <a href="login.php">Đăng nhập</a>
                        </div>
                        <h1 style="font-size: 20px; text-transform: uppercase;">Tài khoản đăng nhập</h1>
                        <div class="box-container">
                            <div class="login-content row" style="text-align: center;">
                                <div class="col-sm-6">
                                    <div class="box-login">
                                        <div class="heading" >
                                            <i class="fa fa-key"></i>
                                            <div class="extra-wrap">
                                                <h2>Khách hàng đăng nhập</h2>
                                                <b>Bạn đang là khách hàng</b>
                                            </div>
                                        </div>
                                        <?php include('./register1.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript"><!--
                        $('#login input').keydown(function(e) {
                            if (e.keyCode == 13) {
                                $('#login').submit();
                            }
                        });
                        //--></script>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
<?php include ('./footer.php')?>