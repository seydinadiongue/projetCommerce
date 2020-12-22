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
  <div style='background : white; margin : 0 13% 0 13%; padding-bottom : 35%;'>

   <?php
   if(!isset($_GET['idclient'])){
		$bdd= new PDO("mysql:host=localhost;dbname=base", 'root', '');
		$stmt = $bdd->query('select * from cantine where idcom='.$_SESSION['idpers']);
		$row = $stmt->fetch();
	?>
	
		<div style='margin-left : 25%;margin-top : %;margin-bottom : 15%;width : 600px;height : 300px;background : url("<?php echo $row['photo'] ?>"); background-repeat : no-repeat;background-size : 100% 100%;border-radius : 2%  '>
	<?php
        echo '<img style="margin-left : 23%;margin-top : 12%;width : 300px;height: 250px;  border-radius : 20%; border : 5px solid white" src="'.$_SESSION['pp'].'"/>';
		echo '</br><div style="font-weight : bold; font-size : 25px" class="card-body text-center">'.$_SESSION['prenom'].' '.$_SESSION['nom'].'</div>';
		$row = $bdd->query('select * from commercant where idcom = '.$_SESSION['idpers'])->fetch();
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Habite a '.$_SESSION['adresse'].'</div>';
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Adresse email : '.$_SESSION['email'].'</div>';
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Telephone : '.$_SESSION['tel'].'</div>';
		echo '<div class="card-body text-center" ><a href="changeinf.php" style="font-size : 20px"><hr/>Changer les informations sur vous</a></div>';
	echo '</div>';
  
   }else
   {
		$bdd= new PDO("mysql:host=localhost;dbname=base", 'root', '');
		$stmt = $bdd->query('select * from client where idclient='.$_GET['idclient']);
		$row = $stmt->fetch();
		echo '<img style="margin-left : 33%;margin-top : 8%;width : 300px;height: 250px;  border-radius : 20%; border : 5px solid white" src="'.$row['pp'].'"/>';
		echo '</br><div style="font-weight : bold; font-size : 25px" class="card-body text-center">'.$row['prenom'].' '.$row['nom'].'</div>';
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Habite a '.$row['adresse'].'</div>';
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Adresse email : '.$row['email'].'</div>';
		echo '<div style="font-size : 25px" class="card-body text-center"><hr/>Telephone : '.$row['tel'].'</div>';
   }
   
	?>
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
</script>
</body>
</html>