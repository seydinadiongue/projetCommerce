<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if($_POST['search']=="")
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idpers = '.$_GET['idcom'].' and nomcol="'.$_GET['col'].'" group by p.idprod ';
else
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idpers = '.$_GET['idcom'].' and p.nomcol="'.$_GET['col'].'" where p.nomprod like "'.$_POST['search'].'%" group by p.idprod ';
$urls = $bdd->query($req);
echo '<div class="" style="margin :0 0 2% 8%">';
$t=0;
while($url = $urls->fetch()){
	$t=1;
	echo '
		<div class="col-md-4" style="margin-bottom : 4%;">
			<div class="" style="width: 180px;margin-bottom : %; border-radius : 0%; border : 1px black solid; background : white">
				<div class="card-body text-center" style="height : 0rem;" >
					<p class="card-text" style="height : 1rem; font-weight : bold">'.$url['nomprod'].' a '.$url['prix'].'CFA</p>
				</div >
				<div class="inner">
					<img style=" margin-top : 3%;width : 160px; height : 100px;margin-left : 5%; margin-right : 5%; border-radius : 10%;" src="'.$url['url'].'" class="card-img-top " alt="..."><hr/>
				</div>
				<div class="text-center" style="height : 3rem; margin-top : -5% " >';?>
					<a href="produit_connect.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=reserv"><input type="submit" value = "Reserver" class="btn btn-primary btn-xs"/></a>
					<button class="btn btn-primary btn-xs">Acheter</button>
				<?php echo'	<a href = "detailprod_connect.php?idprod='.$url['idprod'].'&nomprod='.$url['nomprod'].'&cant='.$cant.'" class="btn btn-default btn-xs">Details</a>
				</div>
			</div>
		</div>
	';
}
if($t==0) echo "<br/><div class='text-center' style='margin : 20% 0 0 0; font-size : 20px'>Ce produit n'existe pas chez les marchands</div>";
?>