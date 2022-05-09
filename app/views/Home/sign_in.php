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
    require_once './vender/file_extends/header_cart.php';
    ?>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="product" class="nav-item nav-link">Sản Phẩm</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>

                            <a href="contact" class="nav-item nav-link">Liên Hệ</a>
                        </div>
                        <?php
                        require_once './vender/file_extends/header_acc.php';
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid d-lg-none">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-1 py-lg-0 px-0">
            <a href="" class="text-decoration-none d-block d-lg-none">
                <div class="d-flex align-items-center">
                    <div class="m-0 display-5 font-weight-semi-bold"><img class="font-weight-bold border img-fluid rounded px-3 mr-1" src="https://logoart.vn/blog/wp-content/uploads/2010/03/xu-huong-thiet-ke-logo-sao-kim.png" width="100px" height="50px"></img></div>
                    <div class="slogan_branch">
                        <h2>dịch vụ</h2>
                        <span class="tien_phong">bảng hiệu</span>
                    </div>
                </div>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                    <a href="product" class="nav-item nav-link">Sản Phẩm</a>
                    <a href="#" class="nav-item nav-link">Tin Tức</a>
                    <a href="contact" class="nav-item nav-link">Liên Hệ</a>
                </div>
            </div>
        </nav>
    </div>
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
    <script src="<?= server_port ?>public/js/form_values.js"></script>
</body>

</html>