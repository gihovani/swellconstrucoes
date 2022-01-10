<?php

// Template Name: Página Agendamento de Visitas

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>
		<section class="tp_agd_vis_section mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2>Swell Construções: agendar visita aos apartamentos em Curitiba</h2>
						<p>Quer mais informações sobre nossos imóveis para venda em Curitiba? Preencha o formulário e entraremos em contato.</p>
						<div class="tp_agd_vis_form_wrapper">
							<?php echo do_shortcode('[contact-form-7 id="416" title="Agendamento de Visitas"]'); ?>
						</div>
					</div>
					<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">




						<!-- CARROUSEL ALL IMÓVEIS -->
						<!-- CARROUSEL ALL IMÓVEIS -->
						<!-- CARROUSEL ALL IMÓVEIS -->



						<?php
						$query_args = array(
							'post_type' => 'imovel',
							'post_status' => 'publish',
							'order' => 'DESC',
							'orderby' => 'date',
							'posts_per_page' => '-1',
						);

						// The Query
						$the_query = new WP_Query($query_args);

						// The Loop
						if ($the_query->have_posts()) : ?>
								<div class="tp_agd_vis_tns">
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
								<div class="tp_agd_vis_tns_nav d-flex justify-content-center mt-3">
									<?php
									while ($the_query->have_posts()) :
										$the_query->the_post();
									?>
										<div class="tns_nav_item"></div>
									<?php
									endwhile;
									?>
								</div>
						<?php
							/* Restore original Post Data */
							wp_reset_postdata();
						endif;
						?>



						<!-- FIM CARROUSEL ALL IMÓVEIS -->
						<!-- FIM CARROUSEL ALL IMÓVEIS -->
						<!-- FIM CARROUSEL ALL IMÓVEIS -->
					</div>
				</div>
			</div>
		</section>
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
