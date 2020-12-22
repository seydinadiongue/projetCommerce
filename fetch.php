<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if($_POST['search']=="")
	$req = "Select * from cantine ca join commercant co join collection col on ca.idcom=co.idcom and co.idcom = col.idcom group by co.idcom";
else
	$req = "Select * from cantine ca join commercant co join collection col on ca.idcom=co.idcom and co.idcom = col.idcom where nomcant like '".$_POST['search']."%'  limit 1";
$urls = $bdd->query($req);
$t=0;
while($url = $urls->fetch()){
	$t=1;
	echo '
		<div class="col-md-4" style="margin-bottom : 35px;">
			<div class="card shadow" style="width: 308px; border-radius : 10%; border : 0px solid black">
				
				<div class="card-body " style="height : 4rem;">
					<div style="display : inline-block; float : left ">
						<a href="proprietaire.php?idcom='.$url['idcom'].'"><img style=" width : 40px; height : 40px;border-radius : 50%" src="'.$url['pp'].'"/></a>
					</div>
					<div style="display : inline-block;margin-left : 6%" >
						<h5 class="card-title"><span style="font-weight : bold; ">Chez '.$url['nomcant'].'</span></h5>
					</div>
				</div>
				<div class="inner">
					<img style=" margin-top : 5%;width : 300px; height : 130px;margin-left : 1%;" src="'.$url['photo'].'" class="card-img-top " alt="...">
				</div>
				<div class="card-body text-center" style="height : 5rem;" box-shadow : 0px 2px 3px black>';
				echo'<a href="client.php?idcom='.$url['idcom'].'" class="btn btn-danger btn-xs" style="margin-right : 3%">S\'abonner</a>';
				echo '<a href="collections.php?idcom='.$url['idcom'].'" class="btn btn-default btn-xs" style="margin-left : 3%">voir les collections</a>
				</div>
			</div>
		</div>
	';
	error_reporting(0);
}
if($t==0) echo "<div  style='text-align : center; margin  : 20% 0 17% 0'><h2>Aucun resultat trouve pour '".$_POST['search']."'</h2></div>";
?>