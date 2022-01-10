$(document).ready(function () {
    try {

        $(".tp_ins_misvisval_tns").imagesLoaded(function () {
            $(".tp_ins_misvisval_tns_loader").remove();
            $(".tp_ins_misvisval_tns").removeClass("d-none");
            var tp_ins_misvisval_tns = tns({
                container: ".tp_ins_misvisval_tns",
                // nav: false,
                navContainer: ".tp_ins_misvisval_tns_nav",
                controls: false,
                // controlsContainer: ".tp_hm_slider_veic_com_controls",
                // prevButton: ".tp_hm_slider_veic_com_prev",
                // nextButton: ".tp_hm_slider_veic_com_next",
                items: 1,
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                // responsive: {
                //     992: {
                //         items: 3,
                //     }
                // },
            });
        });

    } catch (exception) {
        console.log("erro tp_ins_misvisval_tns")
    }


    try {

        $(".tp_ins_selos_rep_tns").imagesLoaded(function () {
            $(".tp_ins_selos_rep_tns_loader").remove();
            $(".tp_ins_selos_rep_tns").removeClass("d-none");
            var tp_ins_selos_rep_tns = tns({
                container: ".tp_ins_selos_rep_tns",
                nav: false,
                // navContainer: ".tp_ins_misvisval_tns_nav",
                controls: false,
                // controlsContainer: ".tp_hm_slider_veic_com_controls",
                // prevButton: ".tp_hm_slider_veic_com_prev",
                // nextButton: ".tp_hm_slider_veic_com_next",
                items: 3,
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                // responsive: {
                //     992: {
                //         items: 3,
                //     }
                // },
            });
        });

    } catch (exception) {
        console.log("erro tp_ins_selos_rep_tns")
    }

    try {

        $(".tp_ins_dif_rep_tns").imagesLoaded(function () {
            $(".tp_ins_dif_rep_tns_loader").remove();
            $(".tp_ins_dif_rep_tns").removeClass("d-none");
            var tp_ins_dif_rep_tns = tns({
                container: ".tp_ins_dif_rep_tns",
                nav: false,
                // navContainer: ".tp_ins_misvisval_tns_nav",
                // controls: false,
                controlsContainer: ".tp_ins_dif_rep_tns_controls",
                // prevButton: ".tp_hm_slider_veic_com_prev",
                // nextButton: ".tp_hm_slider_veic_com_next",
                items: 1,
                autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                // responsive: {
                //     992: {
                //         items: 3,
                //     }
                // },
            });
        });

    } catch (exception) {
        console.log("erro tp_ins_dif_rep_tns")
    }



    try {

        $(".tp_ins_dep_rep_tns").imagesLoaded(function () {
            $(".tp_ins_dep_rep_tns_loader").remove();
            $(".tp_ins_dep_rep_tns").removeClass("d-none");
            var tp_ins_dep_rep_tns = tns({
                container: ".tp_ins_dep_rep_tns",
                nav: false,
                // navContainer: ".tp_ins_misvisval_tns_nav",
                // controls: false,
                controlsContainer: ".tp_ins_dep_rep_tns_controls",
                // prevButton: ".tp_hm_slider_veic_com_prev",
                // nextButton: ".tp_hm_slider_veic_com_next",
                items: 1,
                autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                // responsive: {
                //     992: {
                //         items: 3,
                //     }
                // },
            });
        });

    } catch (exception) {
        console.log("erro tp_ins_dep_rep_tns")
    }
});