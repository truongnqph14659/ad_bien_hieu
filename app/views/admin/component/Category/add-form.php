<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />

  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/fontawesome-free-6.0.0/css/all.css">
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/css/css.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= server_port ?>du_an_1/public/plugins/summernote/summernote-bs4.min.css">
  <!-- biểu đồ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <style>
    html {
      font-size: 16px;
    }

    form .error {
      color: red;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= server_port ?>du_an_1/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
          <img src="<?= server_port ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div> -->
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="http://localhost:80/du_an_1/  " class="nav-link">
                <i class="fa-solid fa-earth-americas"></i>
                <p>
                  Dashboard
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-id-card-clip"></i>
                <p>
                  Manage user
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="list_user" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List user</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Created_account" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Created</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-comment-dots"></i>
                <p>
                  Feedback
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Comment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Comment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="feedback_user" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Feedback user</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Products
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="list_product" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Product</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="add_product" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Product</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-calendar-days"></i>
                <p>
                  Category
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="list_category" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Category</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="add_category" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-chart-pie"></i>
                <p>
                  Statistical
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Statiscal" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Statistical category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="show_charts" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Charts</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-cart-plus"></i>
                <p>
                  Order
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="list_order" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Order</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-tags"></i>
                <p>
                  Discount
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Chart</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-inbox"></i>
                <p>
                  Quản lý kho
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Chart</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm Loại Hàng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5">
              <h3 align="center"><u>Thêm Loại</u></h3>
              <br>
              <form id="treeview_form" name="add_loai_sp" method="post">
                <div class="form-group">
                  <label for="">chon danh muc cha</label>
                  <select name="parent_category" id="parent_category" class="form-control"></select>
                </div>
                <div class="form-group">
                  <label for="">nhập vào tên loại</label>
                  <input type="text" name="category_name" id="category_name" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="action" id="action" class="btn btn-info">add</button>
                </div>
              </form>
            </div>
            <div class="col-lg-5">
              <h3><u>danh mục trạng tính</u></h3>
              <br>
              <div id="treeview">
                <!-- phan rai treeview -->

              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>

    <?php
    require_once './app/views/admin/footer.php';
    ?>

    <script>
      // Treeview Initialization


      $(document).ready(function() {
        fill_treeview()
        fill_category()

        function fill_category() {
          $.ajax({
            url: 'fill_category',
            success: function(data) {
              $('#parent_category').html(data)
            }
          })
        }

        $('#action').on('click', function(event) {
          event.preventDefault();
          var parent_category = $('#parent_category').val()
          var category_name = $('#category_name').val()
          if (category_name.length > 0) {
            $.ajax({
              url: 'add_loai',
              method: 'POST',
              data: {
                parent_category: parent_category,
                category_name: category_name
              },
              success: function(data) {
                fill_category();
                fill_treeview();
                $('#treeview_form')[0].reset();
                alert(data)
              }
            })
          }
        })
      })

      function fill_treeview() {
        $.ajax({
          url: 'fetch_loai_treeview',
          dataType: "json",
          success: function(data) {
            $('#treeview').treeview({
              data: data
            });
          }
        })
      }
    </script>