<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=base','root', '');
$req = 'select * from marchand where conf="non"';
$stmt = $bdd->query($req);
echo '<div class="text-center" style="font-weight : bold; text-decoration : underline; font-size : 120%" >Demande Marchands</div>';
while($lign=$stmt->fetch()){
	echo '
	<hr/><div><span style="font-weight : bold">'.$lign['prenom'].' '.$lign['nom'].'</span></div><br/>
	<button class="accept_mar btn btn-info btn-xs" data-id="'.$lign['idmar'].'">Accepter</button>
	<button data-id="'.$lign['idmar'].'" class="supp_mar btn btn-default btn-xs">Supprimer</button>
	<button class="btn btn-default btn-xs">detaiis</button>
	';
}
?>
<script>
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
</script>