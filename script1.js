$(document).ready(function(){	
	function recupMessages(){
		$.post('nb_mess.php', function(data){
			$('.discuss').val(data);
			var d = $('.discuss').val();
		});
	}
	
	function recupDiscuss(){
		$.post('discuss_client.php', function(data){
			$('.disc').html(data);
		});
	}
	function recupDiscuss1(){
		$.post('discuss_com.php', function(data){
			$('.disc1').html(data);
		});
	}
	function recupNbNotif(){
		$.post('nb_notif.php', function(data){
			$('.not').val(data);
			var d = $('.discuss').val();
		});
	}
	
	setInterval(recupNbNotif, 100);
	setInterval(recupMessages, 100);
	setInterval(recupDiscuss, 1000);
	setInterval(recupDiscuss1, 1000);
	
});