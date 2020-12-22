<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title></title>
	
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
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
<body style='background:#F5F5F5' class="container" >

  
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
<div style="margin-top : 7%; margin-left : 5%; margin-bottom : 10%">
<?php
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if(isset($_GET['idcom']) and isset($_GET['cant']) and isset($_GET['lieu'])){
	$idcom = $_GET['idcom'];
	$nomcol = $_GET['col'];
	$cant = $_GET['cant'];
	$lieu = $_GET['lieu'];
	echo '<h2 class="text-center" >Bienvenue chez <span style="color :  #6ab04c; margin-top : 5px">'.$cant.'</span></h2><hr/>';
	echo '<div class="text-center">Faites vos achats ou reservations en ligne. Vous pouvez aussi vous deplacer a <span style="font-weight : bold">'.$lieu.'</span> chez <span style="font-weight : bold">'.$cant.'</span> pour acheter ou reserver</div><hr/>';
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idpers = '.$idcom.' and nomcol="'.$nomcol.'" group by p.idprod ';
	$urls = $bdd->query($req);
	while($url = $urls->fetch()){

		echo '
			<div class="col-md-3" style="margin-bottom : 4%;">
				<div class="" style="width: 225px;margin-bottom : %; border-radius : 0%; border : 1px black solid; background : white">
					<div class="card-body text-center" style="height : 0rem;" >
						<p class="card-text" style="height : 1rem; font-weight : bold">'.$url['nomprod'].' a '.$url['prix'].'CFA</p>
					</div >
					<div class="inner">
						<img style=" margin-top : 3%;width : 200px; height : 150px;margin-left : 5%; margin-right : 5%; border-radius : 10%;" src="'.$url['url'].'" class="card-img-top " alt="..."><hr/>
					</div>
					<div class="text-center" style="height : 3rem; margin-top : -5% " >';?>
						<a href="produit.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>"><input type="submit" value = "Reserver" class="btn btn-primary btn-xs" onclick="document.getElementById('modal-wrapper').style.display='block'"/></a>
						<button class="btn btn-primary btn-xs">Acheter</button>
					<?php echo'	<a href = "detailprod.php?idprod='.$url['idprod'].'&nomprod='.$url['nomprod'].'&cant='.$cant.'" class="btn btn-default btn-xs">Details</a>
					</div>
				</div>
			</div>
		';
	}
	error_reporting(0);
}
?>
<?php 

$bdd = new PDO('mysql:host=localhost;dbname=base', 'root', '');
$stmt = $bdd->query("select * from image i JOIN produit p on p.idprod=i.idprod where p.idprod = ".$_GET['idprod']);
$row = $stmt->fetch();
echo '
<div id="modal-wrapper" class="modal" style=";margin : 10% 0% 0% 35%; ">
<form class="col-lg-6 animate" method="post" action="produit.php?idcom='.$idcom.'&col='.$nomcol.'&cant='.$cant.'&lieu='.$lieu.'&idprod='.$_GET["idprod"].'" style="background-color : rgba(169, 169, 169, 0.7);box-shadow : 5px black; border-radius : %;padding-bottom : 3% ">
	<div style="margin-top : 5%" class="card text-center">
		<span style="vertical-align : middle"><img src="'.$row['url'].'" style="width : 50px; height : 50px; border-radius : 20%"  /><span>
		<span style="vertical-align : middle">Vous souhaitez acheter '.$row['nomprod'].' a '.$row['prix'].' CFA</span>
	</div><hr/>
	<h3 class="text-center" >Authentifiez-vous<h3>
	<div class="text-center reus" style="font-size : 18px;color : white; background : green; margin-bottom : 3%; padding : 2%; display : none">La reservation est envoye avec succes</div>
	<div class="text-center inco" style="font-size : 18px;color : white; background : red; margin-bottom : 3%; padding : 2%;display : none">Login ou mot de passe incorrect</div>
	<div class="text-center remp" style="font-size : 18px;color : white; background : orange; margin-bottom : 3%; padding : 2%;display : none">Veuillez remplir les champs</div>
	<div class="text-center ech" style="font-size : 18px;color : white; background : orange; margin-bottom : 3%; padding : 2%;display : none">Echec de l\'insertion</div>
	<input type="text" class="form-control" name="login" placeholder="Login"/></br>
	<input type="text" class="form-control" name="mdp" placeholder="mdp"/></br>
	<input type="submit" value="Confirmer l\'achat" class="sub form-control btn btn-primary">
</form>
</div>';
?>

<?php
	$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
	$req = "INSERT INTO `reserver`(`idprod`, `idclient`) VALUES (:idprod, :idclient)";
	$stmt = $bdd->prepare($req);
	if(isset($_POST['login']) and isset($_POST['mdp'])){
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		if(!empty($login) and !empty($mdp)){
			$st = $bdd->query('SELECT * FROM `client` WHERE email like "'.$login.'" and mdp like "'.$mdp.'"');
			$res = $st->fetch();
			if($res){
				$stmt = $bdd->exec('INSERT INTO `reserver`(`idprod`, `idclient`, date) VALUES ('.$_GET['idprod'].', '.$res['idclient'].', now())');
				if($stmt)
					echo "<script>$('.reus').slideDown('slow')</script>";
				else
					echo "<script>$('.ech').slideDown('slow')</script>";
			}
			else
				echo "<script>$('.inco').slideDown('slow')</script>";
		}else echo "<script>$('.remp').slideDown('slow')</script>";
	}
?>

<?php
	if(isset($_GET['idprod'])){
		echo "<script>document.getElementById('modal-wrapper').style.display='block'</script>";
	}
?>
<script>
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event){
	if(event.target == modal){
		modal.style.display = "none";
	}
}
</script>
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