
<?php
include 'conectalivro.php';
$sql = "SELECT * from area";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-livro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
<form method="post" action="cadastralivro.php">

        <fieldset>
            <legend>Cadastro do livro</legend>
            <p><label>ID:<input type="text" name="idlivro" placeholder="Nomeie o codigo do livro" required size="20" maxlength="50"/></label></p>
            <p><label>Titulo:<input type="text" name="titulo" placeholder="Titulo do Livro" required size="20" maxlength="50"/> </label></p>
            <p><label>Autor:<input type="text" name="autor" placeholder="Digite o Nome do Autor" required size="20" maxlength="50"/> </label></p>
            <p><label for="Areas">Area de Conhecimento:
                <select name="Areas">
                <?php 
                for ($i = 0; $i < $linhas; $i++){
                         $area= mysqli_fetch_array($resultado);
                           echo " <option value=".$area['ID'].">";
                        echo $area['nome'];
                        echo "</option>";
    
                }
            
?>

                </select>  </label></p>
            <p><label for="estado">
                <select name="estado">Disponibilidade:
            <option value="1">Emprestado</option>
            <option value="0">Disponível</select></label>
            <input type="submit" value="enviar">
            <input type="reset" name="reset" value="Limpar">
        </fieldset> 
</form>
</body>
</html>
