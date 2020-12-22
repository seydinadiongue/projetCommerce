<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$row = $bdd->query('select * from commercant where idcom="'.$_POST['id'].'"')->fetch();
if($row['etat']=='normal'){
	$req = "update commercant set etat='bloque' where idcom='".$_POST['id']."'";
	$res = $bdd->exec($req);
}else{
	$req = "update commercant set etat='normal' where idcom='".$_POST['id']."'";
	$res = $bdd->exec($req);
}
?>