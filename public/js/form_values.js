//   validation form Đăng nhập
$(function () {
    $("form[name='login-form']").validate({
        // Specify validation rules
        rules: {
            user_name: {
                required: true,
                email: true
            },
            user_password: {
                required: true,
                minlength: 2

            }
        },
        messages: {
            user_name: {
                required: "không được để trống email",
                email: "không đúng định dạng email name@.com"
            },
            user_password: {
                required: "không được để trống password",
                minlength: "password quá ngắn"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
$(function () {
    $("form[name='register-form']").validate({
        // Specify validation rules
        rules: {
            name: "required",
            avatar: "required",
            email: {
                required: true,
                email: true
            },
            sdt: {
                required: true,
                minlength: 10,
                // matches: "[0-9]+",
                // phoneUS: true,
                maxlength: 10
            },
            password: {
                required: true,
                minlength: 5

            },
            dia_chi: "required",
            xa_phuong: "required",
            quan_huyen: "required",
            tinh_thanh: "required"
        },
        messages: {
            name: {
                required: "không được để trống tên",
            },
            avatar: {
                required: "không được để trống avatar",
            },
            email: {
                required: "không được để trống email",
                email: "không đúng định dạng email name@.com"
            },
            password: {
                required: "không được để trống password",
                minlength: "password quá ngắn"
            },
            sdt: {
                required: "không được để trống số điện thoại",
                minlength: "số diện thoại quá ngắn",
                // matches: "số điện thoại không đúng định dạng",
                // phoneUS: " số điện thoại không đúng định dạng",
                maxlength: "số diện thoại quá dài"
            },
            dia_chi: {
                required: "không được để trống địa chỉ",
            },
            xa_phuong: {
                required: "không được để trống xã phương",
            },
            quan_huyen: {
                required: "không được để trống quận huyện",
            },
            tinh_thanh: {
                required: "không được để trống tỉnh thành",
            }

        },

        submitHandler: function (form) {
            form.submit();
        }
    });
});
$(function () {
    $("form[name='form_checkemail']").validate({
        // Specify validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            sdt: {
                required: true,
                minlength: 10,
                // matches: "[0-9]+",
                // phoneUS: true,
                maxlength: 10

            }
        },
        messages: {
            email: {
                required: "không được để trống email",
                email: "không đúng định dạng email name@.com"
            },
            sdt: {
                required: "không được để trống số điện thoại",
                minlength: "số diện thoại quá ngắn",
                // matches: "số điện thoại không đúng định dạng",
                // phoneUS: " số điện thoại không đúng định dạng",
                maxlength: "số diện thoại quá dài"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});