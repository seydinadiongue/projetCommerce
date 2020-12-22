<?php
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if($_POST['search']=="")
	$req = 'Select * from produit p JOIN image i JOIN vendeurtable m on p.idprod=i.idprod and p.idpers=m.idvend group by p.idprod ';
else 
	$req = 'Select * from produit p JOIN image i JOIN vendeurtable m on p.idprod=i.idprod and p.idpers=m.idvend where p.nomprod like "'.$_POST['search'].'%"  group by p.idprod ';
$urls = $bdd->query($req);
echo '<div style="margin-left : 8%">';
$t=0;
while($url = $urls->fetch()){
	$t=1;
	echo '
		<div class="col-md-4" style="margin-bottom : 4%;">
				<div class="" style="width: 200px;margin-bottom : %; border-radius : 0%; border : 1px black solid; background : white">
					<div style="display : inline-block; float : left ;  margin : 2% 5% 0 -10%">
						<a href="levendeur.php?idcom='.$url['idvend'].'"><img style=" width : 35px; height : 35px; margin-left : 100%;border-radius : 50%" src="'.$url['pp'].'"/></a>
					</div>
					<div class="card-body text-center" style="height : 0rem;" >
						<p class="card-text" style="height : 1rem; font-weight : bold">'.$url['nomprod'].' a '.$url['prix'].'CFA</p>
					</div >
					<div class="inner">
						<img style=" margin-top : 2%;width : 175px; height : 110px;margin-left : 5%; margin-right : 5%; border-radius : 10%;" src="'.$url['url'].'" class="card-img-top " alt="..."><hr/>
					</div>
				<div class="text-center" style="height : 3rem; margin-top : -5% " >
					<a href = "acheter.php" class="btn btn-primary btn-xs">Acheter</a>
					<a href="vendeur_connect.php?idprod='.$url['idprod'].'&action=reserv"><input type="submit" value = "Reserver" class="btn btn-primary btn-xs"/></a>
					<a href = "detailprodmar.php?idprod='.$url['idprod'].'&nomprod='.$url['nomprod'].'&idvend='.$url['idvend'].'" class="btn btn-default btn-xs">Details</a>
				</div>
			</div>
		</div>
	';
}
if($t==0) echo "<br/><div class='text-center' style='margin : 20% 0 0 0; font-size : 20px'>Ce produit n'existe pas chez les vendeurs</div>";
echo'</div>';
?>