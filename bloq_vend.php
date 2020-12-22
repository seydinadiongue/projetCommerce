<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$row = $bdd->query('select * from vendeurtable where idvend="'.$_POST['id'].'"')->fetch();
if($row['etat']=='normal'){
	$req = "update vendeurtable set etat='bloque' where idvend='".$_POST['id']."'";
	$res = $bdd->exec($req);
}else{
	$req = "update vendeurtable set etat='normal' where idvend='".$_POST['id']."'";
	$res = $bdd->exec($req);
}
?>