<?php

function wcrg_files(){
    /*
    A nala nimenyisa oko jays yange teikwetaga jays endijo kukora nko kwo nkwenda 
    'n namba zimanyisa okwo el veshen yambele 
    kandi okwikiriza nkungambila okwo egi akrpt elan aansi tie eiguru
    kasinge tena ruga utakwija okebwa mbinyisa ki
    */
    wp_enqueue_scripts('main-wcrg-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0', true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+
    Condensed: 300,300i,400,400i,700,700i| Roboto:100,300,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('wcrg_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts',wcrg_files());
add_action('wp_enqueue_style',wcrg_files());

function wcrg_features(){
     add_theme_support('title-tag');
}
add_action('after_setup_theme','wcrg_feautures');
?>