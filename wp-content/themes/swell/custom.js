$(document).ready(function () {
    // fixed header with variable height on scroll
    var headermaxheight = 175;
    var headerminheight = 75;

    // fixed header on scroll
    $(window).on("scroll", function () {
        if ($(document).scrollTop() > headermaxheight) {
            $(".site-header-row").addClass("scrolled");
            $(".site-header").removeClass("transparent");
        } else if ($(document).scrollTop() < headerminheight) {
            $(".site-header-row").removeClass("scrolled");
            $(".site-header").addClass("transparent");
        }
    });
});