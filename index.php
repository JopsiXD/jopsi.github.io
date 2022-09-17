<?php

/* ROUTTERI */

switch($route) {

    case "/":
        require_once "views/mainpage.view.php";
    break;

    default:
      echo "404";
}
?>

