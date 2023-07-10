<?php 
/*
* Template Name: Pagina Gestión Institucional
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
                <div class="main__l col-md-12 col-sm-12">
                    <div class="institucional">
                        <div class="institucional__title mb-0">
                            <h2>Area de Gestión Institucional - UGEL Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="areas col-md-11 p-0">
                                    <div class="areas__container">
                                        <div class="areas__componentes">
                                            <p>El area de Gestión Institucional está compuesto por las siguientes oficinas y personal de: </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#jefatura">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Jefatura AGI
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#asesoria">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Asesoría Jurídica
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#secretario-aj">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Secretaría de Asesoría Jurídica
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#estadistica">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Estadística
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#racionalizacion">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Racionalizacion
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#infraestructura">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Infraestructura
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#secre">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Secretaría CPPADD
                                                    </a>
                                                </li>
                                            </ul> 
                                        </div>
                                        <div class="area__content" id="jefatura">
                                            <div class="area__content-title">
                                                <h6>Jefatura Área de Gestión Institucional</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_jefatura', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-jefatura"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_jefatura', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_jefatura', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_jefatura', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-jefatura" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_jefatura', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_jefatura', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-jefatura" aria-expanded="true" aria-controls="f-jefatura">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionD">
                                                        <div id="f-jefatura" class="collapse" aria-labelledby="headingOne" data-parent="#accordionD">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_jefatura = get_post_meta(get_the_ID(),'ec_agi_grupo_area_jefatura', true);
                                                                    if($funciones_jefatura != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_jefatura as $funcion) {
                                                                            echo "<li>".$funcion['funcion']."</li>";
                                                                        }
                                                                        echo "</ol>";
                                                                    } else {
                                                                        echo "<p>No hay funciones para mostrar.</p>";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area__content" id="asesoria">
                                            <div class="area__content-title">
                                                <h6>Jefe de Asesoría Jurídica</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_aj', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-secretaria"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_aj', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_aj', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_aj', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-secretaria" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_aj', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_aj', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-secretaria" aria-expanded="true" aria-controls="f-secretaria">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionS">
                                                        <div id="f-secretaria" class="collapse" aria-labelledby="headingOne" data-parent="#accordionS">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_asesoria = get_post_meta(get_the_ID(),'ec_agi_grupo_area_aj', true);
                                                                    if($funciones_asesoria != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_asesoria as $funcion) {
                                                                            echo "<li style='text-align: justify'>".$funcion['funcion']."</li>";
                                                                        }
                                                                        echo "</ol>";
                                                                    } else {
                                                                        echo "<p>No hay funciones para mostrar.</p>";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area__content" id="secretario-aj">
                                            <div class="area__content-title">
                                                <h6>Secretaría de Asesoría Jurídica</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_saj', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-personal"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_saj', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_saj', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_saj', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-personal" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_saj', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_saj', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-personal" aria-expanded="true" aria-controls="f-personal">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionpersonal">
                                                        <div id="f-personal" class="collapse" aria-labelledby="headingOne" data-parent="#accordionpersonal">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_secretaria = get_post_meta(get_the_ID(),'ec_agi_grupo_area_saj', true);
                                                                if($funciones_secretaria != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_secretaria as $funcion) {
                                                                        echo "<li style='text-align: justify'>".$funcion['funcion']."</li>";
                                                                    }
                                                                    echo "</ol>";
                                                                } else {
                                                                    echo "<p>No hay funciones para mostrar.</p>";
                                                                }
                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="area__content" id="estadistica">
                                            <div class="area__content-title">
                                                <h6>Estadística</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_estadistica', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-estadistica"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_estadistica', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_estadistica', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_estadistica', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-estadistica" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_estadistica', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_estadistica', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-estadistica" aria-expanded="true" aria-controls="f-estadistica">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionD">
                                                        <div id="f-estadistica" class="collapse" aria-labelledby="headingOne" data-parent="#accordionD">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_estadistica = get_post_meta(get_the_ID(),'ec_agi_grupo_area_estadistica', true);
                                                                    if($funciones_estadistica != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_estadistica as $funcion) {
                                                                            echo "<li>".$funcion['funcion']."</li>";
                                                                        }
                                                                        echo "</ol>";
                                                                    } else {
                                                                        echo "<p>No hay funciones para mostrar.</p>";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area__content" id="racionalizacion">
                                            <div class="area__content-title">
                                                <h6>Racionalización</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_racionalizacion', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-racionalizacion"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_racionalizacion', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_racionalizacion', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_racionalizacion', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-racionalizacion" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_racionalizacion', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_racionalizacion', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-racionalizacion" aria-expanded="true" aria-controls="f-racionalizacion">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionD">
                                                        <div id="f-racionalizacion" class="collapse" aria-labelledby="headingOne" data-parent="#accordionD">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_racionalizacion = get_post_meta(get_the_ID(),'ec_agi_grupo_area_racionalizacion', true);
                                                                    if($funciones_racionalizacion != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_racionalizacion as $funcion) {
                                                                            echo "<li>".$funcion['funcion']."</li>";
                                                                        }
                                                                        echo "</ol>";
                                                                    } else {
                                                                        echo "<p>No hay funciones para mostrar.</p>";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area__content" id="infraestructura">
                                            <div class="area__content-title">
                                                <h6>Infraestructura</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_infraestructura', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-infraestructura"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_infraestructura', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_infraestructura', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_infraestructura', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-infraestructura" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_infraestructura', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_infraestructura', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-infraestructura" aria-expanded="true" aria-controls="f-infraestructura">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionD">
                                                        <div id="f-infraestructura" class="collapse" aria-labelledby="headingOne" data-parent="#accordionD">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_infraestructura = get_post_meta(get_the_ID(),'ec_agi_grupo_area_infraestructura', true);
                                                                    if($funciones_infraestructura != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_infraestructura as $funcion) {
                                                                            echo "<li>".$funcion['funcion']."</li>";
                                                                        }
                                                                        echo "</ol>";
                                                                    } else {
                                                                        echo "<p>No hay funciones para mostrar.</p>";
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area__content" id="secre">
                                            <div class="area__content-title">
                                                <h6>Secretaría CPPADD</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_scppadd', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-tec"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_scppadd', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_agi_correo_encargado_scppadd', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agi_cargo_encargado_scppadd', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-tec" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agi_nombre_encargado_scppadd', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agi_imagen_encargado_scppadd', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-tecnico" aria-expanded="true" aria-controls="f-tecnico">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordiontecnico">
                                                        <div id="f-tecnico" class="collapse" aria-labelledby="headingOne" data-parent="#accordiontecnico">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_area_scppadd = get_post_meta(get_the_ID(),'ec_agi_grupo_area_scppadd', true);
                                                                if($funciones_area_scppadd!= null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_area_scppadd as $funcion) {
                                                                        echo "<li style='text-align: justify'>".$funcion['funcion']."</li>";
                                                                    }
                                                                    echo "</ol>";
                                                                } else {
                                                                    echo "<p>No hay funciones para mostrar.</p>";
                                                                }
                                                            ?>
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
            </div>
        </div> 
        <?php get_sidebar(); ?>
    </div>
</main> 
<?php endwhile; ?>
<?php get_footer(); ?>