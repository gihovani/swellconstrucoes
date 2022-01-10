<?php

/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ademipr
 */

?>

<a href="<?php the_permalink() ?>" class="block_imovel_model_1">
    <div class="block_imovel_model_1_bg" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>) center center/cover">
        <div class="block_imovel_model_1_info_wrap_panel"></div>
        <div class="block_imovel_model_1_info_wrap">
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
                    if (get_sub_field('pst_imv_carac_pri_rep_item_show')) :
            ?>
                        <div class="block_imovel_model_1_pst_imv_carac_pri_rep_item">
                            <?php echo get_sub_field('pst_imv_carac_pri_rep_item_icon') ?>
                            <span class="ms-1"><?php echo get_sub_field('pst_imv_carac_pri_rep_item_text') ?></span>
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</a>