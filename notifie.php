<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
if(isset($_POST['id'])){
	$row = $bdd->query("select * from reserver where idreserv=".$_POST['id'])->fetch();
	$bdd->exec("update reserver set accept='oui' where idreserv=".$_POST['id']);
	$bdd->exec("insert into notif_client(idcom, idclient,pro_com,idprod, action) values(".$_SESSION['idpers'].", ".$row['idclient'].",'marchand', ".$row['idprod'].", 'accept_reserv')")
}
?>