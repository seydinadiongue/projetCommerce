<!DOCTYPE html>
<?php
	session_start();
?>
<html lang='en'>
    <head>
		<link rel="stylesheet" href="css_nav.css"/>
		<link rel='stylesheet' href='css_bien.css'/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		rel="stylesheet">
        <meta charset="utf-8" />
        <title>Entete</title>
	</head>
	<body>
	<div>
		<img src='im_header.PNG' alt="logo"/>
	</div>
	<div id='conteneur'>
			<ul>
				<li>
					<a href="#">
						<div class='icon'>
							<i class="fa fa-home" aria-hidden="true"></i>
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class='menu'>Accueil</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class='icon'>
							<i class="fa fa-product-hunt" aria-hidden="true"></i>
							<i class="fa fa-product-hunt" aria-hidden="true"></i>
						</div>
						<div class='menu'>Produit</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class='icon'>
							<i class="fa fa-male" aria-hidden="true"></i>
							<i class="fa fa-male" aria-hidden="true"></i>
						</div>
						<div class='menu'>Client</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class='icon'>
							<i class="fa fa-money" aria-hidden="true"></i>
							<i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<div class='menu' data-text="contact">Commande</div>
					</a>
				</li>
			</ul>
	</div>
	</body>
</html>
