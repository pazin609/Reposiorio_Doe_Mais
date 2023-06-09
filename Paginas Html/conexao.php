<?php 
$usuario = 'root';
$senha = '';
$database = 'login_doe_mais';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar o banco de dados: " . $mysqli->error);
}

