<?php
/**
 * Block Name: Programs
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

global $post;
$posts = get_field('grid_pages');
$grid_columns = get_field('grid_columns_pages');

if($posts) :

?>
	<section class="grid-pages grid--columns-<?php echo $grid_columns; ?>  mt-4 mb-6">
		<?php foreach($posts as $post) : setup_postdata($post);
        
            get_template_part( 'template-parts/card', get_post_type() );
        
        endforeach; wp_reset_postdata(); ?>
	</section>

<?php endif; ?>

<style type="text/css">
    .grid--columns-<?php echo $grid_columns; ?> {
        grid-template-columns: repeat(<?php echo $grid_columns; ?>, 1fr);
    }    
</style>