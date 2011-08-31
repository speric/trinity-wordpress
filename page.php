<?php get_header(); ?>
<!--CONTENT-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="main">
		<h1><?php the_title(); ?></h1>
		<div><?php the_content(); ?></div>
	</div>
<!--# ENDS CONTENT-->
<?php endwhile; endif;?>
</div>				
<!--# ENDS WRAPPER-->
<?php get_footer(); ?>
