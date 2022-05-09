<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './vender/file_extends/title_keyword.php';
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap");
    </style>
    <link rel="stylesheet" href="<?= server_port ?>public/css/sign_in.css">
</head>

<body>
    <?php
    require_once './vender/file_extends/header.php';
    ?>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_vmpmrihb.json" background="transparent" speed="1" style="width: 285px; height: 341px;" loop autoplay></lottie-player>
                        <a href="#" class="signup-image-link">Chưa có tài khoản</a>
                        <a href="#" class="signup-image-link">Quên mật khẩu</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Đăng nhập</h2>
                        <form class="register-form" id="login-form" name="login-form" action="sign_in" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                                <input type="email" name="user_name" id="your_name" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
                                <input type="password" name="user_password" id="your_pass" placeholder="Mật khẩu của bạn" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>nhớ
                                    tài khoản</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhâp" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    require_once './vender/file_extends/footer.php';
    ?>
    <script>
        <?php if ($_GET['msg'] == "Sorry") : ?>
            swal("Ouch!, email or password không chính xác?");
        <?php endif; ?>
        <?php if ($_GET['msg'] == "Hold_on") : ?>
            swal("Khoan! Tài khoản chưa đăng ký?");
        <?php endif; ?>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="http://localhost:80/du_an_1/public/js/form_values.js"></script>
</body>

</html>