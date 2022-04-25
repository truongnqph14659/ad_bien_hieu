<div class="navbar-nav ml-auto py-0">
    <div class="pt-2 d-none d-lg-block">
        <img src="https://i.pinimg.com/736x/27/59/8d/27598dc5d77131fd8cdd1eaf28261ad6.jpg" alt="" width="40px" height="40px" srcset="">
    </div>
    <?php
    if (!isset($_SESSION["user_account"])) :
    ?>
        <a href="form_logn_in" class="nav-item nav-link d-none d-lg-block">Đăng nhập</a>
        <a href="form_register" class="nav-item nav-link d-none d-lg-block">Đăng ký</a>
    <?php
    endif;
    ?>
    <?php
    if (isset($_SESSION["user_account"])) :
    ?>
        <div class="action_user d-none d-lg-block">
            <p style="color:red; margin-bottom: 0rem;">Tài khoản</p>
            <span class="user_name dropdown-toggle text-dark" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION["user_account"]['user_name'] ?>
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php if ($_SESSION["user_account"]['user_role'] == 0) : ?>
                    <li><a class="dropdown-item text-dark" href="user_page">tài khoản của tôi</a></li>
                    <li><a class="dropdown-item text-dark" href="forgot_pass">đổi mật khẩu</a></li>
                <?php endif; ?>
                <li><a class="dropdown-item text-dark" href="logn_out">đăng xuất</a></li>
            </ul>
        </div>
    <?php
    endif;
    ?>
    <div id="treeview_mobile" class="d-mx-block d-lg-none d-sm-none d-md-none">
    </div>
</div>