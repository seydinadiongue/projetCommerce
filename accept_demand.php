<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
if(isset($_POST['id'])){
	$row = $bdd->query("select * from reserver where idreserv=".$_POST['id'])->fetch();
	$bdd->exec("update reserver set accept='oui' where idreserv=".$_POST['id']);
	$req = "INSERT INTO `notif_client`(`idcom`, `idclient`, `pro_com`, `idprod`, `action`, date) VALUES (".$_SESSION['idpers'].",".$row['idclient'].",'".$_SESSION['profil']."',".$row['idprod'].",'accept_reserv',now())";
	$bdd->exec($req);
}
?>