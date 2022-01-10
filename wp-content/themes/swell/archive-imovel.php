<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swell
 */


$regiaoparam = (isset($_GET['regiao'])) ? sanitize_text_field($_GET['regiao']) : '';
$statusparam = (isset($_GET['status'])) ? sanitize_text_field($_GET['status']) : '';

get_header();
?>

<!-- <pre>
					<?php //var_dump($wp_query) 
					?>
	</pre> -->

<main id="primary" class="site-main">


	<!-- BANNER SUPERIOR -->
	<!-- BANNER SUPERIOR -->
	<!-- BANNER SUPERIOR -->



	<section class="bg_sup_section d-flex flex-column justify-content-end" <?php if ($arc_imv_bg_sup_pic = get_field('arc_imv_bg_sup_pic', 'options')['sizes']['1920x320']) : ?> style="background: url(<?php echo $arc_imv_bg_sup_pic; ?>)center center/cover no-repeat" <?php endif; ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- <h1><?php the_archive_title() ?></h1> -->
					<h2 style="color:white">Swell Construções: apartamentos de alto padrão à venda em Curitiba</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="arc_imv_regiao_tax_tns">
						<div>
							<?php
							$classe = '';
							if ($regiaoparam == '') :
								$classe = "selected";
							endif;
							?>
							<a href="<?php echo get_post_type_archive_link('imovel') . "?regiao=&status=" . $statusparam ?>" class="arc_imv_filter_btn <?php echo $classe ?>">Todas as Regiões</a>
						</div>
						<?php
						$regiaoTerms = get_terms(array(
							'taxonomy' => 'regiao',
							'hide_empty' => false,
						));
						if ($regiaoTerms) :
							foreach ($regiaoTerms as $term) :
								$classe = '';
								if ($regiaoparam == $term->slug) :
									$classe = "selected";
								endif;
						?>

								<div>
									<a href="<?php echo get_post_type_archive_link('imovel') . "?regiao=" . $term->slug . "&status=" . $statusparam ?>" class="arc_imv_filter_btn <?php echo $classe ?>"><?php echo $term->name ?></a>
								</div>
						<?
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-auto d-flex align-items-end">
					<div class="tns_control_item arc_imv_regiao_tax_tns_prev"><i class="fas fa-chevron-left"></i></div>
				</div>
				<div class="col-auto d-flex align-items-end">
					<div class="tns_control_item arc_imv_regiao_tax_tns_next"><i class="fas fa-chevron-right"></i></div>
				</div>
			</div>
		</div>
	</section>



	<!-- FIM BANNER SUPERIOR -->
	<!-- FIM BANNER SUPERIOR -->
	<!-- FIM BANNER SUPERIOR -->



	<!-- FAIXA FILTRO STATUS -->
	<!-- FAIXA FILTRO STATUS -->
	<!-- FAIXA FILTRO STATUS -->



	<section class="arc_imv_status_tax_filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="arc_imv_status_tax_tns">
						<?php
						$classe = '';
						if ($statusparam == '') :
							$classe = "selected";
						endif;
						?>
						<div>
							<a href="<?php echo get_post_type_archive_link('imovel') . "?regiao=" . $regiaoparam . "&status=" ?>" class="arc_imv_filter_btn <?php echo $classe; ?>">Todas os Status</a>
						</div>
						<?php
						$statusTerms = get_terms(array(
							'taxonomy' => 'status',
							'hide_empty' => false,
						));
						if ($statusTerms) :
							foreach ($statusTerms as $term) :
								$classe = '';
								if ($statusparam == $term->slug) :
									$classe = "selected";
								endif;
						?>
								<div>
									<a href="<?php echo get_post_type_archive_link('imovel') . "?regiao=" . $regiaoparam . "&status=" . $term->slug ?>" class="arc_imv_filter_btn <?php echo $classe ?>"><?php echo $term->name ?></a>
								</div>
						<?
							endforeach;
						endif;
						?>

					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-auto d-flex align-items-end">
					<div class="tns_control_item arc_imv_status_tax_tns_prev"><i class="fas fa-chevron-left"></i></div>
				</div>
				<div class="col-auto d-flex align-items-end">
					<div class="tns_control_item arc_imv_status_tax_tns_next"><i class="fas fa-chevron-right"></i></div>
				</div>
			</div>
		</div>
	</section>



	<!-- FIM FAIXA FILTRO STATUS -->
	<!-- FIM FAIXA FILTRO STATUS -->
	<!-- FIM FAIXA FILTRO STATUS -->



	<?php if (have_posts()) : ?>

		<!-- IMÓVEIS LIST -->
		<!-- IMÓVEIS LIST -->
		<!-- IMÓVEIS LIST -->



		<section class="arc_imv_imoveis_list mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex flex-wrap justify-content-around">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();
						?>
							<?php get_template_part('template-parts/content', 'block-imovel-model-1'); ?>
						<?php
						endwhile;
						?>
					</div>
				</div>
			</div>
		</section>



		<!-- FIM IMÓVEIS LIST -->
		<!-- FIM IMÓVEIS LIST -->
		<!-- FIM IMÓVEIS LIST -->




		<!-- THE POSTS NAVIGATION -->
		<!-- THE POSTS NAVIGATION -->
		<!-- THE POSTS NAVIGATION -->



		<section class="tp_std_pagination_links mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<?php
						$paginationArgs = array(
							'prev_text' => '<i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i>',
							'next_text' => '<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>'
						);
						echo paginate_links($paginationArgs); ?>
					</div>
				</div>
			</div>
		</section>



		<!-- FIM THE POSTS NAVIGATION -->
		<!-- FIM THE POSTS NAVIGATION -->
		<!-- FIM THE POSTS NAVIGATION -->
	<?php

	else : ?>
		<section class="arc_imv_not_found mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3>Nenhum imóvel encontrado.</h3>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>



	<!-- SLIDER ENTREGUES -->
	<!-- SLIDER ENTREGUES -->
	<!-- SLIDER ENTREGUES -->



	<?php get_template_part('template-parts/content', 'block-slider-entregues'); ?>



	<!-- FIM SLIDER ENTREGUES -->
	<!-- FIM SLIDER ENTREGUES -->
	<!-- FIM SLIDER ENTREGUES -->



	<!-- CONHEÇA A SWELL -->
	<!-- CONHEÇA A SWELL -->
	<!-- CONHEÇA A SWELL -->


	<section class="arc_imv_inst_cta mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Conheça a SWELL.</h2>
				</div>
				<div class="col-12">
				<p>Qualidade, confiança, inovação, design e sustentabilidade.<br />
					Esses são os valores da Swell Construções, referência na incorporação e vendas de <strong>apartamentos de alto padrão e luxo em Curitiba.</strong></p>
					<?php
					$urlPageInstitucional = "";
					if ($idPageInstitucional = get_pages_by_template('template-institucional.php')) :
						$urlPageInstitucional = get_the_permalink($idPageInstitucional);
					endif;
					?>
					<a href="<?php echo $urlPageInstitucional ?>">Saiba mais <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</section>



	<!-- FIM CONHEÇA A SWELL -->
	<!-- FIM CONHEÇA A SWELL -->
	<!-- FIM CONHEÇA A SWELL -->

</main><!-- #main -->

<?php
get_footer();
