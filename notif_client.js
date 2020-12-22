$(document).ready(function(){	
	function recupNotif(){
		$.post('notif_client.php', function(data){
			$('#resultat_notif').html(data);
		});
	}
	
	function recupNbNotif(){
		$.post('nb_notif.php', function(data){
			$('.notificat').val(data);
		});
	}
	
	setInterval(recupNotif, 2000);
	setInterval(recupNbNotif, 100);
	
});