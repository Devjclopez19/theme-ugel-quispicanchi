<?php 
/*
* Template Name: Pagina Gestión Pedagógica
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
                            <h2>Area de Gestión Pedagógica - UGEL Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="areas col-md-11 p-0">
                                    <div class="areas__container">
                                        <div class="areas__componentes">
                                            <p>El area de Gestión Pedagógica está compuesto por las siguientes oficinas y personal de:: </p>
                                            <ul class="list-unstyled">
                                              <li>
                                                  <a href="#jefatura">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Jefatura AGP
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#ebrs">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      EBR Secundaria
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#ebrp">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      EBR Primaria
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#ebri">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      EBR Inicial
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#eib">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Educación Intercultural Bilingüe
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#siagie">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Responsable SIAGIE
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#cetpro">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Especialista CETPRO
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#convivencia">
                                                      <i class="fas fa-angle-double-right"></i>
                                                      Especialista en Convivencia
                                                  </a>
                                              </li>
                                            </ul> 
                                        </div>
                                        <div class="area__content" id="jefatura">
                                            <div class="area__content-title">
                                                <h6>Jefatura Área de Gestión Pedagógica</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <?php 
                                                if(get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_jefatura', true) !=''):
                                            ?>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_jefatura', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-jefatura"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_jefatura', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agp_correo_encargado_jefatura', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_jefatura', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-jefatura" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_jefatura', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_jefatura', true);?>" alt="">
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
                                                                    $funciones_jefatura = get_post_meta(get_the_ID(),'ec_agp_grupo_area_jefatura', true);
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
                                            <?php endif; ?>
                                        </div>
                                        <div class="area__content" id="ebrs">
                                            <div class="area__content-title">
                                                <h6>EBR Secundaria</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <?php 
                                                    $especialistas_secundaria = get_post_meta(get_the_ID(),'ec_agp_grupo_especialistas_secundaria', true);
                                                    foreach($especialistas_secundaria as $especialista):
                                                ?>
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_secundaria'];?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-img-<?php echo $agp; ?>"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo $especialista['ec_agp_nombre_encargado_secundaria'];?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo $especialista['ec_agp_correo_encargado_secundaria'];?></p>                                    
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="linea-agp"></div>
                                                <div class="modal fade" id="modal-img-<?php echo $agp;?>" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo $especialista['ec_agp_nombre_encargado_secundaria'];?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_secundaria'];?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $agp++; endforeach; ?>
                                                <div class="p-md-4">
                                                  <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_secundaria', true);?></p>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-secundaria" aria-expanded="true" aria-controls="f-secundaria">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionAL">
                                                        <div id="f-secundaria" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAL">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_secundaria = get_post_meta(get_the_ID(),'ec_agp_grupo_area_secundaria', true);
                                                                if($funciones_secundaria != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_secundaria as $funcion) {
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
                                        <div class="area__content" id="ebrp">
                                            <div class="area__content-title">
                                                <h6>EBR Primaria</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <?php 
                                                    $especialistas_primaria = get_post_meta(get_the_ID(),'ec_agp_grupo_especialistas_primaria', true);
                                                    foreach($especialistas_primaria as $especialista):
                                                ?>
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_primaria'];?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-img-<?php echo $agp; ?>"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo $especialista['ec_agp_nombre_encargado_primaria'];?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo $especialista['ec_agp_correo_encargado_primaria'];?></p>                                    
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="linea-agp"></div>
                                                <div class="modal fade" id="modal-img-<?php echo $agp;?>" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo $especialista['ec_agp_nombre_encargado_primaria'];?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_primaria'];?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $agp++; endforeach; ?>
                                                <div class="p-md-4">
                                                  <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_primaria', true);?></p>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-primaria" aria-expanded="true" aria-controls="f-primaria">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionEBRP">
                                                        <div id="f-primaria" class="collapse" aria-labelledby="headingOne" data-parent="#accordionEBRP">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_primaria = get_post_meta(get_the_ID(),'ec_agp_grupo_area_primaria', true);
                                                                if($funciones_primaria != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_primaria as $funcion) {
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
                                        <div class="area__content" id="ebri">
                                            <div class="area__content-title">
                                                <h6>EBR Inicial</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <?php 
                                                    $especialistas_inicial = get_post_meta(get_the_ID(),'ec_agp_grupo_especialistas_inicial', true);
                                                    foreach($especialistas_inicial as $especialista):
                                                ?>
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_inicial'];?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-img-<?php echo $agp; ?>"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo $especialista['ec_agp_nombre_encargado_inicial'];?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo $especialista['ec_agp_correo_encargado_inicial'];?></p>                                    
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="linea-agp"></div>
                                                <div class="modal fade" id="modal-img-<?php echo $agp;?>" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo $especialista['ec_agp_nombre_encargado_inicial'];?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_inicial'];?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $agp++; endforeach; ?>
                                                <div class="p-md-4">
                                                  <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_inicial', true);?></p>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-inicial" aria-expanded="true" aria-controls="f-inicial">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionEBRI">
                                                        <div id="f-inicial" class="collapse" aria-labelledby="headingOne" data-parent="#accordionEBRI">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_inicial = get_post_meta(get_the_ID(),'ec_agp_grupo_area_inicial', true);
                                                                if($funciones_inicial != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_inicial as $funcion) {
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
                                        <div class="area__content" id="eib">
                                            <div class="area__content-title">
                                                <h6>EIB Primaria</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <?php 
                                                    $especialistas_eib = get_post_meta(get_the_ID(),'ec_agp_grupo_especialistas_eib', true);
                                                    foreach($especialistas_eib as $especialista):
                                                ?>
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_eib'];?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-img-<?php echo $agp; ?>"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo $especialista['ec_agp_nombre_encargado_eib'];?></p>
                                                                <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo $especialista['ec_agp_correo_encargado_eib'];?></p>                                    
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="linea-agp"></div>
                                                <div class="modal fade" id="modal-img-<?php echo $agp;?>" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo $especialista['ec_agp_nombre_encargado_eib'];?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo $especialista['ec_agp_imagen_encargado_eib'];?>" alt="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $agp++; endforeach; ?>
                                                <div class="p-md-4">
                                                  <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_eib', true);?></p>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-eib" aria-expanded="true" aria-controls="f-eib">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionEIB">
                                                        <div id="f-eib" class="collapse" aria-labelledby="headingOne" data-parent="#accordionEIB">
                                                            <div class="card-body">
                                                            <?php 
                                                                $funciones_eib = get_post_meta(get_the_ID(),'ec_agp_grupo_area_eib', true);
                                                                if($funciones_eib != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_eib as $funcion) {
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
                                        <div class="area__content" id="cetpro">
                                            <div class="area__content-title">
                                                <h6>Especialista CETPRO</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <?php 
                                                if(get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_cetpro', true) !=''):
                                            ?>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_cetpro', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-cetpro"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_cetpro', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agp_correo_encargado_cetpro', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_cetpro', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-cetpro" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_cetpro', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_cetpro', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-cetpro" aria-expanded="true" aria-controls="f-cetpro">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordioncetpro">
                                                        <div id="f-cetpro" class="collapse" aria-labelledby="headingOne" data-parent="#accordioncetpro">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_cetpro = get_post_meta(get_the_ID(),'ec_agp_grupo_area_cetpro', true);
                                                                    if($funciones_cetpro != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_siagie as $funcion) {
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
                                            <?php endif; ?>
                                        </div>
                                        <div class="area__content" id="convivencia">
                                            <div class="area__content-title">
                                                <h6>Especialista en Convivencia</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <?php 
                                                if(get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_convivencia', true) !=''):
                                            ?>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_convivencia', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-convivencia"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_convivencia', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_agp_correo_encargado_convivencia', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_agp_cargo_encargado_convivencia', true);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-convivencia" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_agp_nombre_encargado_convivencia', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_agp_imagen_encargado_convivencia', true);?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="area__content-funciones">
                                                    <p class="f-plus">
                                                        Funciones: 
                                                        <button class="btn-more-f btn-sm" type="button" data-toggle="collapse" data-target="#f-convivencia" aria-expanded="true" aria-controls="f-convivencia">
                                                                Ampliar <i class="fas fa-search-plus"></i>
                                                        </button>
                                                    </p> 
                                                    <div class="accordion" id="accordionconvivencia">
                                                        <div id="f-convivencia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionconvivencia">
                                                            <div class="card-body">
                                                                <?php 
                                                                    $funciones_convivencia = get_post_meta(get_the_ID(),'ec_agp_grupo_area_convivencia', true);
                                                                    if($funciones_convivencia != null) {
                                                                        echo "<ol>";
                                                                        foreach($funciones_siagie as $funcion) {
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
                                            <?php endif; ?>
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