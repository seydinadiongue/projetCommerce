<!DOCTYPE html>

<html >
    <head>
    <meta charset="utf-8" />	
    <link rel="stylesheet" href="tester.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css"/>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"> </script>
      
        <title>Gestion des produits</title>
    </head>
    <body>
				<nav class="navbar  navbar-default navbar-fixed-top" >
                    <img style="float: left;width : 40px;height : 40px;margin:0.5%; border : 50%;" src='im_header.PNG' alt="logo"/>
                    <div class="container"  style="margin-right: -18%;margin-top:0%;font-size:120% ; color : white">
                            
                        <ul class="nav navbar-nav">
                            <li >  <a href="tester.php">Accueil</a> </li>
                            <li  class="dropdown" >  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Publication<span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="pageAuth.php">Appartement</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pageAuth.php">Immeuble</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pageAuth.php">Villa</a></li>
                                </ul>
                            </li>
                            <li>  <a href="tester.html">Règles de confidentialité</a></li>
                            <li >  <a href="tester.php">Contact</a></li>

                            <li class="dropdown"  style="left:10%;top: 6px;"  >  <button type="button"  class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Se connecter</button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">En tant que:</li>
                                    <li class="divider"></li>
                                    <li><a href="pageAuth.php">Commercial</a></li>
                                    <li class="divider"></li>
                                    <li><a href="loginclient.php">Client</a></li>
                                </ul>
                            </li>
                         
                            <li class="dropdown" style='left: 18%;top: 6px '>  <button type="button"  class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">S'inscrire</button>
                                <ul class="dropdown-menu">
                                        <li class="dropdown-header">En tant que:</li>
                                        <li class="divider"></li>
                                        <li><a href="inscriptioncommerciale.php">Commercial</a></li>
                                        <li class="divider"></li>
                                        <li><a href="inscriptionclient.php">Client</a></li>
                                </ul>
                            </li>                                                                                                    
                        </ul>
                    </div>
                
                </nav>
                <header>
				        <h1 style="animation: flash 1.4s linear infinite;margin-top:2%;letter-spacing:5px;margin-left:-10%;">My Pro Immobilier</h1>
                        <h3  style="margin-left:-8%;">pour mieux vous aider</h3>
                        <form method='post' action="pageRecherche.php" class="navbar-form navbar-right" style="margin-top:-6%;margin-right:28%" >
                       <div class="form-group">
                           <input type="text" name='search' class="form-control" size="50" placeholder="search">
                        </div> 
                        
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                        
                    
                  </form> 
                </header>
					
		<hr/>
		<?php
		//fonction pour verifier si le bien est reserver ou non
		function demander($idbiens,$table){
			$dsn = 'mysql:host=localhost;dbname=immobiliere';
			$bdd= new PDO($dsn, 'root', '');
			$requete = 'select conf from '.$table.' where idbiens = '.$idbiens;		
			$stmt = $bdd->query($requete);
			$si = $stmt->fetch()['conf'];
			if($si=='oui')
				return true;
			else
				return false;
		}
		
		$dsn = 'mysql:host=localhost;dbname=immobiliere';
		$bdd= new PDO($dsn, 'root', '');
		$requete = 'select * from image,biens,personne where image.idbiens=biens.idbiens and personne.idpers=biens.idcom group by image.idbiens';	// On recupere les biens qui ont des images dans la table `image`		
		$urls = $bdd->query($requete);	
		
		//Pour chaque biens, on recupere tout ces images et les affiche en slide
		echo '<div class="container">
		<div class="row justify-content-center">
		<div class="contof">';
		while($url = $urls->fetch()){
			if(!(demander($url['idbiens'], 'reservation')) and !(demander($url['idbiens'], 'contrat'))){
				$lien="detailBien.php?idbiens=".$url['idbiens']."&idcom=".$url['idcom'];
				$lien1="pageAuthClient.php?idbiens=".$url['idbiens'];
				//On affiche les images de ce bien 
				echo '
					<div class="col-md-3">
						<div class="card shadow" style="width: 25rem; margin-bottom : 10%;">
							<div class="inner">
								<img style=" width : 260px; height : 130px;" src="'.$url['url'].'" class="card-img-top " alt="...">
							</div>
						  
						  <div class="card-body text-center" style="height : 15rem;" box-shadow : 0px 2px 3px black>
							<h5 class="card-title"><span style="font-weight : bold">'.$url['prix'].' FCFA</span></h5>
							<p class="card-text" style="height : 4rem;">'.$url['nombien'].'</p>
							<a href='.$lien.' class="btn btn-primary">details</a>
							<a href='.$lien1.' class="btn btn-primary">ajout favoris</a>
							
						  </div>
						</div>
					</div>
				';
			}
		}
		echo '
			</div>
			</div>
			</div>';			
		?>
		 <footer id="footer" class="foot">
   <div class="footer-top  footer-default">
     <div class="container">
       <div class="row">
           <div class="col-lg-4 col-md-6 footer-info"> 
               <h3 style="animation: flash 1.4s linear infinite"> Agence BAM</h3>
               <p> ________ ________ ________ ________ _________
                   ________  _______ _________  _______  _______
                   ________ _________ ___________</p>
            </div>
            <div class="col-lg-2 col-md-6 footer-links">
               <h4> Liens utiles <h4>
                 <ul>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                 </ul>
             </div>
             <div class="col-lg-3 col-md-6 footer-contact"> 
               <h4> Contactez-nous</h4>
                <p>
                  Hann Bel Air   Rue:6 <br/>
                  Hann,  Dakar<br/>
                  Sénégal<br/>
                  <strong>Téléphone:</strong>+221 78 130 45 98<br/> 
                  <strong>Em@il:</strong>BAM@gmail.com<br/>
                 </p>
          
                 <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-instagram"></i></a> 
                    <a href="#" class="twitter"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-linkedin"></i></a>      
                 </div> 
                 </div>  
                  <div class="col-lg-3 col-md-6 footer-newsletter">
                  <h4>Our Nemsletter</h4>
                   <p> ________ ________ ________ ________ _________
                   ________  _______ _________  _______  _______
                   ________ _________ ___________</p>
                   <form accept="" mthod="post">
                     <input type="email"  name="email"/><input type="submit" value="s'abonner"/>
                    </form>
                 </div>
    
       </div>
     </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright<strong>WebsiteName</strong>. Tout Droits Reservés
       </div>
       <div class="credits">
          Designed by <a href="#">WebsiteName</a>
       </div>
     </div>
</footer>
    </body>
    </html>
