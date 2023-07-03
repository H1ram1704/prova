<?php
$serv="localhost";
$user="root";
$pass="";
$db="avaliação";

$conexao=mysqli_connect($serv,$user,$pass,$db);
if(!$conexao) {
    echo "conexão falhou.";
}


?>