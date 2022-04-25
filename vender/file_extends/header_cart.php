<div class="container-fluid header_bg">
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-lg-flex d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <img src="https://logoart.vn/blog/wp-content/uploads/2010/03/xu-huong-thiet-ke-logo-sao-kim.png" alt="" width="120px" height="80px" srcset="">
            </a>
            <div class="slogan_branch">
                <h2>dịch vụ</h2>
                <span class="tien_phong">bảng hiệu</span>
            </div>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="product_page" method="GET" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" class="form-control" name="key" placeholder="tìm kiếm sản phẩm">
                    <div class="input-group-append search">
                        <button type="submit" class="input-group-text bg-transparent .text-dark">
                            <i class="fa fa-search "></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <div class="cart_list">
                <div class="btn border">
                    <i class="fas fa-shopping-cart text-white "></i>
                    <span class="badge text-white">
                        <?php
                        $quantity = 0;
                        echo $quantity;
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>