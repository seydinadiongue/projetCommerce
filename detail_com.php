<?php session_start() ?>
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
<body style='background:#F5F5F5; background-size : 100% 130%' class="container-fluid" >

  
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
	if(isset($_GET['nomprod'])){
		echo '<h2 class="text-center" style="margin-top : 6%; font-family : italic;letter-spacing : 4px">Plus d\'informations sur <span style="font-weight : bold">'.$_GET['nomprod'].'</span></h2><hr/>';
	}
?>
<div style=" margin-right : 3%; margin-bottom : 10%" class="col-lg-7">
<?php
$dsn = 'mysql:host=localhost;dbname=base';
$bdd= new PDO($dsn, 'root', '');
if(isset($_GET['idprod']) and isset($_GET['nomprod'])){
	$idprod = $_GET['idprod'];
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idprod = '.$idprod;
	$urls = $bdd->query($req);
	//echo '<h2 class="text-center">'.$urls->fetch()['nomprod'].'</h2>';
	while($url = $urls->fetch()){

		echo '
			<div class="col-md-4" style="margin-bottom : 25px;">
				<div class="" style="width: 301px;margin-bottom : 3%; border-radius : 0%; ">
					
					<div class="inner">
						<img style=" margin-top : 3%;width : 200px; height : 170px;margin-left : 15%; border-radius : 10%;" src="'.$url['url'].'" class="card-img-top " alt="...">
					</div>
					
				</div>
			</div>
		';
	}
	error_reporting(0);
}
?>
</div>
<div class="col-lg-4" style="margin-top : 2%; font-size : 20px">
	<?php
	 $dsn = 'mysql:host=localhost;dbname=base';
	$bdd= new PDO($dsn, 'root', '');
	if(isset($_GET['idprod'])){
	$idprod = $_GET['idprod'];
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idprod = '.$idprod;
	$req1 = 'select cli.idclient, nom, prenom, pp, count(*) as nb from reserver r join client cli on r.idclient=cli.idclient where r.idprod = '.$_GET['idprod']." and accept='oui'";
	
	$urls = $bdd->query($req);
	$url = $urls->fetch();
	
	$urls1 = $bdd->query($req1);
	$url1 = $urls1->fetch();
	
	echo '<span style="font-weight : bold; text-decoration : underline">Description</span> : '.$url['description'].'<hr/>' ;
	echo '<span style="font-weight : bold; text-decoration : underline">Prix</span> : '.$url['prix'].' FCFA<hr/>' ;
	if($url1['nb']==1)	//S'il y a une une reservation sur ce produit
		echo '<span style="font-weight : bold; text-decoration : underline">Reserve par</span> : <a href="luimeme_client.php?idclient='.$url1['idclient'].'">'.$url1['prenom'].' '.$url1['nom'].'
				 <img src="'.$url1['pp'].'" style="width : 40px; height : 40px; border-radius : 20%; margin-left : 20%"/><br/></a>
				 <button class="btn btn-primary btn-xs test" onclick="$(\'#confirmModal\').modal(\'show\')" style="margin-left : 35%">Annuler la reservation</button><br/>
				 <div  style="font-size : 17px">(Cette reservation empeche le produit d\'etre en ligne)</div><hr/>' ;
	
	error_reporting(0);
	echo'
	<script>
		function bonjour(){alert("hello")}
	</script>
	';
}
	//---------------------------------Annuer la resrvation----------------------------------------
	if(isset($_GET['del'])){
		$row = $bdd->query("select idclient from reserver where idprod=".$_GET['idprod'])->fetch();
		$idclient = $row['idclient'];
		$res = $bdd->exec("delete from reserver where idprod=".$_GET['idprod']);
		$res2 = $bdd->exec("delete from favoris where idclient=".$idclient." and idprod=".$_GET['idprod']);
		if($res){
			if($_SESSION['profil']=="marchand")
				$r = $bdd->exec("insert into notif_client(idcom,idclient,pro_com,idprod, action,date) values (".$_SESSION['idpers'].", ".$idclient.",'marchand', ".$_GET['idprod'].",'annulle_reserv' ,now())");
			else if($_SESSION['profil']=="vendeurtable")
				$r = $bdd->exec("insert into notif_client(idcom,idclient,pro_com,idprod, action,date) values (".$_SESSION['idpers'].", ".$idclient.",'vendeurtable', ".$_GET['idprod'].",'annulle_reserv' ,now())");
			else 
				$r = $bdd->exec("insert into notif_client(idcom,idclient,idprod, action,date) values (".$_SESSION['idpers'].", ".$idclient.", ".$_GET['idprod'].",'annulle_reserv' ,now())");
			if($r)
				echo '<script>alert("Reservation est annule avec succes")</script>';
			else
				echo '<script>alert("Echec enregistrement notif")</script>';
		}
		else echo '<script>alert("Echec")</script>';
	}
	//---------------------------------------------------------------------------------------------
	?>
	<div id="confirmModal" style="margin-left : 37%; width : 25%" class="modal" role="dialog">
		<div class="modal-dialg">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="text-center modal-title">Confirmer</h3>
					<h5 class="text-center">Souhaitez-vous vraiment annuler la reservation ?</h5><hr/>
					<a href="detail_com.php?idprod=<?=$_GET['idprod']?>&nomprod=<?=$_GET['nomprod']?>&cant=<?=$_GET['cant']?>&del=yes" class="btn btn-danger" >Confirmer</a>
					<button type="button"  style="float : right" class="btn btn-default" data-dismiss="modal">Annuler</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$(document).on('click', '.test', function(){
		alert('rrrrrrrrr')
	}
})
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
		
	})
});
</script>
</body>
</html>
<script>
$(document).ready(function(){
		$(document).on('click', '.test', function(){
			$('#confirmModal').modal('show');
		})
</script>