<?php
// enregistrer le menu
register_nav_menus(
    array(
        'menu' => 'principal'
    )
);
// fin

// afficher image à la une
add_theme_support('post-thumbnails');
// fin

function monstyle()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('menuBurger', get_template_directory_uri() . '/script.js');
    wp_enqueue_script( 'font_awesome', 'https://use.fontawesome.com/4b9e255a4a.js' );
    wp_enqueue_style(   'poppins',
                        "https://fonts.googleapis.com/css2?family=Brygada+1918:ital@1&family=Poppins:wght@300;600&display=swap" );
}

add_action('wp_enqueue_scripts', 'monstyle');
add_filter( 'show_admin_bar', '__return_false' );



//ajouter une taille à l'image à la une
add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
    add_image_size('home', 1280, 744, false);
    add_image_size('blogpage_thumb', 300, 300, false);
    add_image_size('singleposthumbnail', 500, 500, false);
    add_image_size('singleposthumbnail2', 500, 500, true); // L'image sera tronquée exactement à la dimension indiquée
    add_image_size('recentpost-thumb', 200, 200, false);
    add_image_size('couv', 1536, 1536, false);
}
//fin