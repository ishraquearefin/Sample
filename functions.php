<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font',get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css',array(),1,'all');
    wp_enqueue_style('font');

    wp_register_style('simple',get_template_directory_uri().'/vendor/simple-line-icons/css/simple-line-icons.css',array(),1,'all');
    wp_enqueue_style('simple');

    wp_register_style('landing',get_template_directory_uri().'/css/landing-page.min.css',array(),1,'all');
    wp_enqueue_style('landing');

    wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),1,'all');
    wp_enqueue_style('custom');



}
add_action('wp_enqueue_scripts','load_stylesheets');
function include_js(){

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/vendor/jquery/jquery.min.js','',1,false);
    add_action('wp_enqueue_scripts','jquery');

  //  wp_enqueue_scripts('boot',get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'',1,false);
    //add_action('wp_enqueue_scripts','boot');



}
add_action('wp_enqueue_scripts','include_js');

function loadjs(){

    wp_register_script('custom',get_template_directory_uri().'/css/custom.js',array(),'',1,true);
    wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts','loadjs');
add_theme_support('menus');
register_nav_menus(
  array(
       'top-menu'=>__('Top Menu','newtheme'),
       'footer-menu'=>__('Footer Menu','newtheme')
  )


);

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function vcon_widgets_init(){
    register_sidebar(
        array(
            'name' => esc_html__('Footer Navigation','ieatwebsites'),
            'id'=>'footer-nav',
            'description'=>esc_html__('Add widgets here','ieatwebsites'),
            'before_widget'=>'<div class="container-bottom">',
            'after_widget'=>'',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>',


        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Top Bar','ieatwebsites'),
            'id'=>'top-nav',
            'description'=>esc_html__('Add widgets here','ieatwebsites'),
            'before_widget'=>'<div class="container-top">',
            'after_widget'=>'',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>',


        )
    );

}
add_action('widgets_init','vcon_widgets_init');

