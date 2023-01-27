<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atores</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <h1>Criar Atores</h1>
    <form method="POST" action="<?php echo route('atores'); ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="nome" placeholder="Insira o nome do ator" required>
      </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
    </div>
</body>
</html>

