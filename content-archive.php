<?php
/**
 * The template for archive pages.
 *
 * Governs lists of posts depending on the archive filter.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */
?>

<article class="list-post <?php post_class(); ?>">

	<div class="archive-post-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-archive-thumbnail'); ?></a>
	</div><!-- /archive-thumbnail -->
				
	<div class="archive-post-meta">
		<h4 class="archive-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<span class="archive-post-date"><?php the_time('F j, Y'); ?></span>
	</div><!-- /blog-info -->
			
</article><!-- /list-post -->