<?php
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=hash('sha256',$_POST['senha']);
$confirmasenha=hash('sha256',$_POST['confirmasenha']);
$tpo=$_POST['tipo'];

if($senha==$confirmasenha){
//somente usaramos prepare na insercao de dados e na atualizacao de dados

try{
    $inserir=$conexao->prepare('INSERT INTO clientes VALUES (:cpf,:nome,:telefone,:email,:senha,:tipo);');
    $inserir->execute(
        [
            ':cpf'=>$cpf,
            ':nome'=>$nome,
            ':telefone'=>$telefone,
            ':email'=>$email,
            'senha'=>$senha,
            'tipo'=>$tipo
        ]
        );
       header('location:ver_usuario.php');
}catch(PDOException $erro){
    echo $erro->getMessage();
}

}else{
    //redireciona o usuario para pagina escolhida
    header('localhost:index.php');
}
?>