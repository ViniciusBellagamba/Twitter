<?php

session_start();

$id_usuario = $_SESSION['id'];

require_once('bdclass.php');

$sql = "SELECT * from tweet WHERE id_usuario = '$id_usuario' ORDER BY data_incercao DESC";

$con = new bd();

$consulta = mysqli_query($con->conecta_sql(),$sql);

$resultado = mysqli_fetch_array($consulta);


while ($resultado = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) 
{
	var_dump($resultado);
	echo '<br><br>';
}



?>