<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<div class="offcanvas offcanvas-start offcanvas-menu-primary" tabindex="-1" id="offCanvasMenu">
		<div style="position:fixed; top: 0">
			<div class="offcanvas-header">
				<h5>MENU</h5>
				<button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<?php
				$args_menu_1 = array(
					'menu' => 'Primary',
					'container' => false,
				);
				wp_nav_menu($args_menu_1);
				?>
			</div>
		</div>
	</div>

	<div id="page" class="site">

		<header id="masthead" class="site-header transparent">
			<div class="container">
				<div class="row site-header-row transparent">
					<div class="col-12 d-flex align-items-center justify-content-between">
						<div class="custom_logo_wrapper">
							<?php the_custom_logo(); ?>
						</div>
						<?php
						$args_menu_2 = array(
							'menu' => 'Lateral Topo',
							'container' => false,
							'menu_class' => 'd-none d-md-flex',
						);
						wp_nav_menu($args_menu_2);
						?>
						<a href="#offCanvasMenu" data-bs-toggle="offcanvas">
							<div class="menu_toggler"></div>
						</a>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->