<?php wp_footer(); ?>

<footer class="footer columns">

    <div class="column">
        <img class="logo" src="<?php bloginfo('template_url'); ?>/images/home/logo-2.png"/>
        <?php wp_nav_menu(array('theme_location' => 'menu-social', 'container' => 'nav')); ?>
    </div>

    <div class="column menus">
        <h3 class="title is-2">Menu</h3>
        <?php wp_nav_menu(array('theme_location' => 'menu-footer', 'container' => 'nav')); ?>
    </div>

    <div class="column contact">
        <h3 class="title is-2">Contact</h3>
        <p>35 rue des Horizons, Paris</p>
        <p>Freephone: +1 800 559 6580</p>
        <p>Telephone: +1 959 603 6035</p>
        <p>FAX: +1 800 559 6580</p>
        <br>
        <p class="email">info@realhome.com</p>
    </div>


</footer>

</body>
</html>
