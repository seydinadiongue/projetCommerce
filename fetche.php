<?php
if(isset($_POST['view'])){
	$connect = mysqli_connect("localhost", "root", "", "base");
	$query = "select * from test order by id desc limit 7";
	$result = mysqli_query($connect, $query);
	$output = "";
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output .='
			<li>
				<a href="#">
					<strong>'..'</strong><br/>
					<small><em>'..'</em></small>
				</a>
			</li>
			';
		}
	}else{
		$output ='
			<li><a href="#" class="text-bold text-italic"><span style="color : white">Aucune notificaion</span></li>
		';
	}
	$query_1 = "SELECT * from test where statut = 0";
	$result_1 = mysqli_query($connect, $query_1);
	$count = mysqli_num_rows($result_1
	$data = array(
		'notification' => $output,
		'unseen_notification' => $count
	);
	echo json_encode($data);
}
?>