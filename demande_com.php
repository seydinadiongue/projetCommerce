<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=base','root', '');
$req = 'select * from commercant where conf="non"';
$cants = "select photo from cantine where idcom in(select idcom from commercant where conf='non')";
$stmt = $bdd->query($req);
$st = $bdd->query($cants);
echo '<div class="text-center" style="font-weight : bold; text-decoration : underline; font-size : 120%" >Demande commercant</div>';
while($lign=$stmt->fetch() and $row=$st->fetch()){
	echo '
	<hr/><div><img src="'.$row['photo'].'" style="width :40px; height : 40px; border-radius : 30%;margin-right : 13% "/><span style="font-weight : bold">'.$lign['prenom'].' '.$lign['nom'].'</span></div><br/>
	<button class="accept_com btn btn-info btn-xs" data-id="'.$lign['idcom'].'">Accepter</button>
	<button data-id="'.$lign['idcom'].'" class="supp_com btn btn-default btn-xs">Supprimer</button>
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