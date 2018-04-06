<?php

require_once('bdclass.php');

$login = $_POST['log'];
$email = $_POST['mail'];
$pass = md5($_POST['pass']);

$con = new bd();


//Verifica usuario
$valida_usuario = false;
$sql = "select * from usuario as u where u.usuario = '$login'";
$consulta = mysqli_query($con->conecta_sql(), $sql);
$dados = mysqli_fetch_array($consulta);
if (isset($dados['usuario']))
{
	$valida_usuario = true;
}

//Verifica email
$valida_email = false;
$sql = "select * from usuario as u where u.email = '$email'";
$consulta = mysqli_query($con->conecta_sql(), $sql);
$dados = mysqli_fetch_array($consulta);
if (isset($dados['email']))
{
	$valida_email = true;
}

if ($valida_email || $valida_usuario)
{
	if ($valida_usuario) {
		$retorno_get.="erro_usuario=1&";
	}

	if ($valida_email) {
		$retorno_get.="erro_email=1&";
	}

	header('Location:inscrever-se.php?' . $retorno_get);
}
else
{

	$sql = "insert into usuario(usuario, email, senha) values ('$login','$email','$pass')";

	if (mysqli_query($con->conecta_sql(), $sql)) 
	{
		echo "Usuario registrado com sucesso!";
		header('Location:home.php');

	}
	else
	{
		echo "Erro ao registrar usuario";
		header('Location:inscrever-se.php?erro=2');
	}

}




?>