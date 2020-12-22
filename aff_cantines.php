<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=base';
		$bdd= new PDO($dsn, 'root', '');
		$req = 'Select * from cantine ca join commercant co join collection col on ca.idcom=co.idcom and co.idcom = col.idcom group by co.idcom';
		$urls = $bdd->query($req);
		while($url = $urls->fetch()){
			$row = $bdd->query("select * from abonner where idclient=".$_SESSION['idpers']." and idcom=".$url['idcom'])->fetch();
			echo '
				<div class="col-md-4" style="margin-bottom : 35px;">
					<div class="card shadow" style="width: 258px; border-radius : 10%;background : #F5F5F5  ; border : 0px solid black">
						
						<div class="card-body " style="height : 4rem;">
							<div style="display : inline-block; float : left ">
								<a href="proprietaire_connect.php?idcom='.$url['idcom'].'"><img style=" width : 40px; height : 40px;border-radius : 50%" src="'.$url['pp'].'"/></a>
							</div>
							<div style="display : inline-block;margin-left : 6%" >
								<h5 class="card-title"><span style="font-weight : bold; ">Chez '.$url['nomcant'].'</span></h5>
							</div>
						</div>
						<div class="inner">
							<img style=" margin-top : 5%;width : 240px; height : 130px;margin-left : 3%;" src="'.$url['photo'].'" class="card-img-top " alt="...">
						</div>
						<div class="card-body text-center" style="height : 5rem;" box-shadow : 0px 2px 3px black>';
							if(!$row)
								echo'<button data-id="'.$url['idcom'].'" class="ab btn btn-danger btn-xs" style="margin-right : %">S\'abonner</button>';
							else
								echo'<button data-id="'.$url['idcom'].'" class="ab btn btn-default btn-xs" style="margin-right : %">vous etes abonné</button>';
							echo '<a href="collections_connect.php?idcom='.$url['idcom'].'" class="btn btn-default btn-xs" style="margin-left : %">voir les collections</a>
						</div>
					</div>
				</div>
			';
			error_reporting(0);
		}
?>