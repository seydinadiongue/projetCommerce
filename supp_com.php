<?php
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "DELETE FROM `commercant` WHERE idcom=".$_POST['id'];
$req1 = "delete from cantine where idcom=".$_POST['id'];
$res = $bdd->exec($req);
$res1 = $bdd->exec($req1);
if($res && $res1) echo '<script>alert("Suppression reussie !!!!");</script>';
else echo '<script>alert("Suppression Echec");</script>';

?>