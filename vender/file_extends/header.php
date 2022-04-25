<?php
require_once './vender/file_extends/header_cart.php';
?>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                        <a href="product_page" class="nav-item nav-link">Sản Phẩm</a>
                        <a href="#" class="nav-item nav-link">Tin Tức</a>

                        <a href="contact_page" class="nav-item nav-link">Liên Hệ</a>
                    </div>
                    <?php
                    require_once './vender/file_extends/header_acc.php';
                    ?>
                </div>
            </nav>
        </div>
    </div>
</div>