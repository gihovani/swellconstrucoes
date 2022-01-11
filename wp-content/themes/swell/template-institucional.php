<?php

// Template Name: Página Institucional

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
	?>

		<!-- BANNER SUPERIOR -->

		<section class="bg_sup_section" <?php if ($tp_ins_bg_sup_pic = get_field('tp_ins_bg_sup_pic')['sizes']['1920x320']) : ?> style="background: url(<?php echo $tp_ins_bg_sup_pic; ?>)center center/cover no-repeat" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php the_title() ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="d-flex flex-wrap flex-column flex-md-row justify-content-between">
							<a href="#sobre nos" class="tp_ins_bg_sup_btn zoom_effect">Sobre Nós</a>
							<a href="#historia" class="tp_ins_bg_sup_btn zoom_effect">História</a>
							<a href="#premios" class="tp_ins_bg_sup_btn zoom_effect">Prêmios e Certificações</a>
							<a href="#diferenciais" class="tp_ins_bg_sup_btn zoom_effect">Diferenciais</a>
							<a href="#depoimentos" class="tp_ins_bg_sup_btn zoom_effect">Depoimentos</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- SOBRE NÓS -->

		<?php if ($tp_ins_sob_text = get_field('tp_ins_sob_text')) : ?>
			<a id="sobre nos" class="anchor"></a>
			<section class="tp_ins_sob mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Swell Construções: referência em apartamentos de alto padrão</h2>
						</div>
						<div class="col-12">
							<p><?php echo $tp_ins_sob_text; ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- HISTÓRIA / MISSÃO / SELOS-->

		<?php if ($tp_ins_his_text = get_field('tp_ins_his_text')) : ?>
			<?php if ($tp_ins_his_pic = get_field('tp_ins_his_pic')) :
				$tp_ins_his_pic_url = $tp_ins_his_pic['sizes']['875x500'];
			endif; ?>
			<style>
				.tp_ins_his::before {
					background: url(<?php echo $tp_ins_his_pic_url ?>) center right 80% no-repeat;
				}
			</style>
			<a id="historia" class="anchor"></a>
			<section class="tp_ins_his position-relative mt-5">
				<div class="container">
					<div class="row">
						<div class="col-10 offset-1 d-md-none">
							<img src="<?php echo $tp_ins_his_pic_url ?>" class="img-fluid tp_ins_his_img_mob" />
						</div>
						<div class="col-12 col-md-6 offset-md-6 mt-5">
							<div class="col-12">
								<h2 class="text-start text-md-end">Gestão profissional de empreendimentos imobiliários </h2>
							</div>
							<div class="col-12">
								<p class="text-start text-md-end"><?php echo $tp_ins_his_text; ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>



		<?php
		$tp_ins_mis_text = get_field('tp_ins_mis_text');
		$tp_ins_vis_text = get_field('tp_ins_mis_text');
		$tp_ins_val_text = get_field('tp_ins_mis_text');
		if ($tp_ins_mis_text || $tp_ins_vis_text || $tp_ins_val_text) :
			$items = 0; ?>


			<a id="missao" class="anchor"></a>
			<section class="tp_ins_misvisval position-relative">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="tp_ins_misvisval_tns_outer">
								<div class="tp_ins_misvisval_tns">
									<?php if ($tp_ins_mis_text) :
										$items++; ?>
										<div class="tp_ins_misvisval_tns_item">
											<div class="tp_ins_misvisval_tns_item_title">
												<h3>Missão</h3>
											</div>
											<div class="tp_ins_misvisval_tns_item_text">
												<?php echo $tp_ins_mis_text; ?>
											</div>
										</div>
									<?php endif; ?>
									<?php if ($tp_ins_vis_text) :
										$items++; ?>
										<div class="tp_ins_misvisval_tns_item">
											<div class="tp_ins_misvisval_tns_item_title">
												<h3>Visão</h3>
											</div>
											<div class="tp_ins_misvisval_tns_item_text">
												<?php echo $tp_ins_vis_text; ?>
											</div>
										</div>
									<?php endif; ?>
									<?php if ($tp_ins_val_text) :
										$items++; ?>
										<div class="tp_ins_misvisval_tns_item">
											<div class="tp_ins_misvisval_tns_item_title">
												<h3>Valores</h3>
											</div>
											<div class="tp_ins_misvisval_tns_item_text">
												<?php echo $tp_ins_val_text; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div class="tp_ins_misvisval_tns_nav d-flex justify-content-center mt-2">
									<?php for ($i = 0; $i < $items; $i++) : ?>
										<div class="tns_nav_item"></div>
									<?php endfor; ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 p-5 d-flex justify-content-center align-items-center">
							<?php if (have_rows('tp_ins_selos_rep')) : ?>
								<div class="tp_ins_selos_rep_tns">
									<?php while (have_rows('tp_ins_selos_rep')) :
										the_row(); ?>
										<div class="tp_ins_selos_rep_tns_item">
											<img src="<?php echo get_sub_field('tp_ins_selos_rep_item_pic')['sizes']['thumbnail'] ?>" width="150" height="150" class="px-2" ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

		<?php endif; ?>


		<!-- PREMIOS E CERTIFICAÇÕES -->

		<?php if ($tp_ins_pre_text = get_field('tp_ins_pre_text')) : ?>
			<a id="premios" class="anchor"></a>
			<section class="tp_ins_premios mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<h2>A melhor construtora e incorporadora do Paraná</h2>
							</div>
							<div class="col-12">
								<p><?php echo $tp_ins_pre_text; ?></p>
							</div>
						</div>
						<div class="col-10 offset-1 col-md-6 offset-md-0 d-flex align-items-center position-relative">
							<?php
							$tp_ins_pre_vid_thumb = get_field('tp_ins_pre_vid_thumb');
							$tp_ins_pre_vid = get_field('tp_ins_pre_vid');
							$tp_ins_pre_vid_yt = get_field('tp_ins_pre_vid_yt');
							if ($tp_ins_pre_vid_thumb && ($tp_ins_pre_vid || $tp_ins_pre_vid_yt)) :
								if ($tp_ins_pre_vid_yt) :
									$tp_ins_pre_vid = $tp_ins_pre_vid_yt;
								endif;
							?>
								<div class="tp_ins_pre_vid_btn_holder">
									<a href="<?php echo $tp_ins_pre_vid ?>" data-lity class="tp_ins_pre_vid_btn"><i class="fas fa-play"></i></a>
								</div>
								<img src="<?php echo $tp_ins_pre_vid_thumb['sizes']['800x800'] ?>" ? class="img-fluid" />
							<?php endif; ?>
						</div>
					</div>
			</section>
		<?php endif; ?>



		<!-- DIFERENCIAIS -->

		<?php if (have_rows('tp_ins_dif_rep')) : ?>
			<a id="diferenciais" class="anchor"></a>
			<section class="tp_ins_difs mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 offset-lg-1 tp_ins_dif_rep_wrapper d-flex flex-column justify-content-center align-items-center">
							<h2>Diferenciais</h2>
							<div class="d-flex justify-content-center tp_ins_dif_rep_tns_controls">
								<div class="tns_control_item"><i class="fas fa-chevron-left"></i></div>
								<div class="tns_control_item"><i class="fas fa-chevron-right"></i></div>
							</div>
						</div>
						<div class="col-12 col-lg-5 tp_ins_dif_rep_wrapper">
							<div class="tp_ins_dif_rep_tns d-flex">
								<?php while (have_rows('tp_ins_dif_rep')) :
									the_row() ?>
									<div class="tp_ins_dif_rep_tns_item d-inline-flex">
										<div class="tp_ins_dif_rep_item_icon d-flex align-items-center p-3">
											<?php echo get_sub_field('tp_ins_dif_rep_item_icon') ?>
										</div>
										<div class="d-flex flex-column">
											<div class="tp_ins_dif_rep_item_tit p-3">
												<h3><?php echo get_sub_field('tp_ins_dif_rep_item_tit') ?></h3>
											</div>
											<div class="tp_ins_dif_rep_item_text p-3">
												<?php echo get_sub_field('tp_ins_dif_rep_item_text') ?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- DEPOIMENTOS -->
		<?php if (have_rows('tp_ins_dep_rep')) : ?>
			<a id="depoimentos" class="anchor"></a>
			<section class="tp_ins_dep mt-5 py-5">
				<div class="container">
					<div class="row">
						<div class="col-12 text-end">
							<h2 class="mb-4">Surpreendente</h2>
							<?php if ($tp_ins_dep_text = get_field('tp_ins_dep_text')) : ?>
								<p> <?php echo $tp_ins_dep_text ?> </p>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-2">
							<div class="flex-row flex-md-colum justify-content-center align-items-center tp_ins_dep_rep_tns_controls">
								<div class="tns_control_item"><i class="fas fa-chevron-left"></i></div>
								<div class="tns_control_item"><i class="fas fa-chevron-right"></i></div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="tp_ins_dep_rep_tns">
								<?php while (have_rows('tp_ins_dep_rep')) :
									the_row();
									$tp_ins_dep_rep_item_vid_thumb = get_sub_field('tp_ins_dep_rep_item_vid_thumb');
									$tp_ins_dep_rep_item_vid = get_sub_field('tp_ins_dep_rep_item_vid');
									$tp_ins_dep_rep_item_vid_yt = get_sub_field('tp_ins_dep_rep_item_vid_yt');

									if ($tp_ins_dep_rep_item_vid_thumb && ($tp_ins_dep_rep_item_vid || $tp_ins_dep_rep_item_vid_yt)) :
										if ($tp_ins_dep_rep_item_vid_yt) :
											$tp_ins_dep_rep_item_vid = $tp_ins_dep_rep_item_vid_yt;
										endif;
								?>
										<div class="tp_ins_dep_rep_tns_item">
											<div class="row">
												<div class="col-6 position-relative d-flex align-items-center">
													<div class="tp_ins_pre_vid_btn_holder">
														<a href="<?php echo $tp_ins_dep_rep_item_vid; ?>" data-lity class="tp_ins_pre_vid_btn"><i class="fas fa-play"></i></a>
													</div>
													<img src="<?php echo get_sub_field('tp_ins_dep_rep_item_vid_thumb')['sizes']['800x800'] ?>" class="img-fluid" />
												</div>
												<div class="col-6 text-end d-flex flex-column justify-content-between">
													<div class="tp_ins_dep_rep_item_text mt-3">
														<?php echo get_sub_field('tp_ins_dep_rep_item_text'); ?>
													</div>
													<div class="tp_ins_dep_rep_item_name mt-3">
														<?php echo get_sub_field('tp_ins_dep_rep_item_name'); ?>
													</div>
												</div>
											</div>
										</div>
								<?php
									endif;
								endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
