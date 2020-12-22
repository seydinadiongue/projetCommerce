<?php
	$connect = mysqli_connect("localhost", "root", "", "base");
	$subject = mysqli_real_escape_string($connect, $_POST['subject']);
	$comment = mysqli_real_escape_string($connect, $_POST['comment']);
	$query = "
		Insert Into test (nom, comment) values ('$subject', '$comment')
	"
	mysqli_query($connect, $query);
?>