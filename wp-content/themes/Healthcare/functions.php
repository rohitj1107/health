<?php

function load_stylesheets()  {
	
	wp_register_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style( 'bootstrap' );
	
	wp_register_style( 'style', get_template_directory_uri(). '/style.css', array(), 1, 'all');
	wp_enqueue_style( 'style' );
	
	wp_register_style( 'animate', get_template_directory_uri(). '/assets/css/animate.css', array(), 1, 'all');
	wp_enqueue_style( 'animate' );
	
	wp_register_style( 'carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', array(), 1, 'all');
	wp_enqueue_style( 'carousel' );
	
	wp_register_style( 'owl', get_template_directory_uri(). '/assets/css/owl.theme.default.min.css', array(), 1, 'all');
	wp_enqueue_style( 'owl' );
	
	wp_register_style( 'swiper', get_template_directory_uri(). '/assets/css/swiper-bundle.min.css', array(), 1, 'all');
	wp_enqueue_style( 'swiper' );
}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

// Load JS.

function addScripts() {
	
	 wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'jquery' );
	 
	 wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'bootstrap' );
	 
	 wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'popper' );
	 
	 wp_register_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'wow' );
	 
	 wp_register_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'carousel' );
	 
	 wp_register_script( 'theme', get_template_directory_uri() . '/assets/js/theme.js', array(), 1, 1, 1 );
	 wp_enqueue_script( 'theme' );
	
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function twentytwenty_menus() {

	$locations = array(
		'primary'  => __( 'Primary Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="col-lg-2 col-xs-6 col-md-3">
                            <div class="footer-widget">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
