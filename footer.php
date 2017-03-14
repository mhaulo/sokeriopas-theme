<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Deeblogi
 */
?>
	
	<footer class="page-footer" role="contentinfo">
		<div class="container" style="padding: 0;">
			<div class="site-info row ">
				<div class="col-xs-12 8">
					<?php get_template_part('author-info-row', ''); ?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>