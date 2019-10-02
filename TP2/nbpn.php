<?php

 try {
   $bd = new PDO('pgsql:host=aquabdd;dbname=etudiants','11802795', '060918040KE');
   $bd-> query("SET NAMES 'utf8'");
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $req = $bd -> prepare("Select count(*) from nobels");
   $req -> execute();
   $ligne = $req -> fetch();
 } catch (PDOException $e) {
   die('<p> la connexion a echoué </p>');
 }

 var_dump($ligne);

?>
