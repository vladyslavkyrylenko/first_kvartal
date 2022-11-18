<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vlad
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
   <?php wp_head(); ?>
   <title> <?php echo get_bloginfo(); ?></title>
</head>

<body <?php body_class(); ?>>
   <div class="wrapper">
      <div class="header">
         <div class="container">
            <a href="<?php echo get_bloginfo('url'); ?>" class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="<?php echo get_bloginfo(); ?>"></a>
            <?php
            $args = array('theme_location' => 'main-menu', 'depth' => 1,);
            wp_nav_menu($args); ?>
         </div>
      </div>