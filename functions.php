<?php
add_action('wp_enqueue_scripts', 'sosnevskaya_styles');
add_action('wp_enqueue_scripts', 'sosnevskaya_scripts');

function sosnevskaya_styles() {
    wp_enqueue_style( 'sosnevskaya_styles', get_stylesheet_uri() );

}
function sosnevskaya_scripts() {
    wp_enqueue_script( 
        'sosnevskaya_scripts', 
        get_template_directory_uri() . '/assets/js/app.js', 
        array(), null, true 
);
    if (is_page('hod-stroitelstva')) {
    wp_enqueue_script( 
        'progress-script', 
        get_template_directory_uri() . '/assets/js/progress.js', 
        array(), 
        null, 
        true 
    );
}   
}

add_theme_support('custom-logo');
add_theme_support('menus');

?>