<?php
/**
 * The template for displaying frontpage
 * 
 * Template name: Actividades Grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package veramountain
 */

get_header();

get_template_part( 'template-parts/hero', 'page' ); 

?>

	<main id="primary" class="site-main">
        
    <div><!-- #to content sticky filter on top while is on cards -->
        <?php

        get_template_part( 'template-parts/filter' ); 

        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order',
            'facetwp' => true, // we added this
        );


        $parent = new WP_Query( $args );

        if ( $parent->have_posts() ) : 
        
        echo '<div class="container grid grid-columns-3" id="actividades">';

        while ( $parent->have_posts() ) : $parent->the_post(); 
            
            get_template_part( 'template-parts/card' );
        
        endwhile; 

        echo'</div></div>';
        
        endif; wp_reset_postdata();
        
        get_template_part( 'template-parts/content', 'page' );
        
        ?>

	</main><!-- #main -->

<?php
get_footer();

