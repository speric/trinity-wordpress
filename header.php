<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="A mission work of the Orthodox Presbyterian Church, meeting in Huntington, NY.">
<meta name="author" content="Trinity Church">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js">></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#slider ul").cycle({ 
	    fx: 'scrollLeft',
	    pause: 1,
	    fit: 1,
	    next:   '.left_control', 
	    prev:   '.right_control'
	    });
});
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1120529-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	    </head>
	    <body>
	    
			<!--FOR THE HEADER GRAY LINE-->
			<div id="header_line"></div>
			<!--# ENDS FOR THE HEADER GRAY LINE-->
		    	
			<!--WRAPPER-->
			<div id="wrapper">
					
				<!--HEADER-->
				<div id="header">
					
					<!--LOGO-->
					<div id="logo">
						<h1><a href="<?php bloginfo('url') ?>">Trinity church</a></h1>
					</div>
					<!--# ENDS LOGO-->
					
					<!--SLOGAN-->
					
					
					<div id="slogan">
						<p>A Mission Work of the Orthodox Presbyterian Church</p>
						
						<?php wp_nav_menu(array('menu'=>'Top-Menu'));?>
					</div>
					<!--# ENDS SLOGAN-->
					
					
					
					<!--NAV-->
					
					
					<div id="nav">
					<?php wp_nav_menu(array('menu'=>'Main'));?>
					</div>
					<!--# ENDS NAV-->
					
				</div>
				<!--# ENDS HEADER-->
