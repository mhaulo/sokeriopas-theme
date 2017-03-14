<div class="col-xs-6">
	<p class="category">Kirjoittaja</h4>
	<h4><?php the_author_meta('nickname'); ?></h4>
</div>
<div class="col-xs-6">
	<?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
</div>
<div style="clear:both"></div>
<hr>

<?php 
	$args = array(
		'author' => get_the_author_meta('ID')
	);
	$author_posts_query = new WP_Query( $args );
	
	if ($author_posts_query->have_posts()) {
?>
		<strong>Uusimmat kirjoitukset:</strong>
		
<?php
		$count = 5;
		while ($author_posts_query->have_posts() && $count > 0) {
			$author_posts_query->the_post();
			echo '<br>' . get_the_title() . '';
			$count--;
		}
?>
	
<?php	
	}
?>
