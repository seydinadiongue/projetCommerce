<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "update marchand set conf='oui' where idmar='".$_POST['id']."'";
$bdd->exec($req);
?>