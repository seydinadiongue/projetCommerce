<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
if(isset($_POST['id'])){
	$bdd->exec("delete from reserver where idreserv=".$_POST['id']);
}
?>