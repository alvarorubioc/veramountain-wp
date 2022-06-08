<div class="card">  
    <div class="card--img">
        <?php the_post_thumbnail(''); ?>
    </div>

    <div class="card--content">
        <h3 class="text-h4"><a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo get_the_excerpt();?></p> 
    </div> 
    <div class="card--footer">
        <div>
            <?php if( get_field('precio_actividad') ): ?>
                <?php the_field('precio_actividad', $post->ID);?>&nbsp;€
            <?php endif; ?>
        </div>
        <div>
            <?php if( get_field('duracion_actividad') ): ?>
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/watch.svg" />
                <?php the_field('duracion_actividad', $post->ID);?>
            <?php endif; ?>    
        </div>
        <div>
            <?php if( get_field('dificultad_actividad') ): ?>
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/zap.svg" />
                <?php the_field('dificultad_actividad',$post->ID);?>
            <?php endif; ?> 
        </div>
    </div> 
</div>
