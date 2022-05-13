<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    Quản Lý Chi Tiết Sản Phẩm
                </div>
            </div>
            <form class="mx-auto py-1" action="update_ct_sp" method="POST" enctype="multipart/form-data" name="products">
                <div class="d-flex">
                    <input type="hidden" name="id" value="<?php echo $data['ma_san_pham'] ?>">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="chung_loai" class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" id="chung_loai" name="name" placeholder="nhập vào chủng loại sản phẩm" value="<?php echo $data['ten_sp'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="products_name">Loại hàng</label>
                            <select class="form-control" name="categories_id" id="categories_id ">
                                <!-- <option value="">ok</option> -->
                                <?= $htmlOption ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mau_sac" class="form-label">ảnh sản phẩm</label>
                            <img src="public/dist/img/<?php echo $data['images_sp'] ?>" alt="">
                            <input type="hidden" name="cu" value="<?php echo $data['images_sp'] ?>">
                            <input type="file" class="form-control" id="mau_sac" name="image" placeholder="nhập vào màu sắc">
                        </div>
                        <div class="mb-3">
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Vui lòng nhập nội dung ..."><?php echo $data['mo_ta_ct'] ?></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Thay Đổi</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
            </form>
        </div>
        <!--  -->
    </div>
</div>
<script src="public/resources/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content')
</script>
<?php
require_once './vender/src_script_admin.php';
?>

<?php
require_once './app/views/admin/footer.php';
?>