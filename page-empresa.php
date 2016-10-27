<?php get_header(); ?>

<div class="title fixed">EMPRESA</div>
<div id="menu-icon" class="black fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="padding-top"></div>
    <div class="page-content-wrapper center-vertical">

        <div class="images-circle-wrapper">
            <div id="name_7" class="name">
                <a href="<?php echo get_site_url(); ?>/empresa/quienes-somos/">QUIENES
                        <div>SOMOS</div>
                </a>
            </div>
            <div id="name_8" class="name">
                <a href="<?php echo get_site_url(); ?>/empresa/hseq/">GESTIÓN INTEGRAL
                </a>
            </div>
            
            <div class="svgContainer">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 400 400">
                  <defs>
                    <clipPath id="svgPath7">
                        <path d="M200,0c-110.457,0 -200,89.543 -200,200c0,110.457 89.543,200 200,200l0,-100c-55.228,0 -100,-44.772 -100,-100c0,-55.228 44.772,-100 100,-100l0,-100Z"/>
                    </clipPath>
                    <clipPath id="svgPath8">
                        <path d="M200,0c110.457,0 200,89.543 200,200c0,110.457 -89.543,200 -200,200l0,-100c55.228,0 100,-44.772 100,-100c0,-55.228 -44.772,-100 -100,-100l0,-100Z"/>
                    </clipPath>
                    
                  </defs>

                  <a href="<?php echo get_template_directory_uri(); ?>/empresa/quienes-somos/">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php
                  $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_quienes_somos'));
                  $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium-large' );
                  $img_url = $img_src_arr[0];
                  echo $img_url;
                  ?>" x="0" y="0" width="200" height="400" clip-path="url(#svgPath7)" viewbox="0 0 200 400" class="imagesCircle" id="image_7"/>
                  </a>

                  <a href="<?php echo get_template_directory_uri(); ?>/empresa/hseq/">
                  <image preserveAspectRatio="xMidYMid slice" xlink:href="<?php
                  $img_id = fjarrett_get_attachment_id_by_url(get_field('imagen_hseq'));
                  $img_src_arr = wp_get_attachment_image_src( $img_id, 'medium-large' );
                  $img_url = $img_src_arr[0];
                  echo $img_url;
                  ?>" x="200" y="0" width="200" height="400" clip-path="url(#svgPath8)" viewbox="0 0 200 400" class="imagesCircle" id="image_8"/>
                  </a>


                </svg>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
