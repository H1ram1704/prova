<?php
include 'conectaaluno.php';
$sql = "SELECT * from aluno";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-lista-alunos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
    <table border="1" wid>
    <tr>   
       <th>Matrícula </th>
       <th>Nome</th>
       <th>Email</th>
       <th>CPF</th> 
       <th>Data de Nascimento</th>
       <th>Editar</th>
       <th>Excluir</th>   
</tr>
<?php
for ($i = 0; $i < $linhas; $i++){
    $user= mysqli_fetch_array($resultado);
    echo "<tr>";
    echo "<td>".$user['matricula'] . "</td>";
    echo "<td>".$user['nome'] . "</td>";
    echo "<td>".$user['email']. "</td>";
    echo "<td>".$user['cpf'] . "</td>";
    echo "<td>".$user['data_nasc']. "</td>";
    echo "<form method='post' > ";
    echo "<input type='hidden' name='matriculaA' value ='". $user['matricula']."'>";
    echo "<input type='hidden' name='nomeA' value ='". $user['nome']."'>";
    echo "<input type='hidden' name='emailA' value ='". $user['email']."'>";
    echo "<input type='hidden' name='cpfA' value ='". $user['cpf']."' readonly>";
    echo "<input type='hidden' name='dataA' value ='". $user['data_nasc']."'>";
    echo "<td> <input type='submit' name='editar' value='Editar'> </td>";
    echo "<td> <input type='submit' name='apagar' value='Apagar'> </td>";
    echo "</form>";
    echo "</tr>";
}
echo "</table";


if (isset($_POST['editar'])) {
    echo "entrou no eDITAR";
    echo "<form method='post' action='editaaluno.php' >";
    echo "Numero de MatrÍcula DO EDITAR:<input type='text' name='matriculaAL' value ='". $user['matricula']."' readonly ><br>";
    echo "Nome do Aluno: <input type='text' name='nomeAL' value ='". $user['nome']."'>";
    echo "Email: <input type='text' name='emailAL' value ='". $user['email']."'>";
    echo "CPF: <input type='text' name='cpfAL' value ='". $user['cpf']."' readonly >";
    echo "Data de Nascimento: <input type='text' name='dataAL' value ='". $user['data_nasc']."'>";
    echo "<input type='submit' name='confirmar_ed' value='Confirmar'>";
    echo "<input type='reset' name='apagar_ed' value='Apagar' >";
    echo "</form>";

} elseif (isset($_POST['apagar'])){
    $sql = "DELETE from aluno where matricula = ".$_POST['matricula'];
$resultado = mysqli_query($conexao, $sql);}
?>
</body></html>