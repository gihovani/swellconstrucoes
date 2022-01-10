<?php

// Template Name: Página Home

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>



		<!-- SLIDER SUPERIOR -->
		<!-- SLIDER SUPERIOR -->
		<!-- SLIDER SUPERIOR -->



		<?php
		if (have_rows('tp_hm_slider_superior_rep')) :
		?>
			<section class="tp_hm_slider_superior_rep">
				<div class="tp_hm_slider_superior_rep_tns">
					<?php
					while (have_rows('tp_hm_slider_superior_rep')) :
						the_row();
						$rowindex = get_row_index();
					?>
						<div class="tp_hm_slider_superior_rep_item_outer position-relative">
							<?php
							$img_desk = get_sub_field('tp_hm_slider_superior_repeater_item_img_desk')['sizes']['1920x800'];
							$img_mob = get_sub_field('tp_hm_slider_superior_repeater_item_img_mob')['sizes']['800x800'];
							?>
							<style>
								.tp_hm_slider_superior_rep_item_<?php echo $rowindex ?> {
									height: 800px;
									background: url(<?php echo $img_desk ?>) center center/cover no-repeat;
								}

								@media (max-width: 800px) {
									.tp_hm_slider_superior_rep_item_<?php echo $rowindex ?> {
										height: 100vw;
										background: url(<?php echo $img_mob ?>) center center/cover no-repeat;
									}
								}
							</style>
							<div class="tp_hm_slider_superior_rep_item_<?php echo $rowindex ?>">
							</div>
							<?php
							if ($link = get_sub_field('tp_hm_slider_superior_repeater_item_link')) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<a class="tp_hm_slider_superior_rep_item_link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									<div class="container">
										<div class="row">
											<div class="col-12">
												<?php the_sub_field('tp_hm_slider_superior_repeater_item_text') ?>
											</div>
										</div>
									</div>
								</a>
							<?php endif; ?>
						</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="tp_hm_slider_superior_rep_nav_controls_wrapper">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-auto d-flex justify-content-end position-relative">
								<div class="tp_hm_slider_superior_rep_nav d-none d-md-flex">
									<?php
									while (have_rows('tp_hm_slider_superior_rep')) :
										the_row();
										$title = get_sub_field('tp_hm_slider_superior_repeater_item_title');
									?>
										<div class="tp_hm_slider_superior_rep_nav_item">
											<?php
											echo $title;
											?>
										</div>
									<?php
									endwhile;
									?>
								</div>
								<div class="tp_hm_slider_superior_rep_controls d-flex">
									<div class="tns_control_item left"><i class="fas fa-chevron-left"></i></div>
									<div class="tns_control_item right"><i class="fas fa-chevron-right"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php
		endif;
		?>



		<!-- FIM SLIDER SUPERIOR -->
		<!-- FIM SLIDER SUPERIOR -->
		<!-- FIM SLIDER SUPERIOR -->



		<!-- IMÓVEIS EM CONSTRUÇÃO -->
		<!-- IMÓVEIS EM CONSTRUÇÃO -->
		<!-- IMÓVEIS EM CONSTRUÇÃO -->



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
					'terms' => array('em-construcao'),
					'operator' => 'IN',
				),
			),
		);

		// The Query
		$the_query = new WP_Query($query_args);

		// The Loop
		if ($the_query->have_posts()) : ?>
			<section class="tp_hm_slider_construcao mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 mt-2 d-flex flex-column justify-content-between justify-content-lg-start align-items-center align-items-lg-start tp_hm_slider_construcao_text">
							<h3>Em construção</h3>
							<p>Novos projetos para sua realização.</p>
							<a href="<?php echo get_post_type_archive_link('imovel') ?>" class="button">Todos os imóveis <i class="fas fa-chevron-right"></i></a>
						</div>
						<div class="col-12 col-lg-7 mt-2 ">
							<div class="tp_hm_slider_construcao_tns">
								<?php
								while ($the_query->have_posts()) :
									$the_query->the_post();
								?>
									<div class="d-inline-flex justify-content-center">
										<?php get_template_part('template-parts/content', 'block-imovel-model-1'); ?>
									</div>
								<?php
								endwhile;
								?>
							</div>
							<div class="tp_hm_slider_construcao_nav d-flex justify-content-center mt-3">
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
						<div class="col-12 col-lg-1 mt-2 d-flex justify-content-center align-items-center">
							<div class="tp_hm_slider_construcao_controls">
								<div class="tns_control_item"><i class="fas fa-chevron-left"></i></div>
								<div class="tns_control_item"><i class="fas fa-chevron-right"></i></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		endif;
		?>



		<!-- FIM IMÓVEIS EM CONSTRUÇÃO -->
		<!-- FIM IMÓVEIS EM CONSTRUÇÃO -->
		<!-- FIM IMÓVEIS EM CONSTRUÇÃO -->



		<!-- SLIDER ENTREGUES -->

		<?php get_template_part('template-parts/content', 'block-slider-entregues'); ?>

		<!-- FIM SLIDER ENTREGUES -->



		<!-- VEÍCULOS DE COMUNICAÇÃO -->
		<!-- VEÍCULOS DE COMUNICAÇÃO -->
		<!-- VEÍCULOS DE COMUNICAÇÃO -->

		<?php
		$terms_veic_com = get_terms([
			'taxonomy' => 'veiculos-comunicacao',
			'hide_empty' => false,
		]);

		if ($terms_veic_com) :
		?>
			<section class="tp_hm_slider_veic_com py-5 mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 order-1 mt-2 d-flex flex-column tp_hm_slider_veic_com_text align-items-center align-items-lg-start">
							<h3>Na mídia</h3>
							<p>Veículos de comunicação</p>
						</div>
						<div class="col-6 col-lg-1 mt-2 order-3 order-lg-2 d-flex justify-content-end justify-content-lg-end align-items-center">
							<div class="tp_hm_slider_veic_com_prev tns_control_item"><i class="fas fa-chevron-left"></i></div>
						</div>
						<div class="col-12 col-lg-6 order-2 order-lg-3 mt-2 d-flex justify-content-center align-items-center">
							<div class="tp_hm_slider_veic_com_tns">
								<?php foreach ($terms_veic_com as $term_veic_com) : ?>
									<?php
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
									?>
								<?php
								endforeach;
								?>
							</div>
						</div>
						<div class="col-6 col-lg-1 order-4 mt-2 d-flex justify-content-start justify-content-lg-end align-items-center">
							<div class="tp_hm_slider_veic_com_next tns_control_item"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>
				</div>
			</section>
		<?php
		endif;
		?>



		<!-- FIM VEÍCULOS DE COMUNICAÇÃO -->
		<!-- FIM VEÍCULOS DE COMUNICAÇÃO -->
		<!-- FIM VEÍCULOS DE COMUNICAÇÃO -->



		<!-- BLOG -->
		<!-- BLOG -->
		<!-- BLOG -->

		<?php

		$query_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => 'DESC',
			'orderby' => 'date',
			'posts_per_page' => '4',
		);

		// The Query
		$the_query = new WP_Query($query_args);

		// The Loop
		if ($the_query->have_posts() && $the_query->found_posts >= 4) :
		?>
			<section class="tp_hm_blog">
				<div class="container-fluid">
					<div class="row">
						<?php
						while ($the_query->have_posts()) :
							$the_query->the_post();
						?>
							<div class="col-12 col-md-6 col-lg-3 card_post zoom_effect" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), '800x800') ?>)center center/cover no-repeat">
								<a href="<?php the_permalink() ?>">
									<div class="card_post_panel"></div>
									<div class="card_post_info_wrap d-flex flex-column p-3">
										<div class="card_post_date mt-auto mb-2">
											<?php echo get_the_date() ?>
										</div>
										<div class="card_post_title my-3">
											<?php echo get_the_title() ?>
										</div>
										<div class="card_post_cta my-3">
											Saiba mais <i class="fas fa-chevron-right" style="color:var(--cor-1);"></i>
										</div>
									</div>
								</a>
							</div>
						<?php
						endwhile;
						?>
					</div>
				</div>
			</section>
		<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		endif;
		?>


		<!-- FIM BLOG -->
		<!-- FIM BLOG -->
		<!-- FIM BLOG -->



		<!-- NEWSLETTER  -->

		<?php get_template_part('template-parts/content', 'section-newsletter'); ?>

		<!-- FIM NEWSLETTER  -->


	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
