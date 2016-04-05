<?php
/*
Plugin Name: Treehouse
Plugin URI: http://example.com/
Description: Description
Version: 0.1
Author: jason de la cruz
Author URI: http://example.com/
*/

 function jctreehouse_badges_menu() {

     add_options_page(
       'official Treehouse Badges Plugin',
       'Treehouse Badges',
       'manage_options',
       'jctreehouse-badges',
       'jctreehouse_badges_options_page'


   );

}

add_action( 'admin_menu', 'jctreehouse_badges_menu');


function jctreehouse_badges_options_page() {

    if(!current_user_can( 'manage_options' ) ) {

        jc_die( 'you do not have suggicient permissions to acces this page.');


    }

    echo '<p>welcome to our plugin page!</p>';


}






 ?>
