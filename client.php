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
	<script src='jquery-3.4.1.min.js'></script>
	<script src='script.js'></script>
	<script src='notif_client.js'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
	<style type="text/css">
        .row{
    margin-left:0px;
    margin-right:0px;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 4%;
    width: 60%;
    <!--background: #f8f9fa;-->
    font-weight: bold;
    color: #383d41;
    margin-top: 4%;
    margin-bottom: 5%;
    cursor: pointer;
	display : inline-block;
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
.register-left img{
    margin-top: 0%;
    margin-bottom: 0%;
    width: 50%;
	margin-left : 5%;
	height : 18%;
	border-radius: 50%;
    <!---webkit-animation: mover 2s infinite  alternate;-->
    animation: mover 1s infinite  alternate;
}
#lui{
	margin-bottom : 10%;
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
<body style='background:url("im_fond/fo1.JPG"); background-size : 100% 100%'>

  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='jquery-3.4.1.min.js'></script>
	<script src='script.js'></script>
	<script src='script1.js'></script>
	<script src='notif_client.js'></script>
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
	$bdd = new PDO("mysql:host=localhost;dbname=base", "root", "");
	if(isset($_GET['id'])){
		$req = 'update chat set lu=1 where envoyeur='.$_GET['id'];
		$bdd->exec($req);
	}
	?>
					
	<div class="container-fluid register" style="padding-top : 5%;border-top : 5px solid black;">
		<div class="col-md-3 register-left" style="margin-right : -7%; ">
			<div id="lui">
			<a href="luimeme_client.php"><img style="border :5px solid white; width : 50%" src = "<?= $_SESSION['pp']?>" alt="Profil" /></a></br>
			<h3 class="text-center" style=" width : 60%"><?='<div style="font-family : italic; font-weight : bold">'.$_SESSION['prenom'].' <span style="text-transform : uppercase">'.$_SESSION['nom'].'</span></div>'?></h3>
			</div>
			<input class="discuss btn btn-primary" style="font-weight : bold; color:white " type="submit" name="espaceClient" value="Discussion" onclick="document.getElementById('modal-wrapper').style.display='block'"/> <br/>
			<input class="not btn btn-primary" style="font-weight : bold; color:white " type="submit" name="espaceClient" value="Notification" onclick="document.getElementById('notif').style.display='block'"/> <br/>
			<a href="favoris.php" ><input class="btn btn-primary" style="font-weight : bold; color:white" style="margin-bottom : 20%" type="submit" name="supprimer" value="Mes favoris"/></a><br/>
		</div>
		
	<script> 
	</script>
</div>
		<div class="col-md-" style="width : 78%;height : 585px;background : white; border-radius : 50px 0% 0 0%;margin :-1% 0 0 0; overflow-y : scroll; overflow-x : hidden">
		
		<div id="modal-wrapper" class="modal row" style=";margin : 4.3% 0% 0% 0%; width : 100%; height : 90%; background :  ; border : px solid black;">
			<div class="disc1 col-lg-2 col-lg-offset-2" style="background : grey; height : 100%; ">
			
				<?php
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
							echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red;float : right; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
						else
							echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
					echo '</div><hr/></a>';
				}
				//##########################################
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
				?>
			</div>
			
			<div class="col-lg-4 " style="background : #E6E6FA  ; height : 100%;">
				<?php if(isset($_GET['id'])){ ?>
				<?php
				echo '<h3 class="text-center" style="height : 5%">';
				if(isset($_GET['id'])){
					$row = $bdd->query('select * from commercant where idcom = '.$_GET['id'])->fetch();
					echo '<img src="'.$row['pp'].'" style="width : 40px; height : 35px;float : left; border-radius : 50%; "/>';
					echo $row['prenom'].' '.$row['nom'];
				}
				echo '</h3>';
				if(isset($_POST['message'])){
					$req= 'insert into chat (envoyeur, receveur, message, date) values(:envoyeur,:receveur, :message, now())';
					$stmt=$bdd->prepare($req);
					if(!empty($_POST['message'])){
						$stmt->bindParam(':envoyeur', $_SESSION['idpers']);
						$stmt->bindParam(':receveur', $_GET['id']);
						$stmt->bindParam(':message', $_POST['message']);
						if($stmt->execute()) echo '<script>alert("reussie")</script>';
						else echo '<script>alert("Echec")</script>';
					}else{
						echo '<script>alert("Veuillez remplir tous les champs")</script>';
					}
				}
				?>
				<div class='chatbox afficher' id="afficher" style="background : #F8F8FF ; height : 75%; overflow-y : scroll">
						<!--C'est ici qu'on affiche la discussion-->
				</div>
				<div class='chat-form' style = "margin-top : 2%">
					<form method='post' name="form1"  class='formulaire' action='client.php?id=<?=$_GET['id']?>'>
						<input type='text' placeholder='Saisissez message' name="message" style = 'height : 60px; boder-radius : 200px' class='message form-control'/>
						<input class='submit' onclick = "submit()" style="display : none; height : 500px" type='submit' value='Envoyer'/>
					</form>
				</div>
				<?php } ?>
			</div>
			
		</div>
		<?php
		if(isset($_GET['id'])){
			$_SESSION['receveur'] = $_GET['id'];
			echo'<script>document.getElementById("modal-wrapper").style.display="block"</script>';
		}
		?>
			<?php
				echo '<div class="text-center fixed" style="">
					<a href="client.php"><input class="btn btn-info" style="font-weight : bold;float : left;margin : 2% 0 0 5% " type="submit" name="espaceClient" value="Cantines" /> </a>
					<a href="marchand_connect.php"><input class="btn btn-default" style="font-weight : bold;  margin : 2% 0 0 0" type="submit" name="accueil" value="Marchand ambulant"/></a>
					<a href="vendeur_connect.php" ><input class="btn btn-default" style="font-weight : bold; float : right;margin : 2% 5% 0  "  type="submit" name="supprimer" value="Vendeur de table"/></a>
				</div><hr/>';
			?>
				<!--#########################Affichage des cantines############################################-->
		<div class="form-group col-lg-6" style="margin : 1% 0 2% 25%">
			<div class="input-group">
				<span class="input-group-addon">Recherche</span>
				<input type="text" name="search" id="search" placeholder="Saisissez le nom de la cantine que vous recherchez" class="form-control"/>
			</div>
		</div>
		<div id="result"></div>
		<?php
		echo '<div class="tout" style="margin-left : 5%">';
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
								echo'<button data-id="'.$url['idcom'].'" class="ab btn btn-default btn-xs" style="margin-right : %">vous etes abonnĂ©</button>';
							echo '<a href="collections_connect.php?idcom='.$url['idcom'].'" class="btn btn-default btn-xs" style="margin-left : %">voir les collections</a>
						</div>
					</div>
				</div>
			';
			error_reporting(0);
		}
		echo "</div>";
		
				//######################################Insertion de l'abonnement################################
				if(isset($_GET['idcom'])){
					$row = $bdd->query("select * from abonner where idclient=".$_SESSION['idpers']." and idcom=".$_GET['idcom'])->fetch();
					if(!$row){
						$bdd->exec("Insert into abonner(idclient, idcom) values (".$_SESSION['idpers'].", ".$_GET['idcom'].")");
						if($res){
							echo'<script>alert("Abonnement reussi")</script>';
							unset($_GET['idcom']);
						}
					}else{
						$res = $bdd->exec("delete from abonner where idclient=".$_SESSION['idpers']." and idcom=".$_GET['idcom']);
						if($res){
							echo'<script>alert("Vous etes desabonnĂ©")</script>';
							unset($_GET['idcom']);
						}
					}
				}
				//###############################################################################################
				
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
<script src='jquery-3.4.1.min.js'></script>
	<script src='script.js'></script>
	<script src='notif_client.js'></script>
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
  </div>

  <!-- Copyright -->

</footer>
<!-- Footer -->

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src='jquery-3.4.1.min.js'></script>
	<script src='script.js'></script>
	<script src='notif_client.js'></script>
	
	<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
  </div>
</body>
<div id="notif" style="margin : 0% 0 0 16%; width : 30%;  overflow : hidden" class="modal" role="dialog">
		<div class="modal-dialg">
			<div class="modal-content">
				
				<div class="modal-body" style="height : 610px; overflow-y : scroll">
					<span style="font-weight : bold" class="text-center modal-title">Notification</span>
					<button type="button"  style="float : right" class="btn btn-danger btn-xs" data-dismiss="modal" onclick="document.getElementById('notif').style.display='none'">X</button><hr/>
					<div id="resultat_notif">
					<!--C'est ici que s'affiche tous les notification de ce client-->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</html>
<script>
		var modal = document.getElementById('modal-wrapper');
		window.onclick = function(event){
			if(event.target == modal){
				modal.style.display = "none";
			}
		}
	function submit(){
		if(form1.uname.value == ''){
			alert('rempli les champs please');
		}
		var msg = form1.message.value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('afficher').innerHTML = xmlhttp.responseText;
			}
			xmlhttp.open('GET', 'insertion.php', true);
			xmlhttp.send();
		}
	}
</script>
<script>
		
		$(document).ready(function(){
			
			$(document).on('click','.ab',function(){
				var idpers;
				idpers = $(this).data('id');
				$.ajax({
					url:"abonne.php",
					method:"post",
					data:{idpers:idpers},
					dataType:"text",
					success:function(data){
						aff_cantines();
					}
				});
			});
			
			$('#search').keyup(function(){
				$('.tout').hide('fast');
				var txt = $(this).val();
				if(txt!= ""){
					$.ajax({
						url:"fetch_connect.php",
						method:"post",
						data:{search:txt},
						dataType:"text",
						success:function(data){
							$('#result').html(data);
						}
					});
				}else{
					$('#result').html('');
					$.ajax({
						url:"fetch_connect.php",
						method:"post",
						data:{search:txt},
						dataType:"text",
						success:function(data){
							$('#result').html(data);
						}
					});
				}
			});
			$(document).on('click','.not',function(){
				$.ajax({
					url:"lu.php",
				});
			});
			function nbNot(){
				$.post('nb_notif.php', function(data){
					$('.not').val(data);
					var d = $('.discuss').val();
				});
			}
			function aff_cantines(){
				$.ajax({
					url:"aff_cantines.php",
					method:"post",
					// data:{search:txt},
					dataType:"text",
					success:function(data){
						$('.tout').html(data);
					}
				});
			}
			// setInterval(aff_cantines, 300);
			setInterval(nbNot, 100);
			
		});
		
	</script>