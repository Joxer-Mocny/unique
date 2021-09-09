<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />

    <title>Slider </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
  </head>
  <body >
  <body>
    <header>
      <nav>
        <!-- logo -->
        <img src="images/promiseo-logo.svg" alt=""  />
        <?php 
        wp_nav_menu([
          'menu' => 'primary'
        ])
        ?>
      </nav>
    </header>