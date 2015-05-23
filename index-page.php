<?php
/*
Template Name: Home Page
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
				<?php if (get_field('background_slider')): ?>
					<?php $images = get_field('background_slider');?>    
					<?php foreach( $images as $image ): ?>
						<li>
							<div class="slide" style="background-image: url('<?php echo $image["url"]; ?>');"></div>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
			<div class="overlay"></div>
			<div class="banner_content">
				<div class="index-header-wrap">
					<header class="banner_header container">
						<?php get_template_part('logo-nav'); ?>
					</header>
				</div>
				<div class="container">
					<h1 class="banner_h1"><?php if (get_field('title')):(the_field('title')) ?><?php endif; ?></h1>
					<div class="arrow-wrap"></div>
					<h2 class="banner_h2"><?php if (get_field('title_two')):(the_field('title_two')) ?><?php endif; ?></h2>
					<div class="carousel-wrap">
						<div class="solutions-carousel">
							<ul>
								<?php if (get_field('solutions')): ?>
									<?php while (has_sub_field('solutions')): ?>
										<li>
											<a href="<?php the_sub_field('link'); ?>" class="solution-item">
												<div class="img-wrap" style="background-image: url('<?php the_sub_field('image_x2_(retina)'); ?>');"></div>
												<div class="h2-wrap" style="border-left-color: <?php the_sub_field('bar_color'); ?>">
													<h2><?php the_sub_field('solution_title'); ?></h2>
												</div>	
												<p><?php the_sub_field('text'); ?></p>
											</a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
						<div class="solutions-prev"></div>
						<div class="solutions-next"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="solutions-x2">
			<h2 class="container"><?php if (get_field('title_two')):(the_field('title_two')) ?><?php endif; ?></h2>
			<div class="solution-x2-list">
				<?php if (get_field('solutions')): ?>
					<?php while (has_sub_field('solutions')): ?>
						<a href="<?php the_sub_field('link'); ?>" class="solution-item-x2 container">
							<div class="img-wrap">
								<img src="<?php the_sub_field('image_x2_(retina)'); ?>" alt="">
							</div>
							<h2><?php the_sub_field('solution_title'); ?></h2>	
							<p><?php the_sub_field('text'); ?></p>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> 			
		</div>
		<div class="intro">
			<div class="intro-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<div class="certificats">
					<img src="<?php bloginfo('template_url');?>/img/cerf-ohsas.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-r2.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-iso-9001.png" alt="">
					<img src="<?php bloginfo('template_url');?>/img/serf-iso-14001.png" alt="">
				</div>
			</div>
		</div>	
		<?php get_footer(); ?>