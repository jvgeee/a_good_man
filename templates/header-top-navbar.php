<header class="banner navbar" role="banner">
	<div class="big-header">
		<div class="big-header-bg">
			<!--To be replaced with video -->
			<img class="big-header-img" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/top-bg.jpg" alt="a good man video" />
		</div>
		<div class="big-header-overlay">
			<h2>Unbiased style advice from men who know.</h2>
			<p><a class="btn btn-primary" href="#">Make a free enquiry</a></p>
		</div>
	</div>
	  <div class="navbar-inner">
		<div class="container">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <a class="brand" href="<?php echo home_url(); ?>/">
			<?php bloginfo('name'); ?>
		  </a>
		  <nav class="nav-main nav-collapse collapse" role="navigation">
			<?php
			  if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
			  endif;
			?>
		  </nav>
		</div>
	  </div>
</header>
