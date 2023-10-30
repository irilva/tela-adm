
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
    <form action="cadastra_funcionarios.php" method="post">
    <label for="nome" class="form-label">ID:</label>
       <input type="text" name="id" id="id" class="form-control" />
       <label for="nome" class="form-label">Nome:</label>
       <input type="text" name="nome" id="nome" class="form-control" />
        <label for="nome" class="form-label">Endereco:</label>
      <input type="text" name="endereco" id="endereco"  class="form-control" />
      <button class="btn btn-primary" type="submit">Registrar</button>
    </form>
    </div>

    <a  class="btn btn-secondary mt-5" href="ver_funcionarios.php">Ver todos os funcionarios</a>
<?php
include_once('partials/footer.php');
?>
</body>
</html>