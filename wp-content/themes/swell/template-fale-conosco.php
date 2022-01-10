<?php

// Template Name: Página Fale Conosco

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post();
	?>
		<section class="tp_fl_cnsc_section_1 mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h1>Swell Construções: fale conosco</h1>
						<div class="tp_fl_cnsc_form_wrapper">
							<?php echo do_shortcode('[contact-form-7 id="465" title="Fale Conosco"]') ?>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<?php if (have_rows('tp_fl_cnsc_end_rep')) : ?>
							<div class="tp_fl_cnsc_end_rep">
								<?php while (have_rows('tp_fl_cnsc_end_rep')) :
									the_row() ?>
									<div class="tp_fl_cnsc_end_rep_item">
										<?php if ($tp_fl_cnsc_end_rep_item_title = get_sub_field('tp_fl_cnsc_end_rep_item_title')) : ?>
											<div class="tp_fl_cnsc_end_rep_item_title">
												<?php echo $tp_fl_cnsc_end_rep_item_title ?>
											</div>
										<?php endif; ?>
										<?php if ($tp_fl_cnsc_end_rep_item_address = get_sub_field('tp_fl_cnsc_end_rep_item_address')) : ?>
											<div class="d-flex">
												<div class="tp_fl_cnsc_end_rep_item_address">
													<?php echo $tp_fl_cnsc_end_rep_item_address ?>
												</div>
												<?php if ($tp_fl_cnsc_end_rep_item_gmaps_link = get_sub_field('tp_fl_cnsc_end_rep_item_gmaps_link')) : ?>
													<div class="tp_fl_cnsc_end_rep_item_gmaps_link">
														<a href="<?php echo $tp_fl_cnsc_end_rep_item_gmaps_link ?>" target="_BLANK"><i class="fas fa-map-marker-alt"></i></a>
													</div>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ($tp_fl_cnsc_end_rep_item_hour = get_sub_field('tp_fl_cnsc_end_rep_item_hour')) : ?>
											<div class="tp_fl_cnsc_end_rep_item_hour">
												<span>Horário de Atendimento:</span>
												<?php echo $tp_fl_cnsc_end_rep_item_hour ?>
											</div>
										<?php endif; ?>
										<?php if ($tp_fl_cnsc_end_rep_item_tel = get_sub_field('tp_fl_cnsc_end_rep_item_tel')) : ?>
											<div class="tp_fl_cnsc_end_rep_item_tel">
												Telefone:&nbsp;<?php echo $tp_fl_cnsc_end_rep_item_tel ?>
											</div>
										<?php endif; ?>
										<?php if ($tp_fl_cnsc_end_rep_item_mail = get_sub_field('tp_fl_cnsc_end_rep_item_mail')) : ?>
											<div class="tp_fl_cnsc_end_rep_item_mail">
												E-mail:&nbsp;<?php echo $tp_fl_cnsc_end_rep_item_mail ?>
											</div>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
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
