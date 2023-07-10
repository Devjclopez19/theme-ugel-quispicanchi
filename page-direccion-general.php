<?php 
/*
* Template Name: Pagina Direccion General
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
                            <h2>Area de Dirección - UGEL Quispicanchi</h2> 
                            <div class="linea-b"></div> 
                        </div>
                        <div class="institucional__content">
                            <div class="row m-0 justify-content-center">
                                <div class="areas col-md-11 p-0">
                                    <div class="areas__container">
                                        <div class="areas__componentes">
                                            <p>El area de dirección está compuesto por las siguientes oficinas y personal de: </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#direccion">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Direccion
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#secretaria">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Secretaría
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tramite">
                                                        <i class="fas fa-angle-double-right"></i>
                                                        Tramite Documentario
                                                    </a>
                                                </li>
                                            </ul> 
                                        </div>
                                        <div class="area__content pt-md-2" id="direccion">
                                            <div class="area__content-title">
                                                <h6>Dirección</h6>
                                            </div>
                                            <div class="linea-areas"></div>
                                            <div class="area__content-container">
                                                <div class="area__content-cargo">
                                                    <div class="row m-0">
                                                        <div class="col-md-4">
                                                            <div class="area__content-img">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_direccion', true);?>" alt="">
                                                                <div class="ver-imagen">
                                                                    <button data-toggle="modal" data-target="#modal-dir"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="area__content-text">
                                                                <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_direccion', true);?></p>
                                                                <p class="correo"><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_correo_encargado_direccion', true);?></p>
                                                                <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_cargo_encargado_direccion', true);?>:</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-dir" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                    <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_direccion', true);?>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_direccion', true);?>" alt="">
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
                                                                $funciones_area_direccion = get_post_meta(get_the_ID(),'ec_area_direccion_grupo_area_direccion', true);
                                                                if($funciones_area_direccion != null) {
                                                                    echo "<ol>";
                                                                    foreach($funciones_area_direccion as $funcion) {
                                                                        echo "<li style='text-align:justify;'>".$funcion['funcion']."</li>";
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
                                              <h6>Secretaría</h6>
                                          </div>
                                          <div class="linea-areas"></div>
                                          <?php 
                                              if(get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_secretaria', true) !=''):
                                          ?>
                                          <div class="area__content-container">
                                              <div class="area__content-cargo">
                                                  <div class="row m-0">
                                                      <div class="col-md-4">
                                                          <div class="area__content-img">
                                                              <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_secretaria', true);?>" alt="">
                                                              <div class="ver-imagen">
                                                                  <button data-toggle="modal" data-target="#modal-sec"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="area__content-text">
                                                              <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_secretaria', true);?></p>
                                                              <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_correo_encargado_secretaria', true);?></p>
                                                              <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_cargo_encargado_secretaria', true);?></p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="modal fade" id="modal-sec" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                  <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_secretaria', true);?>
                                                              </h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body text-center">
                                                              <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_secretaria', true);?>" alt="">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="area__content-funciones">
                                                  <p class="f-plus">
                                                      Funciones: 
                                                      <button class="btn btn-primario btn-sm" type="button" data-toggle="collapse" data-target="#f-secretaria" aria-expanded="true" aria-controls="f-secretaria">
                                                              Ampliar <i class="fas fa-search-plus"></i>
                                                      </button>
                                                  </p> 
                                                  <div class="accordion" id="accordionS">
                                                      <div id="f-secretaria" class="collapse" aria-labelledby="headingOne" data-parent="#accordionS">
                                                          <div class="card-body">
                                                          <?php 
                                                              $funciones_area_secretaria = get_post_meta(get_the_ID(),'ec_area_direccion_grupo_area_secretaria', true);
                                                              if($funciones_area_secretaria != null) {
                                                                  echo "<ol>";
                                                                  foreach($funciones_area_secretaria as $funcion) {
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
                                          <?php endif;?>
                                        </div>
                                        <div class="area__content" id="tramite">
                                          <div class="area__content-title">
                                              <h6>Trámite Documentario</h6>
                                          </div>
                                          <div class="linea-areas"></div>
                                          <?php 
                                              if(get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_oci', true) !=''):
                                          ?>
                                          <div class="area__content-container">
                                              <div class="area__content-cargo">
                                                  <div class="row m-0">
                                                      <div class="col-md-4">
                                                          <div class="area__content-img">
                                                              <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_td', true);?>" alt="">
                                                              <div class="ver-imagen">
                                                                  <button data-toggle="modal" data-target="#modal-td"><i class="fas fa-search-plus"></i> ver imagen</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="area__content-text">
                                                              <p class="nombre"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_td', true);?></p>
                                                              <p class="correo"><i class="fas fa-mail-bulk"></i> <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_correo_encargado_td', true);?></p>
                                                              <p class="descripcion"><?php echo get_post_meta(get_the_ID(),'ec_area_direccion_cargo_encargado_td', true);?></p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="modal fade" id="modal-td" tabindex="-1"       role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                  <?php echo get_post_meta(get_the_ID(),'ec_area_direccion_nombre_encargado_td', true);?>
                                                              </h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body text-center">
                                                              <img src="<?php echo get_post_meta(get_the_ID(),'ec_area_direccion_imagen_encargado_td', true);?>" alt="" style="max-width: 100%;">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="area__content-funciones">
                                                  <p class="f-plus">
                                                      Funciones: 
                                                      <button class="btn btn-primario btn-sm" type="button" data-toggle="collapse" data-target="#f-tramite" aria-expanded="true" aria-controls="f-tramite">
                                                              Ampliar <i class="fas fa-search-plus"></i>
                                                      </button>
                                                  </p> 
                                                  <div class="accordion" id="accordionTD">
                                                      <div id="f-tramite" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTD">
                                                          <div class="card-body">
                                                          <?php 
                                                              $funciones_area_td = get_post_meta(get_the_ID(),'ec_area_direccion_grupo_area_td', true);
                                                              if($funciones_area_td != null) {
                                                                  echo "<ol>";
                                                                  foreach($funciones_area_td as $funcion) {
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
                                          <?php endif;?>
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