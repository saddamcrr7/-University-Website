<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fictional
 * @since 1.0  
 */

if( ! function_exists('fictional_theme_setup') ) : 

    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */

    function fictional_theme_setup(){

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        // Fictional Menu Registration

        register_nav_menus(array(
            'primary_menu'      => esc_html__( 'Primary Menu', 'fictional' ),
            'footer_explore'    => esc_html__('Footer Explore Menu', 'fictional'),
            'footer_learn'      => esc_html__('Footer Learn Menu', 'fictional')
        ));

    }
endif;
add_action( 'after_setup_theme', 'fictional_theme_setup', 0 );

/**
 * Enqueue Fictional Theme scripts and styles.
 */

if( ! function_exists('fictional_scripts')):
    function fictional_scripts(){
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('main', get_stylesheet_uri());

        wp_enqueue_script('scripts-bundled', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
        
    }
endif;
add_action('wp_enqueue_scripts', 'fictional_scripts');

