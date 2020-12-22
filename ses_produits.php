<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title></title>
	
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body style='background:#F5F5F5; background-size : 100% 210%' class="container" >
  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="wapper" >  <!------ wrapper permet d'etirer l'header---------->

    <!-- Sidebar -->
            <!-- Sidebar -->
 <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top" style="height : 1px ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item ">
            <img  style="width : 60px; border-radius : 50%; margin : 5% 30px 0 0" src="market.jpg" alt="logo"/>
          </li>
          <li class="nav-item ">
            <a class="nav-link navbar-brand" href="index.php" style="color : white;">Accueil
              <span class="sr-only">(current)</span>
            </a>
			</li>
			<li>
			<a class="nav-link navbar-brand" href="index.php" style="color : white; margin-left : 50%" >Regle de confidentialite
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <div class="nav-item " style="margin-left : 76%;border-left : 1px solid white">
            <span class="btn nav-link navbar-brand" style="color : white ; background : ">Rejoignez-nous au 338362689/777327178</span>
          </div>
        </ul>
		
      </div>
    </div>
  </nav>
  <?php
//==================================Formulaire de modification============================================
	// if(isset($_GET['idprod']) and isset($_GET['action'])){
		// echo"<script>
										
			// $('.form').slideDown();
			
		// </script>";
	// }
	$bdd=new PDO('mysql:host=localhost; dbname=base', 'root', '');
	if(isset($_GET['idprod']) and isset($_GET['action']) and $_GET['action']=="edit"){
		echo'<div  class="form" style="margin-left:20%; display : one">';
			$stmt=$bdd->query('select * from produit where idprod='.$_GET['idprod']);
			$row = $stmt->fetch();
			$stmt1=$bdd->query('select * from collection where idcom='.$row['idpers'].' and nomcol not in (select nomcol from produit where idprod='.$_GET['idprod'].')');
			echo'
			<form style="float : left; margin-top : 5%; display : none"  class="form col-lg-9" method="post" action="ses_produits.php?idcom='.$_GET['idcom'].'&col='.$_GET['col'].'&cant='.$_GET['cant'].'&lieu='.$_GET['lieu'].'&idprod='.$_GET['idprod'].'&action=edit">
				Nom produit : <input class="form-control" type="text" name="nomprod" value="'.$row['nomprod'].'"/></br>
				Prix en FCFA : <input class="form-control" type="text" name="prix" value="'.$row['prix'].'"/></br>
				Collection : <select style="height : 35px" name="nomcol" class="form-control">';
					echo '
						<option value='.$row['nomcol'].'>'.$row['nomcol'].'</option>
						';
					while($row1=$stmt1->fetch()){
						echo '
						<option value='.$row1['nomcol'].'>'.$row1['nomcol'].'</option>
						';
					}
				echo '</select></br>
				Description : <input class="form-control" type="textarea" name="description" value="'.$row['description'].'" row="6"/>
				</br><input style="float : right; margin-bottom : 10%;" type="submit" class="btn btn-primary" value="Modifier">
				<input style="float : left; margin-bottom : 10%;" type="reset" class="btn btn-primary" value="Reinitialiser">
			</form><hr/>
			';
		echo '</div><hr/>';
		echo"<script>
										
			$('.table').slideUp();
			$('.form').slideDown();
			
		</script>";
	}  
 //==============================Code de modification=================================================
	
	if(isset($_GET['idprod']) and isset($_POST['nomcol']) and isset($_POST['nomprod']) and isset($_POST['description'])){
		$nomcol = $_POST['nomcol'];
		$nomprod = $_POST['nomprod'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		if(!empty($nomprod) and !empty($prix) and !empty($description)){
			$res = $bdd->exec("UPDATE `produit` SET `nomprod`='".$nomprod."',`description`='".$description."',`nomcol`='".$nomcol."',`prix`=".$prix." WHERE idprod=".$_GET['idprod']);
			if($res)
				echo '<script>alert("Modification reussie !!!!")</script>';
			else
				echo '<script>alert(" Echec de la modification")</script>';
		}
	}
 ?>
	
<div style="margin-top : 7%; margin-left : 5%; margin-bottom : 10%;">

<?php

$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if(isset($_GET['idcom']) and isset($_GET['cant']) and isset($_GET['lieu'])){
	$idcom = $_GET['idcom'];
	$nomcol = $_GET['col'];
	$cant = $_GET['cant'];
	$lieu = $_GET['lieu'];
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idpers = '.$idcom.' and nomcol="'.$nomcol.'" group by p.idprod ';
	$urls = $bdd->query($req);
	while($url = $urls->fetch()){

		echo '
			<div class="col-md-3" style="margin-bottom : 4%; ">
				<div class="" style="width: 225px;margin-bottom : %; border-radius : 0%; border : 1px black solid; background : white;">
					<div class="card-body text-center" style="height : 0rem;" >
						<p class="card-text" style="height : 1rem; font-weight : bold">'.$url['nomprod'].' a '.$url['prix'].'CFA</p>
					</div >
					<div class="inner">
						<img style=" margin-top : 3%;width : 200px; height : 150px;margin-left : 5%; margin-right : 5%; border-radius : 10%;" src="'.$url['url'].'" class="card-img-top " alt="..."><hr/>
					</div>
					<div class="text-center" style="height : 3rem; margin-top : -5% " >';?>
						<a href="ses_produits.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=edit"><input type="submit" value = "Modifier" class="btn btn-primary btn-xs"/></a>
						<a href="ses_produits.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=supp"><button class="btn btn-primary btn-xs">Supprimer</button></a>
					<?php echo'	<a href = "detail_com.php?idprod='.$url['idprod'].'&nomprod='.$url['nomprod'].'&cant='.$cant.'" class="btn btn-default btn-xs">Details</a>
					</div>
				</div>
			</div>
		';
	}
	echo '</div>';
}
if(isset($_GET['idprod']) && isset($_GET['action'])){
	$idprod = $_GET['idprod'];
	$action = $_GET['action'];
	if($action=="supp"){
		$lign = $bdd->query("select * from reserver where idprod=".$_GET['idprod'])->fetch();
		if(!$lign){
			$res2 = $bdd->exec('delete from image where idprod='.$idprod);
			$res1 = $bdd->exec('delete from produit where idprod='.$idprod);
			if($res1 && $res2) {
				echo"<script>alert('Suppression reussie')</script>";
			}
			else{
				echo"<script>alert('Ehec de la suppression')</script>";
			}
		}else{
			echo '<script>alert("Suppression impossible, ce produit est reservé !!!!!")</script>';
		}
	}
}
?>
<div id="confirmModal" style="margin-left : 37%; width : 25%" class="modal" role="dialog">
	<div class="modal-dialg">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text-center modal-title">Confirmer</h3>
				<h5 class="text-center">Souhaitez-vous vraiment annuler la reservation ?</h5><hr/>
				<a href="ses_produits.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=supp"><button class="btn btn-danger btn-xs">Supprimer</button></a>
				<button type="button"  style="float : right" class="btn btn-default" data-dismiss="modal">Annuler</button>
			</div>
		</div>
	</div>
</div>
<?php 


	$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
	$req = "INSERT INTO `reserver`(`idprod`, `idclient`) VALUES (:idprod, :idclient)";
	$stmt = $bdd->prepare($req);
	if(isset($_POST['login']) and isset($_POST['mdp'])){
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		if(!empty($login) and !empty($mdp)){
			$st = $bdd->query('SELECT * FROM `client` WHERE email like "'.$login.'" and mdp like "'.$mdp.'"');
			$res = $st->fetch();
			if($res){
				$stmt = $bdd->exec('INSERT INTO `reserver`(`idprod`, `idclient`, date) VALUES ('.$_GET['idprod'].', '.$res['idclient'].', now())');
				if($stmt)
					echo "<script>$('.reus').slideDown('slow')</script>";
				else
					echo "<script>$('.ech').slideDown('slow')</script>";
			}
			else
				echo "<script>$('.inco').slideDown('slow')</script>";
		}else echo "<script>$('.remp').slideDown('slow')</script>";
	}
?>

</div>
</div>
</div>
</div>
</div>
</div>
  
  
 


</body>
</html>