$(document).ready(function () {
    try {

        $(".tp_agd_vis_tns").imagesLoaded(function () {
            $(".tp_agd_vis_tns_loader").remove();
            $(".tp_agd_vis_tns").removeClass("d-none");
            var tp_hm_slider_superior_rep_tns = tns({
                container: ".tp_agd_vis_tns",
                navContainer: ".tp_agd_vis_tns_nav",
                controls: false,
                // controlsContainer: ".tp_agd_vis_tns_controls",
                items: 1,
                mode: "gallery",
                autoplay: true,
                autoHeight: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
        });

    } catch (exception) {
        console.log("erro tp_agd_vis_tns_nav")
    }

});