<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deeblogi
 */

get_header(); ?>


<div class="site_title_container"  style="background-image: url(<?php header_image(); ?>);background-size: cover;">
	<?php get_template_part( 'navigation' ); ?> 
	
	<div class="hero">
		<div class="site-title-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><h1 class="site-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
			<h2><?php echo get_bloginfo( 'description' ); ?></h2>
		</div>
	</div>	
</div>


	
<div class="container-fluid row blog-container">
	<div class="col-md-12 visible-xs visible-sm" style="padding: 0;">
		<?php dynamic_sidebar('lifter-sidebar-1'); ?>
	</div>
	
	<div class="col-xs-12 col-md-8 posts-container">
		<?php if ( have_posts() ) : ?>
			<div class="row">
				<div class="col-xs-12">
					<?php  $deeblogi_post_index = 0; ?>
					<?php while (have_posts() ) : the_post(); ?>
						<?php 
							get_template_part( 'content', get_post_format() ); 
							
							if (!is_sticky())
								$deeblogi_post_index++; 
						?>
					<?php endwhile; ?>
				</div>
			</div>
		
		<div class="row page-links">
			<?php deeblogi_content_nav( 'nav-below' ); ?> 
		</div>
		
		<hr class="hidden-lg hidden-md posts-end-separator">
		
		<?php endif; // end have_posts() check ?>
	</div>
	
	<div class="col-xs-12 col-md-4 sidebar-container">
		<?php get_sidebar(); ?>
	</div>
</div>
	




<?php get_footer(); ?>