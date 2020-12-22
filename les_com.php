<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "select * from commercant where conf='oui'";
$stmt = $bdd->query($req);
echo '<table class="table" >
<thead>
	<tr class="something">
		<th  style=";">Photos</th>
		<th  style="; ">Prenom</th>
		<th  style="; ">Nom</th>
	</tr>
</thead>
<tbody>';
	echo'<div class="tou">';
		while($row = $stmt->fetch()){
			echo'
			<tr class="something">
				<td style=" "><img style="height:40px; width : 40px; border-radius :50%" src="'.$row["pp"].'" alt="Photo de produit"/></td>
				<td style="font-size : 110% ;">'.$row['nom'].'</td>
				<td style=" font-size : 110%">'.$row['prenom'].'</td>
				<td style=" "><a href="collections.php?idcom='.$row['idcom'].'" class="btn btn-default btn-xs">Voir ses produits </a></td>';
				if($row['etat']=='normal')
					echo '<td style="text-align : center;"><button data-id="'.$row['idcom'].'" class="bloquer btn btn-default btn-xs">Bloquer</button></td>';
				else
					echo '<td style="text-align : center;"><button href="#" data-id="'.$row['idcom'].'" class="bloquer btn btn-danger btn-xs">Compte bloqué</button></td>
			</tr>
			';
		}
	echo'</div>';
echo'</tbody>';
echo '</table>';

?>
<script>

</script>