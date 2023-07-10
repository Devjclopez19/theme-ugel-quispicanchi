<?php  get_header();?>
<div class="page-title container">
    <div class="page-title__capa">
        <div class="page-title__container">
            <h3>Error 404</h3>
        </div>
    </div>
</div>

<main class="main main-pages container main-posts">
    <div class="row justify-content-center">            
    <div class="col-md-9 col-sm-12">
                <div class="row mr-md-1">
                    <div class="main__l col-md-12 col-sm-12">
                        <div class="row m-0 justify-content-center">
                            <div class="col-md-11 post">
                                <div class="post-content">
                                    <?php if(have_posts()): while(have_posts()): the_post();?>
                                    <?php the_content();?>
                                    <?php endwhile; ?>
                                    <?php else:?>
                                    <div class="error-404">
                                    <h3><b>¡Vaya! </b> No ha sido posible encontrar esta página <i class="far fa-sad-tear"></i></h3>
                                    <div class="row mt-4 justify-content-center">
                                            <div class="acciones col-md-5">
                                                <h5>La página que buscas no está disponible por algunas de las siguientes razones:</h5>
                                                <ol>
                                                    <li>El vínculo que conduce a esta pagina es incorrecto o demasiado antiguo.</li>
                                                    <li>Has llegado hasta aquí por medio de un marcador vinculado a una página que ha cambiado de ubicación.</li>
                                                </ol>
                                                <p>Ahora puede acceder a la página principal desde el siguiete botón.</p>
                                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-cta">Inicio</a>
                                            </div>
                                            <div class="imagen col-md-6">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/error404.png" alt="">
                                            </div>
                                        </div>
                                    </div>            
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php get_sidebar(); ?>
    </div>
</main>    
<!-- Main Section end -->
<?php get_footer(); ?>
