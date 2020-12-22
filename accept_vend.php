<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "update vendeurtable set conf='oui' where idvend='".$_POST['id']."'";
$bdd->exec($req);
?>