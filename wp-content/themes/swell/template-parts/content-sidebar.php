<?php

/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ademipr
 */

?>



<!-- SIDEBAR -->
<!-- SIDEBAR -->
<!-- SIDEBAR -->



<div class="sidebar">
    <div class="sidebar_detail"></div>
    <div class="sidebar_imoveis_list_link d-flex flex-column align-items-center" <?php if ($arc_imv_bg_sup_pic = get_field('arc_imv_bg_sup_pic', 'options')['sizes']['thumbnail']) : ?> style="background: url(<?php echo $arc_imv_bg_sup_pic; ?>)center center/cover no-repeat" <?php endif; ?>>
        <div class="sidebar_imoveis_list_link_info">
            <h4>Conheça nossos imóveis</h4>
            <div class="sidebar_imoveis_list_link_cta my-3">
                <a href="<?php echo get_post_type_archive_link('imovel') ?>">
                    Saiba mais <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>

    </div>
    <?php
    $cat_args = array(
        'orderby'                  => 'name',
        'order'                    => 'ASC',
    );
    $cats = get_categories($cat_args);

    if ($cats) : ?>
        <div class="sidebar_categs_list d-flex flex-column align-items-center">
            <h4>Categorias</h4>
            <a class="text-center" href="<?php echo get_the_permalink(get_option('page_for_posts')); ?>">Todas</a>
            <?php
            foreach ($cats as $c) :
            ?>
                <a class="text-center" href="<?php echo get_category_link($c->term_id); ?>"><?php echo $c->name; ?></a>
            <?php
            endforeach;
            ?>
        </div>
    <?php endif; ?>

    <?php
    $terms_veic_com = get_terms([
        'taxonomy' => 'veiculos-comunicacao',
        'hide_empty' => false,
    ]);

    if ($terms_veic_com) : ?>

        <div class="sidebar_veic_com_list d-flex flex-column align-items-center">
            <h4>Na mídia</h4>
            <p>Veículos de Comunicação</p>
            <?php foreach ($terms_veic_com as $term_veic_com) :
                if ($tax_img = get_field('tax_veic_com_imagem', $term_veic_com)['sizes']['200x50']) :
            ?>
                    <a href=<? echo get_term_link($term_veic_com) ?> class="d-inline-flex justify-content-center align-items-center zoom_effect" style="height:50px; display:inline-flex; align-items:center;">
                        <img src="<?php echo get_field('tax_veic_com_imagem', $term_veic_com)['sizes']['200x50'] ?>" />
                    </a>
                <?php
                else :
                ?>
                    <a href=<? echo get_term_link($term_veic_com) ?> class="d-inline-flex justify-content-center align-items-center button zoom_effect" style="height:50px;">
                        <?php echo $term_veic_com->name ?>
                    </a>
            <?php
                endif;
            endforeach; ?>
        </div>
    <?php
    endif;
    ?>
</div>


<!-- FIM SIDEBAR -->
<!-- FIM SIDEBAR -->
<!-- FIM SIDEBAR -->