<?php
include 'conectalivro.php';
$sql = "SELECT l.id as id, l.nome as nome, l.estado as estado, l.autor as autor, l.area as IDA, a.nome as nomeA from livro l inner join area a on l.area=a.ID ";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-lista-livros</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
    <table border="1" wid>
    <tr>   
       <th>Título </th>
       <th>Status</th>
       <th>Autor</th>
       <th>Area</th> 
       <th>Editar</th>
       <th>Excluir</th>   
</tr>
    

<?php 

for ($i = 0; $i < $linhas; $i++){
    $user= mysqli_fetch_array($resultado);
    echo "<tr>";
    echo "<td>".$user['nome'] . "</td>";
    echo "<td>".$user['estado']. "</td>";
    echo "<td>".$user['autor'] . "</td>";
    echo "<td>".$user['nomeA']. "</td>";
    echo "<form method='post' > ";
    echo "<input type='hidden' name='idlivro' value ='". $user['id']."'>";
    echo "<input type='hidden' name='livronome' value ='". $user['nome']."'>";
    echo "<input type='hidden' name='livrostatus' value ='". $user['estado']."'>";
    echo "<input type='hidden' name='livroautor' value ='". $user['autor']."'>";
    echo "<input type='hidden' name='areaID' value ='". $user['IDA']."'>";
    echo "<input type='hidden' name='area' value ='". $user['nomeA']."'>";
    echo "<td> <input type='submit' name='editar' value='Editar'> </td>";
    echo "<td> <input type='submit' name='apagar' value='Apagar'> </td>";
    echo "</form>";
    echo "</tr>";
}
echo "</table>";



if (isset($_POST['editar'])) {
    echo "<form method='post' action='editalivro.php' >";
    echo "<input type='hidden' name='idlivro1' value ='". $user['id']."'><br>";
    echo "Nome do Livro: <input type='text' name='livronome1' value ='". $user['nome']."'>";
    echo "Autor: <input type='text' name='livroautor1' value ='". $user['autor']."'>";
    //echo "<input type='hidden' name='areaID' value ='". $user['IDA']."'>";
    echo "Area do Livro: " ; //<input type='text' name='livroarea1' value ='". $user['nomeA']."' readonly >";


    echo "<select name='areaID'>";
    $sql = "SELECT * from area";
        $resultado = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($resultado); 
        echo " <option value=".$user['IDA'].">"; 
        echo $user['nomeA'];
        echo "</option>";  
    for ($i = 0; $i < $linhas; $i++){
             $area= mysqli_fetch_array($resultado);
               echo " <option value=".$area['ID'].">";
            echo $area['nome'];
            echo "</option>";
    }



    echo"</select>";  
    echo "Status: <input type='text' name='livrostatus1' value ='". $user['estado']."'>";
    echo "<input type=submit name='confirmar_ed' value='Confirmar'>";
    echo "<input type=reset name='apagar_ed' value='Apagar'>";
    echo "</form>";
} elseif (isset($_POST['apagar'])){
    $sql = "DELETE from livro where id = ".$_POST['idlivro'];
$resultado = mysqli_query($conexao, $sql);
}
?>
</body></html>