	<!--FOOTER-->
		<div id="footer">
			
			<div>
				<div>

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> <?php endif;?>
				
				</div>
				<span>&copy; 2011 Trinity Church </span>
				
			</div>
			
			
		</div>
		<!--# ENDS FOOTER-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
<script>
var $gs = $('<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><form method="get" action="http://www.google.com/search"><input type="hidden" name="sitesearch" value="trinitychurchlongisland.com" /><input type="text" name="q" style="width:125px"/><input type="submit" value="Search" /></form></li>');
$('#menu-top-menu').append($gs);
</script>
</html>
