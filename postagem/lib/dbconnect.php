<?php
	$usuario = 'root';
	$senha = '';
	$database = 'login_doe_mais';
    $host = 'localhost';

	$con = new mysqli($host, $usuario, $senha, $database);

	if($con->error) {
		die("Falha ao conectar o banco de dados: " . $con->error);
	}
	
?>
