$(document).ready(function() {
    $("#nav_carreras").click(function() {
        document.location = "../Menu/carreras";
    });
    var trigger = $('.hamburger'),
        isClosed = true;
    trigger.click(function() {
        hamburger_cross();
    });

    function hamburger_cross() {
        if (isClosed == true) {
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
            $('.container-fluid-corregido').animate({
                'padding-left': '15px',
                'padding-right': '15px',
            });
            $('.c_h_c').css({
                'padding-left': '15px',
                'padding-right': '15px',
            });
        } else {
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
            $('.container-fluid-corregido').animate({
                'padding-left': '245px',
            });
            $('.c_h_c').animate({
                'padding-left': '230px',
                'padding-right': '0px',
            });
        }
    }
    $('[data-toggle="offcanvas"]').click(function() {
        $('#wrapper').toggleClass('toggled');
    });
});