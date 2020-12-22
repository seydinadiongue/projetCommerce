<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$rows = $bdd->query("select * from notif_client n join client c on n.idclient=c.idclient where n.idcom=".$_SESSION['idpers']." order by id_notif desc");
$t=0;
while($row = $rows->fetch()){
	$t=1;
	
	if($row['action']=="annulle_reserv_client"){
		$r = $bdd->query("select * from produit where idprod=".$row['idprod'])->fetch();
		echo '<div class="row" style="margin : -2% 0 -2% 0">';
		echo "<img class='class='col-lg-2' src='".$row['pp']."'  style='width : 35px; height : 35px; border-radius : 50%;'/>
			  <div class='col-lg-10'><span style='font-weight : bold'>".$row['prenom']." ".$row['nom']."</span> a annulé sa réservation sur votre ".$r['nomcol']." <span style='font-weight : bold; font-family : italic'>".$r['nomprod']."</span></div>";
		echo '</div><hr/>';
	}
}
if($t==0){
	echo '<div class="text-center" style="margin-top : 40%; font-size : 130%">Aucune notification</div>';
}
?>