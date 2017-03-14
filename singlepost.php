<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Deeblogi
 */
?>
<article id="post-<?php the_ID(); ?>" class="container-fluid row <?php echo get_post_format(); ?>" >
	<header class="entry-header">
		
			<div class="post-image-container">
				<?php the_post_thumbnail(); ?>
				<div class="single-post-title-container">
					<?php if (has_post_thumbnail()) : ?>
						<h1><?php the_title(); ?></h1>
						<p class="single-post-meta">
							<?php the_date(); ?>
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="single-post-meta"><?php the_author_meta('nickname'); ?></a> 
						</p>
					<?php else: ?>
						<h1 class="no-post-thumbnail no-text-shadow"><?php the_title(); ?></h1>
						<p class=" single-post-meta no-post-thumbnail no-text-shadow">
							<?php the_date(); ?>
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="category"><?php the_author_meta('nickname'); ?></a> 
						</p>
					<?php endif; ?>
					
				</div>
			</div>
	</header>
	
	<div class="page-content single-post-content">
		<!-- <div class="post_date">
			<?php the_date(); ?>
		</div> ->
		
		<!-- <p class="category">
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('nickname'); ?></a> 
			<?php if (has_category()) : ?>
				<i class="fa fa-long-arrow-right"></i>
				<?php echo the_category(', '); ?>
			<?php endif; ?>
		</p> -->
			
			<div class="single-post-nav">
					<hr>
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-arrow-left"></i>', 'Previous post link', 'deeblogi' ) . '</span> %title' ); ?></div>
					
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-arrow-right"></i>', 'Next post link', 'deeblogi' ) . '</span>' ); ?></div>
					<div style="clear:both"></div>
					<hr>
				</div>
		
		<?php the_content(); ?>
		
		<!-- <div class="single-post-nav">
			<hr>
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-arrow-left"></i>', 'Previous post link', 'deeblogi' ) . '</span> %title' ); ?></div>
			
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-arrow-right"></i>', 'Next post link', 'deeblogi' ) . '</span>' ); ?></div>
			<div style="clear:both"></div>
			<hr>
		</div> -->
		<hr>
		<?php get_template_part('author-info-row', ''); ?>
		<hr>
		<?php comments_template( '', true ); ?>
	</div>
	
</article><!-- #post-->
