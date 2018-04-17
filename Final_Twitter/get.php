<?php

session_start();

$id_usuario = $_SESSION['id'];
$usuario = $_SESSION['usuario'];

require_once('bdclass.php');

$sql = "SELECT DATE_FORMAT(t.data_incercao, '%d %b %Y %T') as data, t.texto, u.usuario from tweet as t join usuario as u on (t.id_usuario = u.id) WHERE t.id_usuario = '$id_usuario' ORDER BY t.data_incercao DESC";

$con = new bd();

$consulta = mysqli_query($con->conecta_sql(),$sql);

$resultado = mysqli_fetch_array($consulta, MYSQLI_ASSOC);


do
{
	echo "<div class='card'>
	<div class='card-header'><h5 style='display:inline'>".$resultado['usuario']."</h5> · ".$resultado['data']."</div>
	<div class='card-body'>".$resultado['texto']."</div>
	</div>";
}
while ($resultado = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) 




?>