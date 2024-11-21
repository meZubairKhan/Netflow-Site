<? php
    function load_stylesheets() {
        wp_register_style('font', get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');

        wp_enqueue_style('font');
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');
?>