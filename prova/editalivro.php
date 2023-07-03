<?php
include 'conectalivro.php';



if (isset($_POST['confirmar_ed'])) {
        
        $nl = $_POST['livronome1'];
        $la = $_POST['livroautor1'];
        $lar = $_POST['areaID'];
        $ls = $_POST['livrostatus1']; 
        echo "entrou no IF de confirmação";
        $sql = "UPDATE livro SET nome='$nl' , 
    autor='$la',
    area='$lar',
    estado='$ls' where id='".$_POST['idlivro1']." ' ";

        $resultado = mysqli_query($conexao,$sql);

       if (!$resultado) echo "Problema na atualização"; 




}
?>