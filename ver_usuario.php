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
    <div><a href="index.php" class="btn btn-primary mb-4 mt-4">Adicionar Clientes</a></div>
    <div class="container">
    <table class="table">
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    <?php
    //query libera qualquer query
    $select=$conexao->query('SELECT cpf,nome,email,telefone FROM clientes;');
    while($linha=$select->fetch(PDO::FETCH_ASSOC)){
        echo" <tr>
    <td scope='row'>{$linha['cpf']}</td>
    <td>{$linha['nome']}</td>
    <td>{$linha['email']}</td>
    <td>{$linha['telefone']}</td>
    <td>
   <a href='editar_usuario.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>
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