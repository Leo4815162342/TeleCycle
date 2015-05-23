<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="page container">
        	<?php the_post_thumbnail( array(1060,370, false), array( 'class' => 'inner-page-img', 'alt' => get_the_title()) );?>
			<?php 
			// determine parent of current page
			if ($post->post_parent) {
			    $ancestors = get_post_ancestors($post->ID);
			    $parent = $ancestors[count($ancestors) - 1];
			} else {
			    $parent = $post->ID;
			}
			$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=" . $parent . "&echo=0");
			if ($children) {
			?>
			<ul class="side-nav">
				<?php 
				// current child will have class 'current_page_item'
					echo $children; 
				?>
			</ul>
			<?php 
			} 
			?>
			<div class="content-wrap">
				<div class="h1-wrap">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>