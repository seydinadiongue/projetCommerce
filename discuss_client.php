<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$da = $bdd->query('select distinct date from reserver');
$ro = $bdd->query("select count(*) as nb from reserver")->fetch();
echo'<h5 class="text-center card" style="margin :2% 5% 5% 0">Discussion</h5><hr/>';
$req = "select * from chat ch join client cli on ch.receveur=cli.idclient or ch.envoyeur=cli.idclient where ch.envoyeur=".$_SESSION['idpers']." or  ch.receveur=".$_SESSION['idpers']." group by cli.tel";
$stmt = $bdd->query($req);
while($row = $stmt->fetch()){
	$r = $bdd->query('select count(*) as nb from chat ch where lu=0 and  ((ch.envoyeur='.$row['idclient'].' and ch.receveur='.$_SESSION['idpers'].')) ')->fetch();
	if($_SESSION['idpers']==$row['envoyeur'])
	echo '<a href="com.php?id='.$row['receveur'].'" style="color : white"><div class="row">';
	else
	echo '<a href="?id='.$row['envoyeur'].'" style="color : white"><div class="row">';
		echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
		if($r['nb']!=0)
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red;float : right;margin-right : 10%; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
		else
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
	echo '</div><hr/></a>';
}
	?>