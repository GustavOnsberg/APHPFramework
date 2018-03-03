<?php
$prefix_to_remove = "/APHPFramework";
$url_request = $_SERVER['REQUEST_URI'];
$url_request = str_replace($prefix_to_remove, "", $url_request);
$url_request = str_replace("/index.php", "", $url_request);

switch ($url_request) {
  case "":
  case "/":
    echo("Hello");
    break;

    
  case "chat":
    echo("chat");
    break;

  default:
    # code...
    break;
}
?>
