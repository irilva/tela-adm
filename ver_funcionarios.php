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
    <div><a href="index_funcionarios.php" class="btn btn-primary mb-4 mt-4">Adicionar funcionarios</a></div>
    <div class="container">
    <table class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereco</th>
            <th scope="col">Ações</th>
        </tr>
    <?php
    //query libera qualquer query
    
    $selecionar_funcionario=$conexao->query("SELECT id,nome,endereco FROM funcionarios");
    while($linha=$selecionar_funcionario->fetch(PDO::FETCH_ASSOC)){
        echo" <tr>
    <td scope='row'>{$linha['id']}</td>
    <td>{$linha['nome']}</td>
    <td>{$linha['endereco']}</td>
    <td>
   <a href='editar_funcionarios.php?id=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
    <a href='deletar_funcionarios.php?id=$linha[id]'><span class='material-symbols-outlined'>delete</span></a>
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