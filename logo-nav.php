<?php is_front_page() ? ($logoImgClass = "logo logo-white" AND $navClass = 'nav-menu index-menu') : ($logoImgClass = "logo logo-blue" AND $navClass = 'nav-menu inner-page-menu' AND $navToggleClass = 'nav-toggle-blue'); ?>
<a href="<?php echo get_bloginfo('wpurl'); ?>" class="logo" title="Home"></a>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu inner-page-menu' ) ); ?>
<div class="nav-toggle nav-toggle-blue">
	<div class="bar"></div>
	<div class="bar"></div>
	<div class="bar"></div>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'mobile-menu' ) ); ?>