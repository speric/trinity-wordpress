<?php
/*
Template name: Blog
*/
?>

<?php get_header(); ?>
<!--CONTENT-->
<div class="main">
	<h1>Archive Of All Posts</h1>
	<?php query_posts('posts_per_page=10'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date" style="font-size: 14px;">posted on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?></span>
	</div>
	<?php endwhile; endif;?>
</div>
<!--# ENDS CONTENT-->
</div>				
<!--# ENDS WRAPPER-->
<?php get_footer(); ?>