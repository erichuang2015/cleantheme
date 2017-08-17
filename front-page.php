<?php
/**
 * The template for the front page.
 *
 * The static homepage of the website.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */
 
get_header(); ?>

<div class="content-wrapper clearfix"><?php

	if (have_posts()) :
		while (have_posts()) : the_post();
			
		the_content();
	
		endwhile;

	else :
		
		echo '<p>No content found!</p>';
			
	endif; ?>

</div><!-- /content-wrapper -->

<?php get_footer(); ?>