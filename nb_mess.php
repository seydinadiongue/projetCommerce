<?php
	session_start();
	$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
	
	$messages=array();
	
	$recup_mess= $bdd->query("select count(*) as nb from chat ch where lu=0 and  (ch.receveur=".$_SESSION['idpers'].") order by id asc");
	
	$row=$recup_mess->fetch();
	if($row['nb']==0) echo "Discussion";
	else echo 'Discussion('.$row['nb'].')';
?>