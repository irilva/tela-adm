<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('partials/header.php');
    ?>
    <div><a href="index_compra.php" class="btn btn-primary mb-4 mt-4">Adicionar Compras</a></div>
    <div class="container">
    <table class="table">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Forma de pagamento</th>
            <th scope="col">Cpf</th>
            <th scope="col">Ações</th>
        </tr>
    <?php
    //query libera qualquer query
    $select=$conexao->query('SELECT id,forma_de_pagamento,cpf FROM compra;');
    while($linha=$select->fetch(PDO::FETCH_ASSOC)){
        echo" <tr>
    <td scope='row'>{$linha['id']}</td>
    <td>{$linha['forma_de_pagamento']}</td>
    <td>{$linha['cpf']}</td>
    <td>
   <a href='editar_compra.php?id=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_compra.php?id=$linha[id]'><span class='material-symbols-outlined'>delete</span></a>
    </td>
    </tr>";
    }

    ?>
       </table>
    </div>
    <?php
include_once('partials/footer.php')
    ?>
</body>
</html>