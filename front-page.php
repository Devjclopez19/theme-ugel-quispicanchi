<?php get_header(); ?>
<?php
  $opciones = get_option('ec_homepage_campos');
  $director = $opciones['ec_homepage_nombre'];
  $imagen = $opciones['ec_homepage_imagen'];
  $enlaces_e = $opciones['ec_homepage_enlaces_e'];
  $videos = $opciones['ec_homepage_videos'];
  $docs = $opciones['ec_homepage_docs'];
?>
<!-- Main Section: news, director, links,comunicados -->
<main class="main container">
    <div class="row">           
        <div class="main__l col-md-9 col-sm-12 mb-2">
            <section class="news-p mb-lg-0 mb-4">
                <div class="title-section">                      
                    <h3 class="titulos text-md-center">Últimas Noticias</h3>
                </div>
                <div class="news-p__container mt-2">
                    <div class="slider-n">
                    <?php ec_query_noticias(6); ?>
                    </div>
                </div>
                <div class="news__button my-2">
                    <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="btn-cta-more">Ver todas las noticias</a>
                </div>
            </section>
            <div class="row p-0">
                <div class="col-md-4 col-sm-12 pr-md-0">
                    <section class="news">
                        <div class="title-section">                      
                            <h3 class="text-center titulos">Comunicados</h3>
                        </div>
                        <div class="news__container">
                          <?php ec_query_comunicados(3); ?>
                        </div>
                        <div class="news__button my-2">
                            <a href="<?php echo esc_url(home_url('/comunicados')); ?>" class="btn-cta-more">Ver todos los comunicados</a>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-12 pr-md-0">
                    <section class="news">
                        <div class="title-section">                      
                            <h3 class="text-center titulos">Convocatorias</h3>
                        </div>
                        <div class="convocatorias__container">
                          <?php ec_query_convocatorias(4); ?>
                        </div>
                        <div class="news__button my-2">
                            <a href="<?php echo esc_url(home_url('/convocatorias')); ?>" class="btn-cta-more">Ver todas las Convocatorias</a>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-12">
                    <section class="news">
                        <div class="title-section">                      
                            <h3 class="text-center titulos">Cotizaciones</h3>
                        </div>
                        <div class="cotizaciones__container">
                        <?php ec_query_cotizaciones(4); ?>
                        </div>
                        <div class="news__button my-2">
                            <a href="<?php echo esc_url(home_url('/cotizaciones')); ?>" class="btn-cta-more">Ver todas las Cotizaciones</a>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-md-5 col-sm-12 pb-3">
                    <section class="videos">
                        <div class="title-section">                      
                            <h3 class="text-center titulos" style="font-size: 1.5rem;">Videos</h3>
                            <!-- <div class="linea-titulo"></div> -->
                        </div>
                        <div class="videos-content">
                            <!-- SLIDER VIDEOS -->
                            <div class="slider-videos">
                                <div class="slider slider-video">
                                <?php foreach($videos as $video): ?>
                                    <div>
                                        <div class="slider-video__content">
                                            <iframe src="<?php echo $video['url_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>  
                                <?php endforeach; ?>  
                                </div>    
                                <div class="slider slider-video-nav">
                                    <?php foreach($videos as $video): ?>
                                    <div>
                                        <div class="slider-video-nav__img">
                                            <?php 
                                              $short = substr($video['url_video'], 30);
                                            ?>
                                            <img src="http://img.youtube.com/vi/<?php echo $short; ?>/0.jpg" alt="">
                                        </div>
                                    </div>
                                    <?php endforeach; ?>  
                                </div>
                            </div>
                            <!-- SLIDER VIDEOS -end -->
                        </div>
                    </section>
                </div>
                <div class="col-md-3 col-sm-12 p-md-0">
                    <section class="documentos">
                        <div class="title-section">                      
                            <h3 class="text-center titulos" style="font-size: 1.25rem; padding: 7px 4px;">Documentos de Gestión</h3>
                        </div>
                        <div class="documentos__content">
                        <?php foreach($docs as $doc): ?>        
                                <div class="documentos__doc">
                                    <div class="doc-icon">
                                        <a href="<?php echo $doc['file_doc']; ?>" target="_blank"><i class="fa fa-download"></i> Descargar</a>
                                        <img src="<?php echo $doc['img_doc']; ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>                
                </div>
                <div class="col-md-4 col-sm-12 d-none d-lg-block">
                    <div class="title-section mb-3">                      
                        <h3 class="text-center titulos" style="font-size: 1.4rem;">Siguenos en Facebook</h3>
                    </div>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063812064275&tabs=timeline&width=290&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>    
        <div class="main__r col-md-3 col-sm-12 mb-2 d-none d-lg-block side-right">
            <div class="lateral-dir">
                <h3 class="text-center titulo-dir">Director de la UGEL Quispicanchi</h3>
                <!-- <div class="linea-titulo"></div> -->
                <div class="director mb-4">
                    <div class="director__container">
                        <div class="director__container-img">
                        <?php if($imagen):?>
                            <img src="<?php echo $imagen; ?>" alt="img-director" class="img-fluid">
                            <?php else:?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/user.png" alt="img-director" class="img-fluid">
                            <?php endif;?>
                        </div>
                        <div class="director__container-text">
                            <p class="nombre"><?php echo $director; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="enlaces-externos">
                <!-- <div class="enlaces-externos-content mb-3">
                    <div class="enlace-titulo">
                        <a href="#">Siguenos en Facebook</a>
                    </div>
                    <div class="enlace-contenido">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063812064275&tabs=timeline&width=290&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div> -->
                <div class="enlaces-externos-content mb-3">
                <?php foreach($enlaces_e as $enlace): ?>
                    <div class="enlace-titulo">
                        <a href="<?php echo $enlace['link_enlace']; ?>" target="_blank"><?php echo $enlace['titulo_enlace']; ?></a>
                    </div>
                    <div class="enlace-contenido">
                        <a href="<?php echo $enlace['link_enlace']; ?>" target="_blank">
                            <img src="<?php echo $enlace['img_enlace']; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
        </div>        
    </div>
</main>    
<!-- Main Section end -->
<?php get_footer(); ?>