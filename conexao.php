<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autoLux";
		
$conexao = new mysqli($servername, $username, $password, $dbname);
     if($conexao->connect_error) {
       die("Falhou:". $conn->connect_error);
     } else {
     	echo "Conectado!";
     }

?>