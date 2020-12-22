<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		  <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<br/>
		<br/>
		<div class="container">
			<br/>
			<h2 align="center">Essaie de Notification</h2><br/>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Essaie de Tutoriel</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"> </span>Notification</a>
							<ul class="dropdown-menu">
								
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<br/>
			<form method="post" id="comment_form">
				<div class="form-group">
					<label> Entrer le texte </label>
					<input type="text" name="subject" id="subject" class="form-control"/>
				</div>
				<div class="form-group">
					<label> Entrer votre commentaire </label>
					<textarea type="text" name="comment" id="comment" class="form-control" rows="5"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="post" id="post" class="btn btn-info" value="Envoyer"/>
				</div>
			</form>
		</div>
	</body>
</html>
<script>
$(document).ready(function()){
	function load_unseen_notification(view=""){
		$.ajax({
			url:"fetche.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data){
				$('.dropdown-menu').html(data.notification);
				if(data.unseen_notification > 0){
					$('.count').html(data.unseen_notification);
				}
			}
		})
	}
	load_unseen_notification();
	$('#comment_form').on('submit', function(event){
		event.preventDefault();
		if($('#subject').val() != '' && $('#comment').val() != ''){
			var form_data = $(this).serialize();
			$.ajax({
				url:'insert.php',
				method:"POST",
				data:form_data,
				success:function(data){
					$('#comment_form')[0].reset();
					load_unseen_notification();
				}
			})
		}else{
			alert("Both field are Required");
		}
	});
}
</script>