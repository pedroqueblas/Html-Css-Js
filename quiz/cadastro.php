<?php
include("conexao.php");
$nome=$_POST['nome'];
$resposta=$_POST['questao1'];
$resposta2=$_POST['questao2'];
$resposta3=$_POST['questao3'];
$resposta4=$_POST['questao4'];
$resposta5=$_POST['questao5'];
$resposta6=$_POST['questao6'];
$resposta7=$_POST['questao7'];
$resposta8=$_POST['questao8'];
$resposta9=$_POST['questao9'];
$resposta10=$_POST['questao10'];

$sql="INSERT INTO questoes(nome, questao1, questao2, questao3, 
questao4, questao5, questao6, questao7, questao8, questao9, questao10)
VALUES ('$nome', '$resposta', '$resposta2', '$resposta3', '$resposta4',
'$resposta5', '$resposta6', '$resposta7' , '$resposta8', '$resposta9', '$resposta10')";
if(mysqli_query($conexao, $sql)){
    header("Location: index.html");
}else{
    echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

    ?>
