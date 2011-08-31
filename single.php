<?php get_header(); ?>

<!--CONTENT-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="main">
		<h1><?php the_title(); ?></h1>
		<div class="single-post-date">Posted on <?php the_time('M j, Y'); ?> in <?php the_category(', '); ?></div>
		<div class="single-post-container">
			<?php the_content(); ?>
		</div>
		<?php wp_get_post_categories() ?>
	</div>
<?php endwhile; endif;?>
<!--# ENDS CONTENT-->
<?php comments_template(); ?>
</div>				
<!--# ENDS WRAPPER-->
<?php get_footer(); ?>
