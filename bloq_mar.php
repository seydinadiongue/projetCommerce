<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$row = $bdd->query('select * from marchand where idmar="'.$_POST['id'].'"')->fetch();
if($row['etat']=='normal'){
	$req = "update marchand set etat='bloque' where idmar='".$_POST['id']."'";
	$res = $bdd->exec($req);
}else{
	$req = "update marchand set etat='normal' where idmar='".$_POST['id']."'";
	$res = $bdd->exec($req);
}
?>