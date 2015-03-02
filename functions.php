<?php
	function my_login_logo() { ?>
	    <style type="text/css">
	        body.login div#login h1 a {
	            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/login-logo.png);
				display: block;
				background-size: contain;
	        }
	    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	function my_login_logo_url() {
	    return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	// First, create a function that includes the path to your favicon
	function add_favicon() {
	  	$favicon_url = get_stylesheet_directory_uri() . '/images/favicons/favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	}
	  
	// Now, just make sure that function runs when you're on the login page and admin pages  
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');
?>
