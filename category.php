<?php get_header(); ?>

<!--CONTENT-->
<div class="main">
	<h1><?php printf( __( 'Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>  
  <?php query_posts('cat='.get_cat_ID(single_cat_title("",FALSE)) .'&posts_per_page=20'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date" style="font-size: 14px;">posted on <?php the_time('M j, Y'); ?></span>
	</div>
	<?php endwhile; endif;?>
</div>
<!--# ENDS CONTENT-->
</div>				
<!--# ENDS WRAPPER-->
<?php get_footer(); ?>