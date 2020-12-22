<?
	$connect = mysqli_connect("localhost", "root", "", "base");
	$bdd = new PDO("mysql:host=localhost; dbname=base", "root", "");
	$sql1 = "delete from produit where idprod=".$_POST['id'];
	$sql2 = "delete from image where idprod=".$_POST['id'];
	$res1 = mysqli_query($connect, $sql1);
	$res2 = mysqli_query($connect, $sql2);
	if($res1 && $res2){
		echo "<script>alert('reussie')</script>";
	}else echo "<script>alert('Echec')</script>";
?>