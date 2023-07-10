<?php 
/*
* Template Name: Pagina Director
*/
?>
<?php  get_header();?>
<?php
    while(have_posts()): the_post();
?>
<?php get_template_part('template-parts/title', 'page'); ?>
<main class="main main-pages container">
    <div class="row justify-content-center">   
        <div class="col-md-9 col-sm-12">
            <div class="row mr-md-1">
                <div class="main__l col-md-12 col-sm-12 mb-2">
                    <div class="institucional">
                        <div class="institucional__title">
                            <h2>Dirección General</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="col-md-4 col-sm-12">
                                    <div class="institucional__content-img">
                                        <img src="<?php echo get_post_meta(get_the_ID(), 'ec_director_imagen', true); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="director">
                                        <h3><?php echo get_post_meta(get_the_ID(), 'ec_director_nombre', true); ?></h3>
                                        <p><i class="fas fa-envelope-square"></i> <?php echo get_post_meta(get_the_ID(), 'ec_director_correo', true); ?></p>
                                        <p class="mensaje">
                                          <?php echo get_post_meta(get_the_ID(), 'ec_director_info', true); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <?php 
                                      $des = get_post_meta(get_the_ID(), 'ec_director_descripcion', true);
                                      foreach($des as $de):
                                    ?>
                                    <p class="director-d">
                                      <?php echo $de['texto']; ?>
                                    </p>
                                    <?php
                                      endforeach; 
                                    ?>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="mision-vision">
                        <h3>Funciones Generales</h3>
                        <div class="linea-am"></div> 
                        <div class="row m-0 justify-content-center">
                            <div class="mision col-md-10">
                                <div class="funciones-director">
                                    <ul>
                                      <?php 
                                        $funciones = get_post_meta(get_the_ID(), 'ec_director_funciones', true);
                                        foreach($funciones as $funcion):
                                      ?>
                                      <li style="text-align:justify;"><?php echo $funcion['funcion']; ?></li>
                                      <?php
                                        endforeach; 
                                      ?>
                                    </ul>
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