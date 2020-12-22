<?
session_start();
$msg = $_REQUEST['message'];
$con = mysql_connect('localhost', 'root', '');
mysql_select_db('base', $con);
mysql_query('insert into chat (envoyeur, receveur, message, date) values('.$_SESSION['idpers'].','.$_GET['id'].', '.$msg.', now())')
?>