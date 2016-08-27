<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) :
the_post(); ?>
<div class="title fixed">
    <?php the_title(); ?>
    <div class="description"><?php the_excerpt(); ?>
    </div>
    <div class="quarry-header-image"
         style=" background: url(<?php echo get_template_directory_uri(); ?>/img/proyecto.svg) center bottom no-repeat; background-size: cover;"></div>
</div>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<div class="popup general-info hide-z-index" id="full-carousel">
    <div class="group">
        <div class="carousel">
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/20150311_124551.jpg">
            </div>
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/20160310_075037.jpg">
            </div>
            <div class="carousel-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/_MG_7748.jpg">
            </div>
        </div>
        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right" onclick="goRight()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" id="full" onclick="exitFull()">-->
    </div>
    <div class="group">
        <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" onclick="goLeft()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/full_exit.svg" class="control" onclick="exitFull()">
        <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" onclick="goRight()">
    </div>
</div>

<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <div class="general-info">
            <div class="group">
                <div class="label">ENTIDAD CONTRATANTE</div>
                <div class="info"><?php the_field('entidad_contratante'); ?>
                </div>
            </div>
            <div class="group">
                <div class="label">CONTRATISTA</div>
                <div class="info"><?php the_field('contratista'); ?></div>
            </div>
            <div class="group">
                <div class="label">UBICACIÓN</div>
                <div class="info"><?php echo get_field('ubicacion')['address']; ?></div>
            </div>
            <div class="group">
                <div class="label">FECHA DE EJECUCIÓN</div>
                <div class="info"><?php the_field('fecha_de_ejecucion'); ?></div>
            </div>
            <div class="group">
                <div class="label">ACTIVIDADES EJECUTADAS</div>
                <div class="info"><?php the_field('actividades_ejecutadas'); ?></div>
            </div>
            <div class="group">
                <?php $images = get_attached_media('image'); ?>
                <div class="carousel">
                    <?php foreach($images as $image) { ?>
                    <div class="img-container"
                         style="background: url(<?php echo $image->guid; ?>) center center no-repeat; background-size: cover;">
                    </div>
                    <?php } ?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/left_white.svg" class="control" id="left"
                     onclick="goLeft()">
                <img src="<?php echo get_template_directory_uri(); ?>/img/right_white.svg" class="control" id="right"
                     onclick="goRight()">
                <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control" id="full"
                     onclick="goFull()">
            </div>
            <!--<div class="group">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/left.svg" class="control">
                    <div class="center"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/full.svg" class="control">
                    <div class="center"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/right.svg" class="control">

                </div>-->
        </div>

        <div class="section-div-top"></div>
        <div class="section">

            <?php the_content(); ?>

        </div>
        <div class="section-div-bottom"></div>
        <div id="map">
            <script type="text/javascript">
                var selectedLocation = {
                    lat: <?php echo get_field('ubicacion')['lat']; ?>,
                    lng: <?php echo get_field('ubicacion')['lng']; ?>
                };
            </script>
            <div id="map-container"></div>
            <?php endwhile;
            else: ?>
                <?php _e('Sorry, no pages matched your criteria.', 'textdomain'); ?>
            <?php endif; ?>
            <?php get_footer(); ?>
