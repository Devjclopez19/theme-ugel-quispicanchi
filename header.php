<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php 
    if(is_home() || is_front_page()):
        get_template_part('template-parts/header-home');
    else:
        get_template_part('template-parts/header-page');
    endif;
?>