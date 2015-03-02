<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/modernizr-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="http://fast.fonts.net/jsapi/24f07956-c74c-4ea4-9940-2db1bea222fc.js"></script>
<script type="text/javascript" src="http://fast.fonts.net/jsapi/c0dbdef9-1bc1-43d8-b527-f65fbacdbcf2.js"></script>
<?php get_template_part('includes/build', 'meta'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width"/>  
<title><?php wp_title('|'); ?></title>
<?php wp_head(); ?>
</head>
<body>
	<header>
		<section class="container">
			<aside>
				<?php get_template_part('includes/social', 'sharers'); ?>
			</aside>
			<aside>
				<?php get_template_part('includes/social', 'links'); ?>	
			</aside>
		</section>
	</header>
