<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Deeblogi
 */

get_header(); ?>

<div class="site_title_container"  style="background-image: url(<?php header_image(); ?>);background-size: cover;">
	<?php get_template_part( 'navigation' ); ?> 
	
	<div class="hero">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php echo get_bloginfo( 'name' ); ?></a></p>
			<p class="site-description"><?php echo get_bloginfo( 'description' ); ?></p>
	</div>
</div>


<div class="container-fluid row blog-container single-post-blog-container">
	<div class="col-xs-12 col-md-8 posts-container single-post-container"> 
		<div>
			<?php if ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endif; // end of the loop. ?>
		</div>
		
		<div class=" row">
			<!--<div class="col-xs-12 col-md-6">
				<?php dynamic_sidebar('singleitem-sidebar-1'); ?>
			</div>
		
			<div class="col-xs-12 col-md-6">
				<?php dynamic_sidebar('singleitem-sidebar-2'); ?>
			</div> -->
		</div>
	
	</div>
</div>



<?php get_footer(); ?>
