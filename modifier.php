<?php
 //==============================Code de modification=================================================
	
	if(isset($_POST['nomprod']) and isset($_POST['description']) and isset($_POST['prix']) and isset($_POST['nomcol'])){
		echo '<script>alert("bonjour")</script>';
		$nomprod = $_POST['nomprod'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		$nomcol = $_POST['nomcol'];
		if(!empty($nomprod) and !empty($prix) and !empty($description)){
			$bdd->exec("UPDATE `produit` SET `nomprod`='".$nomprod."',`description`='".$description."',`nomcol`='".$nomcol."',`prix`=".$prix." WHERE idprod=".$_GET['idprod']);
		}
	}
 ?>