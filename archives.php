<?php
/*
Template Name: Archives
*/

get_header(); ?>

<div class="site_title_container"  style="background-image: url(<?php header_image(); ?>);background-size: cover;">
	<?php get_template_part( 'navigation' ); ?> 
	
	<div class="hero">
		<div class="site-title-container">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php echo get_bloginfo( 'name' ); ?></a></p>
			<p class="site-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>
	</div>
</div>

<div class="container-fluid row blog-container single-post-blog-container">
	<div class="col-xs-12 col-md-8 posts-container single-post-container"> 
		<div>
			<?php if ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="row <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>featured-post<?php endif; ?> col-xs-12">
					<div class="post_content">
						<header class="entry-header">
							<h1><?php the_title(); ?></h1> 
						</header>
						<?php
							query_posts(array('nopaging' => 1, /* we want all posts, so disable paging. Order by date is default */));
							$prev_year = null;
							
							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post();
									$this_year = get_the_date('Y');
									
									if ($prev_year != $this_year) {
										// Year boundary
										if (!is_null($prev_year)) {
											// A list is already open, close it first
											echo '</ul>';
										}
										echo '<h3>' . $this_year . '</h3>';
										echo '<ul>';
									}
									
									echo '<li>';
									echo '<a href="'; the_permalink(); echo '">'; the_title(); echo '</a>';
									echo '</li>';
									$prev_year = $this_year;
								}
								
								echo '</ul>';
							}
						?>	
					</div>
					
				</article><!-- #post -->

			<?php endif; // end of the loop. ?>
		</div>
	
	</div>
</div>


<?php get_footer(); ?>
