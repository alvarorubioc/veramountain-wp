<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veramountain
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="top-footer">
			<div class="dflex between-xs">
				<div class="container dflex between-xs pa-4">
					<?php $veramountain_description = get_bloginfo( 'description', 'display' );
						if ( $veramountain_description || is_customize_preview() ) : ?>
						<p class="site-description text-h4"><?php echo $veramountain_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
					<div>
						<ul class="social dflex">
							<li class="pr-1">
								<a href="https://www.facebook.com/veramountain.barranquismo">
								<img src="<?php echo get_template_directory_uri()?>/assets/icons/facebook.svg">
								</a>
							</li>
							<li class="pr-1">
								<a href="https://www.instagram.com/vera_mountain/">
								<img src="<?php echo get_template_directory_uri()?>/assets/icons/instagram.svg">
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCTj-dIWnmz8N1uCwhKYkPwg/videos">
								<img src="<?php echo get_template_directory_uri()?>/assets/icons/youtube.svg">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="contact-footer pa-4">
					<p class="text-h5 dflex between-xs bottom-xs">
						<a href="/contacto">
							Contacta con nosotros
						</a>
						<span><img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-rigth.svg"></span>		
					<p>
				</div>
			</div>
		</div>

		<div class="mid-footer pt-6 pb-6">
			<div class="container">
				<div class="row">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="site-info pa-2">
			<div class="container">
				<small>
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( '© 2022 Vera Mountain ', 'veramountain' ) );
					?>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( ' Diseño y desarrollo: %2$s', 'veramountain' ), 'veramountain', '<a href="http://www.alvarorubioc.com">Alvaro Rubioc</a>' );
					?>
				</small>
			</div>	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script id="js-turitop" src="https://app.turitop.com/js/load-turitop.min.js" data-company="V382" data-ga="no" data-buttoncolor="green" data-afftag="ttafid"></script>

</body>
</html>
