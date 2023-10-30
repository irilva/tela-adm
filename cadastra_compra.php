<?php
include_once('conexao.php');
$id=$_POST['id'];
$forma_de_pagamento=$_POST['forma_de_pagamento'];
$cpf=$_POST['cpf'];

try{
  $inserir=$conexao->prepare('INSERT INTO compra (id,forma_de_pagamento,cpf) VALUES  (:id,:forma_de_pagamento,:cpf);');
 $inserir->execute(
 [
           ':id'=>$id,
            ':forma_de_pagamento'=>$forma_de_pagamento,
            ':cpf'=>$cpf,
        ]
        );

}catch(PDOException $erro){
    echo $erro->getMessage();
    header('location:index_funcionarios.php');
}
?>