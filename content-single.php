<?php
/**
 * The template for the body content on single post pages.
 *
 * The content file referenced from single.php.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */
?>

<article class="post <?php post_class(); ?> clearfix">

	<section class="post-title">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</section><!-- /post-title -->
	
	<section class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in		
		<?php $categories = get_the_category();
		$separator = ", ";
		$output = '';
		if ($categories) {			
			foreach ($categories as $category) {			
				$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;				
			}			
			echo trim($output, $separator);			
		} ?>			
	</section><!-- /post-info -->
	
	<section class="post-body">
		<?php the_content(); ?>
	</section><!-- /post-body -->
	
</article><!-- /post -->