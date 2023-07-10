<?php 
/*
* Template Name: Página Área Gestión Administrativa
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
                            <h2>Area de Gestión Administrativa- UGEL Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="areas col-md-11 p-0">
                                    <div class="areas__container">
                                        <div class="areas__componentes">
                                            <p>El area de Gestión Administrativa está compuesto por las siguientes oficinas y personal de: </p>
                                            <ul class="list-unstyled">
                                              <li>
                                                  <a href="#jefatura">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Jefatura AGA
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#secretaria">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Secretaria AGA
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#personal">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Jefe de Personal
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#tecnico">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Finanzas
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#abastecimiento">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Abastecimiento
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#almacen">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Almacén
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#tesoreria">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Tesorería
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#contabilidad">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Contabilidad
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#patrimonio">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Patrimonio
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#escalafon">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Escalafon
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#nexus">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Nexus
                                                  </a>
                                              </li>                                
                                              <li>
                                                  <a href="#remuneraciones">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Remuneraciones y planillas
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#informatico">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Responsable de Informática
                                                  </a>
                                              </li>
                                            </ul> 
                                        </div>
                                        <div class="area__content" id="jefatura">
                                            <div class="area__content-title">
                                                <h6>Jefatura Área de Gestión Administrativa</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_jefatura', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-jefatura"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_jefatura', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_jefatura', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_jefatura', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-jefatura" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_jefatura', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_jefatura', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-director" aria-expanded="true" aria-controls="f-director">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionD">
                                                        <div id="f-director" class="collapse" aria-labelledby="headingOne" data-parent="#accordionD">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_jefatura = get_post_meta(get_the_ID(),'ec_aga_grupo_area_jefatura', true);
                                                                    if($funciones_jefatura != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_jefatura as $funcion) {
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
                                        <div class="area__content" id="secretaria">
                                            <div class="area__content-title">
                                                <h6>Secretaría AGA</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_secretaria', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-secretaria"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_secretaria', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_secretaria', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_secretaria', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-secretaria" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_secretaria', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_secretaria', true);?>" alt="">
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
                                                                    $funciones_secretaria = get_post_meta(get_the_ID(),'ec_aga_grupo_area_secretaria', true);
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
                                        <div class="area__content" id="personal">
                                            <div class="area__content-title">
                                                <h6>Jefe de Unidad de Personal</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_personal', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-personal"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_personal', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_personal', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_personal', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-personal" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_personal', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_personal', true);?>" alt="" >
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
                                                                $funciones_personal = get_post_meta(get_the_ID(),'ec_agi_grupo_area_personal', true);
                                                                if($funciones_personal != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_personal as $funcion) {
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
                                        <div class="area__content" id="tecnico">
                                            <div class="area__content-title">
                                                <h6>Especialista en Finanzas</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_finanzas', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-tec"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_finanzas', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_finanzas', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_finanzas', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-tec" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_finanzas', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_finanzas', true);?>" alt="" >
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
                                                                $funciones_area_finanzas = get_post_meta(get_the_ID(),'ec_aga_grupo_area_finanzas', true);
                                                                if($funciones_area_finanzas!= null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_area_finanzas as $funcion) {
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
                                        <div class="area__content" id="abastecimiento">
                                            <div class="area__content-title">
                                                <h6>Abastecimiento</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_abastecimiento', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-abas"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_abastecimiento', true);?></p>
                                                                
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_abastecimiento', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_abastecimiento', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-abas" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_abastecimiento', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_abastecimiento', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-abastecimiento" aria-expanded="true" aria-controls="f-abastecimiento">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionAL">
                                                        <div id="f-abastecimiento" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAL">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_abastecimiento = get_post_meta(get_the_ID(),'ec_aga_grupo_area_abastecimiento', true);
                                                                if($funciones_abastecimiento != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_abastecimiento as $funcion) {
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
                                        <div class="area__content" id="almacen">
                                            <div class="area__content-title">
                                                <h6>Almacén</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_almacen', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-alm"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_almacen', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_almacen', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_almacen', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-alm" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_almacen', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_almacen', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-almacen" aria-expanded="true" aria-controls="f-almacen">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionalmacen">
                                                        <div id="f-almacen" class="collapse" aria-labelledby="headingOne" data-parent="#accordionalmacen">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_almacen = get_post_meta(get_the_ID(),'ec_aga_grupo_area_almacen', true);
                                                                if($funciones_almacen != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_almacen as $funcion) {
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
                                        <div class="area__content" id="tesoreria">
                                            <div class="area__content-title">
                                                <h6>Tesorería</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_tesoreria', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-teso"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                            <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_tesoreria', true);?></p>
                                                            <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_tesoreria', true);?></p>
                                                            <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_tesoreria', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-teso" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_tesoreria', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_tesoreria', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-relaciones" aria-expanded="true" aria-controls="f-relaciones">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordiontesoreria">
                                                        <div id="f-relaciones" class="collapse" aria-labelledby="headingOne" data-parent="#accordiontesoreria">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_tesoreria = get_post_meta(get_the_ID(),'ec_aga_grupo_area_tesoreria', true);
                                                                if($funciones_tesoreria != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_tesoreria as $funcion) {
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
                                        <div class="area__content" id="contabilidad">
                                            <div class="area__content-title">
                                                <h6>Contabilidad</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_contabilidad', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-conta"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_contabilidad', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_contabilidad', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_contabilidad', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-conta" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_contabilidad', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_contabilidad', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-tramite" aria-expanded="true" aria-controls="f-tramite">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordioncontabilidad">
                                                        <div id="f-tramite" class="collapse" aria-labelledby="headingOne" data-parent="#accordioncontabilidad">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_contabilidad = get_post_meta(get_the_ID(),'ec_aga_grupo_area_contabilidad', true);
                                                                if($funciones_contabilidad != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_contabilidad as $funcion) {
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
                                        <div class="area__content" id="patrimonio">
                                            <div class="area__content-title">
                                                <h6>Patrimonio</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_patrimonio', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-pat"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_patrimonio', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_patrimonio', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_patrimonio', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-pat" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_patrimonio', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_patrimonio', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-patrimonio" aria-expanded="true" aria-controls="f-patrimonio">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionpatrimonio">
                                                        <div id="f-patrimonio" class="collapse" aria-labelledby="headingOne" data-parent="#accordionpatrimonio">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_patrimonio = get_post_meta(get_the_ID(),'ec_aga_grupo_area_patrimonio', true);
                                                                if($funciones_patrimonio != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_patrimonio as $funcion) {
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
                                        <div class="area__content" id="escalafon">
                                            <div class="area__content-title">
                                                <h6>Escalafon</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_escalafon', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-esc"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_escalafon', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_escalafon', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_escalafon', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-esc" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_escalafon', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_escalafon', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-escalafon" aria-expanded="true" aria-controls="f-escalafon">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionescalafon">
                                                        <div id="f-escalafon" class="collapse" aria-labelledby="headingOne" data-parent="#accordionescalafon">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_escalafon = get_post_meta(get_the_ID(),'ec_aga_grupo_area_escalafon', true);
                                                                if($funciones_escalafon != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_escalafon as $funcion) {
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
                                        <div class="area__content" id="nexus">
                                            <div class="area__content-title">
                                                <h6>Nexus</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_nexus', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-nex"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_nexus', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_nexus', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_nexus', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-nex" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_nexus', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_nexus', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-nexus" aria-expanded="true" aria-controls="f-nexus">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionnexus">
                                                        <div id="f-nexus" class="collapse" aria-labelledby="headingOne" data-parent="#accordionnexus">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_nexus = get_post_meta(get_the_ID(),'ec_aga_grupo_area_nexus', true);
                                                                if($funciones_nexus != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_nexus as $funcion) {
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
                                        <div class="area__content" id="remuneraciones">
                                            <div class="area__content-title">
                                                <h6>Remuneraciones y Planillas</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_remuneraciones', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-rem"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_remuneraciones', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_remuneraciones', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_remuneraciones', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-rem" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_remuneraciones', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_remuneraciones', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-remuneraciones" aria-expanded="true" aria-controls="f-remuneraciones">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionremuneraciones">
                                                        <div id="f-remuneraciones" class="collapse" aria-labelledby="headingOne" data-parent="#accordionremuneraciones">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_remuneraciones = get_post_meta(get_the_ID(),'ec_aga_grupo_area_remuneraciones', true);
                                                                if($funciones_remuneraciones != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_remuneraciones as $funcion) {
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
                                        <div class="area__content" id="informatico">
                                            <div class="area__content-title">
                                                <h6>Responsable de Informática</h6>
                                            </div>
                                            <div class="linea"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_informatico', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-inf"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_informatico', true);?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_aga_correo_encargado_informatico', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_aga_cargo_encargado_informatico', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-inf" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_aga_nombre_encargado_informatico', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_aga_imagen_encargado_informatico', true);?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-informatico" aria-expanded="true" aria-controls="f-informatico">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordioninformatico">
                                                        <div id="f-informatico" class="collapse" aria-labelledby="headingOne" data-parent="#accordioninformatico">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_informatico = get_post_meta(get_the_ID(),'ec_aga_grupo_area_informatico', true);
                                                                if($funciones_informatico != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_informatico as $funcion) {
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