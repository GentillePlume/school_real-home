<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"/>

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'nav')); ?>