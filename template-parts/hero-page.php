<section id="hero">
    <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-12 col-md-8 entry-hero">
                <span class="text-h6">VERA MOUTAIN</span>

                <?php
                    if (get_field('hero_title') ) {
                        $hero_title  = get_field('hero_title');
                        echo '<h1>' .$hero_title. '</h1>';
                    }
                    else
                        echo the_title( '<h1>', '</h1>' );
                ?>
                <h2 class="text-h4 mb-5"><?php echo the_excerpt(); ?></h2>

                <?php 
                    $link_1 = get_field('btn_hero_1');
                    if( $link_1 ): 
                        $link_url = $link_1['url'];
                        $link_title = $link_1['title'];
                        $link_target = $link_1['target'];    
                        ?>    
                        <div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
                <?php endif; ?>
                <?php 
                    $link_2 = get_field('btn_hero_2');
                    if( $link_2 ): 
                        $link_url = $link_2['url'];
                        $link_title = $link_2['title'];
                        $link_target = $link_2['target'];    
                        ?>    
                        <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>   
</section>