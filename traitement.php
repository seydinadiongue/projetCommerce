<?php	//Page authentification
	$dsn = 'mysql:host=localhost;dbname=base';
	$bdd= new PDO($dsn, 'root', '');	
	if(isset($_POST['pers']) and isset($_POST['email']) and isset($_POST['mdp'])){
		$pers = $_POST['pers'];
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];
		if(!empty($pers) and !empty($email) and !empty($mdp)){
			$req='select * from client where email = ?  and mdp = ? ';
			if($pers='vendeur')
				$req='select * from commercant where email = ?  and mdp = ? ';	
			$stmt = $bdd->prepare($req);
			$stmt->bindParam(1,$email);
			$stmt->bindParam(2,$mdp);
			$stmt->execute();
			$t=0;
			while($row=$stmt->fetch()){
				$t=1;
				$_SESSION['idcom']=$row['idcom'];
				$_SESSION['nom'] = $row['nom'];
				$_SESSION['prenom'] = $row['prenom'];
				$_SESSION['tel'] = $row['tel'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['adresse'] = $row['adresse'];
				break;
			}
			if($t==1){
				header('Location:com.php');
			}else{
				echo "<script>
					$('.err').slideDown('slow');
				</script>";
			}
				
		}else{
			echo "<script>
						$('.rem').slideDown('slow');
				</script>";
		}
	}
  ?>