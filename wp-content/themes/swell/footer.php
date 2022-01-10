<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swell
 */

?>

<footer id="colophon" class="site-footer">

	<?php
	$link1 = get_field('cfg_site_footer_btn_1_link', 'options');
	$link2 = get_field('cfg_site_footer_btn_2_link', 'options');
	$link3 = get_field('cfg_site_footer_btn_3_link', 'options');

	if ($link1 || $link2 || $link3) :
	?>
		<section class="site_footer_three_buttons">
			<div class="container">
				<div class="row py-5">
					<div class="col-12 col-lg-4 my-2 d-flex">
						<?php
						if ($link1) :
						?>
							<a class="button_outline flex-grow-1" href="<?php echo esc_url($link1); ?>" target="_BLANK">
								<div class="d-flex justify-content-center align-items-center">
									<?php
									if ($cfg_site_footer_btn_1_icon = get_field('cfg_site_footer_btn_1_icon', 'options')) :
									?>
										<div class="cfg_site_footer_btn_1_icon">
											<?php echo $cfg_site_footer_btn_1_icon; ?>
										</div>
									<?php
									endif;
									?>
									<div class="d-flex flex-column">
										<?php
										if ($cfg_site_footer_btn_1_text_1 = get_field('cfg_site_footer_btn_1_text_1', 'options')) :
										?>
											<div class="cfg_site_footer_btn_1_text_1">
												<?php echo $cfg_site_footer_btn_1_text_1; ?>
											</div>
										<?php
										endif;
										?>
										<?php
										if ($cfg_site_footer_btn_1_text_2 = get_field('cfg_site_footer_btn_1_text_2', 'options')) :
										?>
											<div class="cfg_site_footer_btn_1_text_2">
												<?php echo $cfg_site_footer_btn_1_text_2; ?>
											</div>
										<?php
										endif;
										?>
									</div>
								</div>
							</a>
						<?php
						endif;
						?>
					</div>
					<div class="col-12 col-lg-4 my-2 d-flex">
						<?php
						if ($link2) :
						?>
							<a class="button_outline flex-grow-1" href="<?php echo esc_url($link2); ?>" target="_BLANK">
								<div class="d-flex justify-content-center align-items-center">
									<?php
									if ($cfg_site_footer_btn_2_icon = get_field('cfg_site_footer_btn_2_icon', 'options')) :
									?>
										<div class="cfg_site_footer_btn_2_icon">
											<?php echo $cfg_site_footer_btn_2_icon; ?>
										</div>
									<?php
									endif;
									?>
									<div class="d-flex flex-column">
										<?php
										if ($cfg_site_footer_btn_2_text_1 = get_field('cfg_site_footer_btn_2_text_1', 'options')) :
										?>
											<div class="cfg_site_footer_btn_2_text_1">
												<?php echo $cfg_site_footer_btn_2_text_1; ?>
											</div>
										<?php
										endif;
										?>
										<?php
										if ($cfg_site_footer_btn_2_text_2 = get_field('cfg_site_footer_btn_2_text_2', 'options')) :
										?>
											<div class="cfg_site_footer_btn_2_text_2">
												<?php echo $cfg_site_footer_btn_2_text_2; ?>
											</div>
										<?php
										endif;
										?>
									</div>
								</div>
							</a>
						<?php
						endif;
						?>
					</div>
					<div class="col-12 col-lg-4 my-2 d-flex">
						<?php
						if ($link3) :
						?>
							<a class="button_outline flex-grow-1" href="<?php echo esc_url($link3); ?>" target="_BLANK">
								<div class="d-flex justify-content-center align-items-center">
									<?php
									if ($cfg_site_footer_btn_3_icon = get_field('cfg_site_footer_btn_3_icon', 'options')) :
									?>
										<div class="cfg_site_footer_btn_3_icon">
											<?php echo $cfg_site_footer_btn_3_icon; ?>
										</div>
									<?php
									endif;
									?>
									<div class="d-flex flex-column">
										<?php
										if ($cfg_site_footer_btn_3_text_1 = get_field('cfg_site_footer_btn_3_text_1', 'options')) :
										?>
											<div class="cfg_site_footer_btn_3_text_1">
												<?php echo $cfg_site_footer_btn_3_text_1; ?>
											</div>
										<?php
										endif;
										?>
										<?php
										if ($cfg_site_footer_btn_3_text_2 = get_field('cfg_site_footer_btn_3_text_2', 'options')) :
										?>
											<div class="cfg_site_footer_btn_3_text_2">
												<?php echo $cfg_site_footer_btn_3_text_2; ?>
											</div>
										<?php
										endif;
										?>
									</div>
								</div>
							</a>
						<?php
						endif;
						?>
					</div>
				</div>
			</div>
		</section>
	<?php
	endif;
	?>
	<section class="site-footer-blue-wrapper">
		<div class="container">
			<div class="row py-5">
				<div class="col-12 d-flex align-items-center justify-content-center flex-wrap">
					<div class="custom_logo_wrapper">
						<?php the_custom_logo(); ?>
					</div>
					<?php
					if (have_rows('cfg_site_footer_selos_rep', 'options')) :
					?>
						<div class="footer_selos">
							<?php while (have_rows('cfg_site_footer_selos_rep', 'options')) :
								the_row();
							?>
								<img src="<?php echo get_sub_field('cfg_site_footer_selos_rep_item_img')['sizes']['thumbnail'] ?>" class="m-3">
							<?php
							endwhile;
							?>
						</div>
					<?
					endif;
					?>
					<?php
					$args_menu_3 = array(
						'menu' => 'Footer',
						'container' => false,
					);
					wp_nav_menu($args_menu_3);
					?>
					<?php
					$args_menu_4 = array(
						'menu' => 'Footer Redes Sociais',
						'container' => false,
					);
					wp_nav_menu($args_menu_4);
					?>
				</div>
			</div>
		</div>
	</section>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>