<?php get_header(); ?>

    <header class="header" style="background-image: url('<?php bloginfo('template_url'); ?>/images/home/home.png')">
        <h1 class="header__title">real home l'agence qui vous accompagne dasn votre projet</h1>
    </header>

    <section class="agency">

        <h2 class="agency__title">Notre agence au plus près de vous</h2>
        <p class="agency__desc">Quisque diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non
            erat lacinia
            fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est.
            Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa.
            Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem ipsum dolor
            sitamet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>

    </section>

    <section class="partners">

        <h2 class="partners__title">Our <span>Partners</span></h2>
        <?php
        $args = array(
            'post_type' => 'partners',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        ?>

        <?php $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="partners__partner">
                    <img class="partners_partner_img" src="<?php the_post_thumbnail_url(); ?>" />
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>