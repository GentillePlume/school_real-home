<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"/>

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar--main">
    <img src="<?php bloginfo('template_url'); ?>/images/home/logo-1.png"/>

    <?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'ul')); ?>

    <?php wp_nav_menu(array('theme_location' => 'menu-social', 'container' => 'ul')); ?>
</nav>
