<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package veramountain
 */

get_header();

?>

	<main id="hero" id="primary">
		<div class="container">
			<div class="row middle-xs">
				<div class="col-xs-12 col-md-8 entry-hero">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'veramountain' ); ?></h1>
					</header><!-- .page-header -->
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'veramountain' ); ?></p>

					<?php
						get_search_form();
					?>
				</div>
			</div>
		</div>   
	</main><!-- #main -->
<?php
get_footer();
