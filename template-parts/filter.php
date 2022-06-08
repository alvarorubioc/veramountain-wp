
<aside class="dropdown container mt-8 mb-4" id="aside-filter">
    <button class="btn--secondary dropdown-btn mb-2" aria-expanded="false">
        <div class="dflex middle-xs center-xs">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/sliders-horizontal.svg" />
            <span class="uppercase"><?php esc_html_e( 'Filtrar por', 'veramountain' ); ?></span>
        <div>
    </button>
    
    <section class="aside-filter--items">
        <div>
            <div class="title-filter mb-05">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/map-pin.svg" />
                <strong class="uppercase"><?php esc_html_e( 'Ubicación', 'veramountain' ); ?></strong>
            </div>
            <?php echo facetwp_display( 'facet', 'ubicacion' ); ?>
        </div>
        <div>
            <div class="title-filter mb-05">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/watch.svg" />
                <strong class="uppercase"><?php esc_html_e( 'Duración', 'veramountain' ); ?></strong>
            </div>
            <?php echo facetwp_display( 'facet', 'duracion' ); ?>
        </div>
        <div>
            <div class="title-filter mb-05">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/zap.svg" />
                <strong class="uppercase"><?php esc_html_e( 'Dificultad', 'veramountain' ); ?></strong>
            </div>
            <?php echo facetwp_display( 'facet', 'dificultad' ); ?>
        </div>
        <div>
            <div class="title-filter mb-05">
                <strong class="uppercase"><?php esc_html_e( 'Precio (€)', 'veramountain' ); ?></strong>
            </div>
            <?php echo facetwp_display( 'facet', 'precio' ); ?>
        </div>
    </section>
</aside>