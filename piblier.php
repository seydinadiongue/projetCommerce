<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css"> <!--CSS de la page-->
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    padding-top: 1%;
    padding: 3%;
	border-radius : 10%
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 0%;
    margin-bottom: 4%;
	margin-left : -2%
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 1%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 4%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register{
	background : #B0C4DE;
	margin-top : 3%;
	padding-top : 2%;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
	overflow-y : hidden;
}
.register-left img{
    margin-top: 0%;
    margin-bottom: 0%;
    width: 50%;
	height : 30%;
    <!---webkit-animation: mover 2s infinite  alternate;-->
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left{
	background : gblue;
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 5%;
	padding-left : 10%;
	padding-right : 10%;
    margin-top: 0%;
}
.register .nav-tabs .nav-link{
    padding: 0%;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register-heading{
    text-align: center;
    margin-top: 10%;
    margin-bottom: -15%;
    color: #495057;
}
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-default" style="height : 8%">	<!--Menu de navigation-->
    <div class="container-fluid">
		<li class="nav-item ">
            <img  style="width : 60px; border-radius : 50%; margin : 5% 30px 5% 0%" src="market.jpg" alt="logo"/>
          </li>
		 
      <a class=" navbar-brand" href="index.php">Accueil
              <span class="sr-only">(current)</span>
      </a>
	  <a class=" navbar-brand" style="margin-left : 5%" href="index.php">Regle de confidentialite
            <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" style="color : white; border-left : 1px solid white">Rejoignez-nous au 338362689/777327178</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>
  <body style="margin-top : 4.5%; ">


  

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='jquery-3.4.1.min.js'></script>
	<script src='script.js'></script>
	<script src='script1.js'></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid register" style="border-top : 2px solid black; margin-top : -0.5%">
                <div class="row">
					<?php	//Profil du commercant
					$bdd=new PDO("mysql:host=localhost; dbname=base", 'root', '');
					$ro = $bdd->query("select count(*) as nb from reserver")->fetch();
					echo'
                    <div class="col-md-3 register-left">
                        <!--<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>-->
                        <a href="luimeme.php"><img src="'.$_SESSION['pp'].'" style="border-radius : 50%; border :4px solid white" alt=""/></a>
                        <h3>'.$_SESSION['prenom'].' '.$_SESSION['nom'].'</h3>
                        <p>Vous souhaitez mettre en vente votre bien</p>
						<a href="piblier.php"><input type="submit" name="espaceClient" value="Publier"/> </a><br/>
					    <a><input class="discuss" type="submit" name="espaceClient" value="Discussion" onclick="document.getElementById(\'modal-wrapper1\').style.display=\'block\'"/> </a><br/>
					    <input type="submit" name="accueil" value="Notification" onclick="document.getElementById(\'modal-wrapper\').style.display=\'block\'"/><br/>
						<a href="editer.php" ><input style="margin-bottom : 20%" type="submit" name="supprimer" value="Edition"/></a><br/>
                    </div>';
					'';?>
					<?php
					if(isset($_GET['id'])){
						$req = 'update chat set lu=1 where envoyeur='.$_GET['id'];
						$bdd->exec($req);
					}
					?>
					<?php
					$bdd=new PDO("mysql:host=localhost; dbname=base", 'root', '');
					if(isset($_POST['supp'])){
						$idreserv = $_POST['supp'];
						$req = "delete from reserver where idreserv=".$idreserv;
						$res = $bdd->exec($req);
						if($res) {
							echo'<script>alert("reussie")
							document.getElementById("modal-wrapper").style.display = "block"</script>';
						}
						else echo'<script>alert("reussie")</script>';
					}else if(isset($_POST['accept'])){
						$idreserv = $_POST['accept'];
						$req = "update reserver set accept='oui' where idreserv=".$idreserv;
						$res = $bdd->exec($req);
						if($res) {
							echo'<script>
							document.getElementById("modal-wrapper").style.display = "block"</script>';
						}
						else echo'<script>alert("reussie")</script>';
					}
					?>
					<!--==============================================CHAT===============================================-->
					<div id="modal-wrapper1" class="modal row" style=";margin : 3.5% 0% 0% 0%; width : 100%; height : 92%; background :  ; border : px solid black;">
						<div class="col-lg-6" style="background :  #E6E6FA; height : 100%; margin-left : 20%">
							<?php
							echo '
								<div style="float : right; width : 61%;  margin : 2% 0 0 0">
								<h5 class="text-center" style="height : 5%; ">';
								if(isset($_GET['id'])){
									$row = $bdd->query('select * from client where idclient = '.$_GET['id'])->fetch();
									echo '<img src="'.$row['pp'].'" style="width : 40px; height : 35px;float : left; border-radius : 50%; "/>';
									echo '<span style="margin-left : 2%">'.$row['prenom'].' '.$row['nom'].'</span>';
								}
							echo '</h5>
									</div>';?>
							<?php if(isset($_GET['id'])){ ?>
							<div class="afficher" style="float : right; width : 63%;height : 75%; background : #F8F8FF; margin : 2% 0 0 0; overflow-y : scroll">
							</div>
							<?php } ?>
							<div style="float : right; width : 63%;  margin : 1% 0 0 0">
								<?php if(isset($_GET['id'])){ ?>
								<?php
								
								if(isset($_POST['message'])){
									$req= 'insert into chat (envoyeur, receveur, message, date) values(:envoyeur,:receveur, :message, now())';
									$stmt=$bdd->prepare($req);
									if(!empty($_POST['message'])){
										$stmt->bindParam(':envoyeur', $_SESSION['idpers']);
										$stmt->bindParam(':receveur', $_GET['id']);
										$stmt->bindParam(':message', $_POST['message']);
										$stmt->execute();
									}else{
										echo '<script>alert("Veuillez remplir tous les champs")</script>';
									}
								}
								?>
								
								<div class='chat-form' style = "margin-top : 2%">
									<form method='post' name="form1"  class='formulaire' action='com.php?id=<?=$_GET['id']?>'>
										<input type='text' placeholder='Saisissez message' name="message" style = 'height : 60px; boder-radius : 200px' class='message form-control'/>
										<input class='submit' onclick = "submit()" style="display : none; height : 500px" type='submit' value='Envoyer'/>
									</form>
								</div>
								<?php } ?>
							</div>
							
							<div style="width : 37%;background : grey; height : 100%; overflow-y : scroll; overflow-x : hidden; margin-left : -3%; padding-left : 2%">
								<?php
								$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
								$da = $bdd->query('select distinct date from reserver');
								$ro = $bdd->query("select count(*) as nb from reserver")->fetch();
								echo'<h5 class="text-center card" style="margin :2% 5% 5% 0">Discussion</h5><hr/>';
								$req = "select * from chat ch join client cli on ch.receveur=cli.idclient or ch.envoyeur=cli.idclient where ch.envoyeur=".$_SESSION['idpers']." or  ch.receveur=".$_SESSION['idpers']." group by cli.tel";
								$stmt = $bdd->query($req);

									while($row = $stmt->fetch()){
										$r = $bdd->query('select count(*) as nb from chat ch where lu=0 and  ((ch.envoyeur='.$row['idclient'].' and ch.receveur='.$_SESSION['idpers'].')) ')->fetch();
										if($_SESSION['idpers']==$row['envoyeur'])
										echo '<a href="?id='.$row['receveur'].'" style="color : white"><div class="row">';
										else
										echo '<a href="?id='.$row['envoyeur'].'" style="color : white"><div class="row">';
											echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
											if($r['nb']!=0)
												echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
											else
												echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].'</span> </div>';
										echo '</div><hr/></a>';
									}
								
								?>
							</div>
						</div>
					</div>
					<?php
					if(isset($_GET['id'])){
						$_SESSION['receveur'] = $_GET['id'];
						echo'<script>document.getElementById("modal-wrapper1").style.display="block"</script>';
					}
					?>
					<!--=============================================================================================-->
					<div id="modal-wrapper" class="modal" style=";margin : 4.3% 0% 0% 20%; width : 30%; height : 90%; background : #D3D3D3 ; border : px solid black; border-radius : 2%;overflow-y : scroll">
						
					</div>
					<script>
					var modal = document.getElementById('modal-wrapper');
					window.onclick = function(event){
						if(event.target == modal){
							modal.style.display = "none";
						}
					}
					var modal1 = document.getElementById('modal-wrapper1');
					window.onclick = function(event){
						if(event.target == modal1){
							modal1.style.display = "none";
						}
					}
					</script>
					<?php
						$lign = $bdd->query('select photo from cantine where idcom = '.$_SESSION['idpers'])->fetch();
						
					 echo '<div class="row col-md-9 register-right" style="height : 590px; margin : -2% -10% -5% -3%; background :  url('.$lign['photo'].'); background-size : 100% 100% ">';
                    ?>
						<form class="col-lg-8" style="margin :3% 16%" action="piblier.php" method="POST" enctype='multipart/form-data' >
										<legend class="text-center card">Publier un produit de votre choix</legend>
										<div class='reus text-center' style='font-size : 25px;color : white; background : green; display : none'>Publication reussie</div>
										<div class='remp text-center' style=' font-size : 25px;color:white; background : orange; display : none'>Veuillez remplir tous les champs</div></br>
										<input type="text" name="nomprod" class="form-control" placeholder="Nom produit"/></br>
										<?php
										if($_SESSION['profil']=="commercant"){
											$dsn = 'mysql:host=localhost;dbname=base';
											$bdd= new PDO($dsn, 'root', '');
											$stmt = $bdd->query('select * from collection where idcom='.$_SESSION['idpers']);
											echo '<select name="nomcol" class="form-control">';
											echo '<option value="">Choisissez votre collection</option>';
											while($row=$stmt->fetch()){
												echo
												'<option value="'.$row["nomcol"].'">'.$row["nomcol"].'</option>';
											}
											echo '</select></br>';
										}
										?>
										<input type="text" name="prix" class="form-control" placeholder='Prix'></br>
										<input type="file" name="image[]" multiple class="form-control" ></br>
										<textarea name="description" class="form-control"  rows='4' placeholder='Description du produit'></textarea></br>
										<input  class='sub form-control btn btn-primary' type='submit' style='font-weight : bold; font-size : 18px;' value='Publier' />
									</form>
									<?php	//Formulaire d'insertion de produit
									$dp='mysql:host=localhost;dbname=base';
									$bd=new PDO($dp,'root','');
									if($_SESSION['profil']=="commercant"){
										if(isset($_POST['nomcol']) and isset($_POST['nomprod'])  and isset($_POST['prix'])  and isset($_POST['description']) and isset($_FILES['image']))
										{
											error_reporting(0);
											$nomcol=$_POST['nomcol'];
											$nomprod=$_POST['nomprod'];
											$prix=$_POST['prix'];
											$description=$_POST['description'];
											if(!empty($nomcol) and !empty($nomprod) and !empty($prix) and !empty($description) ){
												$samba="INSERT INTO `produit`( `nomprod`, `description`, `nomcol`, `prix`, idpers, date) VALUES ('$nomprod','$description','$nomcol','$prix', ".$_SESSION['idpers'].", now())";
												$idcom = $_SESSION['idpers'];
												$res=$bd->exec($samba);
												if($res ){
													echo "<script>
														$('.reus').slideDown('slow');
													</script>";
													//--------------------------On notifie les clients s'abbonés--------------------------------
													$stmt = $bdd->query("select distinct idclient from abonner where idcom=".$idcom);
													$idprod = $bd->lastInsertId();
													while($row = $stmt->fetch()){
														$bdd->exec("insert into notif_client (idcom, idclient, idprod, action, date) values (".$idcom.", ".$row['idclient'].", ".$idprod.", 'publication', now())");
													}
													//-----------------------------------------------------------------------------------------
												}
												$sqll='insert into image(url,idprod) values(:definitif,:idprod)';
												$stmtt=$bd->prepare($sqll);
												$idprod=$bd->lastInsertId();
												$n=count($_FILES['image']);
												for($i=0;$i<$n;$i++){
													if(($_FILES['image']['error'][$i])==0)
													{
														$tmp=$_FILES['image']['tmp_name'][$i];
														if(!(is_dir('im_serveur')))
															mkdir('im_serveur');
														$definitif="im_serveur/".$_FILES['image']['name'][$i];
														if(!empty($_FILES['image']['name'][$i])){
															move_uploaded_file($tmp,$definitif);	
															$stmtt->execute(array('definitif'=>$definitif,'idprod'=>$idprod)); 
														}
													}
												}
											}else echo "<script>
														$('.remp').slideDown('slow');
													</script>";
											
										}
									}else{
										if(isset($_POST['nomprod'])  and isset($_POST['prix'])  and isset($_POST['description']) and isset($_FILES['image']))
										{
											error_reporting(0);
											$nomprod=$_POST['nomprod'];
											$prix=$_POST['prix'];
											$description=$_POST['description'];
											$samba="INSERT INTO `produit`( `nomprod`, `description`, `prix`, idpers, date) VALUES ('$nomprod','$description','$prix', ".$_SESSION['idpers'].", now())";
											$idcom = $_SESSION['idpers'];
											$res=$bd->exec($samba);
											if($res ){
												echo "<script>
													$('.reus').slideDown('slow');
												</script>";
											}
											$sqll='insert into image(url,idprod) values(:definitif,:idprod)';
											$stmtt=$bd->prepare($sqll);
											$idprod=$bd->lastInsertId();
											$n=count($_FILES['image']);
											for($i=0;$i<$n;$i++){
												if(($_FILES['image']['error'][$i])==0)
												{
													$tmp=$_FILES['image']['tmp_name'][$i];
													if(!(is_dir('im_serveur')))
														mkdir('im_serveur');
													$definitif="im_serveur/".$_FILES['image']['name'][$i];
													if(!empty($_FILES['image']['name'][$i])){
														move_uploaded_file($tmp,$definitif);	
														$stmtt->execute(array('definitif'=>$definitif,'idprod'=>$idprod)); 
													}
												}
											}
											
										}
									}
									 ?>
							
						</div>
					</div>
							
			
</body>
</html>