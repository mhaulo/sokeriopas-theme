<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Deeblogi
 */
?>
<?php global $deeblogi_post_index; ?>

<article id="post-<?php the_ID(); ?>" class="row <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>featured-post<?php endif; ?> col-xs-12">
	<div class="post_content">
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
				<h2 class="entry-title"><?php the_title(); ?></h2> 
			<?php else : ?>
				<?php if ( $deeblogi_post_index == 0) : ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php else : ?>
					<h1 class="entry-title entry-title-small"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php endif; ?>
			<?php endif; // is_single() ?>
			
		</header>
		
		<?php
			if ( $deeblogi_post_index == 0 ) 
				the_post_thumbnail(1920);
			
			if ( is_single() ) {
				the_content();
				the_tags("Asiasanat: ", ", ");
				echo '<p style="text-align: center;"><i class="fa fa-ellipsis-h"></i></p>';
			}
			else {
				echo '<div class="post_excerpt">';
				
				if ( $deeblogi_post_index == 0 ) 
					the_content();
				else
					the_excerpt(); 
				echo '</div>';
				the_tags("Asiasanat: ", ", ");
			}
		?>
		
	</div>
	
</article><!-- #post -->
