<?php
/*
* Template Name: Pagina Contacto
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
                        <div class="institucional__title mb-0">
                            <h2>PONTE EN CONTACTO CON NOSOTROS</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="contacto col-md-11">
                                    <div class="contacto__description">
                                        <p>Para comunicarse con nosotros, ponemos a disposición los distintos medios por los cuales puede hacernos llegar sus comentarios, sugerencias o consultas.</p>
                                    </div> 
                                    <div class="contacto__container">
                                        <div class="row m-0 justify-content-center p-0">
                                            <div class="col-md-5 p-0 pr-md-2">
                                                <div class="contacto__container-detalles">
                                                    <div class="info-title">
                                                        <p class="m-0">Información de contacto</p> 
                                                    </div> 
                                                    <div class="linea-contacto"></div>
                                                    <?php 
                                                        $opciones = get_option('ec_theme_options');
                                                        $direccion = $opciones['direccion_sitio'];
                                                        $correo = $opciones['correo_sitio'];
                                                        $telefono = $opciones['telefono_sitio'];
                                                        $facebook = $opciones['facebook_sitio'];
                                                        $youtube = $opciones['youtube_sitio'];
                                                        $instagram = $opciones['instagram_sitio'];
                                                    ?>
                                                    <div class="info-contacto">
                                                        <p>Direccion:</p> 
                                                        <p><i class="fas fa-street-view"></i> <?php echo $direccion; ?></p>
                                                    </div>
                                                    <div class="info-contacto">
                                                        <p>Teléfonos:</p> 
                                                        <p><i class="fas fa-phone-square"></i> <?php echo $telefono; ?></p>
                                                    </div>
                                                    <div class="info-contacto">
                                                        <p>Correo Electronico:</p> 
                                                        <p><i class="fas fa-mail-bulk"></i> <?php echo $correo; ?></p>
                                                    </div>
                                                    <div class="info-contacto">
                                                        <p>Redes Sociales:</p> 
                                                        <div class="redes-sociales">
                                                            <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                                            <a href="<?php echo $youtube; ?>" target="_blank"><i class="fab fa-youtube-square"></i></a>
                                                            <a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 p-0 pr-md-2">
                                                <div class="contacto__container-mensaje">
                                                    <div class="info-title">
                                                        <p class="m-0">Envianos un Mensaje</p> 
                                                    </div>
                                                    <div class="linea-contacto"></div>
                                                    <div class="form-contact">
                                                      <?php the_content(); ?>
                                                    </div>
                                                </div>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="main__r col-md-3 col-sm-12 mb-2">
            <div class="sidebar">
                <div class="sidebar__widget">
                    <div class="sidebar__title">
                        <p>Últimas Noticias</p>
                    </div>
                    <div class="sidebar__content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> 
                                    Titulo de la publicacion con mas contenido </a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="sidebar__widget">
                    <div class="sidebar__title">
                        <p>Últimos Comunicados</p>
                    </div>
                    <div class="sidebar__content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> 
                                    Titulo de la publicacion con mas contenido </a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="sidebar__widget">
                    <div class="sidebar__title">
                        <p>Últimas Convocatorias</p>
                    </div>
                    <div class="sidebar__content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> 
                                    Titulo de la publicacion con mas contenido </a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="sidebar__widget">
                    <div class="sidebar__title">
                        <p>Últimas Cotizaciones</p>
                    </div>
                    <div class="sidebar__content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i> Titulo de la publicacion con mas contenido </a>
                            </li>  
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> 
                                    Titulo de la publicacion con mas contenido </a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> 
<?php endwhile; ?>
<?php get_footer(); ?>