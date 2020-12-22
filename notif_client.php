<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$ligns = $bdd->query("select * from notif_client where idclient = ".$_SESSION['idpers']);
$t=0;
while($row = $ligns->fetch()){
	$t=1;
	if($row['pro_com']=="commercant"){
		$com = $bdd->query("select * from commercant where idcom=".$row['idcom'])->fetch();
		$cant = $bdd->query("select * from cantine where idcom=".$com['idcom'])->fetch();
		$prod = $bdd->query("select * from produit where idprod=".$row['idprod'])->fetch();
		if($row['action']=="accept_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
				<div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a accepté votre reservation sur le ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
		else if($row['action']=="publication"){
			$im = $bdd->query("select url from image where idprod=".$row['idprod']." limit 1")->fetch();
			echo "<div class='row' style='vertical-align : middle;margin : -2% 0 -2% 0' >
						<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
						<div class='col-lg-10' style='vertical-align : middle'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a publié un nouveau produit de ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span>
						<img style='width : 30px; height : 30px; border-radius : 20%; margin-left : 3%' src='".$im['url']."'/></div>
						
				  </div><a href='detailprod.php?idprod=".$prod['idprod']."&nomprod=".$prod['nomprod']."&cant=".$cant['nomcant']."' class='btn btn-primary btn-xs' style='float : right; margin : -2% 13% 0 0'>Voir</a><hr/>
				</div>";
		}
		else if($row['action']=="annulle_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
				  <div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a annulé votre reservation sur le ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
	}else if($row['pro_com']=="marchand"){
		$com = $bdd->query("select * from marchand where idmar=".$row['idcom'])->fetch();
		$prod = $bdd->query("select * from produit where idprod=".$row['idprod'])->fetch();
		if($row['action']=="accept_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-3' src='".$com['pp']."'  style='width : 37px; height : 37px; border-radius : 50%;'/>
				<div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a accepté votre reservation sur le produit <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
		else if($row['action']=="publication"){
			$im = $bdd->query("select url from image where idprod=".$row['idprod']." limit 1")->fetch();
			echo "<div class='row' style='vertical-align : middle;margin : -2% 0 -2% 0' >
						<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
						<div class='col-lg-10' style='vertical-align : middle'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a publié un nouveau produit de ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span>
						<img style='width : 30px; height : 30px; border-radius : 20%; margin-left : 3%' src='".$im['url']."'/></div>
						
				  </div><a href='detailprod.php?idprod=".$prod['idprod']."&nomprod=".$prod['nomprod']."&cant=".$cant['nomcant']."' class='btn btn-primary btn-xs' style='float : right; margin : -2% 13% 0 0'>Voir</a><hr/>
				</div>";
		}
		else if($row['action']=="annulle_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
				  <div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a annulé votre reservation sur le produit <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
	}else{
		$com = $bdd->query("select * from marchand where idmar=".$row['idcom'])->fetch();
		$prod = $bdd->query("select * from produit where idprod=".$row['idprod'])->fetch();
		if($row['action']=="accept_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
				<div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a accepté votre reservation sur le ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
		else if($row['action']=="publication"){
			$im = $bdd->query("select url from image where idprod=".$row['idprod']." limit 1")->fetch();
			echo "<div class='row' style='vertical-align : middle;margin : -2% 0 -2% 0' >
						<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
						<div class='col-lg-10' style='vertical-align : middle'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a publié un nouveau produit de ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span>
						<img style='width : 30px; height : 30px; border-radius : 20%; margin-left : 3%' src='".$im['url']."'/></div>
						
				  </div><a href='detailprod.php?idprod=".$prod['idprod']."&nomprod=".$prod['nomprod']."&cant=".$cant['nomcant']."' class='btn btn-primary btn-xs' style='float : right; margin : -2% 13% 0 0'>Voir</a><hr/>
				</div>";
		}
		else if($row['action']=="annulle_reserv"){
			echo '<div class="row" style="margin : -2% 0 -2% 0">';
			echo "<img class='class='col-lg-2' src='".$com['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
				  <div class='col-lg-10'><span style='font-weight : bold'>".$com['prenom']." ".$com['nom']."</span> a annulé votre reservation sur le ".$prod['nomcol']." <span style='font-weight : bold; font-family : italic'>".$prod['nomprod']."</span></div>";
			echo '</div><hr/>';
		}
	}
}
if($t==0){
	echo '<div style="margin : 40% 0 0 30%; font-size : 140%">Aucune notification</div>';
}
?>