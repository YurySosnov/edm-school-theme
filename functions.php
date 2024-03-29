<?php
/**
 * EDM School functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EDM_School
 */

if ( ! function_exists( 'edm_school_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function edm_school_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on EDM School, use a find and replace
		 * to change 'edm-school' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'edm-school', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'edm-school' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'edm_school_custom_background_args', array(
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
endif;
add_action( 'after_setup_theme', 'edm_school_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edm_school_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'edm_school_content_width', 640 );
}
add_action( 'after_setup_theme', 'edm_school_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edm_school_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'edm-school' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'edm-school' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'edm_school_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function edm_school_scripts() {
	wp_enqueue_style( 'edm-school-style', get_stylesheet_uri() );

    wp_enqueue_style( 'edm-school-css-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style( 'edm-school-css-owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );
    wp_enqueue_style( 'edm-school-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'edm-school-css-theme', get_template_directory_uri() . '/css/theme.css' );
    wp_enqueue_style( 'edm-school-css-old-theme', get_template_directory_uri() . '/css/old-theme.css' );

    wp_enqueue_script( 'edm-school-youtube-player-api', '//www.youtube.com/player_api', array(), '1', false );
    wp_enqueue_script( 'edm-school-scripts-header', get_template_directory_uri() . '/js/scripts-header.js', array(), '1', false );

    wp_enqueue_script( 'edm-school-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', false );
    wp_enqueue_script( 'edm-school-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '1', false );
    wp_enqueue_script( 'edm-school-masked-input', get_template_directory_uri() . '/js/jquery.maskedinput.js', array(), '1', false );

    wp_enqueue_script( 'edm-school-notification-widget', '//unpkg.com/@textback/notification-widget@latest/build/index.js', array(), '1', true );
    wp_enqueue_script( 'edm-school-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1', true );

	wp_enqueue_script( 'edm-school-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'edm-school-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'edm_school_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load TGM plugins.
 */
require get_template_directory() . '/tgm/edm-school.php';

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');