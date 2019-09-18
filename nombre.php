<?php
  if(isset($_GET['nombre'])) {
    $nb = $_GET["nombre"];
    if preg_match("#^-?\d+$#",$nb) {
      echo'c\'est un nombre';
    }
    else {
      echo 'c\'est pas un nombre';
    }
  }
?>
