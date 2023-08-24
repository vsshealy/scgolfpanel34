<?php 
    /**
     * php/menus/menu-header-mobile.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.08.24)
     * @copyright 2023 (2023.08.24)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-5',
            'menu_id' => 'Header-Mobile'
        )
    );
?>