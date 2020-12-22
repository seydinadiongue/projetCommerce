<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$da = $bdd->query("SELECT distinct r.date FROM reserver r  JOIN client cli JOIN produit p  on r.idclient = cli.idclient and r.idprod = p.idprod where r.accept = 'non' and p.idpers = ".$_SESSION['idpers']);
$ro = $bdd->query("select count(*) as nb from reserver r JOIN produit p on p.idprod = r.idprod where accept='non' and p.idpers = ".$_SESSION['idpers'])->fetch();
echo'<div class="text-center " style="font-size : 150%;font-weight : bold">Demande('.$ro['nb'].')
	<button onclick="" class="quit btn btn-danger btn-xs" style="float : right; ">x</button></div><hr/>';
$t=0;
while($dat = $da->fetch()){
	$t=1;
	$req = "SELECT r.date, r.idreserv ,cli.pp, cli.prenom, cli.nom, p.nomcol, p.nomprod FROM reserver r  JOIN client cli JOIN produit p  on r.idclient = cli.idclient and r.idprod = p.idprod where r.accept = 'non' and p.idpers = ".$_SESSION['idpers']." and r.date='".$dat['date']."'";
	$stmt = $bdd->query($req);
	echo '<div class="text-center" style="margin-bottom : -5%; font-weight : bold">'.$dat['date'].'</div><hr/>';
	while($row = $stmt->fetch()){
		
		echo '<div class="row ard" style="color : black">';
			echo "<div class='col-lg-12'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%; '/><span style='font-weight : bold; float : right; margin-right : 20%'>".$row['prenom']." ".$row['nom']."</span></div>";
			echo '<div class="col-lg-12" style="margin-top : 1%"> souhaite reserver votre  <span style="font-family : italic; font-weight : bold">'.$row['nomprod'].'</span></div>';
		echo '</div>';
		echo "
				<button data-id1='".$row['idreserv']."' class='btn btn-default btn-sm btn-supp'>Supprimer</button>
				<button data-id2='".$row['idreserv']."' class='btn btn-info btn-sm btn-accept' style='float : right;'>Accepter</button>";
	}
}
if($t==0) echo '<div class="text-center" style="margin-top : 80%; font-size : 130%">Aucune demande</div>';
?>