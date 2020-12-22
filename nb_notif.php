<?php
	session_start();
	$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
	
	$messages=array();
	
	$recup_mess= $bdd->query("select count(*) as nb from notif_client where lu='non' and idclient=".$_SESSION['idpers']);
	
	$row=$recup_mess->fetch();
	if($row['nb']==0) echo "Notification";
	else echo 'Notification('.$row['nb'].')';
?>
