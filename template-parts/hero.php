<section id="hero">
    <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-12 col-md-8 entry-hero">
                <?php echo the_title( '<h1>', '</h1>' );?>
                <h2 class="text-h4 mb-5"><?php echo the_excerpt(); ?></h2>
            </div>
        </div>
    </div>   
</section>