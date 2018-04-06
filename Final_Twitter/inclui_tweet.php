<?php
session_start();
require_once('bdclass.php');

$txt_tweet = $_POST['txt_tweet'];
$id_usuario = $_SESSION['id'];


$sql = "INSERT INTO tweet(id_usuario, texto) VALUES ('$id_usuario','$txt_tweet')";

$con = new bd;

if ($txt_tweet == '') {
	header('location:home.php');
	die();
}

if(mysqli_query($con->conecta_sql(),$sql))
	{
		header('location:home.php');
	}
else
	{
		header('location:home.php?erro=1');
	}

?>