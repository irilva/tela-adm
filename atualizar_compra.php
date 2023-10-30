<?php
include_once('./conexao.php');
$id=$_POST['id'];
$forma_de_pagamento=$_POST['forma_de_pagamento'];
$cpf=$_POST['cpf'];

echo''.$id.''.$forma_de_pagamento.''.$cpf.'';

try{
$update=$conexao->prepare("UPDATE compra SET forma_de_pagamento=:forma_de_pagamento,cpf=:cpf WHERE id=:id;");
$update->execute(
   [
    ':forma_de_pagamento'=> $forma_de_pagamento,
    ':cpf'=> $cpf,
    ':id'=> $id
   ]
   );
   return header('location:ver_compra.php');
}catch(Exception $e){
echo $e->getMessage();
}
?>