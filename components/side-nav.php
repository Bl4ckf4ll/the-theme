<nav class="nav side-nav">
	<div class="closing-nav">
		<span class="glyphicon v-align glyphicon-menu-left"></span>
	</div>
	<?php wp_nav_menu(array('menu_class' => 'mobile-menu')); ?>
	<div class="sidebar-home-left sidebar col-xs-12">
		<?php dynamic_sidebar('home-sidebar-left'); ?>
	</div>
</nav>
