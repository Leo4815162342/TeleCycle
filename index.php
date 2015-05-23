<?php
/*
Template Name: Index Page
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<?php get_template_part('head-meta'); ?>
	<?php wp_head(); ?>
	</head>	
	<body>	
		<div class="banner">
			<ul class="rslides">
				<li>
					<div class="slide slide_atlanta"></div>
				</li>
				<li>
					<div class="slide slide_hongkong"></div>
				</li>
				<li>
					<div class="slide slide_london"></div>
				</li>
			</ul>
			<div class="overlay"></div>
			<div class="banner_content">
				<div class="container">
					<header class="banner_header">
						<a href="/">
							<img src="<?php bloginfo('template_url');?>/img/logo-white.png" alt="TeleCycle logo">
						</a>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu index-menu' ) ); ?>
					</header>
					<h1 class="banner_h1">
						<span>Providing</span><br><span>Solution to the Telecommunication<br>& Recycling Industry</span>
					</h1>
					<div class="arrow-wrap">
						<img src="<?php bloginfo('template_url');?>/img/arrow-down.png" alt="">
					</div>
					<h2 class="banner_h2">Our Featured Solutions</h2>
					<div class="carousel-wrap">
						<div class="solutions-carousel">
							<ul>
								<li>
									<a href="#" class="solution-item">
										<div class="img-wrap">
											<img src="<?php bloginfo('template_url');?>/img/telecycle-ofs-hss.png" alt="">
										</div>
										<div class="h2-wrap ofs-hss">
											<h2>Hardware<br>Sourcing & Supply</h2>
										</div>	
										<p>TeleCycle is able to source second user equipment at the best possible market prices from its network of suppliers...</p>
									</a>
								</li>
								<li>
									<a href="#" class="solution-item">
										<div class="img-wrap">
											<img src="<?php bloginfo('template_url');?>/img/telecycle-ofs-id.png" alt="">
										</div>
										<div class="h2-wrap ofs-id">
											<h2>Installation<br>& Decommissioning</h2>
										</div>
										<p>TeleCycle has the expertise to carry out the physical and technical work required during network builds, swaps and...</p>
									</a>
								</li>
								<li>
									<a href="#" class="solution-item">
										<div class="img-wrap">
											<img src="<?php bloginfo('template_url');?>/img/telecycle-ofs-pmos.png" alt="">
										</div>
										<div class="h2-wrap ofs-pmos">
											<h2>PMO Support</h2>
										</div>
										<p>TeleCycle is able to provide high quality project management expertise.  Our PMO support is available as a stand-alone...</p>
									</a>
								</li>
								<li>
									<a href="#" class="solution-item">
										<div class="img-wrap">
											<img src="<?php bloginfo('template_url');?>/img/telecycle-ofs-scs.png" alt="">
										</div>
										<div class="h2-wrap ofs-scs">
											<h2>Small Cell Solution</h2>
										</div>
										<p>With increased competition and service demand from customers, operators are investing in small cell solutions...</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="solutions-prev"></div>
						<div class="solutions-next"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro">
			<div class="intro-container">
				<h2>Welcome to Tele Cycle</h2>
				<p>TeleCycle is a company based in Atlanta, Georgia. TeleCycle is a provider of innovative and fully integrated IT asset disposition and recycling Solutions. Our diverse clientele includes Fortune 1000 companies, IT and telecommunication companies, government agencies and Originating Equipment Manufacturers. Our clients rely on us to manage their electronic assets, minimize disposition-related risks, and maximize value recovery from their assets for the highest return on investment possible.</p>
				<p>Since our inception in 2007 we have expanded beyond IT asset disposition to serving the needs of the Telecommunication Industry by providing services such as On-site De-installation and Decommissioning, Project Management Support, Consignment, Reverse Logistics, Cell Site Maintenance Work and we continuously strive to add more services to our portfolio.</p>
				<div class="certificats">
					<img src="<?php bloginfo('template_url');?>/img/cerf-ohsas.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-r2.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-iso-9001.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-iso-14001.png" alt="">
				</div>
			</div>
		</div>
		<?php get_footer(); ?>