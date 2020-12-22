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
    padding-bottom: 3%;
	border-radius : 10%
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 0%;
    margin-bottom: 15%; <!--Pour augmenter la hauteur du registre parent-->
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
    margin-bottom: %;
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
      <a class="nav-link navbar-brand" href="index.php">Accueil
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
            <a class="nav-link navbar-brand" href="#">S'inscrire</a>
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
										$_POST['message']='';
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
							
							<div class="disc" style="width : 37%;background : grey; height : 100%; overflow-y : scroll; overflow-x : hidden; margin-left : -3%; padding-left : 2%">
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
									echo '<a href="com.php?id='.$row['receveur'].'" style="color : white"><div class="row">';
									else
									echo '<a href="?id='.$row['envoyeur'].'" style="color : white; "><div class="row">';
										echo "<div class='col-lg-2'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%;'/></div>";
										if($r['nb']!=0)
											echo '<div class="col-lg-10" style="margin-top : 1%"><span style="font-weight : bold">'.$row['prenom'].' '.$row['nom'].' <span style="background : red;float : right; padding : 2px; border-radius : 30%">'.$r['nb'].'</span></span> </div>';
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
						<div class="col-lg-9" style="background-color : rgba(169, 169, 169, 0.7); height : 100%;overflow-y : scroll">
							<h2 class="text-center"></h2>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<!--#################################Barre de recherche################################-->
								<div class="form-group col-lg-6" style="margin : 7% 0 2% 25%">
									<div class="input-group">
										<input type="text" name="search" id="search" placeholder="Rechercher une collection" class="form-control"/>
									</div>
								</div>
								<!--####################################################################################-->
								
									<div class="row register-form">                          
										
										<?php
												echo '<div class="row" style="margin-left : 8%" id="result"></div>';
												echo'<div class="row register-form tout" style="margin-top : -5%">';
												
												
												echo'</div>';
												
												
										
										$dsn = 'mysql:host=localhost;dbname=base';
									$bdd= new PDO($dsn, 'root', '');
									if(isset($_GET['idcom']) and isset($_GET['cant']) and isset($_GET['lieu'])){
										$idcom = $_GET['idcom'];
										$nomcol = $_GET['col'];
										$cant = $_GET['cant'];
										$lieu = $_GET['lieu'];
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
															<a href="ses_produits.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=edit"><input type="submit" value = "Modifier" class="btn btn-primary btn-xs"/></a>
															<a href="ses_produits.php?idcom=<?=$idcom?>&col=<?=$nomcol?>&cant=<?=$cant?>&lieu=<?=$lieu?>&idprod=<?=$url['idprod']?>&action=supp"><button class="btn btn-primary btn-xs">Supprimer</button></a>
														<?php echo'	<a href = "detailprod.php?idprod='.$url['idprod'].'&nomprod='.$url['nomprod'].'&cant='.$cant.'" class="btn btn-default btn-xs">Details</a>
														</div>
													</div>
												</div>
											';
										}
										echo '</div>';
									}
									if(isset($_GET['idprod']) && isset($_GET['action'])){
										$idprod = $_GET['idprod'];
										$action = $_GET['action'];
										if($action=="supp"){
											$res2 = $bdd->exec('delete from image where idprod='.$idprod);
											$res1 = $bdd->exec('delete from produit where idprod='.$idprod);
											if($res1 && $res2) {
												echo"<script>alert('Suppression reussie')</script>";
											}
											else{
												echo"<script>alert('Ehec de la suppression')</script>";
											}
										}
									}

																			
										?>
													
								</div>
							</div>
						</div>
						</div>
						<div class="col-lg-3" style='background-color : rgba(169, 169, 169, 0.7); height : 100%; margin-left : 0px;  overflow-y : scroll '>
						
						<?php
						$bdd = new PDO('mysql:host=localhost; dbname=base', 'root', '');
						$da = $bdd->query("SELECT distinct r.date FROM reserver r  JOIN client cli JOIN produit p  on r.idclient = cli.idclient and r.idprod = p.idprod where r.accept = 'non' and p.idpers = ".$_SESSION['idpers']);
						$ro = $bdd->query("select count(*) as nb from reserver r JOIN produit p on p.idprod = r.idprod where p.idpers = ".$_SESSION['idpers'])->fetch();
						echo'<h4 class="text-center card">Demande('.$ro['nb'].')</h4>';
						while($dat = $da->fetch()){
							$req = "SELECT r.date, r.idreserv ,cli.pp, cli.prenom, cli.nom, p.nomcol, p.nomprod FROM reserver r  JOIN client cli JOIN produit p  on r.idclient = cli.idclient and r.idprod = p.idprod where r.accept = 'non' and p.idpers = ".$_SESSION['idpers']." and r.date='".$dat['date']."'";
							$stmt = $bdd->query($req);
							echo '<div class="text-center" style="margin-bottom : -5%; font-weight : bold">'.$dat['date'].'</div><hr/>';
							while($row = $stmt->fetch()){
								
								echo '<div class="row ard" style="color : white">';
									echo "<div class='col-lg-12'><img src = '".$row['pp']."' style='width : 30px; height : 30px; border-radius : 45%; '/><span style='font-weight : bold; float : right; margin-right : 20%'>".$row['prenom']." ".$row['nom']."</span></div>";
									echo '<div class="col-lg-12" style="margin-top : 1%"> souhaite reserver votre  <span style="font-family : italic; font-weight : bold">'.$row['nomprod'].'</span></div>';
								echo '</div>';
								echo "<form method='POST' action='com.php' style='display : inline'>
										<input type='hidden' name='supp' value='".$row['idreserv']."'>
										<input type='submit' value='Supprimer' class='btn  btn-sm' style='margin-left : %'/>
									</form>
									<form method='POST' action='com.php' style='display : inline'>
										<input type='hidden' name='accept' value='".$row['idreserv']."'>
										<input type='submit' value='Accepter' class='btn btn-info btn-sm' style='float : right;margin-right : %'/><br/>
									</form><br/>";
							}
						}
						?>
							
						</div>
					</div>
							
			
</body>
</html>
<script>
	$(document).ready(function(){
		
		$('#search').keyup(function(){
			$('.tout').hide('fast');
			var txt = $(this).val();
			if(txt!= ""){
				$.ajax({
					url:"col.php",
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
					url:"col.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data){
						$('#result').html(data);
					}
				});
			}
		});
	});
</script>