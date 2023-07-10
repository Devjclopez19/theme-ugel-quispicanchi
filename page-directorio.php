<?php 
/*
* Template Name: Pagina Directorio
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
                            <h2><b>DIRECTORIO</b> UGEL QUISPICANCHI</h2> 
                            <div class="linea-am"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <?php
                                $directorios = get_post_meta(get_the_ID(),'ec_directorio_grupo_directorio', true);
                                $n = 1;
                                foreach($directorios as $directorio):
                                ?>
                                <div class="directorio col-md-6">
                                    <div class="directorio__content">
                                        <div class="directorio__img">
                                            <?php if($directorio['imagen']):?>
                                            <img src="<?php  echo $directorio['imagen']; ?>" alt="img-dir" class="img-fluid">
                                            <?php else:?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt="logo_ugel" class="img-fluid">
                                            <?php endif; ?>
                                            <div class="ver-imagen">
                                                <button data-toggle="modal" data-target="#modal-img-<?php echo $n; ?>"><i class="fas fa-search-plus"></i> ver imagen</button>
                                            </div>
                                        </div>
                                        <div class="directorio__text">
                                            <p class="directorio__text-nombre">
                                              <?php echo $directorio['nombre']; ?>
                                            </p>
                                            <p class="directorio__text-cargo">
                                              <?php echo $directorio['cargo']; ?>
                                            </p>
                                            <!-- <p class="directorio__text-tel">
                                                <i class="fas fa-phone-square"></i>
                                                984645870
                                            </p> -->
                                            <p class="directorio__text-mail">
                                                <i class="fas fa-envelope-square"></i>
                                                <?php echo $directorio['correo']; ?>
                                            </p>
                                        </div>
                                        <div class="modal fade" id="modal-img-<?php echo $n;?>" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $directorio['nombre']; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <img src="<?php echo $directorio['imagen']; ?>" alt="" style="max-width: 80%;">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $n++; endforeach; ?>
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