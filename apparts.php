<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tables</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<?php
error_reporting(0);
try
{	
     $dsn = 'mysql:host=localhost;dbname=gestionimmobiliere';
     $bdd = new PDO($dsn, 'root', '');
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) 
{
                        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
                        die($msg);
}	
?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Marché virtuel==>Nos tables pour détailler les produits</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="authCommercial.php">Publier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="saliouChat.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4"></h1>
        <div class="list-group">

          <a href="maison.php" class="list-group-item" style="color: black;">Cantines</a>
          <a href="apparts.php" class="list-group-item" style="color: black;">Tables</a>
          <a href="entrepots.php" class="list-group-item" style="color: black;">Marçant ambulants</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li da
			
			
			ta-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img" src="img/int7.jpg" alt="First slide" width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="img/int8.jpg" alt="Second slide" width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="img/int6.png" alt="Third slide" width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="img/int16.jpg" alt="fourth slide" width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block img" src="img/int9.jpg" alt="fifth slide" width="900px" height="400px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<?php
$code=192;
$idproduit=15;
$sql="select nomProduit,prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc=$donnee['descriptionProduit'];
						$nomProduit=$donnee['nomProduit'];
						$prix=$donnee['prix'];
						$idproduit=$idproduit+1;
		}

$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc1=$donnee['descriptionProduit'];
						$nomProduit1=$donnee['nomProduit'];
						$prix1=$donnee['prix'];
						$idproduit=$idproduit+1;
		}	
$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc2=$donnee['descriptionProduit'];
						$nomProduit2=$donnee['nomProduit'];
						$prix2=$donnee['prix'];
						$idproduit=$idproduit+1;
		}	
$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc3=$donnee['descriptionProduit'];
						$nomProduit3=$donnee['nomProduit'];
						$prix3=$donnee['prix'];
						$idproduit=$idproduit+1;
		}		

$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc4=$donnee['descriptionProduit'];
						$nomProduit4=$donnee['nomProduit'];
						$prix4=$donnee['prix'];
						$idproduit=$idproduit+1;
		}	
$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc5=$donnee['descriptionProduit'];
						$nomProduit5=$donnee['nomProduit'];
						$prix5=$donnee['prix'];
						$idproduit=$idproduit+1;
		}		
$sql="select prix,descriptionProduit from produit where idproduit=$idproduit";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                     
						$desc6=$donnee['descriptionProduit'];
						$nomProduit6=$donnee['nomProduit'];
						$prix6=$donnee['prix'];
						$idproduit=$idproduit+1;
		}			
		
		
$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll=$donnee['url'];   
						$code=$code+1;
		}	

$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll1=$donnee['url'];   
						$code=$code+1;
		}	
$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll2=$donnee['url'];   
						$code=$code+1;
		}		

$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll3=$donnee['url'];    
						$code=$code+1;
		}	
$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll4=$donnee['url'];   
						$code=$code+1;
		}	
$sql="select url from image where code=$code";
     $resultat=$bdd->query($sql);
while ($donnee=$resultat ->fetch())
		{                    
						$urll5=$donnee['url']; 						
		}					
?>
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"> <?php echo $nomProduit; ?></a>
                </h4>
                <h5> <?php echo $prix; ?></h5>
                <p class="card-text"><?php echo $desc; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733;<a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll1 ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $nomProduit1; ?></a>
                </h4>
                <h5><?php echo $prix1; ?></h5>
                <p class="card-text"><?php echo $desc1;?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733;<a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll2 ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $nomProduit2; ?></a>
                </h4>
                <h5><?php echo $prix2; ?></h5>
                <p class="card-text"><?php echo $desc2; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; <a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll3 ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $nomProduit3; ?></a>
                </h4>
                <h5><?php echo $prix3; ?></h5>
                <p class="card-text"><?php echo $desc3; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; <a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll4 ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $nomProduit4 ?></a>
                </h4>
                <h5><?php echo $prix4; ?></h5>
                <p class="card-text"><?php echo $desc4; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; <a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

           
		   <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" <?php echo 'src='.$urll5 ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $nomProduit5; ?></a>
                </h4>
                <h5><?php echo $prix5; ?></h5>
                <p class="card-text"><?php echo $desc5; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733;<a href="authClientAPP.php"> s'abonner</a> &#9733;<a href="authClient.php"> voir plus</a></small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Gestion Immo: ATT 2019
	  
	  
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
	  
	  
	  
	  </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
