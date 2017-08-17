<?php
/**
 * The template for all archive pages.
 *
 * Includes category, tag, author and date archives.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */

get_header(); ?>

<div class="content-wrapper">
	
	<?php
		if (have_posts()) :

			if ( is_category() ) {
				?><section id="cat-archive-title" class="archive-title"><h2><?php single_cat_title(); ?></h2></section>
				<section id="cat-archive-subtitle" class="archive-subtitle"><h4><?php echo category_description(); ?></h4></section><?php
			} elseif ( is_tag () ) {
				?><section class="archive-title"><h2><?php single_tag_title(); ?></h2></section><?php
			} elseif ( is_author() ) {
				the_post();
				?><section id="author-archive-title" class="archive-title"><h2><?php echo 'Author Archives: ' . get_the_author(); ?></h2></section><?php
				rewind_posts();
			} elseif ( is_day() ) {
				?><section class="archive-title"><h2><?php echo 'Daily Archives: ' . get_the_date(); ?></h2></section><?php
			} elseif ( is_month() ) {
				?><section class="archive-title"><h2><?php echo 'Monthly Archives: ' . get_the_date('F Y'); ?></h2></section><?php
			} elseif ( is_year() ) {
				?><section class="archive-title"><h2><?php echo 'Yearly Archives: ' . get_the_date('Y'); ?></h2></section><?php
			} else {
				echo 'Archives:';
			}
	
			while (have_posts()) : the_post();
	
				get_template_part('content', 'archive');
	
			endwhile;
	
		else :
			
			echo '<p>No content found!</p>';
		
		endif; ?>

</div><!-- /content-wrapper -->

<?php get_footer(); ?>