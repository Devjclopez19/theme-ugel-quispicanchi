<?php
/*
* Template Name: Pagina Cotizaciones
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
        <div class="col-md-9 col-sm-12">
            <div class="row mr-md-1">
                <div class="main__l col-md-12 col-sm-12 p-0">
                    <div class="institucional">
                        <div class="institucional__title mb-0">
                            <h2>Cotizaciones para la UGEL Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content pt-0">
                            <div class="row m-0 justify-content-center">
                                <div class="col-md-11 p-0">
                                    <div class="posts__container my-2">
                                        <?php ec_query_tax(5,'cotizaciones','','','Cotización');  ?>
                                    </div>     
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
<?php get_footer(); ?>