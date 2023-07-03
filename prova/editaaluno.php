<?php
include 'conectaaluno.php';



if (isset($_POST['confirmar_ed'])) {
        
    $nAL = $_POST['nomeAl'];
    $eAL = $_POST['emailAL'];
    $cAL = $_POST['CPFAL'];
    $dAL = $_POST['dataAL']; 
    echo "entrou no IF de confirmação";
    $sql = "UPDATE aluno SET nome='$nAL' , 
email='$eAL',
CPF='$cAL',
data_nasc='$dAL' where matricula='".$_POST['matriculaAl']." ' ";

    $resultado = mysqli_query($conexao,$sql);

   if ($resultado) echo "aTUALIZAÇÃO OK"; 
}?>