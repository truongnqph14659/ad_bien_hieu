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
                    <h6 class="m-0 fs-2">danh m???c s???n ph???m</h6>
                </div>
                <div id="tree">
                </div>

                <h1 class="aside_sp_moi_xem pb-2">s???n ph???m c???a ch??ng t??i</h1>
                <?php
                require_once './vender/file_extends/data_aside.php';
                ?>
                <h1 class="aside_sp_moi_xem">T?? v???n</h1>
                <div class="group_tin">
                    <div class="group_tin_tieude"><i class="fa fa-weixin fa_icon" aria-hidden="true"></i>H??? tr??? tr???c tuy???n</div>
                    <div class="group_tin_noidung">
                        <div class="hotrotructuyen_content">
                            <div class="row_hotrotructuyen">
                                <div class="itemname"><i class="fa fa-user fa-1x"></i>Li??n h??? tr???c ti???p</div>
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
                            <div class="m-0 display-5 font-weight-semi-bold"><img class="font-weight-bold border img-fluid rounded px-3 mr-1" src="https://logoart.vn/blog/wp-content/uploads/2010/03/xu-huong-thiet-ke-logo-sao-kim.png" alt="logo dich v??? b???ng hi???u c???a ch??ng t??i" width="100px" height="50px"></img></div>
                            <div class="slogan_branch">
                                <h2>d???ch v???</h2>
                                <span class="tien_phong">b???ng hi???u</span>
                            </div>
                        </div>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang Ch???</a>
                            <a href="product" class="nav-item nav-link">S???n Ph???m</a>
                            <a href="#" class="nav-item nav-link">Tin T???c</a>

                            <a href="contact" class="nav-item nav-link">Li??n H???</a>
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
                                    <img id="zoom_01" src="<?= url_img . $data_private['images_sp'] ?>" alt="???nh <?= $data_private['ten_sp'] ?>">
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
                                    <a href="javascript:;" id="click_scroll_review" classname="txt_color_1"> <?= $data_private['nhan_xet'] ?> Nh???n x??t</a> <span class="hsk-seperator">|</span> <a href="javascript:;" id="click_scroll_qa" classname="txt_color_1"> <?= $data_private['hoi_dap'] ?> H???i ????p</a>
                                    <br><br>
                                    <span style="font-size:16px;">M?? SP: <b><?= $data_private['ma_san_pham'] ?></b> </span>
                                </div>
                                <div data-product-id="3799" data-role="priceBox" class="price-box price-final_price">
                                    <span itemtype="http://schema.org/Offer" itemscope="" itemprop="offers" class="price-container price-final_price tax weee">
                                        <span itemprop="price" class="price-wrapper " data-price-type="finalPrice" data-price-amount="0" id="product-price-3799">
                                            <span class="price">Gi??: Li??n h???</span>
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
                                    <p>Gi?? th??? tr?????ng: 0?? - Ti???t ki???m: 0&nbsp;???(<span class="txt_color_2">-13%</span>) </p>
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
                                    <img src="<?= server_port ?>public/images_stores/images/img_ship_1.png" class="image_giaohang_1"><b class="txt_color_1 txt_16">Thi???t k??? thi c??ng theo y??u c???u</b>
                                </div>
                                <div class="item_giaohang">
                                    <img src="<?= server_port ?>public/images_stores/images/img_ship_4.png" class="image_giaohang_4">
                                    B??o gi?? tr???n g??i
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <?= $data_private['mo_ta_ct'] ?>
                    </div>
                    <div class="row mt-2">
                        <!-- cho code tu dinh huy -->
                        <div class="noidung">
                            <p><span style="font-size: large;"><strong>B???ng gi?? thi c??ng c??c lo???i b???ng hi???u</strong></span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">1. B???ng hi???u qu???ng c??o Hiflex gi?? r???</span></strong></span><br><span style="font-size: large;"> In tr??n B???t Hiflex k??? thu???t s???, C??ng tr??n khung s???t (Vu??ng 20-30, s??n ch???ng r???), vi???n n???p V nh??m s??ng b??ng ?????p, thi c??ng l???p ?????t b???ng hi???u t???i c??c c???a h??ng kinh doanh, nh?? ph??n ph???i, doanh nghi???p</span><br><span style="font-size: large;"> Gi??: 170.000 ??? 370.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">2. B???ng hi???u qu???ng c??o Hiflex C?? L??t T??n</span></strong></span><br><span style="font-size: large;"> S??? d???ng&nbsp;B???t Hiflex in k??? thu???t s???, c??ng tr??n khung s???t (Vu??ng 20-30, s??n ch???ng r???), vi???n n???p s??? d???ng thanh V nh??m b??ng s??ng, thi c??ng l???p ?????t b???ng hi???u qu???ng c??o t???i c??c c???a h??ng kinh doanh, nh?? ph??n ph???i, ?????i l??, doanh nghi???p</span><br><span style="font-size: large;"> Gi??: 250.000 ??? 450.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">3. B???ng hi???u H???p ????n qu???ng c??o 1 m???t/2 m???t</span></strong></span><br><span style="font-size: large;"> In KTS tr??n b???t Hiflex xuy??n s??ng, c??ng tr??n khung s???t ch???ng r??? vu??ng 20-30cm h??ng h???p ????n l??t t??n (r???ng 12.5-20cm), vi???n s??? d???ng thanh V nh??m s??ng b??ng, s??? d???ng ????n quang/led s??ng t??y y??u c???u kh??ch h??ng. Thi c??ng l???p ?????t t???n n??i c???a h??ng, nh?? ph??n ph???i, ?????i l??</span><br><span style="font-size: large;"> Gi??: 450.000 ??? 760.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">4. B???ng hi???u qu???ng c??o Nh??m Alu: </span></strong></span><br><span style="font-size: large;"> ch???t li???u&nbsp;Alu PE, khung s???t ch???u l???c (13??26, Vu??ng 20??30, s??n ch???ng r???) l???p gi??p m?? ho???c phay rong b???n silicone trang tr??. Ph???n ch??? t??y thu???c y??u c???u thi c??ng t??? ph??a kh??ch h??ng g???m (Ch??? n???i Mica, decal, inox, Form)</span><br><span style="font-size: large;"> Gi??: 520.000 ??? 850.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">5. ???p M???t D???ng Nh??m Alu</span></strong></span><br><span style="font-size: large;"> Alu PVDF ho???c PE, khung s???t ch???u l???c (13??26, Vu??ng 20??30, s??n ch???ng r???) l???p&nbsp;gi??p m?? ho???c phay rong b???n silicone trang tr??.</span><br><span style="font-size: large;"> Gi??: 490.000 ??? 780.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">6. B???ng hi???u qu???ng c??o T??n D??n Decal</span></strong></span><br><span style="font-size: large;"> D??ng T??n d??y 0.8-1.2mm, C??ng tr??n khung s???t (Vu??ng 20-30, s??n ch???ng r???), Vi???n Thanh V nh??m, d??n n???i dung b???ng decal ngo??i tr???i</span><br><span style="font-size: large;"> Gi??: 290.000 ??? 400.000 VND/M2</span></p>
                            <p><span style="color: #008000;"><strong><span style="font-size: large;">7.Ch??? N???i, Ch??? h???p, Logo, Trang tr?? kh??c</span></strong></span><br><span style="font-size: large;"> Mica Ch???t li???u Mica, d??y 2-5 (mm), C???t th??nh h??nh ch???, logo???. U???n ch??n ch??? cao t??? 10-200 (mm).</span><br><span style="font-size: large;"> Gi??: 750.000 ??? 1.700.000 VND/M2</span></p>
                            <p><span style="font-size: large;">INOX: Ch???t li???u inox m??u v??ng, m??u tr???ng b??ng, tr???ng x?????c, ???. D??y 1.0mm, lo???i 304 (lo???i t???t kh??ng g??? s??t).</span><br><span style="font-size: large;"> Gi??: 2.500.000 ??? 3.700.000 VND/M2</span><br><span style="font-size: large;"> Ngo??i ra, ch??ng t??i c??n nh???n thi c??ng thi???t k??? g??i shop c???a h??ng v???i b???&nbsp;nh???n d???ng th????ng hi???u m??u s???c, t??? qu???y k??? theo y??u c???u</span></p>
                            <p><em><span style="font-size: large;">Thi???t k??? thi c??ng tr???n g??i c???a h??ng kinh doanh</span></em></p>
                            <p><span style="font-size: large;"><strong><br></strong></span></p>
                            <h2 style="text-align: center;"><span style="font-size: xx-large;"><strong>Hotline: </strong><a href="tel:<?= so_dien_thoai ?>"><strong><?= so_dien_thoai ?></strong></a></span></h2>
                            <p>&nbsp;</p>
                            <h3><span style="font-size: large;">D???ch v??? l??m b???ng hi???u qu???ng c??o An Th???nh Ho??ng Gia<br></span></h3>
                            <ul>
                                <li><span style="font-size: large;">Kh???o s??t nhanh ch??ng, b??o gi?? t???n n??i cho qu?? kh??ch h??ng</span></li>
                                <li><span style="font-size: large;">Thi???t k??? theo y??u c???u kh??ch h??ng, t?? v???n thi???t k??? m?? ph???ng b???ng hi???u</span></li>
                                <li><span style="font-size: large;">Thi c??ng chuy??n nghi???p, nhanh ch??ng</span></li>
                                <li><span style="font-size: large;">T??nh th???m m??? cao, gi?? t???t nh???t hi???n nay</span></li>
                            </ul>
                            <h3><span style="font-size: large;">C??c lo???i b???ng hi???u qu???ng c??o th?????ng l??m</span></h3>
                            <ul>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng b???ng hi???u c???a h??ng th???i trang</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u qu???ng c??o cho shop m??? ph???m</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng bi???n qu???ng c??o cho&nbsp;nh?? thu???c</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng bi???n hi???u qu???ng c??o cho ng??n h??ng</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng bi???n hi???u qu??n ??n, nh?? h??ng</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u trung t??m th???m m??? vi???n ??? spa</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u cho kh??ch s???n</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng b???ng bi???n hi???u qu???ng c??o c???a h??ng ??i???n tho???i</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng b???ng bi???n hi???u cho trung t??m ngo???i ng???</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u c??c showroom n???i th???t, g???ch ng??i???</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u cho c??c trung t??m x??? s??? truy???n th???ng, Vietlott.</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u cho tr?????ng h???c</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng b???ng hi???u qu???ng cho ?????i l?? b??n ?? t??</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u qu???ng c??o cho ?????i l?? xe m??y xe ?????p</span></li>
                                <li><span style="font-size: large;">Thi???t k??? thi c??ng l??m b???ng hi???u qu???ng c??o cho trung t??m th????ng m???i</span></li>
                            </ul>
                            <p><strong><br><br><span style="font-size: medium;"><?= name_brand ?></span></strong><br><span style="font-size: medium;"><strong>Th??i B??nh: </strong> <?= dia_chi ?> </span><br><span style="font-size: medium;">Email: <?= email ?> - Website: <?= website ?></span></p>
                        </div>
                    </div>
                    <div id="box_rating" class="item_box_col_right space_bottom_20">
                        <div class="title_common_site">
                            ????nh gi??
                        </div>
                        <div class="content_common_site">
                            <div class="block_total_rating row space_bottom_10">
                                <div class="block_total_left col-lg-7 col-md-8 col-sm-8 no_nhanxet">
                                    <div class="txt_top_total_left">????nh gi?? trung b??nh</div>
                                    <div class="row">
                                        <div class="block_number_total col-lg-4 col-md-5 col-sm-4">
                                            <div class="txt_numer txt_color_2">0</div>
                                            <div class="block_start start_small">
                                                <div style="width:0%;" class="number_start"></div>
                                                <div class="start_background"></div>
                                            </div>
                                            0 nh???n x??t
                                        </div>
                                        <div class="block_detail_number col-lg-8 col-md-7 col-sm-8">
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">5 sao</span>
                                                <div class="block_percent_rate"><span style="width:85%"></span>
                                                </div>
                                                <span class="number_ratting"> 7 </span>
                                                R???t h??i l??ng
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">4 sao</span>
                                                <div class="block_percent_rate"><span style="width:75%"></span>
                                                </div>
                                                <span class="number_ratting"> 3 </span>
                                                H??i l??ng
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">3 sao</span>
                                                <div class="block_percent_rate"><span style="width:5%"></span>
                                                </div>
                                                <span class="number_ratting"> 1 </span>
                                                B??nh th?????ng
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">2 sao</span>
                                                <div class="block_percent_rate"><span style="width:0%"></span>
                                                </div>
                                                <span class="number_ratting"> 0 </span>
                                                D?????i trung b??nh
                                            </div>
                                            <div class="row_detail_number">
                                                <span class="txt_number_start">1 sao</span>
                                                <div class="block_percent_rate"><span style="width:0%"></span>
                                                </div>
                                                <span class="number_ratting"> 0 </span>
                                                Th???t v???ng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block_total_right col-lg-5 col-md-4 col-sm-4 text-center">
                                    <div class="txt_chiase">Zalo &amp; Viber t?? v???n: <b><a href="tel:<?= so_dien_thoai ?>"><?= so_dien_thoai ?></a></b></div>
                                    <a rel="nofollow" href="#" class="btn btn_site_2 write-rating-btn" style="background:green;">Click ?????t Ngay</a>
                                </div>
                            </div>
                            <form method="post" action="" name="modacajoomForm1" id="modacajoomForm1" novalidate="true">
                                <div id="box_input_comment" class="width_common">
                                    <div class="block_input_comment width_common">
                                        <div style="width:100%;" class="d-flex">
                                            <div class="block_total_left col-lg-6 col-md-8 col-sm-8 no_nhanxet" style="padding-left:0px;">
                                                <div class="form-group">
                                                    <input maxlength="150" name="tieude" class="form-control" placeholder="Nh???p ti??u ????? nh???n x??t t???i ????y" type="text" required="required" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="block_total_left col-lg-6 col-md-4 col-sm-4 no_nhanxet" style="padding-left:0px;">
                                                <div class="form-group">
                                                    <input maxlength="150" name="hoten" class="form-control" placeholder="Nh???p h??? t??n" type="text" required="required" aria-required="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="txt_input_comment">M?? t??? nh???n x??t *
                                                <span class="pull-right">K?? t??? t???i ??a <span class="character-left">2500</span></span>
                                            </div>
                                            <textarea required="required" maxlength="2500" class="form-control" name="noidung" placeholder="Nh???p m?? t??? t???i ????y"></textarea>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="button" type="submit" class="btn btn-outline-success">G???i</button>
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
                                    Nh???n x??t kh??ch h??ng
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
                    <h4 class="px-2">S???n ph???m li??n quan</h4>
                </div>
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <?php foreach ($data_sp as $values) : ?>
                                <div class="owl-item pb-1">
                                    <div class="card product-item">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <a href="product_detail?id_sp=<?= $values["ma_san_pham"] ?>" class="text-decoration-none"><img class="imgUNcover" src="<?= url_img . $values["images_sp"] ?>" alt="???nh <?= $values["ten_sp"] ?>"></a>
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
                                                    echo "M?? SP: " . $values["ma_san_pham"];
                                                    ?>
                                                </li>
                                            </ul>
                                            <div class="d-flex justify-content-center">
                                                <h6 class="text-muted text-danger">G??a: Li??n h???</h6>
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