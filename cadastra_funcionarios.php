<?php
include_once('conexao.php');
$id=$_POST['id'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];

try{
    $inserir=$conexao->prepare('INSERT INTO funcionarios (id,nome,endereco) VALUES  (:id,:nome,:endereco);');
    $inserir->execute(
        [
            ':id'=>$id,
            ':nome'=>$nome,
            ':endereco'=>$endereco,
        ]
        );
 header('location:ver_funcionarios.php');
}catch(PDOException $erro){
    echo $erro->getMessage();
    header('location:index_funcionarios.php');
}
?>