$(document).ready(function(){	
	function recupNotif(){
		$.post('notif_com.php', function(data){
			$('#resultat_notif').html(data);
		});
	}
	
	function recupNbNotif(){
		$.post('nb_notif_com.php', function(data){
			$('.not').val(data);
		});
	}
	
	setInterval(recupNotif, 2000);
	//setInterval(recupNbNotif, 1000);
	
});
