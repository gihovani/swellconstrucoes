<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package swell
 */

$page_for_posts = get_option('page_for_posts');

$s = '';
if (isset($_GET['s']) && !empty($_GET['s'])) {
	$s = sanitize_text_field( $_GET['s']);
}

get_header();
?>

<main id="primary" class="site-main">

	<!-- TÍTULO -->

	<section class="pg_blg_title_section mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="d-flex flex-column">
						<h1><?php echo get_the_title($page_for_posts) ?><br />
							Busca: <?php echo $s ?>
						</h1>
						<p>Confira todas as novidades da Swell</p>
					</div>
				</div>
				<div class="col-12 col-md-4 d-flex align-items-center">
					<style>
					</style>
					<form class="form_busca_posts" role="search" method="get" action="<?php echo site_url(); ?>" class="tp_std_filter_bar_search_form">
						<input type="search" placeholder="Buscar" style="border: none;" value="<?php echo $s ?>" name="s">
						<button type="submit" style="background: none; border: none;"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</section>


	<?php if (have_posts()) : ?>

		<!-- POSTS / SIDEBAR-->

		<section class="pg_blg_posts_section mt-5">
			<div class="container">
				<div class="row">
					<!-- POSTS -->
					<div class="col-12 col-md-10 order-2 order-md-1 d-flex flex-wrap justify-content-around align-items-start">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();
							// get_template_part('content','card-blog');
						?>
							<div class="card_post block zoom_effect" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), '800x800') ?>)center center/cover no-repeat">
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
					<!-- SIDEBAR -->
					<div class="col-12 col-md-2 order-1 order-md-2  position-relative">
						<!-- SIDEBAR  -->
						<?php get_template_part('template-parts/content', 'sidebar'); ?>
						<!-- FIM SIDEBAR  -->
					</div>
				</div>
			</div>
		</section>
		<section class="tp_std_pagination_links mt-3">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<?php
						$paginationArgs = array(
							'prev_text' => '<i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i>',
							'next_text' => '<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>'
						);
						echo paginate_links($paginationArgs);
						?>
					</div>
				</div>
			</div>
		</section>



		<!-- NEWSLETTER  -->

		<?php get_template_part('template-parts/content', 'section-newsletter'); ?>

		<!-- FIM NEWSLETTER  -->
	<?php
	else :
	?>
		<section class="pg_blg_posts_section mt-5">
			<div class="container">
				<div class="row">
					<div class="col-10">
						<h3>NADA ENCONTRADO</h3>
					</div>
					<!-- SIDEBAR -->
					<div class="col-2 position-relative">

						<!-- SIDEBAR  -->
						<?php get_template_part('template-parts/content', 'sidebar'); ?>
						<!-- FIM SIDEBAR  -->
					</div>
				</div>
			</div>
		</section>
	<?php
	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
