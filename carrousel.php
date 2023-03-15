<?php

/**
 * Extention Carrousel permet d'afficher une boite modale des images d'une gallerie
 * Package name : Carrousel
 * Version: 1.0.0
 */
/*
 Plugin name: Carrousel
 Author: Alini Mohamed
 Plugin URI: https://github.com/alinimohamed340
 Description: Extention Carrousel permet d'afficher une boite modale des images d'une gallerie.
 */

 function carrousel_enqueue(){

$version_css = filemtime(plugin_dir_path(__FILE__ ) . "style.css");
$version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");
 
 wp_enqueue_style(   'em_plugin_carrousel_css',
                     plugin_dir_url(__FILE__) . "style.css",
                     array(),
                     $version_css);

    wp_enqueue_script(  'em_plugin_carrousel_js',
                    plugin_dir_url(__FILE__) ."js/carrousel.js",
                    array(),
                    $version_js,
                    true);

 }

 add_action('wp_enqueue_scripts', 'carrousel_enqueue');



 // la partie php qui va generer le formulaire et le contenu du carrousel

 function creation_carrousel()
 {
    return '<button class="bouton__ouvrir">Ouvrir</button>
    <div class="carrousel">
    <button class="bouton__x">X</button>
    <figure class="carrousel__figure"></figure>
    <form class="carrousel__form"></form>
    </div>';
 }

 add_shortcode('carrousel', 'creation_carrousel');

?>