<?php
/*
* Template Name: Pagina Convocatorias
*/
?>
<?php  get_header();?>
<div class="page-title container">
    <div class="page-title__capa">
        <div class="page-title__container">
            <h3><?php echo wp_title(false); ?></h3>
        </div>
    </div>
</div>

<main class="main main-pages container main-posts">
    <div class="row justify-content-center">            
        <div class="main__l col-md-9 col-sm-12">
            <div class="institucional">
                <div class="institucional__title mb-0">
                    <h2>Convocatorias de Trabajo en la UGEL Quispicanchi</h2> 
                    <div class="linea-b"></div> 
                </div>
                <div class="institucional__content pt-0">
                    <div class="row m-0 justify-content-center">
                        <div class="col-md-11 p-0">
                            <div class="news__container mb-2 pt-0">
                            <?php
                                if (strtolower(get_the_title()) == 'convocatorias cas') {
                                    ec_query_tax(6,'convocatorias','categorias_convocatorias','cas','Convocatoria'); 
                                }   elseif (strtolower(get_the_title()) == 'convocatorias cap') {
                                        ec_query_tax(6,'convocatorias','categorias_convocatorias','cap','Convocatoria'); 
                                }   elseif (strtolower(get_the_title()) == 'convocatorias docentes') {
                                        ec_query_tax(6,'convocatorias','categorias_convocatorias','docentes','Convocatoria'); 
                                }   elseif (strtolower(get_the_title()) == 'convocatorias prácticas') {
                                        ec_query_tax(6,'convocatorias','categorias_convocatorias','practicas','Convocatoria'); 
                                }
                                    else {
                                        echo "Página No Encontrada";
                                }   
                            ?>   
                            </div>     
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</main>
<?php get_footer(); ?>