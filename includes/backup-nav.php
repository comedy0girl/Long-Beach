
<div class="menu-bar">
	<div class="row twelve columns menu-wrapper">
		<div class="left"><?php 
			wp_nav_menu(['theme_location' => 'header-left-menu' ]); ?>
		</div>
		<div class="slideInLeft logo-container">
			<a href="/">
				<h1>Wendi MC Fansite</h1>
				<h3>YOUR FANSITE SOURCE FOR WENDI MCLENDON-COVEY</h3>
			</a>
		</div>
		<div class="right"><?php 
			wp_nav_menu(['theme_location' => 'header-right-menu' ]); ?>
		</div>
	</div>

	<div class="wow fadeInLeft animated intro-image">
		<img src="<?php bloginfo('template_url') ?>/assets/images/wen.jpg">
	</div>
	
	<div class="wow fadeInRight animated opening-blurb">
		<p>Follow us online</p>
		<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href=""><i class="fa fa-podcast" aria-hidden="true"></i></a></li>
	</div>
	
</div>
