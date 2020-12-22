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
  
 
<?php
  	$dsn = 'mysql:host=localhost;dbname=base';
	$bdd= new PDO($dsn, 'root', '');
	$req = 'Select * from produit p JOIN image i on p.idprod=i.idprod where p.idpers = '.$_SESSION['idpers'].' group by p.idprod';
	$stmt = $bdd->query($req);
	echo '<table class="table" style=" margin : auto; margin-top : 7%; width : 70%">
		<thead>
			<tr class="something">
				<th scope="col" style="text-align : center;">Photos</th>
				<th scope="col" style="text-align : center; ">Nom</th>
				<th scope="col" colspan="2" style="text-align : center; ">Edition</th>
			</tr>
		</thead>
		<tbody>';
		while($row = $stmt->fetch()){
			$supp = 'editer.php?idprod='.$row['idprod'].'&act=supp';
			$mod = 'editer.php?idprod='.$row['idprod'].'&act=mod';
			echo'
			<tr class="something">
				<td style="text-align : center; "><img style="height:50px; width : 50px" src="'.$row["url"].'" alt="Photo de produit"/></td>
				<td style="text-align : center; ">'.$row['nomprod'].'</td>
				<td style="text-align : center;"><button class="btn btn-default test" onclick="$(\'#confirmModal\').modal(\'show\')">Supprimer</button></td>
				<div id="confirmModal" style="margin-left : 37%; width : 25%" class="modal" role="dialog">
				<div class="modal-dialg">
					<div class="modal-content">
						
						<div class="modal-body">
							<h3 class="text-center modal-title">Confirmer</h3>
							<h5 class="text-center">Voulez-vous vraiment supprimer ce produit ?</h5><hr/>
							<a href="'.$supp.'" class="btn btn-danger" >Supprimer</a>
							<button type="button"  style="float : right" class="btn btn-default" data-dismiss="modal">Annuler</button>
						</div>
						
					</div>
				</div>
				</div>
				<td style="text-align : center;"><a href='.$mod.' class="btn btn-default">Modifier</a></td>
			</tr>
			';
		}
	echo'</tbody>
	</table>';
	
	//==================================Formulaire de modification============================================
	
	if(isset($_GET['idprod']) and isset($_GET['act']) and $_GET['act']=="mod"){
		echo'<div  class="form" style="margin-left:30%; margin-bottom : 20%; display : none">';
			echo"<h2 style='text-align : center; margin-bottom : 5%;'>Modification de produit</h2>";
			$stmt=$bdd->query('select * from produit where idprod='.$_GET['idprod']);
			$row = $stmt->fetch();
			$stmt1=$bdd->query('select * from collection where idcom='.$row['idpers'].' and nomcol not in (select nomcol from produit where idprod='.$_GET['idprod'].')');
			echo'
			<form  class="col-lg-7" method="post" action="editer.php?idprod='.$_GET['idprod'].'">
				Nom produit : <input class="form-control" type="text" name="nomprod" value="'.$row['nomprod'].'"/></br>
				Prix en FCFA : <input class="form-control" type="text" name="prix" value="'.$row['prix'].'"/></br>
				Collection : <select style="height : 35px" name="nomcol" class="form-control">';
					echo '
						<option value='.$row['nomcol'].'>'.$row['nomcol'].'</option>
						';
					while($row1=$stmt1->fetch()){
						echo '
						<option value='.$row1['nomcol'].'>'.$row1['nomcol'].'</option>
						';
					}
				echo '</select></br>
				Description : <input class="form-control" type="textarea" name="description" value="'.$row['description'].'" row="6"/>
				</br><input style="float : right; margin-bottom : 10%;" type="submit" class="btn btn-primary" value="Modifier">
			</form>
			';
		echo '</div><hr/>';
		echo"<script>
										
			$('.table').slideUp();
			$('.form').slideDown();
			
		</script>";
	}
	
	
?>  
<!--#######################################POPUP##################################################-->
	
	
<!--##############################################################################################-->
<!---->
<?php
 //==============================Code de modification=================================================
	
	if(isset($_GET['idprod']) and isset($_POST['nomcol']) and isset($_POST['nomprod']) and isset($_POST['description'])){
		$nomcol = $_POST['nomcol'];
		$nomprod = $_POST['nomprod'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		if(!empty($nomprod) and !empty($prix) and !empty($description)){
			$res = $bdd->exec("UPDATE `produit` SET `nomprod`='".$nomprod."',`description`='".$description."',`nomcol`='".$nomcol."',`prix`=".$prix." WHERE idprod=".$_GET['idprod']);
			if($res)
				echo '<script>alert("Modification reussie !!!!")</script>';
			else
				echo '<script>alert(" Echec de la modification")</script>';
		}
	}
 ?>
<!--#######################################################################################################################-->

<?php
	$dsn = 'mysql:host=localhost;dbname=base';
	$bdd= new PDO($dsn, 'root', '');
	if(isset($_GET['idprod']) and isset($_GET['act'])){
		if($_GET['act']=='supp'){
			$rowe = $bdd->query('select * from reserver where accept="oui" and idprod='.$_GET['idprod'])->fetch();
			if(!$rowe){
				$bdd->exec("delete from produit where idprod=".$_GET['idprod']);
				$bdd->exec("delete from image where idprod=".$_GET['idprod']);
			}else{
				echo '<script>alert("Suppression impossible, ce produit est reserver par un client")</script>';
			}
		}
		
	}
?>
<div id="confirmModal" style="margin-left : 37%; width : 25%" class="modal" role="dialog">
	<div class="modal-dialg">
		<div class="modal-content">
			
			<div class="modal-body">
				<h3 class="text-center modal-title">Confirmer</h3>
				<h5 class="text-center">Voulez-vous vraiment supprimer ce produit ?</h5><hr/>
				<button type="button" name="ok_button" id="ok_button" class="btn btn-danger" >Supprimer</button>
				<button type="button"  style="float : right" class="btn btn-default" data-dismiss="modal">Annuler</button>
			</div>
			
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
	$(document).ready(function(){
		var user_id;
		$(document).on('click', '.test', function(){
			$('#confirmModa').modal('show');
		})	
	})
</script>
</body>
</html>