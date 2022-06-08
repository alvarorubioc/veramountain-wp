<div class="card">  
    <div class="card--img">
        <?php the_post_thumbnail(''); ?>
    </div>

    <div class="card--content">
        <h3 class="text-h4"><a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php veramountain_posted_on(); ?>
        <p><?php echo get_the_excerpt();?></p> 
    </div> 
</div>
