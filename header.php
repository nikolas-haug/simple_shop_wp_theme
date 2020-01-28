<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">  
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="grid-container">
      <div class="grid-x">
        <div class="cell large-6">
          <?php 
            if(function_exists(the_custom_logo())) {
                the_custom_logo();
            }
          ?>
        </div>
        <div class="cell large-6">
          <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'container_class' => 'menu simple main-nav'
          )); ?>
        </div>
      </div>
    </header>