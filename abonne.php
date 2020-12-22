<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$lign = $bdd->query('select * from abonner where idclient='.$_SESSION['idpers'].' and idcom='.$_POST['idpers'])->fetch();
if($lign)
$bdd->exec("delete from abonner where idclient=".$_SESSION['idpers']." and idcom=".$_POST['idpers']);
else
$bdd->exec("insert into abonner(idclient, idcom) values(".$_SESSION['idpers'].", ".$_POST['idpers'].")");
?>