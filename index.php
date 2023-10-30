
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
  <div>
    <form action="cadastra.php" method="post">
      <label for="cpf" class="form-label">CPF:</label>
      <input type="text" name="cpf" id="cpf" class="form-control"/>
      <label for="telefone" class="form-label">Telefone:</label>
      <input type="text" name="telefone" id="telefone"   class="form-control" />
       <label for="nome" class="form-label">Nome:</label>
       <input type="text" name="nome" id="nome" class="form-control" />
        <label for="nome" class="form-label">Email:</label>
      <input type="text" name="email" id="email"  class="form-control" />
       <label for="nome" class="form-label">Senha:</label>
       <input type="password" name="senha" id="semha"  class="form-control"/>
      <label for="nome" class="form-label">Confirma Senha</label>
      <input type="password" name="confirmasenha" id="confirmasenha"  class="form-control"/>
      <label for="tipo" class="form-label"> tipo</label>
      <input type="number" name="tipo" id="tipo"  class="form-control"/>
      <button class="btn btn-primary" type="submit">Registrar</button>
    </form>
    </div>

    <a  class="btn btn-secondary mt-5" href="ver_usuario.php">Ver todos os clientes</a>
<?php
include_once('partials/footer.php');
?>
</body>
</html>