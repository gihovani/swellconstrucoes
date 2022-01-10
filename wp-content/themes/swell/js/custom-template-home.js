$(document).ready(function () {
    try {

        $(".tp_hm_slider_superior_rep_tns").imagesLoaded(function () {
            $(".tp_hm_slider_superior_rep_loader").remove();
            $(".tp_hm_slider_superior_rep_tns").removeClass("d-none");
            var tp_hm_slider_superior_rep_tns = tns({
                container: ".tp_hm_slider_superior_rep_tns",
                navContainer: ".tp_hm_slider_superior_rep_nav",
                controlsContainer: ".tp_hm_slider_superior_rep_controls",
                items: 1,
                // mode: "gallery",
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro tp_hm_slider_superior_rep_tns")
    }

    try {

        $(".tp_hm_slider_construcao_tns").imagesLoaded(function () {
            $(".tp_hm_slider_construcao_loader").remove();
            $(".tp_hm_slider_construcao_tns").removeClass("d-none");
            var tp_hm_slider_construcao_tns = tns({
                container: ".tp_hm_slider_construcao_tns",
                navContainer: ".tp_hm_slider_construcao_nav",
                controlsContainer: ".tp_hm_slider_construcao_controls",
                items: 1,
                autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro tp_hm_slider_construcao_tns")
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

    try {

        $(".tp_hm_slider_veic_com_tns").imagesLoaded(function () {
            $(".tp_hm_slider_veic_com_loader").remove();
            $(".tp_hm_slider_veic_com_tns").removeClass("d-none");
            var tp_hm_slider_veic_com_tns = tns({
                container: ".tp_hm_slider_veic_com_tns",
                nav: false,
                // navContainer: ".tp_hm_slider_veic_com_nav",
                // controlsContainer: ".tp_hm_slider_veic_com_controls",
                prevButton: ".tp_hm_slider_veic_com_prev",
                nextButton: ".tp_hm_slider_veic_com_next",
                items: 2,
                autoplay: true,
                // autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                responsive: {
                    992: {
                        items: 3,
                    }
                },
            });
        });

    } catch (exception) {
        console.log("erro tp_hm_slider_veic_com_tns")
    }
});