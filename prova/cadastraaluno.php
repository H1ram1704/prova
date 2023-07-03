<?php
include 'conectaaluno.php';
$nmatricula=$_POST["matricula"];
$_nome= $_POST["nome"];
$email=$_POST["email"];
$cpf= $_POST["cpf"];
$data=$_POST["datanasci"];
echo "'$nmatricula','$_nome','$email','$cpf','$data'";
$sql = "INSERT INTO aluno (matricula,nome,email,cpf,data_nasc) VALUES ('$nmatricula','$_nome','$email','$cpf','$data')";

$res = mysqli_query($conexao,$sql);

if($res)
    echo "usuario $_nome incluido com sucesso";
else
    echo "Ocorreu um erro";

mysqli_close($conexao);
?>