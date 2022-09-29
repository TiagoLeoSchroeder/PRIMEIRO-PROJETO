<?php 

$hostname = "localhost";
$bancodedados = "academia";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname,$bancodedados,$usuario,$senha);
if ($mysqli->connect_error) {
    echo "Falha ao conectar: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
} else
    echo "Conectado!";
?>