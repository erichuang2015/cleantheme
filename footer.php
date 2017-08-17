<?php
/**
 * The template for the site footer.
 *
 * The area of the page that contains the sitemap, meta links, and the copyright notice.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */
?>
	<footer class="site-footer">
		
		<div id="footer-contact" class="footer clearfix">
			<h3>get in touch.</h3>
			<p>You can contact me using the email, Twitter or Github links below. Also, you can grab a copy of my CV.</p>
			<div class="contact-icons clearfix">
				<a href="mailto:<?php bloginfo('admin_email'); ?>"><i class="fa fa-envelope fa-2x footer-fa" aria-hidden="true"></i></a>
				<a href="https://twitter.com/TheJackUsher"><i class="fa fa-twitter fa-2x footer-fa" aria-hidden="true"></i></a>
				<a href="https://github.com/jackusher"><i class="fa fa-github-alt fa-2x footer-fa" aria-hidden="true"></i></a>
				<a href="https://google.com"><i class="fa fa-file-text fa-2x footer-fa" aria-hidden="true"></i></a>
			</div>
		</div><!-- /footer-contact -->
		
		<nav id="footer-nav" class="site-nav footer clearfix">
			<?php
			$args = array(
				'theme_location' => 'footer'
			);
			wp_nav_menu( $args ); ?>
		</nav><!-- /footer-nav -->
		
		<section id="footer-copyright" class="footer">
			<p>webs by Jack. made with <i class="fa fa-heart" aria-hidden="true"></i> in London & Durham. &copy; <?php echo date('Y');?></p>
		</section><!-- /footer-copyright -->
	
	</footer><!-- /site-footer -->

</div><!-- /container -->

<?php wp_footer(); ?>

</body>
</html>