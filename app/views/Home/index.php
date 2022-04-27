<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= server_port ?>du_an_1/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= server_port ?>public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php
    require_once './vender/file_extends/header_cart.php';
    ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->

    <div class="container-fluid mb-2">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex align-items-center danh_muc justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 fs-2">danh mục sản phẩm</h6>
                </div>
                <div id="tree">
                </div>
            </div>
            <div class="col-lg-9">
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

                            <a href="contact_page" class="nav-item nav-link">Liên Hệ</a>
                        </div>
                        <?php
                        require_once './vender/file_extends/header_acc.php';
                        ?>
                    </div>
                </nav>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $arr = [];
                        foreach ($data_sp as $order => $values) {
                            if ($values['images_banner_sp'] !== null && $values['images_banner_sp'] !== '') {
                                $arr[] = $values;
                            }
                        }
                        ?>
                        <?php foreach ($arr as $order => $values) : ?>
                            <div class="carousel-item <?= $order == 0 ? 'active' : '' ?>">
                                <img class="d-block w-100" src="<?= $values['images_banner_sp'] ?>" alt="First slide">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>



        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <h1 class="aside_sp_moi_xem pb-2">Tin tức sản phẩm</h1>
                <div class="aside_seen_products">
                    <?php
                    $count = 0;
                    ?>
                    <?php foreach ($data_sp as $values) : ?>
                        <?php if ($count < 8) : ?>
                            <?php
                            $count++; ?>
                            <section class="aside_seen_product">
                                <div class="aside_picture">
                                    <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                                        <img src="<?= $values['images_sp'] ?>">
                                    </a>
                                </div>
                                <div class="aside_text">
                                    <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                                        <h4>
                                            <?php
                                            $string_ten = (strlen($values["ten_sp"]) > 40) ? substr($values["ten_sp"], 0, 30) . '...' : $values["ten_sp"];
                                            echo $string_ten;
                                            ?>
                                        </h4>
                                    </a>
                                    <span>Gía: Liên hệ</span>
                                </div>
                            </section>
                        <?php endif ?>
                    <?php endforeach; ?>
                </div>
                <h1 class="aside_sp_moi_xem">Tư vấn</h1>
                <div class="group_tin">
                    <div class="group_tin_tieude"><i class="fa fa-weixin fa_icon" aria-hidden="true"></i>Hỗ trợ trực tuyến</div>
                    <div class="group_tin_noidung">
                        <div class="hotrotructuyen_content">
                            <div class="row_hotrotructuyen">
                                <div class="itemname"><i class="fa fa-user fa-1x"></i>Liên hệ trực tiếp</div>
                                <div class="clear"></div>
                                <div class="itemgroup">
                                    <div class="itemphone">
                                        <a style="color:red;font-size:16px;" href="tel:0869.919.717" title="" data-toggle="tooltip" data-original-title="Call"><i class="fa fa-phone fa-2x"></i>Zalo: 0869.919.717</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container">
                    <div class="text-center my-2">
                        <h2 class="section-title px-5"><span class="px-2">Bảng chữ nổi</span></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php foreach ($data_sp as $values) : ?>
                                    <div class="owl-item pb-1">
                                        <div class="card product-item">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-2 pb-3">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                                    <p class="text-truncate">
                                                        <?php
                                                        $string_ten = $values["ten_sp"];
                                                        echo $string_ten;
                                                        ?>
                                                    </p>
                                                </a>
                                                <ul class="ul_products list-unstyled">
                                                    <li>
                                                        <?php
                                                        echo "Mã SP: " . $values["ma_san_pham"];
                                                        ?>
                                                    </li>
                                                </ul>
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="text-muted text-danger">Gía: Liên hệ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products End -->
                <div class="container">
                    <div class="text-center my-2">
                        <h2 class="section-title px-5"><span class="px-2">Bảng quảng cáo</span></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php foreach ($data_sp as $values) : ?>
                                    <div class="owl-item pb-1">
                                        <div class="card product-item">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-2 pb-3">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                                    <p class="text-truncate">
                                                        <?php
                                                        $string_ten = $values["ten_sp"];
                                                        echo $string_ten;
                                                        ?>
                                                    </p>
                                                </a>
                                                <ul class="ul_products list-unstyled">
                                                    <li>
                                                        <?php
                                                        echo "Mã SP: " . $values["ma_san_pham"];
                                                        ?>
                                                    </li>
                                                </ul>
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="text-muted text-danger">Gía: Liên hệ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscribe Start -->
                <div class="container">
                    <div class="text-center my-2">
                        <h2 class="section-title px-5"><span class="px-2">Bảng điện tử</span></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php foreach ($data_sp as $values) : ?>
                                    <div class="owl-item pb-1">
                                        <div class="card product-item">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-2 pb-3">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                                    <p class="text-truncate">
                                                        <?php
                                                        $string_ten = $values["ten_sp"];
                                                        echo $string_ten;
                                                        ?>
                                                    </p>
                                                </a>
                                                <ul class="ul_products list-unstyled">
                                                    <li>
                                                        <?php
                                                        echo "Mã SP: " . $values["ma_san_pham"];
                                                        ?>
                                                    </li>
                                                </ul>
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="text-muted text-danger">Gía: Liên hệ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscribe End -->
                <div class="container">
                    <div class="text-center my-2">
                        <h2 class="section-title px-5"><span class="px-2">Bảng công ty</span></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php foreach ($data_sp as $values) : ?>
                                    <div class="owl-item pb-1">
                                        <div class="card product-item">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= $values["images_sp"] ?>" alt=""></a>
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-2 pb-3">
                                                <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none">
                                                    <p class="text-truncate">
                                                        <?php
                                                        $string_ten = $values["ten_sp"];
                                                        echo $string_ten;
                                                        ?>
                                                    </p>
                                                </a>
                                                <ul class="ul_products list-unstyled">
                                                    <li>
                                                        <?php
                                                        echo "Mã SP: " . $values["ma_san_pham"];
                                                        ?>
                                                    </li>
                                                </ul>
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="text-muted text-danger">Gía: Liên hệ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php
    require_once './vender/file_extends/footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <script>
        $('.carousel').carousel({
            interval: 5000
        })
        // $('.carousel-control-prev').on('slide.bs.carousel', function() {
        //     $('.carousel').carousel('prev')
        // })
        // // carousel-control-next
        // $('.carousel-control-next').on('slide.bs.carousel', function() {
        //     $('.carousel').carousel('next')
        // })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 10000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script src="<?= server_port ?>public/lib/easing/easing.min.js"></script>
    <script src="<?= server_port ?>public/js/main.js"></script>
    <script src="<?= server_port ?>public/js/bstreeview.js"></script>
    <script>
        $(function() {
            $.ajax({
                url: 'fetch_loai_treeview',
                dataType: "json",
                success: function(data) {
                    $('#tree').bstreeview({
                        data: data,
                        expandIcon: 'fa fa-angle-down fa-fw',
                        collapseIcon: 'fa fa-angle-right fa-fw',
                        indent: 2.05,
                        parentsMarginLeft: '1.25rem',
                        openNodeLinkOnNewTab: false
                    });
                    // treeview_mobile
                    $('#treeview_mobile').bstreeview({
                        data: data,
                        expandIcon: 'fa fa-angle-down fa-fw',
                        collapseIcon: 'fa fa-angle-right fa-fw',
                        indent: 2.05,
                        parentsMarginLeft: '1.25rem',
                        openNodeLinkOnNewTab: false
                    });
                    // Dropdown on mouse hover
                    // $(document).ready(function() {
                    //     function toggleNavbarMethod() {
                    //         if ($(window).width() > 992) {
                    //             $('.list-group-item .list-group').on('mouseout', function() {
                    //                 $('.state-icon', this).trigger('click').blur();
                    //             });
                    //         } else {
                    //             $('.list-group-item .list-group').off('mouseover').off('mouseout');
                    //         }
                    //     }
                    //     toggleNavbarMethod();
                    //     $(window).resize(toggleNavbarMethod);
                    // });
                }
            })
        });
    </script>
</body>

</html>

<!-- code cho phần treeview -->