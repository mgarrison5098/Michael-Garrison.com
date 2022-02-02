<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Michael_Garrison
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'michael-garrison' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'michael-garrison' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'michael-garrison' ), 'michael-garrison', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<!-- 
Our software development services are designed around the needs of our clients, and we adapt our services to meet the changing needs of new and existing clients.

We at Btechz.com, provide services like Software Development, Web Development, Mobile Application Development, SEO, SEO Consulting, Branding and Digital Marketing.

If you need help with software, development, engineering, or creativity to solve your problem, look no further. We offer a wide range of services to create great software quickly and cost effectively.

We provide quality software solutions for small and large businesses. Our objective is to understand your needs and deliver a seamless, on-time and cost-effective solution.
 -->
