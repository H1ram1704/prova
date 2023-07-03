<?php
include 'conectaaluno.php';
$sql = "SELECT * from aluno ";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);
$sql2 = "SELECT * from livro where estado='0' ";
$resultado2 = mysqli_query($conexao, $sql2);
$linhas2 = mysqli_num_rows($resultado2);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-emprestimo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
<h1>Empréstimo de Livros</h1>
<form method="post" action="cadastraremprestimo.php">
<fieldset><label for="alunoemprestando">Nome:
    <select name="alunoemprestando">
                <?php 
                for ($i = 0; $i < $linhas; $i++){
                         $aluno= mysqli_fetch_array($resultado);
                           echo " <option value=".$aluno['matricula'].">";
                        echo $aluno['nome'];
                        echo "</option>";
    
                }?>
    </select>
    <div>
    <label>Data de Emprestimo:<input type="date" name="dataemprest"/> </label>
    <label>Data de Entrega:<input type="date" name="dataentreg"/> </label>
    <div>
    <label for="livroemprestimo">Livros:
    <?php 

                for ($i = 0; $i < $linhas2; $i++){
                         $livro= mysqli_fetch_array($resultado2);
                         $nomel= $livro['nome'];
                         $idl= $livro['id'];
                           echo " <input type='checkbox' name='lista[]' value='$idl'>";
                           echo "  <label for='idlivro'> $nomel</label><br> ";
                           echo "<br>";  
                }?>
    <input type="submit" value="enviar">
    <input type="reset" name="reset" value="Limpar">
</fieldset>
</form>
</body>
</html>