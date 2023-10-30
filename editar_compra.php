<?php
include_once("./partials/header.php");
// url params via query
 if (isset($_GET['id'])){
    $cpf=$_GET['id'];
}//else{
 //header('location:ver_usuario.php');
//}
include_once('conexao.php');
?>
<div class="container">
<form action="atualizar_compra.php" method="post">
<?php
    //query libera qualquer query
    $select = $conexao->query("SELECT id,forma_de_pagamento,cpf FROM compra WHERE id=$id;");
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo" 
    <label for='' class='form-label'>id</label>
    <input type='text' class='form-control'  id='id' name='id' value=$linha[id] readonly/>
    <label for='' class='form-label'>forma_de_pagamento:</label>
    <input type='text' id='forma_de_pagamento' name='forma_de_pagamento' value=$linha[forma_de_pagamento] class='form-control' />
    <label for='' class='form-label'>cpf:</label>
    <input type='text' id='cpf' name='cpf' value=$linha[cpf] class='form-control' readonly/>


<button class='btn btn-success' type='submit'>Atualizar</button>
<button type='reset' class='btn btn-danger'>Limpar formulario</button> 
";   
    }
    ?>
</form>
</div>

<?php
include_once('./partials/footer.php')
?>