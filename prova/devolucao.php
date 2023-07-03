<!DOCTYPE html>
<html>
<head>
    <title>site-avaliação-lista-reservas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
</head>
<body>
    <form action="devolucaolista.php" method="post">
        <?php
        include 'conectareserva.php';
        $sql = "SELECT livro.nome as titulo, aluno.nome as nome, data_retirada, data_entrega,reserva.id as id_reserva 
        from (reserva INNER JOIN aluno on reserva.matricula= aluno.matricula)  
        inner join livro on reserva.id_livro = livro.id where reserva.status = 1";
        $resultado = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($resultado);

        ?>
        <table border="1">
            <tr>   
                <th>Selecionado </th>
                <th>Nome do livro</th>
                <th>Nome do aluno</th>
                <th>Data de retirada</th>
                <th>Data prevista para entrega</th> 
            </tr>
            <?php 
            echo "<h1> Livros para devolução";
            while ($registro = mysqli_fetch_array($resultado)){
                $livro = $registro['titulo'];
                $aluno = $registro['nome'];
                $data_retirada = $registro['data_retirada'];
                $data_entrega = $registro['data_entrega'];

                echo "<tr>";
                echo "<td><input type='checkbox' value='".$registro['id_reserva']."' name='lista[]' ></td>";
                echo "<td>".$livro."</td>";
                echo "<td>".$aluno."</td>";
                echo "<td>".$data_retirada."</td>";
                echo "<td>".$data_entrega."</td>";
                echo"</tr>";
            }
            ?>
        </table>
        <br>
        <input type='submit' name='editar' value='Confirmar Devolução'>
    </form>   
</body>
</html>