	<footer>
		<section class="container">
			<aside>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png" alt="<?php bloginfo('sitename'); ?> | <?php bloginfo('description'); ?>">
				<h2>We're Social: <?php get_template_part('includes/social', 'links'); ?></h2>
			</aside>
			<aside>
				<?php get_template_part('includes/social', 'sharers'); ?>
				<p>Website and branding by <a href="http://brandtastic.co.uk" target="_blank">Brandtastic</a></p>
			</aside>
		</section>
	</footer>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60211370-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/font-awesome/css/font-awesome.min.css">
<?php wp_footer() ?>
</html>
