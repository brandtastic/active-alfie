<?php 
	// Template Name: Holding Page
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="holding-page">
		<section class="large-feature">
			<section class="container">
				<aside>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/roundel-comingsoon.png" alt="Coming Soon">
				</aside>
				<aside>
					<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/large-logo.png" alt="<?php bloginfo('sitename'); ?> | <?php bloginfo('description'); ?>"></h1>
				</aside>
				<aside>
					<a href="#" alt="scroll-trigger"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/holding-signup.png" alt="Activiti Providers - Sign Up For Free"></a>	
				</aside>
			</section>
			<section class="container">
				<h2><?php the_field('holding_page_text'); ?></h2>
			</section>
		</section>
		<section class="holding-signup">
			<section class="container">
				<aside>
					<?php the_content(); ?>
				</aside>
				<aside>
					<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
				</aside>
			</section>
		</section>
	</section>
	<?php endwhile; else: ?>
        <?php get_template_part('partials/template', 'error'); ?>
    <?php endif; ?>
<?php get_footer(); ?>
