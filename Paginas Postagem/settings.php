<?php 
$usuario = 'root';
$senha = '';
$database = 'login_doe_mais';
$host = 'localhost';

$conecta = new mysqli($host, $usuario, $senha, $database);

if($conecta->error) {
    die("Falha ao conectar o banco de dados: " . $conecta->error);
}

