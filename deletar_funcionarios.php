<?php
include_once("conexao.php");
if (isset($_GET['id'])){
    $id=$_GET['id'];
}else{
//   header("location:ver_funcionarios.php");
}
try{
    $deletar=$conexao->query("DELETE FROM funcionarios WHERE id=$id;");
header("location:ver_funcinarios.php");
}catch(Exception $e){
    echo $e->getMessage();
}
?>