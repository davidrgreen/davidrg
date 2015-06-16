<?php
/**
 * davidrg functions and definitions
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
add_action( 'after_setup_theme', 'davidrg_setup' );
function davidrg_setup() {

	/**
	 * Prevent checking for updates to this theme
	 */
	add_filter( 'http_request_args', 'davidrg_prevent_updates', 5, 2 );
	function davidrg_prevent_updates( $r, $url ) {
	    if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
	        return $r; // Not a theme update request. Bail immediately.

	    $themes = unserialize( $r['body']['themes'] );
	    unset( $themes[ get_option( 'template' ) ] );
	    unset( $themes[ get_option( 'stylesheet' ) ] );
	    $r['body']['themes'] = serialize( $themes );
	    return $r;
	}

	/*
	 * Theme support functions
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	add_theme_support( 'automatic-feed-links' );

	// Remove Post and Comment Feeds
	remove_action('wp_head', 'feed_links', 2);

	/**
	 * Clean up the HEAD of the page
	 */
	remove_action('wp_head', 'wp_generator');

	// Remove because only Windows Live Writer needs it
	remove_action('wp_head', 'wlwmanifest_link');

	// Remove the link rel='shortlink' from head
	remove_action( 'wp_head', 'wp_shortlink_wp_head');

	/**
	 * Register the primary menu
	 */
	register_nav_menus( array(
		'primary' => 'Primary Menu',
	) );


	/**
	 * Add custom image sizes
	 */
	// add_image_size( 'davidrg-featured', 520, 280, TRUE );


	/**
	 * Change the default Gravatar
	 */
	add_filter( 'avatar_defaults', 'davidrg_gravatar' );
	function davidrg_gravatar ($avatar) {
		$custom_avatar =  get_stylesheet_directory_uri() . '/assets/img/gravatar.png';
		$avatar[$custom_avatar] = "davidrg Gravatar";
		return $avatar;
	}


	/**
	 * Disable pingbacks (protects from DDoS)
	 */
	add_filter( 'xmlrpc_methods', 'davidrg_remove_xmlrpc_pingback_ping' );
	function davidrg_remove_xmlrpc_pingback_ping( $methods ) {
		unset( $methods['pingback.ping'] );
		return $methods;
	} ;
}



/**
 * Set size of oEmbeds
 */
add_action( 'after_setup_theme', 'davidrg_content_width', 0 );
function davidrg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'davidrg_content_width', 640 );
}



/**
 * Register widget areas
 */
function davidrg_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'davidrg_widgets_init' );



/**
 * Dequeue files not needed by plugins
 */
add_action( 'wp_enqueue_scripts' , 'mali_dequeue_styles' , 20 );
function mali_dequeue_styles() {
	// wp_dequeue_style( 'sb_instagram_icons' );
	// wp_dequeue_style( 'sb_instagram_styles' );
	remove_action( 'ninja_forms_display_css', 'ninja_forms_display_css');
}



/**
 * Enqueue scripts and styles in header
 */
add_action( 'wp_enqueue_scripts', 'davidrg_header_scripts' );
function davidrg_header_scripts() {
	$min_or_not = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'davidrg-style', get_template_directory_uri() . '/assets/css/style' . $min_or_not . '.css');
	wp_enqueue_style( 'davidrg-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,400italic' );
	/* comment-reply.js is called in comments.php */
}



/**
 * Enqueue scripts and styles in header
 */
add_action( 'wp_footer', 'davidrg_footer_scripts' );
function davidrg_footer_scripts() {
	$min_or_not = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'davidrg-script', get_template_directory_uri() . '/assets/js/theme' . $min_or_not . '.js', 'jquery');
}



/**
 * Load Google fonts and editor-style.css in post editor
 */
add_action( 'after_setup_theme', 'davidrg_add_editor_styles' );
function davidrg_add_editor_styles() {
	add_editor_style( 'assets/css/editor-style.css' );

	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700,400italic' );
	add_editor_style( $font_url );
}



/**
 * Adds the page slug as a class to the body tag
 */
add_filter( 'body_class', 'davidrg_body_classes' );
function davidrg_body_classes( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	    $classes[] = $post->post_type . '-' . $post->post_name;
	}

	return $classes;
}




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/**
 * Handle styling the admin, login,, etc that make the site feel personalized
 */
require get_template_directory() . '/inc/style-admin.php';


// require get_template_directory() . '/inc/custom-post-types.php';
// require get_template_directory() . '/inc/custom-taxonomies.php';
// require get_template_directory() . '/inc/custom-meta-fields.php';
// require get_template_directory() . '/inc/options-page.php';
