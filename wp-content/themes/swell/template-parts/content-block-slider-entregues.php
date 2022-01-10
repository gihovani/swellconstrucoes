<?php

/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ademipr
 */

?>



<!-- OBRAS ENTREGUES -->
<!-- OBRAS ENTREGUES -->
<!-- OBRAS ENTREGUES -->




<?php
$query_args = array(
    'post_type' => 'imovel',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => '-1',
    'tax_query' => array(
        '0' => array(
            'taxonomy' => 'status',
            'field' => 'slug',
            'terms' => array('entregue'),
            'operator' => 'IN',
        ),
    ),
);

// The Query
$the_query = new WP_Query($query_args);

// The Loop
if ($the_query->have_posts()) : ?>
    <section class="tp_std_slider_entregues py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-between align-items-center tp_std_slider_entregues_text">
                    <p class="order-2 order-lg-1">Confira o histórico dos nossos apartamentos em Curitiba.</p>
                    <h3 class="order-1 order-lg-2">Apartamentos entregues em Curitiba</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6 order-2 order-lg-1 col-lg-1 mt-2 d-flex justify-content-end justify-content-lg-center align-items-center">
                    <div class="tp_std_slider_entregues_control_prev tns_control_item"><i class="fas fa-chevron-left"></i></div>
                </div>
                <div class="col-12 order-1 order-lg-2 col-lg-10 mt-2">
                    <div class="tp_std_slider_entregues_tns">
                        <?php
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                        ?>
                            <a href="<?php the_permalink() ?>">
                                <div class="tp_std_slider_entregues_tns_item" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>) center center/cover">
                                    <div class="tp_std_slider_entregues_tns_item_info_wrap_panel"></div>
                                    <div class="tp_std_slider_entregues_tns_item_info_wrap">
                                        <div class="d-flex justify-content-between align-items-center align-self-stretch mb-auto">
                                            <?php
                                            $term_obj_list = get_the_terms($post->ID, 'regiao');
                                            if ($term_obj_list) :
                                                $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); ?>
                                                <span class="button"><?php echo $terms_string ?></span>
                                            <?php endif; ?>
                                            <?php if (get_field('pst_imv_carac_pri_100_vendido')) : ?>
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/media/selo-100-vendido.png" />
                                            <?php endif; ?>
                                        </div>

                                        <h4><?php the_title() ?></h4>
                                        <?php
                                        if (have_rows('pst_imv_carac_pri_rep')) :
                                            while (have_rows('pst_imv_carac_pri_rep')) :
                                                the_row();
                                        ?>
                                                <div class="tp_std_slider_entregues_tns_item_info_wrap_item">
                                                    <?php echo get_sub_field('pst_imv_carac_pri_rep_item_icon') ?>
                                                    <span class="ms-1"><?php echo get_sub_field('pst_imv_carac_pri_rep_item_text') ?></span>
                                                </div>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>

                                        <div class="tp_std_slider_entregues_tns_item_info_wrap_item mt-5">
                                            Saiba mais <i class="fas fa-chevron-right" style="color:var(--cor-1);"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="tp_std_slider_entregues_nav d-none mt-3">
                        <?php
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                        ?>
                            <div class="tns_nav_item"></div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
                <div class="col-6 col-lg-1 order-3 order-lg-3 mt-2 d-flex justify-content-start justify-content-lg-center align-items-center">
                    <div class="tp_std_slider_entregues_control_next tns_control_item"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
<?php
    /* Restore original Post Data */
    wp_reset_postdata();
endif;
?>




<!-- FIM OBRAS ENTREGUES -->
<!-- FIM OBRAS ENTREGUES -->
<!-- FIM OBRAS ENTREGUES -->