<?php

/**
 * swell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swell
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('swell_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function swell_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on swell, use a find and replace
		 * to change 'swell' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('swell', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'swell'),
				'menu-2' => esc_html__('Lateral Topo', 'swell'),
				'menu-3' => esc_html__('Footer', 'swell'),
				'menu-4' => esc_html__('Footer Redes Sociais', 'swell'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'swell_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'swell_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function swell_content_width()
{
	$GLOBALS['content_width'] = apply_filters('swell_content_width', 640);
}
add_action('after_setup_theme', 'swell_content_width', 0);

// WIDGETS DESATIVADOS
// WIDGETS DESATIVADOS
// WIDGETS DESATIVADOS

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function swell_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'swell' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'swell' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'swell_widgets_init' );

// FIM WIDGETS DESATIVADOS
// FIM WIDGETS DESATIVADOS
// FIM WIDGETS DESATIVADOS

/**
 * Enqueue scripts and styles.
 */
function swell_scripts()
{
	wp_enqueue_style('swell-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('swell-style', 'rtl', 'replace');

	wp_enqueue_script('swell-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_style('css-font-awesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css?ver=5.7.2');

	// wp_enqueue_style('css-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap', false);

	wp_enqueue_style('css-bootstrap-5.1.1', get_template_directory_uri() . '/inc/bootstrap-5.1.1-dist/css/bootstrap.min.css');
	wp_enqueue_script('js-bootstrap-5.1.1', get_template_directory_uri() . '/inc/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js', array('jquery'));

	wp_enqueue_style('css-tinyslider', get_template_directory_uri() . '/inc/tinyslider-dist/tiny-slider.css');
	wp_enqueue_script('js-tinyslider', get_template_directory_uri() . '/inc/tinyslider-dist/min/tiny-slider.js');

	wp_enqueue_style('css-lity', get_template_directory_uri() . '/inc/lity-2.4.1/dist/lity.css');
	wp_enqueue_script('js-lity', get_template_directory_uri() . '/inc/lity-2.4.1/dist/lity.min.js', 'jquery');

	wp_enqueue_script('js-imagesloaded', get_template_directory_uri() . '/inc/imagesloaded.pkgd.min.js', 'js-bootstrap');

	wp_enqueue_style('css-initial', get_template_directory_uri() . '/initial.css');
	wp_enqueue_script('js-custom', get_template_directory_uri() . '/custom.js', array('jquery', 'js-tinyslider'));

	// CARREGA OS SCRIPTS JS PARA OS RESPECTIVOS TEMPLATES
	// SE ACADEMIA
	if (is_page_template('template-home.php')) :
		wp_enqueue_script('js-template-home', get_template_directory_uri() . '/js/custom-template-home.js', array('jquery', 'js-tinyslider'));
	// SE AGENDA
	elseif (is_page_template('template-institucional.php')) :
		wp_enqueue_script('js-template-institucional', get_template_directory_uri() . '/js/custom-template-institucional.js', array('jquery', 'js-tinyslider'));
	// SE ARQUIVO IMOVEIS
	elseif (is_archive('imovel')) :
		wp_enqueue_script('js-archive-imovel', get_template_directory_uri() . '/js/custom-archive-imovel.js', array('jquery', 'js-tinyslider'));
	// SE SINGLE IMOVEL
	elseif (is_singular('imovel')) :
		wp_enqueue_script('js-single-imovel', get_template_directory_uri() . '/js/custom-single-imovel.js', array('jquery', 'js-tinyslider'));
		wp_enqueue_style('css-circular-progress', get_template_directory_uri() . '/inc/purecss-circular-progress-bar-master/css-circular-prog-bar.css');
	// SE AGENDAMENTO VISITAS
	elseif (is_page_template('template-agendamento-visita.php')) :
		wp_enqueue_script('js-template-agendamento-visita', get_template_directory_uri() . '/js/custom-template-agendamento-visita.js', array('jquery', 'js-tinyslider'));
	endif;
}
add_action('wp_enqueue_scripts', 'swell_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}



/********************************************/
/*************** CUSTOM STUFF ***************/
/********************************************/



// HIDE ADMIN BAR FRONTEND
// HIDE ADMIN BAR FRONTEND
// HIDE ADMIN BAR FRONTEND



add_filter('show_admin_bar', '__return_false');



// FIM HIDE ADMIN BAR FRONTEND
// FIM HIDE ADMIN BAR FRONTEND
// FIM HIDE ADMIN BAR FRONTEND



// IMAGE SIZES
// IMAGE SIZES
// IMAGE SIZES



//terceiro parametro true, redimensiona no menor e cropa a imagem no centro
//terceiro parametro vazio, redimensiona no menor e mantem o outro proporcional
//pode usar um array com pos_x e pos_y para controlar o crop

add_image_size('1920x1080', 1920, 1080, true);	// slider galeria de imagens dos imoveis
add_image_size('1920x800', 1920, 800, true);	// slider home desk
add_image_size('1920x320', 1920, 320, true);	// bg_sup
add_image_size('800x800', 800, 800, true);		// slider home mob, blog home, imagem história
add_image_size('875x500', 875, 500, true);		// imagem tp_ins_his
add_image_size('200x50', 200, 50, true);		// tax vaic com img



// FIM IMAGE SIZES
// FIM IMAGE SIZES
// FIM IMAGE SIZES



// MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO
// MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO
// MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO



add_filter('wpseo_metabox_prio', function () {
	return 'low';
});



// FIM MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO
// FIM MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO
// FIM MOVE PAINEL YOAST PARA O BOTTOM DA PÁGINA DE EDIÇÃO



// CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF
// CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF
// CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF



if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 			=> 'Configurações do Site',
		'menu_title'			=> 'Configurações do Site',
		'menu_slug' 			=> 'configuracoes-do-site',
		'capability'			=> 'edit_posts',
		'parent_slug'			=> '',
		'position'				=> 90,
		'icon_url'				=> false,
		'redirect'				=> false
	));

	/*
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Unidades',
		'menu_title'	=> 'Unidades',
		'parent_slug'	=> 'configuracoes-do-site',
	));
	*/

	/*
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Alguma Outra Opção',
		'menu_title'	=> 'Mais Opções',
		'parent_slug'	=> 'meu-website',
	));
	*/
}



// FIM CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF
// FIM CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF
// FIM CRIA PÁGINA CONFIGURAÇÕES DO SITE PARA O ACF



// UPDATE JQUERY ONLY ON FRONT END
// UPDATE JQUERY ONLY ON FRONT END
// UPDATE JQUERY ONLY ON FRONT END



// https://wordpress.stackexchange.com/questions/257317/update-jquery-version
// Front-end not excuted in the wp admin and the wp customizer (for compatibility reasons)
// See: https://core.trac.wordpress.org/ticket/45130 and https://core.trac.wordpress.org/ticket/37110
function wp_jquery_manager_plugin_front_end_scripts()
{
	$wp_admin = is_admin();
	$wp_customizer = is_customize_preview();

	// jQuery
	if ($wp_admin || $wp_customizer) {
		// echo 'We are in the WP Admin or in the WP Customizer';
		return;
	} else {
		// Deregister WP core jQuery, see https://github.com/Remzi1993/wp-jquery-manager/issues/2 and https://github.com/WordPress/WordPress/blob/91da29d9afaa664eb84e1261ebb916b18a362aa9/wp-includes/script-loader.php#L226
		wp_deregister_script('jquery'); // the jquery handle is just an alias to load jquery-core with jquery-migrate
		// Deregister WP jQuery
		wp_deregister_script('jquery-core');
		// Deregister WP jQuery Migrate
		wp_deregister_script('jquery-migrate');

		// Register jQuery in the head
		wp_register_script('jquery-core', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, false);

		/**
		 * Register jquery using jquery-core as a dependency, so other scripts could use the jquery handle
		 * see https://wordpress.stackexchange.com/questions/283828/wp-register-script-multiple-identifiers
		 * We first register the script and afther that we enqueue it, see why:
		 * https://wordpress.stackexchange.com/questions/82490/when-should-i-use-wp-register-script-with-wp-enqueue-script-vs-just-wp-enque
		 * https://stackoverflow.com/questions/39653993/what-is-diffrence-between-wp-enqueue-script-and-wp-register-script
		 */
		wp_register_script('jquery', false, array('jquery-core'), null, false);
		wp_enqueue_script('jquery');
	}
}
add_action('wp_enqueue_scripts', 'wp_jquery_manager_plugin_front_end_scripts');
function add_jquery_attributes($tag, $handle)
{
	if ('jquery-core' === $handle) {
		return str_replace("type='text/javascript'", "type='text/javascript' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'", $tag);
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_jquery_attributes', 10, 2);



// FIM UPDATE JQUERY ONLY ON FRONT END
// FIM UPDATE JQUERY ONLY ON FRONT END
// FIM UPDATE JQUERY ONLY ON FRONT END



// DESABILITA EMOJIS WORDPRESS
// DESABILITA EMOJIS WORDPRESS
// DESABILITA EMOJIS WORDPRESS



//https://www.netmagik.com/how-to-disable-emojis-in-wordpress/
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// Remove from TinyMCE
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}



// FIM DESABILITA EMOJIS WORDPRESS
// FIM DESABILITA EMOJIS WORDPRESS
// FIM DESABILITA EMOJIS WORDPRESS



// FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)
// FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)
// FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)



// this one works with child pages
// https://www.robbertvermeulen.com/get-page-id-by-template/
// $template = get_pages_by_template('template-empreendimentos.php'); $template_id = get_page_link($emp_search[0]);
if (!function_exists('get_pages_by_template')) {
	function get_pages_by_template($template)
	{
		$args = array(
			'post_type'  => 'page',
			'fields'     => 'ids',
			'nopaging'   => true,
			'meta_key'   => '_wp_page_template',
			'meta_value' => $template
		);
		$pages = get_posts($args);
		if ($pages) {
			return $pages[0];
		} else {
			return false;
		}
	}
}



// FIM FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)
// FIM FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)
// FIM FUNÇÃO QUE PEGA ID DA PÁGINA PELO TEMPLATE (RETORNA PRIMEIRA PÁGINA PARA O TEMPLATE)



// CUSTOM POST IMÓVEL
// CUSTOM POST IMÓVEL
// CUSTOM POST IMÓVEL



function custom_post_type_imovel()
{

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x('Imóveis', 'Post Type General Name', 'swell'),
		'singular_name'       => _x('Imóvel', 'Post Type Singular Name', 'swell'),
		'menu_name'           => __('Imóveis', 'swell'),
		'parent_item_colon'   => __('Parent Imóvel', 'swell'),
		'all_items'           => __('Imóvel', 'swell'),
		'view_item'           => __('Veja o Imóvel', 'swell'),
		'add_new_item'        => __('Adicionar Novo Imóvel', 'swell'),
		'add_new'             => __('Adicionar Novo', 'swell'),
		'edit_item'           => __('Editar Imóvel', 'swell'),
		'update_item'         => __('Atualizar Imóvel', 'swell'),
		'search_items'        => __('Procurar Imóvel', 'swell'),
		'not_found'           => __('Não há nenhum Imóvel', 'swell'),
		'not_found_in_trash'  => __('Não há nenhum Imóvel na Lixeira', 'swell'),
	);

	// Set other options for Custom Post Type
	$args = array(
		'label'				=> __('imoveis', 'swell'),
		'description'		=> __('Imóveis', 'swell'),
		'labels'			=> $labels,
		// 'hierarchical'		=> true,
		'supports'			=> array('title', 'editor', 'thumbnail', 'page-attributes'),
		//'supports'		=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'public'			=> true,
		'has_archive'		=> 'apartamentos-alto-padrao-a-venda-em-curitiba',
		'menu_icon'			=> 'dashicons-building',	// https://developer.wordpress.org/resource/dashicons/#arrow-up-alt2
		'capability_type'	=> 'post',
	);

	// Registering your Custom Post Type
	register_post_type('imovel', $args);

	// Taxonomy Região
	$tax_args_regiao = array(
		'label'					=> 'Região',
		'singular_name' 		=> 'regiao',
		'hierarchical' 				=> true,
		'show_admin_column' 		=> true,
		'show_in_rest' 				=> true,
	);
	register_taxonomy('regiao', 'imovel', $tax_args_regiao);

	// Taxonomy status
	$tax_args_status = array(
		'label'					=> 'Status',
		'singular_name' 		=> 'status',
		'hierarchical' 				=> true,
		'show_admin_column' 		=> true,
		'show_in_rest' 				=> true,
	);
	register_taxonomy('status', 'imovel', $tax_args_status);
}
add_action('init', 'custom_post_type_imovel', 0);



// FIM CUSTOM POST IMÓVEL
// FIM CUSTOM POST IMÓVEL
// FIM CUSTOM POST IMÓVEL



// ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN
// ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN
// ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN



// https://wordpress.stackexchange.com/questions/43970/adding-menu-order-column-to-custom-post-type-admin-screen

/**
 * add order column to admin listing screen for header text
 */

$MY_POST_TYPE = "imovel"; // just for a showcase

// the basic support (menu_order is included in the page-attributes)
add_post_type_support($MY_POST_TYPE, 'page-attributes');

// add a column to the post type's admin
// basically registers the column and sets it's title
add_filter('manage_' . $MY_POST_TYPE . '_posts_columns', function ($columns) {
  $columns['menu_order'] = "Order"; //column key => title
  return $columns;
});

// display the column value
add_action( 'manage_' . $MY_POST_TYPE . '_posts_custom_column', function ($column_name, $post_id){
  if ($column_name == 'menu_order') {
     echo get_post($post_id)->menu_order;
  }
}, 10, 2); // priority, number of args - MANDATORY HERE! 

// make it sortable
$menu_order_sortable_on_screen = 'edit-' . $MY_POST_TYPE; // screen name of LIST page of posts
add_filter('manage_' . $menu_order_sortable_on_screen . '_sortable_columns', function ($columns){
  // column key => Query variable
  // menu_order is in Query by default so we can just set it
  $columns['menu_order'] = 'menu_order';
  return $columns;
});



// FIM ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN
// FIM ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN
// FIM ADD MENU-ORDER FIELD TO CPT ADMIN SCREEN



// ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA
// ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA
// ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA



add_action( 'pre_get_posts', 'custom_get_posts' );

function custom_get_posts( $query ) {

  if( (is_category() || is_archive()) && $query->is_main_query() ) {    
    $query->query_vars['orderby'] = 'menu-order';
    $query->query_vars['order'] = 'ASC';
  }

}



// FIM ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA
// FIM ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA
// FIM ALTERA LOOP PARA ORDENAR PELO ORDER-BY SEMPRE QUE ESSE EXISTIR, SE NÃO, ORDENA PELA DATA



// CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO
// CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO
// CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO



function custom_tax_veic_com_std_post()
{
	// Taxonomy Veículos de comunicação
	$tax_args_veic_com = array(
		'label'					=> 'Veículos de Comunicação',
		'singular_name' 		=> 'Veículo de Comunicação',
		'hierarchical' 				=> true,
		'show_admin_column' 		=> true,
		'show_in_rest' 				=> true,
	);
	register_taxonomy('veiculos-comunicacao', 'post', $tax_args_veic_com);
}
add_action('init', 'custom_tax_veic_com_std_post', 0);




// FIM CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO
// FIM CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO
// FIM CUSTOM TAXONOMY VEÍCULOS DE COMUNICAÇÃO NO POST PADRÃO




// REMOVE P FROM CONTACT FORM 7
// REMOVE P FROM CONTACT FORM 7
// REMOVE P FROM CONTACT FORM 7



add_filter('wpcf7_autop_or_not', '__return_false');



// FIM REMOVE P FROM CONTACT FORM 7
// FIM REMOVE P FROM CONTACT FORM 7
// FIM REMOVE P FROM CONTACT FORM 7



// ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO
// ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO
// ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO



// Return an alternate title, without prefix, for every type used in the get_the_archive_title().
add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('Blog<br/>Categoria: ', false);
	} elseif (is_tag()) {
		$title = single_tag_title('Blog<br/>Tag: ', false);
	} elseif (is_author()) {
		$title = 'Blog<br/><span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_year()) {
		$title = get_the_date(_x('Y', 'yearly archives date format'));
	} elseif (is_month()) {
		$title = get_the_date(_x('F Y', 'monthly archives date format'));
	} elseif (is_day()) {
		$title = get_the_date(_x('F j, Y', 'daily archives date format'));
	} elseif (is_tax('post_format')) {
		if (is_tax('post_format', 'post-format-aside')) {
			$title = _x('Asides', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-gallery')) {
			$title = _x('Galleries', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-image')) {
			$title = _x('Images', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-video')) {
			$title = _x('Videos', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-quote')) {
			$title = _x('Quotes', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-link')) {
			$title = _x('Links', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-status')) {
			$title = _x('Statuses', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-audio')) {
			$title = _x('Audio', 'post format archive title');
		} elseif (is_tax('post_format', 'post-format-chat')) {
			$title = _x('Chats', 'post format archive title');
		}
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	} elseif (is_tax('veiculos-comunicacao')) {
		$title = single_term_title('Blog<br/>Mídia: ', false);
	} else {
		$title = __('Archives');
	}
	return $title;
});




// FIM ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO
// FIM ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO
// FIM ALTERA TÍTULO DAS PÁGINAS DE ARQUIVO



// DINAMIC SELECT OPTIONS ON WPCF7 FORM
// DINAMIC SELECT OPTIONS ON WPCF7 FORM
// DINAMIC SELECT OPTIONS ON WPCF7 FORM



// https://pineco.de/dynamic-select-list-in-contact-form-7/


function pine_dynamic_select_field_values_your_desired_emp($scanned_tag, $replace)
{

	if ($scanned_tag['name'] != 'your-desired-emp')
		return $scanned_tag;

	$rows = get_posts(
		array(
			'post_type' => 'imovel',
			'numberposts' => -1,
			'orderby' => 'title',
			'order' => 'ASC'
		)
	);

	if (!$rows)
		return $scanned_tag;

	$scanned_tag['raw_values'][] = 'null|Sobre qual empreendimento quer falar? *';

	foreach ($rows as $row) {
		$scanned_tag['raw_values'][] = $row->post_title . '|' . $row->post_title;
	}

	$pipes = new WPCF7_Pipes($scanned_tag['raw_values']);

	$scanned_tag['values'] = $pipes->collect_befores();
	$scanned_tag['labels'] = $pipes->collect_afters();
	$scanned_tag['pipes'] = $pipes;

	return $scanned_tag;
}

add_filter('wpcf7_form_tag', 'pine_dynamic_select_field_values_your_desired_emp', 10, 2);



// FIM DINAMIC SELECT OPTIONS ON WPCF7 FORM
// FIM DINAMIC SELECT OPTIONS ON WPCF7 FORM
// FIM DINAMIC SELECT OPTIONS ON WPCF7 FORM



// INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS
// INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS
// INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS

// https://www.cloudways.com/blog/increase-media-file-maximum-upload-size-in-wordpress/#htaccess

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');


// FIM INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS
// FIM INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS
// FIM INCREASE MAX FILE UPLOAD SIZE IN WORDPRESS