<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
$da = $bdd->query('select distinct date from reserver');
$ro = $bdd->query("select count(*) as nb from reserver")->fetch();
echo'<h5 class="text-center card" style="margin :2% 5% 5% 0">Discussion</h5><hr/>';
$req = "select * from chat ch join commercant cli on ch.receveur=cli.idcom or ch.envoyeur=cli.idcom where ch.envoyeur=".$_SESSION['idpers']." or  ch.receveur=".$_SESSION['idpers']." group by cli.tel";
$stmt = $bdd->query($req);
while($row = $stmt->fetch()){
	$r = $bdd->query('select count(*) as nb from chat ch where lu=0 and  ((ch.envoyeur='.$row['idcom'].' and ch.receveur='.$_SESSION['idpers'].')) ')->fetch();
	if($_SESSION['idpers']==$row['envoyeur'])
	echo '<a href="client.php?id='.$row['receveur'].'" style="color : white"><div class="row">';
	else
	echo '<a href="client.php?id='.$row['envoyeur'].'" style="color : white"><div class="row">';
		echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
		if($r['nb']!=0)
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold; font-size : 100%">'.$row['prenom'].' '.$row['nom'].' <span style="background : red; padding : 2px; float : right; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
		else
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold; font-size : 100%">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
	echo '</div><hr/></a>';
}
//"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""
$req = "select * from chat ch join marchand cli on ch.receveur=cli.idmar or ch.envoyeur=cli.idmar where ch.envoyeur=".$_SESSION['idpers']." or  ch.receveur=".$_SESSION['idpers']." group by cli.tel";
$stmt = $bdd->query($req);
while($row = $stmt->fetch()){
	$r = $bdd->query('select count(*) as nb from chat ch where lu=0 and  ((ch.envoyeur='.$row['idmar'].' and ch.receveur='.$_SESSION['idpers'].')) ')->fetch();
	if($_SESSION['idpers']==$row['envoyeur'])
	echo '<a href="client.php?id='.$row['receveur'].'" style="color : white"><div class="row">';
	else
	echo '<a href="client.php?id='.$row['envoyeur'].'" style="color : white"><div class="row">';
		echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
		if($r['nb']!=0)
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red;float : right; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
		else
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
	echo '</div><hr/></a>';
}
//"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""
$req = "select * from chat ch join vendeurtable cli on ch.receveur=cli.idvend or ch.envoyeur=cli.idvend where ch.envoyeur=".$_SESSION['idpers']." or  ch.receveur=".$_SESSION['idpers']." group by cli.tel";
$stmt = $bdd->query($req);
while($row = $stmt->fetch()){
	$r = $bdd->query('select count(*) as nb from chat ch where lu=0 and  ((ch.envoyeur='.$row['idvend'].' and ch.receveur='.$_SESSION['idpers'].')) ')->fetch();
	if($_SESSION['idpers']==$row['envoyeur'])
	echo '<a href="client.php?id='.$row['receveur'].'" style="color : white"><div class="row">';
	else
	echo '<a href="client.php?id='.$row['envoyeur'].'" style="color : white"><div class="row">';
		echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
		if($r['nb']!=0)
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red;float : right; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
		else
			echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
	echo '</div><hr/></a>';
}
?>