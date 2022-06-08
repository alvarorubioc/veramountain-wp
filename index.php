<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package veramountain
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<section id="hero" class="curvas-nivel-bg">
					<div class="container">
						<div class="row middle-xs">
							<div class="col-xs-12 col-md-8 entry-hero">
								<h1 class="page-title"><?php single_post_title(); ?></h1>
							</div>
						</div>
					</div>   
				</section>
				<?php
			endif;

			echo '<div class="container grid grid-columns-3" id="blog-vera">';

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				
				get_template_part( 'template-parts/card', 'blog' );

			endwhile;
			
			echo '</div><div class="container center-xs">';

			the_posts_pagination();

			echo '</div>';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
