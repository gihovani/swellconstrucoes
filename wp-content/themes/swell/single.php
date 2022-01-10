<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package swell
 */

$page_for_posts = get_option('page_for_posts');

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>
		<!-- BARRA SUPERIOR -->

		<section class="sgl_post_title_section mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 d-flex justify-content-between align-items-center">
						<div class="d-flex flex-column">
							<h1><?php echo get_the_title($page_for_posts) ?></h1>
							<p>Fique por dentro das principais notícias do mercado imobiliário.</p>
						</div>
						<a href="<?php echo get_the_permalink($page_for_posts) ?>" class="button">Voltar para o Blog <i class="fas fa-chevron-left" style="color:var(--cor-1);"></i></a>
					</div>
					<div class="col-12 col-md-4 d-flex align-items-center">
						<style>
						</style>
						<form class="form_busca_posts" role="search" method="get" action="<?php echo site_url(); ?>" class="tp_std_filter_bar_search_form">
							<input type="search" placeholder="Buscar" style="border: none;" name="s">
							<button type="submit" style="background: none; border: none;"><i class="fas fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- TÍTULO / CONTENT -->

		<section class="sgl_post_content_section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10">
						<div class="row mt-3">
							<div class="col-12">
								<h2><?php echo get_the_title() ?></h2>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<div class="sgl_post_date"><?php echo get_the_date() ?></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-md-8 offset-md-2">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="img-fluid" />
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<?php echo get_the_content() ?>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 d-flex justify-content-between align-items-center">
								<div class="d-flex flex-wrap">
									<?
									$post_tags = get_the_tags();

									if ($post_tags) :
										foreach ($post_tags as $tag) :
									?>
											<a href="<?php echo get_tag_link($tag->term_id) ?>" class="button me-3"><?php echo $tag->name ?></a>
									<?php
										endforeach;
									endif; ?>
								</div>
								<div>[SHARE ITEMS]</div>
							</div>
						</div>
						<?
						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) : ?>
							<div class="row mt-3">
								<div class="col-12">
									<?php comments_template(); ?>
								</div>
							</div>
						<?php
						endif;
						?>
					</div>
					<!-- SIDEBAR  -->
					<div class="col-12 col-md-2 position-relative">
						<!-- SIDEBAR  -->
						<?php get_template_part('template-parts/content', 'sidebar'); ?>
						<!-- FIM SIDEBAR  -->
					</div>
				</div>
			</div>
		</section>


		<!-- NEWSLETTER  -->

		<?php get_template_part('template-parts/content', 'section-newsletter'); ?>

		<!-- FIM NEWSLETTER  -->

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
			<section class="sgl_post_blog mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Assuntos relacionados</h2>
						</div>
					</div>
				</div>
				<div class="container-fluid mt-5">
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


	<?php

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
