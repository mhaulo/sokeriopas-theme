<nav class="navbar navbar-default navbar-inverse main_menu" role="navigation">
	
	<div class="container-fluid main_menu_text_row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu_navbar_collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main_menu_brand" id="main_menu_brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/sokeriseuranta.png" class="img-responsive site-logo">
		
      </a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu_navbar_collapse">
        
	<?php
		wp_nav_menu( 
			array(
				'theme_location'  => 'primary',
				'depth'           => 1,
				'container'       => false,
				'menu_class'      => 'nav navbar-nav',
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'link_before'          => '<i class="fa fa-caret-right"></i> ',
				'walker'          => new wp_bootstrap_navwalker()
			) 
		);
	?>
	
		<ul class="nav navbar-nav navbar-right">
			<li>
				<?php get_search_form(); ?>
			</li>
		</ul>
	
    </div> <!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>