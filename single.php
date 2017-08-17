<?php
/**
 * The template for single post pages.
 *
 * The site pages that display articles (although article content is scaffolded out to content-single.php).
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */

get_header(); ?>

<div class="content-wrapper">

	<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
	
		if (get_post_format() == false) {
			get_template_part('content', 'single');
		} else {
			get_template_part('content', get_post_format());
		}
	
		endwhile;
	
	else :
	
		echo '<p>No content found</p>';
	
	endif; ?>
	
</div><!-- /content-wrapper -->

<?php get_footer(); ?>