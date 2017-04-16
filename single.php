<?php
/**
 * The Template for displaying all single posts
 *
 * @package Deeblogi
 */

get_header(); ?>



<div class="site_title_container"  style="background-image: url(<?php header_image(); ?>);background-size: cover;">
	<?php get_template_part( 'navigation' ); ?> 
</div>


<div class="container-fluid row blog-container single-post-blog-container">
	<div class="col-xs-12 col-md-8 posts-container single-post-container"> 
		<div>
			<?php if ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endif; // end of the loop. ?>
		</div>
		
		<div class=" row">
			<div class="col-xs-12 col-md-6">
				<?php dynamic_sidebar('singleitem-sidebar-1'); ?>
			</div>
		
			<div class="col-xs-12 col-md-6">
				<?php dynamic_sidebar('singleitem-sidebar-2'); ?>
			</div>
		</div>
	
	</div>
</div>



<?php get_footer(); ?>
