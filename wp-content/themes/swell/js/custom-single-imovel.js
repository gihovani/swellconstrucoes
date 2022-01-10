$(document).ready(function () {
    try {

        $(".pst_imv_slider_superior_rep_tns").imagesLoaded(function () {
            $(".pst_imv_slider_superior_rep_loader").remove();
            $(".pst_imv_slider_superior_rep_tns").removeClass("d-none");
            var pst_imv_slider_superior_rep_tns = tns({
                container: ".pst_imv_slider_superior_rep_tns",
                navContainer: ".pst_imv_slider_superior_rep_nav",
                // controlsContainer: ".tp_std_slider_entregues_controls",
                prevButton: ".pst_imv_slider_superior_rep_controls_prev",
                nextButton: ".pst_imv_slider_superior_rep_controls_next",
                items: 1,
                // mode: "gallery",
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro pst_imv_slider_superior_rep_tns")
    }


    try {

        $(".pst_imv_img_gal_rep_tns").imagesLoaded(function () {
            $(".pst_imv_img_gal_rep_tns_loader").remove();
            $(".pst_imv_img_gal_rep_tns").removeClass("d-none");
            var pst_imv_slider_superior_rep_tns = tns({
                container: ".pst_imv_img_gal_rep_tns",
                // nav: false,
                navContainer: ".pst_imv_img_gal_rep_tns_nav",
                controls: false,
                // controlsContainer: ".tp_std_slider_entregues_controls",
                // prevButton: ".pst_imv_slider_superior_rep_controls_prev",
                // nextButton: ".pst_imv_slider_superior_rep_controls_next",
                items: 1,
                mode: "gallery",
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro pst_imv_slider_superior_rep_tns")
    }



    // try {

    //     $(".pst_imv_imp_rep_tns").imagesLoaded(function () {
    //         $(".pst_imv_imp_rep_tns_loader").remove();
    //         $(".pst_imv_imp_rep_tns").removeClass("d-none");
    //         var pst_imv_slider_superior_rep_tns = tns({
    //             container: ".pst_imv_imp_rep_tns",
    //             // nav: false,
    //             navContainer: ".pst_imv_imp_rep_tns_nav",
    //             controls: false,
    //             // controlsContainer: ".tp_std_slider_entregues_controls",
    //             // prevButton: ".pst_imv_slider_superior_rep_controls_prev",
    //             // nextButton: ".pst_imv_slider_superior_rep_controls_next",
    //             items: 1,
    //             mode: "gallery",
    //             // autoplay: true,
    //             autoHeight: true,
    //             autoplayButtonOutput: false,
    //             autoplayHoverPause: true,
    //         });
    //     });

    // } catch (exception) {
    //     console.log("erro pst_imv_slider_superior_rep_tns")
    // }



    try {

        $(".pst_imv_bp_rep_tns").imagesLoaded(function () {
            $(".pst_imv_bp_rep_tns_loader").remove();
            $(".pst_imv_bp_rep_tns").removeClass("d-none");
            var pst_imv_slider_superior_rep_tns = tns({
                container: ".pst_imv_bp_rep_tns",
                // nav: false,
                navContainer: ".pst_imv_bp_rep_tns_nav",
                controls: false,
                // controlsContainer: ".tp_std_slider_entregues_controls",
                // prevButton: ".pst_imv_slider_superior_rep_controls_prev",
                // nextButton: ".pst_imv_slider_superior_rep_controls_next",
                items: 1,
                mode: "gallery",
                // autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro pst_imv_slider_superior_rep_tns")
    }

    $(".pst_imv_btn_bp").click(function () {
        $(".pst_imv_bp_row").removeClass("d-none");
        $(".pst_imv_imp_row").addClass("d-none");
        $(".pst_imv_btn_bp").addClass("selected");
        $(".pst_imv_btn_imp").removeClass("selected")
    });
    
    $(".pst_imv_btn_imp").click(function () {
        $(".pst_imv_bp_row").addClass("d-none");
        $(".pst_imv_imp_row").removeClass("d-none");
        $(".pst_imv_btn_imp").addClass("selected");
        $(".pst_imv_btn_bp").removeClass("selected")
    });



    try {

        $(".pst_imv_sign_rep_tns").imagesLoaded(function () {
            $(".pst_imv_sign_rep_tns_loader").remove();
            $(".pst_imv_sign_rep_tns").removeClass("d-none");
            var pst_imv_sign_rep_tns = tns({
                container: ".pst_imv_sign_rep_tns",
                nav: false,
                // navContainer: ".pst_imv_sign_rep_tns_nav",
                // controls: false,
                // controlsContainer: ".tp_std_slider_entregues_controls",
                prevButton: ".pst_imv_sign_rep_tns_controls_prev",
                nextButton: ".pst_imv_sign_rep_tns_controls_next",
                items: 1,
                mode: "gallery",
                // autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                // slideBy: 1,
                responsive: {
                    768: {
                        items: 2,
                    }
                },
            });
        });

    } catch (exception) {
        console.log("erro pst_imv_slider_superior_rep_tns")
    }

    $(".pst_imv_btn_bp").click(function () {
        $(".pst_imv_bp_row").removeClass("d-none");
        $(".pst_imv_imp_row").addClass("d-none");
    });
    
    $(".pst_imv_btn_imp").click(function () {
        $(".pst_imv_bp_row").addClass("d-none");
        $(".pst_imv_imp_row").removeClass("d-none");
    });

    $(".pst_imv_form_ebook_wrapper .close_btn").click(function(){
        $(this).parent().fadeOut();
    });

    $(".pst_imv_ebook_download_btn .button").click(function(){
        $(".pst_imv_form_ebook_wrapper").fadeIn();
    })
});