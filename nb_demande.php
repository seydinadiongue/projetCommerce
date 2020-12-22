<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$row = $bdd->query('select count(*) as nb from reserver r JOIN produit p on r.idprod=p.idprod where r.accept="non" and p.idpers='.$_SESSION['idpers'])->fetch();
if($row['nb']!=0)
	echo 'Demande('.$row['nb'].')';
else
	echo 'Demande';
?>