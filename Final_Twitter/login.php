<?php

session_start();

require_once('bdclass.php');

$conn = new bd();

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "select id, usuario, senha from usuario as u where u.usuario ='$login' and u.senha ='$senha'";

$consulta = mysqli_query($conn->conecta_sql(), $sql);

if ($consulta)
{
	$resultado = mysqli_fetch_array($consulta);
	var_dump($resultado); echo '<br>';

	if (isset($resultado[0]) and isset($resultado[1])) {
		$_SESSION["id"] = $resultado["id"];
		$_SESSION["usuario"] = $resultado["usuario"];
		$_SESSION["senha"] = $resultado["senha"];
		header('Location: home.php');
	}
	else
	{
		header('Location: index.php?erro=1');
	}


}
else
{echo "Ocorreu um erro na pesquisa";}

?>