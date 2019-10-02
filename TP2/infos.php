<?php

 try {
   $bd = new PDO('pgsql:host=aquabdd;dbname=etudiants','11802795', '060918040KE');
   $bd-> query("SET NAMES 'utf8'");
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if (isset($_GET["identifiant"]) and preg_match("#^\d+$#", $_GET["identifiant"])) {
     $req = $bd -> prepare("select * from nobels where id=:identifiant");
     $req->bindValue(':identifiant', $_GET["identifiant"]);
     $req -> execute();
     $ligne = $req -> fetch();
     var_dump($ligne);
   }
   else {
     echo "<p> pb d'identifiant </p>";
   }
 } catch (PDOException $e) {
   die('<p> la connexion a echoué </p>');
 }



?>
