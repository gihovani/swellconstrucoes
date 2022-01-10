<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package swell
 */

get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();


		// GERA CONTROLE PARA ANCORAS E SEÇÕES
		$gal_ctrl = false;
		$dif_ctrl = false;
		$bp_ctrl = false;
		$carac_sec_ctrl = false;
		$sign_ctrl = false;
		$status_ctrl = false;
		$loc_ctrl = false;

		// GALERIA
		$gal_ctrl = have_rows('pst_imv_img_gal_rep');
		// DIFERENCIAIS
		$dif_ctrl = have_rows('pst_imv_difs_rep');
		// PLANTAS
		$pst_imv_bp_rep = have_rows('pst_imv_bp_rep');
		$pst_imv_impl_rep = have_rows('pst_imv_impl_rep');
		if ($pst_imv_bp_rep || $pst_imv_impl_rep) :
			$bp_ctrl = true;
		endif;
		// CARACTERÍSTICAS SECUNDÁRIAS
		$pst_imv_carac_sec_rep = have_rows('pst_imv_carac_sec_rep');
		$pst_imv_carac_sec_title = get_field('pst_imv_carac_sec_title');
		$pst_imv_carac_sec_text = get_field('pst_imv_carac_sec_text');
		if ($pst_imv_carac_sec_rep || $pst_imv_carac_sec_title || $pst_imv_carac_sec_text) :
			$carac_sec_ctrl = true;
		endif;
		// ASSINATURAS
		$sign_ctrl = have_rows('pst_imv_sign_rep');
		// STATUS
		$pst_imv_status_geral = get_field('pst_imv_status_geral');
		$pst_imv_status_rep = have_rows('pst_imv_status_rep');
		if ($pst_imv_status_geral || $pst_imv_status_rep) :
			$status_ctrl = true;
		endif;
		// LOCALIZAÇÃO
		$pst_imv_iframe_map = get_field('pst_imv_iframe_map');
		$loc_ctrl = $pst_imv_iframe_map;
	?>

		<!-- SLIDER SUPERIOR -->
		<!-- SLIDER SUPERIOR -->
		<!-- SLIDER SUPERIOR -->



		<?php
		if (have_rows('pst_imv_slider_superior_rep')) :
		?>
			<section class="pst_imv_slider_superior_rep">
				<div class="pst_imv_slider_superior_rep_tns">
					<?php
					while (have_rows('pst_imv_slider_superior_rep')) :
						the_row();
						$rowindex = get_row_index();
					?>
						<div class="pst_imv_slider_superior_rep_item_outer position-relative">
							<?php
							$img_desk = get_sub_field('pst_imv_slider_superior_repeater_item_img_desk') ? get_sub_field('pst_imv_slider_superior_repeater_item_img_desk')['sizes']['1920x800'] : get_sub_field('pst_imv_slider_superior_repeater_item_img_desk')['sizes']['1920x800'];
							$img_mob = get_sub_field('pst_imv_slider_superior_repeater_item_img_mob') ? get_sub_field('pst_imv_slider_superior_repeater_item_img_mob')['sizes']['800x800'] : get_sub_field('pst_imv_slider_superior_repeater_item_img_desk')['sizes']['800x800'];
							?>
							<style>
								.pst_imv_slider_superior_rep_item_<?php echo $rowindex ?> {
									height: 800px;
									background: url(<?php echo $img_desk ?>) center center/cover no-repeat;
								}

								@media (max-width: 800px) {
									.pst_imv_slider_superior_rep_item_<?php echo $rowindex ?> {
										height: 100vw;
										background: url(<?php echo $img_mob ?>) center center/cover no-repeat;
									}
								}
							</style>
							<div class="pst_imv_slider_superior_rep_item_<?php echo $rowindex ?>">
							</div>
						</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="pst_imv_slider_superior_rep_nav_controls_wrapper">
					<div class="container">
						<div class="row">
							<div class="col-12 d-flex align-items-center">
								<div class="tns_control_item pst_imv_slider_superior_rep_controls_prev"><i class="fas fa-chevron-left"></i></div>
								<div class="pst_imv_slider_superior_rep_nav d-none d-md-flex flex-grow-1 justify-content-center">
									<?php
									while (have_rows('pst_imv_slider_superior_rep')) :
										the_row();
										$title = get_sub_field('pst_imv_slider_superior_repeater_item_title');
									?>
										<div class="tns_nav_item"></div>
									<?php
									endwhile;
									?>
								</div>
								<div class="tns_control_item pst_imv_slider_superior_rep_controls_next"><i class="fas fa-chevron-right"></i></div>
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



		<!-- ANCORAS PARA A PÁGINA -->
		<!-- ANCORAS PARA A PÁGINA -->
		<!-- ANCORAS PARA A PÁGINA -->


		<section class="pst_imv_anchors_section">
			<div class="container-fluid">
				<div class="row pst_imv_anchors_row">
					<div class="col-12 d-flex flex-wrap align-items-center justify-content-around">
						<a href="#geral" class="arc_imv_filter_btn selected">Visão Geral<i class="fas fa-chevron-right ms-2"></i></a>
						<?php if ($gal_ctrl) : ?>
							<a href="#galeria" class="arc_imv_filter_btn">Galeria de imagens</a>
						<?php endif; ?>
						<?php if ($dif_ctrl) : ?>
							<a href="#diferenciais" class="arc_imv_filter_btn">Diferenciais</a>
						<?php endif; ?>
						<?php if ($bp_ctrl) : ?>
							<a href="#plantas" class="arc_imv_filter_btn">Plantas / Implantação</a>
						<?php endif; ?>
						<?php if ($sign_ctrl) : ?>
							<a href="#assinaturas" class="arc_imv_filter_btn">Designers</a>
						<?php endif; ?>
						<?php if ($status_ctrl) : ?>
							<a href="#status" class="arc_imv_filter_btn">Status da Obra</a>
						<?php endif; ?>
						<?php if ($loc_ctrl) : ?>
							<a href="#localizacao" class="arc_imv_filter_btn">Localização</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>


		<!-- FIM ANCORAS PARA A PÁGINA -->
		<!-- FIM ANCORAS PARA A PÁGINA -->
		<!-- FIM ANCORAS PARA A PÁGINA -->



		<!-- CARACTERÍSTICAS GERAIS -->
		<!-- CARACTERÍSTICAS GERAIS -->
		<!-- CARACTERÍSTICAS GERAIS -->


		<a id="geral" class="anchor"></a>
		<section class="pst_imv_carac_pri mt-5">
			<div class="container">
				<!-- ROW TEXTO DESTAQUE -->
				<?php if ($pst_imv_carac_pri_text_dstq = get_field('pst_imv_carac_pri_text_dstq')) : ?>
					<div class="row mb-5">
						<div class="col-12">
							<div class="pst_imv_carac_pri_text_dstq"><?php echo $pst_imv_carac_pri_text_dstq ?></div>
						</div>
					</div>
				<?php endif; ?>
				<!-- ROW INFOS / DOWNLOAD E-BOOK -->
				<div class="row position-relative">
					<div class="col-12 col-md-6">
						<div class="row my-6 pst_imv_carac_pri_row">
							<div class="col-12 d-flex justify-content-between align-items-center">
								<?php
								$term_obj_list = get_the_terms($post->ID, 'regiao');
								$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); ?>
								<span class="button"><?php echo $terms_string ?></span>
								<div>[SHARE ITEMS]</div>
							</div>
						</div>
						<div class="row my-6 pst_imv_carac_pri_row">
							<div class="col-12">
								<?php
								$term_obj_list = get_the_terms($post->ID, 'status');
								$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); ?>
								<?php echo $terms_string ?>
							</div>
						</div>
						<div class="row my-6 pst_imv_carac_pri_row">
							<div class="col-12 d-flex justify-content-around flex-wrap">
								<?php if (have_rows('pst_imv_carac_pri_rep')) : ?>
									<?php
									while (have_rows('pst_imv_carac_pri_rep')) :
										the_row();
									?>
										<div class="pst_imv_carac_pri_rep_item">
											<?php echo get_sub_field('pst_imv_carac_pri_rep_item_icon') ?>
											<span class="ms-1"><?php echo get_sub_field('pst_imv_carac_pri_rep_item_text') ?></span>
										</div>
								<?php
									endwhile;
								endif;
								?>
							</div>
						</div>
						<?php if ($pst_imv_carac_pri_text_prz_ent = get_field('pst_imv_carac_pri_text_prz_ent')) : ?>
							<div class="row my-6 pst_imv_carac_pri_row">
								<div class="col-12">
									<div class="pst_imv_carac_pri_text_prz_ent">
										<?php echo $pst_imv_carac_pri_text_prz_ent ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-6 d-flex justify-content-center">
						<div class="position-relative" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>) center center/cover">
							<div class="pst_imv_ebook_download_mask"></div>
							<div class="pst_imv_ebook_download_wrapper d-flex flex-column justify-content-around align-items-center">
								<div class="pst_imv_ebook_download_title">CONHEÇA A FUNDO O EMPREENDIMENTO</div>
								<div class="pst_imv_ebook_download_text">Faça o download do <span>e-book completo</span> sobre o imóvel</div>
								<div class="pst_imv_ebook_download_btn"><button class="button">Download <i class="fas fa-chevron-right"></i></button></div>
							</div>
						</div>
					</div>
					<div class="pst_imv_form_ebook_wrapper">
						<div class="row">
							<div class="col-12 col-md-6 order-2 order-md-1 mt-5 mt-md-0">
								<?php echo do_shortcode('[contact-form-7 id="415" title="Imoveis eBook"]'); ?>
							</div>
							<div class="col-12 col-md-6 order-1 order-md-2 mt-5 mt-md-0 d-flex justify-content-center">
								<div class="position-relative" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>) center center/cover">
									<div class="pst_imv_ebook_download_mask"></div>
									<div class="pst_imv_ebook_download_wrapper d-flex flex-column justify-content-around align-items-center">
										<div class="pst_imv_ebook_download_title">CONHEÇA A FUNDO O EMPREENDIMENTO</div>
										<div class="pst_imv_ebook_download_text">Faça o download do <span>e-book completo</span> sobre o imóvel</div>
									</div>
								</div>
							</div>
						</div>
						<div class="close_btn"><i class="fas fa-times"></i></div>
					</div>
				</div>
				<?php
				$pst_imv_vid1_vid_thumb_url = get_field('pst_imv_vid1_vid_thumb') ? get_field('pst_imv_vid1_vid_thumb')['sizes']['800x800'] : get_the_post_thumbnail_url(get_the_ID(), '800x800');
				$pst_imv_vid1_vid = get_field('pst_imv_vid1_vid');
				$pst_imv_vid1_vid_yt = get_field('pst_imv_vid1_vid_yt');
				if ($pst_imv_vid1_vid_thumb_url && ($pst_imv_vid1_vid || $pst_imv_vid1_vid_yt)) :
					if ($pst_imv_vid1_vid_yt) :
						$pst_imv_vid1_vid = $pst_imv_vid1_vid_yt;
					endif;
				?>
					<!-- ROW VÍDEO 1 -->
					<div class="row mt-5">
						<div class="col-10 offset-1">
							<div class="pst_imv_vid1_vid_thumb d-flex justify-content-center align-items-center" style="background: url(<?php echo $pst_imv_vid1_vid_thumb_url ?>) center center/cover">
								<a class="play_btn" href="<?php echo $pst_imv_vid1_vid ?>" data-lity><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if (!empty(get_the_content())) : ?>

					<!-- ROW CONTENT -->
					<div class="row mt-5">
						<div class="col-12">
							<?php the_content() ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>



		<!-- FIM CARACTERÍSTICAS GERAIS -->
		<!-- FIM CARACTERÍSTICAS GERAIS -->
		<!-- FIM CARACTERÍSTICAS GERAIS -->



		<!-- GALERIA DE IMAGENS -->
		<!-- GALERIA DE IMAGENS -->
		<!-- GALERIA DE IMAGENS -->

		<?php if ($gal_ctrl) : ?>
			<a id="galeria" class="anchor"></a>
			<section class="pst_imv_gal_img_section mt-5 py-5">
				<div class="container">
					<div class="row">
						<div class="col-12 d-block d-md-none">
							<h2>Galeria de Imagens</h2>
							<p>Navegue pelas imagens para conhecer cada estrutura do imóvel.</p>
						</div>
						<div class="col-5">
							<h2 class="d-none d-md-block">Galeria de Imagens</h2>
							<p class="d-none d-md-block">Navegue pelas imagens para conhecer cada estrutura do imóvel.</p>
							<div class="pst_imv_img_gal_rep_tns_nav">
								<?php while (have_rows('pst_imv_img_gal_rep')) :
									the_row() ?>
									<div class="pst_imv_img_gal_rep_tns_nav_item pe-0 pe-md-5">
										<?php echo get_sub_field('pst_imv_img_gal_rep_item_title') ?>&nbsp;<i class="fas fa-chevron-right"></i>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
						<div class="col-7 position-relative d-flex align-items-center">
							<div class="pst_imv_gal_separator_icon d-none d-md-flex"><i class="fas fa-chevron-right"></i></div>
							<div class="pst_imv_img_gal_rep_tns">
								<?php while (have_rows('pst_imv_img_gal_rep')) :
									the_row();
									$galeria_img_full_url = get_sub_field('pst_imv_img_gal_rep_item_pic') ? get_sub_field('pst_imv_img_gal_rep_item_pic')['url'] : get_sub_field('pst_imv_img_gal_rep_item_pic')['url'];
									$galeria_img_thumb_url = get_sub_field('pst_imv_img_gal_rep_item_thumbnail') ? get_sub_field('pst_imv_img_gal_rep_item_thumbnail')['sizes']['800x800'] : get_sub_field('pst_imv_img_gal_rep_item_pic')['sizes']['800x800'];
								?>
									<a href="<?php echo $galeria_img_full_url ?>" class="d-block" data-lity>
										<img src="<?php echo $galeria_img_thumb_url ?>" class="img-fluid" />
									</a>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>



		<!-- FIM GALERIA DE IMAGENS -->
		<!-- FIM GALERIA DE IMAGENS -->
		<!-- FIM GALERIA DE IMAGENS -->




		<!-- DIFERENCIAIS -->
		<!-- DIFERENCIAIS -->
		<!-- DIFERENCIAIS -->


		<?php if ($dif_ctrl) : ?>

			<a id="diferenciais" class="anchor"></a>
			<section class="pst_imv_difs_section py-5">
				<div class="container">
					<div class="col-12 d-block d-md-none">
						<h2>Diferenciais</h2>
						<p>Saiba o que faz nossos imóveis diferentes.</p>
					</div>
					<div class="row">
						<div class="col-7 d-flex justify-content-center align-items-center">
							<img src="<?php echo get_field('pst_imv_difs_img')['sizes']['800x800'] ?>" class="img-fluid" />
						</div>
						<div class="col-5 position-relative">
							<div class="pst_imv_difs_separator_icon d-none d-md-flex"><i class="fas fa-chevron-left"></i></div>
							<h2 class="d-none d-md-block text-end">Diferenciais</h2>
							<p class="d-none d-md-block text-end">Saiba o que faz nossos imóveis diferentes.</p>
							<div class="pst_imv_difs_rep">
								<?php while (have_rows('pst_imv_difs_rep')) :
									the_row() ?>
									<div class="pst_imv_difs_rep_item ps-0 ps-md-5">
										<i class="fas fa-chevron-left">&nbsp;</i><span class="text-end"><?php echo get_sub_field('pst_imv_difs_rep_item_text') ?><span>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>



		<!-- FIM DIFERENCIAIS -->
		<!-- FIM DIFERENCIAIS -->
		<!-- FIM DIFERENCIAIS -->




		<!-- PLANTAS -->
		<!-- PLANTAS -->
		<!-- PLANTAS -->


		<?php if ($bp_ctrl) : ?>

			<a id="plantas" class="anchor"></a>
			<section class="pst_imv_bp_section py-5">
				<div class="container">
					<!-- ROW BP -->
					<?php if ($pst_imv_bp_rep) : ?>
						<div class="row pst_imv_bp_row">
							<div class="col-12 d-block d-md-none">
								<h2>Plantas</h2>
								<p>Navegue pelas imagens para<br />
									conhecer cada planta do imóvel.</p>
							</div>
							<div class="col-7 d-flex justify-content-center align-items-center">
								<div class="pst_imv_bp_rep_tns">
									<?php while (have_rows('pst_imv_bp_rep')) :
										the_row();
										$bp_img_full_url = get_sub_field('pst_imv_bp_rep_item_pic') ? get_sub_field('pst_imv_bp_rep_item_pic')['url'] : get_sub_field('pst_imv_bp_rep_item_pic')['url'];
										$bp_img_thumb_url = get_sub_field('pst_imv_bp_rep_item_thumbnail') ? get_sub_field('pst_imv_bp_rep_item_thumbnail')['sizes']['800x800'] : get_sub_field('pst_imv_bp_rep_item_pic')['url'];
									?>t
									<a href="<?php echo $bp_img_full_url ?>" data-lity>
										<img src="<?php echo $bp_img_thumb_url ?>" class="img-fluid"/>
									</a>
								<?php endwhile; ?>
								</div>
							</div>
							<div class="col-5 d-flex flex-column position-relative">
								<div class="pst_imv_bp_separator_icon d-none d-md-flex"><i class="fas fa-chevron-left"></i></div>
								<h2 class="d-none d-md-block text-end">Plantas</h2>
								<p class="d-none d-md-block text-end">Navegue pelas imagens para<br />
									conhecer cada planta do imóvel.</p>
								<div class="pst_imv_bp_rep_tns_nav">
									<?php while (have_rows('pst_imv_bp_rep')) :
										the_row() ?>
										<div class="pst_imv_bp_rep_tns_nav_item ps-0 ps-md-5">
											<i class="fas fa-chevron-left">&nbsp;</i><span class="text-end"><?php echo get_sub_field('pst_imv_bp_rep_item_title') ?></span>
										</div>
									<?php endwhile; ?>
								</div>
								<?php if ($pst_imv_bp_rep && $pst_imv_impl_rep) : ?>
									<div class="justify-content-around mt-auto d-none d-md-flex pt-3">
										<div class="button pst_imv_btn_bp">PLANTAS</div>
										<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
									</div>
								<?php endif; ?>
							</div>
							<?php if ($pst_imv_bp_rep && $pst_imv_impl_rep) : ?>
								<div class="col-12 justify-content-around d-block d-md-none pt-3">
									<div class="button pst_imv_btn_bp">PLANTAS</div>
									<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<!-- ROW IMP DESABILITADO - NÃO USAR ESSE -->
					<!-- <div class="row pst_imv_imp_row d-none">
						<div class="col-12 d-block d-md-none">
							<h2>Implantação</h2>
							<p>Veja detalhes da <br />
								implantação do imóvel.</p>
						</div>
						<div class="col-7 d-flex justify-content-center align-items-center">
							<div class="pst_imv_imp_rep_tns">
								<?php while (have_rows('pst_imv_imp_rep')) :
									the_row() ?>
									<a href="<?php echo get_sub_field('pst_imv_imp_rep_item_pic')['url'] ?>" data-lity>
										<img src="<?php echo get_sub_field('pst_imv_imp_rep_item_thumbnail')['sizes']['800x800'] ?>" />
									</a>
								<?php endwhile; ?>
							</div>
						</div>
						<div class="col-5 d-flex flex-column position-relative">
							<div class="pst_imv_imp_separator_icon d-none d-md-flex"><i class="fas fa-chevron-left"></i></div>
							<h2 class="d-none d-md-block text-end">Implantação</h2>
							<p class="d-none d-md-block text-end">Veja detalhes da <br />
								implantação do imóvel.</p>
							<div class="pst_imv_imp_rep_tns_nav">
								<?php while (have_rows('pst_imv_imp_rep')) :
									the_row() ?>
									<div class="pst_imv_imp_rep_tns_nav_item ps-0 ps-md-5">
										<i class="fas fa-chevron-left">&nbsp;</i><span class="text-end"><?php echo get_sub_field('pst_imv_imp_rep_item_title') ?></span>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="justify-content-around mt-auto d-none d-md-flex">
								<div class="button pst_imv_btn_bp">PLANTAS</div>
								<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
							</div>
						</div>
						<div class="col-12 justify-content-around d-block d-md-none">
							<div class="button pst_imv_btn_bp">PLANTAS</div>
							<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
						</div>
					</div> -->

					<!-- ROW IMP -->
					<?php if ($pst_imv_impl_rep) : ?>
						<div class="row pst_imv_imp_row <?php if ($pst_imv_bp_rep){ echo "d-none";}?>">
							<div class="col-12 d-block d-md-none">
								<h2>Implantação</h2>
								<p>Veja detalhes da <br />
									implantação do imóvel.</p>
							</div>
							<div class="col-7 d-flex justify-content-center align-items-center">
								<img src="<?php echo get_field('pst_imv_impl_img')['sizes']['800x800'] ?>" class="img-fluid"/>
							</div>
							<div class="col-5 d-flex flex-column position-relative">
								<div class="pst_imv_imp_separator_icon d-none d-md-flex"><i class="fas fa-chevron-left"></i></div>
								<h2 class="d-none d-md-block text-end">Implantação</h2>
								<p class="d-none d-md-block text-end">Veja detalhes da <br />
									implantação do imóvel.</p>
								<div class="pst_imv_impl_rep">
									<?php while (have_rows('pst_imv_impl_rep')) :
										the_row() ?>
										<div class="pst_imv_impl_rep_item ps-0 ps-md-5">
											<i class="fas fa-chevron-left">&nbsp;</i><span class="text-end"><?php echo get_sub_field('pst_imv_impl_rep_item_text') ?><span>
										</div>
									<?php endwhile; ?>
								</div>
								<?php if ($pst_imv_bp_rep && $pst_imv_impl_rep) : ?>
									<div class="justify-content-around mt-auto d-none d-md-flex pt-3">
										<div class="button pst_imv_btn_bp">PLANTAS</div>
										<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
									</div>
								<?php endif; ?>
							</div>
							<?php if ($pst_imv_bp_rep && $pst_imv_impl_rep) : ?>
								<div class="col-12 justify-content-around d-block d-md-none pt-3">
									<div class="button pst_imv_btn_bp">PLANTAS</div>
									<div class="button selected pst_imv_btn_imp">IMPLANTAÇÃO</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
			</section>
		<?php endif; ?>



		<!-- FIM PLANTAS -->
		<!-- FIM PLANTAS -->
		<!-- FIM PLANTAS -->



		<!-- CARACTERISTICAS SECUNDARIAS -->
		<!-- CARACTERISTICAS SECUNDARIAS -->
		<!-- CARACTERISTICAS SECUNDARIAS -->



		<?php if ($carac_sec_ctrl) : ?>

			<a id="caracteristicas" class="anchor"></a>
			<section class="pst_imv_carac_sec mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
							<?php if ($pst_imv_carac_sec_title) : ?>
								<h3><?php echo $pst_imv_carac_sec_title ?></h3>
							<?php endif; ?>
							<?php if ($pst_imv_carac_sec_text) : ?>
								<p><?php echo $pst_imv_carac_sec_text ?></p>
							<?php endif; ?>
						</div>
						<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
							<?php if ($pst_imv_carac_sec_rep) : ?>
								<div class="pst_imv_carac_sec_rep">
									<?php while (have_rows('pst_imv_carac_sec_rep')) :
										the_row() ?>
										<?php if ($pst_imv_carac_sec_rep_item_title = get_sub_field('pst_imv_carac_sec_rep_item_title')) : ?>
											<div class="pst_imv_carac_sec_rep_item_title text-end py-2">
												<h4><?php echo $pst_imv_carac_sec_rep_item_title ?></h4>
											</div>
										<?php endif ?>
										<?php if ($pst_imv_carac_sec_rep_item_text = get_sub_field('pst_imv_carac_sec_rep_item_text')) : ?>
											<div class="pst_imv_carac_sec_rep_item_text text-end py-2">
												<p><?php echo $pst_imv_carac_sec_rep_item_text ?></p>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>



		<!-- FIM CARACTERISTICAS SECUNDARIAS -->
		<!-- FIM CARACTERISTICAS SECUNDARIAS -->
		<!-- FIM CARACTERISTICAS SECUNDARIAS -->



		<!-- ASSINATURAS -->
		<!-- ASSINATURAS -->
		<!-- ASSINATURAS -->


		<?php if ($sign_ctrl) : ?>

			<a id="assinaturas" class="anchor"></a>
			<section class="pst_imv_sign mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
							<h2>Designers</h2>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-12 d-flex align-items-center">
							<div class="tns_control_item pst_imv_sign_rep_tns_controls_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="pst_imv_sign_rep_tns_outer flex-grow-1">
								<div class="pst_imv_sign_rep_tns">
									<?php while (have_rows('pst_imv_sign_rep')) :
										the_row(); ?>
										<div class="pst_imv_sign_rep_tns_item_outer">
											<div class="pst_imv_sign_rep_tns_item d-flex flex-column align-items-center">
												<img src="<?php echo get_sub_field('pst_imv_sign_rep_item_pic')['sizes']['medium'] ?>" class="img-fluid" />
												<h4 class="pst_imv_sign_rep_item_title"><?php echo get_sub_field('pst_imv_sign_rep_item_title') ?></h4>
												<p class="pst_imv_sign_rep_item_text"><?php echo get_sub_field('pst_imv_sign_rep_item_text') ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
							<div class="tns_control_item pst_imv_sign_rep_tns_controls_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>


		<!-- FIM ASSINATURAS -->
		<!-- FIM ASSINATURAS -->
		<!-- FIM ASSINATURAS -->



		<!-- STATUS OBRA -->
		<!-- STATUS OBRA -->
		<!-- STATUS OBRA -->



		<?php if ($status_ctrl) : ?>

			<a id="status" class="anchor"></a>
			<section class="pst_imv_status mt-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
							<h2 class="mb-3 text-center">Status da <br />obra</h2>
							<?php if ($pst_imv_status_geral) :
								$class = "p" . $pst_imv_status_geral;
								if ($pst_imv_status_geral > 50) :
									$class .= " over50";
								endif;
							?>
								<div class="progress-circle <?php echo $class ?>">
									<span><?php echo $pst_imv_status_geral . " %"; ?></span>
									<div class="left-half-clipper">
										<div class="first50-bar"></div>
										<div class="value-bar"></div>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
							<?php if ($pst_imv_status_rep) :
								while (have_rows('pst_imv_status_rep')) :
									the_row();
							?>
									<div class="row">
										<div class="col-3 d-flex align-items-center">
											<?php if ($pst_imv_status_rep_text = get_sub_field('pst_imv_status_rep_text')) : ?>
												<?php echo $pst_imv_status_rep_text; ?>
											<?php endif; ?>
										</div>
										<div class="col-7 d-flex align-items-center">
											<div class="progress-bar">
												<?php
												$p = get_sub_field('pst_imv_status_rep_item_value');
												?>
												<div class="progress-done" style="width: <?php echo $p ?>"></div>
											</div>
										</div>
										<div class="col-2 d-flex align-items-center">
											<?php echo $p ?> %
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<?php
					$pst_imv_vid2_vid_thumb_url = get_field('pst_imv_vid2_vid_thumb') ? get_field('pst_imv_vid2_vid_thumb')['sizes']['800x800'] : get_the_post_thumbnail_url(get_the_ID(), '800x800');
					$pst_imv_vid2_vid = get_field('pst_imv_vid2_vid');
					$pst_imv_vid2_vid_yt = get_field('pst_imv_vid2_vid_yt');
					if ($pst_imv_vid2_vid_thumb_url && ($pst_imv_vid2_vid || $pst_imv_vid2_vid_yt)) :
						if ($pst_imv_vid2_vid_yt) :
							$pst_imv_vid2_vid = $pst_imv_vid2_vid_yt;
						endif;

					?>
						<!-- ROW VÍDEO 2 -->
						<div class="row mt-5">
							<div class="col-10 offset-1">
								<div class="pst_imv_vid2_vid_thumb d-flex justify-content-center align-items-center" style="background: url(<?php echo $pst_imv_vid2_vid_thumb_url ?>) center center/cover">
									<a class="play_btn" href="<?php echo $pst_imv_vid2_vid ?>" data-lity><i class="fas fa-play"></i></a>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</section>

		<?php endif; ?>



		<!-- FIM STATUS OBRA -->
		<!-- FIM STATUS OBRA -->
		<!-- FIM STATUS OBRA -->



		<!-- FORM INVESTIMENTO -->
		<!-- FORM INVESTIMENTO -->
		<!-- FORM INVESTIMENTO -->



		<a id="investimento" class="anchor"></a>
		<section class="pst_imv_form_investimento_section mt-5 py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
						<h2>Investimento</h2>
						<p>Confira a tabela de preços Swell.</p>
					</div>
					<div class="col-12 col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="314" title="Imoveis Investimento"]'); ?>
					</div>
				</div>
			</div>
		</section>



		<!-- FIM FORM INVESTIMENTO -->
		<!-- FIM FORM INVESTIMENTO -->
		<!-- FIM FORM INVESTIMENTO -->



		<!-- LOCALIZAÇÃO -->
		<!-- LOCALIZAÇÃO -->
		<!-- LOCALIZAÇÃO -->


		<?php if ($loc_ctrl) : ?>

			<a id="localizacao" class="anchor"></a>
			<section class="pst_imv_loc mt-5 position-relative">
				<?php echo $pst_imv_iframe_map ?>
				<div class="pst_imv_loc_wrapper">
					<?php get_field('pst_imv_loc_text') ? the_field('pst_imv_loc_text') : ""; ?>
					<?php if ($pst_imv_loc_gmaps_link = get_field('pst_imv_loc_gmaps_link')) : ?>
						<a href="<?php echo $pst_imv_loc_gmaps_link ?>" target="-BLANK" class="button ms-5">LOCALIZAÇÃO</a>
					<?php else : ?>
						<span href="<?php echo $pst_imv_loc_gmaps_link ?>" class="button ms-5">LOCALIZAÇÃO</span>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>


		<!-- FIM LOCALIZAÇÃO -->
		<!-- FIM LOCALIZAÇÃO -->
		<!-- FIM LOCALIZAÇÃO -->


		<!-- FORM GOSTOU DESSE EMPREENDIMENTO -->
		<!-- FORM GOSTOU DESSE EMPREENDIMENTO -->
		<!-- FORM GOSTOU DESSE EMPREENDIMENTO -->



		<section class="pst_imv_form_gostou_section mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
						<h2>Gostou desse empreendimento ?</h2>
						<p>Fale agora com um de nossos corretores especializados Swell.</p>
					</div>
					<div class="col-12 col-lg-6">
						<?php echo do_shortcode('[contact-form-7 id="409" title="Imoveis Gostou desse Empreendimento"]'); ?>
					</div>
				</div>
			</div>
		</section>



		<!-- FIM FORM GOSTOU DESSE EMPREENDIMENTO -->
		<!-- FIM FORM GOSTOU DESSE EMPREENDIMENTO -->
		<!-- FIM FORM GOSTOU DESSE EMPREENDIMENTO -->



		<!-- BLOG RELATED -->
		<!-- BLOG RELATED -->
		<!-- BLOG RELATED -->



		<?php

		$query_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => 'DESC',
			'orderby' => 'date',
			'posts_per_page' => '4',
			// 'meta_query' => array(
			// 	array(
			// 		'key'     => 'sgl_pst_imv_related',
			// 		'value'   => get_the_ID(),
			// 		'compare' => 'LIKE',
			// 	),
			// ),
		);


		// The Query
		$the_query = new WP_Query($query_args);

		// The Loop
		if ($the_query->have_posts() && $the_query->found_posts >= 4) :

		?>
			<section class="pst_imv_blog mt-5">
				<div class="container py-5">
					<div class="col-12 d-flex justify-content-center">
						<h2>Veja mais sobre <?php echo get_the_title() ?></h2>
					</div>
				</div>
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


		<!-- FIM BLOG RELATED -->
		<!-- FIM BLOG RELATED -->
		<!-- FIM BLOG RELATED -->


		<!-- IMOBILIÁRIA PARCEIRA -->
		<!-- IMOBILIÁRIA PARCEIRA -->
		<!-- IMOBILIÁRIA PARCEIRA -->

		<section class="pst_imv_imob_prc mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="pst_imv_imob_prc_wrapper d-flex justify-content-between align-items-center">
							<h3>SEJA UMA IMOBILIÁRIA PARCEIRA Swell.</h3><a href="/swell/fale-conosco/" class="button">Saiba Mais<i class="fas fa-chevron-right ms-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- FIM IMOBILIÁRIA PARCEIRA -->
		<!-- FIM IMOBILIÁRIA PARCEIRA -->
		<!-- FIM IMOBILIÁRIA PARCEIRA -->


		<?
		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) : ?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php comments_template(); ?>
					</div>
				</div>
			</div>
	<?php
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
