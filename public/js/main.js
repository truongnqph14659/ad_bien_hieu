(function ($) {
    "use strict";
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    // Product Quantity
    // $('.quantity button').on('click', function () {
    //     var button = $(this);
    //     var oldValue = button.parent().parent().find('input').val();
    //     if (button.hasClass('btn-plus')) {
    //         var newVal = parseFloat(oldValue) + 1;
    //     } else {
    //         if (oldValue > 0) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 0;
    //         }
    //     }
    //     button.parent().parent().find('input').val(newVal);
    // });
    
})(jQuery);


