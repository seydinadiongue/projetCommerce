<?php
  session_start();
?>
<?php	//Page authentification
	$dsn = 'mysql:host=localhost;dbname=base';
	$bdd= new PDO($dsn, 'root', '');	
	$bdd->exec('delete from collection where nomcol="" ');
	if(isset($_POST['pers']) and isset($_POST['email']) and isset($_POST['mdp'])){
		
		$pers = $_POST['pers'];
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];
		if(!empty($pers) and !empty($email) and !empty($mdp)){
			if($pers=='client'){
				$req='select * from client where email = ?  and mdp = ? ';
				$_SESSION['profil']='client';
			}
			else if($pers=='commercant'){
				$req='select * from commercant where email = ?  and mdp = ? ';
				$_SESSION['profil']='commercant';
			}
			else if($pers=='vendeurtable'){
				$req='select * from vendeurtable where email = ?  and mdp = ? ';	
				$_SESSION['profil']='vendeurtable';
			}
			else if($pers=='marchand'){
				$req='select * from marchand where email = ?  and mdp = ? ';
				$_SESSION['profil']='marchand';
			}
			$stmt = $bdd->prepare($req);
			$stmt->bindParam(1,$email);
			$stmt->bindParam(2,$mdp);
			$stmt->execute();
			$t=0;
			if($_SESSION['profil']!="client"){
				if($row=$stmt->fetch()){
					if($row['conf']=='oui'){ 
						$t=1;
						if($pers=='client')					
							$_SESSION['idpers']=$row['idclient'];
						if($pers=='commercant')					
							$_SESSION['idpers']=$row['idcom'];
						if($pers=='vendeurtable')					
							$_SESSION['idpers']=$row['idvend'];
						if($pers=='marchand')					
							$_SESSION['idpers']=$row['idmar'];
						$_SESSION['pp'] = $row['pp'];
						$_SESSION['nom'] = $row['nom'];
						$_SESSION['prenom'] = $row['prenom'];
						$_SESSION['tel'] = $row['tel'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['adresse'] = $row['adresse'];
					}else{
						echo '<script>alert("Vous n\'etes pas encore confirme")</script>';
					}
				}else echo'<script>alert("Login ou mot de passe incorrecte")</script>';
			}else{
				if($row=$stmt->fetch()){
					$t=1;
					if($pers=='client')					
						$_SESSION['idpers']=$row['idclient'];
					if($pers=='commercant')					
						$_SESSION['idpers']=$row['idcom'];
					if($pers=='vendeurtable')					
						$_SESSION['idpers']=$row['idvend'];
					if($pers=='marchand')					
						$_SESSION['idpers']=$row['idmar'];
					$_SESSION['pp'] = $row['pp'];
					$_SESSION['nom'] = $row['nom'];
					$_SESSION['prenom'] = $row['prenom'];
					$_SESSION['tel'] = $row['tel'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['adresse'] = $row['adresse'];
				}else{
					echo'<script>alert("Login ou mot de passe incorrecte")</script>';
				}
				
			}
			
			if($t==1){
				if($pers=="client") header("Location:client.php");
				else header("Location:com.php");
			}else{
				echo "<script>
					$('.err').slideDown('slow');
				</script>";
			}
				
		}else{
			echo '<script>alert("Veuillez remplir tous les champs")</script>';
		}
	}
  ?>
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
      <!-- Page content -->
        <div id="carous" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carous" data-slide-to="0" class="active"></li>
    <li data-target="#carous" data-slide-to="1"></li>
    <li data-target="#carous" data-slide-to="2"></li>
    <li data-target="#carous" data-slide-to="3"></li>
    <li data-target="#carous" data-slide-to="4"></li>
    <li data-target="#carous" data-slide-to="5"></li>
    <li data-target="#carous" data-slide-to="6"></li>
    <li data-target="#carous" data-slide-to="7"></li>
    <li data-target="#carous" data-slide-to="8"></li>
    <li data-target="#carous" data-slide-to="9"></li>
  </ol>
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="margin-top : 3%" class="d-inline w-50" src="en/en1.jpg" alt="Third slide"  height="340px">
      <img style="width : 48%; margin-top : 3%" class="d-inline w-45" src="en/en2.jpg" alt="Third slide"  height="340px">
       <div class="carousel-caption d-none d-md-block">
    <h2 style="; ">Maison moins chère à votre portée</h2>
    <p>Nésitez pas à nous faire signe</p>
  </div>
    </div>
    <div class="carousel-item">
      <img style="margin-top : 3%"class="d-inline w-50" src="en/en3.jpg" alt="Third slide"  height="340px">
      <img style="width : 48%; margin-top : 3%" class="d-inline w-45" src="en/en4.jpg" alt="Third slide"  height="340px">
       <div class="carousel-caption d-none d-md-block">
    <h2>Des appartement à vous couper le soufle</h2>
    <p>Conscients de la crise économique nous vous aidons à louer moins cher</p>
  </div>
    </div>
    <div class="carousel-item">
      <img style="margin-top : 3%"class="d-inline w-50" src="en/en5.jpg" alt="Third slide"  height="340px">
      <img style="width : 48%; margin-top : 3%" class="d-inline w-45" src="en/en6.jpeg" alt="Third slide"  height="340px">
       <div class="carousel-caption d-none d-md-block">
    <h2>Ne cherchez pas loin tout est là</h2>
    <p>Des maisons et terrains à la portée de tous</p>
  </div>
    </div>
	<div class="carousel-item">
      <img style="margin-top : 3%"class="d-inline w-50" src="en/en9.jpg" alt="Third slide"  height="340px">
      <img style="width : 48%; margin-top : 3%" class="d-inline w-45" src="en/en10.jpg" alt="Third slide"  height="340px">
       <div class="carousel-caption d-none d-md-block">
    <h2>Ne cherchez pas loin tout est là</h2>
    <p>Des maisons et terrains à la portée de tous</p>
  </div>
    </div>
     <div class="carousel-item">
      <img style="margin-top : 3%"class="d-inline w-50" src="en/en7.jpg" alt="Third slide"  height="340px">
      <img style="width : 48%; margin-top : 3%" class="d-inline w-45" src="en/en8.jpg" alt="Third slide"  height="340px">
       <div class="carousel-caption d-none d-md-block">
    <h2>Pas loin de la capitale</h2>
    <p>En promotion</p>
  </div>
    </div>
	
	
	
    
    </div>
     
    </div>
  <!--####################################""-->
	
  <!--####################################""-->
  </div>

  <a class="carousel-control-prev" href="#carous" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carous" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-6">
<div class="" style="width:500px; margin-left : 1%; margin-top : 2%; ">
  <div class="card-img-overlay">
    <form class="col-lg-7" action="index.php" method="post" style='background : #DCDCDC ; margin : 1% 0 0 4%;box-shadow : 0px 2px 3px black;background : blac'>
		<legend  style=' text-align : center; font-weight : bold; background : #6495ED ;color : white; border-radius : 5px;'>Connexion</legend>
		<div class='err' style='color : red; display : none'>Email ou password incorrect</div>
		<div class='rem' style='color : orange; display : none'>Vous devez remplir tous les champs</br></br></div>
		<!--Qu'etes vous ? </br>
		client <input type='radio' name='pers' value='client'/> ou vendeur <input type='radio' name='pers' value='vendeur'/></br></br>-->
		<select name='pers' class="form-control" style='height : 40px'>
			<option value=''>Je  suis  :</option>
			<option value='client' style='color : black; font-weight : bold'>Client</option>
			<optgroup label='Vendeur' style='color : black; font-weight : bold'>
				<option value='commercant'>Commercant</option>
				<option value='vendeurtable'>Vendeur de table</option>
				<option value='marchand'>Marchand ambulant</option>
			</optgroup>
		</select></br>
		Email : <input type="text" name="email" class="form-control"/></br>
		Mot de passe : <input type="password" name="mdp" class="form-control">
		</br><input  class='sub form-control btn btn-primary' type='submit' style='font-weight : bold; font-size : 18px;' value='Se connecter' />
		</br></br><h4><a href="#" >Mot de passe oublier ?</a></h4><hr/></br>
		</br><span style='margin-left : 30%;'><a href='connexion.php' class=' btn btn-success' style='font-weight : bold;'>Creer un compte</a></span></br></br>
	</form>
	

  </div>
  
  
  
</div>
</div> <!-- col // -->
<div style="margin-left: 460px ">
<div class="row" style="margin-top: 20px; ">
<div class="col-md-6">
<div class="card" style="width:400px; border : 1px solid blue">
  <img class="card-img-top" src="images/im18.jpg" alt="Card image" style="height:228px">
  <div class="card-img-overlay">
    <h3 style='color : white'>Voici les cantines</h3>
    <p class="card-text">CLIQUER POUR LES VOIR PLUS EN DETAIL</p>
    <a href="cantines.php" class="btn btn-info">VOIR PLUS DE CANTINES ET LEUR PROPRIETAIRES</a>
  </div>
</div>
</div> <!-- col // -->

<div class="col-md-6">
<div class="card" style="width:400px; border : 1px solid blue">  
  <img class="card-img-top" src="images/im19.jpg" alt="Card image" style="height:228px">
  <div class="card-img-overlay">
    <h3 style='color : white'>Voici les tables</h3>
    <p class="card-text">CLIQUER POUR LES VOIR PLUS EN DETAIL</p>
    <a href="vendeur.php" class="btn btn-info">VOIR PLUS DE TABLES ET LES VENDEURS</a>
  </div>
</div>
</div> <!-- col // -->

</div> <!-- row.// -->
<div class="row" style="margin-top: 20px;">
<div class="col-md-6">
<div class="card" style="width:400px; border : 1px solid blue">
  <img class="card-img-top" src="img/march.jpg" alt="Card image" style="height:228px">
  <div class="card-img-overlay">
    <p class="card-text">DISPONIBLES TOUT LE TEMPS.</p>
    <a href="marchand.php" class="btn btn-info">TROUVER LES MARCHANDS AMBULANTS ET </br>LES LIEUX QU'ILS FREQUENTENT LE PLUS</a>
  </div>
</div>
</div> <!-- col // -->


</div> <!-- col // -->

</div> <!-- row.// -->

</div>
</div>
</div>

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
  <div class="footer-copyright text-center py-3">© 2019 Copyright: Votre maché virtuelle
  
  
  
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