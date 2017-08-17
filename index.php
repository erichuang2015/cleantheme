<?php
/**
 * The template for displaying the blog page.
 *
 * The page of the site that lists all of the published posts.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */

get_header(); ?>

<div class="content-wrapper">
	
	<div class="recent-wrapper">
	
		<?php $categories = get_categories();
	
		foreach ( $categories as $category ) { // Pulling the most recent post from each post category.
			$args = array(
				'cat' => $category->term_id,
				'post_type' => 'post',
				'posts_per_page' => '1'
			);
	
		$query = new WP_Query( $args );
	
		if ( $query->have_posts() ) { ?>
		
			<div class="recent-post">
				<?php while ( $query->have_posts() ) {
		
					$query->the_post();
					?>
			
				<div class="recent-post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('masonry-thumbnail'); ?></a>
				</div><!-- /recent-thumbnail -->
			
				<div class="recent-post-meta">
					<p class="recent-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<span class="recent-post-category">Posted in
						<?php
						$categories = get_the_category();
						$separator = ", ";
						$output = '';
						if ($categories) {
							foreach ($categories as $category) {
								$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							}
							echo trim($output, $separator);
						}
						?>
					</span>
				</div><!-- /recent-post-meta -->

				<?php } // endwhile ?>
	
			</div><!-- /recent-post --><?php
	
		} // endif
	
		} // endforeach
	
		wp_reset_postdata(); ?>

	</div><!-- /recent-wrapper -->

	<div id="cats-wrapper" class="blog-wrapper">

		<section id="cats-list-title" class="section-title">
			<h2>the categories.</h2>
		</section>

		<section id="cats-list">
			<?php wp_list_categories( array(
				'title_li' => ''
			)); ?>
		</section>
	
	</div><!-- /cats-wrapper -->

	<div id="blog-blurb-wrapper" class="blog-wrapper">

		<section id="blog-blurb-title" class="section-title">
			<h2>what's it all about?</h2>
		</section>

		<section id="blog-blurb">
			<p>Writings, simply, is a place for my thoughts. <a href="http://jackusher.co.uk/category/advertising/">Advertising</a> will house pieces on brands, campaigns, and my experiences as I try to break into the industry. The posts in <a href="http://jackusher.co.uk/category/projects/">Projects</a> document my past and current projects, be they creative or technological. It's the best place to keep an eye on what I'm up to, or I used to be up to.</p>
		</section>	

	</div><!-- /blog-blurb-wrapper -->
	
</div><!-- /content-wrapper -->

<?php get_footer(); ?>