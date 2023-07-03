<?php
include 'conectaarea.php';
$IDarea=$_POST["idarea"];
$areanome= $_POST["nome"];
$sql = "INSERT INTO area (ID,nome) VALUES ('$IDarea','$areanome')";
$res= mysqli_query($conexao,$sql);
if($res)
    echo "area $areanome incluida com sucesso";
else
    echo "Ocorreu um erro";
mysqli_close($conexao);
?>