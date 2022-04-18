<?php 


function nakei_ben_files(){

}
// add_actions('wp_enqueue_script', 'nakei_ben_files');

function nakei_ben(){
    wp_enqueue_style('nakei_ben-style', get_theme_file_uri('/assets/style-index.css'));
    wp_enqueue_style('nakei_ben-extra-styles', get_theme_file_uri('/assets/index.css'));

};
add_action("wp_enqueue_scripts", "nakei_ben");

function menuLocation(){
}
add_action('','menuLocation')
?>

