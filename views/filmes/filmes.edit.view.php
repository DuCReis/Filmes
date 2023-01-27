<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <h1>Editar Filme</h1>
    <form method="POST" action="<?php echo route('filmes/'.$filme->id);?>">
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group">
        <input type="text" class="form-control" name="nome" value="<?php echo $filme->nome; ?>" required>
      </div>
      <div class="form-group">
        <select class="custom-select" name="genero_id">
          <?php
            foreach($generos as $genero) {
              ?>
              <option
                <?php echo ($filme->genero_id==$genero->id)?'selected':'';?>
                value="<?php echo $genero->id; ?>"><?php echo $genero->nome; ?>
              </option>
              <?php
            }
          ?>
        </select> 
      </div>
        <button type="submit" class="btn btn-danger">Gravar</button>
    </form>
    </div>
</body>
</html>

