<?php
include_once('./conexao.php');
$id=$_POST['id'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];

echo''.$id.''.$nome.''.$endereco.'';

try{
$update=$conexao->prepare("UPDATE funcionarios SET nome=:nome,endereco=:endereco WHERE id=:id;");
$update->execute(
   [
    ':nome'=> $nome,
    ':endereco'=> $endereco,
    ':id'=> $id
   ]
   );
   return header('location:ver_funcionario.php');
}catch(Exception $e){
echo $e->getMessage();
}
?>