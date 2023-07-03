<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-lista-devolvidos></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
<?php
include 'conectareserva.php';
$sql= "SELECT livro.nome as titulo, aluno.nome as nome, data_retirada, data_entrega,reserva.id as id_reserva 
from (reserva INNER Join aluno on reserva.matricula= aluno.matricula)  
inner join livro on reserva.id_livro = livro.id where reserva.status = 1";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);
for($i=0; $i<count($_POST['lista']); $i++){
    echo "".$_POST['lista'][$i];
    $sql = 'UPDATE reserva set status=0 where id='.$_POST['lista'][$i].';';
    $res = mysqli_query($conexao,$sql);
    $sql = 'SELECT id_livro FROM `reserva` WHERE id='.$_POST['lista'][$i].';';
    $res = mysqli_query($conexao,$sql);
    while ($registro = mysqli_fetch_array($res)){
        $sql = 'UPDATE livro set estado=0 WHERE id='.$registro['id_livro'].';';
        $res2= mysqli_query($conexao,$sql);
    }
}
mysqli_close($conexao);
?>   


</body>
</html>