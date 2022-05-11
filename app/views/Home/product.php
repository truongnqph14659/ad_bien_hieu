<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once './vender/file_extends/title_keyword.php';
    ?>
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
            <div class="col-lg-3 d-none d-lg-block mb-4">
                <div class="d-flex align-items-center danh_muc justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 fs-2">danh mục sản phẩm</h6>
                </div>
                <div id="tree">
                </div>

                <h1 class="aside_sp_moi_xem pb-2">sản phẩm của chúng tôi</h1>
                <?php
                require_once './vender/file_extends/data_aside.php';
                ?>
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
                <nav class="navbar navbar-expand-lg bg-light sticky-top navbar-light py-1 py-lg-0 px-0">
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
                        <?php
                        require_once './vender/file_extends/header_acc.php';
                        ?>
                    </div>
                </nav>
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <form action="product" method="GET" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="text" name="key" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="dropdown ml-4">
                            <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sắp xếp theo
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <?php foreach ($data_sp as $values) : ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 pb-2 col-xs-3">
                            <div class="card product-item">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= url_img . $values["images_sp"] ?>" alt="ảnh sản phẩm biển hiệu của chúng tôi"></a>
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
                <div class="col-12 pb-1">
                    <?php if (isset($_GET['key'])) : ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="product?page=<?= $current_page - 1 ?>&key=<?= $_GET['key'] ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                                    <?php if ($i == $current_page) : ?>
                                        <li class="page-item"><a class="page-link_active disabled"><?= $i ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="product?page=<?= $i ?>&key=<?= $_GET['key'] ?>"><?= $i ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <li class="page-item <?= $current_page == $total_page ? 'disabled' : '' ?>">
                                    <a class="page-link" href="product?page=<?= $current_page + 1 ?>&key=<?= $_GET['key'] ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif ?>
                    <?php if (!isset($_GET['key'])) : ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item <?= $current_page == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="product?page=<?= $current_page - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                                    <?php if ($i == $current_page) : ?>
                                        <li class="page-item"><a class="page-link_active disabled"><?= $i ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="product?page=<?= $i ?>"><?= $i ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <li class="page-item <?= $current_page == $total_page ? 'disabled' : '' ?>">
                                    <a class="page-link" href="product?page=<?= $current_page + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif ?>
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
    </div>
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
                }
            })
        });
    </script>


</body>

</html>