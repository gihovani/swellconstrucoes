<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swell
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>
		<!-- BANNER SUPERIOR -->

		<section class="bg_sup_section" <?php if ($pg_pd_bg_sup_pic = get_field('pg_pd_bg_sup_pic')['sizes']['1920x320']) : ?> style="background: url(<?php echo $pg_pd_bg_sup_pic; ?>)center center/cover no-repeat" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php the_title() ?></h1>
					</div>
				</div>
			</div>
		</section>


		<!-- CONTENT -->

		<section class="pg_pd_content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php echo get_the_content() ?>
					</div>
				</div>
			</div>
		</section>


		<?php

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) : ?>

			<section class="pg_pd_comments">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php comments_template(); ?>
						</div>
					</div>
				</div>
			</section>
	<?
		endif;
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
