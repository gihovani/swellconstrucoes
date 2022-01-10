$(document).ready(function () {
    try {
        var arc_imv_status_tax_tns = tns({
            container: ".arc_imv_status_tax_tns",
            nav: false,
            // navContainer: ".tp_ins_misvisval_tns_nav",
            // controls: false,
            // controlsContainer: ".arc_imv_status_tax_tns_controls",
            prevButton: ".arc_imv_status_tax_tns_prev",
            nextButton: ".arc_imv_status_tax_tns_next",
            // items: 1,
            // autoplay: true,
            // autoHeight: true,
            autoWidth: true,
            autoplayButtonOutput: false,
            autoplayHoverPause: true,
            // responsive: {
            //     992: {
            //         items: 3,
            //     }
            // },
        });

    } catch (exception) {
        console.log(exception)
    }

    try {
        var arc_imv_status_tax_tns = tns({
            container: ".arc_imv_regiao_tax_tns",
            nav: false,
            // navContainer: ".tp_ins_misvisval_tns_nav",
            // controls: false,
            // controlsContainer: ".arc_imv_status_tax_tns_controls",
            prevButton: ".arc_imv_regiao_tax_tns_prev",
            nextButton: ".arc_imv_regiao_tax_tns_next",
            // items: 1,
            // autoplay: true,
            // autoHeight: true,
            loop: false,
            autoWidth: true,
            autoplayButtonOutput: false,
            autoplayHoverPause: true,
            // responsive: {
            //     992: {
            //         items: 3,
            //     }
            // },
        });

    } catch (exception) {
        console.log(exception)
    }


    try {

        $(".tp_std_slider_entregues_tns").imagesLoaded(function () {
            $(".tp_std_slider_entregues_loader").remove();
            $(".tp_std_slider_entregues_tns").removeClass("d-none");
            var tp_std_slider_entregues_tns = tns({
                container: ".tp_std_slider_entregues_tns",
                // nav: false,
                navContainer: ".tp_std_slider_entregues_nav",
                // controlsContainer: ".tp_std_slider_entregues_controls",
                prevButton: ".tp_std_slider_entregues_control_prev",
                nextButton: ".tp_std_slider_entregues_control_next",
                items: 1,
                autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                responsive: {
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    }
                },
            });
        });

    } catch (exception) {
        console.log("erro tp_std_slider_entregues_tns")
    }


});