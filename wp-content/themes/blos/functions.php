<?php
/**
 * Blos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blos
 */

if ( ! function_exists( 'blos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on blos, use a find and replace
		 * to change 'blos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blos', get_template_directory() . '/languages' );
   

    // Add default posts and comments to RSS feed links.
     add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );


    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'blos' ),

    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blos_custom_background_args', array(
       'default-color' => 'ffffff',
	   'default-image' => '',
	 ) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	

}
endif; // blos_setup

add_action( 'after_setup_theme', 'blos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blos_content_width', 640 );
}
add_action( 'after_setup_theme', 'blos_content_width', 0 );


if ( ! function_exists( 'blos_widgets_init' ) ) :

function blos_widgets_init() {

    /*
     * Widgets
     */

	register_sidebar( array(
        'name' => __( 'Sidebar', 'blos' ),
        'id' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );
	 

}
add_action( 'widgets_init', 'blos_widgets_init' );
endif;// blos_widgets_init


if ( ! function_exists( 'blos_customize_register' ) ) :

function blos_customize_register( $wp_customize ) {

 /* Message Layout */

    $wp_customize->add_section( 'copyright_section', array(
        'priority'       => 250,
        'title' => __( 'Copyright', 'blos' )
    ));

    $wp_customize->add_setting( 'copyright_section_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_textarea'
    ));

    $wp_customize->add_control( 'copyright_section_text', array(
        'label' => __( 'Copyright', 'blos' ),
        'type' => 'textarea',
        'section' => 'copyright_section'
    ));

}

add_action( 'customize_register', 'blos_customize_register' );

endif;// blos_customize_register

	

if ( ! function_exists( 'blos_enqueue_scripts' ) ) :
    function blos_enqueue_scripts() {

     /* Js */

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'blos-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'blos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );



     /* Styles */

	wp_enqueue_style( 'blos-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	

    }
    add_action( 'wp_enqueue_scripts', 'blos_enqueue_scripts' );
endif;




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
 * Navwalker
 */
require get_template_directory() . '/inc/bootstrap/wp_bootstrap_navwalker.php';

/**
 * Tgmpa Plugin Active
 */
require_once ( get_template_directory() . '/inc/plugin-active/blos-tgm-plugin-activation.php');