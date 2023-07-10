<?php 
/*
* Template Name: Pagina institucional
*/
?>
<?php  get_header();?>
<?php
    while(have_posts()): the_post();
?>
<?php get_template_part('template-parts/title', 'page'); ?>
<main class="main main-pages container">
    <div class="row justify-content-between">  
        <div class="col-md-9 col-sm-12">
            <div class="row mr-md-1">
                <div class="main__l col-md-12 col-sm-12 mb-2">
                    <div class="institucional">
                        <div class="institucional__title">
                            <h2>Unidad De Gestión Educativa Local Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <div class="institucional__content-img">
                                        <img src="<?php echo get_post_meta(get_the_ID(), 'ec_institucional_img', true); ?>" alt="img_ugel">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="institucional__content-text">
                                        <p>
                                          <?php echo get_post_meta(get_the_ID(), 'ec_institucional_inf', true); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="mision-vision">
                        <h3>Misión - Visión</h3>
                        <div class="linea-b"></div> 
                        <div class="row m-0 justify-content-center">
                            <div class="mision col-md-10 col-sm-12">
                                <div class="mision__title">
                                    <p>Como institución</p>   
                                    <h4>Nuestra Misión</h4>
                                    <div class="icono">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                </div>
                                <div class="mision__text">
                                    <p>
                                      <?php echo get_post_meta(get_the_ID(), 'ec_institucional_mision', true); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="mision col-md-10 col-sm-12">
                                <div class="mision__title">
                                    <p class="">al 2024</p>   
                                    <h4>Nuestra Visión</h4>
                                    <div class="icono">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="mision__text">
                                    <p>
                                      <?php echo get_post_meta(get_the_ID(), 'ec_institucional_vision', true); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>        
        <?php get_sidebar(); ?>
    </div>
</main> 
<?php endwhile; ?>
<?php get_footer(); ?>