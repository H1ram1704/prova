<?php
include 'conectalivro.php';
$idlivro=$_POST["idlivro"];
$livrotitulo=$_POST["titulo"];
$nome_autor= $_POST["autor"];
$area=$_POST["Areas"];
$status=$_POST["estado"];
$sql = "INSERT INTO livro (id,nome,autor,area,estado) VALUES ('$idlivro','$livrotitulo','$nome_autor','$area',$status)";
$res= mysqli_query($conexao,$sql);
if($res)
    echo "livro $livrotitulo incluido com sucesso";
else
    echo "Ocorreu um erro";
mysqli_close($conexao);
?>