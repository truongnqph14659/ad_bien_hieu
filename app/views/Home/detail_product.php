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
                <nav class="navbar navbar-expand-lg sticky-top bg-light navbar-light py-1 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <div class="d-flex align-items-center">
                            <div class="m-0 display-5 font-weight-semi-bold"><img class="font-weight-bold border img-fluid rounded px-3 mr-1" src="https://logoart.vn/blog/wp-content/uploads/2010/03/xu-huong-thiet-ke-logo-sao-kim.png" alt="logo dich vụ bảng hiệu của chúng tôi" width="100px" height="50px"></img></div>
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
                <div class="container pb-3">
                    <div class="row mt-2">
                        <div class="col-lg-6 product media">
                            <div class="block_big_thumb">
                                <div class="relative">
                                    <img id="zoom_01" src="<?= url_img . $data_private['images_sp'] ?>" alt="ảnh <?= $data_private['ten_sp'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 product-info-main">
                            <div class="product-info-price">
                                <h1>
                                    <div class="page-title-wrapper product">
                                        <div class="page-title"> <span class="base" data-ui-id="page-title-wrapper" itemprop="name"><?= $data_private['ten_sp'] ?></span> </div>
                                    </div>
                                </h1>
                                <div class="product-brand">
                                    <div class="block_start start_small">
                                        <div style="width:100%;" class="number_start"></div>

                                    </div>
                                    <a href="javascript:;" id="click_scroll_review" classname="txt_color_1"> <?= $data_private['nhan_xet'] ?> Nhận xét</a> <span class="hsk-seperator">|</span> <a href="javascript:;" id="click_scroll_qa" classname="txt_color_1"> <?= $data_private['hoi_dap'] ?> Hỏi đáp</a>
                                    <br><br>
                                    <span style="font-size:16px;">Mã SP: <b><?= $data_private['ma_san_pham'] ?></b> </span>
                                </div>
                                <div data-product-id="3799" data-role="priceBox" class="price-box price-final_price">
                                    <span itemtype="http://schema.org/Offer" itemscope="" itemprop="offers" class="price-container price-final_price tax weee">
                                        <span itemprop="price" class="price-wrapper " data-price-type="finalPrice" data-price-amount="0" id="product-price-3799">
                                            <span class="price">Giá: Liên hệ</span>
                                        </span>
                                        <meta content="VND" itemprop="priceCurrency">
                                    </span>
                                </div>
                                <span class="shipping-note"></span>
                                <div class="clearfix"></div>
                                <div style="display: none;" class="block_commbodetail">
                                    <div class="txt_combo" id="detail_combo_text"></div>
                                </div>
                                <div class="hasaki-price-info">
                                    <p>Giá thị trường: 0đ - Tiết kiệm: 0&nbsp;₫(<span class="txt_color_2">-13%</span>) </p>
                                </div>
                            </div>
                            <div class="product-add-form">
                                <div class="box-tocart">
                                    <div class="fieldset">
                                        <div class="txt_chiase">Zalo &amp; Viber: <b><a href="tel:<?= so_dien_thoai ?>"><?= so_dien_thoai ?></a></b></div>
                                        <div class="field qty">
                                            <div class="control">
                                                <span class="txt_color_2 txt_12" id="stockMin"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="title_box_giaohang">
                                    <img src="<?= server_port ?>public/images_stores/images/img_ship_1.png" class="image_giaohang_1"><b class="txt_color_1 txt_16">Thiết kế thi công theo yêu cầu</b>
                                </div>
                                <div class="item_giaohang">
                                    <img src="<?= server_port ?>public/images_stores/images/img_ship_4.png" class="image_giaohang_4">
                                    Báo giá trọn gói
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <!-- cho code tu dinh huy -->
                        <div class="noidung">
                            <p><span style="font-size: large;"><strong>Bảng giá thi công các loại bảng hiệu</strong></span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">1. Bảng hiệu quảng cáo Hiflex giá rẻ</span></strong></span><br><span style="font-size: large;"> In trên Bạt Hiflex kỹ thuật số, Căng trên khung sắt (Vuông 20-30, sơn chống rỉ), viền nẹp V nhôm sáng bóng đẹp, thi công lắp đặt bảng hiệu tại các cửa hàng kinh doanh, nhà phân phối, doanh nghiệp</span><br><span style="font-size: large;"> Giá: 170.000 – 370.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">2. Bảng hiệu quảng cáo Hiflex Có Lót Tôn</span></strong></span><br><span style="font-size: large;"> Sử dụng&nbsp;Bạt Hiflex in kỹ thuật số, căng trên khung sắt (Vuông 20-30, sơn chống rỉ), viền nẹp sử dụng thanh V nhôm bóng sáng, thi công lắp đặt bảng hiệu quảng cáo tại các cửa hàng kinh doanh, nhà phân phối, đại lý, doanh nghiệp</span><br><span style="font-size: large;"> Giá: 250.000 – 450.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">3. Bảng hiệu Hộp Đèn quảng cáo 1 mặt/2 mặt</span></strong></span><br><span style="font-size: large;"> In KTS trên bạt Hiflex xuyên sáng, căng trên khung sắt chống rỉ vuông 20-30cm hông hộp đèn lót tôn (rộng 12.5-20cm), viền sử dụng thanh V nhôm sáng bóng, sử dụng đèn quang/led sáng tùy yêu cầu khách hàng. Thi công lắp đặt tận nơi cửa hàng, nhà phân phối, đại lý</span><br><span style="font-size: large;"> Giá: 450.000 – 760.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">4. Bảng hiệu quảng cáo Nhôm Alu: </span></strong></span><br><span style="font-size: large;"> chất liệu&nbsp;Alu PE, khung sắt chịu lực (13×26, Vuông 20×30, sơn chống rỉ) lắp giáp mí hoặc phay rong bắn silicone trang trí. Phần chữ tùy thuộc yêu cầu thi công từ phía khách hàng gồm (Chữ nổi Mica, decal, inox, Form)</span><br><span style="font-size: large;"> Giá: 520.000 – 850.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">5. Ốp Mặt Dựng Nhôm Alu</span></strong></span><br><span style="font-size: large;"> Alu PVDF hoặc PE, khung sắt chịu lực (13×26, Vuông 20×30, sơn chống rỉ) lắp&nbsp;giáp mí hoặc phay rong bắn silicone trang trí.</span><br><span style="font-size: large;"> Giá: 490.000 – 780.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">6. Bảng hiệu quảng cáo Tôn Dán Decal</span></strong></span><br><span style="font-size: large;"> Dùng Tôn dày 0.8-1.2mm, Căng trên khung sắt (Vuông 20-30, sơn chống rỉ), Viền Thanh V nhôm, dán nội dung bằng decal ngoài trời</span><br><span style="font-size: large;"> Giá: 290.000 – 400.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">7.Chữ Nổi, Chữ hộp, Logo, Trang trí khác</span></strong></span><br><span style="font-size: large;"> Mica Chất liệu Mica, dày 2-5 (mm), Cắt thành hình chữ, logo…. Uốn chân chữ cao từ 10-200 (mm).</span><br><span style="font-size: large;"> Giá: 750.000 – 1.700.000 VND/M2</span></p>
                            <p><span style="font-size: large;">INOX: Chất liệu inox màu vàng, màu trắng bóng, trắng xước, …. Dày 1.0mm, loại 304 (loại tốt không gỉ sét).</span><br><span style="font-size: large;"> Giá: 2.500.000 – 3.700.000 VND/M2</span><br><span style="font-size: large;"> Ngoài ra, chúng tôi còn nhận thi công thiết kế gói shop cửa hàng với bộ&nbsp;nhận dạng thương hiệu màu sắc, tủ quầy kệ theo yêu cầu</span></p>
                            <p><em><span style="font-size: large;">Thiết kế thi công trọn gói cửa hàng kinh doanh</span></em></p>
                            <p><span style="font-size: large;"><strong><br></strong></span></p>
                            <h2 style="text-align: center;"><span style="font-size: xx-large;"><strong>Hotline: </strong><a href="tel:<?= so_dien_thoai ?>"><strong><?= so_dien_thoai ?></strong></a></span></h2>
                            <p>&nbsp;</p>
                            <h3><span style="font-size: large;">Dịch vụ làm bảng hiệu quảng cáo An Thịnh Hoàng Gia<br></span></h3>
                            <ul>
                                <li><span style="font-size: large;">Khảo sát nhanh chóng, báo giá tận nơi cho quý khách hàng</span></li>
                                <li><span style="font-size: large;">Thiết kế theo yêu cầu khách hàng, tư vấn thiết kế mô phỏng bảng hiệu</span></li>
                                <li><span style="font-size: large;">Thi công chuyên nghiệp, nhanh chóng</span></li>
                                <li><span style="font-size: large;">Tính thẩm mỹ cao, giá tốt nhất hiện nay</span></li>
                            </ul>
                            <h3><span style="font-size: large;">Các loại bảng hiệu quảng cáo thường làm</span></h3>
                            <ul>
                                <li><span style="font-size: large;">Thiết kế thi công bảng hiệu cửa hàng thời trang</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu quảng cáo cho shop mỹ phẩm</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng biển quảng cáo cho&nbsp;nhà thuốc</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng biển hiệu quảng cáo cho ngân hàng</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng biển hiệu quán ăn, nhà hàng</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu trung tâm thẩm mỹ viện – spa</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu cho khách sạn</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công bảng biển hiệu quảng cáo cửa hàng điện thoại</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công bảng biển hiệu cho trung tâm ngoại ngữ</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu các showroom nội thất, gạch ngói…</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu cho các trung tâm xổ số truyền thống, Vietlott.</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu cho trường học</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công bảng hiệu quảng cho đại lý bán ô tô</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu quảng cáo cho đại lý xe máy xe đạp</span></li>
                                <li><span style="font-size: large;">Thiết kế thi công làm bảng hiệu quảng cáo cho trung tâm thương mại</span></li>
                            </ul>
                            <p><strong><br><br><span style="font-size: medium;"><?= name_brand ?></span></strong><br><span style="font-size: medium;"><strong>Thái Bình: </strong> <?= dia_chi ?> </span><br><span style="font-size: medium;">Email: <?= email ?> - Website: <?= website ?></span></p>
                        </div>
                    </div>
                    <div id="box_rating" class="item_box_col_right space_bottom_20">
                        <div class="title_common_site">
                            Đánh giá
                        </div>
                        <div class="content_common_site">
                            <div class="block_total_rating row space_bottom_10">
                                <div class="block_total_left col-lg-7 col-md-8 col-sm-8 no_nhanxet">
                                    <div class="txt_top_total_left">Đánh giá trung bình</div>
                                    <div class="row">
                                        <div class="block_number_total col-lg-4 col-md-5 col-sm-4">
                                            <div class="txt_numer txt_color_2">0</div>
                                            <div class="block_start start_small">
                                                <div style="width:0%;" class="number_start"></div>
                                                <div class="start_background"></div>
                                            </div>
                                            0 nhận xét
                                        </div>
                                        <div class="block_detail_number col-lg-8 col-md-7 col-sm-8">
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">5 sao</span>
                                                <div class="block_percent_rate"><span style="width:85%"></span>
                                                </div>
                                                <span class="number_ratting"> 7 </span>
                                                Rất hài lòng
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">4 sao</span>
                                                <div class="block_percent_rate"><span style="width:75%"></span>
                                                </div>
                                                <span class="number_ratting"> 3 </span>
                                                Hài lòng
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">3 sao</span>
                                                <div class="block_percent_rate"><span style="width:5%"></span>
                                                </div>
                                                <span class="number_ratting"> 1 </span>
                                                Bình thường
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">2 sao</span>
                                                <div class="block_percent_rate"><span style="width:0%"></span>
                                                </div>
                                                <span class="number_ratting"> 0 </span>
                                                Dưới trung bình
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">1 sao</span>
                                                <div class="block_percent_rate"><span style="width:0%"></span>
                                                </div>
                                                <span class="number_ratting"> 0 </span>
                                                Thất vọng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block_total_right col-lg-5 col-md-4 col-sm-4 text-center">
                                    <div class="txt_chiase">Zalo &amp; Viber tư vấn: <b><a href="tel:<?= so_dien_thoai ?>"><?= so_dien_thoai ?></a></b></div>
                                    <a rel="nofollow" href="#" class="btn btn_site_2 write-rating-btn" style="background:green;">Click Đặt Ngay</a>
                                </div>
                            </div>
                            <form method="post" action="" name="modacajoomForm1" id="modacajoomForm1" novalidate="true">
                                <div id="box_input_comment" class="width_common">
                                    <div class="block_input_comment width_common">
                                        <div style="width:100%;" class="d-flex">
                                            <div class="block_total_left col-lg-6 col-md-8 col-sm-8 no_nhanxet" style="padding-left:0px;">
                                                <div class="form-group">
                                                    <input maxlength="150" name="tieude" class="form-control" placeholder="Nhập tiêu đề nhận xét tại đây" type="text" required="required" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="block_total_left col-lg-6 col-md-4 col-sm-4 no_nhanxet" style="padding-left:0px;">
                                                <div class="form-group">
                                                    <input maxlength="150" name="hoten" class="form-control" placeholder="Nhập họ tên" type="text" required="required" aria-required="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="txt_input_comment">Mô tả nhận xét *
                                                <span class="pull-right">Ký tự tối đa <span class="character-left">2500</span></span>
                                            </div>
                                            <textarea required="required" maxlength="2500" class="form-control" name="noidung" placeholder="Nhập mô tả tại đây"></textarea>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="button" type="submit" class="btn btn-outline-success">Gửi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="width_common space_bottom_20" id="box_comment">
                                <div class="list_comment width_common">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="box_qa" class="item_box_col_right space_bottom_20">
                                <div class="title_common_site">
                                    Nhận xét khách hàng
                                </div>
                                <div class="content_common_site">
                                    <div class="list_item_quest">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- san pham lien quan -->
            <div class="container-fluid">
                <div class="my-2">
                    <h4 class="px-2">Sản phẩm liên quan</h4>
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
    <!-- Footer Start -->
    <?php
    require_once './vender/file_extends/footer.php';
    ?>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
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
                    items: 6
                }
            }
        })
    </script>


</body>

</html>