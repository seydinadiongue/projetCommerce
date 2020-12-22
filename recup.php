<?php
	session_start();
	$bdd= new PDO('mysql:host=localhost;dbname=base','root', '');
	
	$messages=array();
	
	$recup_mess= $bdd->query("select * from chat ch where ch.envoyeur=".$_SESSION['idpers']." and ch.receveur=".$_SESSION['receveur']." or ch.receveur=".$_SESSION['idpers']." and ch.envoyeur=".$_SESSION['receveur']." order by id asc");
	
	while($row=$recup_mess->fetch()){
		if($row['envoyeur']==$_SESSION['idpers'])
			echo '
			</br><span style="font-size : 15px; margin-top : 0px; background : #ADFF2F ; margin : 0 2% 3% 15%; float : right; padding : 0 3% 0 3%; border-radius : 10px"> '.$row['message'].'</span></br>
			';
		else
			echo '
				</br><span style="font-size : 15px; margin-top : 0px; background : white ; margin : 0 15% 3% 2%; float : left; padding : 0 3% 0 3%; border-radius : 10px"> '.$row['message'].'</span></br>
			';
	}
	//
?>