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

// if you want only logged in users to access this function use this hook
add_action('wp_ajax_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want both logged in and anonymous users to get the emails, use both hooks above

function mycustomtheme_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){
$message = "";
foreach ($_POST as $key => $value) {
    if ($value === "title1") {
      $message .=  "\r\n";
      $message .=  "\r\n";
      $message .=  str_replace("_"," ",strip_tags($key)) . ": ";
      $message .=  "\r\n";
      $message .=  "\r\n";
    }
    else{
    $message .=  "\r\n";
    $message .=  str_replace("_"," ",strip_tags($key)) . ": ";
    $message .=  "\r\n";
    $message .=  strip_tags($value);
    $message .=  "\r\n";
    }
}
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$formcontent="From: $name \n $email \n Message: $message";
$recipient = "eliezerwohl@gmail.com";
$subject = "Gurufitclub.com Contact";
wp_mail($recipient, $subject, $message) or die("Error!");
echo "got it";

		}
    echo 'error';
    die();
}

?>
