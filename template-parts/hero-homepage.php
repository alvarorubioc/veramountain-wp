<section id="hero">
    <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-12 col-md-6">
                <span class="text-h6">VERA MOUTAIN</span>
                <?php the_title( '<h1>', '</h1>' );?>
                <div class="text-h4"><?php echo the_excerpt(); ?></div>
                <div class="wp-block-buttons">
                    <?php 
                        $link_1 = get_field('btn_hero_1');
                        if( $link_1 ): 
                            $link_url = $link_1['url'];
                            $link_title = $link_1['title'];
                            $link_target = $link_1['target'];    
                            ?>    
                            <div class="wp-block-button"><a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
                    <?php endif; ?>
                    <?php 
                        $link_2 = get_field('btn_hero_2');
                        if( $link_2 ): 
                            $link_url = $link_2['url'];
                            $link_title = $link_2['title'];
                            $link_target = $link_2['target'];    
                            ?>    
                            <div class="wp-block-button"><a class="wp-block-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 center-xs">
                <div><img src="<?php echo get_template_directory_uri()?>/assets/icons/play-circle.svg"></div>  
                <?php echo do_shortcode( '[video_lightbox_youtube video_id="_HUMlOu3d_E" width="854" height="480" anchor="Ver video"]' );?>
            </div>
            
        </div>
    </div>
    <div class="hero__side">
        <ul class="social">
            <li>
                <a href="https://www.facebook.com/veramountain.barranquismo">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/facebook.svg">
                </a>
            </li>
            <li>
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
</section>
