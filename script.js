$(document).ready(function(){
	recupMessages();
	$('.formulaire').submit(function(){
		
		var envoyeur = $('.envoyeur').val();
		var receveur = $('.receveur').val();
		var message = $('.message').val();
		
		$.post('send.php',{envoyeur:envoyeur,receveur:receveur,message:message},function(donnees){
			$(".return").html(donnees);
			$('.message').val('');
			recupMessages();
		});
		return false;
	});
	
	// $('.ok_btn').onclick(function(){
		// alert("yesssssssss");
		
	// });
	
	function recupMessages(){
		$.post('recup.php', function(data){
			$('.afficher').html(data);
		});
	}
	function recupNbNotif(){
		$.post('nb_notif.php', function(data){
			$('.not').val(data);
			var d = $('.discuss').val();
		});
	}
	
	setInterval(recupNbNotif, 100);
	
	setInterval(recupMessages, 1000);
	
});