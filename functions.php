<?php


// chargement des scripts

function innovation_load_scripts(){ 
	$version = '1.0.0';
    // CSS files
    wp_enqueue_style('innovation_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), $version, 'all');
	  wp_enqueue_style('innovation_fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), $version, 'all');
	  wp_enqueue_style('innovation_slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array('innovation_bootstrap'), $version, 'all');
	  wp_enqueue_style('innovation_slick', get_template_directory_uri() . '/css/slick.css', array('innovation_bootstrap'), $version, 'all');
	  wp_enqueue_style('innovation_lightgallery','https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css', array('innovation_bootstrap'), $version, 'all');
	    
	  wp_enqueue_style('innovation_aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array('innovation_bootstrap'), $version, 'all');     
	  wp_enqueue_style('innovation_style', get_template_directory_uri() . '/style.css', array('innovation_bootstrap'), $version, 'all');
	  
    // JS Files
    wp_enqueue_script('innovation_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), $version, true); 
    wp_enqueue_script('innovation_bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('innovation_jquery'), $version, true);
	wp_enqueue_script('innovation_slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), $version, true); 
	wp_enqueue_script('innovation_lightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js', array('jquery'), $version, true);
   
    wp_enqueue_script('innovation_aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), $version, true);

 

    wp_enqueue_script('innovation_gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array('jquery'), $version, true);
	wp_enqueue_script('bgscroll_js', get_template_directory_uri() . '/js/bgscroll.js', array('jquery'), $version, true); 
    wp_enqueue_script('innovation_js', get_template_directory_uri() . '/js/innovation_js.js', array('jquery'), $version, true);
}// fin function innovation_load_scripts

// fin function innovation_load_scripts


// ajouter les scripts au theme

add_action('wp_enqueue_scripts','innovation_load_scripts');




// Désactiver Windows Live Writer

remove_action('wp_head', 'wlwmanifest_link');


// Ajouter le menu au theme

//add_theme_support('menu');

function innovation_setup() {

	

	// Suprimer la version de wordpress 

remove_action('wp_head', 'wp_generator');



// Masquer les erreurs de connexion

add_filter('login_errors',create_function('$a', "return null;"));

  

add_theme_support( 'post-thumbnails' ); 
 
function dekeysers_custom_excerpt_length( $length ) {

    return 20;

}

add_filter( 'excerpt_length', 'dekeysers_custom_excerpt_length', 999 );





require_once('includes/class-wp-bootstrap-navwalker.php');
 
  register_nav_menus(

    array( 
    'left-main-menu' => __( 'Left Main Menu' ), 
    'right-main-menu' => __( 'Right Main Menu' ), 
    'mobile-main-menu' => __( 'Mobile Main Menu' ), 
	'footer-menu' => __( 'Footer Menu' ), 
    )

  );

}



add_action( 'init', 'innovation_setup' );
 
   

/**
 * ACF Options Page
 */

if ( function_exists( 'acf_add_options_page' ) ) {

  
	// Main Theme Settings Page
	$parent = acf_add_options_page( array(
	  'page_title' => 'Theme General Settings',
	  'menu_title' => 'Theme Settings',
	  'redirect'   => 'Theme Settings',
	) );
  
	// 
	// Global Options
	// Same options on all languages. e.g., social profiles links
	// 
  
	acf_add_options_sub_page( array(
	  'page_title' => 'Global Options',
	  'menu_title' => __('Global Options', 'text-domain'),
	  'menu_slug'  => "acf-options",
	  'parent'     => $parent['menu_slug']
	) );
	
	  // 
	  // Language Specific Options
	  // Translatable options specific languages. e.g., social profiles links
	  // 
	  
	  $languages = array('fr','en');
	
	  foreach ( $languages as $lang ) {
		acf_add_options_sub_page( array(
		  'page_title' => 'Options (' . strtoupper( $lang ) . ')',
		  'menu_title' => __('Options (' . strtoupper( $lang ) . ')', 'text-domain'),
		  'menu_slug'  => "options-${lang}",
		  'post_id'    => $lang,
		  'parent'     => $parent['menu_slug']
		) );
	}
  
}

add_filter('loop_shop_columns', 'loop_columns', 999);
		if (!function_exists('loop_columns')) {
			function loop_columns() {
				return 3; // 3 products per row
		}
}

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


add_action('template_redirect', 'my_custom_disable_author_page');

function my_custom_disable_author_page() {
    global $wp_query;

    if ( is_author() || is_category() || is_tag() || is_tax() ) {                          
        // Redirect to homepage, set status to 301 permenant redirect. 
        // Function defaults to 302 temporary redirect.   
        wp_redirect(get_option('home'), 301); 
        exit;                                                 
    }
}

?>