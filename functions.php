<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/** START - ADD LESS TO WORDPRESS -  **/
add_action( 'wp_head' , 'itsb_lesscss' );
function itsb_lesscss() {
?>
     <link rel="stylesheet/less" type="text/css" href="<?php echo bloginfo('url'); ?>/wp-content/themes/twenty-sixteen-child/lesscss/stylesheet.less">
    <script src="/wp-content/themes/twenty-sixteen-child/lesscss/less.min.js" type="text/javascript"></script>
<?php 
}
/** END - ADD LESS TO WORDPRESS  **/

/** Register menu **/
function register_my_menu() {
    register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );
/** end Register menu **/

 /* Add search bar to tip top menu */
/*add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {

    ob_start();
    get_search_form();
    $searchform = ob_get_contents();
    ob_end_clean();

    $items .= '<li>' . $searchform . '</li>';

    return $items;
}*/