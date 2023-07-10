<?php
function ec_query_noticia_principal($cantidad = -1) {
    $args = array(
        'post_type' => 'noticias',
        'posts_per_page' => $cantidad,
        'tax_query' => array(
            array(
                'taxonomy' => 'categorias_noticias',
                'field'    => 'slug',
                'terms'    => 'noticia principal'
            )
        )
    );
    $img = get_template_directory_uri().'/img/img_noticia.png'; 
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div class="news-p__new row m-0">
            <div class="col-md-4 col-sm-12 news-p__new-img">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                        $imagen = get_the_post_thumbnail_url(get_the_ID(), 'mediano'); 
                        if($imagen) {
                            $image = $imagen;
                        }else {
                            $image = $img;
                        }
                    ?>
                    <img src="<?php  echo $image; ?>" alt="" class="img-fluid">
                </a>
            </div>
            <div class="news-p__new-text col-md-8 col-sm-12">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="news-date"> <i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></p>
                <p>
                    <?php 
                        if(has_excerpt()){
                            echo wp_trim_words(get_the_excerpt(),25,'...');
                        }
                    ?>
                </p>
                <p class="text-right pr-2"><a href="<?php the_permalink(); ?>" class="btn-cta">Ver Noticia</a></p>
            </div>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
function ec_query_noticias($cantidad = -1) {
    $args = array(
        'post_type' => 'noticias',
        'posts_per_page' => $cantidad
    );
    $img = get_template_directory_uri().'/img/noticia.png'; 
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div>
            <div class="news-p__new">
                <div class="news-p__new-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            $imagen = get_the_post_thumbnail_url(get_the_ID(), 'mediano'); 
                            if($imagen) {
                                $image = $imagen;
                            }else {
                                $image = $img;
                            }
                        ?>
                        <img src="<?php  echo $image; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="news-p__new-text">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="news-date"> <i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></p>
                    <p class="news-p__new-excerpt">
                        <?php 
                            if(has_excerpt()){
                                echo wp_trim_words(get_the_excerpt(),15,'...');
                            }
                        ?>
                    </p>
                    <p class="text-right pr-2 m-0"><a href="<?php the_permalink(); ?>" class="btn-cta">Ver Noticia</a></p>
                </div>
            </div>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
function ec_query_comunicados($cantidad = -1) {
    $args = array(
        'post_type' => 'comunicados',
        'posts_per_page' => $cantidad,
    );
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div class="news__new">
            <div class="news__new-text">
                <p class="news-date"> <i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></p>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="news_excerpt"> 
                    <?php 
                        if(has_excerpt()){
                            echo wp_trim_words(get_the_excerpt(),15,'...');
                        }
                    ?>
                </p>
                <p class="text-right pr-2 m-0"><a href="<?php the_permalink(); ?>" class="btn-cta-l">Ver Comunicado</a></p>
            </div>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
function ec_query_convocatorias($cantidad = -1) {
    $args = array(
        'post_type' => 'convocatorias',
        'posts_per_page' => $cantidad,
    );
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div class="convocatorias__content">
            <div class="convocatorias__content-date">
                <span class="d-block"><i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></span>
            </div>
            <h5>
                <a href="<?php the_permalink(); ?>">
                    <i class=" fa fa-briefcase"></i> 
                    <?php the_title(); ?>
                </a>
            </h5>
            <p class="conv-date"> 
            <?php
                $terms = get_the_terms( get_the_ID(), 'categorias_convocatorias' );
                // Loop through them and dislay them
                foreach($terms as $term) {
                    if($term->name != 'Convocatorias'){ ?>
                <a href="<?php echo esc_url(home_url('/convocatorias-'. strtolower($term->name))); ?>" class="tag">
                    <?php echo $term->name; ?>
                </a>
            <?php
                    }
            }?>
                <a href="<?php the_permalink(); ?>" class="btn btn-cta-l">Ver Convocatoria</a>
            </p>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
function ec_query_cotizaciones($cantidad = -1) {
    $args = array(
        'post_type' => 'cotizaciones',
        'posts_per_page' => $cantidad,
    );
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div class="cotizaciones__content">
            <div class="cotizaciones__content-icono">
                <img src="<?php echo get_template_directory_uri(); ?>/img/clipboard.png" class="img-fluid">
                <h5>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h5>
            </div>
            <p class="conv-date"> 
                <span class="d-block"><i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></span>
                <a href="<?php the_permalink(); ?>" class="btn btn-cta-l">Ver Cotización</a>
            </p>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
function ec_query_oficios($cantidad = -1) {
    $args = array(
        'post_type' => 'oficios',
        'posts_per_page' => $cantidad,
    );
    $clases = new WP_Query($args);

    if($clases->have_posts()):

    while( $clases->have_posts()): $clases->the_post(); ?>
        <div class="news__new">
            <div class="news__new-text">
                <p class="news-date"> <i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></p>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="news_excerpt"> 
                    <?php 
                        if(has_excerpt()){
                            echo wp_trim_words(get_the_excerpt(),15,'...');
                        }
                    ?>
                </p>
                <p class="text-right pr-2 m-0"><a href="<?php the_permalink(); ?>" class="btn-cta-l">Ver Oficio</a></p>
            </div>
        </div>
    <?php
    endwhile; wp_reset_postdata();
    else: ?>
    <p>Criterio no encontrado</p>
    <?php endif;
}
// Querie para mostrar documentos de gestión en el front-page
function ec_query_docs($cantidad = -1) {
    //$args = array('page-template' => 'page-documentos.php')
    $docs = get_post_meta(137,'ec_documentos_docs', true);
    
    foreach($docs as $doc): ?>
        <div class="documentos__doc">
            <div class="doc-icon">
                <a href="<?php echo $doc['file_doc']; ?>" target="_blank"><i class="fa fa-download"></i> Descargar</a>
                <img src="<?php echo $doc['img_doc']; ?>" alt="">
            </div>
        </div>
    <?php endforeach;
}
/** Querie ue muestra las entradas filtradas por categoria y taxonomias*/
function ec_query_tax($cantidad = -1,$post_type,$tax = '',$tags ='',$more = '') {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if($tax != '' || $tags != '') {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $cantidad,
            'paged' => $paged,
            'tax_query' => array(
                array(
                    'taxonomy' => $tax,
                    'field'    => 'slug',
                    'terms'    => $tags
                ),
            ),
        );
        if($tags == 'cas') {
            $img = get_template_directory_uri().'/img/cas.png';
        } elseif($tags == 'cap') {
            $img = get_template_directory_uri().'/img/cap.png'; 
        } elseif($tags == "docentes"){
            $img = get_template_directory_uri().'/img/docente.png';
        } elseif($tags == 'practicas') {
            $img = get_template_directory_uri().'/img/practicas.png'; 
        } else {
            $img = get_template_directory_uri().'/img/convocatoria.png';
        }
    } else {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $cantidad,
            'paged' => $paged,
        );
        if($post_type == 'noticias') {
            $img = get_template_directory_uri().'/img/noticia.png';
        } elseif($post_type == 'comunicados') {
            $img = get_template_directory_uri().'/img/comunicado.png'; 
        } elseif($post_type == 'convocatorias') {
            $img = get_template_directory_uri().'/img/convocatoria.png'; 
        } elseif($post_type == 'cotizaciones') {
            $img = get_template_directory_uri().'/img/cotizaciones.png'; 
        } elseif($post_type == 'oficios') {
            $img = get_template_directory_uri().'/img/oficios.png'; 
        } else {
            $img = get_template_directory_uri().'/img/bg1.png';
        }
    }

    $clases = new WP_Query($args);

    if($clases->have_posts()): ?>
    <div class="news__container my-2">
    <?php
    while( $clases->have_posts()): $clases->the_post(); 
    #printf('<pre>%s</pre>',var_export(get_post_custom(get_the_ID()), true));
    ?>
        <div class="posts__new">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="posts__new-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                            $imagen = get_the_post_thumbnail_url(get_the_ID(), 'mediano'); 
                            if($imagen) {
                                $image = $imagen;
                            }else {
                                $image = $img;
                            }
                            ?>
                            <img src="<?php  echo $image; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 pl-md-0">
                    <div class="posts__new-text">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="posts-date"> <i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></p>
                        <p class="posts_excerpt">
                            <?php 
                                if(has_excerpt()){
                                    echo wp_trim_words(get_the_excerpt(),25,'...');
                                }
                            ?>
                        </p>
                        <p class="pr-2 m-0 text-right"><a href="<?php the_permalink(); ?>" class="btn-cta">Ver Noticia</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile; 
    /** PAGINATION BOOTSTRAP */    
    ?>
    </div>
    <?php else:?>
    <div class="news__container my-2">No hay contenido disponible</div>
    <?php endif; ?>
    <div class="news__pagination">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(function_exists('bootstrap_pagination')){
                        bootstrap_pagination($clases);
                    }
                ?>
            </div>
        </div> 
    </div>    
    <?php    
    #echo paginate_links(array('total' => $clases->max_num_pages));    
    wp_reset_postdata();    
}
?>