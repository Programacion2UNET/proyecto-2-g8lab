<?php
  define('_404_', '../Views/404.html.php');

 class View {
  static public function render ($path, $vars = []) {
    extract($vars); # wuu not more echo
    if (!file_exists($path)) {
      $path = '_404_';
    }
    ob_start();
       require_once($path);
       $page = ob_get_contents(); # jum..? 
       $page = ob_get_clean();
       echo $page;
    return true;
  }
 };
?>
