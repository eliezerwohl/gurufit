<?php
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	//adds active class
	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
				$classes[] = 'active ';
		}
		return $classes;
	}
	add_theme_support( 'post-thumbnails' );
	if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	}
function add_jquery() {
    wp_enqueue_script( 'jquery' );
  }
  add_action('init', 'add_jquery');
	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'primary' ),
	) );

    add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

function move_jquery_into_footer( $wp_scripts ) {

    if( is_admin() ) {
        return;
    }
    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
}



// add_filter('tiny_mce_before_init', 'wpa_45815');

?>
