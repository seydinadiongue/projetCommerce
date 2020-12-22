<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="auth_agent.css"/>
		<title>Page authentification</title>
	</head>
	<body>
		<?php
		$bdd = new PDO("mysql:host=localhost;dbname=base",'root', '');
		if(isset($_POST['log']) and isset($_POST['mdp'])){
			$log=$_POST['log'];
			$mdp=$_POST['mdp'];
			if(!empty($log) and !empty($mdp)){
				$res = $bdd->query('select * from agent where login="'.$log.'" and mdp="'.$mdp.'"')->fetch();
				if($res){ 
					$_SESSION['idAgent'] = $res['cni'];
					header('Location:page_agent.php');
				}
				else echo 'Login ou mdp incorrect';
			}else{
				echo 'Veuillez remplir tous les champs';
			}
		}
		?>
		<form method="post" action="auth_agent.php">
			<input type="text" name="log" placeholder="Votre login"/>
			<input type="passsword" name="mdp" placeholder="Votre mdp"/>
			<input type="submit" value="Se connecter"/>
		</form>
	</body>
</html>