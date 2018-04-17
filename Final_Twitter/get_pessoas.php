<?php
require_once('bdclass.php');
$con = new bd();


$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con->conecta_sql(), $_POST["query"]);
	$query = "
	SELECT * FROM usuario 
	WHERE usuario LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM usuario";
}
$result = mysqli_query($con->conecta_sql(), $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Usuarios</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td><span style=" margin-top:5px">'.$row["usuario"].'<span> <button style= "float:right;" class="btn btn-primary">Seguir</button> </td>

			</tr>
		';
	}
	echo $output;
}

?>