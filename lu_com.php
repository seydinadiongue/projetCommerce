<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
$bdd->exec("update notif_client set lu='oui' where idcom=".$_SESSION['idpers']." and action='annulle_reserv_client'");
?>