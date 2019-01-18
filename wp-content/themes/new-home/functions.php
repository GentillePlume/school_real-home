<?php
add_action('wp_enqueue_scripts', 'insert_css');
function insert_css()
{
    // On ajoute le css general du theme
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_register_script('jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('jquery2');

    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display|Raleway');
    wp_enqueue_style('fonts');

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
    wp_enqueue_style('fontawesome');

}

add_theme_support('menus');
register_nav_menus([
    'menu-principal' => 'Navigation principale',
    'menu-footer' => 'Navigation footer',
    'menu-social' => 'réseaux sociaux'
]);

/********************************************
 *         Auto non-breakable space
 ********************************************/
if (!function_exists('twoobl_automatic_nbsp')) {
    function twoobl_automatic_nbsp($content)
    {
        $chars = '?!:;';
        $content = preg_replace('/ ([' . $chars . '])/', '&nbsp;${1}', $content);
        return $content;
    }
}
add_filter('the_content', 'twoobl_automatic_nbsp');

add_theme_support('post-thumbnails');

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

function create_post_type()
{
    register_post_type('biens',
        array(
            'label' => __('Propriétés'),
            'singular_label' => __('Propriété'),
            'add_new_item' => __('Ajouter un bien'),
            'edit_item' => __('Modifier un bien'),
            'new_item' => __('Nouveau bien'),
            'view_item' => __('Voir le bien'),
            'search_items' => __('Rechercher un bien'),
            'not_found' => __('Aucun bien trouvé'),
            'not_found_in_trash' => __('Aucun bien trouvé'),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_icon' => 'dashicons-admin-home',
            'taxonomies' => array('types'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'biens', 'with_front' => true)
        )
    );
}

add_action('init', 'create_post_type');
