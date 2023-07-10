<?php  get_header();?>
<?php
    while(have_posts()): the_post();
?>
<?php get_template_part('template-parts/title', 'page'); ?>

<main class="main main-pages container main-posts">
    <div class="row justify-content-center">            
    <div class="col-md-9 col-sm-12">
                <div class="row mr-md-1">
                    <div class="main__l col-md-12 col-sm-12">
                        <div class="row m-0 justify-content-center">
                            <div class="col-md-11 post">
                                <div class="post-title">
                                    <p class="post-date"> 
                                        <span>Publicado: </span>
                                        <span><i class="far fa-calendar-alt"></i> <?php the_time( get_option('date_format') ); ?></span> 
                                    </p>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="linea-b"></div>
                                </div>
                                <div class="post-content">
                                    <?php the_content(); ?>
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