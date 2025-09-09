<?php
/**
 * aanv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aanv
 */

if ( ! function_exists( 'aanv_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aanv_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aanv, use a find and replace
		 * to change 'aanv' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aanv', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'aanv' ),
			'menu-artgallery' => esc_html__( 'Art Gallery', 'aanv' ),
			'menu-artcenter' => esc_html__( 'Art Center', 'aanv' ),
			'menu-openstudios' => esc_html__( 'Open Studios', 'aanv' ),
			'menu-clayglass' => esc_html__( 'Clay Glass', 'aanv' ),			
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
		add_theme_support( 'custom-background', apply_filters( 'aanv_custom_background_args', array(
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
add_action( 'after_setup_theme', 'aanv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aanv_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aanv_content_width', 640 );
}
add_action( 'after_setup_theme', 'aanv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aanv_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aanv' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aanv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aanv_widgets_init' );


/**
 * Register custom query vars
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/query_vars
 */
function aanv_register_query_vars( $vars ) {
    // $vars[] = 'type';
    $vars[] = 'medium';
    return $vars;
} 
add_filter( 'query_vars', 'aanv_register_query_vars' );

/**
 * Enqueue scripts and styles.
 */
function aanv_scripts() {
	wp_enqueue_style( 'aanv-style', get_stylesheet_uri() );

	/* bootstrap framework */
	wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );

		/* custom css */
	wp_enqueue_style( 'project-style', get_template_directory_uri() . '/css/aanv.css', array(), null, 'all' );
	wp_enqueue_style( 'woo-aanv-style', get_template_directory_uri() . '/css/aanv_woo.css', array(), null, 'all' );

	/* google font */
	wp_enqueue_style( 'gfont', '//fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Open+Sans:400,400i,700,700i' );

	wp_enqueue_script( 'aanv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'aanv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aanv_scripts' );

/* Logout redirects to home page */
add_action('wp_logout','ps_redirect_after_logout');
function ps_redirect_after_logout(){
         wp_redirect( home_url() );
         exit();
}

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
 *  ======= Custom post types. =============
 */
require get_template_directory() . '/inc/post-types.php';

/**
 *  ======= Custom taxonomies. =============
 */
require get_template_directory() . '/inc/taxonomies.php';


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


// BELOW IS TO ADD ALPHA RANGE TO ARTISTS BY NAME fox sep 8 2025

/**
 * Filters WP_Query by title for a specific alphabetical range.
 *
 * @param string   $where The WHERE clause of the query.
 * @param WP_Query $query The WP_Query instance.
 * @return string The modified WHERE clause.
 */
function filter_title_by_alpha_range( $where, $query ) {
    global $wpdb;

    // Check for our custom 'title_range' query variable.
    $title_range = $query->get( 'title_range' );

    if ( ! empty( $title_range ) ) {
        // Explode the range, e.g., 'C-G'.
        $range_letters = explode( '-', $title_range );

        if ( count( $range_letters ) === 2 ) {
            $start_letter = $range_letters[0];
            $end_letter = $range_letters[1];
            $where .= $wpdb->prepare( " AND $wpdb->posts.post_title BETWEEN %s AND %s", $start_letter . '%', $end_letter . 'z%' );
        }
    }

    return $where;
}
add_filter( 'posts_where', 'filter_title_by_alpha_range', 10, 2 );



/**
 * Adds 'title_range' to the list of recognized query variables.
 *
 * @param array $vars The array of query variables.
 * @return array The filtered array of query variables.
 */
function add_custom_query_var( $vars ) {
    $vars[] = 'title_range';
    return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );





