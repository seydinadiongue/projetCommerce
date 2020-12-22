<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=base", 'root', '');
$req = "select * from vendeurtable where conf='oui'";
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
while($row = $stmt->fetch()){
	echo'
	<tr class="something">
		<td style=" "><img style="height:40px; width : 40px; border-radius :50%" src="'.$row["pp"].'" alt="Photo de produit"/></td>
		<td style="font-size : 110% ;">'.$row['nom'].'</td>
		<td style=" font-size : 110%">'.$row['prenom'].'</td>
		<td style=" "><button class="btn btn-default btn-xs">Voir ses produits </button></td>';
		if($row['etat']=='normal')
			echo '<td style="text-align : center;"><button data-id="'.$row['idvend'].'" class="bloquer_vend btn btn-default btn-xs">Bloquer</button></td>';
		else
			echo '<td style="text-align : center;"><button href="#" data-id="'.$row['idvend'].'" class="bloquer_vend btn btn-danger btn-xs">Compte bloqué</button></td>
	</tr>
	';
}
echo'</tbody>';
echo '</table>';
?>