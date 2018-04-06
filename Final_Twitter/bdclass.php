<?php

/**
* 
*/
class bd
{
	private $host = 'localhost';

	private $usuario = 'root';

	private $senha = '';

	private$database = 'twitter';

	public function conecta_sql()
	{

	 $conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

	 //ajuda o charset de comunicação entre a aplicação eo banco de dados
	 mysqli_set_charset($conn, 'utf8');

	return $conn;

	}

}

?>