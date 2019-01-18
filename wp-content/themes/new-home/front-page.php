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

    <section class="points">
        <?php
        $args = array(
            'post_type' => 'points',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        ?>

        <?php $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="points__point">
                    <div class="points__point_img">
                        <?php the_field('icon'); ?>
                    </div>

                    <h3 class="points__point_title title is-5"><?php the_title(); ?></h3>
                    <div class="points__point_desc"><?php the_content(); ?></div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="biens">

        <h2 class="biens__title">Nos <span>propriétés</span></h2>

        <div class="biens__separator"></div>

        <p class="biens__desc">Quisque diam lorem interdum vitaapibus vitae pede. Donec eget tellus non
            erat lacinia fertum. Donec in velit vel ipsum auctovinar.</p>

        <?php
        $args = array(
            'post_type' => 'biens',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        ?>

        <?php $the_query = new WP_Query($args); ?>

        <div class="biens__container">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="biens__bien">
                        <div class="biens__bien_img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>

                        <h3 class="biens__bien_title"><?php the_title(); ?></h3>
                        <p class="biens__bien_city"><?php the_field('city'); ?></p>
                        <p class="biens__bien_price"><?php the_field('price'); ?></p>

                        <div class="biens__bien_infos">
                            <p class="biens__bien_infos_info"><?php the_field('area'); ?>m²</p>
                            <p class="biens__bien_infos_info"><?php the_field('rooms'); ?> <?php if (get_field('rooms') > 1){
                                echo "chambres";
                                } else{
                                echo "chambre";
                                } ?></p>
                            <p class="biens__bien_infos_info"><?php the_field('bathrooms'); ?> <?php if (get_field('bathrooms') > 1){
                                    echo "salles de bain";
                                } else{
                                    echo "salle de bain";
                                } ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

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
                    <img class="partners_partner_img" src="<?php the_post_thumbnail_url(); ?>"/>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <section class="agents">

    </section>

<?php get_footer(); ?>