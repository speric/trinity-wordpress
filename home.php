<?php get_header(); ?>
			
			<!--CONTENT-->
			<div class="content">
				
				
				
				<!--BANNERS & SLIDER AREA-->
				<div class="banners" align="center">											
					
					<!--SLIDER-->
					<div class="slider">
						
						<a href="#" class="left_control"></a>
						<a href="#" class="right_control"></a>
						<div id="slider">
							
						<ul  class="slider">
					<?php query_posts('post_type=Slider'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
						<li><?php the_content(); ?></li>
					<?php endwhile; endif;?>
						</ul>
						</div>
					</div>
					<!--# ENDS SLIDER-->
					
					<!--RIGHT BANNERS-->
					
					<!--<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner') ) : ?> <?php endif;?>-->
					
					
					<!--# ENDS RIGHT BANNERS-->
					
				</div>
				<!--# ENSD BANNERS & SLIDER AREA-->
				
				
				
				
				
				<!--POSTS INTRO BOXES-->
				<?php query_posts('cat=3&posts_per_page=1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="box">
					<h1><a href="http://trinitychurchlongisland.com/category/pastors-blog/">from the pastor’s blog</a></h1>
					<div>
						<p class="date"><?php the_time('M j, Y'); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; endif;?>
				
				<?php query_posts('cat=4&posts_per_page=1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="box box_center">
					<h1><a href="http://trinitychurchlongisland.com/category/sermon/">this week’s sermon</a></h1>
					<div>
						<p class="date"><?php the_time('M j, Y'); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; endif;?>
				
				<?php query_posts('cat=5&posts_per_page=1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="box">
					<h1><a href="http://trinitychurchlongisland.com/category/events/">events</a></h1>
					<div>
						<p class="date"><?php the_time('M j, Y'); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</div>
				</div>	
				<?php endwhile; endif;?>
								
				<!--POSTS INTRO BOXES-->
				
				
			</div>
			<!--# ENDS CONTENT-->
			
		</div>				
		<!--# ENDS WRAPPER-->
		
	<?php get_footer(); ?>