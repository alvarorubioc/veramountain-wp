<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package veramountain
 */

get_header();
get_template_part( 'template-parts/hero', 'single' );
?>

<div class="with-sidebar container">
	<main id="" class="site-main mt-8">
		
		<?php the_post_thumbnail(); ?>
		<div><?php veramountain_posted_on(); ?></div>
	

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'veramountain' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'veramountain' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
