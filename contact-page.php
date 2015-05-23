<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="contact-us" style="background-image: url('<?php if (get_field('background_image')): (the_field('background_image')) ?><?php endif; ?>')">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>	
	</div>
	<div class="contact-boxes container">
		<?php if (get_field('contact_box')): ?>
			<?php while (has_sub_field('contact_box')): ?>
				<div class="contact-box" style="background-color: <?php the_sub_field('background_color'); ?>;">
					<div class="overlay"></div>
					<h4><?php the_sub_field('box_title'); ?></h4>
					<p><?php the_sub_field('address'); ?></p>
					<p><?php the_sub_field('contacts'); ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>		
<?php endwhile; endif; ?>
<?php get_footer(); ?>