<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "update commercant set conf='oui' where idcom='".$_POST['id']."'";
$bdd->exec($req);
?>