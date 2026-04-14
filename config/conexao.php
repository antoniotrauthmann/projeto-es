<?php 
    $hostname = "localhost";
    $bancodedados = "projetoes";
    $usuario = "root";
    $senha = "123";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno){
        echo "falha:(" . $mysqli->connect_errno . ")". $mysqli->connect_error;
    }
    else {
        // echo "Conectado ao banco de dados";
    }
?>