<?php
/* =Sets up theme defaults and registers the various WordPress features that our theme supports.
 		-@uses add_editor_style() To add a Visual Editor stylesheet.
		-@uses register_nav_menu() To add support for navigation menus.
		-@uses add_theme_support() To add support for post thumbnails, automatic feed links,
			custom background, and post formats.
		-@uses set_post_thumbnail_size() To set a custom post thumbnail size.
*********************************************************************************/
function theme_setup() {
	add_editor_style();
	register_nav_menu( 'primary', 'Primary Menu' );


	if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
	 'name' => 'Post page sidebar',
	 'id' => 'post-page-sidebar',
	 'description' => 'Add wtdgets to display on the post page.',
   'before_widget' => '<li id="%1$s" class="widget %2$s">',
   'after_widget' => '</li>',
   'before_title' => '<h2 class="widgettitle">',
   'after_title' => '</h2>'
   ));
	}
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 986, 9999 ); // Unlimited height, soft crop
	add_theme_support( 'automatic-feed-links' );	
	
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'homepage-thumb', 378, 235, true ); //(cropped)
	}
	
}
add_action( 'after_setup_theme', 'theme_setup' );


/* =Enqueues scripts and styles for front-end.
**************************************************/
if (!is_admin()) 
add_action("wp_enqueue_scripts", "add_scripts_styles");

function add_scripts_styles() {

	global $wp_styles;

	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/javascripts/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');
	}
	
	wp_register_script(
		'jquery-masonry-min',
		 get_template_directory_uri() . '/javascripts/masonry.pkgd.min.js',  
		 array('jquery'),
		 '3.1.5', 
		 true
	);
	wp_enqueue_script('jquery-masonry-min');

	wp_register_script(
		'imagesloaded-pkgd',
		 get_template_directory_uri() . '/javascripts/imagesloaded.pkgd.min.js',  
		 array('jquery'),
		 '3.1.4', 
		 true
	);
	wp_enqueue_script('imagesloaded-pkgd');


	wp_register_script(  
		'customSript',  
		 get_template_directory_uri() . '/javascripts/custom.js',  
		 array('jquery'),
		 '1.0', 
		 true 
	 );
	wp_enqueue_script('customSript');
	
	

	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri(), array() );
	
}


?>