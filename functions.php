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

 /* Add dashicons to frontend */
add_action( 'wp_enqueue_scripts', 'themename_scripts' );
function themename_scripts() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
/* change excerpt length for posts  */
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );