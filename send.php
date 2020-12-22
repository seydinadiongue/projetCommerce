<?php
	session-start();
	$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
	$req= 'insert into chat (envoyeur, receveur, message, date) values(:envoyeur,:receveur, :message, now())';
	$stmt=$bdd->prepare($req);
	if(!empty($_POST['message'])){
		$stmt->bindParam(':envoyeur', $_SESSION['idpers']);
		$stmt->bindParam(':receveur', $_GET['id']);
		$stmt->bindParam(':message', $_POST['message']);
		if($stmt->execute()) echo '<script>alert("reussie")</script>';
		else echo '<script>alert("Echec")</script>';
	}else{
		echo 'Veuillez remplir tous les champs';
	}
?>