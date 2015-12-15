<?php
/**
 * @package Missing Menu Item ID Fix by Global Food Book
 * @version 1.1
 */
/*
Plugin Name: Missing Menu Item ID Fix
Plugin URI: http://wordpress.org/extend/plugins/gfb-missing-menu-item-id-fix/
Description: This is a hack to fix the missing menu item id from the food-cook wootheme for recipes It is best used only with food and cook recipe theme made with woo themes.
Author: Ikenna N. Okpala
Version: 1.1
Author URI: http://ikennaokpala.com/
*/
// File Security Check
if (!empty($_SERVER['SCRIPT_FILENAME']) && basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('You do not have sufficient permissions to access this page');
}

add_filter ('wp_nav_menu_items','gfb_missing_id_fix', 10, 2);
function gfb_missing_id_fix($menu, $args) {
    if($args->theme_location == "primary-menu"){
      $dom = new DOMDocument;
      $dom->loadHTML($menu);
      foreach($dom->getElementsByTagName('li') as $element ) {
        $classes = $element->getAttribute("class");
        preg_match("/menu-item-\d+/", $classes, $output_array);
        $element->setAttribute("id", $output_array[0]);
      }
      $menu = $dom->saveHTML();
    }
    return $menu;
}
?>
