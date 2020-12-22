<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
if($bdd->exec("delete from produit where idprod=107"))
	echo '<script>alert("Suppression reussie")</script>';
else
	echo '<script>alert("Echec")</script>';
?>