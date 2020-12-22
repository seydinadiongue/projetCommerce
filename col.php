<?php
session_start();
$idcom = $_SESSION['idpers'];
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if($_POST['search']=="")
	$req = 'SELECT * from collection c join produit p join image i on c.nomcol=p.nomcol and p.idprod=i.idprod where idcom='.$idcom.' and c.nomcol in (select nomcol from produit where idpers = '.$idcom.')group by c.nomcol limit 4';
else
	$req = 'SELECT * from collection c join produit p join image i on c.nomcol=p.nomcol and p.idprod=i.idprod where idcom='.$idcom.' and c.nomcol in (select nomcol from produit where idpers = '.$idcom.') and c.nomcol like "'.$_POST['search'].'%" group by c.nomcol limit 4';
$re = "select * from cantine where idcom=".$idcom;
$stmt=$bdd->query($re);
$urls = $bdd->query($req);
$ur = $stmt->fetch();
$t=0;
while($url = $urls->fetch()){
$t=1;
echo '
<div class="col-md-6" style="margin-bottom : 40px; ">
	<div class="card shadow" style="width: 180px; height : 180px;border-radius : 5%;background : url('.$url['url'].'); background-size : 100% 100%; border : 0px solid black">
		<div class="inner">
		</div>
		<div class="card-body text-center" style="height : 7rem;" >
			<a href="ses_produits.php?idcom='.$_SESSION['idpers'].'&col='.$url['nomcol'].'&cant='.$ur['nomcant'].'&lieu='.$ur['lieu'].'" class="btn btn-info btn-lg" style="margin-left : 3%; margin-top : 30%">'.$url['nomcol'].'s</a>
		</div>
	</div>
</div>
';
error_reporting(0);
}
if($t==0){
echo '<h3 class="text-center" style="margin-left : 40px : ">Aucun resultat trouve</h3>';
}
?>
