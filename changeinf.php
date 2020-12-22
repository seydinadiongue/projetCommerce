<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title></title>
	
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='stylesheet' href='luimeme.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
	<script>
			setInterval(function(){
				$('.image.').hide();
			},1000)
	</script>
        .row{
    margin-left:0px;
    margin-right:0px;
}

#wrapper {
    padding-left: 30px;
    padding-right: 30px;
    transition: all .4s ease 0s;
    height: 100%
}

#sidebar-wrapper {
    margin-left: -150px;
    left: 70px;
    width: 150px;
    background: #222;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
}

.sidebar-nav {
    display: block;
    float: left;
    width: 150px;
    list-style: none;
    margin: 0;
    padding: 0;
}
#page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
}

#page-content-wrapper {
  width: 100%;
}

#sidebar_menu li a, .sidebar-nav li a {
    color: #999;
    display: block;
    float: left;
    text-decoration: none;
    width: 150px;
    background: #252525;
    border-top: 1px solid #373737;
    border-bottom: 1px solid #1A1A1A;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
}
.sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: #999999;
  display: block;
  text-decoration: none;
}

.sidebar-nav li a:hover {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}

#main_icon
{
    float:right;
   padding-right: 65px;
   padding-top:20px;
}
.sub_icon
{
    float:right;
   padding-right: 65px;
   padding-top:10px;
}
.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}

@media (max-width:767px) {
#wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
}
#sidebar-wrapper {
    left: 70px;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
    width: 150px;
    transition: all .4s ease 0s;
}
}
    </style>
</head>
<body style='background:#F5F5F5' >

  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="wapper" >  <!------ wrapper permet d'etirer l'header---------->

    <!-- Sidebar -->
            <!-- Sidebar -->
 <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top" style="height : 1px ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item ">
            <img  style="width : 60px; border-radius : 50%; margin : 5% 30px 0 0" src="market.jpg" alt="logo"/>
          </li>
          <li class="nav-item ">
            <a class="nav-link navbar-brand" href="index.php" style="color : white;">Accueil
              <span class="sr-only">(current)</span>
            </a>
			</li>
			<li>
			<a class="nav-link navbar-brand" href="index.php" style="color : white; margin-left : 50%" >Regle de confidentialite
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <div class="nav-item " style="margin-left : 76%;border-left : 1px solid white">
            <span class="btn nav-link navbar-brand" style="color : white ; background : ">Rejoignez-nous au 338362689/777327178</span>
          </div>
        </ul>
		
      </div>
    </div>
  </nav>
  <?php
	// ===========================================================================================================================================
	Function valid_extension($file){	//Fonction de verififcation de l'extension
		$tab=array("jpg", "png", "jpeg", "gif");
		$ext=strtolower(substr(strrchr($file,'.'),1));
		if(in_array($ext,$tab))
			return true;
		return false;
	}
	Function max_size($file){	 //Fonction de verifcation de la taill du fichier
		if(isset($_POST['$file']['MAX_FILE_SIZE'])){
			$maxsize=$_POST['MAX_FILE_SIZE'];
		if($file['size']<=$maxsize)
			return true;
		return false;
		}
	}
	Function move_file($sourcefile, $destpath, $destname){	// Fonction de deplacement du fichier
		if(!(is_dir($destpath)))
			mkdir($destpath);
		$dest=$destpath."/".$destname;
		$destname=$destname;
		$dest=$destpath."/".$destname;
		move_uploaded_file($sourcefile, $dest);                                
		return $dest;
	}
	Function faire(){
		if(isset($_FILES['tof'])){
			if($_FILES['tof']['error']==0){		// Si le fichier a été bien envoyé
				$file=$_FILES['tof'];
				$file_name=$file['name'];
				if(valid_extension($file_name)){		// Si l'extension est valide
					if(move_file($file['tmp_name'], "tofs_server",$file['name'])){      // Si le deplacement du fichier a reussi
						$d=move_file($file['tmp_name'], "tofs_server",$file['name']);
						// On retourne la destination du produit
						return $d;
					}
				}
				else{
					echo "Votre extension n'est pas valid</br> Veuillez choisir une image svp";
				}
			}
			else{
				$d=$_SESSION['pp'];
				return $d;
			}
		}
	}
	?>
   <?php
		echo '
		<div class="d" style="margin-top : 7%;">
			<form class="col-lg-10" style="margin-left : 40%;  margin-bottom : 7%; " method="post" action="changeinf.php" enctype="multipart/form-data">
				<div class="d " style="width : 100%">
					Nom : <input type="text" name="nom" class="form-control" value="'.$_SESSION['nom'].'"></br>
					Prenom : <input type="text" name="prenom" class="form-control"  value="'.$_SESSION['prenom'].'"></br>
					Adresse : <input type="text" name="adresse" class="form-control"  value="'.$_SESSION['adresse'].'"></br>
					@ email : <input type="text" name="email" class="form-control"  value="'.$_SESSION['email'].'"></br>
				</div>
				<div class="d" style="margin-left : 120%; margin-top : -200%; margin-bottom : 10%; vertical-align : bottom">
					<div class="image" ><img src="'.$_SESSION['pp'].'" style="margin-left : 5%; width : 200px; height : 200px; border-radius : 10%"/></div>
					<span class="filee btn btn-default btn-file" style="margin-left : 30%;">
					Selectionner <input class="file" type="file" value="'.$_SESSION['pp'].'" name="tof">
					</span>
				</div>
				<input style="margin-left : 80%" class="su btn btn-primary" type="submit" value="Appliquer les modifications"/>
			</form>
		
			
			
			<hr/>
		</div>
		';
		//================================Traitement=======================================
		$bdd= new PDO("mysql:host=localhost;dbname=base", 'root', '');
		if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['adresse'])){
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$adresse = $_POST['adresse'];
			$email = $_POST['email'];
			$pp = faire();
			if(!empty($nom) and !empty($prenom) and !empty($adresse) and !empty($email)){
				if($_SESSION['profil']=='commercant')
					$res=$bdd->exec('update commercant set nom = "'.$nom.'",prenom="'.$prenom.'", adresse = "'.$adresse.'",email="'.$email.'", pp="'.$pp.'" where idcom = '.$_SESSION['idpers']);
				else if($_SESSION['profil']=='vendeurtable')
					$res=$bdd->exec('update vendeurtable set nom = "'.$nom.'",prenom="'.$prenom.'", adresse = "'.$adresse.'",email="'.$email.'" , pp="'.$pp.'" where idvend = '.$_SESSION['idpers']);
				else if($_SESSION['profil']=='marchand')
					$res=$bdd->exec('update marchand set nom = "'.$nom.'",prenom="'.$prenom.'", adresse = "'.$adresse.'",email="'.$email.'" , pp="'.$pp.'" where idmar = '.$_SESSION['idpers']);
				else
					$res=$bdd->exec('update client set nom = "'.$nom.'",prenom="'.$prenom.'", adresse = "'.$adresse.'",email="'.$email.'" , pp="'.$pp.'" where idclient = '.$_SESSION['idpers']);
				if($res){
					$_SESSION['nom'] = $nom;
					$_SESSION['prenom'] = $prenom;
					$_SESSION['adresse'] = $adresse;
					$_SESSION['email'] = $email;
					$_SESSION['pp']=$pp;
					echo '<script>alert("Modification reussie !!!")</script>';
				}else echo '<script>alert("Echec de la modification !!!")</script>';
				
			}
		}
	?>

<!-- Footer -->
<footer class="page-footer font-small dark darken-3">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright: Gestion immo
  
  
  
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="social-links">
<a href="http://www.facebook.com/"><img src="http://convertkit.com/images/social-icons/facebook.png" alt="Facebook" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="https://twitter.com/"><img src="http://convertkit.com/images/social-icons/twitter.png" alt="Twitter" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="https://instagram.com/"><img src="http://convertkit.com/images/social-icons/instagram.png" alt="Instagram" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="https://www.pinterest.com/"><img src="http://convertkit.com/images/social-icons/pinterest.png" alt="Pinterest" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="https://plus.google.com/"><img src="http://convertkit.com/images/social-icons/google-plus.png" alt="Google Plus" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="http://youtube.com"><img src="http://convertkit.com/images/social-icons/youtube_alt.png" alt="YouTube" width="48" style="text-decoration: none; width: 48px;"></a>
<a href="http://convertkit.com"><img src="http://convertkit.com/images/social-icons/website.png" alt="Website" width="48" style="text-decoration: none; width: 48px;"></a>
  
  
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
</body>
</html>