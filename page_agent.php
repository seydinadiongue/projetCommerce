<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page agent</title>
		<link rel="stylesheet" href="agent.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link rel='stylesheet' href='bootstrap/css/bootstrap.css'/>
		<script src='js/bootstrap.js'></script>
		<script src='jquery-3.4.1.min.js'></script>
	</head>
	<body style="background : url('im_fond/fo2.JPG')">
		<div class="container" style="background : white">
			<!------------------------------Menu de navigation--------------------->
			<nav class="navbar navbar-default">
				<ul class="nav navbar-nav">
					<li class="active"><a href='#'>Accueil</a></li>
					<li><a  style="margin-left : 950%" href='#'>Notification</a></li>
				</ul>
			</nav>
			<div class="text-center" style="font-size : 200%; background : #90EE90 ; color : white; border-radius : 20%; margin-bottom:3%; font-weight : bold">Agence Market'tech</div>
			<!--------------------------------------------------------------------->
			<div class="row">
				<div>
					<button class="btn btn-default " id="com" style="margin-left : 4%" onclick='com()'>Commercant</button>
					<button class="btn btn-default  mar" style="margin-left : 32%" onclick='mar()'>marchand</button>
					<button class="btn btn-default  vend" style="float : right; margin-right : 4%" onclick='vend()'>Vendeur</button>
				</div><hr/>
				<div class="col-lg-8" style="overflow-y : scroll; height : 470px; background : ;margin-left : %">
					<div class="form-group col-lg-9" style="margin : 0% 0 2% 14%">
						<div class="input-group">
							<span class="input-group-addon">Recherche</span>
							<input type="text" name="search" id="search" placeholder="Rechercher un commercant" class="form-control"/>
						</div>
					</div>
					<div id="result"></div>
					<div class="affiche_com tou"></div>
				</div>
				<div class="demande col-lg-3" style="overflow-y : scroll; height : 470px; margin-left : 2%">
				</div>
			</div>
		</div>
		
	</body>
	<script>
		com();
		function vend(){
			les_vend();
			demande_vend();
		}
		function mar(){
			les_mar();
			demande_mar();
		}
		function com(){
			les_com();
			demande_com();
		}
		//-----------------------------------------CLICK--------------------------------------------
		$(document).on('click','.accept_vend',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"accept_vend.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_vend();
					demande_vend();
				}
			});
		});
		$(document).on('click','.accept_mar',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"accept_mar.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_mar();
					demande_mar();
				}
			});
		});
		$(document).on('click','.accept_com',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"accept_com.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_com();
					demande_com();
				}
			});
		});
		$(document).on('click','.bloquer',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"bloq_com.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_com();
					demande_com();
				}
			});
		});
		$(document).on('click','.bloquer_mar',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"bloq_mar.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_mar();
					demande_mar();
				}
			});
		});
		$(document).on('click','.bloquer_vend',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"bloq_vend.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_vend();
					demande_vend();
				}
			});
		});
		$(document).on('click','.supp_com',function(){
			var id;
			id = $(this).data('id');
			$.ajax({
				url:"supp_com.php",
				method:"post",
				data:{id:id},
				dataType:"text",
				success:function(data){
					les_com();
					demande_com();
				}
			});
		});
		//----------------------------------------------FONCTIONS--------------------------------------------------
		function les_com(){
			$.ajax({
				url:"les_com.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.affiche_com').html(data);
				}
			});
		}
		function demande_com(){
			$.ajax({
				url:"demande_com.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.demande').html(data);
				}
			});
		}
		function les_mar(){
			$.ajax({
				url:"les_mar.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.affiche_com').html(data);
				}
			});
		}
		function demande_mar(){
			$.ajax({
				url:"demande_mar.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.demande').html(data);
				}
			});
		}
		function les_vend(){
			$.ajax({
				url:"les_vend.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.affiche_com').html(data);
				}
			});
		}
		function demande_vend(){
			$.ajax({
				url:"demande_vend.php",
				method:"post",
				dataType:"text",
				success:function(data){
					$('.demande').html(data);
				}
			});
		}	
		//------------------------------------------RECHERCHE DIRECTE-------------------------------------------------
		$('#search').keyup(function(){
				$('.tou').hide('fast');
				var txt = $(this).val();
				if(txt!= ""){
					$.ajax({
						url:"fetch_com.php",
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
						url:"fetch_com.php",
						method:"post",
						data:{search:txt},
						dataType:"text",
						success:function(data){
							$('#result').html(data);
						}
					});
				}
			});
	</script>
</html>
