<?php
include 'conectareserva.php';
$aluempres=$_POST["alunoemprestando"];
$datempres=$_POST["dataemprest"];
$datentre= $_POST["dataentreg"];
echo " qual matricula do aluno: '$aluempres','$datempres','$datentre'";
for($i = 0;$i < sizeof($_POST['lista']); $i++){
    $id_livro=$_POST['lista'][$i];

$sql = "INSERT INTO reserva(matricula,status, id_livro, data_retirada,data_entrega) values ('$aluempres',1,'$id_livro','$datempres','$datentre')";
$res = mysqli_query($conexao,$sql);
if($res){
    $sql ="UPDATE livro set estado ='1' where id='$id_livro'";
    $res= $res = mysqli_query($conexao,$sql);

}
if($res){
    echo "Empréstimo realizado com sucesso";
}else{
    echo "Lamentamos parece que ocorreu um erro";
}

}mysqli_close($conexao);
header('location: reserva.php');
?>